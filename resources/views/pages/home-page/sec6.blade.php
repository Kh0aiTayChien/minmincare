<div class="sec6pc">
    <svg class="headersec6" xmlns="http://www.w3.org/2000/svg" width="874" height="189.915" viewBox="0 0 874 189.915">
        <g id="Group_835" data-name="Group 835" transform="translate(-295.88 -992.737)">
            <text id="Với_đội_ngũ" data-name="Với đội ngũ" transform="translate(295.88 1059.737)" fill="#f79421"
                  font-size="57.877" font-family="Mitr-Regular, Mitr">
                <tspan x="0" y="0">Với đội ngũ</tspan>
            </text>
            <text id="CHUYÊN_GIA_HÀNG_ĐẦU" data-name="CHUYÊN GIA HÀNG ĐẦU" transform="translate(295.88 1151.652)"
                  fill="#59833d" font-size="74" font-family="Mitr-SemiBold, Mitr" font-weight="600">
                <tspan x="0" y="0">CHUYÊN GIA HÀNG ĐẦU</tspan>
            </text>
        </g>
    </svg><br>
    <img src="{{asset('images/sec6/anh chuyen gia.jpg')}}" class="proImg pro1">
    <img src="{{asset('images/sec6/anh chuyen gia.jpg')}}" class="proImg">
    <img src="{{asset('images/sec6/anh chuyen gia.jpg')}}" class="proImg">
</div>
<div class="sec6mob mt-5">
    <div class="d-flex align-content-center justify-content-center">
        <img src="{{asset('images/sec6/chuyen-gia-mobile.png')}}" alt="" style="width: 80vw" class="img-fluid">
    </div>

    <div class="slick-carousel position-relative">
        <button class="custom-prev-arrow-6" aria-label="Previous">
            <img src="{{asset('images/arrow-l.png')}}" alt="Previous" class="shadow-effect"/>
        </button>
        <button class="custom-next-arrow-6" aria-label="Next">
            <img src="{{asset('images/arrow-r.png')}}" alt="Next" class="shadow-effect"/>
        </button>

        <div class="carousel-sec-6">
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

        .headersec6mb{
            width: 65vw;
        }
        .carousel-sec-6 {
            width: 70%;
            margin: 0px auto;
        }

        .sec6mob.slick-slide {
            margin: 5px;
        }

        .sec6mob.slick-slide img {
            width: 100%;
        }

        .slick-dots li button:before {
            font-size: 20px;
            color: white;
        }

        .slick-slide:not(.slick-active) {
            opacity: 0.5;
        }

        .custom-prev-arrow-6,
        .custom-next-arrow-6 {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
        }

        .custom-prev-arrow-6 {
            left: 4rem;
        }
        .custom-next-arrow-6 {
            right: 4rem;
        }

        .slick-dots {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin-top: 1rem;
        }

        .sec6mob.slick-dots li {
            margin: 0 5px;
        }
        .sec6mob.headersec6{
            width: 100%;
        }
        .sec6mob.slick-dots button {
            background-color: #fff; /* Màu nền trắng cho dot không active */
            border: 2px solid #59843d; /* Viền xanh cho dot không active */
            color: transparent; /* Màu chữ xanh cho dot không active */
            padding: 5px;
            width: 12px; /* Đường kính của dot */
            height: 12px; /* Đường kính của dot */
            border-radius: 50%; /* Hình dạng tròn cho dot */
            cursor: pointer;
        }

        .sec6mob.slick-dots .slick-active button {
            background-color: #59843d; /* Màu nền xanh cho dot active */
            border-color: #59843d; /* Viền xanh cho dot active */
            color: transparent; /* Màu chữ trắng cho dot active */
        }
        @media only screen and (max-width: 800px) {
            .sec6pc{
                display: none;
            }
            .sec6mob{
                display: block;
            }
            .custom-prev-arrow-6 {
                left: -17px;
                scale: 50%;
                z-index: 2;
                opacity: 50%;
            }
            .custom-next-arrow-6 {
                right: -17px;
                scale: 50%;
                z-index: 2;
                opacity: 50%;
            }
            .custom-prev-arrow-6,
            .custom-next-arrow-6 {
                top: 40%;
            }
        }
        @media only screen and (min-width: 800px) {
            .sec6pc{
                display: block;
            }
            .sec6mob{
                display: none;
            }
        }
    </style>
    <script>
        $(document).ready(function () {
            $('.carousel-sec-6').slick({
                infinite: true,
                speed: 900,
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                prevArrow: $('.custom-prev-arrow-6'),
                nextArrow: $('.custom-next-arrow-6'),
            });
        });
    </script>
</div>

<style>
    @media only screen and (max-width: 800px) {
        .sec6pc{
            display: none;
        }
        .sec6mob{
            display: block;
        }
    }
    @media only screen and (max-width: 800px) {
        .sec6pc {
            display: none;
        }

        .sec6mob {
            display: block;
        }
    }
</style>
