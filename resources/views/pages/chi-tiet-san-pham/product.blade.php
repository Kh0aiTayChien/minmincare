<div class=" show-product container-fluid custom-padding custom-margin ">
    <div class="row">
        <div class=" col-lg-5 col-md-12 col-xs-12 ">
            <div class="card  p-2 d-flex align-content-center justify-content-center sticky-top" style="">
                <div class="display-media">
                    <img class="card-img-top img-fluid" src="{{$product->image}}" alt="">
                </div>
                <div class=" ">
                    <div class="">
                        <div class="col-lg-12" style=" overflow-x: scroll;">
                            <div class="media-product ">
                                <div class="item">
                                    <img src="{{$product->image}}" alt="">
                                </div>
                                @foreach($mediaProducts as $media)
                                    <div class="item">
                                        <img src="{{$media->url}}" alt="">
                                    </div>
                                @endforeach
                                @if ($product->video_url)
                                    <div class="item video position-relative">
                                        <div class="position-absolute d-flex align-items-center justify-content-center h-100 w-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="red" class="bi bi-play-btn-fill" viewBox="0 0 16 16" >
                                                <path d="M0 12V4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm6.79-6.907A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
                                            </svg>
                                        </div>
                                        <a href="{{$product->video_url}}">
                                            <img src="{{$thumbnailUrl}}" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <script>
                            $(document).ready(function() {
                                $('.item:not(.video)').click(function() {
                                    $('.item').removeClass('border-green');
                                    $(this).addClass('border-green');
                                    let imageUrl = $(this).find('img').attr('src');
                                    let imageHtml = '<img src="'+imageUrl+'" alt="" class="card-img-top img-display" >';
                                    $('.display-media').html(imageHtml);
                                });
                                $('.item.video ').click(function() {
                                    $('.item').removeClass('border-green');
                                    $(this).addClass('border-green');
                                    let videoUrl = $(this).find('a').attr('href');
                                    let videoHtml = '<div class="video-wrapper">'+ '<iframe style="" id="videoPlayer" width="100%" height="" src="' + videoUrl + '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'+' </div>';
                                    $('.display-media').html(videoHtml);
                                });
                            });
                        </script>
                    </div>

                    <style>
                        .video-wrapper {
                            position: relative;
                            padding-bottom: 56.25%;
                            height: 0;
                            overflow: hidden;
                            margin-bottom: 2rem ;
                        }

                        .video-wrapper iframe {
                            position: absolute;
                            top:0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                        }

                        .card-img-top{
                            object-fit: cover;
                            margin: 1rem auto;
                        }
                        .media-product .item {
                            flex: 0 0 auto; /* Không cho phép các phần tử co lại */
                            margin-right: 10px;
                            height: 5rem;
                            width: 5rem;
                            font-size: 3rem;
                            cursor: pointer;
                            position: relative;
                            overflow: hidden;
                            object-fit: cover
                        }

                        .media-product .item img {
                            height: 5.5rem;
                            width: 5rem;
                            object-fit: cover;
                        }

                        .media-product {
                            display: flex;
                        }
                        .mitr-small {
                            font-family: Mitr-Medium, Mitr, sans-serif;
                            font-size: x-small;
                            letter-spacing: 1px;
                            color: gray;
                        }

                        .mitr-medium {
                            font-family: Mitr-Medium, Mitr, sans-serif;
                            font-size: medium;
                        }

                        .mitr-big {
                            font-family: Mitr-Medium, Mitr, sans-serif;
                            font-size: x-large;
                        }
                        .border-green{
                            border: 3px solid #59843d !important
                        }
                        .green-text {
                            color: #59843d;
                        }
                        .orange-text {
                            color: #F79420
                        }

                    </style>
                </div>
            </div>
        </div>
        <div class="description-product col-xl-7 col-lg-7 col-md-12 col-xs-12  ">
            <div class="card mb-3 card-des">
                <div class="card-body">
                    <div class="main-info h2 mitr-big green-text">
                        {{$product->name}}
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="#fed506"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="#fed506"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="#fed506"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="#fed506"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="#fed506"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                    </div>
                    <div class="h3 mitr-big mt-2 green-text">
                        Giá:
                        <span class="orange-text">
                            {{ number_format($product->price, 0, ',', '.') }}VNĐ
                        </span>
                    </div>
                    <div class="mb-3 mt-3 d-flex justify-content-start align-content-center">
                        <button class="btn btn-outline-white btn-lg rounded-pill shadow-effect
                                border-white text-white border-2 green-bg mitr-medium buy-button button-shake" data-id="{{$product->id}}">
                            <div class="mx-5">THÊM VÀO GIỎ HÀNG</div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="main-info h2 text-center mitr-big green-text">
                        MÔ TẢ SẢN PHẨM
                    </div>
                    <div class="text-justify card-text">
                        {!! $product->description!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .show-product{
        max-width: 100%;
    }
    .card{
        width: 100%;
        border: unset;
    }
    .custom-padding {
        padding: 2rem 8rem 2rem 8rem;
    }
    @media (max-width: 1200px) {
        .media-card{
            height: 60vh !important;
        }
    }
    @media (max-width: 800px) {
        .custom-padding {
            padding: 2rem;
        }
        .media-card{
            height: 70vh !important;
        }
        .card{
            z-index: unset;
        }
        .custom-margin {
            margin-top: 2rem !important;
        }
        .card-des{
            display: none;
        }
    }

    .custom-margin {
        margin-top: 10rem;
    }
    body{
        background-color: whitesmoke;
    }
</style>
<script>
    $(document).ready(function() {
        $('.image img').addClass('img-fluid');
        $('.image ').addClass('figure-image ');
    });
</script>
