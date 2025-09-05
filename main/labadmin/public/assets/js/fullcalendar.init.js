/* Template Name: Techwind - Laravel 12 Multipurpose Landing & Admin Dashboard Template
   Author: Shreethemes
   Email: support@shreethemes.in
   Website: https://shreethemes.in
   Version: 3.0.0
   Created: May 2025
   File Description: fullcalender.init.js for Calender
*/

/* global FullCalendar */

document.addEventListener('DOMContentLoaded', function () {
    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendar.Draggable;

    var containerEl = document.getElementById('external-events');
    var calendarEl = document.getElementById('calendar');
    var checkbox = document.getElementById('drop-remove');

    if (!calendarEl) return;

    // initialize the external events
    // -----------------------------------------------------------------

    if (containerEl) {
        new Draggable(containerEl, {
            itemSelector: '.fc-event',
            eventData: function (eventEl) {
                return {
                    title: eventEl.innerText.trim()
                };
            }
        });
    }

    // initialize the calendar
    // -----------------------------------------------------------------

    var calendar = new Calendar(calendarEl, {
        headerToolbar: {
            left: 'prev,next today addEventButton',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay',
        },

        businessHours: [
            {
                daysOfWeek: [1, 2, 3, 4, 5], // Monday - Friday
                startTime: '09:00',
                endTime: '18:00'
            }
        ],

        // Define the custom constraint "availableForMeeting"
        constraints: [
            {
                id: 'availableForMeeting',
                daysOfWeek: [1, 2, 3, 4], // Mon - Thu
                startTime: '10:00',
                endTime: '16:00'
            }
        ],

        editable: true,
        droppable: true,

        events: [
            {
                title: 'Business Lunch',
                start: '2025-06-03T13:00:00',
                constraint: 'businessHours'
            },
            {
                title: 'Meeting',
                start: '2025-06-13T11:00:00',
                constraint: 'availableForMeeting',
                color: '#53c797'
            },
            {
                title: 'Conference',
                start: '2025-06-18',
                end: '2025-06-20'
            },
            {
                title: 'Party',
                start: '2025-06-29T20:00:00'
            }
        ],

        customButtons: {
            addEventButton: {
                text: 'Add Event',
                click: function () {
                    var dateStr = prompt('Enter a date in YYYY-MM-DD format');
                    if (!dateStr) return;

                    // Validate date format
                    var datePattern = /^\d{4}-\d{2}-\d{2}$/;
                    if (!datePattern.test(dateStr)) {
                        alert('Invalid date format. Please use YYYY-MM-DD.');
                        return;
                    }

                    var date = new Date(dateStr + 'T00:00:00');
                    if (isNaN(date.valueOf())) {
                        alert('Invalid date.');
                        return;
                    }

                    var title = prompt('Enter event title');
                    if (!title) {
                        alert('Event title is required.');
                        return;
                    }

                    calendar.addEvent({
                        title: title,
                        start: date,
                        allDay: true
                    });

                    alert('Event added. Remember to update your database accordingly.');
                }
            }
        },

        drop: function (info) {
            console.log('Dropped event:', info.draggedEl.innerText, 'on', info.dateStr);

            if (checkbox.checked) {
                info.draggedEl.parentNode.removeChild(info.draggedEl);
            }
        }
    });

    calendar.render();
});