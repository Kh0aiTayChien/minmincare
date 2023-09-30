<div class="section-7">
    <div class="pt-3 pb-3 me-5 d-none d-md-block" style="">
            <img src="{{asset('images/sec7/Asset 1.svg')}}" alt="" class="share-joy" style="">
    </div>
    <div class="headersec4-product d-block d-md-none">
        <p class="header-sec9-mb-1">Nơi chia sẻ</p>
        <p class="header-sec9-mb-2">NIỀM VUI</p>
    </div>
{{--    <div class="headersec4-product d-block d-md-none ">--}}
{{--        <p><span class="header-sec9-mb-1">Nơi chia sẻ  </span> <span class="header-sec9-mb-2"> NIỀM VUI</span> </p>--}}
{{--    </div>--}}
    <div class="slick-carousel position-relative mt-4 col-12">
        <button class="custom-prev-arrow" aria-label="Previous">
            <img src="{{asset('images/arrow-l.png')}}" alt="Previous" class="shadow-effect button-shake">
        </button>
        <button class="custom-next-arrow " aria-label="Next">
            <img src="{{asset('images/arrow-r.png')}}" alt="Next" class="shadow-effect button-shake">
        </button>

        <div class="carousel-sec-7 col-9">
            <div><img src="{{asset('images/sec7/thước đo PC-02.png')}}" class="img-fluid-test shadow-test"></div>
            <div><img src="{{asset('images/sec7/thước đo PC-03.png')}}" class="img-fluid-test shadow-test"></div>
            <div><img src="{{asset('images/sec7/thước đo PC-04.png')}}" class="img-fluid-test shadow-test"></div>
            <div><img src="{{asset('images/sec7/thước đo PC-05.png')}}" class="img-fluid-test shadow-test"></div>
            <div><img src="{{asset('images/sec7/thước đo PC-06.png')}}" class="img-fluid-test shadow-test"></div>
            <div><img src="{{asset('images/sec7/thước đo PC-07.png')}}" class="img-fluid-test shadow-test"></div>
        </div>
    </div>
</div>
<style>
    .section-7 {
        background-color: #F1F1F2;
        /*height: 70vh;*/
        padding-bottom: 3%;
        padding-top: 1%;
    }

    .wrapper {
        width: 100%;
        padding-top: 20px;
        text-align: center;
    }

    .carousel-sec-7 {
        margin: 0px auto;
    }
    .img-fluid-test {
        padding-left: 5px;
        padding-right: 5px;
        margin-bottom: 5%;
    }
    .slick-slide {
        margin: 5px;
    }

    .slick-slide img {
        width: 100%;
    }

    .wrapper .slick-dots li button:before {
        font-size: 20px;
        color: white;
    }

    .slick-slide:not(.slick-active) {
        opacity: 0.5;
    }

    .custom-prev-arrow,
    .custom-next-arrow {
        position: absolute;
        top: 40%;
        transform: translateY(-50%);
        background: none;
        border: none;
        cursor: pointer;
    }

    .custom-prev-arrow {
        left: 100px;
        z-index: 2;
        scale: 70%;
    }

    .custom-next-arrow {
        right: 100px;
        z-index: 2;
        scale: 70%;
    }

    .slick-dots {
        display: flex;
        justify-content: center;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .slick-dots li {
        margin: 0 5px;
    }
    .slick-dots button {
        background-color: #fff; /* Màu nền trắng cho dot không active */
        border: 2px solid #59843d; /* Viền xanh cho dot không active */
        color: transparent; /* Màu chữ xanh cho dot không active */
        padding: 5px;
        width: 12px; /* Đường kính của dot */
        height: 12px; /* Đường kính của dot */
        border-radius: 50%; /* Hình dạng tròn cho dot */
        cursor: pointer;
    }

    .slick-dots .slick-active button {
        background-color: #59843d; /* Màu nền xanh cho dot active */
        border-color: #59843d; /* Viền xanh cho dot active */
        color: transparent; /* Màu chữ trắng cho dot active */
    }
    .share-joy{
        width: 35%;
        margin-left: 58%;
        scale: 70%;
    }
    @media only screen and (max-width: 800px) {
        .custom-prev-arrow,
        .custom-next-arrow {
            top: 40%;
        }

        .custom-prev-arrow {
            left: -17px;
            z-index: 2;
            scale: 50%;
            opacity: 50%;
        }

        .custom-next-arrow {
            right: -17px;
            z-index: 2;
            scale: 50%;
            opacity: 50%;
        }
        .section-7 {
            height: 65%;
        }
        .share-joy{
            width: 70%;
            margin-left: 25%
        }
    }

</style>
<script>
    $(document).ready(function () {
        $('.carousel-sec-7').slick({
            infinite: true,
            speed: 900,
            slidesToShow: 3,
            slidesToScroll: 3,
            dots: true,
            prevArrow: $('.custom-prev-arrow'),
            nextArrow: $('.custom-next-arrow'),
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        prevArrow: $('.custom-prev-arrow'),
                        nextArrow: $('.custom-next-arrow'),
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        prevArrow: $('.custom-prev-arrow'),
                        nextArrow: $('.custom-next-arrow'),
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        prevArrow: $('.custom-prev-arrow'),
                        nextArrow: $('.custom-next-arrow'),
                    }
                }
            ]
        });
    });
</script>
