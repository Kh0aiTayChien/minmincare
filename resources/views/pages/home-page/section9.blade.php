<div class="section-9">
    <div class="d-md-flex d-none align-content-center justify-content-center img-sec9 ">
        <img src="{{asset('images/sec9/tintuc.png')}}" alt="" style="" class="img-fluid img-sec9-test">
    </div>
    <div class="headersec4-product d-block d-md-none">
        <p class="header-sec9-mb-1">Tin tức</p>
        <p class="header-sec9-mb-2">MIN MIN CARE</p>
    </div>
    <div class="row" style="">
        <div class="col"></div>
        <div class="col mt-4 mb-4">
        </div>
    </div>

    <div class="slick-carousel position-relative">
        <button class="custom-prev-arrow-9 " aria-label="Previous">
            <img src="{{asset('images/arrow-l.png')}}" alt="Previous" class="shadow-effect button-shake"/>
        </button>
        <button class="custom-next-arrow-9 " aria-label="Next">
            <img src="{{asset('images/arrow-r.png')}}" alt="Next" class="shadow-effect button-shake"/>
        </button>

        <div class="carousel-sec-9">
            @foreach($news as $article)
                <div class="d-flex justify-content-center">
                    <a href="{{route('tin-tuc.show',['slug' => $article->slug])}}" style="text-decoration: unset; color: unset">
                    <div class="card rounded-custom shadow-effect me-1"
                         style="width:20rem; height: 70% ">
                        <img class="card-img-top border-up border-up height-img-card" src="{{$article->image}}"
                             alt="Card image">
                        <div class="card-body">
                            <p class="height-text-card green-text font-size-custom"><strong>{{\Illuminate\Support\Str::limit($article->title,60)}}</strong></p>
                            <p class="card-text ">{{ preg_replace('/<[^>]*>/', '', \Illuminate\Support\Str::limit(strip_tags($article->content), 77)) }}</p>
                            <div class="d-flex align-content-center justify-content-center mitr-medium ">
                                <a href="{{route('tin-tuc.show',['slug' => $article->slug])}}" class="btn green-border green-text btn-sm mb-3 rounded-pill btn-long button-shake">XEM
                                    CHI TIẾT</a>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
    <div class="d-flex align-content-center justify-content-center">
        <a href="{{route('tin-tuc.index')}}"
           class="btn green-bg btn-block mb-3 rounded-pill border-2 border-white text-white mitr-medium longer-btn shadow-test button-shake">XEM
            THÊM</a>
    </div>
</div>
<style>
    .section-9 {
        /*height: 100vh;*/
    }
    .longer-btn {
        width: 200px;
    }
    .green-bg {
        background-color: #59843d;
    }
    .green-border {
        border: 2px solid #59843d;
    }
    .green-text {
        color: #59843d;
    }
    .font-size-custom{
        font-size: 1rem;
        font-family: Mitr-Medium, sans-serif;
    }

    .height-img-card {
        height: 200px;
        width: 404px;
    }
    .height-text-card{
        height: 2rem;
    }
    .carousel-sec-9 {
        width: 70%;
        margin: 0px auto;
    }

    .section-9.slick-slide {
        margin: 10px;
    }
    .img-sec9-test {
        scale: 70%;
    }
    .section-9.slick-slide img {
        width: 90%;
    }

    .border-up {
        border-radius: 22px 22px 0 0;
    }

    .slick-dots li button:before {
        font-size: 20px;
        color: white;
    }

    .slick-slide:not(.slick-active) {
        opacity: 0.5;
    }

    .slick-slide.slick-active {

    }

    .custom-prev-arrow-9,
    .custom-next-arrow-9 {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        cursor: pointer;
        scale: 75%;
        z-index: 2;
    }

    .custom-prev-arrow-9 {
        left: 100px;
    }

    .custom-next-arrow-9 {
        right: 100px;
    }

    .slick-dots {
        display: flex;
        justify-content: center;
        list-style: none;
        padding: 0;
        margin-top: 1rem;
    }

    .section-9.slick-dots li {
        margin: 0 5px;
    }

    .section-9.slick-dots button {
        background-color: #fff; /* Màu nền trắng cho dot không active */
        border: 2px solid #59843d; /* Viền xanh cho dot không active */
        color: transparent; /* Màu chữ xanh cho dot không active */
        padding: 5px;
        width: 12px; /* Đường kính của dot */
        height: 12px; /* Đường kính của dot */
        border-radius: 50%; /* Hình dạng tròn cho dot */
        cursor: pointer;
    }

    .section-9.slick-dots .slick-active button {
        background-color: #59843d; /* Màu nền xanh cho dot active */
        border-color: #59843d; /* Viền xanh cho dot active */
        color: transparent; /* Màu chữ trắng cho dot active */
    }

    .btn-long {
        width: 150px;
    }
    .header-sec9-mb-1 {
        font-size: 22px;
        font-family: Mitr-Regular, sans-serif;
        color: #F79420;
        line-height: 0px;
        padding-top: 30px;
    }
    .header-sec9-mb-2 {
        font-size: 27px;
        font-family: Mitr-SemiBold, sans-serif;
        color: #59843d;
    }
    @media only screen and (max-width: 800px) {
        .img-sec9 {
            scale: 70%;
        }

        .custom-prev-arrow-9 {
            left: -17px;
            position: absolute;
            top: 40%;
            scale: 50%;
            opacity: 50%;
        }

        .custom-next-arrow-9 {
            right: -17px;
            position: absolute;
            top: 40%;
            scale: 50%;
            opacity: 50%;
        }

        .space_sec9 {
            display: none;
        }
        .height-text-card{
            height: 3.5rem;
        }
        .height-img-card {
            height: 160px;
            width: 404px;
            text-align: center;
        }
    }

</style>
<script>
    $(document).ready(function () {
        $('.carousel-sec-9').slick({
            infinite: true,
            // variableWidth: true,
            speed: 900,
            slidesToShow: 3,
            slidesToScroll: 3,
            dots: true,
            prevArrow: $('.custom-prev-arrow-9'),
            nextArrow: $('.custom-next-arrow-9'),
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>

