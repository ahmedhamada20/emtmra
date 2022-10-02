<!doctype html>
<html  lang="{{ App::getLocale()=='ar'?'rtl':'ltr' }}" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
    @include('website.layouts.head')
{{--    @include('sweetalert::alert')--}}


</head>
<body data-new-gr-c-s-check-loaded="14.1031.0" data-gr-ext-installed="">
@include('website.layouts.contect')
@include('website.layouts.footer')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</body>
</html>
