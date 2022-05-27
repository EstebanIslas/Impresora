<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\Printer;
require dirname(__DIR__) . '/../../../multiInsert/app/Http/Controllers/MultiController.php';

class ImpresoraController extends Controller
{
    public function index()
    {
        return view('layouts.imprimir');
    }

    public function impresion()
    {
        $nombre_impresora = "eQual";
        $connector = new WindowsPrintConnector($nombre_impresora);
        $impresora = new Printer($connector);

        $impresora->setJustification(Printer::JUSTIFY_CENTER);
        $impresora->setTextSize(2, 2);
        $impresora->text("Imprimiendo\n");
        $impresora->text("ticket\n");
        $impresora->text("desde\n");
        $impresora->text("Laravel\n");
        $impresora->setTextSize(1, 1);
        $impresora->feed(5);
        $impresora->close();
    }

    #Enviar a otro proyecto
    public function enviar(Request $request)
    {
        //echo "Se recibe desde impresora el id: ".$id;
        //dd($request->all());
        #Enviar a otro proyecto
        $comunicador = new MultiController();
        $comunicador->recibir($request->modelo);
        /*foreach ($request->modelo as $key => $modelo) {
            echo $request->modelo[$key].'<br>';
        }*/
    }
}
