<!doctype html>
<html lang="vi">

<head>
    <meta name="google-site-verification" content="googleeacc2166ce777ac3.html"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title')</title>
    <link href="{{ asset(@$setting->logo) }}" rel="icon">
    <link href="{{ asset(@$setting->logo) }}" rel="apple-touch-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{ asset('assets/frontend/font/stylesheet.css') }}" rel=stylesheet>
    <link href="{{ asset('assets/frontend/polo/css/polo.css') }}" rel=stylesheet>
    <link href="{{ asset('assets/frontend/custom.css?v=1727773405') }}" rel=stylesheet>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('style_page')
</head>

<body class="f1 no-page-loader index-page">

<div id=wrapper>
    @include('web.partials.header')
    @yield('content')
    @include('web.partials.footer')
</div>

<div class="hotline mm-page mm-slideout" id="mm-0">
    <div id="phonering-alo-phoneIcon btn-hotline-pc" class="phonering-alo-phone phonering-alo-green phonering-alo-show">
        <div class="phonering-alo-ph-circle"></div>
        <div class="phonering-alo-ph-circle-fill"></div>
        <div class="phonering-alo-ph-img-circle">
            <a class="pps-btn-img btn-action" data-action="Khách hàng bấm nút hotline" title="Liên hệ" href="tel:096 185 2200"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABHNCSVQICAgIfAhkiAAAAF96VFh0UmF3IHByb2ZpbGUgdHlwZSBBUFAxAAAImeNKT81LLcpMVigoyk/LzEnlUgADYxMuE0sTS6NEAwMDCwMIMDQwMDYEkkZAtjlUKNEABZiYm6UBoblZspkpiM8FAE+6FWgbLdiMAAAAIElEQVRoge3BAQEAAACCIP+vbkhAAQAAAAAAAAAAwKMBJ0IAAWSOMT4AAAAASUVORK5CYII=" alt="Liên hệ" width="50" class="img-responsive"> </a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src={{ asset('assets/frontend/polo/js/plugins.js') }}></script>
<script src={{ asset('assets/frontend/polo/js/plugins.js') }}></script>
<script src={{ asset('assets/frontend/functions.js') }}></script>
<script src={{ asset('assets/frontend/js/jquery.cookie.min.js') }}></script>
<script src={{ asset('assets/frontend/js/jquery.matchHeight-min.js') }}></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
@yield('script_page')

</body>

</html>
