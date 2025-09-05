/* Template Name: Techwind - Laravel 12 Multipurpose Landing & Admin Dashboard Template
   Author: Shreethemes
   Email: support@shreethemes.in
   Website: https://shreethemes.in
   Version: 3.0.0
   Created: May 2025
   File Description: For JS Vector map
*/

/* global jsVectorMap */

document.addEventListener("DOMContentLoaded", function () {
    try {
        const mapContainer = document.querySelector('#map');

        if (!mapContainer) return;

        // eslint-disable-next-line no-unused-vars
        const map = new jsVectorMap({
            map: 'world',
            selector: '#map',
            zoomOnScroll: false,
            zoomButtons: false,

            selectedMarkers: [0, 1],
            markersSelectable: true,

            markers: [
                { name: "Palestine", coords: [31.9474, 35.2272] },
                { name: "Russia", coords: [61.524, 105.3188] },
                { name: "Canada", coords: [56.1304, -106.3468] },
                { name: "Greenland", coords: [71.7069, -42.6043] },
            ],

            markerStyle: {
                initial: {
                    fill: "#4f46e5"
                },
                selected: {
                    fill: "#059669"
                }
            },

            labels: {
                markers: {
                    render: marker => marker.name
                }
            }
        });

    } catch (error) {
        console.error("Error initializing jsVectorMap:", error);
    }
});