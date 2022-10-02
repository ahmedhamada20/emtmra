<!-- deleted Page -->
<div class="modal fade" id="deleted{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">حذف الصفحه</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('pages.destroy','test')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')

                    <input type="hidden" value="{{$row->id}}" name="id">
                    <input type="hidden" value="{{$row->photo ?? ''}}" name="oldfile">
                    <input type="hidden" value="{{$row->message ?? ''}}" name="oldSeo">

                    <div class="row">
                        <div class="col">
                            <label class="text-danger">هل انت متأكد من عمليه الحذف الصفحه ؟</label>
                            <input type="text" name="name_page" readonly value="{{$row->name_page}}" class="form-control">
                        </div>
                    </div>

                    <br>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        <button type="submit" class="btn btn-primary">حذف</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
