<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <button class="btn btn-success" data-toggle="modal" data-target="#createNavbar">اضافه جديده</button>
                <!-- Modal -->
                <div class="modal fade" id="createNavbar" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                                <form action="{{route('navbar.store')}}" method="post" autocomplete="off"
                                      enctype="multipart/form-data">
                                    @csrf


                                    <div class="row">
                                        <div class="col">
                                            <label>الاسم بالعربي</label>
                                            <input type="text" name="title" class="form-control" required>
                                        </div>
                                        <div class="col">
                                            <label>الاسم بالانجلزي</label>
                                            <input type="text" name="title_en" class="form-control" required>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="row">
                                        <div class="col">
                                            <label>photo</label>
                                            <input type="file" name="photo" accept="image/*">
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
                            <th>الصوره</th>
                            <th>الاسم</th>
                            <th>العمليات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($navbars as $row)
                            <tr>
                                <td>{{$loop->index + 1}}</td>
                                <td><img src="{{asset('admin/assets/navbar/'.$row->photo)}}" alt="" width="50"
                                         height="50"></td>
                                <td>{{$row->title}}</td>
                                <td>
                                    <a href="" class="btn btn-success" data-toggle="modal"
                                       data-target="#edit{{$row->id}}">edit</a>
                                    <form action="{{route('navbar.destroy',$row->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger">deleted</button>
                                    </form>

                                </td>


                                {{--  Start  edit   --}}
                                <div class="modal fade" id="edit{{$row->id}}" tabindex="-1"
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
                                                <form action="{{route('navbar.update',$row->id)}}" method="post"
                                                      autocomplete="off" enctype="multipart/form-data">
                                                    @method('PUT')
                                                    @csrf


                                                 <div class="row">
                                                        <div class="col">
                                                            <label>الاسم بالعربي</label>
                                                            <input type="text" name="title" class="form-control"
                                                                   value="{{$row->getTranslation('title','ar')}}">
                                                        </div>
                                                        <div class="col">
                                                            <label>الاسم بالانجلزي</label>
                                                            <input type="text" name="title_en" class="form-control"
                                                                   value="{{$row->getTranslation('title','en')}}">
                                                        </div>
                                                    </div>

                                                    <br>

                                                    <div class="row">

                                                        <div class="col">
                                                            <img src="{{asset('admin/assets/navbar/'.$row->photo)}}"
                                                                 width="80" height="80" alt="">
                                                        </div>

                                                        <div class="col">
                                                            <label>photo</label>
                                                            <input type="file" name="photo" accept="image/*">
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
                                {{--  End  edit   --}}
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
