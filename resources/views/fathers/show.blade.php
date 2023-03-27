@extends('./dashboard')

@section('content')

    <h1 class="header_title">{{__('school.manage_parents')}}</h1>
    <table>
        <thead>
            <tr>
                <th>{{__('school.first_name')}}</th>
                <th>{{__('school.last_name')}}</th>
                <th>{{__('school.phone')}}</th>
                <th>{{__('school.province')}}</th>
                <th>{{__('school.action')}}</th>
            </tr>
        </thead>
        <tbody>
                <tr  class="table_row">
                    <td>{{ $father->first_name }}</td>
                    <td>{{ $father->last_name }}</td>
                    <td>{{ $father->phone }}</td>
                    <td>{{ $father->province }}</td>
                    <td>
                        <a href="{{ route('fathers.edit', $father->id) }}">{{__('school.edit')}}</a>
                        <form action="{{ route('fathers.destroy', $father->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">{{__('school.delete')}}</button>
                        </form>
                    </td>
                </tr>
        </tbody>
    </table>
    <div class="Back_Button_div">
        <a href="{{ route('fathers.index') }}" class="Back_Button">{{__('school.back')}}</a>
    </div>
@endsection

