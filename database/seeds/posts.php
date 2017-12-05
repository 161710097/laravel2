<?php

use Illuminate\Database\Seeder;

class posts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa=[
        	['nama'=>'jurig','kelas'=>'xi','tanggal_lahir'=>'1999-12-12','jenis_kelamin'=>'laki-laki','agama'=>'islam','umur'=>'17','alamat'=>'paledang'],
        	['nama'=>'udin','kelas'=>'xii','tanggal_lahir'=>'1992-12-22','jenis_kelamin'=>'laki-laki','agama'=>'islam','umur'=>'20','alamat'=>'junti'],
        	['nama'=>'rahmat','kelas'=>'xi','tanggal_lahir'=>'1998-12-22','jenis_kelamin'=>'laki-laki','agama'=>'islam','umur'=>'45','alamat'=>'cikambuy'],
        	['nama'=>'baba','kelas'=>'xi','tanggal_lahir'=>'1999-10-10','jenis_kelamin'=>'laki-laki','agama'=>'islam','umur'=>'13','alamat'=>'paledang'],
        	['nama'=>'jajan','kelas'=>'xi','tanggal_lahir'=>'1999-10-10','jenis_kelamin'=>'laki-laki','agama'=>'islam','umur'=>'56','alamat'=>'landean'],
        	['nama'=>'mamat','kelas'=>'vii','tanggal_lahir'=>'1999-10-10','jenis_kelamin'=>'laki-laki','agama'=>'islam','umur'=>'16','alamat'=>'paledang'],
        	['nama'=>'jun','kelas'=>'xii','tanggal_lahir'=>'1991-11-11','jenis_kelamin'=>'laki-laki','agama'=>'islam','umur'=>'16','alamat'=>'paledang'],
        	['nama'=>'dede','kelas'=>'xii','tanggal_lahir'=>'1989-12-12','jenis_kelamin'=>'laki-laki','agama'=>'islam','umur'=>'16','alamat'=>'paledang'],
        	['nama'=>'roro','kelas'=>'xi','tanggal_lahir'=>'1999-10-10','jenis_kelamin'=>'laki-laki','agama'=>'islam','umur'=>'14','alamat'=>'junti'],
        	['nama'=>'jebred','kelas'=>'xi','tanggal_lahir'=>'1988-08-08','jenis_kelamin'=>'laki-laki','agama'=>'islam','umur'=>'18','alamat'=>'paledang']
        ];
        //masukan data ke database
        DB::table('siswa')->insert($siswa);
    }
}
