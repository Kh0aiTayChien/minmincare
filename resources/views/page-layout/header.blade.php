<div class="headerpc fixed-top" id="myHeader">
    <div class="background-image"></div>
    <div class="inline-container justify-content-center align-items-center">
        <ul class="inline-list-left">
            <li>
                <a href="{{asset('gioi-thieu')}}"><p>GIỚI THIỆU</p></a>
            </li>
            <li class="list-product position-relative">
                <a href="#"><p>SẢN PHẨM</p></a>
                {{--                <div class="list-product-button position-absolute">--}}
                {{--                    <button class="btn btn-outline-white btn-sm rounded-pill border-white--}}
                {{--                    border-2 bg-white mt-4 mitr-medium">--}}
                {{--                        NGŨ CỐC MẸ BẦU--}}
                {{--                    </button>--}}
                {{--                    <br>--}}
                {{--                    <button class="btn btn-outline-white btn-sm rounded-pill border-white bg-white--}}
                {{--                    border-2 mt-2 mitr-medium">--}}
                {{--                        NGŨ CỐC MẸ SAU SINH--}}
                {{--                    </button>--}}
                {{--                </div>--}}
            </li>
            <li>
                <a href="{{asset('dai-ly')}}"><p>ĐẠI LÝ</p></a>
            </li>
        </ul>
        <a href="{{asset('/')}}"><img src="{{asset('images/header/Group 903.svg')}}" class="logo"></a>
        <ul class="inline-list-right">
            <li>
                <a href="#"><p>KIẾN THỨC</p></a>
            </li>
            <li>
                <a href="#"><p>TIN TỨC</p></a>
            </li>
            <li>
                <a href="#Information"><p>LIÊN HỆ</p></a>
            </li>
        </ul>
    </div>

    <div class="right-action shadow-effect">
        <div><img src="{{asset('images/sec1/cart.png')}}" alt="" class="cart ms-2"></div>
        <br>
        <div><img src="{{asset('images/sec1/message.png')}}" alt=""></div>
    </div>

    @include('page-layout.cart')
</div>
<style>
    .mitr-medium {
        font-family: Mitr-Medium, Mitr, sans-serif;
    }

    .green-bg {
        background-color: #59843d;
    }

    .shadow-effect {
        filter: drop-shadow(3px 3px 3px rgba(0, 0, 0, 0.25));
    }

    .right-action {
        margin-right: 2%;
        margin-top: 58vh;
        float: right;
        scale: 70%;
    }

    .list-product .list-product-button {
        width: 300%;
        display: none;
    }

    .btn:hover {
        color: #59843D;
    }

    #popup {
        position: fixed;
        top: 50%;
        right: 0;
        transform: translate(-50%, -50%);
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
        height: 6rem;
        width: auto;
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
            <li class="contact linetop">
                <a href="{{asset('gioi-thieu')}}" class="linktext aniUtil_dramatic ani_fadeIn"><p class="textlink textlinktop">GIỚI
                        THIỆU</p></a>
            </li>
            <li class="contact linemenu">
                <a href="#" class="linktext aniUtil_dramatic ani_fadeIn"><p class="textlink">SẢN PHẨM</p></a>
            </li>
            <li class="contact linemenu">
                <a href="{{asset('dai-ly')}}" class="linktext aniUtil_dramatic ani_fadeIn"><p class="textlink">ĐẠI LÝ</p></a>
            </li>
            <li class="contact linemenu">
                <a href="#sec6" class="linktext aniUtil_dramatic ani_fadeIn"><p class="textlink">KIẾN THỨC</p></a>
            </li>
            <li class="contact linemenu">
                <a href="#sec9" class="linktext aniUtil_dramatic ani_fadeIn"><p class="textlink">TIN TỨC</p></a>
            </li>
            <li class="contact linemenu">
                <a href="#Informationmb" class="linktext aniUtil_dramatic ani_fadeIn"><p class="textlink">LIÊN HỆ</p>
                </a>
            </li>
        </ul>
    </nav>
</div>


<script>
    $(document).ready(function () {
        $('.list-product').hover(
            function () {
                $(this).find('.list-product-button').slideDown(300); // Hiển thị từ từ khi di chuột vào
            },
            function () {
                $(this).find('.list-product-button').slideUp(300); // Ẩn từ từ khi di chuột ra
            }
        );
        $('.cart').click(function () {
            $('#popup').fadeIn();
        });

        $('.close-icon').click(function () {
            $('#popup').fadeOut();
        });

    });
    $(document).ready(function () {
        const menu = $('.menu');
        const hiddenList = $('.hide');
        const navLinks = $('nav ul li a');
        const navMenu = $('nav ul');

        // Thêm trình nghe sự kiện click cho menu element
        menu.on('click', function () {
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
</script>
<script>
    $(document).ready(function () {
        $('.buy-button').click(function () {
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
                    if (response.status === undefined) {
                        $('.cart-product-list').append(response);
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
                        $("#" + cart).fadeOut();
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
                    if (response.status === "ok") {
                        let quantity = response.quantity;
                        let cart = response.cart;
                        $("#" + cart).find(".quantity").text(quantity);
                    } else if (response.status === "delete") {
                        let cart = response.cart;
                        $("#" + cart).fadeOut();
                    }
                },
                error: function (xhr, status, error) {
                    // Xử lý khi có lỗi xảy ra
                    console.error(error);
                }
            });
        });

        $("#cart-form").submit(function (e) {
            e.preventDefault();
            var formData = new FormData($(this)[0]);
            // let name = $('.name').val()
            // let phone = $('.phone').val()
            // let address = $('.address').val()
            console.log(formData);
            // let cartID = form.data('id');
            let csrfToken = $('meta[name="csrf-token"]').attr('content');


            $.ajax({
                url: '/send',
                method: 'POST',
                data: {
                    formData
                },
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function (response) {
                    $('.card-cart').fadeOut();
                    alert('Thông tin đã được gửi thành công! Xin cảm ơn quý khách hàng đã mua hàng');
                },
                error: function (xhr, status, error) {
                    console.error(error);
                }
            });
        });

    });
</script>
