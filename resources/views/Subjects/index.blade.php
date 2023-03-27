@extends('./dashboard')

@section('content')
<h1 class="header_title">{{__('school.manage_subjects')}}</h1>
    <table>
        <thead>
            <tr>
                <th>{{__('school.name')}}</th>
                <th>{{__('school.action')}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subjects as $subject)
                <tr  class="table_row">
                    <td>{{ $subject->name }}</td>
                    <td>
                        <a href="{{ route('subjects.show', $subject->id) }}">{{__('school.view')}}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <div class='pagination'>
        <div class='class_for_margin'>
            {!! $subjects->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>

    <div class="Back_Button_div">
        <a href="{{ route('subjects.create') }}" class="Back_Button">{{__('school.add_subject')}}</a>
    </div>
@endsection
