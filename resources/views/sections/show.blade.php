@extends('./dashboard')

@section('content')
<h1 class="header_title">Manage Section</h1>

<table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
                <tr  class="table_row">
                    <td>{{ $section->name }}</td>
                    <td>
                        <a href="{{ route('sections.edit', $section->id) }}">Edit</a>
                        <form action="{{ route('sections.destroy', $section->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
        </tbody>
    </table>

    <div class="Back_Button_div">
        <a href="{{ route('sections.index') }}" class="Back_Button">Back</a>
    </div>
@endsection


