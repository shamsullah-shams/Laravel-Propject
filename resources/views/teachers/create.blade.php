@extends('./dashboard')

@section('content')
    <form method="POST" action="{{ route('teachers.store') }}" class="Custom_Form">
        @csrf

        <!-- first_name -->
        <div>
            <label for="first_name">{{__('school.first_name')}}:</label>
            <input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')"  autofocus autocomplete="first_name" />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
        <label for="first_name">{{__('school.last_name')}}:</label>
            <input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')"  autocomplete="last_name" />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
        <label for="first_name"> {{__('school.phone')}}:</label>

            <input id="phone" class="block mt-1 w-full"
                            type="text"
                            name="phone"
                             autocomplete="phone" />

            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>
        <!-- user id -->
        <div class="mt-4">
        <label for="user_id">{{__('school.email')}}:</label>
            <select name="user_id" id="user_id">
                <option value=""></option>
                @foreach($users as $user) 
                    <option value="{{$user->id}}">{{$user->email}}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
        </div>

        <button type="submit" class="update_button">{{__('school.register')}}</button>
    </form>
    <div class="Back_Button_div">
        <a href="{{ route('teachers.index') }}" class="Back_Button">{{__('school.phone')}}</a>
    </div>
@endsection


