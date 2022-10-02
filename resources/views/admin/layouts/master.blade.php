<!DOCTYPE html>
<html dir="rtl" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    @include('admin.layouts.head')
</head>

<body style="font-family: 'Cairo', sans-serif;">
    @include('admin.layouts.preloader')
    <div id="main-wrapper">
        @include('admin.layouts.topbar')
        @include('admin.layouts.sidebar')

        <div class="page-wrapper">
            {{-- @include('admin.layouts.breadcrumb') --}}
            @yield('jop_title')

            <div class="container-fluid">
                @yield('contect')
            </div>

            @include('admin.layouts.footer')
        </div>
    </div>
    @include('admin.layouts.customizer')
    @include('admin.layouts.footerjs')
</body>

</html>