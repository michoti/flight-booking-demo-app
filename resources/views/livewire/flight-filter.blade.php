<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--
    <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <livewire:styles />
</head>

<body>

    <div class="font-sans text-gray-900 antialiased">

        <div>

            <div class="flex items-start mb-6">
                <div>
                    <div><input type="search" wire:model.debounce.300ms='search'></div>
                    <input type="date" wire:model='departing_date'>
                </div>
            </div>
        </div>


        <div class="overflow-x-auto relative">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">source</th>
                        <th scope="col" class="py-3 px-6">destination</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($flightListing as $flight)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="py-4 px-6">{{ $flight->flight_source}}</td>
                        <td class="py-4 px-6">{{ $flight->flight_destination}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <livewire:scripts />
</body>

</html>