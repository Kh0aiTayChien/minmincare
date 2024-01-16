<div class=" show-cart container-fluid custom-padding custom-margin ">
    <div class="row">
        <div class="media-product offset-lg-2 col-lg-8 col-md-12 col-xs-12 ">

            <div id="" style="" class="shadow-effect  ">
                <div class="green-bg mitr-medium text-white " style="height: 2rem ; border-radius: 23px 23px 0 0 ">
                    <p class=" text-center pt-1">THÔNG TIN THANH TOÁN </p>
                    </span>
                </div>
                <div class="send-image img-fluid w-100 d-none p-2">
                    <img src="{{ asset('images/header/sent.png') }}" alt="">
                </div>

                <div class=" p-2 mb-5" style="background-color: white;">
                    <div class="send-form">
                        <div class="payment-form" >
                            <form id="cart-form">
                                <div class="form-group">
                                    <label class="custom-control custom-radio">
                                        <input name="paymentMethod" type="radio" class="custom-control-input" checked>
                                        <span class="custom-control-label">Chuyển khoản ngân hàng</span>
                                    </label>
                                    <small class="form-text  Montserrat-Medium">
                                        Điều kiện để chọn hình thức thanh toán chuyển khoản là thẻ ATM của Quý khách đã được đăng ký sử dụng internet banking.
                                    </small>
                                </div>

                                <div class="form-group">
                                    <label class="custom-control custom-radio">
                                        <input name="paymentMethod" type="radio" class="custom-control-input">
                                        <span class="custom-control-label Montserrat-Medium">Trả tiền mặt khi nhận hàng</span>
                                    </label>
                                </div>

                                <div class="form-group Montserrat-Medium">
                                    <p>
                                        Thông tin cá nhân của bạn sẽ được sử dụng để xử lý đơn hàng, tăng trải nghiệm sử dụng website, và các mục đích cụ thể khác đã được mô tả trong <a href="/thong-tin.rar">chính sách riêng tư</a> của chúng tôi.
                                    </p>
                                </div>

                                <button type="submit" class="btn btn-primary green-bg mitr-medium text-white">Đặt hàng</button>
                            </form>
                        </div>
                    </div>
                </div>

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
            $('.name').val('')
            $('.phone').val('')
            $('.address').val('')
             var message = "CẢM ƠN BẠN, ĐƠN HÀNG CỦA BẠN ĐÃ ĐƯỢC NHẬN! \n" +
                    "PHƯƠNG THỨC THANH TOÁN: \n" +
                    "1. CHUYỂN KHOẢN NGÂN HÀNG: \n" +
                    "Công ty TNHH Thương mại và Dịch vụ dinh dưỡng Min Min Việt Nam\n" +
                    "Ngân hàng Agribank" +
                    "STK: 2209201006707 \n" +
                    "2. THANH TOÁN TIỀN MẶT: \n" +
                    "Thanh toán cho nhân viên giao hàng ngay khi nhận được đơn hàng của mình";

              alert(message);
                window.location.href = '/san-pham'; // Chuyển hướng về trang chủ


        });

    });
</script>
<style>
    .payment-form {
        max-width: 90%;
        margin: auto;
        padding: 20px;
        background-color: #f7f7f7;
        border-radius: 10px;
    }
    .payment-form .btn-primary {
        background-color: #59843d;
        border-color: #28a745;
        width: 100%;
    }
</style>
