<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Helpers\Clases\Main\TipoProductoClass;
use Helpers\Clases\Main\ProductoClass;
use Helpers\Clases\Main\TiendaClass;


class CartaController extends Controller
{
    //
    public function index()
    {

        $objTipoProducto = new TipoProductoClass();
        $objProducto = new ProductoClass();
        $objTienda = new TiendaClass();

        $lista = $objTipoProducto->getTipoProductosClass();
        $allProductos = $objProducto->getAllProducts();


       

        return view('main.carta', ['lista' => $lista, 'allProductos' => $allProductos]);
    }
}
