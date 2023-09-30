<div class="section-4 pt-3 mt-2">
{{--    <div class="d-flex align-content-center justify-content-center img-sec4">--}}
{{--        <img src="{{asset('images/sec4/sanpham.png')}}" alt="" style="" class="img-fluid ">--}}
{{--    </div>--}}
    <div class="headersec4-product d-none d-md-block">
        <p class="header-test-1">Sản phẩm</p>
        <p class="header-test-2">MIN MIN CARE</p>
    </div>
    <div class="headersec4-product d-block d-md-none">
        <p class="header-test-1-mb">Sản phẩm</p>
        <p class="header-test-2-mb">MIN MIN CARE</p>
    </div>
    <div class="slick-carousel position-relative">
        <button class="custom-prev-arrow-4 " aria-label="Previous">
            <img src="{{asset('images/arrow-l.png')}}" alt="Previous" class="shadow-effect button-shake"/>
        </button>
        <button class="custom-next-arrow-4 " aria-label="Next">
            <img src="{{asset('images/arrow-r.png')}}" alt="Next" class="shadow-effect button-shake"/>
        </button>

        <div class="carousel-sec-4">
            @foreach($products as $product)
                <div class="d-flex justify-content-center">
                    <div class="card rounded-custom shadow-effect me-1"
                     style="width:18rem; height: 70% ">
                        <img class="card-img-top border-up border-up height-img-card" src="{{$product->image}}"
                             alt="Card image">
                        <div class="card-body">
                            <p class="height-text-card green-text font-size-custom-big text-center"><strong>{{\Illuminate\Support\Str::limit($product->name,60)}}</strong></p>
                            <p class="height-text-card orange-text font-size-custom text-center"><strong>{{ number_format($product->price, 0, ',', '.') }} VNĐ</strong></p>
                            <div class="d-flex align-content-center justify-content-center mitr-medium ">
                                <button class="btn btn-outline-white btn-lg rounded-pill shadow-effect
                                border-white text-white border-2 green-bg mitr-small buy-button button-shake" data-id="{{$product->id}}">
                                    <div class="mx-1 font-size-custom">THÊM VÀO GIỎ HÀNG</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="d-flex align-content-center justify-content-center mt-4">
        <a href="{{route('homepage.product.index')}}"
           class="btn green-bg btn-block mb-3 rounded-pill border-2 border-white text-white mitr-medium longer-btn shadow-test button-shake">XEM
            THÊM</a>
    </div>
</div>
<style>
    .section-4 {
        background-image: url("{{asset('images/sec4/background.png')}}");
    }
    .longer-btn {
        width: 200px;
    }
    .headersec4-product {
        display: block;
        justify-content: center;
        text-align: center;
    }
    .header-test-1 {
        font-size: 40px;
        font-family: Mitr-Regular, sans-serif;
        color: white;
        line-height: 5px;
        padding-top: 20px;
    }
    .header-test-2 {
        font-size: 50px;
        font-family: Mitr-SemiBold, sans-serif;
        color: white;
    }
    .header-test-1-mb {
        font-size: 22px;
        font-family: Mitr-Regular, sans-serif;
        color: white;
        line-height: 5px;
        padding-top: 20px;
    }
    .header-test-2-mb {
        font-size: 27px;
        font-family: Mitr-SemiBold, sans-serif;
        color: white;
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
    .font-size-custom-big{
        font-size: 1.2rem;
        font-family: Mitr-Medium, sans-serif;
    }
    .orange-text {
        color: #F79420
    }

    .height-img-card {
        object-fit: cover;
    }
    .height-text-card{
        height: 3.5rem;
    }
    .carousel-sec-4 {
        width: 70%;
        margin: 0px auto;
    }

    .section-4.slick-slide {
        margin: 10px;
    }

    .section-4.slick-slide img {
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

    .custom-prev-arrow-4,
    .custom-next-arrow-4 {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        cursor: pointer;
        scale: 75%;
        z-index: 2;
    }

    .custom-prev-arrow-4 {
        left: 100px;
    }

    .custom-next-arrow-4 {
        right: 100px;
    }

    .slick-dots {
        display: flex;
        justify-content: center;
        list-style: none;
        padding: 0;
        margin-top: 1rem;
    }

    .section-4.slick-dots li {
        margin: 0 5px;
    }

    .section-4.slick-dots button {
        background-color: #fff; /* Màu nền trắng cho dot không active */
        border: 2px solid #59843d; /* Viền xanh cho dot không active */
        color: transparent; /* Màu chữ xanh cho dot không active */
        padding: 5px;
        width: 12px; /* Đường kính của dot */
        height: 12px; /* Đường kính của dot */
        border-radius: 50%; /* Hình dạng tròn cho dot */
        cursor: pointer;
    }

    .section-4.slick-dots .slick-active button {
        background-color: #59843d; /* Màu nền xanh cho dot active */
        border-color: #59843d; /* Viền xanh cho dot active */
        color: transparent; /* Màu chữ trắng cho dot active */
    }

    .btn-long {
        width: 150px;
    }

    @media only screen and (max-width: 800px) {
        .img-sec4 {
            scale: 70%;
        }

        .custom-prev-arrow-4 {
            left: -17px;
            position: absolute;
            top: 40%;
            scale: 50%;
            opacity: 50%;
        }

        .custom-next-arrow-4 {
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
        $('.carousel-sec-4').slick({
            infinite: true,
            // variableWidth: true,
            speed: 900,
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: $('.custom-prev-arrow-4'),
            nextArrow: $('.custom-next-arrow-4'),
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

