<div id="popup" style="" class="shadow-effect d-none popup draggable">
    <div class="green-bg mitr-medium text-white " style="height: 2rem ; border-radius: 23px 23px 0 0 ">
        <p class=" text-center pt-1">GIỎ HÀNG CỦA TÔI </p>
        <span class="close-icon">
                <i class="fas fa-times"></i>
            </span>
    </div>
    <div class="send-image img-fluid w-100 d-none p-2">
        <img src="{{ asset('images/header/sent.png') }}" alt="" >
    </div>

    <div class="cart-product-list p-2 mb-5" style="background-color: #ddd; height: 25rem">
        @if(isset($carts) && count($carts) > 0)
            @foreach($carts as $cart)
                @include('page-layout.item')
            @endforeach
        @else
            <div class="lds-dual-ring d-none w-100"></div>
            <img src="{{ asset('images/header/empty-cart.png') }}" alt="" class="img-fluid w-100 p-5 empty-image">
        @endif
    </div>
    <div class="send-form">
        <div class="d-flex align-content-center justify-content-center mitr-medium">
            THÔNG TIN LIÊN HỆ
        </div>
        <form action="{{ route('homepage.cart.send') }}" method="POST" enctype="multipart/form-data" id="cart-form"
              class="form-inline p-3">
            @csrf
            <div class="form-group shadow-effect">
                <input type="text" class="form-control name border-0" name="name" id="name"
                       placeholder="Họ và tên (bắt buộc)" required
                       oninvalid="this.setCustomValidity('Vui lòng nhập đầy đủ họ tên')"
                       oninput="this.setCustomValidity('')">
            </div>
            <div class="form-group mt-2 shadow-effect">
                <input type="number" class="form-control phone border-0" name="phone"
                       placeholder="Số điện thoại (bắt buộc)"
                       oninvalid="this.setCustomValidity('Vui lòng nhập số điện thoại')"
                       oninput="this.setCustomValidity('')"
                       required>
            </div>
            <div class="form-group mt-2 shadow-effect">
                <input type="text" class="form-control address border-0" name="address"
                       placeholder="Địa chỉ của bạn"
{{--                       oninvalid="this.setCustomValidity('Vui lòng nhập địa chỉ')"--}}
{{--                       oninput="this.setCustomValidity('')"--}}
                       required>
            </div>
            <button type="submit"
                    class="btn green-bg btn-block mt-2 w-100 text-white mitr-medium submit-cart shadow-effect">ĐẶT MUA
                NGAY
            </button>
        </form>
    </div>
</div>
