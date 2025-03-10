<div class="section-7">
    <div class="d-flex align-content-center justify-content-center img-sec7">
        <img src="{{asset('images/gioi-thieu/sec7/Group 23.png')}}" alt="" style="" class="img-fluid imgbrand">
    </div>

    <div class="slick-carousel position-relative col-12">
        <button class="custom-prev-arrow-7" aria-label="Previous">
            <img src="{{asset('images/arrow-l.png')}}" alt="Previous" class="shadow-effect button-shake"/>
        </button>
        <button class="custom-next-arrow-7" aria-label="Next">
            <img src="{{asset('images/arrow-r.png')}}" alt="Next" class="shadow-effect button-shake"/>
        </button>

        <div class="carousel-sec-7 col-9">
            <div class="d-flex justify-content-center">
                <img src="{{asset('images/gioi-thieu/sec7/5. Ảnh chứng nhận-02.png')}}" alt="" class="img-fluid shadow-test">
            </div>
            <div class="d-flex justify-content-center">
                <img src="{{asset('images/gioi-thieu/sec7/5. Ảnh chứng nhận-03.png')}}" alt="" class="img-fluid shadow-test">
            </div>
            <div class="d-flex justify-content-center">
                <img src="{{asset('images/gioi-thieu/sec7/5. Ảnh chứng nhận-04.png')}}" alt="" class="img-fluid shadow-test">
            </div>
            <div class="d-flex justify-content-center">
                <img src="{{asset('images/gioi-thieu/sec7/5. Ảnh chứng nhận-02.png')}}" alt="" class="img-fluid shadow-test">
            </div>
            <div class="d-flex justify-content-center">
                <img src="{{asset('images/gioi-thieu/sec7/5. Ảnh chứng nhận-03.png')}}" alt="" class="img-fluid shadow-test">
            </div>
            <div class="d-flex justify-content-center">
                <img src="{{asset('images/gioi-thieu/sec7/5. Ảnh chứng nhận-04.png')}}" alt="" class="img-fluid shadow-test">
            </div>
{{--            <div class="d-flex justify-content-center">--}}
{{--                <img src="{{asset('images/gioi-thieu/sec7/giấy chứng nhận-02.png')}}" alt="" class="img-fluid">--}}
{{--            </div>--}}
{{--            <div class="d-flex justify-content-center">--}}
{{--                <img src="{{asset('images/gioi-thieu/sec7/giấy chứng nhận-03.png')}}" alt="" class="img-fluid">--}}
{{--            </div>--}}
{{--            <div class="d-flex justify-content-center">--}}
{{--                <img src="{{asset('images/gioi-thieu/sec7/giấy chứng nhận-04.png')}}" alt="" class="img-fluid">--}}
{{--            </div>--}}

        </div>
    </div>
</div>
<style>
    .section-7{
        /*height: 100vh;*/
    }

    .img-sec7{
        /*scale: 70%;*/
    }
    .shadow-effect {
        filter: drop-shadow(3px 3px 3px rgba(0, 0, 0, 0.25));
    }

    .carousel-sec-7 {
        /*width: 70%;*/
        margin: 0px auto;
    }
    .img-fluid-test1 {
        padding-left: 5px;
        padding-right: 5px;
        margin-bottom: 5%;
    }
    .section-7.slick-slide {
        margin: 10px;
    }
    .imgbrand {
        /*scale: 88%;*/
        width: 42vw;
    }
    .section-7.slick-slide img {
        width: 90%;
    }
    .border-up{
        border-radius: 22px 22px 0 0;
    }

    .slick-dots li button:before {
        font-size: 20px;
        color: white;
    }

    .slick-slide:not(.slick-active) {
        opacity: 0.5;
    }
    .slick-slide.slick-active{

    }

    .custom-prev-arrow-7,
    .custom-next-arrow-7 {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        cursor: pointer;
        scale: 75%;
        z-index: 2;
    }

    .custom-prev-arrow-7 {
        left: 100px;
    }
    .custom-next-arrow-7 {
        right: 100px;
    }

    .slick-dots {
        display: flex;
        justify-content: center;
        list-style: none;
        padding: 0;
        margin-top: 1rem;
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
    .btn-long{
        width: 150px;
    }
    @media only screen and (max-width: 1200px) {
        .imgbrand {
            width: 62vw;
        }
    }
    @media only screen and (max-width: 800px) {
        .img-sec7{
            /*scale: 70%;*/
            margin-top: 10%;
        }
        .custom-prev-arrow-7 {
            left: -17px;
            position: absolute;
            top: 40%;
            scale: 50%;
            opacity: 50%;
        }
        .custom-next-arrow-7 {
            right: -17px;
            position: absolute;
            top: 40%;
            scale: 50%;
            opacity: 50%;
        }
        .space_sec7{
            display: none;
        }
        .imgbrand {
            width: 100vw;
            scale: 155%;
            transform: translateX(-3%);
        }
    }

</style>
<script>
    $(document).ready(function () {
        $('.carousel-sec-7').slick({
            infinite: true,
            // variableWidth: true,
            speed: 900,
            slidesToShow: 3,
            slidesToScroll: 3,
            dots: true,
            prevArrow: $('.custom-prev-arrow-7'),
            nextArrow: $('.custom-next-arrow-7'),
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

