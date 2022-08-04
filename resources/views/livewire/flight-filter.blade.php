<div>
    <div>
        <label><input type="checkbox" wire:model='airlines' value="1"> Airline</label>
        <label><input type="checkbox" wire:model='airlines' value="2"> Airline 2</label>
    </div>
    <div>
        <label>Departure date <input wire:model='date' type="date"></label>
    </div>
    @foreach ($flights as $flight)
    <div wire:click='displayContent({{ $flight->id }})'>
        <p>{{ $flight->flight_detail->departure_time}} - {{ $flight->flight_detail->arrival_time}}</p>
        <p>{{ $flight->flight_detail->flight_source}} to {{ $flight->flight_detail->flight_destination}}</p>
        <div>
            <i class="fa fa-plane" aria-hidden="true"></i> {{ $flight->airline->name}}
        </div>
    </div>
    @endforeach

    <div id="content">

    </div>
</div>