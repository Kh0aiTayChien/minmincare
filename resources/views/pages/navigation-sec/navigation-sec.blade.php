<a class="navigation-sec d-none d-lg-flex align-items-center justify-content-center" href="{{route('gioi-thieu.index')}}">
    <div class="" >
        <img src="{{asset('images/navigation/Group 12.png')}}" alt="" class="mx-auto headernavigation" style="">
{{--        <div class="d-flex align-content-center justify-content-center">--}}
{{--            <a href="{{route('gioi-thieu.index')}}" class="btn green-bg btn-block mb-3 rounded-pill border-2 border-white text-white mitr-medium longer-btn shadow-test button-shake">TÌM HIỂU THÊM</a>--}}
{{--        </div>--}}
    </div>
</a>
<a class="navigation-mobile-sec d-block d-lg-none align-items-center justify-content-center" href="{{route('gioi-thieu.index')}}">
    <div class="pt-2">
        <div class="headersec4-product d-block d-md-none">
{{--            <p class="header-test-1-mb">Giới thiệu về</p>--}}
{{--            <p class="header-test-2-mb">MIN MIN CARE</p>--}}
            <img src="{{asset('images/navigation/Group 12.png')}}" alt="" class="mx-auto headernavigation-mb" style="">
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
        /*height: 35vh;*/
        padding-top: 3%;
        padding-bottom: 4%;
    }
    .headernavigation {
        width: 32vw;
    }
    .headernavigation-mb {
        width: 90vw;
    }
    .navigation-mobile-sec{
        background-image: url("{{asset('images/navigation/background-navi.png')}}");
        background-size: cover;
        background-position-x: right;
        padding-bottom: 5%;
        padding-top: 3%;
    }
    a .navigation-mobile-sec {
        color: unset !important;
        text-decoration: none !important;
    }
    .mitr-medium {
        font-family: Mitr-Medium, Mitr, sans-serif;
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
    @media screen and (max-width: 1200px) {
        .headernavigation {
            width: 35vw;
        }
    }
</style>
