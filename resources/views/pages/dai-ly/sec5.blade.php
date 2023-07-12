<div class="sec5-DL">
    <object data="{{asset('images/dai-ly/sec5/Group 3171.png')}}" class="headersec5-DL"></object>
    <button type="button" class="imgbtn" data-bs-toggle="modal" data-bs-target="#exampleModal-DL">
        <img src="/images/dai-ly/sec5/Asset 3.png" class="buttonvideo-DL">
    </button>
    <div class="modal fade" id="exampleModal-DL" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen">
            <div class="modal-content d-flex flex-row-reverse" style="background-color: rgba(0, 0, 0, 0.5);">
                <button id="btn-close-DL" type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                <div class="modal-body d-flex justify-content-center align-items-center">
                    <div>
                        <iframe id="video-iframe-DL" width="1100" height="600" class="embed-responsive-item"
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

<div class="sec5mb-DL">
    <object data="{{asset('images/dai-ly/sec5/Group 3171.png')}}" class="headersec5mb-DL"></object>
    <div class="utubesec5-DL" style="border-radius: 10px; overflow: hidden; width: 80vw; height: 150px">
        <iframe class="utub" id="youtube-iframe" src="https://www.youtube.com/embed/aSM49MxLHoc" frameborder="0"
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
</script>
