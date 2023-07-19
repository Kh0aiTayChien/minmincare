<div class="sec3pc mt-5">
    <div class="d-flex align-content-center justify-content-center">
        <img src="{{asset('images/sec6/chuyen-gia-mobile.png')}}" alt="" style="width: 40vw" class="img-fluid">
    </div>
    <img src="{{asset('images/sec6/anh chuyen gia.jpg')}}" class="proImg pro1">
    <img src="{{asset('images/sec6/anh chuyen gia.jpg')}}" class="proImg">
    <img src="{{asset('images/sec6/anh chuyen gia.jpg')}}" class="proImg">
</div>
<div class="sec3mob mt-5">
    <div class="d-flex align-content-center justify-content-center">
        <img src="{{asset('images/sec6/chuyen-gia-mobile.png')}}" alt="" style="width: 80vw" class="img-fluid">
    </div>

    <div class="slick-carousel position-relative">
        <button class="custom-prev-arrow-3" aria-label="Previous">
            <img src="{{asset('images/arrow-l.png')}}" alt="Previous" class="shadow-effect"/>
        </button>
        <button class="custom-next-arrow-3" aria-label="Next">
            <img src="{{asset('images/arrow-r.png')}}" alt="Next" class="shadow-effect"/>
        </button>

        <div class="carousel-sec-3">
            <div class="card rounded-custom shadow-effect"
                 style="width:100%; height: 70% ">
                <img class="" src="{{asset('images/sec6/chuyen-gia.png')}}" alt="Card image">
            </div>
            <div class="card rounded-custom shadow-effect"
                 style="width:100%; height: 70% ">
                <img class="" src="{{asset('images/sec6/chuyen-gia.png')}}" alt="Card image">
            </div>
            <div class="card rounded-custom shadow-effect"
                 style="width:100%; height: 70% ">
                <img class="" src="{{asset('images/sec6/chuyen-gia.png')}}" alt="Card image">
            </div>
        </div>
    </div>
    <style>
        .shadow-effect {
            filter: drop-shadow(3px 3px 3px rgba(0, 0, 0, 0.25));
        }
        .rounded-custom {
            border-radius: 23px
        }
        .headersec6mb{
            width: 65vw;
        }
        .carousel-sec-3 {
            width: 70%;
            margin: 0px auto;
        }
        .sec3mob.slick-dots {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin-top: 1rem;
        }
        .sec3mob .slick-slide img {
            width: 100%;
        }

        .sec3mob .slick-dots li {
            margin: 0 5px;
        }

        .sec3mob .slick-dots button {
            background-color: #fff; /* Màu nền trắng cho dot không active */
            border: 2px solid #59843d; /* Viền xanh cho dot không active */
            color: transparent; /* Màu chữ xanh cho dot không active */
            padding: 5px;
            width: 12px; /* Đường kính của dot */
            height: 12px; /* Đường kính của dot */
            border-radius: 50%; /* Hình dạng tròn cho dot */
            cursor: pointer;
        }

        .sec3mob .slick-dots .slick-active button {
            background-color: #59843d; /* Màu nền xanh cho dot active */
            border-color: #59843d; /* Viền xanh cho dot active */
            color: transparent; /* Màu chữ trắng cho dot active */
        }


        .sec3mob .slick-slide {
            margin: 5px;
        }

        .sec3mob .slick-slide img {
            width: 100%;
        }

        .slick-dots li button:before {
            font-size: 20px;
            color: white;
        }

        .slick-slide:not(.slick-active) {
            opacity: 0.5;
        }

        .custom-prev-arrow-3,
        .custom-next-arrow-3 {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
        }

        .custom-prev-arrow-3 {
            left: 4rem;
        }
        .custom-next-arrow-3 {
            right: 4rem;
        }

        .slick-dots {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin-top: 1rem;
        }

        .sec3mob.slick-dots li {
            margin: 0 5px;
        }
        .sec3mob.headersec6{
            width: 100%;
        }
        .sec3mob.slick-dots button {
            background-color: #fff; /* Màu nền trắng cho dot không active */
            border: 2px solid #59843d; /* Viền xanh cho dot không active */
            color: transparent; /* Màu chữ xanh cho dot không active */
            padding: 5px;
            width: 12px; /* Đường kính của dot */
            height: 12px; /* Đường kính của dot */
            border-radius: 50%; /* Hình dạng tròn cho dot */
            cursor: pointer;
        }

        .sec3mob.slick-dots .slick-active button {
            background-color: #59843d; /* Màu nền xanh cho dot active */
            border-color: #59843d; /* Viền xanh cho dot active */
            color: transparent; /* Màu chữ trắng cho dot active */
        }
        @media only screen and (max-width: 800px) {
            .sec3pc{
                display: none;
            }
            .sec3mob{
                display: block;
            }
            .custom-prev-arrow-3 {
                left: -17px;
                scale: 50%;
                z-index: 2;
                opacity: 50%;
            }
            .custom-next-arrow-3 {
                right: -17px;
                scale: 50%;
                z-index: 2;
                opacity: 50%;
            }
            .custom-prev-arrow-3,
            .custom-next-arrow-3 {
                top: 40%;
            }
            .slick-slide {
                margin: 0 10px 5px 10px !important;
            }
        }
        @media only screen and (min-width: 800px) {
            .sec3pc{
                display: block;
            }
            .sec3mob{
                display: none;
            }
        }
    </style>
    <script>
        $(document).ready(function () {
            $('.carousel-sec-3').slick({
                infinite: true,
                speed: 900,
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                prevArrow: $('.custom-prev-arrow-3'),
                nextArrow: $('.custom-next-arrow-3'),
            });
        });
    </script>
</div>

<style>
    @media only screen and (max-width: 800px) {
        .sec3pc{
            display: none;
        }
        .sec3mob{
            display: block;
        }
    }
    @media only screen and (max-width: 800px) {
        .sec3pc {
            display: none;
        }

        .sec3mob {
            display: block;
        }
    }
</style>
