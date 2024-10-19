@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Especialidades
                        <a href="{{ route('specialties.create') }}" class="btn btn-primary">
                            Crear
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($specialties as $specialty)
                                    <tr>
                                        <td>{{ $specialty->id }}</td>
                                        <td>{{ $specialty->name }}</td>
                                        <td>
                                            <a href="{{ route('specialties.edit', $specialty) }}" class="btn btn-primary">
                                                Editar
                                            </a>
                                            <button class="btn btn-danger"
                                                onclick="event.preventDefault();
                                        document.getElementById('delete-specialty-form').submit()">
                                                Eliminar
                                            </button>
                                            <form id="delete-specialty-form"
                                                action="{{ route('specialties.destroy', $specialty) }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    {{ $specialties->links() }}
                </div>
            </div>
        </div>
    @endsection
