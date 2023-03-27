@extends('./dashboard')

@section('content')
<h1  class="header_title">{{__('school.add_student')}}</h1>
    <form method="POST" action="{{ route('students.store') }}" class="Custom_Form"  enctype="multipart/form-data">
        @csrf

        <!-- first_name -->
        <div>
            <label for="first_name">{{__('school.first_name')}}:</label>
            <input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')"  autofocus autocomplete="first_name" />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
        <label for="last_name">{{__('school.last_name')}}:</label>
            <input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')"  autocomplete="last_name" />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>

        <!-- father id -->
        <div class="mt-4">
        <label for="father_id">{{__('school.father_name')}}:</label>
            <select name="father_id" id="father_id">
                <option value=""></option>
                @foreach($fathers as $father) 
                    <option value="{{$father->id}}">{{$father->first_name}}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('father_id')" class="mt-2" />
        </div>

        <!-- section id -->
        <div class="mt-4">
        <label for="section_id">{{__('school.section')}}:</label>
            <select name="section_id" id="section_id">
                <option value=""></option>
                @foreach($sections as $section) 
                    <option value="{{$section->id}}">{{$section->name}}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('section_id')" class="mt-2" />
        </div>

        <div class="mt-4">
        <label for="image">{{__('school.image')}}:</label>
            <input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" />
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>

        <button type="submit" class="update_button">{{__('school.register')}}</button>
    </form>

    <div class="Back_Button_div">
        <a href="{{ route('students.index') }}" class="Back_Button">{{__('school.back')}}</a>
    </div>
@endsection


