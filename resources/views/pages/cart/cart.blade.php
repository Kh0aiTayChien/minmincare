<div class=" show-cart container-fluid custom-padding custom-margin ">
    <div class="row">
        <div class="media-product col-lg-8 col-md-12 col-xs-12 ">

            <div id="" style="" class="shadow-effect  ">
                <div class="green-bg mitr-medium text-white " style="height: 2rem ; border-radius: 23px 23px 0 0 ">
                    <p class=" text-center pt-1">GIỎ HÀNG CỦA TÔI </p>
                    </span>
                </div>
                <div class="send-image img-fluid w-100 d-none p-2">
                    <img src="{{ asset('images/header/sent.png') }}" alt="">
                </div>

                <div class=" p-2 mb-5" style="background-color: white;">
                    <div class="table-responsive-lg">
                        <table class="table ">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center">Hình ảnh</th>
                                <th scope="col" class="text-center">Tên sản phẩm</th>
                                <th scope="col" class="text-center">Đơn giá</th>
                                <th scope="col" class="text-center">Số lượng</th>
                                <th scope="col" class="text-center">Thành tiền</th>
                                <th scope="col" class="text-center">Xóa</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($carts) && count($carts) > 0)
                                @foreach($carts as $cart)
                                    <?php
                                    // Lấy giá của sản phẩm và số lượng từ $cart
                                    $price = $cart->Product->price;
                                    $quantity = $cart->quantity;

                                    // Tính tổng giá
                                    $totalPrice = $price * $quantity;
                                    ?>
                                    <tr class="cart" id="{{$cart->id}}">
                                        <th scope="row" class="text-center">
                                            <img src="{{$cart->Product->image}} " class=" cart-img img-fluid"
                                                 style="; width: 108px; object-fit: cover"
                                                 alt="Ảnh">
                                        </th>
                                        <td>
                                            <h5 class="card-title mitr-medium green-text text-center mt-3"
                                                style="margin-bottom: 1px">{{\Illuminate\Support\Str::limit($cart->Product->name,24)}}</h5>
                                        </td>
                                        <td>
                                            <p class="card-text text-center mitr-small orange-text mt-3">
                                                {{ number_format($cart->Product->price, 0, ',', '.') }}</p>
                                        </td>
                                        <td class="">
                                            <div class="mt-3 h-100  text-center mitr-small">
                                                <div class="d-flex justify-content-center">
                                                    <div
                                                        class=" plus d-flex align-content-center justify-content-center me-2"
                                                        data-id="{{$cart->id}}">
                                                        <div class="cart-circle plus" style="padding-top: 2px">
                                                        </div>
                                                    </div>

                                                    <div class=" quantity d-flex align-content-center justify-content-center me-2 "
                                                         data-id="{{$cart->id}}" style="padding-top: 0">
                                                        {{$cart->quantity}}
                                                    </div>

                                                    <div
                                                        class=" subtraction d-flex align-content-center justify-content-center"
                                                        data-id="{{$cart->id}}">
                                                        <div class="cart-circle minus" style="padding-top: 2px">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="card-text text-center mitr-small orange-text mt-3 price-item"
                                               data-price="{{$cart->Product->price}}">
                                                {{ number_format($totalPrice, 0, ',', '.') }}</p>
                                        </td>
                                        <td>
                                            <p class="text-center mt-3">
                                                <i class="fas fa-times cancel-item" data-id="{{$cart->id}}"></i>
                                            </p>
                                        </td>
                                    </tr>
                                @endforeach
                            @else

                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
        <div class="description-product col-xl-4 col-lg-4 col-md-12 col-xs-12  ">
            <div class="send-form">
                <div class="d-flex align-content-center justify-content-center mitr-medium">
                    THÔNG TIN LIÊN HỆ
                </div>
                <form action="{{ route('homepage.cart.send') }}" method="POST" enctype="multipart/form-data"
                      id="cart-form"
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
                            class="btn green-bg btn-block mt-2 w-100 text-white mitr-medium submit-cart shadow-effect">
                        ĐẶT MUA
                        NGAY
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
    .show-product {
        max-width: 100%;
    }

    .card {
        width: 100%;
    }

    .custom-padding {
        padding: 2rem 8rem 2rem 8rem;
    }

    @media (max-width: 1200px) {
        .media-card {
            height: 60vh !important;
        }
    }

    @media (max-width: 800px) {
        .custom-padding {
            padding: 2rem;
        }

        .media-card {
            height: 70vh !important;
        }

        .card {
            z-index: unset;
        }

        .custom-margin {
            margin-top: 2rem !important;
        }

        .card-des {
            display: none;
        }
    }

    .custom-margin {
        margin-top: 10rem;
    }

    body {
        background-color: whitesmoke;
    }
