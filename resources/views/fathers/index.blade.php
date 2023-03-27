
@extends('./dashboard')

@section('content')
    <h1 class="header_title">Manage Parents</h1>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>province</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fathers as $father)
                <tr  class="table_row">
                    <td>{{ $father->first_name }}</td>
                    <td>{{ $father->last_name }}</td>
                    <td>{{ $father->phone }}</td>
                    <td>{{ $father->province }}</td>
                    <td>
                        <a href="{{ route('fathers.show', $father->id) }}">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class='pagination'>
        <div class='class_for_margin'>
            {!! $fathers->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>


    <div class="Back_Button_div">
        <a href="{{ route('fathers.create') }}" class="Back_Button">Add Parents</a>
    </div>
    @endsection
    
    