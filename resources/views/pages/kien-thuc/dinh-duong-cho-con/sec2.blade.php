<div class="sec2-TT">
    <div class="row-test mb-4">
        <a href="{{asset('kien-thuc')}}" class="col-xxl-4 col-sm-4 col-9 menuKT shadow-test">
            <img src="{{asset('images/kien-thuc/sec2/Asset 6.png')}}" class="col-12 button-shake"></a>
        <a href="{{asset('kien-thuc/me-sau-sinh')}}" class="col-xxl-4 col-sm-4 col-9 menuKT shadow-test"><img
                src="{{asset('images/kien-thuc/sec2/Asset 3.png')}}" class="col-12 button-shake"></a>
        <a href="{{asset('kien-thuc/dinh-duong-cho-con')}}" class="col-xxl-4 col-sm-4 col-9 menuKT shadow-test"><img
                src="{{asset('images/kien-thuc/sec2/dinh-duong.png')}}" class="col-12 button-shake"></a>
    </div>
    @foreach($articles as $article)
        <div class="card mb-4 mt-4 border-0 ">
            <a href="{{route('kien-thuc.dinh-duong-cho-con.show',['slug' => $article->slug])}}" style="text-decoration: unset; color: unset">
                <div class="row">
                    <div class="col-lg-4 col-xs-12">
                        <img class="card-img-left height-img-card border-radius " src="{{$article->image}}"/>
                    </div>
                    <div class="card-body col-lg-8 col-xs-12">
                        <p class="textdatetime p-2"><img src="{{asset('images/tin-tuc/sec2/Asset 3.svg')}}"
                                                         class="imgdatetime"> {{$article->created_at}}</p>

                        <div class="green-text"><h4
                                class="card-title h5 h4-sm titlenews">{{\Illuminate\Support\Str::limit($article->title,45)}}</h4>
                        </div>
                        <p class="card-text titletext">{{ preg_replace('/<[^>]*>/', '', \Illuminate\Support\Str::limit(strip_tags($article->content), 200)) }}</p>
                    </div>
                </div>
            </a>
        </div>
        <img src="{{asset('images/tin-tuc/sec2/Asset 4.svg')}}" class="linenews mt-4 mb-4">
    @endforeach
</div>
<div class="d-flex justify-content-center align-content-center mt-3 mb-3">
    {{ $articles->links() }}
</div>
<style>
    .height-img-card {
        height: 240px;
        width: 404px;
        border-radius: 23px;
        max-width: 100%;
        max-height: 100%;
    }

    .pagination {
        list-style-type: none;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .pagination li a,
    .pagination li span {
        display: inline-block;
        padding: 8px 12px;
        color: #59833D;
        background-color: #ffffff;
        border: 1px solid #59833D;
    }

    .page-item.active .page-link {
        background-color: #59833D;
        border-color: #59833D;
    }

    .border-radius {
        border-radius: 23px;
    }

    .green-text {
        color: #59843d;
    }

    .green-text:hover {
        color: #F79421;
    }

</style>
