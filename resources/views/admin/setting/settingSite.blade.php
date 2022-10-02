<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form action="{{route('setting.update','test')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" value="{{$setting->id ?? ''}}" name="id">
                    <input type="hidden" value="1" name="page_id">


                    <div class="row">
                        <div class="col">
                            <label>اسم الموقع بالعربي</label>
                            <input type="text" name="name_site" class="form-control"
                                   value="{{old('name_site',$setting->getTranslation('name_site','ar') ?? '')}}">
                        </div>

                        <div class="col">
                            <label>اسم الموقع الانجلزي</label>
                            <input type="text" name="name_site_en" class="form-control"
                                   value="{{old('name_site',$setting->getTranslation('name_site','en') ?? '')}}">
                        </div>

                        <div class="col">
                            <label>رقم الهاتف</label>
                            <input type="number" name="phone" class="form-control"
                                   value="{{old('phone',$setting->phone ?? '')}}">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label>فيس بوك</label>
                            <input type="url" name="facebook" class="form-control"
                                   value="{{old('facebook',$setting->facebook ?? '')}}">
                        </div>

                        <div class="col">
                            <label>رابط الموقع</label>
                            <input type="url" name="url" class="form-control"
                                   value="{{old('url',$setting->url ?? '')}}">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <label>اسم المشورع بالعربي</label>
                            <input type="text" name="title" class="form-control" required
                                   value="{{old('title',$setting->getTranslation('title','ar') ?? '')}}">
                        </div>
                        <div class="col">
                            <label>اسم المشورع بالانجلزي</label>
                            <input type="text" name="title_en" class="form-control" required
                                   value="{{old('title',$setting->getTranslation('title','en') ?? '')}}">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            @if($setting->photo_navbar)
                                <img src="{{asset('admin/assets/setting/'.$setting->photo_navbar)}}" alt="" width="50"
                                     height="50">
                            @endif
                        </div>

                        <div class="col">
                            <label>صوره تحت اسم المشروع</label>
                            <input type="file" accept="image/*" name="photo_navbar">
                        </div>
                    </div>

                    <hr>

                    <div class="row">

                        <div class="col">
                            @if($setting->photo_cover)
                                <img src="{{asset('admin/assets/setting/'.$setting->photo_cover)}}" alt="" width="50"
                                     height="50">
                            @endif
                        </div>

                        <div class="col">
                            <label>صوره السكشين الاول </label>
                            <input type="file" accept="image/*" name="photo_cover">
                        </div>
                    </div>
                    <hr>

                    <div class="row">

                        <div class="col">
                            @if($setting->photo_site)
                                <img src="{{asset('admin/assets/setting/'.$setting->photo_site)}}" alt="" width="50"
                                     height="50">
                            @endif
                        </div>

                        <div class="col">
                            <label>صوره الموقع </label>
                            <input type="file" accept="image/*" name="photo_site">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <label>SEO يجب كتابه بين كل كلمه وكلمه علامه <strong class="text--danger">,</strong></label>
                            <textarea class="form-control" name="seo"  required>
                                {{ $setting->seo->notes }}
                            </textarea>
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-success">تحديث البيانات</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
