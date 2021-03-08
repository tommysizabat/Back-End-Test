<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('canvas_posts')->insert([
	    	[
	    		'id' => 789,
	    		'slug' => "suatu-sore-di-pelabuhan-sunda-kelapa",
	    		'title' => "Suatu Sore di Pelabuhan Sunda Kelapa",
	    		'body' => "Suatu sore yang terik pada pertengahan Februari 2019, sejumlah remaja naik ke atas kapal layar motor Sinar Keluarga yang bersandar di Pelabuhan Sunda Kelapa, Jakarta Utara. Sesampainya di anjong (segitiga penyeimbang) yang berada di bagian depan kapal, mereka bergantian melompat. Byur, byur, prakk suara tubuh bertemu dengan air laut, susul menyusul. Sementara buruh bongkar muat di sebelahnya terus bekerja, mengangkut muatan, memindahkan barang dari truk ke kapal.",
	    		'user_id' => "530e6563-54f9-reporter1",
	    		'published_at' => Carbon::now(),
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
	   		],
	    	[
	    		'id' => 790,
	    		'slug' => "gosip-merger-perusahaan-teknologi-di-sekitar-kita",
	    		'title' => "Gosip Merger Perusahaan Teknologi di Sekitar Kita",
	    		'body' => "Kabar rencana merger antara Gojek dan Grab serta Gojek dan Tokopedia menarik dicermati karena melibatkan dana yang sangat besar dan dapat mengubah dominasi bisnis berbasis daring.",
	    		'user_id' => "530e6563-54f9-reporter1",
	    		'published_at' => Carbon::now(),
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
	   		],
	    	[
	    		'id' => 791,
	    		'slug' => "universitas-lampung-kkn-tatap-muka-4300-mahasiswa-wajib-tes-cepat",
	    		'title' => "Universitas Lampung KKN Tatap Muka, 4.300 Mahasiswa Wajib Tes Cepat",
	    		'body' => "Sebanyak 4.300 mahasiswa Universitas Lampung akan mengikuti kegiatan Kuliah Kerja Nyata (KKN) tatap muka mulai 26 Januari 2021. Sebelum diterjunkan ke desa-desa, para mahasiswa itu wajib menjalani tes cepat Covid-19.",
	    		'user_id' => "530e6563-54f9-reporter1",
	    		'published_at' => Carbon::now(),
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
	   		],
	    	[
	    		'id' => 792,
	    		'slug' => "kisah-berulang-penguasaan-partai-di-sumatera-barat",
	    		'title' => "Kisah Berulang Penguasaan Partai di Sumatera Barat",
	    		'body' => "Meski memiliki modal penguasaan hingga dua pertiga wilayah di Sumbar dalam Pemilu 2019, mesin partai dari Gerindra kesulitan untuk mengulang dominasi serupa dalam Pilkada 2020.",
	    		'user_id' => "530e6563-54f9-reporter1",
	    		'published_at' => Carbon::now(),
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
	   		],
	    	[
	    		'id' => 793,
	    		'slug' => "kapolda-metro-jaya-beri-tugas-penanganan-covid-19-kepada-15-pejabat-baru",
	    		'title' => "Kapolda Metro Jaya Beri Tugas Penanganan Covid-19 kepada 15 Pejabat Baru",
	    		'body' => "Inspektur Jenderal M Fadil Imran meminta para pejabat baru segera melakukan langkah-langkah taktis yang tidak tanggung-tanggung di lapangan guna turut mengendalikan wabah Covid-19.",
	    		'user_id' => "530e6563-54f9-editor1",
	    		'published_at' => Carbon::now(),
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
	   		],
            
        ]);

    }
}
