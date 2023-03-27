@extends('./dashboard')

@section('content')
    <h1 class="header_title">{{__('school.manage_subjects')}}</h1>
    <form method="POST" action="{{ route('subjects.store') }}" class="Custom_Form">
        @csrf

        <!-- first_name -->
        <div>
            <label for="name">{{__('school.subject_name')}}:</label>
            <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
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

        <!-- teacher id -->
        <div class="mt-4">
        <label for="section_id">{{__('school.teacher')}}:</label>
            <select name="teacher_id" id="teacher_id">
                <option value=""></option>
                @foreach($teachers as $teacher) 
                    <option value="{{$teacher->id}}">{{ $teacher->first_name . ' '. $teacher->last_name }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('teacher_id')" class="mt-2" />
        </div>

        <button type="submit" class="update_button">{{__('school.register')}}</button>
    </form>
    <div class="Back_Button_div">
        <a href="{{ route('subjects.index') }}" class="Back_Button">{{__('school.back')}}</a>
    </div>
@endsection


