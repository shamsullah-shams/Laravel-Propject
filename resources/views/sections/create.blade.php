@extends('layouts.app')

@section('content')
    <h1>Add Section</h1>
    <form action="{{ route('sections.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
            @error('name')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="class_id">class</label>
            <select value="class_id">
                <option name="" id="">1</option>
                <option name="" id="">1</option>
                <option name="" id="">1</option>
                <option name="" id="">1</option>
            </select>
        </div>
        <button type="submit">Create</button>
    </form>
    <a href="{{ route('sections.index') }}">Back</a>
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