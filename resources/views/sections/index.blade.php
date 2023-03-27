@extends('./dashboard')

@section('content')
<h1 class="header_title">{{__('school.manage_sections')}}</h1>
    <table>
        <thead>
            <tr>
                <th>{{__('school.name')}}</th>
                <th>{{__('school.action')}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sections as $section)
                <tr  class="table_row">
                    <td>{{ $section->name }}</td>
                    <td>
                        <a href="{{ route('sections.show', $section->id) }}">{{__('school.view')}}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <div class='pagination'>
        <div class='class_for_margin'>
            {!! $sections->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>




    <div class="Back_Button_div">
        <a href="{{ route('sections.create') }}" class="Back_Button">{{__('school.add_section')}}</a>
    </div>
@endsection
