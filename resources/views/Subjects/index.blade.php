@extends('./dashboard')

@section('content')
<h1 class="header_title">Manage Subjects</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subjects as $subject)
                <tr  class="table_row">
                    <td>{{ $subject->name }}</td>
                    <td>
                        <a href="{{ route('subjects.show', $subject->id) }}">View</a>
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
        <a href="{{ route('subjects.create') }}" class="Back_Button">Add Subject</a>
    </div>
@endsection
