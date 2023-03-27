@extends('./dashboard')

@section('content')
<h1  class="header_title">{{__('school.manage_sections')}}</h1>
    <form action="{{ route('sections.update', $section->id) }}" method="POST"   class="Custom_Form">
        @csrf
        @method('PUT')
        <div>
            <label for="name">{{__('school.name')}}:</label>
            <input  class="edit_inputs" type="text" id="name" name="name" value="{{ old('name', $section->name) }}">
            @error('name')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="update_button">{{__('school.update')}}</button>
    </form>
    <div class="Back_Button_div">
        <a href="{{ route('sections.show', $section->id) }}" class="Back_Button">{{__('school.cancel')}}</a>
    </div>
@endsection


