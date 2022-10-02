<!-- create new Pages -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">اضافه صفحه جديده</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('pages.store')}}" method="post" enctype="multipart/form-data" autocomplete="off">
                    @csrf

                    <div class="row">
                        <div class="col">
                            <label>اسم الصفحه</label>
                            <input type="text" name="name_page" required class="form-control">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <label>وصف الصفحه</label>
                            <textarea class="form-control" rows="5" name="notes"></textarea>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <div class="col">
                                <label>SEO</label>
                                <textarea class="form-control" rows="5" name="seo_notes"></textarea>
                            </div>
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اعلاق</button>
                        <button type="submit" class="btn btn-primary">حفظ</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
