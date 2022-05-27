@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Click al Enlace para imprimir</div>

                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        <a href="{{route('impresion')}}">Imprimir</a><br>
                    </div>

                    <form action="{{route('enviar')}}" method="GET">

                        <input type="text" name="modelo" id="modelo" class="form-control" value="Samsung Test">

                        <input type="submit" value="Submit">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection