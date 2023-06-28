<div class="section1 position-relative d-flex justify-content-center align-items-center">
    <div class=" d-flex  align-items-center  position-absolute h-100 row flex-column-reverse" style="z-index: 200; padding-top: 30%">

        <div class="position-relative d-flex flex-column-reverse">
            <div class="arrow-down position-absolute">
                <img src="{{asset('images/sec1/arrow-down.png')}}" alt="">
            </div>
            <img src="{{asset('images/sec1/btn-curve-bot.png')}}" alt="" class="mt-5 btn-curve">
            <img src="{{asset('images/sec1/btn-curve-mobile.png')}}" alt="" class="mt-5 btn-curve-mobile">
        </div>

        <div class="call-out-button d-flex justify-content-center align-items-center mb-5">
            <button
                class="btn btn-outline-white btn-lg rounded-pill border-white text-white border-2 green-bg me-3 mitr-medium">
                ĐĂNG KÍ ĐẠI LÝ
            </button>
            <button class="btn btn-outline-white btn-lg rounded-pill border-white text-white border-2 ms-3 mitr-medium">
                MUA SẢN PHẨM
            </button>
        </div>

    </div>
    <div id="carouselExampleControls" class="carousel slide w-100" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/sec1/mom-son.jpg')}}" class="img-slide " alt="img-slide">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/sec1/mom-son.jpg')}}" class="img-slide " alt="img-slide">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/sec1/mom-son.jpg')}}" class="img-slide " alt="img-slide">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
            <img src="{{asset('images/arrow-l.png')}}" alt="" style="">
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
            <img src="{{asset('images/arrow-r.png')}}" alt="" style="">
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<style>
    .btn-primary:hover,.btn-primary:focus,.btn-primary:active,
    .btn-primary:active:focus:not(:disabled):not(.disabled),
    .btn:focus, .btn:active, .btn:hover{
        box-shadow: none!important;
        outline: 0;
    }
    .btn-curve{
        width: 100%;
    }
    .btn-curve-mobile{
        display: none;
    }
    .arrow-down{
        margin-left: 49%;
        margin-bottom: 5px;
        scale: 70%;
        cursor: pointer;
        transition: transform 0.5s ease;
    }
    .arrow-down:hover {
        transform: translate(0%, -70%);
    }
    .img-slide {
        object-fit: cover;
        width: 100%;
        height: 100vh;
        object-position: center;
    }

    .section1 {
        height: 100vh;
        overflow: hidden;
    }

    .carousel-control-prev {
        float: left;
        margin-left: -5%;
        scale: 70%;
        z-index: 999;
        margin-top: 28%;
        height: 70px; /* Đặt độ dài mới */
    }

    .carousel-control-next {
        scale: 70%;
        float: right;
        margin-right: -5%;
        margin-top: 28%;
        height: 70px; /* Đặt độ dài mới */
        z-index: 999;
    }

    .btn-outline-white {
        border-color: white;
        border-width: 5px;
    }

    .btn-outline-white:hover {
        background-color: #59843d;
    }

    .green-bg {
        background-color: #59843d;
    }

    .mitr-medium {
        font-family: Mitr-Medium, Mitr, sans-serif;
    }
    @media only screen and (max-width: 1200px) {
        .arrow-down{
            margin-left: 48%;
            margin-bottom: 3px;
            scale: 50%;
        }
    }
    @media only screen and (max-width: 800px) {
        .call-out-button {
            display: none !important;
        }
        .btn-curve{
            display: none;
        }
        .btn-curve-mobile{
            display: block;
            width: 100vw;
        }
        .arrow-down{
            margin-left: 45%;
            margin-bottom: 2px;
            scale: 50%;
        }

        .carousel-control-prev {
            margin-left: 1px;
            scale: 50%;
            z-index: 999;
            margin-top: 85vw;
        }

        .carousel-control-next {
            margin-right: 1px;
            scale: 50%;
            z-index: 999;
            margin-top: 85vw;
        }
    }
</style>
