@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Sản phẩm mới') }}</h1>

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
                        }
                        reader.readAsDataURL(event.target.files[0]);
                    }
                </script>
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h5 class="font-weight-bold">Ảnh đại diện sản phẩm</h5>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="card shadow mb-4 " style="overflow-x: auto" ;>
                <script>
                    function previewImage(event) {
                        var reader = new FileReader();
                        reader.onload = function () {
                            var preview = document.getElementById('image-review');
                            preview.src = reader.result;
                        }
                        reader.readAsDataURL(event.target.files[0]);
                    }
                </script>
                <div class="card-body" style="width: 100%;overflow: scroll;white-space: nowrap;" ;>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h5 class="font-weight-bold">Ảnh và video minh họa</h5>
                            </div>
                            <div class="media-product ">
                                <span class="item d-flex justify-content-center align-content-center me-2">
                                    <div class="plus-item">+</div>
                                    <input type="file" accept="image/*" style="display:none;">
                                </span>
                            </div>
                        </div>

                    </div>
                    <style>
                        .media-product .item {
                            flex: 0 0 auto; /* Không cho phép các phần tử co lại */
                            margin-right: 10px;
                            height: 5rem;
                            width: 5rem;
                            border: 1px solid lime;
                            font-size: 3rem;
                            cursor: pointer;
                            position: relative;
                        }

                        .media-product .item img {
                            max-width: 5rem;
                            max-height: 5rem
                        }

                        .media-product {
                            display: flex;
                            white-space: nowrap;
                        }

                        .delete-button {
                            position: absolute;
                            top: 0;
                            right: 0;
                            cursor: pointer;
                            color: red;
                            font-weight: bold;
                            font-size: 1.5rem;
                            background: transparent;
                            border: none;
                            outline: none;
                            padding: 0;
                            margin: 0;
                            z-index: 999; /* Đảm bảo nút xóa hiển thị trên cùng */
                        }
                    </style>
                    <script type="text/javascript">
                        $(document).ready(function (e) {
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });

                            $('#uploadButton').click(function (e) {

                                var formData = new FormData();

                                $('.media-product .item img').each(function (index) {
                                    var imageData = $(this).attr('src');
                                    var file = dataURLtoFile(imageData, 'image_' + index + '.png');
                                    formData.append('files[]', file);
                                });

                                $.ajax({
                                    type: 'POST',
                                    url: "{{ route('admin.mediaProduct.upload') }}",
                                    data: formData,
                                    cache: false,
                                    contentType: false,
                                    processData: false,
                                    dataType: 'json',
                                    success: function (data) {
                                        alert('Files have been uploaded using jQuery ajax');
                                    },
                                    error: function (data) {
                                        alert(data.responseJSON.errors.files[0]);
                                    }
                                });
                            });

                            // Hàm chuyển base64 sang File object
                            function dataURLtoFile(dataurl, filename) {
                                var arr = dataurl.split(','),
                                    mime = arr[0].match(/:(.*?);/)[1],
                                    bstr = atob(arr[1]),
                                    n = bstr.length,
                                    u8arr = new Uint8Array(n);
                                while (n--) {
                                    u8arr[n] = bstr.charCodeAt(n);
                                }
                                return new File([u8arr], filename, {type: mime});
                            }
                        });
                    </script>
                    <script>
                        $(document).ready(function () {
                            $(document).on('click', '.plus-item', function () {
                                $(this).siblings('input[type="file"]').click();
                            });

                            $(document).on('change', '.media-product input[type="file"]', function () {
                                const file = this.files[0];
                                const reader = new FileReader();
                                const deleteButton = $('<div>').addClass('delete-button').text('x');

                                reader.onload = function () {
                                    const img = $('<img>').attr('src', reader.result);
                                    const carouselItem = $('<div>').addClass('item');
                                    const deleteButton = $('<div>').addClass('delete-button').text('x');
                                    const row = $('<div>').addClass('row');
                                    const col = $('<div>').addClass('col').append(img);
                                    row.append(col);
                                    carouselItem.append(deleteButton).append(row);

                                    $('.media-product').append(carouselItem);


                                }

                                reader.readAsDataURL(file);
                            });
                        });
                        $(document).on('click', '.delete-button', function () {
                            $(this).parent('.item').remove();

                            // Cuộn sang trái
                            $('.media-product').animate({
                                scrollLeft: '-=200'
                            }, 500);
                        });
                    </script>
                </div>

            </div>

        </div>

        <div class="col-lg-8 order-lg-1">

            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Điền vào trường dưới đây</h6>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{route('products.store')}}" autocomplete="off"
                          enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <input type="hidden" name="_method" value="POST">

                        <h6 class="heading-small text-muted mb-4">Tạo bài viết mới </h6>

                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="title">Tên sản phẩm<span
                                                class="small text-danger">*</span></label>
                                        <input type="text" id="title" class="form-control" name="name"
                                               placeholder="Tên sản phẩm">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="title">Giá cả<span
                                                class="small text-danger">*</span></label>
                                        <input type="text" id="price" class="form-control" name="price"
                                               placeholder="Giá sản phẩm">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="category">Chủ đề<span class="small text-danger">*</span></label>
                                        <select id="category" class="form-control" name="category">
                                            <option value="">-- Chọn chủ đề --</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="title">Slug<span
                                                class="small text-danger">*</span></label>
                                        <input type="text" id="slug" class="form-control" name="slug"
                                               placeholder="Link không dấu">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="title">Link video minh họa</label>
                                        <input type="text" id="video_url" class="form-control" name="video_url"
                                               placeholder="Link Video">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="content">Miêu tả về sản phẩm <span
                                                class="small text-danger">*</span><span
                                                class="small text-danger">*</span></label>
                                        <textarea class="form-control" id="editor" name="description"
                                                  rows="10"> </textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="image"> Ảnh cho bài viết <span
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
                                    <button id="uploadButton" type="submit" class="btn btn-primary">Save Changes
                                    </button>
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

