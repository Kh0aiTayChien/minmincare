<div class="navigation-sec d-none d-lg-flex align-items-center justify-content-center">
    <div class="">
        <img src="{{asset('images/navigation/gioi-thieu.png')}}" alt="" class="mx-auto " style="scale: 70%">
        <div class="d-flex align-content-center justify-content-center">
            <a href="{{route('gioi-thieu.index')}}" class="btn green-bg btn-block mb-3 rounded-pill border-2 border-white text-white mitr-medium longer-btn shadow-test button-shake">TÌM HIỂU THÊM</a>
        </div>
    </div>
</div>
<div class="navigation-mobile-sec d-block d-lg-none">
    <div class="">
        <div class="d-flex align-content-center justify-content-center">
            <img src="{{asset('images/navigation/gioi-thieu.png')}}" alt="" class="mx-auto img-fluid" style="scale: 50%">
        </div>

        <div class="d-flex align-content-center justify-content-center">
            <a href="{{route('gioi-thieu.index')}}" class="btn green-bg btn-block mb-5 rounded-pill border-2 border-white text-white mitr-medium longer-btn shadow-test button-shake">TÌM HIỂU THÊM</a>
        </div>
    </div>
</div>
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
        font-family: Mitr-Medium, Mitr, sans-serif;
        font-size: medium;
    }
    .longer-btn {
        width: 200px; /* Điều chỉnh chiều dài của nút */
    }
</style>
