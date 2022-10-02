@extends('admin.layouts.master')
@section('css')

@endsection


@section('title')
العملاء اليوميه
@endsection

@section('jop_title')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">العملاء اليوميه بتاريخ {{ date('Y-m-d') }}</h4>

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

@section('contect')
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-striped table-bordered data-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>البريد الالكتروني</th>
                                <th>رقم الهاتف</th>
                                <th>كود الدوله</th>
                                <th>المؤهل</th>
                                <th>الوظيفه</th>
                                <th>الحاله</th>
                                <th>تاريخ التسجيل</th>
                                <th>مسجل من قبل</th>
                                {{-- <th>العمليات</th> --}}
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')
<script type="text/javascript">
    $(function () {
      
      var table = $('.data-table').DataTable({
        
        processing: true,
            serverSide: true,
       
          ajax: "{{ route('custmoer.create') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'name', name: 'name'},
              {data: 'email', name: 'email'},
              {data: 'phone', name: 'phone'},
              {data: 'code', name: 'code'},
              {data: 'sloppy', name: 'sloppy'},
              {data: 'jops', name: 'jops'},
              {data: 'type', name: 'type'},
              {data: 'data', name: 'data'},
              {data: 'duplicate', name: 'duplicate'},
            //   {data: 'action', name: 'action', orderable: false, searchable: false},
          ],
        
      });
      
    });


    
</script>

@endsection