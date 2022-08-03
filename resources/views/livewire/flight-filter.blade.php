<main>
    <aside>
        <div>
            <ul>
                <li>
                </li>
                <li>
                    <label><input type="checkbox" name="" id=""> Airline</label>
                </li>
                <li>
                    <label><input type="checkbox" name="" id=""> Airline</label>
                </li>
            </ul>
        </div>
    </aside>
    <nav>
        <div>
            <div>
                <form wire:submit.prevent='searching'>
                    <input wire:model='search' type="search" placeholder="Search..">
                    <label>Departure<input wire:model='departing_date' type="date" placeholder="Search.."></label>
                    <label>Arrival<input type="date" placeholder="Search.."></label>
                    <button type="submit">search</button>
                </form>
            </div>
        </div>
    </nav>
    <table>
        <thead>
            <thead>
                <tr>
                    <th>Source</th>
                    <th>Destination</th>
                    <th>Date</th>
                    <th>Departure time</th>
                    <th>Arrival time</th>
                    <th>Airline</th>
                </tr>
            </thead>
        </thead>
        <tbody>
            @foreach ($flights as $flight)
            <tr>
                <td class="py-2 px-6">{{ $flight->flight_detail->flight_source}}</td>
                <td class="py-2 px-6">{{ $flight->flight_detail->flight_destination}}</td>
                <td class="py-2 px-6">{{ $flight->flight_detail->date}}</td>
                <td class="py-2 px-6">{{ $flight->flight_detail->departure_time}}</td>
                <td class="py-2 px-6">{{ $flight->flight_detail->arrival_time}}</td>
                <td class="py-2 px-6">{{ $flight->airline->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <section>
        <div>
            Display Data
        </div>
    </section>
</main>