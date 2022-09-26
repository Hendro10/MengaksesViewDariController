<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
    return view ('welcome');
    }

    public function tampil()
    {
        $arrBarang = ["Monitor ASUS","Laptop Lenovo Flex5","Hp Samsung Galaxy A52",
        "Kabel Printer"];

        return view('barang')->with('barang', $arrBarang);
    }
}
