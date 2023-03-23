@extends('./dashboard')

@section('content')
    <h1  class="header_title">Edit {{ $subject->name }} Subject</h1>
    <form action="{{ route('subjects.update', $subject->id) }}" method="POST"  class="Custom_Form">
        @csrf
        @method('PUT')


        <!-- name -->
        <div>
            <label for="name">Name:</label>
            <input class="edit_inputs" type="text" id="name" name="name" value="{{ old('name', $subject->name) }}">
            @error('name')
                <div>{{ $message }}</div>
            @enderror
        </div>
                <!-- section id -->
                <div class="mt-4">
        <label for="section_id">Section:</label>
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
        <label for="section_id">Teacher:</label>
            <select name="teacher_id" id="teacher_id">
                <option value=""></option>
                @foreach($teachers as $teacher) 
                    <option value="{{$teacher->id}}">{{ $teacher->first_name . ' '. $teacher->last_name }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('teacher_id')" class="mt-2" />
        </div>

        <button type="submit" class="update_button">Update</button>
    </form>
    <div class="Back_Button_div">
        <a href="{{ route('subjects.show', $subject->id) }}" class="Back_Button">Cancel</a>
    </div>
@endsection

