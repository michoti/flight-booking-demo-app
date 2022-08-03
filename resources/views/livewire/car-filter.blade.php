<div>
    <div>
        <aside>
            sidebar
        </aside>
        <div>
            {{-- <input wire:model.debounce.500ms='search' type="search">
            <div>
                <select name="" id="" disabled="disabled">
                    <option value="">Choose location</option>
                    @foreach ($locations as $location)
                    <option value="{{ $location->id }}">{{$location->location}}</option>
                    @endforeach
                </select>
            </div> --}}
            <form wire:submit.prevent='searching'>
                <input wire:model='name' type="search" placeholder="search...">
                <input wire:model='location' type="search">
                <label>From: <input wire:model='from' type="date"></label>
                <label>To: <input wire:model='to' type="date"></label>
                <button type="submit">Search</button>
            </form>
        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>name</th>
                <th>location</th>
                <th>bodyType</th>
                <th>release date</th>
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
                <td>{{ $car->release_date }}</td>
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