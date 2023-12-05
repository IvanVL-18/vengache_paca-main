@extends('layouts.app')

@section('style1')
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        form label {
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        form input {
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ced4da;
            border-radius: 4px;
            font-size: 14px;
        }

        form button {
            background-color: #007BFF;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        form button:hover {
            background-color: #0056b3;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('admin.update', ['admin' => $usuario->id]) }}">
            @csrf
            @method('PUT')

            <!-- Campos del formulario -->
            <label for="name">Nombre:</label>
            <input type="text" name="name" value="{{ $usuario->name }}" required>
            <p></p>
            <label for="email">Correo electrónico:</label>
            <input type="email" name="email" value="{{ $usuario->email }}" required>
             <p>

             </p>   
            <label for="password">Contraseña:</label>
            <input type="password" name="password" placeholder="Deja en blanco para no cambiar">

            <button type="submit">Actualizar</button>
        </form>
    </div>

    
@endsection
