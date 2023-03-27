@extends('./dashboard')

@section('content')
    <h1 class="header_title">Manage Classes</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classes as $class)
                <tr class="table_row">
                    <td>{{ $class->name }}</td>
                    <td>
                        <a href="{{ route('classes.show', $class->id) }}">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <div class='pagination'>
        <div class='class_for_margin'>
            {!! $classes->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>



    <div class="Back_Button_div">
        <a href="{{ route('classes.create') }}" class="Back_Button">Add Class</a>
    </div>
@endsection
