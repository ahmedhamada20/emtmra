<!-- Edit Page -->
<div class="modal fade" id="edit{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تعديل بيانات الصفحه</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('pages.update','test')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <input type="hidden" value="{{$row->id}}" name="id">

                    <div class="row">
                        <div class="col">
                            <label>اسم الصفحه</label>
                            <input type="text" name="name_page" value="{{$row->name_page}}" class="form-control">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <label>وصف الصفحه</label>
                            <textarea class="form-control" rows="5" name="notes">
                                {{$row->notes}}
                            </textarea>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <div class="col">
                                <label>SEO</label>
                                <textarea class="form-control" rows="5" name="seo_notes">
                                    @if($row->message)
                                        {{$row->message->notes}}
                                    @endif
                                </textarea>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            @if($row->image)
                                <a href="{{ $row->image }}">
                                    <img src="{{ $row->image }}" alt="{{ $row->name }}"
                                         class="list-thumbnail border-0" width="50" height="50">
                                </a>
                            @endif
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <input type="file" name="cover" accept="image/*" id="">
                        </div>
                    </div>


                    <br>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        <button type="submit" class="btn btn-primary">تعديل</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
