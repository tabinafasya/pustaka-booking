<?php

class Contoh1 extends CI_Controller
{

    public function index()
    {
        echo "<h1>Perkenalkan 🙍‍♂️</h1>";
        echo <<<'Salman'
        Nama Saya Salman Alfarisy,
        Saya tinggal di daerah Ciledug
        Olahraga yang saya sukai adalah Sepak Bola
        Salman;
    }
}
