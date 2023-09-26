<?php

namespace App\Http\Controllers;

use App\Models\MediaProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class MediaProductController extends Controller
{
    public function store(Request $request)
    {
        foreach ($request->file('files') as $image) {
            $mediaproduct = new MediaProduct();
            $mediaproduct->type = 1;

            if ($image) {
                $imageName = $image->getClientOriginalName();
                $image->move(public_path('uploads/images'), $imageName);
                $mediaproduct->url = '/uploads/images/' . $imageName;
            }
            $mediaproduct->save();
        }
    }
    public function update(Request $request)
    {
        $mediaProducts = MediaProduct::where('product_id', $request->id)->get();
        foreach ($mediaProducts as $mediaProduct) {
            $mediaProduct->delete();
        }

        foreach ($request->file('files') as $image) {
            $mediaproduct = new MediaProduct();
            $mediaproduct->type = 1;
            $mediaproduct->product_id = $request->id;
            if ($image) {
                $imageName = $image->getClientOriginalName();
                $image->move(public_path('uploads/images'), $imageName);
                $mediaproduct->url = '/uploads/images/' . $imageName;
            }
            $mediaproduct->save();
        }
    }
    public function fix (){
        $maxProductId = Product::max('id');
        $product_id = (intval($maxProductId));
        MediaProduct::whereNull('product_id')->update(['product_id' => $product_id]);
        return redirect()->route('products.index')->with('success', 'Tạo sản phẩm thành công!');
    }
}
