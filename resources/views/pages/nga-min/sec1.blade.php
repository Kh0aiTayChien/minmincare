<div class="sec1-NM">
    <div class="row-test">
        <button type="button" class="imgbtn-NM col-xxl-4 col-md-5" data-bs-toggle="modal"
                data-bs-target="#exampleModal-NM">
            <img src="/images/nga-min/sec1/Asset 1.png" class="buttonvideo-NM col-xxl-12 col-md-12">
        </button>
        <div class="modal fade" id="exampleModal-NM" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-fullscreen">
                <div class="modal-content d-flex flex-row-reverse" style="background-color: rgba(0, 0, 0, 0.5);">
                    <button id="btn-close-NM" type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    <div class="modal-body d-flex justify-content-center align-items-center">
                        <div>
                            <iframe id="video-iframe-NM" width="1100" height="600" class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/rExo9QFiew4"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 col-md-5 containersec2-GT-test">
            <p class="header1sec1-NM">NƠI NHỮNG</p>
            <p class="header2sec1-NM">ƯỚC MUỐN</p>
            <p class="header3sec1-NM">Bị chôn vùi</p>
            <p class="text2sec2-GT-test">Mỗi người sẽ có một lý do khác nhau khi bắt đầu con đường làm đại lý hoặc tự
                kinh doanh. Đôi khi bắt đầu bởi vì sở thích và có khi bắt đầu bởi hoàn cảnh bắt buộc. Nhưng đều có một
                khoảng khắc bạn nhận ra rằng con đường này không phải lúc nào cũng dễ dàng.
            </p>
            <p class="text2sec2-GT-test">
                Cách đây khoảng 10 năm mình kết hôn. Đây là thời điểm mà gia đình chồng mình gặp biến cố lớn.
            </p>
            <p class="text2sec2-GT-test">
                Thời gian đó bữa sáng mình chỉ dám ăn 3 nghìn tiền xôi, hiếm lắm mới có bữa 12 nghìn tiền bún chả, còn
                bữa tối hai vợ chồng chỉ có 20 nghìn tiền ăn mỗi hôm.
            </p>
            <p class="text2sec2-GT-test">
                Từ khi bắt đầu tới thời điểm đó thì Nga đã kinh doanh tổng cộng 7 sản phẩm nhưng chưa có lần nào đạt mức
                mong muốn. Nhưng điều quan trọng là Nga không bỏ cuộc.
            </p>
        </div>
        <div class="col-xxl-4 col-md-5 headersec2-NM">
            <p class="header1sec2-NM">ÁNH SÁNG</p>
            <p class="header2sec2-NM">THƯỜNG ĐẾN VÀO</p>
            <p class="header3sec2-NM">Những lúc tối tăm nhất</p>
        </div>
        <div class="col-xxl-4 col-md-5 containersec2-GT-test"></div>
    </div>
</div>

<div class="sec1mb-NM">
    <p class="header1sec1-NM">NƠI NHỮNG</p>
    <p class="header2sec1-NM">ƯỚC MUỐN</p>
    <p class="header3sec1-NM">Bị chôn vùi</p>
    <p class="contentsec2mb-GT">Mỗi người sẽ có một lý do khác nhau khi bắt đầu con đường làm đại lý hoặc tự kinh doanh.
        Đôi khi bắt đầu bởi vì sở thích và có khi bắt đầu bởi hoàn cảnh bắt buộc. Nhưng đều có một khoảng khắc bạn nhận
        ra rằng con đường này không phải lúc nào cũng dễ dàng.
    </p>
    <p class="contentsec2mb-GT">Cách đây khoảng 10 năm mình kết hôn. Đây là thời điểm mà gia đình chồng mình gặp biến cố
        lớn.</p>
    <p class="contentsec2mb-GT">Thời gian đó bữa sáng mình chỉ dám ăn 3 nghìn tiền xôi, hiếm lắm mới có bữa 12 nghìn
        tiền bún chả, còn bữa tối hai vợ chồng chỉ có 20 nghìn tiền ăn mỗi hôm.</p>
    <p class="contentsec2mb-GT">Từ khi bắt đầu tới thời điểm đó thì Nga đã kinh doanh tổng cộng 7 sản phẩm nhưng chưa có
        lần nào đạt mức mong muốn. Nhưng điều quan trọng là Nga không bỏ cuộc.</p>
    <div class="utubesec1mb-NM" style="border-radius: 10px; overflow: hidden; width: 86vw; height: 180px">
        <iframe class="utub" id="youtube-iframe" src="https://www.youtube.com/embed/aSM49MxLHoc" frameborder="0"
                allowfullscreen></iframe>
        <br>
    </div>
    <div class="headersec2-NM">
        <p class="header1sec2-NM">ÁNH SÁNG</p>
        <p class="header2sec2-NM">THƯỜNG ĐẾN VÀO</p>
        <p class="header3sec2-NM">Những lúc tối tăm nhất</p>
    </div>
</div>

<script>
    var modal = document.getElementById('exampleModal-NM');
    var iframe = document.getElementById('video-iframe-NM');
    var btnClose = document.getElementById('btn-close-NM');

    // Bắt sự kiện click chuột với capturing
    window.addEventListener('click', function NM(event) {
        // Kiểm tra nếu người dùng đã nhấp chuột bên ngoài iframe
        if (!iframe.contains(event.target) && !btnClose.contains(event.target)) {
            // Chuyển hướng sự kiện click chuột đến nút đóng modal
            btnClose.click();

            // Dừng video khi modal đóng
            iframe.src = iframe.src;
        }
    }, true);
    // Hàm tính toán và đặt chiều rộng theo tỷ lệ màn hình điện thoại
    function setIframeWidth() {
        var screenWidth = $(window).width();
        var iframe = $('#youtube-iframe');
        var aspectRatio = 16 / 9; // Tỷ lệ màn hình mong muốn (16:9)
        var targetWidth = Math.floor(screenWidth * 0.9); // Giả sử sử dụng 80% chiều rộng của màn hình

        // Tính toán chiều cao dựa trên tỷ lệ màn hình
        var targetHeight = Math.floor(targetWidth / aspectRatio);

        // Đặt chiều rộng và chiều cao mới cho iframe
        iframe.css({
            width: targetWidth + 'px',
            height: targetHeight + 'px'
        });
    }

    // Gọi hàm setIframeWidth khi trang web được tải và khi thay đổi kích thước màn hình
    $(window).on('load resize', setIframeWidth);
</script>
