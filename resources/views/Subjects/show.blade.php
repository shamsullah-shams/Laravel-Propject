@extends('./dashboard')

@section('content')
    <h1>{{ $subject->first_name }}</h1>
    <p>Email: {{ $subject->last_name }}</p>
    <p>Phone: {{ $subject->phone }}</p>
    <p>Phone: {{ $subject->province }}</p>
    <a href="{{ route('subjects.edit', $subject->id) }}">Edit</a>
    <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <div class="Back_Button_div">
        <a href="{{ route('subjects.index') }}" class="Back_Button">Back</a>
    </div>
@endsection
