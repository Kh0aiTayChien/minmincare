<div class="sec6-QC">
    <p class="header1sec6-NM">Nơi chia sẻ</p>
    <p class="header2sec6-NM">NIỀM VUI</p>
    <button type="button" class="imgbtn" data-bs-toggle="modal" data-bs-target="#exampleModal-NM">
        <img src="/images/dai-ly/sec5/Asset 3.png" class="buttonvideo-DL">
    </button>
    <div class="modal fade" id="exampleModal-NM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<div class="sec6mb-QC">
    <p class="header1sec6-NM">Nơi chia sẻ</p>
    <p class="header2sec6-NM">NIỀM VUI</p>
    <div class="utubesec1mb-NM" style="border-radius: 10px; overflow: hidden; width: 86vw; height: 180px">
        <iframe class="utub" id="youtube-iframe-sec6-NM" src="https://www.youtube.com/embed/aSM49MxLHoc" frameborder="0"
                allowfullscreen></iframe>
        <br>
    </div>
</div>

<script>
    // Hàm tính toán và đặt chiều rộng theo tỷ lệ màn hình điện thoại
    function setIframeWidthsec6NM() {
        var screenWidth = $(window).width();
        var iframe = $('#youtube-iframe-sec6-NM');
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
    $(window).on('load resize', setIframeWidthsec6NM);
</script>
