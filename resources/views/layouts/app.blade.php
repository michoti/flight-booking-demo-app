<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- @vite('resources/css/app.css') --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <livewire:styles />
</head>

<body>

    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>

    <livewire:scripts />
    <script>
        window.addEventListener('openTest', function(e) {
            const container = document.getElementById('content');

            container.innerHTML= `
                      <div>
                        <p>${e.detail.flightDeparture} to ${e.detail.flightArrival}</p>
                        <div>Airline: ${e.detail.flightAirline}</div>
                        <div>
                            <p>${e.detail.flightDeparture} - ${e.detail.flightSource}</p>
                        </div> 
                        <div>
                            <p>${e.detail.flightArrival} - ${e.detail.flightDestination}</p>
                        </div>                           
                      </div>`;
        })
    </script>
</body>

</html>