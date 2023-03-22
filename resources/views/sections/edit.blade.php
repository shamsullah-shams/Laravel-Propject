@extends('./dashboard')

@section('content')
<h1  class="header_title">Edit {{ $section->name}} section</h1>
    <form action="{{ route('sections.update', $section->id) }}" method="POST"   class="Custom_Form">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input  class="edit_inputs" type="text" id="name" name="name" value="{{ old('name', $section->name) }}">
            @error('name')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="update_button">Update</button>
    </form>
    <div class="Back_Button_div">
        <a href="{{ route('sections.show', $section->id) }}" class="Back_Button">Cancel</a>
    </div>
@endsection


