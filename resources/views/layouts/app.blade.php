<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <livewire:styles />
</head>

<body>

    <div class="font-sans text-gray-900 antialiased">
        {{-- {{ $slot }} --}}
        <livewire:car-filter />
    </div>

    {{-- @foreach ($cars as $car)
    <p>{{$car->location}}</p>

    @endforeach --}}

    <livewire:scripts />
</body>

</html>