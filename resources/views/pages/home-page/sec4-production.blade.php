<div class="section-4 pt-5 mb-5 mt-2">
    {{--    <div class="d-flex align-content-center justify-content-center img-sec4">--}}
    {{--        <img src="{{asset('images/sec4/sanpham.png')}}" alt="" style="" class="img-fluid ">--}}
    {{--    </div>--}}
    <div class="headersec4-product d-none d-sm-block mb-5">
        {{--        <p class="header-test-1">Niềm tự hào của</p>--}}
        {{--        <p class="header-test-2">MIN MIN CARE</p>--}}
        <img src="{{asset('images/sec4/Group 5.png')}}" class="headersec4-product-img">
    </div>
    <div class="headersec4-product d-block d-sm-none">
{{--        <img src="{{asset('images/sec4/Group 5.png')}}" class="headersec4-product-mb">--}}
        <p class="header-test-white-Semi-mb">Niềm tự hào của</p>
        <p class="header-test-white-Black-mb">MIN MIN CARE</p>
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
                    <div class="card rounded-custom shadow-effect me-1 col-11 col-sm-8 col-md-11">
                        <a href="{{route('homepage.product.show',['slug' => $product->slug])}}">
                            <img class="card-img-top border-up border-up height-img-card" src="{{$product->image}}"
                                 alt="Card image">
                        </a>
                        <div class="card-body">
                            <a href="{{route('homepage.product.show',['slug' => $product->slug])}}" style="color: unset; text-decoration: unset">
                                <p class="green-text font-size-custom-big text-center " style="height: 3rem">
                                    <strong>{{\Illuminate\Support\Str::limit($product->name,60)}}</strong></p>
                                <p class="green-text text-center line-custom">
                                    <strong>{{\Illuminate\Support\Str::limit($product->product_type,15)}}</strong></p>
                                <p class=" orange-text font-size-custom text-center line-custom">
                                    <strong>{{ number_format($product->price, 0, ',', '.') }} VNĐ</strong></p>
                            </a>
                            <div class="d-flex align-content-center justify-content-center mitr-medium ">
                                <button class="btn btn-outline-white btn-sm rounded-pill shadow-effect
                                border-white text-white border-2 green-bg mitr-small buy-button button-shake"
                                        data-id="{{$product->id}}">
                                    <div class="mx-4 font-size-custom">THÊM VÀO GIỎ HÀNG</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="d-flex align-content-center justify-content-center mt-5 pb-5">
        <a href="{{route('homepage.product.index')}}"
           class="btn green-bg btn-block mb-3 rounded-pill border-2 border-white text-white mitr-medium longer-btn shadow-test button-shake">XEM
            THÊM</a>
    </div>
</div>
<style>
    .section-4 {
        background-image: url("{{asset('images/sec4/background.png')}}");
    }
    .line-custom {
        line-height: 0.4; /* Thiết lập line-height theo ý muốn (thường là 1 hoặc số gần 1) */
    }
    .longer-btn {
        width: 200px;
    }

    .headersec4-product {
        display: block;
        justify-content: center;
        text-align: center;
    }

    .headersec4-product-img {
        width: 30%;
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

    .header-test-1-m {
        font-size: 25px;
        font-family: Mitr-Regular, sans-serif;
        color: white;
        line-height: 5px;
        padding-top: 20px;
    }

    .header-test-2-m {
        font-size: 32px;
        font-family: Mitr-SemiBold, sans-serif;
        color: white;
    }

    .headersec4-product-mb {
        width: 90vw;
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

    .font-size-custom {
        font-size: 0.9rem!important;
        font-family: Montserrat-Bold, sans-serif !important;
    }

    .font-size-custom-big {
        font-size: 1.2rem;
        font-family: Montserrat-Bold, sans-serif;
    }

    .orange-text {
        color: #F79420
    }

    .height-img-card {
        object-fit: cover;
        height: 200px;
    }

    .height-text-card {
        height: 3.5rem;
    }

    .carousel-sec-4 {
        width: 80%;
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
        left: 20px;
    }

    .custom-next-arrow-4 {
        right: 20px;
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

    @media screen and (max-width: 1200px) {
        .headersec4-product-img {
            width: 39%;
        }
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

        .height-text-card {
            height: 3.5rem;
        }

        .height-img-card {
           object-fit: cover;
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
                    breakpoint: 1401,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>