</style>
<script>
    $(document).ready(function () {
        $('.buy-button').on('click', function () {
            let productId = $(this).data('id');
            let csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '/buy-action',
                method: 'POST',
                data: {
                    product: productId,
                    _token: csrfToken,
                },
                success: function (response) {
                    $('.cart').trigger('click');
                    if (response.status === undefined) {
                        $('.cart-product-list').append(response);
                        $('.empty-image').addClass('d-none');
                    } else if (response.status === 'exist_cart') {
                        let quantity = response.quantity;
                        let cart = response.cart;
                        $("#" + cart).find(".quantity").text(quantity);

                    }
                },
                error: function (xhr, status, error) {
                    // Xử lý khi có lỗi xảy ra
                    console.error(error);
                }
            });
        });

        $(document).on('click', '.plus', function () {
            $('body').prop('disabled', true);
            let cartID = $(this).data('id');
            let csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '/plus',
                method: 'POST',
                data: {
                    cart: cartID,
                    _token: csrfToken,
                },
                success: function (response) {
                    if (response.status === "ok") {
                        let quantity = response.quantity;
                        let cart = response.cart;
                        let price_item = response.price;
                        $("#" + cart).find(".quantity").text(quantity);
                        $("#" + cart).find(".price-item").text((quantity * price_item).toLocaleString('vi-VN'));
                    }
                },
                error: function (xhr, status, error) {
                    // Xử lý khi có lỗi xảy ra
                    console.error(error);
                }
            });
            setTimeout(function () {
                $('body').prop('disabled', false);
            }, 200);
        });

        $(document).on('click', '.subtraction', function () {
            let cartID = $(this).data('id');
            console.log(cartID);
            let csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '/subtraction',
                method: 'POST',
                data: {
                    cart: cartID,
                    _token: csrfToken,
                },
                success: function (response) {
                    if (response.status === "ok") {
                        let quantity = response.quantity;
                        let cart = response.cart;
                        let price_item = response.price;
                        $("#" + cart).find(".quantity").text(quantity);
                        $("#" + cart).find(".price-item").text((quantity * price_item).toLocaleString('vi-VN'));
                    } else if (response.status === "delete") {
                        let cart = response.cart;
                        $("#" + cart).remove();
                    }
                },
                error: function (xhr, status, error) {
                    // Xử lý khi có lỗi xảy ra
                    console.error(error);
                }
            });
        });

        $(document).on('click', '.cancel-item', function () {
            let cartID = $(this).data('id');
            let csrfToken = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: '/delete_cart',
                method: 'POST',
                data: {
                    cart: cartID,
                    _token: csrfToken,
                },
                success: function (response) {
                    let cart = response.cart;
                    $("#" + cart).remove();

                    console.log($("#" + cart))
                },
                error: function (xhr, status, error) {
                    // Xử lý khi có lỗi xảy ra
                    console.error(error);
                }
            });
        });

        $('#cart-form').submit(function (e) {
            e.preventDefault();
            let name = $('.name').val()
            let phone = $('.phone').val()
            let address = $('.address').val()
            let csrfToken = $('meta[name="csrf-token"]').attr('content');
            alert('Bạn đã gửi thông tin thanh toán thành công')
            $.ajax({
                url: '/send',
                method: 'POST',
                data: {
                    name: name,
                    phone: phone,
                    address: address,
                },
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function (response) {
                    // alert('Bạn đã gửi thông tin thanh toán thành công')
                    // $('.card-cart').remove();
                    // $('.lds-dual-ring').removeClass('d-none');
                    // $('.empty-image').addClass('d-none');
                    // setTimeout(function () {
                    //     $('.cart-product-list').hide();
                    //     $('.send-form').hide();
                    //     $('.lds-dual-ring').addClass('d-none');
                    //     $('.send-image').removeClass('d-none'); // Ẩn lớp 'send-image' sau 5 giây
                    // }, 1500);
                    // setTimeout(function () {
                    //     $('.empty-image').removeClass('d-none');
                    //     $('.send-image').addClass('d-none'); // Ẩn lớp 'send-image' sau 5 giây
                    //     $('.cart-product-list').show(); // Ẩn lớp 'cart-product-list' sau 5 giây
                    //     $('.send-form').show();
                    // }, 3000);
                    // $('.empty-image').removeClass('d-none');
                },
                error: function (xhr, status, error) {
                    console.error(error);
                }
            });
        });
        $(document).ready(function () {
            let popup = $("#popup");
            popup.draggable();
        });
    });
</script>
