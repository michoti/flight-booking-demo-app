<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('main.css')}}" rel="stylesheet" />
    {{-- @vite('resources/css/app.css') --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <livewire:styles />
</head>

<body>

    <div>
        <livewire:flight-filter :flight_sources='$flight_sources' :flight_destinations='$flight_destinations'
            :available_airlines='$available_airlines' />
    </div>

    <livewire:scripts />
    <script>
        window.addEventListener('openTest', function(e) {
            const container = document.getElementById('content');

            const div = document.createElement('div');
            div.classList.add('clicked-flight');


            div.innerHTML= `
                        <p>${e.detail.flightDeparture} to ${e.detail.flightArrival}</p>
                        <div>Airline: ${e.detail.flightAirline}</div>
                        <div>
                            <p>${e.detail.flightDeparture} - ${e.detail.flightSource}</p>
                        </div> 
                        <div>
                            <p>${e.detail.flightArrival} - ${e.detail.flightDestination}</p>
                        </div>`;

            container.appendChild(div);          
        })
    </script>
</body>

</html>