<?php

namespace Database\Seeders;

use App\Models\Ekstrakurikuler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EkstrakurikulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ekskul= [
            [
                'nama' => 'Paskibra',
                'gambar' => 'https://kaltimtoday.co/wp-content/uploads/2023/08/suasana-pengibaran-bendera-merah-putih-unsplash-64d97c65b138b.jpg',
            ],
            [
                'nama' => 'Penjak Silat',
                'gambar' => 'https://cdn0-production-images-kly.akamaized.net/HNFq0hEqEXsW5G2zxHdkNmAnIgU=/800x450/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/1073964/original/053577400_1449079808-silat.jpg',
            ],
            [
                'nama' => 'Taekwondo',
                'gambar' => 'https://t3.ftcdn.net/jpg/02/74/38/30/360_F_274383001_km0k1Pz3GJRvcswxOZJG2hJLrYaI1v4c.jpg',
            ],
            [
                'nama' => 'Futsal',
                'gambar' => 'https://www.sman1sungaipenuh.sch.id/wp-content/uploads/2022/06/283461525_729870568433663_3605311806927776453_n.jpg',
            ],
        ];

        foreach ($ekskul as $data) {
            $contact = new Ekstrakurikuler();
            $contact->nama = $data['nama'];
            $contact->gambar = $data['gambar'];

            $contact->save();
        }
    }
}
