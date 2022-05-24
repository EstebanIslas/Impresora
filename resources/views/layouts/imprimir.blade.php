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
                </div>
            </div>
        </div>
    </div>
</div>

@endsection