@extends('./dashboard')

@section('content')
    <h1 class="header_title">{{__('school.manage_teachers')}}</h1>
    <table>
        <thead>
            <tr>
                <th>{{__('school.first_name')}}</th>
                <th>{{__('school.last_name')}}</th>
                <th>{{__('school.phone')}}</th>
                <th>{{__('school.action')}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
                <tr  class="table_row">
                    <td>{{ $teacher->first_name }}</td>
                    <td>{{ $teacher->last_name }}</td>
                    <td>{{ $teacher->phone }}</td>
                    <td>
                        <a href="{{ route('teachers.show', $teacher->id) }}">{{__('school.view')}}</a>
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
        <a href="{{ route('teachers.create') }}" class="Back_Button">{{__('school.add_teacher')}}</a>
    </div>
@endsection
