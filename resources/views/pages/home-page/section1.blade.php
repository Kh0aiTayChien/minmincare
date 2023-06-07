<div class="section1 position-relative d-flex justify-content-center align-items-center">
    <div class="call-out-button position-absolute" style="z-index: 200; padding-top: 30%">
        <button class="btn btn-outline-white btn-lg rounded-pill border-white text-white border-2 green-bg me-1 mitr-medium">
            ĐĂNG KÍ ĐẠI LÝ
        </button>
        <button class="btn btn-outline-white btn-lg rounded-pill border-white text-white border-2 mitr-medium">
            MUA SẢN PHẨM
        </button>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/sec1/mom-son.jpg')}}" class="d-block " alt="img-slide">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/sec1/mom-son.jpg')}}" class="d-block " alt="img-slide">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/sec1/mom-son.jpg')}}" class="d-block " alt="img-slide">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
            <img src="{{asset('images/arrow-l.png')}}" alt="" style="" class="img-fluid">
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
            <img src="{{asset('images/arrow-r.png')}}" alt="" style="" class="img-fluid">
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<style>
    .section1{
        width: 100vw;
    }
    .carousel-control-prev {
        margin-left: -4%;
        z-index: 9999;
    }

    .carousel-control-next {
        margin-right: -4%;
        z-index: 9999;
    }
    @media only screen and (max-width: 800px) {
        .carousel-control-prev {
            margin-left: 5%;
            scale: 70%;
        }

        .carousel-control-next {
            margin-right: 5%;
            scale: 70%;
        }
    }
    .btn-outline-white {
        border-color: white;
        border-width: 2px;
    }
    .btn-outline-white:hover{
        background-color: #59843d;
    }
    .green-bg{
        background-color: #59843d;
    }
    .mitr-medium{
        font-family: Mitr-Medium, Mitr, sans-serif;
    }
</style>
