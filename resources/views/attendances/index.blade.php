@extends('./dashboard')

@section('content')
<h1 class="header_title">{{__('school.manage_attendance')}}</h1>
    <table>
        <thead>
            <tr>
                <th>{{__('school.status')}}</th>
                <th>{{__('school.action')}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attendances as $attendance)
                <tr   class="table_row">
                    <td>{{ $attendance->status }}</td>
                    <td>
                        <a href="{{ route('attendance.show', $attendance->id) }}">{{__('school.view')}}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="Back_Button_div">
        <a href="{{ route('attendance.create') }}" class="Back_Button">{{__('school.take_attendance')}}</a>
    </div>
@endsection




