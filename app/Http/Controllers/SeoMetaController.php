<?php

namespace App\Http\Controllers;

use App\Models\SeoMeta;
use Illuminate\Http\Request;

class SeoMetaController extends Controller
{

    public function edit()
    {
        $seoMeta = SeoMeta::first();
        return view('admin.seoHomePage.edit', ['seoMeta' => $seoMeta]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|',
            'canonical_url' => 'required',
            'description' => 'required',
            'og_description' => 'required',
            'og_title' => 'required',
            'og_url' => 'required',
            'og_type' => 'required',
            'og_image' => 'required',
            'twitter_title' => '',
            'twitter_site' => '',
            'jsonld_description' => 'required',
            'jsonld_image' => 'required',
        ], [
            'title.required' => 'Không được để trống',
            'canonical_url.required' => 'Không được để trống',
            'description.required' => 'Không được để trống',
            'og_title.required' => 'Không được để trống',
            'og_url.required' => 'Không được để trống',
            'og_type.required' => 'Không được để trống',
            'og_image.required' => 'Không được để trống',
            'twitter_title' => '',
            'twitter_site' => '',
            'jsonld_description.required' => 'Không được để trống',
            'jsonld_image.required' => 'Không được để trống'
        ]);
        $seoMeta = SeoMeta::first();

        if ($seoMeta) {
            $seoMeta->title = $validatedData['title'];
            $seoMeta->canonical_url = $validatedData['canonical_url'];
            $seoMeta->description = $validatedData['description'];
            $seoMeta->og_description = $validatedData['og_description'];
            $seoMeta->og_title = $validatedData['og_title'];
            $seoMeta->og_url = $validatedData['og_url'];
            $seoMeta->og_type = $validatedData['og_type'];
            $seoMeta->og_image = $validatedData['og_image'];
            $seoMeta->twitter_title = $validatedData['twitter_title'];
            $seoMeta->twitter_site = $validatedData['twitter_site'];
            $seoMeta->jsonld_description = $validatedData['jsonld_description'];
            $seoMeta->jsonld_image = $validatedData['jsonld_image'];

            $seoMeta->save();
            return redirect()->route('admin.seoHomePage.edit')->with('success', 'Cập nhật seo thành công!');
        }
    }
}
