<div class="sec2-TT">
    @foreach($news as $article)

        <div class="card mb-4 mt-4 border-0 ">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <a href="{{route('tin-tuc.show',['slug' => $article->slug])}}" style="text-decoration: unset; color: unset">
                        <img class="card-img-left height-img-card border-radius " src="{{$article->image}}"/>
                    </a>
                </div>
                <div class="card-body col-lg-8 col-xs-12">
                    <a href="{{route('tin-tuc.show',['slug' => $article->slug])}}" style="text-decoration: unset; color: unset">
                        <p class="textdatetime p-2"><img src="{{asset('images/tin-tuc/sec2/Asset 3.svg')}}"
                                                         class="imgdatetime">
                            {{$article->created_at}}</p>

                        <div class="green-text"><h4
                                class="card-title h5 h4-sm titlenews">{{\Illuminate\Support\Str::limit($article->title,77)}}</h4>
                        </div>
                        <p class="card-text titletext">{{ preg_replace('/<[^>]*>/', '', \Illuminate\Support\Str::limit(strip_tags($article->content), 200)) }}</p>
                    </a>
                </div>
            </div>
        </div>
        <img src="{{asset('images/tin-tuc/sec2/Asset 4.svg')}}" class="linenews mt-4 mb-4">

    @endforeach
</div>
<div class="d-flex justify-content-center align-content-center mt-3 mb-3">
    {{ $news->links() }}
</div>
<style>

    .green-border {
        border: 2px solid #59843d;
    }

    .btn-long {
        width: 200px;
    }

    .btn-long:hover {
        color: #F79421;
    }

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
        font-family: Mitr-Medium, sans-serif;
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
</style>
