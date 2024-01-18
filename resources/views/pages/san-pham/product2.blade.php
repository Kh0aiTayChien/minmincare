<div class=" d-flex justify-content-center align-items-center custom-mt">
    <img src="{{asset('images/sec2/Group 1344.png')}}" alt="" style="scale: 65%" class="custom-top">
</div>
<div class="secp-TT mb-4" style="">
    <div class="row-test mb-4">
        <a href="{{route('homepage.product.index')}}" class="col-xxl-4 col-sm-4 col-9 menuKT shadow-test ">
            <img src="{{asset('images/san-pham/ngu-coc.png')}}" class="col-12 button-shake"></a>


        <div href="" class="col-xxl-4 col-sm-4 col-9 menuKT shadow-test btn-active2 " data-id="2"><img
                src="{{asset('images/san-pham/sua-hat-xanh.png')}}" class="col-12 button-shake"></div>


        <a href="{{route('homepage.product.index3')}}" class="col-xxl-4 col-sm-4 col-9 menuKT shadow-test btn-off3"
           data-id="3"><img src="{{asset('images/san-pham/hat.png')}}" class="col-12 button-shake"></a>

    </div>
</div>

<div class=" container-fluid custom-padding ">
    <div class="row gx-5 gy-4 pos-center nuts product-item" data-id="2">
        @foreach($nut_milks as $product)
            <div class=" col-lg-4 col-sm-4 col-xs-12 custom-ms shadow-effect">
                <div class="card border-radius mb-3" style="width: 100%; overflow: hidden">
                    <a href="{{route('homepage.product.show',['slug' => $product->slug])}}">
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="card-img-top height-img-card" src="{{$product->image}}" alt="Card image cap">
                        </div>
                    </a>
                    <div class="card-body">
                        <p class="card-title d-flex justify-content-center">
                            <p class="text-center mitr-medium
                            green-text">{{\Illuminate\Support\Str::limit($product->name,45)}}</p>
                        </p>
                        <p class="text-center mitr-big orange-text
                        ">{{ number_format($product->price, 0, ',', '.') }} vnđ</p>

                        <p class="text-center mitr-small">Xem chi tiết</p>

                        <div class="d-flex justify-content-center align-content-center">
                            <button class="btn btn-outline-white btn-lg rounded-pill shadow-effect
                                border-white text-white border-2 green-bg mitr-small buy-button button-shake"
                                    data-id="{{$product->id}}">
                                <div class="mx-1">THÊM VÀO GIỎ HÀNG</div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
    a {
        text-decoration: unset;
    }

    .pos-center {
    }

    .custom-ms {
        /*margin-left: 4rem;*/
    }

    .custom-padding {
        /*padding: 1rem 8rem 0 8rem;*/
    }

    @media screen and (min-width: 1400px) {
        .custom-padding {
            width: 65%;
        }

        .custom-top {
            margin-top: 3rem;
        }
    }

    @media screen and (min-aspect-ratio: 1/1) and (max-aspect-ratio: 8/5) {
        .custom-top {
            margin-top: 8rem !important;
        }
    }

    @media screen and (min-width: 770px) and (max-width: 1399px) {
        .custom-padding {
            width: 100%;
            padding-right: 5%;
            padding-left: 5%;
        }

        .custom-ms {
            /*padding-left: 5%;*/
        }
    }

    @media screen and (max-width: 767px) {
        .pos-center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .custom-padding {
            padding: 2rem 2rem 2rem 2rem;
        }

        .custom-mt {
            padding-top: 4rem !important;
        }
    }

    .custom-mt {
        padding-top: 6%;
        transform: translate(1%, 0);
    }

    .custom-ms {
        margin-left: 0
    }

    .article-show {
        margin: 0 5rem 0 5rem;
    }

    .height-img-card {
        object-fit: cover;
        max-width: 100%;
        height: 200px;
    }

    .card {
        overflow: hidden;
    }

    .card-title {
        line-height: 0.5rem;
    }

    .border-radius {
        border-radius: 23px;
    }

    .shadow-effect {
        filter: drop-shadow(3px 3px 3px rgba(0, 0, 0, 0.25));
    }

    .mitr-small {
        font-family: Montserrat-Medium, sans-serif;
        font-size: x-small;
        letter-spacing: 1px;
        color: gray;
    }

    .mitr-medium {
        font-family: Montserrat-Medium, Mitr, sans-serif;
        font-size: medium;
    }

    .mitr-big {
        font-family: Montserrat-SemiBold, Mitr, sans-serif;
        font-size: large;
    }

    .green-text {
        color: #59843d;
    }

    .green-bg {
        background-color: #59843d;
    }

    .orange-text {
        color: #F79420
    }
</style>
