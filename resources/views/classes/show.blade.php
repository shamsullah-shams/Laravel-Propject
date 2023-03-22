@extends('./dashboard')

@section('content')

    <h1 class="header_title">Manage Class</h1>
    
    <table>
        <thead>
            <tr>
                <th>Class Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
                <tr  class="table_row">
                    <td>{{ $singleClass->name }}</td>
                    <td>
                        <a href="{{ route('classes.edit', $singleClass->id) }}">Edit</a>
                        <form action="{{ route('classes.destroy', $singleClass->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
        </tbody>
    </table>
    <div class="Back_Button_div">
        <a href="{{ route('classes.index') }}" class="Back_Button">Back</a>
    </div>
@endsection
