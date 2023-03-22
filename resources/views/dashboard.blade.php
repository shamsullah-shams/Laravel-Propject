<x-app-layout>
    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight"> -->
    
        <div class="customNavigation"> 
            <a href="{{ route('users.index') }}">Users</a>
            <a href="{{ route('teachers.index') }}">Teachers</a>
            <a href="{{ route('fathers.index') }}">Parents </a>
            <a href="{{ route('students.index') }}" > Students</a>
            <a href="{{ route('classes.index') }}">Classes </a>
            <a href="{{ route('sections.index') }}">Sections </a>
            <a href="{{ route('subjects.index') }}">Subjects </a>
            <a href="{{ route('attendance.index') }}">Attendance </a>
        </div>
        
        
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @yield('content')         
            </div>
        </div>
    </div>
</x-app-layout>
