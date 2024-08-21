@extends('components.app')

@section('content')
    <style>
        .card img {
            height: 200px;
        }
    </style>
    <h1 class="text-center mt-3">Galeri</h1>
    <div class="d-flex justify-content-around mt-3">
        <div class="card" style="width: 18rem;">
            <img src="https://kawanmuamua.id/assets/media/sekolah/fasilitas/de4808137c28519b78e0a4075ffb1b0c.jpeg"
                class="card-img-top" alt="Sunset Over the Sea" />
            <div class="card-body">
                <p class="card-text text-center">Upacara Bendera</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://sekolahghama.com/wp-content/uploads/2022/02/b05557c96ba36423b24d06d93bea6275.jpeg"
                class="card-img-top" alt="Sunset Over the Sea" />
            <div class="card-body">
                <p class="card-text text-center">Uji Praktek</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://fastly.4sqi.net/img/general/600x600/5179170_hWBF906AxNisFZZN0KjYWG1cnkUTSwjj5AIewEuavZc.jpg"
                class="card-img-top" alt="Sunset Over the Sea" />
            <div class="card-body">
                <p class="card-text text-center">Pembelajaran</p>
            </div>
        </div>
    </div>
@endsection
