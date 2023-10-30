<div class="sec5-DL">
    <object data="{{asset('images/dai-ly/sec5/Group 3171.png')}}" class="headersec5-DL"></object>
    <div class="row-test">
        <div class="col-md-4">
            <button type="button" class="imgbtn" data-bs-toggle="modal" data-bs-target="#exampleModal-DL">
                <img src="/images/dai-ly/sec5/Ảnh video-01.png" class="buttonvideo-DL-left col-xl-12 col-md-12">
            </button>
            <div class="modal fade" id="exampleModal-DL" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-fullscreen">
                    <div class="modal-content d-flex flex-row-reverse" style="background-color: rgba(0, 0, 0, 0.5);">
                        <button id="btn-close-DL" type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        <div class="modal-body d-flex justify-content-center align-items-center">
                            <div>
                                <iframe id="video-iframe-DL" width="1100" height="600" class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/JTS5b2IwfDA?si=HRqHSHGUm8NrrYb-"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <button type="button" class="imgbtn" data-bs-toggle="modal" data-bs-target="#exampleModal-DL-2">
                <img src="/images/dai-ly/sec5/Ảnh video-02.png" class="buttonvideo-DL-mid col-xl-12 col-md-12">
            </button>
            <div class="modal fade" id="exampleModal-DL-2" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-fullscreen">
                    <div class="modal-content d-flex flex-row-reverse" style="background-color: rgba(0, 0, 0, 0.5);">
                        <button id="btn-close-DL-2" type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        <div class="modal-body d-flex justify-content-center align-items-center">
                            <div>
                                <iframe id="video-iframe-DL-2" width="1100" height="600" class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/uSEmZhpDqfU?si=j-4tk3XRULmZZvWg"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <button type="button" class="imgbtn" data-bs-toggle="modal" data-bs-target="#exampleModal-DL-3">
                <img src="/images/dai-ly/sec5/Ảnh video-03.png" class="buttonvideo-DL-right col-xl-12 col-md-12">
            </button>
            <div class="modal fade" id="exampleModal-DL-3" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-fullscreen">
                    <div class="modal-content d-flex flex-row-reverse" style="background-color: rgba(0, 0, 0, 0.5);">
                        <button id="btn-close-DL-3" type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        <div class="modal-body d-flex justify-content-center align-items-center">
                            <div>
                                <iframe id="video-iframe-DL-3" width="1100" height="600" class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/T0WrhaY-CWg?si=g4DSaae3o4M3J5Nk"
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

<div class="sec5mb-DL">
    <p class="header-test-orange-mb">Khách hàng</p>
    <p class="header-test-green-mb">TIN TƯỞNG LỰA CHỌN</p>
    <div class="utubesec5-DL DL-1" style="border-radius: 10px; overflow: hidden; width: 80vw; height: 150px">
        <iframe class="utub" id="youtube-iframe" src="https://www.youtube.com/embed/JTS5b2IwfDA?si=HRqHSHGUm8NrrYb-" frameborder="0"
                allowfullscreen></iframe>
        <br>
    </div>
    <div class="utubesec5-DL" style="border-radius: 10px; overflow: hidden; width: 80vw; height: 150px">
        <iframe class="utub" id="youtube-iframe-2" src="https://www.youtube.com/embed/uSEmZhpDqfU?si=j-4tk3XRULmZZvWg" frameborder="0"
                allowfullscreen></iframe>
        <br>
    </div>
    <div class="utubesec5-DL" style="border-radius: 10px; overflow: hidden; width: 80vw; height: 150px">
        <iframe class="utub" id="youtube-iframe-3" src="https://www.youtube.com/embed/T0WrhaY-CWg?si=g4DSaae3o4M3J5Nk" frameborder="0"
                allowfullscreen></iframe>
        <br>
    </div>
</div>

<script>
    var modal = document.getElementById('exampleModal-DL');
    var iframe = document.getElementById('video-iframe-DL');
    var btnClose = document.getElementById('btn-close-DL');

    // Bắt sự kiện click chuột với capturing
    window.addEventListener('click', function DL(event) {
        // Kiểm tra nếu người dùng đã nhấp chuột bên ngoài iframe
        if (!iframe.contains(event.target) && !btnClose.contains(event.target)) {
            // Chuyển hướng sự kiện click chuột đến nút đóng modal
            btnClose.click();

            // Dừng video khi modal đóng
            iframe.src = iframe.src;
        }
    }, true);

    var modal2 = document.getElementById('exampleModal-DL-2');
    var iframe2 = document.getElementById('video-iframe-DL-2');
    var btnClose2 = document.getElementById('btn-close-DL-2');

    // Bắt sự kiện click chuột với capturing
    window.addEventListener('click', function DL(event) {
        // Kiểm tra nếu người dùng đã nhấp chuột bên ngoài iframe
        if (!iframe2.contains(event.target) && !btnClose2.contains(event.target)) {
            // Chuyển hướng sự kiện click chuột đến nút đóng modal
            btnClose2.click();

            // Dừng video khi modal đóng
            iframe2.src = iframe2.src;
        }
    }, true);

    var modal3 = document.getElementById('exampleModal-DL-3');
    var iframe3 = document.getElementById('video-iframe-DL-3');
    var btnClose3 = document.getElementById('btn-close-DL-3');

    // Bắt sự kiện click chuột với capturing
    window.addEventListener('click', function DL(event) {
        // Kiểm tra nếu người dùng đã nhấp chuột bên ngoài iframe
        if (!iframe3.contains(event.target) && !btnClose3.contains(event.target)) {
            // Chuyển hướng sự kiện click chuột đến nút đóng modal
            btnClose3.click();

            // Dừng video khi modal đóng
            iframe3.src = iframe3.src;
        }
    }, true);
</script>
