@extends('./dashboard')

@section('content')
<h1  class="header_title">{{__('school.manage_sections')}}</h1>
    <form method="POST" action="{{ route('sections.store') }}" class="Custom_Form">
        @csrf

        <!-- section name -->
        <div>
            <label for="name">{{__('school.name')}}:</label>
            <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- class id -->
        <div class="mt-4">
        <label for="class_id">{{__('school.class_name')}}:</label>
            <select name="class_id" id="class_id">
                <option value=""></option>
                @foreach($classes as $class) 
                    <option value="{{$class->id}}">{{$class->name}}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('class_id')" class="mt-2" />
        </div>

        <button type="submit" class="update_button">{{__('school.register')}}</button>
    </form>
    <div class="Back_Button_div">
        <a href="{{ route('sections.index') }}" class="Back_Button">{{__('school.back')}}</a>
    </div>
@endsection


