@extends('./dashboard')

@section('content')
    <h1 class="header_title">Manage Teachers</h1>
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
            @foreach ($teachers as $teacher)
                <tr  class="table_row">
                    <td>{{ $teacher->first_name }}</td>
                    <td>{{ $teacher->last_name }}</td>
                    <td>{{ $teacher->phone }}</td>
                    <td>
                        <a href="{{ route('teachers.show', $teacher->id) }}">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class='pagination'>
        <div class='class_for_margin'>
            {!! $teachers->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>


    <div class="Back_Button_div">
        <a href="{{ route('teachers.create') }}" class="Back_Button">Add Teacher</a>
    </div>
@endsection
