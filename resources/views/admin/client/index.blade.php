@extends('admin.layouts.master')
@section('css')

@endsection

@section('jop_title')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">بيانات الصفحه :: {{$page->name_page}}</h4>
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
    بيانات الصفحه
@endsection

@section('contect')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> {{$page->name_page}}</h4>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span
                                    class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">جميع البيانات</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile" role="tab"><span
                                    class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">بيانات يوميه</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages" role="tab"><span
                                    class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">بيانات بالوقت</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages2" role="tab"><span
                                    class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">رفع البيانات</span></a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content tabcontent-border">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            @include('admin.client.alldata')
                        </div>
                        <div class="tab-pane  p-20" id="profile" role="tabpanel">
                            @include('admin.client.days')
                        </div>
                        <div class="tab-pane p-20" id="messages" role="tabpanel">
                            @include('admin.client.times')
                        </div>
                        <div class="tab-pane p-20" id="messages2" role="tabpanel">
                            @include('admin.client.upload')
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection


@section('js')

@endsection
