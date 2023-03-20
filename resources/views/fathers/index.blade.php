@extends('layouts.app')

@section('content')
    <h1>Fathers</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fathers as $father)
                <tr>
                    <td>{{ $father->name }}</td>
                    <td>{{ $father->email }}</td>
                    <td>{{ $father->phone }}</td>
                    <td>
                        <a href="{{ route('fathers.show', $father->id) }}">View</a>
                        <a href="{{ route('fathers.edit', $father->id) }}">Edit</a>
                        <form action="{{ route('fathers.destroy', $father->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('fathers.create') }}">Add Father</a>
@endsection

@section('styles')
    <style>
        form {
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        div {
            margin-bottom: 1rem;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            width: 100%;
        }

        label {
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        input[type="text"],
        input[type="email"] {
            padding: 0.5rem;
            border-radius: 0.25rem;
            border: 1px solid #ccc;
            width: 100%;
        }

        button[type="submit"],
        a.button {
            background-color: #007bff;
            color: #fff;
            padding: 0.5rem;
            border-radius: 0.25rem;
            text-align: center;
            text-decoration: none;
            margin-top: 1rem;
        }

        button[type="submit"]:hover,
        a.button:hover {
            background-color: #0056b3;
        }

        .error {
            color: #dc3545;
            font-size: 0.8rem;
            margin-top: 0.25rem;
        }
    </style>
@endsection
