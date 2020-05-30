@extends('layout')

@section('title','Crear Proyecto')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-3 col-lg-6 mx-auto">

            @include('partials.validation-errors')

            <form class="bg-white py-3 px-4 shadow rounded" action="{{ route('projects.store') }}" method="POST">
                <h1 class="display-4">Nuevo Proyecto</h1>
                <hr>
                @include('projects._form', ['btnText' => 'Guardar'])
            </form>
        </div>
    </div>
</div>
@endsection