@extends('components.app')

@section('content')
    <section>
        <h1 style="font-weight: bold;font-size:60px;" class="text-center mt-3">SMK NASIONAL DEPOK</h1>
        <img style="margin: 0 auto; width:400px;margin-left:35%"
            src="https://kawanmuamua.id/assets/media/sekolah/logo/2f049608d77e15d0fe7a6dee218bd493.png" alt="">
    </section>
    <section class="d-flex justify-content-around mt-1 mb-4">
        <div class="ratio ratio-16x9 h-auto col-6" style="width: 500px">
            <iframe src="https://www.youtube.com/embed/f_EirGaVkRU" title="YouTube video" allowfullscreen></iframe>
        </div>
        <p class="col-6">
            SMK Nasional Depok Merupakan satuan Pendidikan Kejuruan pada jenjang pendidikan menengah yang berwawasan
            teknologi, berjiwa wirausaha, berdaya saing dan berakhlak mulia. SMK Nasional Depok berada di bawah naungan
            Lembaga Pendidikan Ghama D’leader School, yang didirikan pada tahun 1993 yang berlokasi di Jalan Grogol raya No.
            2, Kelurahan Grogol Kecamatan Limo Kota Depok. SMK Nasional Depok memiliki 3 (Tiga) Kompetensi Keahlian, yaitu
            Teknik Kendaraan Ringan Otomotif (TKRO), Teknik dan Bisnis Sepeda Motor (TBSM), Teknik Komputer dan Jaringan
            (TKJ)
            Dalam hal pengembangan sekolah yang berkelanjutan, SMK Nasional Depok mengembangkan ekosistem sekolah yang
            menyenangkan, yang berfokus pada students well being mulai dari pembelajaran, lingkungan, fasilitas, kemitraan
            DIDUKA dan Manajemen sekolah guna meningkatkan kompetensi lulusan yang berakhlak mulia sehingga mampu
            meningkatkan keterserapan lulusan di Dunia Kerja, Melanjutkan Studi ke PTN maupun berwirausaha.
        </p>
    </section><br><br>
    <section>
        <style>
            .card img {
                height: 200px;
            }
        </style>
        <h3 class="text-center">Informasi Terbaru</h3>
        <div class="d-flex justify-content-around mt-3">
            <div class="card" style="width: 300px">
                <img src="https://kawanmuamua.id/assets/media/sekolah/fasilitas/de4808137c28519b78e0a4075ffb1b0c.jpeg"
                    class="card-img-top" alt="Fissure in Sandstone" />
                <div class="card-body">
                    <h5 class="card-title">Upacara Bendera</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Lihat Detail</a>
                </div>
            </div>
            <div class="card" style="width: 300px">
                <img src="https://fastly.4sqi.net/img/general/600x600/5179170_hWBF906AxNisFZZN0KjYWG1cnkUTSwjj5AIewEuavZc.jpg"
                    class="card-img-top" alt="Fissure in Sandstone" />
                <div class="card-body">
                    <h5 class="card-title">Kegiatan Pembelajaran</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Lihat Detail</a>
                </div>
            </div>
            <div class="card" style="width: 300px">
                <img src="https://sekolahghama.com/wp-content/uploads/2022/02/b05557c96ba36423b24d06d93bea6275.jpeg"
                    class="card-img-top" alt="Fissure in Sandstone" />
                <div class="card-body">
                    <h5 class="card-title">Uji Praktik</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Lihat Detail</a>
                </div>
            </div>

        </div>
    </section>
@endsection
