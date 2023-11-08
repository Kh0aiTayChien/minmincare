<a class="navigation-sec d-none d-lg-flex align-items-center justify-content-center" href="{{route('gioi-thieu.index')}}">
    <div class="" >
        <img src="{{asset('images/navigation/gioi-thieu.png')}}" alt="" class="mx-auto " style="scale: 70%">
        {{--        <div class="d-flex align-content-center justify-content-center">--}}
        {{--            <a href="{{route('gioi-thieu.index')}}" class="btn green-bg btn-block mb-3 rounded-pill border-2 border-white text-white mitr-medium longer-btn shadow-test button-shake">TÌM HIỂU THÊM</a>--}}
        {{--        </div>--}}
    </div>
</a>
<a class="navigation-mobile-sec d-block d-lg-none align-items-center justify-content-center" href="{{route('gioi-thieu.index')}}" style="text-decoration: unset">
    <div class="pt-2">
        <div class="headersec4-product d-block d-md-none">
            <p class="header-test-1-mb">Giới thiệu về</p>
            <p class="header-test-2-mb">MIN MIN CARE</p>
        </div>
        {{--        <div class="d-flex align-content-center justify-content-center">--}}
        {{--            <a href="" class="btn green-bg btn-block mb-5 rounded-pill border-2 border-white text-white mitr-medium longer-btn shadow-test button-shake">TÌM HIỂU THÊM</a>--}}
        {{--        </div>--}}
    </div>
</a>
<style>
    .navigation-sec{
        background-image: url("{{asset('images/navigation/background-navi.png')}}");
        background-size: cover;
        height: 35vh;
    }
    .navigation-mobile-sec{
        background-image: url("{{asset('images/navigation/background-navi.png')}}");
        background-size: cover;
        background-position-x: right;
    }

    .mitr-medium {
        font-family: Montserrat-Bold, sans-serif;
        font-size: medium;
    }
    .longer-btn {
        width: 200px; /* Điều chỉnh chiều dài của nút */
    }
    .headersec4-product {
        display: block;
        justify-content: center;
        text-align: center;
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
</style>
