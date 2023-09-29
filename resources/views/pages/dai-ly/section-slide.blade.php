<div class="section-slide position-relative mt-4 mb-5">
    <div class="position-absolute start-50 top-50 section-slide-dot" style="">
            <span class="btn ">
                <img src="{{asset('images/arrow-l.png')}}" class="d-block shadow-effect sm-arrow button-shake"
                     data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    </span>
        <span class="btn ">
                <img src="{{asset('images/arrow-r.png')}}" class="d-block shadow-effect sm-arrow button-shake"
                     data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    </span>
        <div class="mt-4 ms-5">
            <span class="circle green-bg" id="1"></span>
            <span class="circle" id="2"></span>
            <span class="circle" id="3"></span>
            <span class="circle" id="4"></span>
{{--            <span class="circle" id="5"></span>--}}
        </div>
    </div>
    <div id="carouselExampleFade" class="carousel slide carousel-fade " data-bs-ride="carousel">
        <div class="carousel-indicators d-none">
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
{{--            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="4"--}}
{{--                    aria-label="Slide 5"></button>--}}
        </div>
        <div class="carousel-inner h-100 ">
            <div class="carousel-item  active " id="1">
                <div class="row gx-4">
                    <div class="col-7 boder-radius" style="overflow: hidden">
                        <img src="{{asset('images/dai-ly/section-slide/battay.png')}}" class="d-block  " alt="Image 1">
                    </div>
                    <div class="col-4 ms-5" style="overflow: hidden">
                        <img src="{{asset('images/dai-ly/section-slide/quyenloi.png')}}" class="d-block mt-5 image-rule"
                             alt="Image 2">
                        <div class="content-section-slide active ms-5">
                            <img src="{{asset('images/dai-ly/section-slide/01-chietkhau.png')}}" class="mt-4" alt="">
                            <div class="mt-3 " style="width: 70%; height: 10rem">
                                <p class="text-justify card-text">
                                <ul class="list-unstyled">
                                    <li class="text-justify"><span class="dot"></span> Đại lý của Min Min Care luôn được hưởng mức chiết khấu đại lý cực kỳ hấp dẫn.</li>
                                    <li class="text-justify"><span class="dot"></span> Chính sách giá được xây dựng trên sự nghiên cứu thị trường và đối thủ cạnh tranh, chi phí sản xuất và khả năng chi trả của khách hàng nên đảm bảo cạnh tranh và lợi nhuận cao.</li>
                                    <li class="text-justify"><span class="dot"></span> Có hệ thống đưa ra các báo cáo để có chính sách chăm sóc khách hàng hợp lý</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item   " id="2">
                <div class="row gx-4">
                    <div class="col-7 boder-radius" style="overflow: hidden">
                        <img src="{{asset('images/dai-ly/section-slide/battay.png')}}" class="d-block  " alt="Image 1">
                    </div>
                    <div class="col-4 ms-5" style="overflow: hidden">
                        <img src="{{asset('images/dai-ly/section-slide/quyenloi.png')}}" class="d-block mt-5 image-rule"
                             alt="Image 2">
                        <div class="content-section-slide ms-5">
                            <img src="{{asset('images/dai-ly/section-slide/Asset 1.png')}}" class="mt-4" alt="">
                            <div class="mt-3 " style="width: 70%; height: 10rem">
                                <p class="text-justify card-text">
                                <ul class="list-unstyled">
                                    <li class="text-justify"><span class="dot"></span> Được hỗ trợ đào tạo quản lý tài chính, marketing, bán hàng theo lộ trình hàng tháng, quý.</li>
                                    <li class="text-justify"><span class="dot"></span> Có quy chuẩn kiểm tra và chuẩn hóa kỹ năng được tổ chức thường xuyên để đảm bảo chất lượng đại lý</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item   " id="3">
                <div class="row gx-4">
                    <div class="col-7 boder-radius" style="overflow: hidden">
                        <img src="{{asset('images/dai-ly/section-slide/battay.png')}}" class="d-block  " alt="Image 1">
                    </div>
                    <div class="col-4 ms-5" style="overflow: hidden">
                        <img src="{{asset('images/dai-ly/section-slide/quyenloi.png')}}" class="d-block mt-5 image-rule"
                             alt="Image 2">
                        <div class="content-section-slide ms-5">
                            <img src="{{asset('images/dai-ly/section-slide/Asset 2.png')}}" class="mt-4" alt="">
                            <div class="mt-3 " style="width: 70%; height: 10rem">
                                <p class="text-justify card-text">
                                <ul class="list-unstyled">
                                    <li class="text-justify"><span class="dot"></span> Các chương trình Marketing được xây dựng rõ ràng, chi tiết về mục tiêu, có lộ trình triển khai hợp lý và hiệu quả nhất</li>
                                    <li class="text-justify"><span class="dot"></span> Kênh truyền thông đa dạng và áp dụng công nghệ mới nhất bởi đội ngũ Marketing Online</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item   " id="4">
                <div class="row gx-4">
                    <div class="col-7 boder-radius" style="overflow: hidden">
                        <img src="{{asset('images/dai-ly/section-slide/battay.png')}}" class="d-block  " alt="Image 1">
                    </div>
                    <div class="col-4 ms-5" style="overflow: hidden">
                        <img src="{{asset('images/dai-ly/section-slide/quyenloi.png')}}" class="d-block mt-5 image-rule"
                             alt="Image 2">
                        <div class="content-section-slide ms-5">
                            <img src="{{asset('images/dai-ly/section-slide/Asset 3.png')}}" class="mt-4" alt="">
                            <div class="mt-3 " style="width: 70%; height: 10rem">
                                <p class="text-justify card-text">
                                <ul class="list-unstyled">
                                    <li class="text-justify"><span class="dot"></span> Hệ thống cấp độ đại lý rõ ràng có mức quyền lợi khác nhau </li>
                                    <li class="text-justify"><span class="dot"></span> Được tham gia các chương trình/khóa học Min Min Care tổ chức hoặc phối hợp tổ chức </li>
                                    <li class="text-justify"><span class="dot"></span> Có event/ hoạt động ý nghĩa hàng tháng, hàng năm </li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="section-slide-mobile mt-3">
    <div class="d-flex align-content-center justify-content-center">
        <img src="{{asset('images/dai-ly/section-slide/quyenloimobile.png')}}" alt="" style="width: 45vw" class="img-fluid">
    </div>

    <div class="d-flex align-content-center justify-content-center">
        <img class=" px-1 mb-3" src="{{asset('images/dai-ly/section-slide/hand-shake.png')}}" alt="Card image">
    </div>

    <div class="slick-carousel position-relative">
        <button class="custom-prev-arrow-section-slide" aria-label="Previous">
            <img src="{{asset('images/arrow-l.png')}}" alt="Previous" class="shadow-effect"/>
        </button>
        <button class="custom-next-arrow-section-slide" aria-label="Next">
            <img src="{{asset('images/arrow-r.png')}}" alt="Next" class="shadow-effect"/>
        </button>

        <div class="carousel-section-slide mt-2">
            <div class=""
                 style="width:100%;">
                <img class="card-img-top" src="{{asset('images/dai-ly/section-slide/01-chietkhau.png')}}" class="mt-4" alt="">
                <div class="card-body" style="">
                    <p class="card-text text-justify" style=""> Đại lý của Min Min Care luôn được hưởng mức chiết khấu đại lý cực kỳ hấp dẫn.
                        Chính sách giá được xây dựng trên sự nghiên cứu thị trường và đối thủ cạnh tranh, chi phí sản xuất và khả năng chi trả của khách hàng nên đảm bảo cạnh tranh và lợi nhuận cao.
                        Có hệ thống đưa ra các báo cáo để có chính sách chăm sóc khách hàng hợp lý</p>
                </div>
            </div>
            <div class=" "
                 style="width:100%; ">
                <img class="card-img-top" src="{{asset('images/dai-ly/section-slide/Asset 1.png')}}" alt="Card image">
                <div class="card-body" >
                    <p class="card-text text-justify "> Được hỗ trợ đào tạo quản lý tài chính, marketing, bán hàng theo lộ trình hàng tháng, quý.
                        Có quy chuẩn kiểm tra và chuẩn hóa kỹ năng được tổ chức thường xuyên để đảm bảo chất lượng đại lý</p>
                </div>
            </div>
            <div class=""
                 style="width:100%;  ">
                <img class="card-img-top" src="{{asset('images/dai-ly/section-slide/Asset 2.png')}}" alt="Card image">
                <div class="card-body" >
                    <p class="card-text text-justify">Các chương trình Marketing được xây dựng rõ ràng, chi tiết về mục tiêu, có lộ trình triển khai hợp lý và hiệu quả nhất
                        Kênh truyền thông đa dạng và áp dụng công nghệ mới nhất bởi đội ngũ Marketing Online</p>
                </div>
            </div>
            <div class=""
                 style="width:100%; ">
                <img class="card-img-top" src="{{asset('images/dai-ly/section-slide/Asset 3.png')}}" alt="Card image">
                <div class="card-body" style="height: 28rem">
                    <p class="card-text text-justify"> Hệ thống cấp độ đại lý rõ ràng có mức quyền lợi khác nhau
                        Được tham gia các chương trình/khóa học Min Min Care tổ chức hoặc phối hợp tổ chức
                        Có event/ hoạt động ý nghĩa hàng tháng, hàng năm</p>
                </div>
            </div>
        </div>
    </div>
    <style>
        @font-face {
            font-family: 'Mulish-SemiBold';
            src: url("/Fonts/Mulish-SemiBold.ttf");
        }

        .rounded-custom {
            border-radius: 23px
        }

        .card-text {
            font-family: 'Mulish-SemiBold', sans-serif;
        }

        .card-title {
            font-family: 'Mulish SemiBold', sans-serif;
        }

        .green-border {
            border: 3px solid #59843d;
        }

        .green-text {
            color: #59843d;
        }
        .col{
            overflow: hidden ;
        }
        .dot {
            display: inline-block;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: black;
            margin-right: 5px;
        }
        .section-slide-dot{
            transform: translate(220px, 250px);
            z-index: 999
        }
        @media screen and (max-aspect-ratio: 16/10) {
            .section-slide-dot{
                right: 20vw;
                top: 80%;
            }
        }

        .section-slide-mobile {
            /*height: 110vh;*/
        }
        .slick-slide {
            margin: 5px;
        }

        .carousel-section-slide {
            width: 70%;
            margin: 0px auto;
        }

        .section-slide-mobile.slick-slide {
            margin: 0;
        }

        .section-slide-mobile.slick-slide img {
            width: 100%;
        }

        .slick-dots li button:before {
            font-size: 20px;
            color: white;
        }

        .slick-slide:not(.slick-active) {
            opacity: 0.5;
        }

        .custom-prev-arrow-section-slide,
        .custom-next-arrow-section-slide {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
        }

        .custom-prev-arrow-section-slide {
            left: 4rem;
        }

        .custom-next-arrow-section-slide {
            right: 4rem;
        }

        .slick-dots {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin-top: 1rem;
        }

        .section-slide-mobile.slick-dots li {
            margin: 0 5px;
        }

        .section-slide-mobile.slick-dots button {
            background-color: #fff; /* Màu nền trắng cho dot không active */
            border: 2px solid #59843d; /* Viền xanh cho dot không active */
            color: transparent; /* Màu chữ xanh cho dot không active */
            padding: 5px;
            width: 12px; /* Đường kính của dot */
            height: 12px; /* Đường kính của dot */
            border-radius: 50%; /* Hình dạng tròn cho dot */
            cursor: pointer;
        }

        .section-slide-mobile.slick-dots .slick-active button {
            background-color: #59843d; /* Màu nền xanh cho dot active */
            border-color: #59843d; /* Viền xanh cho dot active */
            color: transparent; /* Màu chữ trắng cho dot active */
        }

        @media only screen and (max-width: 800px) {
            .section-slide {
                display: none;
            }

            .section-slide-mobile {
                display: block;
            }
            .section-slide-mobile  .slick-slide {
                overflow: auto;
            }

            .section-slide-mobile .slick-track {
                height: 19rem !important;
            }
            .section-slide-mobile .slick-list draggable{
                height: 19rem !important;
            }
            .section-slide-mobile .slick-slide {
                margin: 0 20px 20px 20px !important;
            }
            .section-slide-mobile .slick-dots {
                margin-top: -20px !important;
                transform: translateY(14px);
            }
            .section-slide-mobile .card-text{
                margin-bottom: 5px;
            }

            .custom-prev-arrow-section-slide {
                left: -17px;
                scale: 50%;
                z-index: 2;
                opacity: 50%;
            }

            .custom-next-arrow-section-slide {
                right: -17px;
                scale: 50%;
                z-index: 2;
                opacity: 50%;
            }

            .custom-prev-arrow-section-slide,
            .custom-next-arrow-section-slide {
                top: 40%;
            }

        }

        @media only screen and (min-width: 800px) {
            .section-slide {
                display: block;
            }

            .section-slide-mobile {
                display: none;
            }
        }

        .boder-radius {
            border-radius: 23px;
        }
    </style>
    <script>
        $(document).ready(function () {
            $('.carousel-section-slide').slick({
                infinite: true,
                speed: 900,
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                prevArrow: $('.custom-prev-arrow-section-slide'),
                nextArrow: $('.custom-next-arrow-section-slide'),
            });
        });
    </script>
