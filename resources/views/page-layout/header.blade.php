<div class="headerpc fixed-top" id="myHeader">
    <div class="background-image"></div>
    <div class="col-xxl-12 col-md-12 row-test">
        <ul class="col-xxl-3 col-md-4 menuleft">
            <li class="col-xxl-4 col-md-4">
                <a href="{{asset('/')}}" id="trang-chu-link">
                    <p>TRANG CHỦ</p>
                </a>
            </li>
            <li class="col-xxl-4 col-md-4">
                <a href="{{asset('gioi-thieu')}}" id="gioi-thieu-link">
                    <p>GIỚI THIỆU</p>
                </a>
            </li>
            <li class="col-xxl-4 col-md-4">
                <a href="{{route('homepage.product.index')}}" id="san-pham-link"><p>SẢN PHẨM</p></a>
            </li>
        </ul>
        <div class="col-xxl-3 col-md-4 logominmin">
            <a href="{{asset('/')}}"><img src="{{asset('images/header/Group 903.svg')}}" class="logo-test col-xxl-11 col-md-11"></a>
        </div>
        <ul class="col-xxl-3 col-md-4 menuright">
            <li class="col-xxl-3 col-md-3">
                <a href="{{asset('dai-ly')}}" id="dai-ly-link"><p>ĐẠI LÝ</p></a>
            </li>
            <li class="col-xxl-3 col-md-3">
                <a href="{{asset('tin-tuc')}}" id="tin-tuc-link"><p>TIN TỨC</p></a>
            </li>
            <li class="col-xxl-3 col-md-3">
                <a href="{{asset('kien-thuc')}}" id="kien-thuc-link"><p>KIẾN THỨC</p></a>
            </li>
            <li class="col-xxl-3 col-md-3">
                <a href="{{asset('lien-he')}}" id="lien-he-link"><p>LIÊN HỆ</p></a>
            </li>
        </ul>
    </div>
</div>

<div class="right-action">

    <div><img src="{{asset('images/header/cart-no-num.png')}}" alt="" class="cart button-shake"  style="width: 70%"></div>
    <br>
    <div><img src="{{asset('images/sec1/mess.png')}}" alt="" class="button-shake" style="width: 70%"></div>
</div>
<div class="overlay d-none">
    @include('page-layout.cart')
</div>
<div id="scrollUp" style="display: block;">
    <i class="fa fa-angle-up button-shake"></i>
</div>


