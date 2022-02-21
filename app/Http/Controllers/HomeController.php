<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        echo "<h1> Halaman Awal </h1>";
        echo "Selamat Datang di Jurusan Teknologi Informasi Politeknik Negeri Malang";
    }
    public function d3mi(){
        return "Halaman Website Program Studi D-III Manajemen Informatika";
    }
    public function d4ti(){
        return "Halaman Website Program Studi D-IV Teknik Informatika";
    }
    public function newsti($kbrti){
        return "Halaman Berita " .$kbrti. " Jurusan Teknologi Informasi";
    }
    public function aboutus(){
        return "About Us";
    }
    public function kantor(){
        return "Halaman Website untuk Sarana Perkantoran Politeknik Negeri Malang";
    }
    public function kelas(){
        return "Halaman Website untuk Sarana Kelas Politeknik Negeri Malang";
    }
    public function lab(){
        return "Halaman Website untuk Sarana Laboratorium Politeknik Negeri Malang";
    }
    public function lain(){
        return "Halaman Website untuk Sarana Lainnya Politeknik Negeri Malang";
    }
    public function comment($yourname, $yourmessages){
        return "Nama saya " .$yourname. " ,Pesan saya untuk Jurusan Teknologi Informasi adalah " .$yourmessages;
    }
}
