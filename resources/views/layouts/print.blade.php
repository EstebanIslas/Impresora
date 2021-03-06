<!doctype html>
<html lang="en">
    <!--
  Plantilla inicial de Bootstrap 4
  @author parzibyte
  Visita: parzibyte.me/blog
-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">
        <meta name="description" content="Print a sale receipt in thermal
            printer by using a plugin">
        <meta name="author" content="Parzibyte">
        <title>Print a receipt using plugin</title>
        <!-- Cargar el CSS de Boostrap-->
        <link
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
    </head>

    <body>
        <main role="main" class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Print a sale ticket</h1>
                    <a href="//parzibyte.me/blog">By Parzibyte</a>
                    <br>
                    <a class="btn btn-danger btn-sm" href="../../index.html">Docs</a>
                </div>
                <!-- Aquí pon las col-x necesarias, comienza tu contenido, etcétera -->
                <div class="col-12 col-lg-6">
                    <h2>Printer settings</h2>
                    <strong>Selected printer: </strong>
                    <p id="impresoraSeleccionada"></p>
                    <div class="form-group">
                        <select class="form-control" id="listaDeImpresoras"></select>
                    </div>
                    <button class="btn btn-primary btn-sm"
                        id="btnRefrescarLista">Refresh list</button>
                    <button class="btn btn-primary btn-sm"
                        id="btnEstablecerImpresora">Set as default printer</button><h2>Sale
                        receipt example</h2>
                    <p>Click the button to print a sale receipt in default
                        printer:</p>
                    <button class="btn btn-success" id="btnImprimir">Print
                        ticket</button>

                </div>
                <div class="col-12 col-lg-6">
                    <h2>Log</h2>
                    <button class="btn btn-warning btn-sm" id="btnLimpiarLog">Clear</button>
                    <pre id="estado"></pre>
                </div>
            </div>
        </main>
        <script src="js/Impresora.js"></script>
        <script src="js/script.js"></script>
    </body>

</html>