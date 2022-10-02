<!-- Edit Information -->
<div class="modal fade" id="deleted{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">حذف  بيانات من الصفحه :: {{$pageId->name_page}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('information.destroy','test')}}" method="post" autocomplete="off">
                    @method('DELETE')
                    @csrf


                    <input type="hidden" name="id" value="{{$row->id}}">

                    <div class="row">
                        <div class="col">
                            <label>هل انت متأكد من عمليه الحذف ؟</label>
                            <input type="text" class="form-control" readonly name="labale" value="{{$row->labale}}">
                        </div>
                    </div>


                    <br>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        <button type="submit" class="btn btn-danger">حذف</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
