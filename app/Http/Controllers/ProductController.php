<?php

namespace App\Http\Controllers;

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

        if ($searchType == 'title') {
            $query->where('title', 'like', '%' . $keyword . '%');
        } elseif ($searchType == 'content') {
            $query->where('content', 'like', '%' . $keyword . '%');
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
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/images'), $imageName); // Lưu ảnh vào thư mục trên server
            $product->image = '/upload/images/' . $imageName; // Lưu đường dẫn của ảnh vào cột image trong bảng Product
        }
        $product->save();
        return redirect()->route('products.index')->with('success', 'Tạo sản phẩm thành công!');
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
