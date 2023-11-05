<div class="sec10pc mt-5">
    <div class="customer-pc">
        <p class="text1customersec10">Đăng ký đại lý</p>
        <p class="text2customersec10">MIN MIN CARE</p>
        <form class="form-customer" id="registration-form">

            <input class="svg-input-customer-test" placeholder="Họ và tên" type="text" id="fullname" name="fullname" required><br><br>
            <input class="svg-input-customer-test" placeholder="Số điện thoại" type="tel" id="phone" name="phone" required><br><br>
            <textarea class="svg-input-bot" placeholder="Bạn có câu hỏi gì cho chúng tôi ?" id="question" name="question" required></textarea><br>
            <button type="submit" class="customer-button">
                <img src="{{asset('images/sec10/Group 2897.png')}}" class="button5 button-shake">
            </button>
        </form>
    </div>
</div>

<div class="sec10mb mt-5">
    <div class="customer-mb">
        <p class="text1customersec10mb">ĐĂNG KÝ ĐẠI LÝ</p>
        <p class="text2customersec10mb">MIN MIN CARE</p>
        <form class="form-customer-mb" id="registration-form-mb">

            <input class="svg-input-customer-mb  customer-top" placeholder="Họ và tên" type="text" id="fullnamem" name="fullname" required><br>

            <input class="svg-input-customer-mb" placeholder="Số điện thoại" type="tel" id="phonem" name="phone" required><br>

            <textarea class="svg-input-bot-mb" placeholder="Bạn có câu hỏi gì cho chúng tôi ?" id="questionm" name="question" required></textarea><br>

            <button type="submit" class="customer-button-mb">
                GỬI THÔNG TIN NGAY!
            </button>

        </form>
    </div>
    <div class="spacesec10mb"></div>
</div>

<script>
    $('#registration-form').submit(function (e) {
        e.preventDefault();
        let fullname = $('#fullname').val();
        let phone = $('#phone').val();
        let question = $('#question').val();
        let csrfToken = $('meta[name="csrf-token"]').attr('content');
        alert('Bạn đã gửi thông tin thành công');
        $('.svg-input-customer-mb').val('');
        $('.svg-input-bot-mb').val('');
        $.ajax({
            url: '/send-register', // Thay đổi đường dẫn tới phần xử lý dữ liệu
            method: 'POST',
            data: {
                name: fullname,
                phone: phone,
                question: question,
            },
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function (response) {

            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    });

    $('#registration-form-mb').submit(function (e) {
        e.preventDefault();
        let fullname = $('#fullnamem').val();
        let phone = $('#phonem').val();
        let question = $('#questionm').val();
        let csrfToken = $('meta[name="csrf-token"]').attr('content');
        alert('Bạn đã gửi thông tin thành công');
        $('.svg-input-customer-mb').val('');
        $('.svg-input-bot-mb').val('');
        $.ajax({
            url: '/send-register', // Thay đổi đường dẫn tới phần xử lý dữ liệu
            method: 'POST',
            data: {
                name: fullname,
                phone: phone,
                question: question,
            },
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function (response) {

                // Add any other actions you want to perform on success here
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    });
</script>
