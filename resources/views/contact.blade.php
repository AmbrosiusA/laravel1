@extends('layout')

@section('title','Contact')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-3 col-lg-6 mx-auto">  
    
            @if(session('status'))
                {{ session('status') }}
            @endif

            <form class="bg-white shadow rounded py-3 px-4" action="{{ route('messages.store') }}" method="POST">
                @csrf
                <h1 class="display-4">Contacto</h1>
                <hr>
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror " name="name" id="name" placeholder="Nombre..." value="{{ old('name') }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-group">
                    <input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror " type="text" id="email" placeholder="Email..." name="email" value="{{ old('email') }}"><br>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-group">
                    <input class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror " name="subject" placeholder="Asunto..." value="{{ old('subject') }}"><br>
                        @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>      
                <div class="form-group">
                    <textarea class="form-control bg-light shadow-sm @error('content') is-invalid @else border-0 @enderror" name="content" placeholder="Mensaje..." value="{{ old('content') }}"></textarea><br>
                        @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>  
                <button class="btn btn-primary btn-lg btn-block">Enviar</button>
            </form>
        </div>
    </div>
</div>
@endsection