@extends('./dashboard')

@section('content')

    <h1 class="header_title">{{__('school.manage_students')}}</h1>
    
    <table>
        <thead>
            <tr>
                <th>{{__('school.first_name')}}</th>
                <th>{{__('school.last_name')}}</th>
                <th>{{__('school.father_name')}}</th>
                <th>{{__('school.image')}}</th>
                <th>{{__('school.section')}}</th>
                <th>{{__('school.action')}}</th>
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
                        <a href="{{ route('students.edit', $student->id) }}">{{__('school.edit')}}</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">{{__('school.delete')}}</button>
                        </form>
                    </td>
                </tr>
        </tbody>
    </table>
    <div class="Back_Button_div">
        <a href="{{ route('students.index') }}" class="Back_Button">{{__('school.back')}}</a>
    </div>
@endsection
