@extends('./dashboard')

@section('title', 'Students')

@section('content')
    <h1 class="header_title">Manage Students</h1>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>section</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr   class="table_row">
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->section_id }}</td>
                    <td>
                        <a href="{{ route('students.show', $student->id) }}">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="Back_Button_div">
        <a href="{{ route('students.create') }}" class="Back_Button">Add Student</a>
    </div>
@endsection



