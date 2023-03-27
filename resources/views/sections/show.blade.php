@extends('./dashboard')

@section('content')
<h1 class="header_title">{{__('school.manage_sections')}}</h1>

<table>
        <thead>
            <tr>
                <th>{{__('school.name')}}</th>
                <th>{{__('school.action')}}</th>
            </tr>
        </thead>
        <tbody>
                <tr  class="table_row">
                    <td>{{ $section->name }}</td>
                    <td>
                        <a href="{{ route('sections.edit', $section->id) }}">{{__('school.edit')}}</a>
                        <form action="{{ route('sections.destroy', $section->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">{{__('school.delete')}}</button>
                        </form>
                    </td>
                </tr>
        </tbody>
    </table>

    <div class="Back_Button_div">
        <a href="{{ route('sections.index') }}" class="Back_Button">{{__('school.back')}}</a>
    </div>
@endsection


