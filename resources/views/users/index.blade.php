@extends('./dashboard')

@section('content')
    <h1 class="header_title">{{__('school.users')}}</h1>
    <table>
        <thead>
            <tr>
                <th>{{__('school.name')}}</th>
                <th>{{__('school.email')}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr  class="table_row">
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class='pagination'>
        <div class='class_for_margin'>
            {!! $users->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>


    <div class="Back_Button_div">
        <a href="{{ route('users.create') }}" class="Back_Button">{{__('school.add_user')}}</a>
    </div>
@endsection
