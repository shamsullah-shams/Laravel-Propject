@extends('./dashboard')

@section('content')

    <h1 class="header_title">Manage Parent</h1>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>Province</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
                <tr  class="table_row">
                    <td>{{ $father->first_name }}</td>
                    <td>{{ $father->last_name }}</td>
                    <td>{{ $father->phone }}</td>
                    <td>{{ $father->province }}</td>
                    <td>
                        <a href="{{ route('fathers.edit', $father->id) }}">Edit</a>
                        <form action="{{ route('fathers.destroy', $father->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
        </tbody>
    </table>
    <div class="Back_Button_div">
        <a href="{{ route('fathers.index') }}" class="Back_Button">Back</a>
    </div>
@endsection

