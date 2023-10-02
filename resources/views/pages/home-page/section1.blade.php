<div class="section1 position-relative d-flex justify-content-center align-items-center">
    <div class=" d-flex  align-items-center  position-absolute row flex-column-reverse"
         style="z-index: 200; padding-top: 30%; height: 100.2%; transform: translateY(1px)">

        <div class="position-relative d-flex flex-column-reverse">
            <a href="#sec2" class="arrow-down position-absolute d-none d-md-block">
                <img src="{{asset('images/sec1/arrow-down.png')}}" alt="" class="btn-shake-UpDown">
            </a>
            <a href="#sec2mb" class="arrow-down position-absolute d-md-none">
                <img src="{{asset('images/sec1/arrow-down.png')}}" alt="" class="btn-shake-UpDown">
            </a>
            <img src="{{asset('images/sec1/btn-curve-bot.png')}}" alt="" class="mt-5 btn-curve">
            <img src="{{asset('images/sec1/btn-curve-mobile.png')}}" alt="" class="mt-5 btn-curve-mobile">
        </div>

        <div class="call-out-button d-flex justify-content-center align-items-center mb-5">
            <button
                class="btn register btn-outline-white btn-lg rounded-pill border-white text-white border-2 green-bg me-3 mitr-medium shadow-effect button-shake">
                <div class="px-4">ĐĂNG KÍ ĐẠI LÝ</div>
            </button>
            <script>
                $(document).ready(function () {
                    $('.register').click(function () {
                        if (window.location.pathname.includes("/dai-ly") || window.location.pathname.includes("/gioi-thieu")) {
                            window.location.href = '/';
                            return false;
                        }
                        $('html, body').animate({
                            scrollTop: $('.sec10pc').offset().top
                        }, 'medium');
                    });
                });

            </script>
            <button
                class="btn btn-outline-white btn-lg rounded-pill border-white text-white border-2 ms-3 mitr-medium shadow-effect button-shake">
                <a href="{{route('homepage.product.index')}}" style="text-decoration: unset; color: unset">
                    <div class="px-4">MUA SẢN PHẨM</div>
                </a>
            </button>
        </div>

    </div>
    <div id="carouselExampleControls" class="carousel slide w-100 d-none d-md-block" data-bs-ride="carousel"
         data-interval="5000">
        <div class="carousel-inner">
            @foreach($images as $key => $image)
                <div class="carousel-item  {{$key == 0 ? 'active' : ''}}">
                    <img src="{{$image->image_url}}" class="img-slide" alt="img-slide">
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev button-shake" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
            <img src="{{asset('images/arrow-l.png')}}" alt="" style="">
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next button-shake" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
            <img src="{{asset('images/arrow-r.png')}}" alt="" style="">
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div id="carousel_mobile" class="carousel slide w-100 d-md-none" data-bs-ride="carousel" data-interval="5000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/sec1/mobile/Mobile01.png')}}" class="img-slide" alt="img-slide">
            </div>
            <div class="carousel-item ">
                <img src="{{asset('images/sec1/mobile/Mobile02.png')}}" class="img-slide" alt="img-slide">
            </div>
            <div class="carousel-item ">
                <img src="{{asset('images/sec1/mobile/Mobile03.png')}}" class="img-slide" alt="img-slide">
            </div>
            <div class="carousel-item ">
                <img src="{{asset('images/sec1/mobile/Mobile04.png')}}" class="img-slide" alt="img-slide">
            </div>
        </div>
        <button class="carousel-control-prev button-shake" type="button" data-bs-target="#carousel_mobile"
                data-bs-slide="prev">
            <img src="{{asset('images/arrow-l.png')}}" alt="" style="">
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next button-shake" type="button" data-bs-target="#carousel_mobile"
                data-bs-slide="next">
            <img src="{{asset('images/arrow-r.png')}}" alt="" style="">
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<style>
    .btn-primary:hover, .btn-primary:focus, .btn-primary:active,
    .btn-primary:active:focus:not(:disabled):not(.disabled),
    .btn:focus, .btn:active, .btn:hover {
        box-shadow: none !important;
        outline: 0;
    }

    .btn-curve {
        width: 100%;
    }

    .btn-curve-mobile {
        display: none;
    }

    .arrow-down {
        margin-left: 49%;
        margin-bottom: 5px;
        scale: 70%;
        cursor: pointer;
        /*transition: transform 0.5s ease;*/
    }

    /*.arrow-down:hover {*/
    /*    transform: translate(0%, -70%);*/
    /*}*/
    .img-slide {
        object-fit: cover;
        width: 100%;
        height: 100vh;
        object-position: center;
    }

    .section1 {
        height: 100vh;
        overflow: hidden;
    }

    @media screen and (min-aspect-ratio: 0.8/1) and (max-aspect-ratio: 8/5) {
        .carousel-control-prev {
            float: left;
            margin-left: -5%;
            scale: 70%;
            z-index: 999;
            margin-top: 40% !important;
            height: 70px; /* Đặt độ dài mới */
        }

        .carousel-control-next {
            scale: 70%;
            float: right;
            margin-right: -5%;
            margin-top: 40% !important;
            height: 70px; /* Đặt độ dài mới */
            z-index: 999;
        }
    }
    .carousel-control-prev {
        float: left;
        margin-left: -5%;
        scale: 70%;
        z-index: 999;
        margin-top: 28%;
        height: 70px; /* Đặt độ dài mới */
    }

    .carousel-control-next {
        scale: 70%;
        float: right;
        margin-right: -5%;
        margin-top: 28%;
        height: 70px; /* Đặt độ dài mới */
        z-index: 999;
    }

    .btn-outline-white {
        border-color: white;
        border-width: 5px;
    }

    .btn-outline-white:hover {
        background-color: #59843d;
    }

    .green-bg {
        background-color: #59843d;
    }

    .mitr-medium {
        font-family: Mitr-Medium, Mitr, sans-serif;
    }

    @media only screen and (max-width: 1200px) {
        .arrow-down {
            margin-left: 48%;
            margin-bottom: 3px;
            scale: 50%;
        }
    }

    @media only screen and (max-width: 800px) {
        .call-out-button {
            display: none !important;
        }

        .btn-curve {
            display: none;
        }

        .btn-curve-mobile {
            display: block;
            width: 100vw;
        }

        .arrow-down {
            margin-left: 45%;
            margin-bottom: 2px;
            scale: 50%;
        }

        .carousel-control-prev {
            margin-left: 1px;
            scale: 50%;
            z-index: 999;
            margin-top: 85vw;
        }

        .carousel-control-next {
            margin-right: 1px;
            scale: 50%;
            z-index: 999;
            margin-top: 85vw;
        }
    }
</style>
