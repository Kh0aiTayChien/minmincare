<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MinMinCare</title>
    <link rel="icon" type="image/png" href="{{asset('/img/img.jpg')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"
            integrity="sha512-6DC1eE3AWg1bgitkoaRM1lhY98PxbMIbhgYCGV107aZlyzzvaWCW1nJW2vDuYQm06hXrW0As6OGKcIaAVWnHJw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script
        src = "https://cdn.jsdelivr.net/gh/KodingKhurram/animate.css-dynamic@main/animate.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.rawgit.com/tarkhov/postboot/v1.0.3/dist/css/postboot.min.css"/>
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/css/headerstyle.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec2.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec3.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec4.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec6.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec8.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec10.css')}}" rel="stylesheet">
    <link href="{{asset('/css/footer.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec2-GT.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec3-GT.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec4-GT.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec5-GT.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec6-GT.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec1-DL.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec2-DL.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec3-DL.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec4-DL.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec5-DL.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec6-DL.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec8-DL.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec1-TT.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec2-TT.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec2-KT.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec1-NM.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec2-NM.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec3-NM.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec4-NM.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec5-NM.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec6-NM.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec9-NM.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec2-QC.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec7-QC.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec8-QC.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec9-QC.css')}}" rel="stylesheet">
    <link href="{{asset('/css/sec11-QC.css')}}" rel="stylesheet">
    <link href="{{asset('/css/section1-NM.css')}}" rel="stylesheet">
</head>
<body>
@include('page-layout/header')
@yield('section')
@include('page-layout/footer')
</body>
</html>
