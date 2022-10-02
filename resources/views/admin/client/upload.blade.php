<div class="row">
    <div class="col">
        <div class="form-group">
            <form action="{{route('clientUpload')}}" method="post"
                  enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="page_id" value="{{$page->id}}">
                <div class="row">
                    <div class="col">
                        <input type="file" required
                               accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
                               name="filename" class="form-control">

                    </div>

                    <div class="col">
                        <button class="btn btn-success btn-block">رفع البيانات</button>

                    </div>
                </div>
            </form>


        </div>


    </div>
</div>
