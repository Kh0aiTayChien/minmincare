<div class="section-7">
    <div class="row" style="">
        <div class="col"></div>
        <div class="col mt-4 mb-4">
            <img src="{{asset('images/sec7/Asset 1.svg')}}" alt="" style="width: 70%">
        </div>
    </div>

    <div class="slick-carousel position-relative">
        <button class="custom-prev-arrow" aria-label="Previous">
            <img src="{{asset('images/arrow-l.png')}}" alt="Previous"/>
        </button>
        <button class="custom-next-arrow" aria-label="Next">
            <img src="{{asset('images/arrow-r.png')}}" alt="Previous"/>
        </button>

        <div class="carousel-sec-7">
            <div><img src="{{asset('images/sec7/cmt.svg')}}" class="img-fluid"></div>
            <div><img src="{{asset('images/sec7/cmt.svg')}}" class="img-fluid"></div>
            <div><img src="{{asset('images/sec7/cmt.svg')}}" class="img-fluid"></div>
            <div><img src="{{asset('images/sec7/cmt.svg')}}" class="img-fluid"></div>
            <div><img src="{{asset('images/sec7/cmt.svg')}}" class="img-fluid"></div>
            <div><img src="{{asset('images/sec7/cmt.svg')}}" class="img-fluid"></div>
        </div>
    </div>
</div>
<style>
    .section-7 {
        background-color: #F1F1F2;
        height: 70vh;
    }

    .wrapper {
        width: 100%;
        padding-top: 20px;
        text-align: center;
    }

    .carousel-sec-7 {
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
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        cursor: pointer;
    }

    .custom-prev-arrow {
        left: 4rem;
    }

    .custom-next-arrow {
        right: 4rem;
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
        });
    });
</script>