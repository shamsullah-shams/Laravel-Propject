@extends('./dashboard')

@section('content')
    <h1 class="header_title">{{__('school.manage_classes')}}</h1>
    <table>
        <thead>
            <tr>
                <th>{{__('school.name')}}</th>
                <th>{{__('school.action')}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classes as $class)
                <tr class="table_row">
                    <td>{{ $class->name }}</td>
                    <td>
                        <a href="{{ route('classes.show', $class->id) }}">{{__('school.view')}}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <div class='pagination'>
        <div class='class_for_margin'>
            {!! $classes->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>



    <div class="Back_Button_div">
        <a href="{{ route('classes.create') }}" class="Back_Button">{{__('school.add_class')}}</a>
    </div>
@endsection
