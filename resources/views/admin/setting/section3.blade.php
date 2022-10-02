<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <button class="btn btn-success" data-toggle="modal" data-target="#createsection3">اضافه جديده</button>
                <!-- Modal -->
                <div class="modal fade" id="createsection3" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">اضافه جديده</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('section3.store')}}" method="post" autocomplete="off"
                                    enctype="multipart/form-data">
                                    @csrf


                                    <div class="row">
                                        <div class="col">
                                            <label>الاسم بالعربي</label>
                                            <input type="text" name="category" class="form-control" required>
                                        </div>
                                        <div class="col">
                                            <label>الاسم بالانجلزي</label>
                                            <input type="text" name="category_en" class="form-control" required>
                                        </div>
                                    </div>



                                    <br>

                                    <div class="row">
                                        <div class="col">
                                            <label>العناصر يجب ادخال بين كل عنصر وعنصر اخر علامه بالعربي<strong
                                                    class="text-danger">,</strong> </label>
                                            <input type="text" name="sub_category" class="form-control" required>
                                        </div>
                                        <div class="col">
                                            <label>العناصر يجب ادخال بين كل عنصر وعنصر اخر علامه بالانجلزي<strong
                                                    class="text-danger">,</strong> </label>
                                            <input type="text" name="sub_category_en" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق
                                        </button>
                                        <button type="submit" class="btn btn-primary">حفظ</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered data-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>العناصر</th>
                                <th>العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sectionsthere as $row)
                            <tr>
                                <td>{{$loop->index + 1}}</td>

                                <td>{{$row->category}}</td>
                                <td>{{$row->sub_category}}</td>
                                <td>
                                    <a href="" class="btn btn-success" data-toggle="modal"
                                        data-target="#editSection3{{$row->id}}">edit</a>
                                    <form action="{{route('section3.destroy',$row->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger">deleted</button>
                                    </form>

                                </td>


                                {{-- Start edit --}}
                                <div class="modal fade" id="editSection3{{$row->id}}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">تعديل</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('section3.update',$row->id)}}" method="post"
                                                    autocomplete="off" enctype="multipart/form-data">
                                                    @method('PUT')
                                                    @csrf


                                                    <div class="row">
                                                        <div class="col">
                                                            <label>الاسم بالعربي</label>
                                                            <input type="text" name="category" class="form-control"
                                                                value="{{$row->getTranslation('category','ar')}}">
                                                        </div>
                                                        <div class="col">
                                                            <label>الاسم بالانجلزي</label>
                                                            <input type="text" name="category_en" class="form-control"
                                                                value="{{$row->getTranslation('category','en')}}">
                                                        </div>
                                                    </div>

                                                    <br>

                                                    <div class="row">
                                                        <div class="col">
                                                            <label>العناصر يجب ادخال بين كل عنصر وعنصر اخر علامه بالعربي<strong
                                                                    class="text-danger">,</strong> </label>
                                                            <input type="text" name="sub_category" class="form-control"
                                                                value="{{$row->getTranslation('sub_category','ar')}}">
                                                        </div>
                                                        <div class="col">
                                                            <label>العناصر يجب ادخال بين كل عنصر وعنصر اخر علامه بالانجلزي<strong
                                                                    class="text-danger">,</strong> </label>
                                                            <input type="text" name="sub_category_en" class="form-control"
                                                                value="{{$row->getTranslation('sub_category','en')}}">
                                                        </div>
                                                    </div>






                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">اغلاق
                                                        </button>
                                                        <button type="submit" class="btn btn-primary">حفظ</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                {{-- End edit --}}
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>