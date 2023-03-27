@extends('./dashboard')

@section('content')
    <h1>{{ $student->name }}</h1>
    <p>Email: {{ $student->email }}</p>
    <p>{{__('school.phone')}}: {{ $student->phone }}</p>
    <a href="{{ route('students.edit', $student->id) }}">Edit</a>
    <form action="{{ route('students.destroy', $student->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">{{__('school.delete')}}</button>
    </form>
    <a href="{{ route('students.index') }}">{{__('school.back')}}</a>
@endsection
