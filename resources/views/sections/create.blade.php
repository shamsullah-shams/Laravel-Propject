@extends('./dashboard')

@section('content')
    <form method="POST" action="{{ route('sections.store') }}" class="Custom_Form">
        @csrf

        <!-- section name -->
        <div>
            <label for="name">Section Name:</label>
            <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- class id -->
        <div class="mt-4">
        <label for="class_id">Class:</label>
            <select name="class_id" id="class_id">
                <option value=""></option>
                @foreach($classes as $class) 
                    <option value="{{$class->id}}">{{$class->name}}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('class_id')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Create') }}
            </x-primary-button>
        </div>
    </form>
    <div class="Back_Button_div">
        <a href="{{ route('sections.index') }}" class="Back_Button">Back</a>
    </div>
@endsection


