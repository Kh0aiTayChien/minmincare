<div class=" content-article ">
    <h2 align="center" class="tilte-text">{{$article->title}}</h2>
    <div class="d-flex justify-content-center align-content-center">
        <p class="datetime_text p-2 text-center pb-3"> Ngày đăng: {{$article->created_at}} </p>
    </div>

    <div class="content p-3 pb-5">
        {!! $article->content!!}
    </div>

</div>
<style>
    body{
    }
    .datetime_text{
        font-family: Mulish-SemiBold, sans-serif;
        color: #F79421;
    }
    .content-article {
      margin: 1rem 20rem 5rem 20rem;
        background-color: white;
    }
    .tilte-text {
        color: #59843d;
        font-family: "Mulish Black", sans-serif;
    }
    .figure-image {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    @media only screen and (max-width: 1300px) {
        .content-article {
            margin: 3rem 10rem 10rem 10rem ;
        }
    }
    @media only screen and (max-width: 1000px) {
        .content-article {
            margin: 3rem 5rem 10rem 5rem;
        }
    }

    @media only screen and (max-width: 800px) {
        .content-article {
            margin: 3rem 1rem 3rem 1rem;
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
