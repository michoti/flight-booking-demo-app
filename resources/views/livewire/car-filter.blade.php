<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <livewire:styles />
</head>

<body>
    <div>
        <div>
            <div>
                <input wire:model.debounce.500ms='search' type="search">
            </div>
        </div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>name</th>
                        <th>location</th>
                        <th>bodyType</th>
                        <th>year</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($cars) > 0)
                    @foreach ($cars as $car)
                    <tr>
                        <td>{{ $car->name }}</td>
                        <td>{{ $car->location }}</td>
                        <td>{{ $car->bodytype }}</td>
                        <td>{{ $car->year }}</td>
                    </tr>
                    @endforeach

                    @else
                    <tr>
                        <td>No data available</td>
                    </tr>

                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <livewire:scripts />
</body>

</html>