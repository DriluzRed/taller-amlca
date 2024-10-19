@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Crear Especialidades
                    </div>
                    <div class="card-body">
                        <form action="{{ route('specialties.store') }}" method="POST">
                            @csrf
                            <div class="form-group
                            @error('name')
                                has-danger
                            @enderror">
                            
                                <label for="name">Nombre</label>
                                <input type="text" name="name" id="name" class="form-control
                                @error('name')
                                    is-invalid
                                @enderror" value="{{ old('name') }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection