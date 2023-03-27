@extends('./dashboard')

@section('content')
    <h1>Edit {{ $student->name }}</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $student->name) }}">
            @error('name')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email', $student->email) }}">
            @error('email')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="{{ old('phone', $student->phone) }}">
            @error('phone')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="update_button">{{__('school.register')}}</button>
    </form>
    <a href="{{ route('students.show', $student->id) }}">Cancel</a>
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