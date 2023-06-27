<div class="sec2-TT">
    @foreach($news as $article)
        <div class="card flex-row newscontent col-xxl-9 col-10  row-test ">
            <img class="card-img-left col-3  height-img-card " src="{{$article->image}}"/>
            <div class="card-body col-9 ">
                <div class="datetime col-7">
                    <img src="{{asset('images/tin-tuc/sec2/Asset 3.svg')}}" class="col-3 imgdatetime">
                    <p class="textdatetime">{{$article->created_at}}</p>
                </div>
                <a href="#" class="linknews col-9"><h4 class="card-title h5 h4-sm titlenews">{{\Illuminate\Support\Str::limit($article->title,45)}}</h4></a>
                <p class="card-text col-12 titletext">{{ preg_replace('/<[^>]*>/', '', \Illuminate\Support\Str::limit(strip_tags($article->content), 200)) }}</p>
            </div>
        </div>
        <img src="{{asset('images/tin-tuc/sec2/Asset 4.svg')}}" class="linenews col-xxl-9 col-sm-10">
    @endforeach
</div>
<div class="d-flex justify-content-center align-content-center mt-3 mb-3">
    {{ $news->links() }}
</div>
<style>
    .height-img-card {
        height: 240px;
        width: 404px;
        object-fit: contain;
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

    .page-item.active .page-link{
        background-color: #59833D;
        border-color: #59833D;
    }
</style>
