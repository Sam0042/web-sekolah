<?php

namespace Database\Seeders;

use App\Models\ProfilSekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilSekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profil_sekolah')->insert([
            'nama_sekolah' => 'SMK Nasional Depok',
            'alamat' => 'Jl. Raya Grogol No.2, Grogol, Kec. Limo, Kota Depok, Jawa Barat 16512',
            'telp' => '(021) 7754635',
            'visi' => 'Menjadikan sekolah unggul dengan sumber daya manusia yang bertakwa, berbudaya dan berdaya saing.',
            'misi' => 'Menyelenggarakan kegiatan pendampingan keagamaan dalam rangka peningkatan ketaqwaan.',
        ]);
    }
}