</div>


<style>
    .text-justify {
        text-align: justify;
        font-family: Mulish-SemiBold, sans-serif
    }

    .shadow-effect {
        filter: drop-shadow(3px 3px 3px rgba(0, 0, 0, 0.25));
    }

    .circle {
        height: 15px;
        width: 15px;
        /*background-color: white;*/
        border: 2px solid #59843d; /* Đặt viền xanh với độ dày 2px */
        border-radius: 50%;
        display: inline-block;
    }

    .sm-arrow {
        width: 70px; /* Đặt chiều rộng mong muốn */
        height: auto;
    }

    .image-rule {
        scale: 60%;
        transform: translateX(-15%) translateY(20%);
    }

    .carousel-fade .carousel-item {
        transition: opacity 0.5s ease-in-out; /* Đặt thời gian chuyển đổi là 0.5 giây */
    }

    .content-section-slide{
        font-family: "Mulish SemiBold", sans-serif;
    }
</style>
<script>
    $('#carouselExampleFade').on('slide.bs.carousel', function () {
        $(this).find('.carousel-item.active .content-section-slide').removeClass('active').hide();
        $(this).find('.carousel-item:not(.active) .content-section-slide').addClass('active').show();
    });


    $('#carouselExampleFade').on('slide.bs.carousel', function (e) {
        let activeItemId = e.relatedTarget.id;

        $('.circle').removeClass('green-bg');

        $('.circle').each(function () {
            var circleId = $(this).attr('id');

            if (circleId === activeItemId) {
                $(this).addClass('green-bg');
            }
        });
    });
</script>
