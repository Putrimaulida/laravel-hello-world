<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        echo "<h1> Educa Studio </h1>";
        echo "Mari Belajar Sambil Bermain";
    }
    public function newsti($kbrti){
        return "Halaman Berita " .$kbrti;
    }
    public function aboutus(){
        echo "<h1> About Us </h1>";
        echo "Sejarah Educa Studio <br>";
        echo "Penghargaan <br>";
        echo "Rilis Produk <br>";
        echo "Hubungi Kami <br>";
        echo "Media Sosial <br>";
    }
    public function comment($yourname, $yourmessages){
        return "Nama saya " .$yourname. " ,Pesan saya untuk Jurusan Teknologi Informasi adalah " .$yourmessages;
    }
}
