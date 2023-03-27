@extends('./dashboard')

@section('content')
    <form method="POST" action="{{ route('attendance.store') }}" class="Custom_Form">
        @csrf

        <!-- student_id -->
        <div>
            <label for="attendance_status">Attendance status:</label>
            <input id="attendance_status" class="block mt-1 w-full" type="checkbox" name="attendance_status" :value="old('attendance_status')"  autofocus />
            <x-input-error :messages="$errors->get('attendance_status')" class="mt-2" />
        </div>

        <!-- student id -->
        <div class="mt-4">
        <label for="student_id">student:</label>
            <select name="student_id" id="student_id">
                <option value=""></option>
                @foreach($students as $student) 
                    <option value="{{$student->id}}">{{$student->first_name . student->last_name}}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('student_id')" class="mt-2" />
        </div>

        <button type="submit" class="update_button">{{__('school.register')}}</button>
    </form>

    <div class="Back_Button_div">
        <a href="{{ route('attendance.index') }}" class="Back_Button">{{__('school.phone')}}</a>
    </div>
@endsection


