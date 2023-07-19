<div class="row-test sec9-QC">
    <button type="button" class="imgbtn-NM col-xxl-4 col-md-5" data-bs-toggle="modal"
            data-bs-target="#exampleModal-NM">
        <img src="/images/advertise/sec9/Asset 7.png" class="buttonvideo-NM col-xxl-12 col-md-12">
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
        <p class="header1sec9-QC">Khởi nguồn</p>
        <p class="header2sec9-QC">THƯƠNG HIỆU</p>
        <p class="header3sec9-QC">MIN MIN CARE</p>
        <p class="text2sec2-GT-test">Min Min Care là thương hiệu tiên phong về ngũ cốc dinh dưỡng cao cấp dành riêng cho
            mẹ bầu và mẹ sau sinh. Được nghiên cứu bởi đội ngũ chuyên gia viện dinh dưỡng quốc gia và sản xuất từ nguồn
            nguyên liệu 100% tự nhiên với công thức đột phá, độc quyền sở hữu.
        </p>
        <p class="text2sec2-GT-test">
            Min Min Care được lấy cảm hứng tên từ con trai của nhà sáng lập thương hiệu Ms Nga. Không chỉ thể hiện tình
            yêu thương của một người mẹ đối với đứa con, mà còn là để luôn gợi nhắc sứ mệnh của thương hiệu hướng tới
            việc giúp mẹ bầu và mẹ sau sinh làm tròn thiên chức thiêng liêng.
        </p>
    </div>
</div>

<div class="sec9mb-QC">
    <img src="{{asset('images/advertise/sec9/Asset 13.png')}}" class="col-9">
    <p class="contentsec2mb-GT">Min Min Care là thương hiệu tiên phong về ngũ cốc dinh dưỡng cao cấp dành riêng cho
        mẹ bầu và mẹ sau sinh. Được nghiên cứu bởi đội ngũ chuyên gia viện dinh dưỡng quốc gia và sản xuất từ nguồn
        nguyên liệu 100% tự nhiên với công thức đột phá, độc quyền sở hữu.
    </p>
    <div class="utubesec1mb-NM" style="border-radius: 10px; overflow: hidden; width: 86vw; height: 180px">
        <iframe class="utub" id="youtube-iframe" src="https://www.youtube.com/embed/aSM49MxLHoc" frameborder="0"
                allowfullscreen></iframe>
    </div><br>
    <p class="contentsec2mb-GT"> Min Min Care được lấy cảm hứng tên từ con trai của nhà sáng lập thương hiệu Ms Nga.
        Không chỉ thể hiện tình
        yêu thương của một người mẹ đối với đứa con, mà còn là để luôn gợi nhắc sứ mệnh của thương hiệu hướng tới
        việc giúp mẹ bầu và mẹ sau sinh làm tròn thiên chức thiêng liêng.</p>
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
