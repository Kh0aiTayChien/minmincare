<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
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
        return view('admin/product/create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|unique:products,name',
            'price' => 'required|numeric',
            'description' => 'required',
        ], [
            'name.unique' => 'Sản phẩm đã tồn tại',
            'name.required' => 'Không được để trống'
        ]);
        $product = new Product();
        $product->name = $validatedData['name'];
        $product->price = $validatedData['price'];
        $product->description = $validatedData['description'];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('uploads/images'), $imageName); // Lưu ảnh vào thư mục trên server
            $product->image = '/uploads/images/' . $imageName; // Lưu đường dẫn của ảnh vào cột image trong bảng Product
        }
        $product->save();
        return redirect()->route('products.index')->with('success', 'Tạo sản phẩm thành công!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin/product/edit', ['product' => $product] );
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|',
            'price' => 'required|numeric',
            'description' => 'required',
        ], [
            'name.unique' => 'Sản phẩm đã tồn tại',
            'price.required' => 'Không được để trống',
            'description.required' => 'Không được để trống'
        ]);
        $product = Product::findOrFail($id);
        $product->name = $validatedData['name'];
        $product->price = $validatedData['price'];
        $product->description = $validatedData['description'];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('uploads/images'), $imageName); // Lưu ảnh vào thư mục trên server
            $product->image = '/uploads/images/' . $imageName; // Lưu đường dẫn của ảnh vào cột image trong bảng Product
        }
        $product->save();
        return redirect()->route('products.index')->with('success', 'Cập nhật sản phẩm thành công!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
    }
}
