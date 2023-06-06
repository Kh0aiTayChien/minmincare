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

    <div class="right-action shadow-effect">
        <div><img src="{{asset('images/sec1/cart.png')}}" alt=""></div>
        <br>
        <div><img src="{{asset('images/sec1/message.png')}}" alt=""></div>
    </div>

</div>
<style>
    .right-action{
        margin-right: 2%;
        margin-top: 58vh;
        float: right;
        scale: 70%;
    }

    .list-product .list-product-button {
        width: 300%;
        display: none;
    }
</style>
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
</script>
