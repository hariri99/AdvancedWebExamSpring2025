@extends('layout')

@section('content')
<div class="bg-white p-6 rounded shadow-md">
    <h1 class="text-3xl font-bold mb-4">Students</h1>
    
    <div class="mb-4">
        <input type="text" id="search" class="border p-2 w-full" placeholder="Search for students...">
    </div>

   
    <ul id="students-list" class="list-disc pl-5">
        @foreach($students as $student)
            <li class="border px-4 py-2">{{ $student->name }} (Age: {{ $student->age }})</li>
        @endforeach
    </ul>
</div>


<script src="{{ asset('js/search.js') }}"></script>
@endsection

<div class="@extends('layout')

@section('content')
<div class="bg-white p-6 rounded shadow-md">
    <h1 class="text-3xl font-bold mb-4">Students</h1>
    
    
    <div class="mb-4">
        <input type="text" id="search" class="border p-2 w-full" placeholder="Search for students...">
    </div>

    
    <ul id="students-list" class="list-disc pl-5">
        @foreach($students as $student)
            <li class="border px-4 py-2">{{ $student->name }} (Age: {{ $student->age }})</li>
        @endforeach
    </ul>
</div>


<script src="{{ asset('js/search.js') }}"></script>
@endsection





bbbbbbbbb



    
    <div class="mb-4">
        <form action="{{ route('courses.store') }}" method="POST">
            @csrf
            <div class="mb-2">
                <label for="name" class=>Course Name</label>
                <input type="text" name="name" id="name" class="border p-2 w-full" required>
            </div>
            <div class="mb-2">
                <label for="description" class=>Description</label>
                <textarea name="description" id="description" class="border p-2 w-full" required></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Course</button>
        </form>
    </div>

    
    <div id="courses-list">
        @foreach($courses as $course)
            <div class="border p-4 rounded mb-2">
                <h2 class="text-xl font-bold">{{ $course->name }}</h2>
                <p>{{ $course->description }}</p>
                <form action="{{ route('courses.destroy', $course->id) }}" method="POST" class="mt-2">
                    @csrf
                    @method('deletee')
                    <button type="submit" class=>Delete</button>
                </form>
            </div>
        @endforeach
    </div>
</div>

