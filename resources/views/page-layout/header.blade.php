<div class="headerpc fixed-top">
    <div class="inline-container justify-content-center align-items-center">
        <ul class="inline-list-left">
            <li>
                <a href="#"><p>GIỚI THIỆU</p></a>
            </li>
            <li class="list-product position-relative">
                <a href="#"><p>SẢN PHẨM</p></a>
                <div class="list-product-button position-absolute">
                    <button class="btn btn-outline-white btn-sm rounded-pill border-white  border-2 bg-white mt-4">
                        NGŨ CỐC MẸ BẦU
                    </button>
                    <br>
                    <button class="btn btn-outline-white btn-sm rounded-pill border-white bg-white  border-2 mt-2">
                        NGŨ CỐC MẸ SAU SINH
                    </button>
                </div>
            </li>
            <li>
                <a href="#"><p>ĐẠI LÝ</p></a>
            </li>
        </ul>
        <img src="{{asset('images/header/Group 903.svg')}}" class="logo">
        <ul class="inline-list-right">
            <li>
                <a href="#"><p>KIẾN THỨC</p></a>
            </li>
            <li>
                <a href="#"><p>TIN TỨC</p></a>
            </li>
            <li>
                <a href="#"><p>LIÊN HỆ</p></a>
            </li>
        </ul>
    </div>
    <div class="right-action">
        <div><img src="{{asset('images/sec1/cart.png')}}" alt=""></div>
        <br>
        <div><img src="{{asset('images/sec1/message.png')}}" alt=""></div>
    </div>

</div>

<style>
    .right-action {
        margin-right: 2%;
        margin-top: 60vh;
        float: right;
    }

    .list-product .list-product-button {
        width: 300%;
        display: none;
    }
</style>

<div class="headermb fixed-top">
    <div class="inline-container justify-content-center align-items-center">
        <img src="{{asset('images/header/Group 903.svg')}}" class="logomb">
        <img src="{{asset('images/header/Group 1299.png')}}" class="menu">
    </div>
    <nav>
        <ul class="hide iconmb">
            <li class="contact linetop">
                <a href="#sec2" class="linktext aniUtil_dramatic ani_fadeIn"><p>VỀ BĐS CƯ TRÚ</p></a>
            </li>
            <li class="contact linemenu">
                <a href="#sec3" class="linktext aniUtil_dramatic ani_fadeIn"><p>VỀ CHƯƠNG TRÌNH</p></a>
            </li>
            <li class="contact linemenu">
                <a href="#sec5" class="linktext aniUtil_dramatic ani_fadeIn"><p>TỔNG QUAN BĐS HUNGARY</p></a>
            </li>
            <li class="contact linemenu">
                <a href="#sec6" class="linktext aniUtil_dramatic ani_fadeIn"><p>LỢI ÍCH VÀ QUYỀN LỢI</p></a>
            </li>
            <li class="contact linemenu">
                <a href="#sec9" class="linktext aniUtil_dramatic ani_fadeIn"><p>ĐIỀU KIỆN VÀ QUY TRÌNH</p></a>
            </li>
            <li class="contact linemenu">
                <a href="#addInformationmb" class="linktext aniUtil_dramatic ani_fadeIn"><p>LIÊN HỆ</p></a>
            </li>
        </ul>
    </nav>
</div>


<script>
    $(document).ready(function() {
        $('.list-product').hover(
            function() {
                $(this).find('.list-product-button').slideDown(300); // Hiển thị từ từ khi di chuột vào
            },
            function() {
                $(this).find('.list-product-button').slideUp(300); // Ẩn từ từ khi di chuột ra
            }
        );
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
</script>
