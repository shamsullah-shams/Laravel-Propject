@extends('./dashboard')

@section('content')
    <form method="POST" action="{{ route('classes.store') }}" class="Custom_Form">
        @csrf

        <!-- first_name -->
        <div>
            <label for="name">Class Name:</label>
            <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Create') }}
            </x-primary-button>
        </div>
    </form>

    <div class="Back_Button_div">
        <a href="{{ route('classes.index') }}" class="Back_Button">Back</a>
    </div>
@endsection


