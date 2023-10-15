<div class="sec8">
    <img src="{{asset('images/sec8/Group 10.png')}}" class="headersec8">
    <div class="row px-5 mx-5 mb-5 gx-3">
        <div class="col-3  offset-1 d-flex justify-content-center align-content-center ">
            <button class="tab-button btn btn-outline-white shadow-effect
                                border-white text-white border-2 green-bg mitr-small button-shake active"
                    data-target="tab1" style="width: 100%; border-radius: 10px">
                <div class="mx-5  font-size-custom">MẸ BẦU</div>
            </button>
        </div>
        <div class="col-3 d-flex justify-content-center align-content-center">
            <button class="tab-button btn btn-outline-white btn-block  shadow-effect
                                border-white text-white border-2 green-bg mitr-small button-shake"
                    data-target="tab2" style="width: 100% ; border-radius: 10px">
                <div class="mx-5  font-size-custom">MẸ SAU SINH</div>
            </button>
        </div>
        <div class="col-3 d-flex justify-content-center align-content-center">
            <button class="tab-button btn btn-outline-white btn-block  shadow-effect
                                border-white text-white border-2 green-bg mitr-small button-shake"
                    data-target="tab3" style="width: 100% ; border-radius: 10px">
                <div class="mx-5 font-size-custom">DINH DƯỠNG CHO CON</div>
            </button>
        </div>
    </div>

    <div class=" tabs">
        <div class="row tab tab1 px-5 mt-5 gx-0 active">
            <div class="col-1"></div>
            @foreach( $new1 as $article)
                <div class="col-3 d-flex justify-content-center align-content-center">
                    <div class="card rounded-custom shadow-effect me-1" style="width:20rem; "><a
                            href="{{route('kien-thuc.show',['slug' => $article->slug])}}"
                            style="text-decoration: unset; color: unset" tabindex="0">
                            <img class="card-img-top border-up border-up " src="{{$article->image}}"
                                 alt="Card image">
                        </a>
                        <div class="card-body">
                            <p class="height-text-card green-text font-size-custom">
                                <strong>{{\Illuminate\Support\Str::limit($article->title,60)}}</strong></p>
                            <p class="card-text ">{{ preg_replace('/<[^>]*>/', '', \Illuminate\Support\Str::limit(strip_tags($article->content), 65)) }}</p>
                            <div class="d-flex align-content-center justify-content-center mitr-medium ">
                                <a href="{{route('kien-thuc.show',['slug' => $article->slug])}}"
                                   class="btn green-border green-text btn-sm mb-3 rounded-pill btn-long button-shake">XEM
                                    CHI TIẾT</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row tab tab2 px-5 mt-5 gx-0 ">
            <div class="col-1"></div>
            @foreach( $new2 as $article)
                <div class="col-3 d-flex justify-content-center align-content-center">
                    <div class="card rounded-custom shadow-effect me-1" style="width:20rem; "><a
                            href="{{route('kien-thuc.me-sau-sinh.show',['slug' => $article->slug])}}"
                            style="text-decoration: unset; color: unset" tabindex="0">
                            <img class="card-img-top border-up border-up " src="{{$article->image}}"
                                 alt="Card image">
                        </a>
                        <div class="card-body">
                            <p class="height-text-card green-text font-size-custom">
                                <strong>{{\Illuminate\Support\Str::limit($article->title,60)}}</strong></p>
                            <p class="card-text ">{{ preg_replace('/<[^>]*>/', '', \Illuminate\Support\Str::limit(strip_tags($article->content), 65)) }}</p>
                            <div class="d-flex align-content-center justify-content-center mitr-medium ">
                                <a href="{{route('kien-thuc.me-sau-sinh.show',['slug' => $article->slug])}}"
                                   class="btn green-border green-text btn-sm mb-3 rounded-pill btn-long button-shake">XEM
                                    CHI TIẾT</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row tab tab3 px-5 mt-5 gx-0 ">
            <div class="col-1"></div>
            @foreach( $new3 as $article)
                <div class="col-3 d-flex justify-content-center align-content-center">
                    <div class="card rounded-custom shadow-effect me-1" style="width:20rem; "><a
                            href="{{route('kien-thuc.dinh-duong-cho-con.show',['slug' => $article->slug])}}"
                            style="text-decoration: unset; color: unset" tabindex="0">
                            <img class="card-img-top border-up border-up " src="{{$article->image}}"
                                 alt="Card image">
                        </a>
                        <div class="card-body">
                            <p class="height-text-card green-text font-size-custom">
                                <strong>{{\Illuminate\Support\Str::limit($article->title,60)}}</strong></p>
                            <p class="card-text ">{{ preg_replace('/<[^>]*>/', '', \Illuminate\Support\Str::limit(strip_tags($article->content), 65)) }}</p>
                            <div class="d-flex align-content-center justify-content-center mitr-medium ">
                                <a href="{{route('kien-thuc.dinh-duong-cho-con.show',['slug' => $article->slug])}}"
                                   class="btn green-border green-text btn-sm mb-3 rounded-pill btn-long button-shake">XEM
                                    CHI TIẾT</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    <style>
        .tab-button.active {
            background-color: #ccc;
        }

        .tabs .tab {
            display: none;
        }

        .tabs .tab.active {
            display: flex;
        }
    </style>
    <script>
        $(document).ready(function () {
            $('.tab-button').click(function () {
                var target = $(this).data('target');

                $('.tab-button').removeClass('active');
                $(this).addClass('active');

                $('.tab').removeClass('active');
                $('.' + target).addClass('active');
            });
        });
    </script>
</div>

<div class="sec8mb">
    <img src="{{asset('images/sec8/Group 10.png')}}" class="headersec8mb">
    <div class="contentsec8mb">
        <a href="{{asset('kien-thuc')}}">
            <img src="{{asset('images/kien-thuc/sec2/me-bau.png')}}"
                 class="col-8 col-sm-4 col-xxl-3 imgsec8mb shadow-test"></a><br>
        <a href="{{asset('kien-thuc/me-sau-sinh')}}">
            <img src="{{asset('images/kien-thuc/sec2/sau-sinh.png')}}"
                 class="imgsec8mb col-sm-4 col-8 col-xxl-3 shadow-test"></a><br>
        <a href="{{asset('kien-thuc/dinh-duong-cho-con')}}">
            <img src="{{asset('images/kien-thuc/sec2/dinh-duong.png')}}"
                 class="col-8 col-sm-4 col-xxl-3 imgsec8mb shadow-test"></a>
        {{--        <img src="{{asset('images/sec8/momsonmb.png')}}" class="bannersec8mb">--}}
    </div>
</div>


