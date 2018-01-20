<?php

use Illuminate\Database\Seeder;

class siswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ma = [
        ['nim'=>'161701','nama'=>'Luthfi','tempat_lahir'=>'Nganjuk','tanggal_lahir'=>'2001-01-19','alamat'=>'Kp Nusa Wangi','cita_cita'=>'Orang Sukses','hobi'=>'Main Game','foto'=>'a.jpg'],
        ['nim'=>'161702','nama'=>'Junika','tempat_lahir'=>'Palembang','tanggal_lahir'=>'2001-06-01','alamat'=>'Bojong Walu','cita_cita'=>'Tentara','hobi'=>'Main Bola','foto'=>'IMG_20171126_210925_177.jpg']
        ];
        DB::table('mahasiswas')->insert($ma);
    }
}
