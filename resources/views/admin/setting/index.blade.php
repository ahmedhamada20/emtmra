@extends('admin.layouts.master')
@section('css')

@endsection

@section('jop_title')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">
                    <div class="d-flex align-items-center">

                    </div>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}">الصفحه الرئسيه</a>
                            </li>

                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('title')
    الاعدادات الرئسيه
@endsection

@section('contect')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @if (session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="card-body">
                    <h4 class="card-title"></h4>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span
                                    class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">الاعدادات الرئسيه</span></a>
                        </li>

                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><span
                                    class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">الشريط</span></a>
                        </li>

                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile" role="tab"><span
                                    class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">القسم الاول</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages" role="tab"><span
                                    class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">القسم الثاني</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages2" role="tab"><span
                                    class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">القسم الثالث</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages3" role="tab"><span
                                    class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">القسم الرابع</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages4" role="tab"><span
                                    class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">القسم الخامس</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages5" role="tab"><span
                                    class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">القسم السادس</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages6" role="tab"><span
                                    class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">القسم السابع</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages7" role="tab"><span
                                    class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">القسم الثامن</span></a>
                        </li>
                       
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content tabcontent-border">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            @include('admin.setting.settingSite')
                        </div>

                        <div class="tab-pane  p-20" id="profile2" role="tabpanel">
                            @include('admin.setting.navbar')
                        </div>

                        <div class="tab-pane  p-20" id="profile" role="tabpanel">
                            @include('admin.setting.section1')
                        </div>

                        <div class="tab-pane p-20" id="messages" role="tabpanel">
                            @include('admin.setting.section2')
                        </div>

                        <div class="tab-pane p-20" id="messages2" role="tabpanel">
                            @include('admin.setting.section3')
                        </div>

                        <div class="tab-pane p-20" id="messages3" role="tabpanel">
                            @include('admin.setting.section4')
                        </div>

                        <div class="tab-pane p-20" id="messages4" role="tabpanel">
                            @include('admin.setting.section5')
                        </div>

                        <div class="tab-pane p-20" id="messages5" role="tabpanel">
                            @include('admin.setting.section6')
                        </div>

                        <div class="tab-pane p-20" id="messages6" role="tabpanel">
                            @include('admin.setting.section7')
                        </div>

                        <div class="tab-pane p-20" id="messages7" role="tabpanel">
                            @include('admin.setting.section8')
                        </div>

                        
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection


@section('js')

@endsection
