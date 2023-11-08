@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('THÔNG TIN SEO TRANG CHỦ') }}</h1>

    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger border-left-danger" role="alert">
            <ul class="pl-4 my-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">

        <div class="col-lg-4 order-lg-2">

            <div class="card shadow mb-4">
                <div class="card-profile-image mt-4">
                    <figure class="rounded-circle avatar avatar font-weight-bold"
                            style="font-size: 60px; height: 180px; width: 180px;"
                            data-initial="{{ Auth::user()->name[0] }}"></figure>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h5 class="font-weight-bold">{{  Auth::user()->fullName }}</h5>
                                <p>Administrator</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-profile-image mt-4 ">
                    <img id="image-review" src="" alt="" style="max-width: 100%; max-height: 200px;">
                </div>
                <script>
                    function previewImage(event) {
                        var reader = new FileReader();
                        reader.onload = function () {
                            var preview = document.getElementById('image-review');
                            preview.src = reader.result;

                            var Element = document.querySelector('.title-image');
                            Element.classList.remove('d-none');
                        }
                        reader.readAsDataURL(event.target.files[0]);
                    }
                </script>
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h5 class="font-weight-bold">Ảnh seo hiển thị</h5>
                                <img src="{{$seoMeta->og_image}}" style="width: 300px; height: 200px" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="col-lg-8 order-lg-1">

            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Điền vào trường dưới đây</h6>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{route('admin.seoHomePage.update')}}" autocomplete="off" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
{{--                        <input type="hidden" name="_method" value="PATCH">--}}

                        <h6 class="heading-small text-muted mb-4">CẬP NHẬT THÔNG TIN SEO</h6>

                        <!-- Tiêu đề -->
                        <div class="form-group">
                            <label class="form-control-label" for="title">Tiêu đề<span class="small text-danger">*</span></label>
                            <input type="text" id="title" class="form-control" name="title" value="{{$seoMeta->title}}">
                        </div>

                        <!-- Canonical URL -->
                        <div class="form-group">
                            <label class="form-control-label" for="canonical_url">Canonical URL<span class="small text-danger">*</span></label>
                            <input type="text" id="canonical_url" class="form-control" name="canonical_url" value="{{$seoMeta->canonical_url}}">
                        </div>

                        <!-- Mô tả -->
                        <div class="form-group">
                            <label class="form-control-label" for="description">Mô tả<span class="small text-danger">*</span></label>
                            <input type="text" id="description" class="form-control" name="description" value="{{$seoMeta->description}}">
                        </div>

                        <!-- OG Description -->
                        <div class="form-group">
                            <label class="form-control-label" for="og_description">OG Description<span class="small text-danger">*</span></label>
                            <input type="text" id="og_description" class="form-control" name="og_description" value="{{$seoMeta->og_description}}">
                        </div>

                        <!-- OG Title -->
                        <div class="form-group">
                            <label class="form-control-label" for="og_title">OG Title<span class="small text-danger">*</span></label>
                            <input type="text" id="og_title" class="form-control" name="og_title" value="{{$seoMeta->og_title}}">
                        </div>

                        <!-- OG URL -->
                        <div class="form-group">
                            <label class="form-control-label" for="og_url">OG URL<span class="small text-danger">*</span></label>
                            <input type="text" id="og_url" class="form-control" name="og_url" value="{{$seoMeta->og_url}}">
                        </div>

                        <!-- OG Type -->
                        <div class="form-group">
                            <label class="form-control-label" for="og_type">OG Type<span class="small text-danger">*</span></label>
                            <input type="text" id="og_type" class="form-control" name="og_type" value="{{$seoMeta->og_type}}">
                        </div>

                        <!-- OG Image -->
                        <div class="form-group">
                            <label class="form-control-label" for="og_image">OG Image<span class="small text-danger">*</span></label>
                            <input type="text" id="og_image" class="form-control" name="og_image" value="{{$seoMeta->og_image}}">
                        </div>

                        <!-- Twitter Title -->
                        <div class="form-group">
                            <label class="form-control-label" for="twitter_title">Twitter Title<span class="small text-info"> không bắt buộc</span></label>
                            <input type="text" id="twitter_title" class="form-control" name="twitter_title" value="{{$seoMeta->twitter_title}}">
                        </div>

                        <!-- Twitter Site -->
                        <div class="form-group">
                            <label class="form-control-label" for="twitter_site">Twitter Site<span class="small text-info"> không bắt buộc</span></label>
                            <input type="text" id="twitter_site" class="form-control" name="twitter_site" value="{{$seoMeta->twitter_site}}">
                        </div>

                        <!-- JSONLD Description -->
                        <div class="form-group">
                            <label class="form-control-label" for="jsonld_description">JSONLD Description<span class="small text-danger">*</span></label>
                            <input type="text" id="jsonld_description" class="form-control" name="jsonld_description" value="{{$seoMeta->jsonld_description}}">
                        </div>

                        <!-- JSONLD Image -->
                        <div class="form-group">
                            <label class="form-control-label" for="jsonld_image">JSONLD Image<span class="small text-danger">*</span></label>
                            <input type="text" id="jsonld_image" class="form-control" name="jsonld_image" value="{{$seoMeta->jsonld_image}}">
                        </div>

                        <!-- Button -->
                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                        </div>
                    </form>


                </div>

            </div>

        </div>

    </div>
    <script src="{{asset('js/ckEditorMake.js')}}"></script>
    <script src="{{asset('js/slugConvert.js')}}"></script>
@endsection

