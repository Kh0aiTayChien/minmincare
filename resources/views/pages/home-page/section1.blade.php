<div class="section1 position-relative d-flex justify-content-center align-items-center">
    <div class=" d-flex  align-items-center  position-absolute h-100 row flex-column-reverse" style="z-index: 200; padding-top: 30%">
        <img src="{{asset('images/sec1/btn-curve.png')}}" alt="" class="mt-5 btn-curve">
        <div class="call-out-button d-flex justify-content-center align-items-center mb-5">
            <button
                class="btn btn-outline-white btn-lg rounded-pill border-white text-white border-2 green-bg me-1 mitr-medium">
                ĐĂNG KÍ ĐẠI LÝ
            </button>
            <button class="btn btn-outline-white btn-lg rounded-pill border-white text-white border-2 mitr-medium">
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
        margin-left: -4%;
    }

    .carousel-control-next {
        margin-right: -4%;
    }

    .btn-outline-white {
        border-color: white;
        border-width: 2px;
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

    @media only screen and (max-width: 800px) {
        .call-out-button {
            display: none !important;
        }
        .btn-curve{
            width: 50%;
        }

        .carousel-control-prev {
            margin-left: 1px;
            scale: 50%;
            z-index: 999;
        }

        .carousel-control-next {
            margin-right: 1px;
            scale: 50%;
            z-index: 999;
        }
    }
</style>
