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
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('students.show', $student->id) }}">Cancel</a>
@endsection



