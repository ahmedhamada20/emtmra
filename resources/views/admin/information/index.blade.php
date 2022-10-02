@extends('admin.layouts.master')
@section('css')

@endsection

@section('jop_title')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">بيانات الصفحه :: {{$pageId->name_page}}</h4>
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
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-success" data-toggle="modal" data-target="#create">اضافه بيانات
                                جديده
                            </button>
                        </div>
                        @include('admin.information.create')
                    </div>
                </div>

                <div class="card-body">
                    <div class="flash-message">
                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered data-table" id="zero_config">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>العنوان</th>
                                <th>النوع</th>
                                <th>حاله</th>
                                <th>العمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($data as $row)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$row->labale}}</td>
                                    <td>{{$row->type_input}}</td>
                                    <td>{{$row->status()}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-info dropdown-toggle" type="button"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                العمليات
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item text-success" data-toggle="modal"
                                                   data-target="#edit{{$row->id}}">تعديل</a>

                                                <a class="dropdown-item text-danger" data-toggle="modal"
                                                   data-target="#deleted{{$row->id}}">حذف</a>
                                            </div>
                                        </div>

                                    </td>
                                    @include('admin.information.edit')
                                    @include('admin.information.deleted')
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="table-active text-center">لا يوجد بيانات</td>
                                </tr>
                            @endforelse

                            </tbody>
                        </table>
                        {{ $data->render("pagination::bootstrap-4") }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')

@endsection
