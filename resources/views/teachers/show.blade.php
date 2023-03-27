@extends('./dashboard')

@section('content')

    <h1 class="header_title">{{__('school.manage_teachers')}}</h1>
    <table>
        <thead>
            <tr>
                <th>{{__('school.first_name')}}</th>
                <th>{{__('school.last_name')}}</th>
                <th>{{__('school.phone')}}</th>
                <th>{{__('school.action')}}</th>
            </tr>
        </thead>
        <tbody>
                <tr  class="table_row">
                    <td>{{ $teacher->first_name }}</td>
                    <td>{{ $teacher->last_name }}</td>
                    <td>{{ $teacher->phone }}</td>
                    <td>
                        <a href="{{ route('teachers.edit', $teacher->id) }}">{{__('school.edit')}}</a>
                        <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">{{__('school.delete')}}</button>
                        </form>
                    </td>
                </tr>
        </tbody>
    </table>
    <div class="Back_Button_div">
        <a href="{{ route('teachers.index') }}" class="Back_Button">{{__('school.back')}}</a>
    </div>
@endsection
