<div class=" d-flex justify-content-center align-items-center custom-mt ">
    <img src="{{asset('images/sec2/Group 1344.png')}}" alt="" style="scale: 65%" class="custom-top">
</div>
<div class=" mb-4" style="">
    <div class="row px-5 mx-5 mb-5 gx-3 gy-2">
        <div class="col-md-1 col-xs-0"></div>
        <div class="col-md-2  d-flex justify-content-center align-content-center ">
            <button class="tab-button btn btn-outline-white shadow-effect
                                border-white text-white border-2 green-bg mitr-small button-shake active"
                    data-target="tab1" style="width: 100%; border-radius: 10px">
                <div class=" font-size-custom">TẤT CẢ SẢN PHẨM</div>
            </button>
        </div>
        <div class="col-md-2 d-flex justify-content-center align-content-center">
            <button class="tab-button btn btn-outline-white btn-block  shadow-effect
                                border-white text-white border-2 green-bg mitr-small button-shake"
                    data-target="tab2" style="width: 100% ; border-radius: 10px">
                <div class="  font-size-custom">NGŨ CỐC MẸ BẦU</div>
            </button>
        </div>
        <div class="col-md-2 d-flex justify-content-center align-content-center">
            <button class="tab-button btn btn-outline-white btn-block  shadow-effect
                                border-white text-white border-2 green-bg mitr-small button-shake"
                    data-target="tab3" style="width: 100% ; border-radius: 10px">
                <div class=" font-size-custom">SỮA HẠT LỢI SỮA</div>
            </button>
        </div>
        <div class="col-md-2 d-flex justify-content-center align-content-center">
            <button class="tab-button btn btn-outline-white btn-block  shadow-effect
                                border-white text-white border-2 green-bg mitr-small button-shake"
                    data-target="tab4" style="width: 100% ; border-radius: 10px">
                <div class=" font-size-custom">SỮA HẠT DINH DƯỠNG</div>
            </button>
        </div>
        <div class="col-md-2 d-flex justify-content-center align-content-center">
            <button class="tab-button btn btn-outline-white btn-block  shadow-effect
                                border-white text-white border-2 green-bg mitr-small button-shake"
                    data-target="tab5" style="width: 100% ; border-radius: 10px">
                <div class="font-size-custom">HẠT GRANOLA</div>
            </button>
        </div>
    </div>
</div>

