@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Bài viết mới') }}</h1>

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
                        reader.onload = function(){
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
                                <h5 class="font-weight-bold">Ảnh cho bài viết</h5>
                                <img src="{{$image->image_url}}" style="width: 300px; height: 200px" alt="">
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

                    <form method="POST" action="{{route('images.update',['image' => $image->id ])}}" autocomplete="off" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <input type="hidden" name="_method" value="PATCH">

                        <h6 class="heading-small text-muted mb-4">CẬP NHẬT ẢNH</h6>

                        <div class="pl-lg-4">
                            <div class="row">
{{--                                <div class="col-lg-6">--}}
{{--                                    <div class="form-group focused">--}}
{{--                                        <label class="form-control-label" for="title">Tiêu đề ảnh<span--}}
{{--                                                class="small text-danger">*</span></label>--}}
{{--                                        <input type="text" id="name" class="form-control" name="name"--}}
{{--                                               value="{{$image->name}}"--}}
{{--                                               placeholder="tên ảnh">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="category">Chủ đề<span class="small text-danger">*</span></label>
                                        <select id="category" class="form-control" name="category">
                                            <option value="">-- Chọn chủ đề --</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ $category->id == $image->category_id ? 'selected' : '' }}>{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="image"> Upload ảnh tại đây <span
                                                class="small text-danger">*</span></label>
                                        <input type="file" id="image" class="form-control" name="image"
                                               placeholder="chọn file ảnh" onchange="previewImage(event)">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="pl-lg-4 mt-5">
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>
    <script src="{{asset('js/ckEditorMake.js')}}"></script>
    <script src="{{asset('js/slugConvert.js')}}"></script>
@endsection

