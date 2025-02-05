<?php


// $nama_variabel = tipe data/value/ nilai

//membuat kelas
class user
{

    //membuat atribut (property)/ variabel
    public $nama;
    
    //membuat fungsi
    function tampil ()
    {
        echo $this->nama;
    }
    // function tampil($id) {}

}

//instasiasi objek atau membuat objek
$user = new user (); //variabel tipe data objek

$user->nama = "Gadiza"; //mengisi nilai atribut

// cara memanggil fungsi
$user->tampil();