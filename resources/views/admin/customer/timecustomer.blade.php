@extends('admin.layouts.master')
@section('css')

@endsection

@section('jop_title')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">رفع بيانات جديده </h4>
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
رفع بيانات جديده
@endsection

@section('contect')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('updated') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <input type="file" name="filename" class="form-control" required accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"> 
                        </div>

                        <div class="col">
                            <button class="btn btn-success btn-block">رفع الملف</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')

@endsection