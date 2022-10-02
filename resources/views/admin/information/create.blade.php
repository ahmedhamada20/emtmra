<!-- Create new Information -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">اضافه بيانات للصفحه :: {{$pageId->name_page}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('information.store')}}" method="post" autocomplete="off">
                    @csrf

                    <input type="hidden" name="page_id" value="{{$pageId->id}}">

                    <div class="row">
                        <div class="col">
                            <label>اسم الحقل</label>
                            <input type="text" class="form-control" name="labale" required>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <label>نوع الحقل</label>
                            <select class="form-control p-1" required name="type_input">
                                <option value="" disabled selected>-- اختر من القائمه --</option>
                                <option value="number">رقم</option>
                                <option value="text">نص</option>
                            </select>
                        </div>


                        <div class="col">
                            <label>نوع الحقل</label>
                            <select class="form-control p-1" required name="required_input">
                                <option value="" disabled selected>-- اختر من القائمه --</option>
                                <option value="1">مطلوب</option>
                                <option value="0">عادي</option>
                            </select>
                        </div>

                    </div>

                    <br>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        <button type="submit" class="btn btn-primary">حفظ</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
