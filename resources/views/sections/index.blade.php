@extends('./dashboard')

@section('content')
<h1 class="header_title">Manage Sections</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Class Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sections as $section)
                <tr  class="table_row">
                    <td>{{ $section->name }}</td>
                    <td>
                        <a href="{{ route('sections.show', $section->id) }}">View</a>
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
        <a href="{{ route('sections.create') }}" class="Back_Button">Add Section</a>
    </div>
@endsection
