<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\MediaProduct;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        MediaProduct::whereNull('product_id')->delete();
        $searchType = $request->input('search_type');
        $keyword = $request->input('search');
        $paginate = $request->input('paginate');

        $query = Product::query();

        if ($searchType == 'name') {
            $query->where('name', 'like', '%' . $keyword . '%');
        } elseif ($searchType == 'price') {
            $query->where('price', 'like', '%' . $keyword . '%');
        }
        $products = $query->paginate($paginate);
        return view('admin/product/index',
            compact('products' , 'paginate', 'searchType'));
    }

    public function create()
    {
        $categories = Category::where('type', 3)->get();
        return view('admin/product/create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|unique:products,name',
            'price' => 'required|numeric',
            'description' => 'required',
            'slug' => 'required|unique:products,slug',
            'category' => 'required',
        ], [
            'name.unique' => 'Sản phẩm đã tồn tại',
            'name.required' => 'Không được để trống',
            'slug.unique' => 'Link đã tồn tại',
            'slug.required' => 'Không được để trống',
            'category.required' => 'Không được để trống'
        ]);
        $product = new Product();
        $product->name = $validatedData['name'];
        $product->price = $validatedData['price'];
        $product->description = $validatedData['description'];
        $product->slug = $validatedData['slug'];
        $product->category_id = $validatedData['category'];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('uploads/images'), $imageName); // Lưu ảnh vào thư mục trên server
            $product->image = '/uploads/images/' . $imageName; // Lưu đường dẫn của ảnh vào cột image trong bảng Product
        }
        $product->video_url = $request->input('video_url');
        $product->save();
        return redirect()->route('admin.mediaProduct.fix');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $categories = Category::where('type', 3)->get();
        $product = Product::findOrFail($id);
        $base64Images = [];

        $mediaProducts = MediaProduct::where('product_id', $product->id)->get();

        foreach ($mediaProducts as $mediaProduct) {
            $imagePath = public_path($mediaProduct->url);

            if (file_exists($imagePath)) {
                $imageData = base64_encode(file_get_contents($imagePath));
                $base64Images[] = 'data:image/png;base64,' . $imageData;
            }
        }
        return view('admin/product/edit', ['product' => $product, 'mediaProducts' => $base64Images, 'categories' => $categories] );
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|',
            'price' => 'required|numeric',
            'description' => 'required',
            'slug' => 'required',
            'category' => 'required'
        ], [
            'name.unique' => 'Sản phẩm đã tồn tại',
            'price.required' => 'Không được để trống',
            'description.required' => 'Không được để trống',
            'slug.required' => 'Không được để trống',
            'category.required' => 'Không được để trống'
        ]);
        $product = Product::findOrFail($id);
        $product->name = $validatedData['name'];
        $product->price = $validatedData['price'];
        $product->description = $validatedData['description'];
        $product->slug = $validatedData['slug'];
        $product->category_id = $validatedData['category'];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('uploads/images'), $imageName); // Lưu ảnh vào thư mục trên server
            $product->image = '/uploads/images/' . $imageName; // Lưu đường dẫn của ảnh vào cột image trong bảng Product
        }
        $product->video_url = $request->input('video_url');
        $product->save();
        return redirect()->route('products.index')->with('success', 'Cập nhật sản phẩm thành công!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
    }
}
