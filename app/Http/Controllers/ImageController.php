<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Helpers\InterventionImage;

class ImageController extends Controller
{
    public function index(Request $request){
        $searchType = $request->input('search_type');
        $keyword = $request->input('search');
        $paginate = $request->input('paginate');

        $query = Image::query();

        if ($searchType == 'name') {
            $query->where('name', 'like', '%' . $keyword . '%');
        } elseif ($searchType == 'category') {
            $query->whereHas('category', function ($query) use ($keyword) {
                $query->where('title', 'like', '%' . $keyword . '%');
            });
        }
        $images = $query->paginate($paginate);
        return view('admin/image/index',
            compact('images' , 'paginate', 'searchType'));
    }

    public function create(){
        $categories = Category::where('type', 2)->get();
        return view('admin/image/create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category' => 'required',
        ], [

        ]);
        $image = new Image();

        if ($request->hasFile('image')) {
            $uploadedImage = $request->file('image');
            $imageName = $uploadedImage->getClientOriginalName();

            $old_image = InterventionImage::make($uploadedImage);
            $overlay = InterventionImage::make(public_path('images/sec1/rectangle-black.png'))->resize($old_image->getWidth(), $old_image->getHeight());
            $new_image= $old_image->insert($overlay, 'top-left', 0, 0);
            $quality = 100;
            $new_image->save(public_path('uploads/images/') . $imageName, $quality);
            $image->image_url = '/uploads/images/' .$imageName;
            $image->name = $imageName;
        }
        $image->category_id = $validatedData['category'];
        $image->save();

        return redirect()->route('images.index')->with('success', 'Tạo ảnh mới thành công!');
    }

    public function edit($id)
    {
        $categories = Category::where('type',2)->get();
        $image = Image::findOrFail($id);
        return view('admin/image/edit', ['image' => $image, 'categories' => $categories] );
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'category' => 'required',
        ], [

        ]);

        $image = Image::findOrFail($id);
            $old_image_path = $image->image_url;

        if ($request->hasFile('image')) {
            $uploadedImage = $request->file('image');
            $imageName = $uploadedImage->getClientOriginalName();

            $old_image = InterventionImage::make($uploadedImage);
            $overlay = InterventionImage::make(public_path('images/sec1/rectangle-black.png'))->resize($old_image->getWidth(), $old_image->getHeight());
            $new_image= $old_image->insert($overlay, 'top-left', 0, 0);
            $quality = 100;
            $new_image->save(public_path('uploads/images/') . $imageName, $quality);
            $image->image_url = '/uploads/images/' .$imageName;
            $image->name = $imageName;
        }
        $image->category_id = $validatedData['category'];
        $image->save();

        if (file_exists(public_path($old_image_path ))) {
            unlink(public_path($old_image_path));
        }

        return redirect()->route('images.index')->with('success', 'Cập nhật ảnh mới thành công!');
    }

    public function destroy($id)
    {
        $image = Image::findOrFail($id);
        $imagePath = public_path($image->image_url);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $image->delete();
    }
}
