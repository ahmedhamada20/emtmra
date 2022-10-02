<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered data-table"
                           id="zero_config">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>الاسم</th>
                            <th>البريد الالكتروني</th>
                            <th>رقم الهاتف</th>
                            <th>تاريخ التسجيل</th>
                            <th>مسجل من قبل</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($times as $row)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->phone}}</td>
                                <td>{{$row->data}}</td>
                                <td>{{$row->duplicate}}</td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="table-active text-center">لا يوجد
                                    بيانات
                                </td>
                            </tr>
                        @endforelse

                        </tbody>
                    </table>
                    {{ $times->render("pagination::bootstrap-4") }}
                </div>
            </div>
        </div>
    </div>
</div>
