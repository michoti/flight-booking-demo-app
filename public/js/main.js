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