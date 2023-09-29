<div class=" container-fluid custom-padding custom-margin ">
    <div class="row">
        <div class="media-product col-lg-3 col-md-12 col-xs-12 ">
            <div class="card media-card p-2 sticky-top" style="height: 50vh">
                <div class="display-media card-img-top d-flex align-content-center justify-content-center">
                    <img class="card-img-top img-fluid" src="{{$product->image}}" alt="">
                </div>

                <div class="card-body ">

                    <div class="row">
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
                                    <div class="item video">
                                        <a href="{{$product->video_url}}"></a>
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
                                    let videoHtml = '<iframe id="videoPlayer" width="800px" height="300px" src="' + videoUrl + '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
                                    $('.display-media').html(videoHtml);
                                });
                                var $headerPC = $('.headerpc');
                                var lastScrollTop = 0;

                                var $headerPC = $('.headerpc');
                                var lastScrollTop = 0;
                                var isScrollingUp = false;

                                $(window).scroll(function() {
                                    var st = $(this).scrollTop();

                                    if (st > lastScrollTop) {
                                        // Cuộn xuống
                                        isScrollingUp = false;
                                    } else {
                                        // Cuộn lên
                                        isScrollingUp = true;
                                    }

                                    lastScrollTop = st;

                                    if (st === 0 && isScrollingUp) {
                                        $headerPC.css('top', '0');
                                    } else {
                                        $headerPC.css('top', -$headerPC.outerHeight());
                                    }
                                });
                            });
                        </script>
                    </div>

                    <style>

                        .card-img-top{
                            object-fit: cover;
                        }
                        .media-product .item {
                            flex: 0 0 auto; /* Không cho phép các phần tử co lại */
                            margin-right: 10px;
                            height: 5rem;
                            width: 5rem;
                            border: 1px solid grey;
                            font-size: 3rem;
                            cursor: pointer;
                            position: relative;
                            overflow: hidden;
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
        <div class="description-product col-xl-6 col-lg-5 col-md-12 col-xs-12  mt-2">
            <div class="card mb-3 card-des">
                <div class="card-body">
                    <div class="main-info h2 mitr-big green-text">
                        {{$product->name}}
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#fed506}</style><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#fed506}</style><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#fed506}</style><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#fed506}</style><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#fed506}</style><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                    </div>
                    <div class="h3 mitr-big mt-2 green-text">
                        Giá:
                        <span class="orange-text">
                            {{ number_format($product->price, 0, ',', '.') }}VNĐ
                        </span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="main-info h2 text-center mitr-big green-text">
                        MÔ TẢ SẢN PHẨM
                    </div>
                    <div class="text-justify card-text">
                        <p class="card-text">{!! preg_replace('/<[^>]*>/', '', strip_tags($product->description)) !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="description-product col-xl-3 col-lg-4 col-md-12 col-xs-12 mt-2">
            <div class="card mb-3 sticky-top">
                <div class="card-body">
                    <div class="main-info h2 mitr-big green-text">
                        {{$product->name}}
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#fed506}</style><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#fed506}</style><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#fed506}</style><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#fed506}</style><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#fed506}</style><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                    </div>
                    <div class="h3 mitr-big mt-2 green-text">
                        Giá:
                        <span class="orange-text">
                            {{ number_format($product->price, 0, ',', '.') }}VNĐ
                        </span>
                    </div>
                    <div class="mb-3 mt-3 d-flex justify-content-center align-content-center">
                        <button class="btn btn-outline-white btn-block rounded-pill shadow-effect w-100
                                border-white text-white border-2 green-bg mitr-medium buy-button button-shake" data-id="{{$product->id}}">
                            <div class="mx-5">THÊM VÀO GIỎ HÀNG</div>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<style>

    .card{
        width: 100%;
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