<style>

    #scrollUp {
        text-align: center;
        bottom: 30px;
        cursor: pointer;
        display: none;
        position: fixed;
        right: 10px;
        z-index: 1200;
    }
    #scrollUp i {
        background-color: #59843d;
        height: 36px;
        font-size: 22px;
        width: 36px;
        color: #fff;
        line-height: 32px;
        transition: all .3s ease 0s;
        margin-left: 2px;
        border-radius: 4px;
        border: 2px solid white;
        filter: drop-shadow(3px 3px 3px rgba(0, 0, 0, 0.25));
    }

    .right-action {
        text-align: center;
        bottom: 30px;
        cursor: pointer;
        position: fixed;
        right: 20px;
        z-index: 1000;
    }


    @media only screen and (max-width: 800px) {
        #scrollUp{
            display: none !important;
        }

        .right-action {
            text-align: center;
            bottom: 10px;
            cursor: pointer;
            position: fixed;
            right: 1px;
            z-index: 999;
            width: 20%;
        }

        .overlay {
            height: 100vh;
            width: 100vw;
            position: fixed;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 1000 !important;
        }

        #popup {
            position: fixed;
            float: right;
            top: 5rem !important;
            right: 10% !important;
            width: 80% !important;

            background-color: white;
            border-radius: 23px;
            max-height: 800px;
            transform: none !important;
            z-index: 1000 !important;
        }
    }

    .mitr-medium {
        font-family: Mitr-Medium, Mitr, sans-serif;
    }

    .green-bg {
        background-color: #59843d;
    }

    .shadow-effect {
        filter: drop-shadow(3px 3px 3px rgba(0, 0, 0, 0.25));
    }


    .list-product .list-product-button {
        width: 300%;
        display: none;
    }

    .btn:hover {
        color: #59843D;
    }

    #popup {
        z-index: 9999 !important;
        position: fixed;
        top: 15vh;
        right: 15vw;
        /*transform: translate(-50%, -50%);*/
        width: 300px;
        background-color: white;
        border-radius: 23px;
        max-height: 800px;
    }

    .cart-product-list {
        max-height: 300px; /* Đặt chiều cao tối đa của phần tử */
        overflow-y: auto; /* Sử dụng thanh cuộn dọc khi nội dung vượt quá kích thước */
        overflow-x: hidden;
    }

    .cart-product-list::-webkit-scrollbar {
        width: 6px;
        border-radius: 23px; /* Border radius cho thanh cuộn trên Firefox */
        \ background-clip: padding-box;
    }

    .cart-product-list::-webkit-scrollbar-track {
        border-radius: 12px; /* Border radius cho thanh cuộn trên Firefox */
        margin-right: 2px;
        background-clip: padding-box;
    }

    .cart-product-list::-webkit-scrollbar-thumb {
        background-color: #888888;
        border-radius: 23px; /* Border radius cho thanh cuộn trên Firefox */
        margin-right: 2px;
    }

    /* Định dạng kiểu thanh cuộn trên Chrome, Edge và các trình duyệt mới */
    .cart-product-list::-moz-scrollbar {
        width: 6px;
        border-radius: 23px; /* Border radius cho thanh cuộn trên Chrome và Edge */

    }

    .cart-product-list::-moz-scrollbar-track {
        background-color: #f5f5f5;
        border-radius: 23px; /* Border radius cho thanh cuộn trên Chrome và Edge */
    }

    .cart-product-list::-moz-scrollbar-thumb {
        background-color: #888888;
        border-radius: 23px; /* Border radius cho thanh cuộn trên Chrome và Edge */
    }

    .close-icon {
        position: absolute;
        top: 0.2rem;
        right: 1rem;
        cursor: pointer;
        color: white;
    }

    .close-icon i {
        font-size: 1rem;
    }

    .close-icon i:hover {
        color: orange;
        cursor: pointer;
    }

    .cancel-item:hover {
        color: orange;
        cursor: pointer;
    }

    .plus {
        cursor: pointer;
    }

    .subtraction {
        cursor: pointer;
    }

    .cart-img {
        object-fit: cover;
        height: 5rem;
    }

    .cart {
        cursor: pointer;
        transform: translate(2px, 0);
    }

    .cart-circle {
        width: 18px;
        height: 18px;
        border-radius: 100%;
        position: relative;
        display: inline-block;
        vertical-align: middle;
        background: white;
    }

    .cart-circle:before,
    .cart-circle:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    /* PLUS */
    .cart-circle.plus:before,
    .cart-circle.plus:after {
        background: #59843d;
    }

    .cart-circle.plus:before {
        width: 2px;
        margin: 4px auto;
    }

    .cart-circle.plus:after {
        margin: auto 4px;
        height: 2px;
        box-shadow: none;
    }

    /* MINUS */
    .cart-circle.minus:before {
        background: #59843d;
        margin: auto 4px;
        height: 2px;
    }

    .lds-dual-ring {
        display: inline-block;
        transform: translate(37%, 120%);
        width: 80px;
        height: 80px;
    }

    .lds-dual-ring:after {
        content: " ";
        display: block;
        width: 64px;
        height: 64px;
        margin: 8px;
        border-radius: 50%;
        border: 6px solid #dfc;
        border-color: #59843d transparent #59843d transparent;
        animation: lds-dual-ring 1.2s linear infinite;
    }

    @keyframes lds-dual-ring {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }


    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }
</style>

