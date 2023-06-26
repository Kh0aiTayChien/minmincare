<div id="popup" style="display: none;" class="shadow-effect">
    <div class="green-bg mitr-medium text-white " style="height: 2rem ; border-radius: 23px 23px 0 0 ">
        <p class=" text-center ">GIỎ HÀNG CỦA TÔI </p>
        <span class="close-icon">
                <i class="fas fa-times"></i>
            </span>
    </div>
    <div class="cart-product-list p-2 mb-5 shadow-effect" style="background-color: #ddd; height: 25rem">
        @if(isset($carts))
            @foreach($carts as $cart)
                @include('page-layout.item')
            @endforeach
        @endif
    </div>
    <div class="d-flex align-content-center justify-content-center mitr-medium">
        THÔNG TIN LIÊN HỆ
    </div>
    <form action="{{ route('homepage.cart.send') }}"  method="POST" enctype="multipart/form-data"  id="cart-form"
          class="form-inline p-3" >
        @csrf
        <div class="form-group shadow-effect">
            <input type="text" class="form-control name " name="name" id="name"
                   placeholder="Họ và tên (bắt buộc)" required
                   oninvalid="this.setCustomValidity('Vui lòng nhập đầy đủ họ tên')"
                   oninput="this.setCustomValidity('')">
        </div>
        <div class="form-group mt-2 shadow-effect">
            <input type="number" class="form-control phone" name="phone"
                   placeholder="Số điện thoại (bắt buộc)"
                   oninvalid="this.setCustomValidity('Vui lòng nhập số điện thoại')"
                   oninput="this.setCustomValidity('')"
                   required>
        </div>
        <div class="form-group mt-2 shadow-effect">
            <input type="text" class="form-control address" name="address"
                   placeholder="Địa chỉ của bạn(bắt buộc)"
                   oninvalid="this.setCustomValidity('Vui lòng nhập địa chỉ')"
                   oninput="this.setCustomValidity('')"
                   required>
        </div>
        <button type="submit" class="btn green-bg btn-block mt-2 w-100 text-white mitr-medium submit-cart shadow-effect">ĐẶT MUA NGAY</button>
    </form>
</div>
