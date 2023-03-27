@extends('./dashboard')

@section('content')

    <h1 class="header_title">{{__('school.manage_classes')}}</h1>
    
    <table>
        <thead>
            <tr>
                <th>{{__('school.class_name')}}</th>
                <th>{{__('school.action')}}</th>
            </tr>
        </thead>
        <tbody>
                <tr  class="table_row">
                    <td>{{ $singleClass->name }}</td>
                    <td>
                        <a href="{{ route('classes.edit', $singleClass->id) }}">{{__('school.edit')}}</a>
                        <form action="{{ route('classes.destroy', $singleClass->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">{{__('school.delete')}}</button>
                        </form>
                    </td>
                </tr>
        </tbody>
    </table>
    <div class="Back_Button_div">
        <a href="{{ route('classes.index') }}" class="Back_Button">{{__('school.back')}}</a>
    </div>
@endsection
