<x-app-layout>
    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight"> -->
    
        <div class="customNavigation"> 
            <a href="{{ route('users.index') }}">{{__('school.users')}}</a>
            <a href="{{ route('teachers.index') }}">{{__('school.teachers')}}</a>
            <a href="{{ route('fathers.index') }}">{{__('school.parents')}} </a>
            <a href="{{ route('students.index') }}" > {{__('school.students')}}</a>
            <a href="{{ route('classes.index') }}">{{__('school.classes')}} </a>
            <a href="{{ route('sections.index') }}">{{__('school.sections')}} </a>
            <a href="{{ route('subjects.index') }}">{{__('school.subjects')}} </a>
            <a href="{{ route('attendance.index') }}">{{__('school.attendance')}} </a>
            <a href="trash">{{__('school.trash')}} </a>
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
