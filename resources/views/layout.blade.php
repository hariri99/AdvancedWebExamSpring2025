<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

   
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="text-xl font-bold">test</div>
                <div>
                    <a href="{{ url('/') }}" class="text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="{{ url('/students') }}" class="text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Students</a>
                    <a href="{{ url('/courses') }}" class="text-gray-700 px-3 py-2 rounded-md text-sm font-medium">Courses</a>
                </div>
            </div>
        </div>
    </nav>

    
    <div class="container mx-auto px-4 py-6">
        @yield('content')
    </div>

</body>
</html>
