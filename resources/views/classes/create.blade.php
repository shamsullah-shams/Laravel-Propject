@extends('./dashboard')

@section('content')
<h1 class="header_title">{{__('school.manage_classes')}}</h1>
    <form method="POST" action="{{ route('classes.store') }}" class="Custom_Form">
        @csrf

        <!-- first_name -->
        <div>
            <label for="name">{{__('school.class_name')}}:</label>
            <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>


        <button type="submit" class="update_button">{{__('school.register')}}</button>
    </form>

    <div class="Back_Button_div">
        <a href="{{ route('classes.index') }}" class="Back_Button">{{__('school.back')}}</a>
    </div>
@endsection


