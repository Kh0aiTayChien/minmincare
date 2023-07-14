<div class="sec3-NM">
    <div class="row-test">
        <div class="col-xxl-4 col-md-5">
            <p class="header1sec3-NM">Nhưng</p>
            <p class="header2sec3-NM">ÁNH SÁNG ĐÓ</p>
            <p class="header3sec3-NM">KHÔNG TẠO BỞI MỘT NGƯỜI</p>
            <p class="text2sec2-GT-test">
                Để có được ngày hôm nay thì Nga có sự ủng hộ và hỗ trợ rất nhiều từ người thân trong gia đình, bạn bè,
                nhân công sản xuất. <span class="bold-text">Và đặc biệt không thể không nhắc đến sự đồng hành của những nhà đại lý nhà phân
                phối.</span>
            </p>
            <p class="text2sec2-GT-test">
                Mọi người đã giúp đưa sản phẩm tới gần hơn với người tiêu dùng và cũng đồng hành trong hành trình suốt
                <span class="bold-text">7 năm với Min Min Care.</span>
            </p>
            <p class="text2sec2-GT-test">
                Vì vậy Nga muốn gửi lời cảm ơn chân thành tới tất cả mọi người.
            </p>
        </div>
        <div class="col-xxl-4 col-md-5 containersec2-GT-test">
            <button type="button" class="imgbtn-NM" data-bs-toggle="modal"
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
        </div>
    </div>
</div>

<div class="sec3mb-NM">
    <p class="header1sec3-NM">Nhưng</p>
    <p class="header2sec3-NM">ÁNH SÁNG ĐÓ</p>
    <p class="header3sec3-NM">KHÔNG TẠO BỞI MỘT NGƯỜI</p>
    <p class="contentsec2mb-GT">Để có được ngày hôm nay thì Nga có sự ủng hộ và hỗ trợ rất nhiều từ người thân trong gia
        đình, bạn bè,
        nhân công sản xuất. <span class="bold-text">Và đặc biệt không thể không nhắc đến sự đồng hành của những nhà đại lý nhà phân
                phối.</span></p>
    <p class="contentsec2mb-GT">Mọi người đã giúp đưa sản phẩm tới gần hơn với người tiêu dùng và cũng đồng hành trong
        hành trình suốt <span class="bold-text">7 năm với Min Min Care.</span></p>
    <p class="contentsec2mb-GT">Vì vậy Nga muốn gửi lời cảm ơn chân thành tới tất cả mọi người.</p>
    <div class="utubesec2mb-NM" style="border-radius: 10px; overflow: hidden; width: 86vw; height: 180px">
        <iframe class="utub" id="youtube-iframe-sec3-NM" src="https://www.youtube.com/embed/aSM49MxLHoc" frameborder="0"
                allowfullscreen></iframe>
    </div>
</div>

<script>
    function setIframeWidthsec3NM() {
        var screenWidth = $(window).width();
        var iframe = $('#youtube-iframe-sec3-NM');
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
    $(window).on('load resize', setIframeWidthsec3NM);
</script>
