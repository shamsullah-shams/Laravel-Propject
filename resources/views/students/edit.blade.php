@extends('./dashboard')

@section('content')
    <h1  class="header_title">{{__('school.edit')}} {{ $student->first_name . ' '. $student->last_name }}</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST"   class="Custom_Form">
        @csrf
        @method('PUT')
        <div>
            <label for="first_name">{{__('school.first_name')}}:</label>
            <input  class="edit_inputs" type="text" id="first_name" name="first_name" value="{{ old('first_name', $student->first_name) }}">
            @error('first_name')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="last_name">{{__('school.last_name')}}:</label>
            <input  class="edit_inputs" type="text" id="last_name" name="last_name" value="{{ old('last_name', $student->last_name) }}">
            @error('last_name')
                <div>{{ $message }}</div>
            @enderror
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


        <button type="submit" class="update_button">{{__('school.update')}}</button>
    </form>

    <div class="Back_Button_div">
        <a href="{{ route('students.show', $student->id) }}" class="Back_Button">{{__('school.cancel')}}</a>
    </div>
@endsection

