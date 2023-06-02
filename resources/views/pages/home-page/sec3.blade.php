<div class="sec3pc">
    <img src="{{asset('images/sec3/Group 967.png')}}" class="imgvideo">
    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <img src="/images//sec3/Group 868.svg" class="buttonvideo">
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen">
            <div class="modal-content d-flex flex-row-reverse" style="background-color: rgba(0, 0, 0, 0.5);">
                <button id="btn-close" type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                <div class="modal-body d-flex justify-content-center align-items-center">
                    <div>
                        <iframe id="video-iframe" width="1200" height="700" class="embed-responsive-item"
                                src="https://www.youtube.com/embed/rExo9QFiew4"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <object data="{{asset('images/sec3/Group 858.svg')}}" class="headersec3"></object>
    <p class="contentsec3"><span>Min Min Care là thương hiệu tiên phong về ngũ cốc dinh dưỡng cao cấp dành riêng cho mẹ bầu và mẹ sau sinh. Được nghiên cứu bởi đội ngũ chuyên gia viện dinh dưỡng quốc gia và sản xuất từ nguồn nguyên liệu 100% tự nhiên với công thức đột phá, độc quyền sở hữu.
</span><br><br><span>Min Min Care được lấy cảm hứng tên từ con trai của nhà sáng lập thương hiệu Ms Nga. Không chỉ thể hiện tình yêu thương của một người mẹ đối với đứa con, mà còn là để luôn gợi nhắc sứ mệnh của thương hiệu hướng tới việc giúp mẹ bầu và mẹ sau sinh làm tròn thiên chức thiêng liêng.</span>
    </p>
    <a href="#"><img src="{{asset('images/sec3/Group 874.svg')}}" class="button1"></a>
</div>

<script>
    var modal = document.getElementById('exampleModal');
    var iframe = document.getElementById('video-iframe');
    var btnClose = document.getElementById('btn-close');

    // Bắt sự kiện click chuột với capturing
    window.addEventListener('click', function (event) {
        // Kiểm tra nếu người dùng đã nhấp chuột bên ngoài iframe
        if (!iframe.contains(event.target) && !btnClose.contains(event.target)) {
            // Chuyển hướng sự kiện click chuột đến nút đóng modal
            btnClose.click();

            // Dừng video khi modal đóng
            iframe.src = iframe.src;
        }
    }, true);
</script>
