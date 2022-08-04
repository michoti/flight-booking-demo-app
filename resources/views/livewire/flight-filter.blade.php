<div>
    <div class="side-bar">
        <div class="airline-checkbox">
            <div>
                <h5>Filter by</h5>
            </div>
            <label><input type="checkbox" wire:model='airlines' value="1"> Airline</label>
            <label><input type="checkbox" wire:model='airlines' value="2"> Airline 2</label>
        </div>
    </div>
    <div class="main-content">
        <div class="showcase-area">
            <div class="search-inputs">
                <select>
                    <option>Choose source</option>
                    <option value="">Nairobi</option>
                    <option value="">Nairobi</option>
                    <option value="">Nairobi</option>
                    <option value="">Nairobi</option>
                </select>
                <label>Departing date <input wire:model='departing_date' type="date"></label>
                <label>Returning date <input wire:model='returning_date' type="date"></label>
            </div>
            @foreach ($flights as $flight)
            <div class="flight-box" wire:click='displayContent({{ $flight->id }})'>
                <p class="flight-time-text">{{ $flight->flight_detail->departure_time}} - {{
                    $flight->flight_detail->arrival_time}}</p>
                <p>{{ $flight->flight_detail->flight_source}} <span>to</span> {{
                    $flight->flight_detail->flight_destination}}</p>
                <div>
                    <i class="fa fa-plane" aria-hidden="true"></i> {{ $flight->airline->name}}
                </div>
            </div>
            @endforeach
        </div>
        <div class="right-side-bar">
            <div id="content">

            </div>
        </div>
    </div>
</div>