<div class="sec6-DL">
    <object data="{{asset('images/dai-ly/sec6/Group 3172.png')}}" class="headersec6-DL"></object><br>
    <button type="button" class="imgbtn" data-bs-toggle="modal" data-bs-target="#exampleModal-DL-4">
        <img src="/images/dai-ly/sec5/Asset 3.png" class="buttonvideo-DL-4">
    </button>
    <div class="modal fade" id="exampleModal-DL-4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen">
            <div class="modal-content d-flex flex-row-reverse" style="background-color: rgba(0, 0, 0, 0.5);">
                <button id="btn-close-DL-4" type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                <div class="modal-body d-flex justify-content-center align-items-center">
                    <div>
                        <iframe id="video-iframe-DL-4" width="1100" height="600" class="embed-responsive-item"
                                src="https://www.youtube.com/embed/DQUm_Hk1fxk?si=3TZKhcMHhRpn1qm9"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sec6mb-DL">
    <p class="header-test-orange-mb">Đại gia đình</p>
    <p class="header-test-green-mb">MIN MIN CARE</p>
    <div class="utubesec6-DL" style="border-radius: 10px; overflow: hidden; width: 80vw; height: 150px">
        <iframe class="utub" id="youtube-iframe" src="https://www.youtube.com/embed/DQUm_Hk1fxk?si=3TZKhcMHhRpn1qm9" frameborder="0"
                allowfullscreen></iframe>
        <br>
    </div>
</div>

<script>
    var modal4 = document.getElementById('exampleModal-DL-4');
    var iframe4 = document.getElementById('video-iframe-DL-4');
    var btnClose4 = document.getElementById('btn-close-DL-4');

    // Bắt sự kiện click chuột với capturing
    window.addEventListener('click', function DL(event) {
        // Kiểm tra nếu người dùng đã nhấp chuột bên ngoài iframe
        if (!iframe4.contains(event.target) && !btnClose4.contains(event.target)) {
            // Chuyển hướng sự kiện click chuột đến nút đóng modal
            btnClose4.click();

            // Dừng video khi modal đóng
            iframe4.src = iframe4.src;
        }
    }, true);
</script>
