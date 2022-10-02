<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="robots" content="noindex">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>{{ getSettingMasterHome()->name_site }}</title>
<!-- Bootstrap -->
<link rel="icon" href="{{asset('website/middle-east/images/favicon.png')}}" type="image/x-icon">
<link href="{{asset('website/mba/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('website/mba/css/main-css.css')}}" rel="stylesheet" type="text/css">

@if( App::getLocale() == "ar")
<link href="{{asset('website/ar/css/style.css')}}" rel="stylesheet" type="text/css">
@else
<link href="{{asset('website/mba/css/style.css')}}" rel="stylesheet" type="text/css">
@endif



<link rel="stylesheet" type="text/css" media="all" href="{{asset('website/mba/css/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" media="all" href="{{asset('website/mba/css/owl.theme.default.min.css')}}">
<link href="{{asset('website/mba/css/font-awesome.min.css')}}" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('website/mba/css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('website/mba/css/videopopup.css')}}" media="screen">
<script src="{{asset('website/mba/js/sweetalert.min.js')}}"></script>
<link href="{{asset('admin/select/css/select2.min.css')}}" rel="stylesheet">