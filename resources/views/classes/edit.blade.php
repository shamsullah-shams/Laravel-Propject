@extends('./dashboard')

@section('content')
    <h1></h1>
    <h1  class="header_title">Edit {{ $singleClass->name }}</h1>
    <form action="{{ route('classes.update', $singleClass->id) }}" method="POST"  class="Custom_Form">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Class Name:</label>
            <input  class="edit_inputs" type="text" id="name" name="name" value="{{ old('name', $singleClass->name) }}">
            @error('name')
                <div>{{ $message }}</div>
            @enderror
        </div>
    <button type="submit" class="update_button">Update</button>
    </form>
    <div class="Back_Button_div">
        <a href="{{ route('classes.show', $singleClass->id) }}" class="Back_Button">Cancel</a>
    </div>
@endsection



