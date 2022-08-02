{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <livewire:styles />
</head>

<body> --}}
    <div>
        <div>
            <div>
                <input wire:model.debounce.500ms='search' type="search">
                <select name="" id="" disabled="disabled">
                    <option value="0"></option>
                    @foreach ($locations as $location)
                    <option value="0">{{$location->location}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        {{-- <div>
            @foreach ($collection as $item)
            <label for="">
                <input type="checkbox" name="" id="">
            </label>
            @endforeach
        </div> --}}

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
                <tr wire:key="{{ $car->id }}">
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

    {{--
    <livewire:scripts />
</body>

</html> --}}