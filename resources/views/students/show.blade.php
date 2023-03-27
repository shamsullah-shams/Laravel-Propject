@extends('./dashboard')

@section('content')

    <h1 class="header_title">Manage Student</h1>
    
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Father Name</th>
                <th>Image</th>
                <th>Section</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
                <tr  class="table_row">
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->father->first_name. ' '. $student->father->last_name }}</td>
                    <td class="image_td">                       
                        <img src="{{ asset($student->imageUrl) }}" alt="Image">                        
                    </td>
                    <td>{{ $student->section->name }}</td>
                    <td>
                        <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
        </tbody>
    </table>
    <div class="Back_Button_div">
        <a href="{{ route('students.index') }}" class="Back_Button">Back</a>
    </div>
@endsection
