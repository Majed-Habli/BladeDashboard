<div>
    <div id='map'></div>

    <script src='https://unpkg.com/leaflet@1.8.0/dist/leaflet.js' crossorigin=''></script>
    <script>
        let map, markers = [];
        const marks = [
            {
                position: {
                    lat: 28.625485,
                    lng: 79.821091
                },
                draggable: true
            },
            {
                position: {
                    lat: 28.625293,
                    lng: 79.817926
                },
                draggable: false
            },
            {
                position: {
                    lat: 28.625182,
                    lng: 79.81464
                },
                draggable: true
            }
        ];
        function initMap() {
            map = L.map('map', {
                center: {
                    lat: 28.626137,
                    lng: 79.821603,
                },
                zoom: 15
            });

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap'
            }).addTo(map);

            map.on('click', mapClicked);
            initMarkers(marks);
        }
        initMap();

        function initMarkers(marks) {
            const initialMarkers = marks;

            for (let index = 0; index < initialMarkers.length; index++) {

                const data = initialMarkers[index];
                const marker = generateMarker(data, index);
                marker.addTo(map).bindPopup(`<b>${data.position.lat},  ${data.position.lng}</b>`);
                map.panTo(data.position);
                markers.push(marker)
            }
        }

        function generateMarker(data, index) {
            return L.marker(data.position, {
                    draggable: data.draggable
                })
                .on('click', (event) => markerClicked(event, index))
                .on('dragend', (event) => markerDragEnd(event, index));
        }

        function mapClicked($event) {
            console.log(map);
            console.log($event.latlng.lat, $event.latlng.lng);
        }

        function markerClicked($event, index) {
            console.log(map);
            console.log($event.latlng.lat, $event.latlng.lng);
        }

        function markerDragEnd($event, index) {
            console.log(map);
            console.log($event.target.getLatLng());
        }
    </script>

</div>