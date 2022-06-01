<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Cargar el CSS de Boostrap-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Click al Enlace para imprimir</div>

                    <div class="card-body">
                        <input type="text" name="modelo" id="modelo" class="form-control" value="Samsung Test">
                        <input type="submit" id="print" value="Imprimir">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/Impresora.js"></script>
    <script src="js/print_direct.js"></script>
</body>

</html>