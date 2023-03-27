@extends('./dashboard')

@section('title', 'Students')

@section('content')
    <h1 class="header_title">{{__('school.manage_students')}}</h1>
    <table>
        <thead>
            <tr>
                <th>{{__('school.first_name')}}</th>
                <th>{{__('school.last_name')}}</th>
                <th>{{__('school.section')}}</th>
                <th>{{__('school.action')}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr   class="table_row">
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->section_id }}</td>
                    <td>
                        <a href="{{ route('students.show', $student->id) }}">{{__('school.view')}}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class='pagination'>
        <div class='class_for_margin'>
            {!! $students->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>


    <div class="Back_Button_div">
        <a href="{{ route('students.create') }}" class="Back_Button">{{__('school.add_student')}}</a>
    </div>
@endsection



