<div class=" d-flex justify-content-center align-items-center custom-mt">
    <img src="{{asset('images/sec2/Group 1344.png')}}" alt="" style="scale: 65%">
</div>

<div class=" container-fluid custom-padding ">
    <div class="row gx-5 gy-4 pos-center">
        @foreach($products as $product)
            <div class=" col-lg-3 col-sm-4 col-xs-12 custom-ms shadow-effect">
                <div class="card border-radius mb-3" style="width: 100%; overflow: hidden">
                    <div class="d-flex justify-content-center align-items-center">
                        <img class="card-img-top height-img-card" src="{{$product->image}}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-center">
                            <p class="text-center mitr-medium
                            green-text">{{\Illuminate\Support\Str::limit($product->name,45)}}</h5>
                        </p>
                        <p class="card-text text-center mitr-big orange-text
                        ">{{ number_format($product->price, 0, ',', '.') }} vnđ</p>

                        <p class="card-text text-center mitr-small">Xem chi tiết</p>
                        <div class="d-flex justify-content-center align-content-center">
                            <button class="btn btn-outline-white btn-lg rounded-pill shadow-effect
                                border-white text-white border-2 green-bg mitr-small buy-button button-shake"
                                    data-id="{{$product->id}}">
                                THÊM SẢN PHẨM
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


<style>

    .pos-center{
    }
    .custom-ms{
        margin-left: 3rem;
    }
    .custom-padding{
        padding:  8rem 8rem 8rem;
    }
    @media screen and (min-width: 1800px) {
        .custom-padding {
            padding: 8rem 25rem;
        }
    }

    @media screen and (max-width: 767px) {
        .pos-center {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .custom-padding{
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
    .custom-ms{
        margin-left: 0
    }

    .article-show {
        margin: 0 5rem 0 5rem;
    }

    .height-img-card {
        height: 225px;
        width: 150px;
        object-fit: contain;
        max-width: 100%;
        max-height: 100%;
    }

    .card {
        overflow: hidden;
    }

    .card-title {
        height: 3rem;
    }

    .border-radius {
        border-radius: 23px;
    }

    .shadow-effect {
        filter: drop-shadow(3px 3px 3px rgba(0, 0, 0, 0.25));
    }

    .mitr-small {
        font-family: Mitr-Medium, Mitr, sans-serif;
        font-size: small;
        letter-spacing: 1.5px; /* Điều chỉnh giá trị này để thay đổi khoảng cách */
    }

    .mitr-medium {
        font-family: Mitr-Medium, Mitr, sans-serif;
        font-size: medium;
    }

    .mitr-big {
        font-family: Mitr-Medium, Mitr, sans-serif;
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
