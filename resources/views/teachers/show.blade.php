@extends('./dashboard')

@section('content')

    <h1 class="header_title">Manage Teacher</h1>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
                <tr  class="table_row">
                    <td>{{ $teacher->first_name }}</td>
                    <td>{{ $teacher->last_name }}</td>
                    <td>{{ $teacher->phone }}</td>
                    <td>
                        <a href="{{ route('teachers.edit', $teacher->id) }}">Edit</a>
                        <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
        </tbody>
    </table>
    <div class="Back_Button_div">
        <a href="{{ route('teachers.index') }}" class="Back_Button">Back</a>
    </div>
@endsection