<div class="headermb fixed-top">
    <div class="background-image-mb"></div>
    <div class="inline-container justify-content-center align-items-center">
        <a href="{{asset('/')}}"><img src="{{asset('images/header/Group 903.svg')}}" class="logomb"></a>
        <img src="{{asset('images/header/Group 34.png')}}" class="menu">
    </div>
    <nav>
        <ul class="hide iconmb">
            <button class="close-btn"><img src="{{asset('images/header/close-btn.png')}}" class="btn-close-img">
            </button>
            <li class="contact linetop">
                <a href="{{asset('/')}}" class="linktext aniUtil_dramatic ani_fadeIn"><p
                        class="textlink textlinktop">TRANG CHỦ</p></a>
            </li>
            <li class="contact linemenu">
                <a href="{{asset('gioi-thieu')}}" class="linktext aniUtil_dramatic ani_fadeIn"><p
                        class="textlink">GIỚI
                        THIỆU</p></a>
            </li>
            <li class="contact linemenu">
                <a href="{{route('homepage.product.index')}}" class="linktext aniUtil_dramatic ani_fadeIn"><p class="textlink">SẢN
                        PHẨM</p></a>
            </li>
            <li class="contact linemenu">
                <a href="{{asset('dai-ly')}}" class="linktext aniUtil_dramatic ani_fadeIn"><p class="textlink">ĐẠI
                        LÝ</p></a>
            </li>
            <li class="contact linemenu">
                <a href="{{asset('kien-thuc')}}" class="linktext aniUtil_dramatic ani_fadeIn"><p class="textlink">KIẾN
                        THỨC</p></a>
            </li>
            <li class="contact linemenu">
                <a href="{{asset('tin-tuc')}}" class="linktext aniUtil_dramatic ani_fadeIn"><p class="textlink">TIN
                        TỨC</p></a>
            </li>
            <li class="contact linemenu">
                <a href="{{asset('lien-he')}}" class="linktext aniUtil_dramatic ani_fadeIn"><p class="textlink">LIÊN HỆ</p>
                </a>
            </li>
        </ul>
    </nav>
</div>


