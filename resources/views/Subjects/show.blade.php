@extends('./dashboard')

@section('content')

    <h1 class="header_title">{{__('school.manage_subjects')}}</h1>
    <table>
        <thead>
            <tr>
                <th>{{__('school.name')}}</th>
                <th>{{__('school.action')}}</th>
            </tr>
        </thead>
        <tbody>
                <tr  class="table_row">
                    <td>{{ $subject->name }}</td>
                    <td>
                        <a href="{{ route('subjects.edit', $subject->id) }}">{{__('school.edit')}}</a>
                        <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">{{__('school.delete')}}</button>
                        </form>
                    </td>
                </tr>
        </tbody>
    </table>
    <div class="Back_Button_div">
        <a href="{{ route('subjects.index') }}" class="Back_Button">{{__('school.back')}}</a>
    </div>
@endsection

