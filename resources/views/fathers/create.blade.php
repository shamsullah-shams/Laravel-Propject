@extends('./dashboard')

@section('content')
    <form method="POST" action="{{ route('fathers.store') }}" class="Custom_Form">
        @csrf

        <!-- first_name -->
        <div>
            <label for="first_name">First Name:</label>
            <input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')"  autofocus autocomplete="first_name" />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>

        <!-- last_name -->
        <div>
            <label for="last_name">last Name :</label>
            <input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')"  autofocus autocomplete="last_name" />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>

        <!-- phone -->
        <div>
            <label for="phone">Phone :</label>
            <input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')"  autofocus autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- province  -->
        <div class="mt-4">
        <label for="province">Province:</label>
            <select name="province" id="province">
                <option value=""></option>
                <option value="Badakhshan">Badakhshan</option>
                <option value="Badghis">Badghis</option>
                <option value="Baghlan">Baghlan</option>
                <option value="Balkh">Balkh</option>
                <option value="Bamyan">Bamyan</option>
                <option value="Daykundi">Daykundi</option>
                <option value="Farah">Farah</option>
                <option value="Faryab">Faryab</option>
                <option value="Ghazni">Ghazni</option>
                <option value="Ghor">Ghor</option>
                <option value="Helmand">Helmand</option>
                <option value="Herat">Herat</option>
                <option value="Jowzjan">Jowzjan</option>
                <option value="Kabul">Kabul</option>
                <option value="Kandahar">Kandahar</option>
                <option value="Kapisa">Kapisa</option>
                <option value="Khost">Khost</option>
                <option value="Kunar">Kunar</option>
                <option value="Kunduz">Kunduz</option>
                <option value="Laghman">Laghman</option>
                <option value="Logar">Logar</option>
                <option value="Nangarhar">Nangarhar</option>
                <option value="Nimruz">Nimruz</option>
                <option value="Nuristan">Nuristan</option>
                <option value="Paktia">Paktia</option>
                <option value="Paktika">Paktika</option>
                <option value="Panjshir">Panjshir</option>
                <option value="Parwan">Parwan</option>
                <option value="Samangan">Samangan</option>
                <option value="Sar-e Pol">Sar-e Pol</option>
                <option value="Takhar">Takhar</option>
                <option value="Urozgan">Urozgan</option>
                <option value="Zabul">Zabul</option>
            </select>
            <x-input-error :messages="$errors->get('province')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    <div class="Back_Button_div">
        <a href="{{ route('fathers.index') }}" class="Back_Button">Back</a>
    </div>
@endsection