<script>
    $(document).ready(function() {
        // Ẩn nút "Scroll Up" ban đầu
        $('#scrollUp').hide();

        // Kiểm tra sự kiện cuộn trang
        $(window).scroll(function() {
            // Kiểm tra vị trí cuộn của trang
            if ($(this).scrollTop() > 0) {
                // Nếu không ở đầu trang, hiển thị nút "Scroll Up"
                $('#scrollUp').fadeIn();
            } else {
                // Nếu ở đầu trang, ẩn nút "Scroll Up"
                $('#scrollUp').fadeOut();
            }
        });

        // Sự kiện khi nhấp vào nút "Scroll Up"
        $('#scrollUp').click(function() {
            // Di chuyển lên đầu trang
            $('html, body').animate({ scrollTop: 0 }, 369);
            return false;
        });
    });

    $(document).ready(function () {
        $('.list-product').hover(
            function () {
                $(this).find('.list-product-button').slideDown(300); // Hiển thị từ từ khi di chuột vào
            },
            function () {
                $(this).find('.list-product-button').slideUp(300); // Ẩn từ từ khi di chuột ra
            }
        );
        $('.cart').on('click touchstart', function () {
            $('.popup').removeClass('d-none');
            $('.overlay').removeClass('d-none');
        });

        $('.close-icon').on('click touchstart', function () {
            $('.popup').addClass('d-none');
            $('.overlay').addClass('d-none');
        });

    });
    $(document).ready(function () {
        const menu = $('.menu');
        const close = $('.close-btn')
        const hiddenList = $('.hide');
        const navLinks = $('nav ul li a');
        const navMenu = $('nav ul');

        // Thêm trình nghe sự kiện click cho menu element
        menu.on('click', function () {
            // Toggle class "hide" trên phần tử ul
            hiddenList.toggleClass('hide');
        });
        close.on('click', function () {
            // Toggle class "hide" trên phần tử ul
            hiddenList.toggleClass('hide');
        });

        // Thêm trình nghe sự kiện click cho mỗi liên kết trong danh sách
        navLinks.on('click', function () {
            hiddenList.addClass('hide'); // Thêm class 'hide' để ẩn danh sách
        });
    });
    $(window).scroll(function myScrollPCFunction() {
        var header = $('.headerpc');
        var background = header.find('.background-image');
        var scrollTop = $(window).scrollTop();
        var opacity = 1 - (scrollTop / $(window).height()); // Tính toán độ mờ dựa trên vị trí cuộn

        background.css('opacity', Math.max(opacity, 0.7)); // Giới hạn opacity tối thiểu là 0.7
    });
    $(window).scroll(function myScrollMBFunction() {
        var headermb = $('.headermb');
        var background = headermb.find('.background-image-mb');
        var scrollTop = $(window).scrollTop();
        var opacity = 1 - (scrollTop / $(window).height()); // Tính toán độ mờ dựa trên vị trí cuộn

        background.css('opacity', Math.max(opacity, 0.5)); // Giới hạn opacity tối thiểu là 0.7
    });
    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    document.addEventListener('DOMContentLoaded', function() {
        // Lấy URL hiện tại
        var currentUrl = window.location.href;

        // Lấy các thẻ <p> và các liên kết tương ứng
        var gioiThieuLink = document.getElementById('gioi-thieu-link');
        var sanPhamLink = document.getElementById('san-pham-link');
        var daiLyLink = document.getElementById('dai-ly-link');
        var tinTucLink = document.getElementById('tin-tuc-link');
        var kienThucLink = document.getElementById('kien-thuc-link');
        var lienHeLink = document.getElementById('lien-he-link');
        var trangChuLink = document.getElementById('trang-chu-link');
        var routeName = "{{ asset('/') }}";

        if (currentUrl.indexOf(routeName) !== -1) {
            // Đặt màu sắc cho các thẻ tương ứng
            trangChuLink.style.color = "#59843D";
        }
        if (currentUrl.indexOf("nga-minmin") !== -1) {
            // Đặt màu sắc cho các thẻ tương ứng
            trangChuLink.style.color = "#404041";
        }
        // Kiểm tra nếu đang ở link 'gioi-thieu'
        if (currentUrl.indexOf("gioi-thieu") !== -1) {
            // Đặt màu sắc cho các thẻ tương ứng
            gioiThieuLink.style.color = "#59843D";
            trangChuLink.style.color = "#404041";
        }

        // Kiểm tra nếu đang ở link 'san-pham'
        if (currentUrl.indexOf("san-pham") !== -1) {
            // Đặt màu sắc cho các thẻ tương ứng
            sanPhamLink.style.color = "#59843D";
            trangChuLink.style.color = "#404041";
        }
        if (currentUrl.indexOf("dai-ly") !== -1) {
            // Đặt màu sắc cho các thẻ tương ứng
            daiLyLink.style.color = "#59843D";
            trangChuLink.style.color = "#404041";
        }
        if (currentUrl.indexOf("tin-tuc") !== -1) {
            // Đặt màu sắc cho các thẻ tương ứng
            tinTucLink.style.color = "#59843D";
            trangChuLink.style.color = "#404041";
        }
        if (currentUrl.indexOf("kien-thuc") !== -1) {
            // Đặt màu sắc cho các thẻ tương ứng
            kienThucLink.style.color = "#59843D";
            trangChuLink.style.color = "#404041";
        }
        if (currentUrl.indexOf("lien-he") !== -1) {
            // Đặt màu sắc cho các thẻ tương ứng
            lienHeLink.style.color = "#59843D";
            trangChuLink.style.color = "#404041";
        }
    });
</script>
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
                        $("#" + cart).find(".quantity").text(quantity);
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
                        $("#" + cart).find(".quantity").text(quantity);
                    } else if (response.status === "delete") {
                        let cart = response.cart;
                        $("#" + cart).remove();
                        if ($('.cart-product-list').find('.card-cart').length == 0) {
                            $('.empty-image').removeClass('d-none');
                        }
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
                    if ($('.cart-product-list').find('.card-cart').length == 0) {
                        $('.empty-image').removeClass('d-none');
                    }
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
                    $('.card-cart').remove();
                    $('.lds-dual-ring').removeClass('d-none');
                    $('.empty-image').addClass('d-none');
                    setTimeout(function () {
                        $('.cart-product-list').hide();
                        $('.send-form').hide();
                        $('.lds-dual-ring').addClass('d-none');
                        $('.send-image').removeClass('d-none'); // Ẩn lớp 'send-image' sau 5 giây
                    }, 1500);
                    setTimeout(function () {
                        $('.empty-image').removeClass('d-none');
                        $('.send-image').addClass('d-none'); // Ẩn lớp 'send-image' sau 5 giây
                        $('.cart-product-list').show(); // Ẩn lớp 'cart-product-list' sau 5 giây
                        $('.send-form').show();
                    }, 3000);
                    $('.empty-image').removeClass('d-none');
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
