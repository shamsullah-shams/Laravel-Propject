
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
            @foreach ($fathers as $father)
                <tr  class="table_row">
                    <td>{{ $father->first_name }}</td>
                    <td>{{ $father->last_name }}</td>
                    <td>{{ $father->phone }}</td>
                    <td>{{ $father->province }}</td>
                    <td>
                        <a href="{{ route('fathers.show', $father->id) }}">{{__('school.view')}}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class='pagination'>
        <div class='class_for_margin'>
            {!! $fathers->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>


    <div class="Back_Button_div">
        <a href="{{ route('fathers.create') }}" class="Back_Button">{{__('school.add_parent')}}</a>
    </div>
    @endsection
    
    