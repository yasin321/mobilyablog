<form id="servicesCategoryUpdate" action="{{route('servicesCategoryUpdates')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Kategori Fotoğraf</h6>
                <input type="file" class="dropify" name="photoUrl" id="myDropify" data-default-file="{{asset($detay->photoUrl)}}"/>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Kategori Adı</label>
        <input id="name" class="form-control" name="categoryName" value="{{$detay->categoryName}}" type="text">
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Kategori Açıklama</label>
        <input id="description" class="form-control" name="description" value="{{$detay->description}}" type="text">
    </div>


    <button class="btn btn-primary">Kaydet</button>
</form>