<div class=" tabs mb-3 pb-3">
    <div class="row tab tab1  mt-5 gy-4 gx-0 active" style="padding: 0 10%">
        @if(isset($products))
            @foreach( $products as $product)
                <div class="col-lg-3 col-md-4 d-flex justify-content-center align-content-center">
                    <div class="card rounded-custom shadow-effect me-1"
                         style="width:14rem;" href="{{route('homepage.product.show',['slug' => $product->slug])}}">
                        <a href="{{route('homepage.product.show',['slug' => $product->slug])}}">
                        <img class="card-img-top border-up border-up height-img-card" src="{{$product->image}}"
                             alt="Card image">
                        </a>
                        <div class="card-body">
                            <p class="height-text-card green-text font-size-custom-big text-center" style="height: 3rem">
                                <strong>{{\Illuminate\Support\Str::limit($product->name,60)}}</strong></p>
                            <p class="height-text-card green-text text-center">
                                <strong>{{\Illuminate\Support\Str::limit($product->product_type,15)}}</strong></p>
                            <p class="height-text-card orange-text font-size-custom text-center">
                                <strong>{{ number_format($product->price, 0, ',', '.') }} VNĐ</strong></p>
                            <div class="d-flex align-content-center justify-content-center mitr-medium ">
                                <button class="btn btn-outline-white btn-lg rounded-pill shadow-effect
                        border-white text-white border-2 green-bg mitr-small buy-button button-shake"
                                        data-id="{{$product->id}}">
                                    <div class="mx-1 font-size-custom">THÊM VÀO GIỎ HÀNG</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <div class="row tab tab2  mt-5 gy-4 gx-0 " style="padding: 0 10%">
        @if(isset($cereals))
            @foreach( $cereals as $product)
                <div class="col-lg-3 col-md-4 d-flex justify-content-center align-content-center">
                    <div class="card rounded-custom shadow-effect me-1"
                         style="width:14rem;" href="{{route('homepage.product.show',['slug' => $product->slug])}}">
                        <a href="{{route('homepage.product.show',['slug' => $product->slug])}}">
                            <img class="card-img-top border-up border-up height-img-card" src="{{$product->image}}"
                                 alt="Card image">
                        </a>
                        <div class="card-body">
                            <p class="height-text-card green-text font-size-custom-big text-center" style="height: 3rem">
                                <strong>{{\Illuminate\Support\Str::limit($product->name,60)}}</strong></p>
                            <p class="height-text-card green-text text-center">
                                <strong>{{\Illuminate\Support\Str::limit($product->product_type,15)}}</strong></p>
                            <p class="height-text-card orange-text font-size-custom text-center">
                                <strong>{{ number_format($product->price, 0, ',', '.') }} VNĐ</strong></p>
                            <div class="d-flex align-content-center justify-content-center mitr-medium ">
                                <button class="btn btn-outline-white btn-lg rounded-pill shadow-effect
                        border-white text-white border-2 green-bg mitr-small buy-button button-shake"
                                        data-id="{{$product->id}}">
                                    <div class="mx-1 font-size-custom">THÊM VÀO GIỎ HÀNG</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <div class="row tab tab3  mt-5 gy-4 gx-0 " style="padding: 0 10%">
        @if(isset($milk_pregnant))
            @foreach( $milk_pregnant as $product)
                <div class="col-lg-3 col-md-4 d-flex justify-content-center align-content-center">
                    <div class="card rounded-custom shadow-effect me-1"
                         style="width:14rem;" href="{{route('homepage.product.show',['slug' => $product->slug])}}">
                        <a href="{{route('homepage.product.show',['slug' => $product->slug])}}">
                            <img class="card-img-top border-up border-up height-img-card" src="{{$product->image}}"
                                 alt="Card image">
                        </a>
                        <div class="card-body">
                            <p class="height-text-card green-text font-size-custom-big text-center" style="height: 3rem">
                                <strong>{{\Illuminate\Support\Str::limit($product->name,60)}}</strong></p>
                            <p class="height-text-card green-text text-center">
                                <strong>{{\Illuminate\Support\Str::limit($product->product_type,15)}}</strong></p>
                            <p class="height-text-card orange-text font-size-custom text-center">
                                <strong>{{ number_format($product->price, 0, ',', '.') }} VNĐ</strong></p>
                            <div class="d-flex align-content-center justify-content-center mitr-medium ">
                                <button class="btn btn-outline-white btn-lg rounded-pill shadow-effect
                        border-white text-white border-2 green-bg mitr-small buy-button button-shake"
                                        data-id="{{$product->id}}">
                                    <div class="mx-1 font-size-custom">THÊM VÀO GIỎ HÀNG</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <div class="row tab tab4  mt-5 gy-4 gx-0 " style="padding: 0 10%">
        @if(isset($nut_milks))
            @foreach( $nut_milks as $product)
                <div class="col-lg-3 col-md-4 d-flex justify-content-center align-content-center">
                    <div class="card rounded-custom shadow-effect me-1"
                         style="width:14rem;" href="{{route('homepage.product.show',['slug' => $product->slug])}}">
                        <a href="{{route('homepage.product.show',['slug' => $product->slug])}}">
                            <img class="card-img-top border-up border-up height-img-card" src="{{$product->image}}"
                                 alt="Card image">
                        </a>
                        <div class="card-body">
                            <p class="height-text-card green-text font-size-custom-big text-center" style="height: 3rem">
                                <strong>{{\Illuminate\Support\Str::limit($product->name,60)}}</strong></p>
                            <p class="height-text-card green-text text-center">
                                <strong>{{\Illuminate\Support\Str::limit($product->product_type,15)}}</strong></p>
                            <p class="height-text-card orange-text font-size-custom text-center">
                                <strong>{{ number_format($product->price, 0, ',', '.') }} VNĐ</strong></p>
                            <div class="d-flex align-content-center justify-content-center mitr-medium ">
                                <button class="btn btn-outline-white btn-lg rounded-pill shadow-effect
                        border-white text-white border-2 green-bg mitr-small buy-button button-shake"
                                        data-id="{{$product->id}}">
                                    <div class="mx-1 font-size-custom">THÊM VÀO GIỎ HÀNG</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <div class="row tab tab5  mt-5 gy-4 gx-0 " style="padding: 0 10%">
        @if(isset($nuts))
            @foreach( $nuts as $product)
                <div class="col-lg-3 col-md-4 d-flex justify-content-center align-content-center">
                    <div class="card rounded-custom shadow-effect me-1"
                         style="width:14rem;" href="{{route('homepage.product.show',['slug' => $product->slug])}}">
                        <a href="{{route('homepage.product.show',['slug' => $product->slug])}}">
                            <img class="card-img-top border-up border-up height-img-card" src="{{$product->image}}"
                                 alt="Card image">
                        </a>
                        <div class="card-body">
                            <p class="height-text-card green-text font-size-custom-big text-center" style="height: 3rem">
                                <strong>{{\Illuminate\Support\Str::limit($product->name,60)}}</strong></p>
                            <p class="height-text-card green-text text-center">
                                <strong>{{\Illuminate\Support\Str::limit($product->product_type,15)}}</strong></p>
                            <p class="height-text-card orange-text font-size-custom text-center">
                                <strong>{{ number_format($product->price, 0, ',', '.') }} VNĐ</strong></p>
                            <div class="d-flex align-content-center justify-content-center mitr-medium ">
                                <button class="btn btn-outline-white btn-lg rounded-pill shadow-effect
                        border-white text-white border-2 green-bg mitr-small buy-button button-shake"
                                        data-id="{{$product->id}}">
                                    <div class="mx-1 ">THÊM VÀO GIỎ HÀNG</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>

<style>
    .tab-button.active {
        background-color: #ccc;
    }

    .tabs .tab {
        display: none;
    }

    .tabs .tab.active {
        display: flex;
    }
</style>
<script>
    $(document).ready(function () {
        $('.tab-button').click(function () {
            var target = $(this).data('target');

            $('.tab-button').removeClass('active');
            $(this).addClass('active');

            $('.tab').removeClass('active');
            $('.' + target).addClass('active');
        });
    });
</script>

<style>

    .rounded-custom {
        border-radius: 23px
    }

    a {
        text-decoration: unset;
    }

    .pos-center {
    }

    .custom-ms {
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
    @media screen and (min-aspect-ratio: 1/1) and (max-aspect-ratio: 8/5) {
        .custom-top {
            margin-top: 8rem !important;
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
        /*height: 3rem;*/
        line-height: 0.5rem;
    }

    .border-radius {
        border-radius: 23px;
    }

    .shadow-effect {
        filter: drop-shadow(3px 3px 3px rgba(0, 0, 0, 0.25));
    }

    .mitr-small {
        font-family: Mitr-Medium, Mitr, sans-serif;
        font-size: x-small;
        letter-spacing: 1px;
        color: gray;
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
