@extends('./dashboard')

@section('content')
<h1 class="header_title">Manage Attendance</h1>
    <table>
        <thead>
            <tr>
                <th>status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attendances as $attendance)
                <tr   class="table_row">
                    <td>{{ $attendance->status }}</td>
                    <td>
                        <a href="{{ route('attendance.show', $attendance->id) }}">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="Back_Button_div">
        <a href="{{ route('attendance.create') }}" class="Back_Button">Take Attendance</a>
    </div>
@endsection




