@extends('layouts.app')

@section('content')
    <h1>Register Student</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div>
            <label for="first_name">first_name:</label>
            <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}">
            @error('name')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="last_name">last_name:</label>
            <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}">
            @error('email')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="father_id">Father ID</label>
            <select value="father_id">
                <option name="" id="">1</option>
                <option name="" id="">1</option>
                <option name="" id="">1</option>
                <option name="" id="">1</option>
            </select>
        </div>
        <div>
            <label for="user_id">User ID</label>
            <select value="user_id">
                <option name="" id="">1</option>
                <option name="" id="">1</option>
                <option name="" id="">1</option>
                <option name="" id="">1</option>
            </select>
        </div>
        <div>
            <label for="section_id">Section ID</label>
            <select value="section_id">
                <option name="" id="">1</option>
                <option name="" id="">1</option>
                <option name="" id="">1</option>
                <option name="" id="">1</option>
            </select>
        </div>
        <button type="submit">Create</button>
    </form>
    <a href="{{ route('students.index') }}">Back</a>
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