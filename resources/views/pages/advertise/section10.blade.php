<div class="section-10 pb-4 pt-3">
    <div class=" pt-3 pb-3 d-flex align-content-center justify-content-center" style="">
            <img src="{{asset('images/advertise-c/section-10/donghanh.png')}}" alt="" class="share-joy" style="">
    </div>

    <div class="slick-carousel position-relative">
        <button class="custom-prev-arrow" aria-label="Previous">
            <img src="{{asset('images/arrow-l.png')}}" alt="Previous" class="shadow-effect button-shake">
        </button>
        <button class="custom-next-arrow " aria-label="Next">
            <img src="{{asset('images/arrow-r.png')}}" alt="Next" class="shadow-effect button-shake">
        </button>

        <div class="carousel-sec-10">
            <div><img src="{{asset('images/sec7/chia-se.png')}}" class="img-fluid"></div>
            <div><img src="{{asset('images/sec7/chia-se.png')}}" class="img-fluid"></div>
            <div><img src="{{asset('images/sec7/chia-se.png')}}" class="img-fluid"></div>
            <div><img src="{{asset('images/sec7/chia-se.png')}}" class="img-fluid"></div>
            <div><img src="{{asset('images/sec7/chia-se.png')}}" class="img-fluid"></div>
            <div><img src="{{asset('images/sec7/chia-se.png')}}" class="img-fluid"></div>
        </div>
    </div>
</div>
<style>
    .section-10 {
        background-color: #F1F1F2;
    }

    .wrapper {
        width: 100%;
        padding-top: 20px;
        text-align: center;
    }

    .carousel-sec-10 {
        width: 70%;
        margin: 0px auto;
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
        .section-10 {
            height: 65%;
        }
        .share-joy{
            width: 70%;
        }
    }

</style>
<script>
    $(document).ready(function () {
        $('.carousel-sec-10').slick({
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
