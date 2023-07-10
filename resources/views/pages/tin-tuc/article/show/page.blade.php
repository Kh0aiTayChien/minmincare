<div class=" content-article ">
    <h2 align="center" class="tilte-text">{{$article->title}}</h2>
    <div class="content p-3">
        <p class="textdatetime p-2"> Ngày đăng: {{$article->created_at}} | Ngày cập nhật: {{$article->updated_at}} </p>
        {!! $article->content!!}
    </div>

</div>
<style>
    body{
        background-color: #EBF4F0 ;
    }
    .content-article {
      margin: 12rem 20rem 5rem 20rem;
        background-color: white;
    }
    .tilte-text {
        color: #59843d;
        font-family: "Mulish Black", sans-serif;
        margin-bottom: 3rem;
    }
    .figure-image {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    @media only screen and (max-width: 1300px) {
        .content-article {
            margin: 15rem 10rem 10rem 10rem ;
        }
    }
    @media only screen and (max-width: 1000px) {
        .content-article {
            margin: 17rem 5rem 10rem 5rem;
        }
    }

    @media only screen and (max-width: 800px) {
        .content-article {
            margin: 6rem 1rem 3rem 1rem;
        }
        .tilte-text {
            color: #59843d;
            font-family: "Mulish Black", sans-serif;
            margin-bottom: 1rem;
        }
    }
</style>
<script>
    $(document).ready(function() {
        $('.image img').addClass('img-fluid');
        $('.image ').addClass('figure-image');
    });
</script>
