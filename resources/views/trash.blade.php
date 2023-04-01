@extends('./dashboard')

@section('content')

    @if( count($fathers) < 1)
        @if(count($students) < 1)
            @if(count($teachers) < 1)
                <h1 class="header_title">{{__('school.trash_message')}}</h1>
            @endif
        @endif
    @endif

    @if(count($teachers) > 0)
        <h1 class="header_title">{{__('school.teachers')}}</h1>
        <table>
            <thead>
                <tr>
                    <th>{{__('school.first_name')}}</th>
                    <th>{{__('school.last_name')}}</th>
                    <th>{{__('school.phone')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr  class="table_row">
                        <td>{{ $teacher->first_name }}</td>
                        <td>{{ $teacher->last_name }}</td>
                        <td>{{ $teacher->phone }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    @if(count($students) > 0)
        <h1 class="header_title">{{__('school.students')}}</h1>
        <table>
            <thead>
                <tr>
                    <th>{{__('school.first_name')}}</th>
                    <th>{{__('school.last_name')}}</th>
                    <th>{{__('school.section')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr   class="table_row">
                        <td>{{ $student->first_name }}</td>
                        <td>{{ $student->last_name }}</td>
                        <td>{{ $student->section_id }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif


    @if(count($fathers) > 0)
        <h1 class="header_title">{{__('school.parents')}}</h1>
        <table>
            <thead>
                <tr>
                    <th>{{__('school.first_name')}}</th>
                    <th>{{__('school.last_name')}}</th>
                    <th>{{__('school.phone')}}</th>
                    <th>{{__('school.province')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fathers as $father)
                    <tr  class="table_row">
                        <td>{{ $father->first_name }}</td>
                        <td>{{ $father->last_name }}</td>
                        <td>{{ $father->phone }}</td>
                        <td>{{ $father->province }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif



    <div class="Back_Button_div">
        <a href="/trash-clear" class="Back_Button">{{__('school.clear_trash')}}</a>
    </div>
@endsection
