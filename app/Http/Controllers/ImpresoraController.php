<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\Printer;
//require dirname(__DIR__) . '/../../../multiInsert/app/Http/Controllers/MultiController.php';

class ImpresoraController extends Controller
{
    public function index()
    {
        return view('layouts.imprimir');
    }

    public function print_js()
    {
        return view('layouts.print');
    }

    public function print_direct()
    {
        return view('layouts.print_direct');
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

        $client = new \GuzzleHttp\Client();
        $res = $client->get('http://127.0.0.1/multiInsert/public/recibir?modelo='.$request->modelo);
        #echo $res->getStatusCode(); // 200
        echo $res->getBody();

        //return view('layouts.imprimir');    
        //return redirect()->away('http://127.0.0.1/multiInsert/public');
        #Enviar a otro proyecto
        //$comunicador = new MultiController();
        //$comunicador->recibir($request->modelo);
        /*foreach ($request->modelo as $key => $modelo) {
            echo $request->modelo[$key].'<br>';
        }*/
    }
}
