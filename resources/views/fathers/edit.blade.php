@extends('./dashboard')

@section('content')
    <h1  class="header_title">Edit {{ $father->first_name . ' '. $father->last_name }}</h1>
    <form action="{{ route('fathers.update', $father->id) }}" method="POST"  class="Custom_Form">
        @csrf
        @method('PUT')


        <!-- first_name -->
        <div>
            <label for="first_name">First Name:</label>
            <input class="edit_inputs" type="text" id="first_name" name="first_name" value="{{ old('first_name', $father->first_name) }}">
            @error('first_name')
                <div>{{ $message }}</div>
            @enderror
        </div>
        
       <!-- Email Address -->
       <div class="mt-4">
        <label for="first_name">Last Name:</label>
            <input class="edit_inputs" type="text" id="last_name" name="last_name" value="{{ old('last_name', $father->last_name) }}">
            @error('last_name')
                <div>{{ $message }}</div>
            @enderror
        </div>
        
        
        <!-- Password -->
        <div class="mt-4">
            <label for="first_name">Phone Number:</label>
            <input class="edit_inputs" type="text" id="phone" name="phone" value="{{ old('phone', $father->phone) }}">
            @error('phone')
                <div>{{ $message }}</div>
            @enderror
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
        <button type="submit" class="update_button">Update</button>
    </form>
    <div class="Back_Button_div">
        <a href="{{ route('fathers.show', $father->id) }}" class="Back_Button">Cancel</a>
    </div>
@endsection

