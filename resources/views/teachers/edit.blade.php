@extends('./dashboard')

@section('content')
    <h1  class="header_title">Edit {{ $teacher->first_name . ' '. $teacher->last_name }}</h1>
    <form action="{{ route('teachers.update', $teacher->id) }}" method="POST"  class="Custom_Form">
        @csrf
        @method('PUT')


        <!-- first_name -->
        <div>
            <label for="first_name">{{__('school.first_name')}}:</label>
            <input class="edit_inputs" type="text" id="first_name" name="first_name" value="{{ old('first_name', $teacher->first_name) }}">
            @error('first_name')
                <div>{{ $message }}</div>
            @enderror
        </div>
        
       <!-- Email Address -->
       <div class="mt-4">
        <label for="first_name">{{__('school.last_name')}}:</label>
            <input class="edit_inputs" type="text" id="last_name" name="last_name" value="{{ old('last_name', $teacher->last_name) }}">
            @error('last_name')
                <div>{{ $message }}</div>
            @enderror
        </div>
        
        
        <!-- Password -->
        <div class="mt-4">
            <label for="first_name">{{__('school.phone')}}:</label>
            <input class="edit_inputs" type="text" id="phone" name="phone" value="{{ old('phone', $teacher->phone) }}">
            @error('phone')
                <div>{{ $message }}</div>
            @enderror
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

        <button type="submit" class="update_button">{{__('school.update')}}</button>
    </form>
    <div class="Back_Button_div">
        <a href="{{ route('teachers.show', $teacher->id) }}" class="Back_Button">{{__('school.cancel')}}</a>
    </div>
@endsection

