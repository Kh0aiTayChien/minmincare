<div class="section-8">
    <div class="d-flex align-content-center justify-content-center img-sec5 pt-4">
        <img src="{{asset('images/nga-min/sec8/chiasegiatri.png')}}" alt="" style="" class="img-fluid imgsec8-NM">
    </div>

    <div class="slick-carousel position-relative">
        <button class="custom-prev-arrow-8" aria-label="Previous">
            <img src="{{asset('images/arrow-l.png')}}" alt="Previous" class="shadow-effect"/>
        </button>
        <button class="custom-next-arrow-8" aria-label="Next">
            <img src="{{asset('images/arrow-r.png')}}" alt="Next" class="shadow-effect"/>
        </button>

        <div class="carousel-sec-8">
            @foreach($news as $article)
                <div class="d-flex justify-content-center">
                    <div class="card rounded-custom shadow-effect me-1"
                         style="width:20rem; height: 70% ">
                        <img class="card-img-top border-up border-up height-img-card" src="{{$article->image}}"
                             alt="Card image">
                        <div class="card-body">
                            <p class="height-text-card green-text font-size-custom"><strong>{{\Illuminate\Support\Str::limit($article->title,60)}}</strong></p>
                            <p class="card-text ">{{ preg_replace('/<[^>]*>/', '', \Illuminate\Support\Str::limit(strip_tags($article->content), 77)) }}</p>
                            <div class="d-flex align-content-center justify-content-center mitr-medium ">
                                <a href="#" class="btn green-border green-text btn-sm mb-3 rounded-pill btn-long">XEM
                                    CHI TIẾT</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="d-flex align-content-center justify-content-center">
        <a href="#"
           class="btn green-bg btn-block mb-3 rounded-pill border-2 border-white text-white mitr-medium longer-btn shadow-test button-shake">XEM
            THÊM</a>
    </div>
</div>
<style>
    .section-8 {
        /*height: 100vh;*/
    }
    .font-size-custom{
        font-size: 1rem;
    }

    .height-text-card{
        height: 2rem;
    }
    .green-text {
        color: #59843d;
    }
    .green-bg {
        background-color: #59843d;
    }
    .mitr-medium {
        font-family: Mitr-Medium, Mitr, sans-serif;
    }
    .mitr-small {
        font-family: "Mulish SemiBold", sans-serif;
    }

    .longer-btn {
        width: 200px; /* Điều chỉnh chiều dài của nút */
    }
    .imgsec8-NM {
        scale: 72%;
    }
    .green-border {
        border: 2px solid #59843d;
    }
    .shadow-effect {
        filter: drop-shadow(3px 3px 3px rgba(0, 0, 0, 0.25));
    }
    .rounded-custom {
        border-radius: 23px
    }

    .height-img-card {
        height: 200px;
        width: 404px;
    }
    .carousel-sec-8 {
        width: 70%;
        margin: 0px auto;
    }

    .section-8.slick-slide {
        margin: 10px;
    }

    .section-8.slick-slide img {
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

    .custom-prev-arrow-8,
    .custom-next-arrow-8 {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        cursor: pointer;
        scale: 75%;
        z-index: 2;
    }

    .custom-prev-arrow-8 {
        left: 100px;
    }

    .custom-next-arrow-8 {
        right: 100px;
    }

    .slick-dots {
        display: flex;
        justify-content: center;
        list-style: none;
        padding: 0;
        margin-top: 1rem;
    }

    .section-8.slick-dots li {
        margin: 0 5px;
    }

    .section-8.slick-dots button {
        background-color: #fff; /* Màu nền trắng cho dot không active */
        border: 2px solid #59843d; /* Viền xanh cho dot không active */
        color: transparent; /* Màu chữ xanh cho dot không active */
        padding: 5px;
        width: 12px; /* Đường kính của dot */
        height: 12px; /* Đường kính của dot */
        border-radius: 50%; /* Hình dạng tròn cho dot */
        cursor: pointer;
    }

    .section-8.slick-dots .slick-active button {
        background-color: #59843d; /* Màu nền xanh cho dot active */
        border-color: #59843d; /* Viền xanh cho dot active */
        color: transparent; /* Màu chữ trắng cho dot active */
    }

    .btn-long {
        width: 150px;
    }
    .img-sec5 {
        scale: 80%;
    }

    @media only screen and (max-width: 800px) {
        .img-sec5 {
            scale: 70%;
        }

        .custom-prev-arrow-8 {
            left: -17px;
            position: absolute;
            top: 40%;
            scale: 50%;
            opacity: 50%;
        }

        .custom-next-arrow-8 {
            right: -17px;
            position: absolute;
            top: 40%;
            scale: 50%;
            opacity: 50%;
        }

        .space_sec5 {
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
        $('.carousel-sec-8').slick({
            infinite: true,
            // variableWidth: true,
            speed: 900,
            slidesToShow: 3,
            slidesToScroll: 3,
            dots: true,
            prevArrow: $('.custom-prev-arrow-8'),
            nextArrow: $('.custom-next-arrow-8'),
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

