@extends('layouts.app')

@section('content')
    <h1>Create Student</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div>
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" placeholder="Enter First Name">
            @error('first_name')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="last_name">Last Name:</label>
            <input placeholder="Enter Last Name" type="text" id="last_name" name="last_name" value="{{ old('last_name') }}">
            @error('last_name')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="province">Province:</label>
            <input placeholder="Enter Province" type="text" id="province" name="province" value="{{ old('province') }}">
            @error('province')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
            @error('phone')
                <div>{{ $message }}</div>
            @enderror
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