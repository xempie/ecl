/* Template Name: Techwind - Laravel 12 Multipurpose Landing & Admin Dashboard Template
   Author: Shreethemes
   Email: support@shreethemes.in
   Website: https://shreethemes.in
   Version: 3.0.0
   Created: May 2025
   File Description: Common JS file of the template(plugins.init.js)
*/


/*********************************/
/*         INDEX                 */
/*================================
 *     01.  Tiny Slider          *
 *     02.  Countdown Js         * (For Comingsoon pages)
 *     03.  Maintenance js       * (For Maintenance page)
 *     04.  Data Counter         *
 *     05.  Gallery filter js    * (For Portfolio pages)
 *     06.  Tobii lightbox       * (For Portfolio pages)
 *     08.  Back Button          *
 *     09.  Components           *
 *          1. Navtabs           *
 *          2. Accordions        *
 *     10. Upload Profile        *
 *     11. Custom Dropdown       * (For Dropdown)
 ================================*/
         
//=========================================//
/*            01) Tiny slider              */
//=========================================//

/* global tns */

document.addEventListener("DOMContentLoaded", function () {
    // Initialize .tiny-single-item slider
    if (document.querySelector('.tiny-single-item')) {
        tns({
            container: '.tiny-single-item',
            items: 1,
            controls: false,
            mouseDrag: true,
            loop: true,
            rewind: true,
            autoplay: true,
            autoplayButtonOutput: false,
            autoplayTimeout: 3000,
            navPosition: "bottom",
            speed: 400,
            gutter: 16,
        });
    }

    // Initialize .tiny-one-item slider
    if (document.querySelector('.tiny-one-item')) {
        tns({
            container: '.tiny-one-item',
            items: 1,
            controls: true,
            mouseDrag: true,
            loop: true,
            rewind: true,
            autoplay: true,
            autoplayButtonOutput: false,
            autoplayTimeout: 3000,
            navPosition: "bottom",
            controlsText: [
                '<i class="mdi mdi-chevron-left"></i>',
                '<i class="mdi mdi-chevron-right"></i>'
            ],
            nav: false,
            speed: 400,
            gutter: 0,
        });
    }
});

//=========================================//
/*            02) Countdown                */
//=========================================//
try {
    if (document.getElementById("days")) {
        // Target date/time for countdown
        const eventCountDown = new Date("December 25, 2026 16:37:52").getTime();

        // Run every second
        const myfunc = setInterval(() => {
            const now = new Date().getTime();
            const timeleft = eventCountDown - now;

            if (timeleft < 0) {
                clearInterval(myfunc);
                // Clear countdown displays
                ['days', 'hours', 'mins', 'secs'].forEach(id => {
                    const el = document.getElementById(id);
                    if (el) el.innerHTML = "";
                });
                // Show end message
                const endEl = document.getElementById("end");
                if (endEl) endEl.innerHTML = "00:00:00:00";
                return;
            }

            // Calculate time parts
            const days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeleft % (1000 * 60)) / 1000);

            // Output results
            document.getElementById("days").innerHTML = `${days}<p class='count-head'>Days</p>`;
            document.getElementById("hours").innerHTML = `${hours}<p class='count-head'>Hours</p>`;
            document.getElementById("mins").innerHTML = `${minutes}<p class='count-head'>Mins</p>`;
            document.getElementById("secs").innerHTML = `${seconds}<p class='count-head'>Secs</p>`;
        }, 1000);
    }
} catch (err) {
    console.error("Countdown error:", err);
}


//=========================================//
/*/*            03) Maintenance js         */
//=========================================//

try {
    const maintenanceEl = document.getElementById("maintenance");
    if (maintenanceEl) {
        let seconds = 3599;

        function secondPassed() {
            const minutes = Math.floor(seconds / 60);
            let remainingSeconds = seconds % 60;
            if (remainingSeconds < 10) {
                remainingSeconds = "0" + remainingSeconds;
            }
            maintenanceEl.innerHTML = minutes + ":" + remainingSeconds;

            if (seconds === 0) {
                clearInterval(countdownTimer);
                maintenanceEl.innerHTML = "Buzz Buzz";
            } else {
                seconds--;
            }
        }

        // Run immediately to show initial time without waiting 1 sec
        secondPassed();

        const countdownTimer = setInterval(secondPassed, 1000);
    }
} catch (err) {
    console.error("Maintenance countdown error:", err);
}

//=========================================//
/*/*            04) Data Counter           */
//=========================================//

try {
    const counters = document.querySelectorAll('.counter-value');
    const duration = 2500; // total animation duration in ms

    counters.forEach(counter => {
        const target = +counter.getAttribute('data-target');
        let start = null;

        function updateCount(timestamp) {
            if (!start) start = timestamp;
            const progress = timestamp - start;
            // Calculate how much should be counted based on progress
            const current = Math.min(Math.floor((progress / duration) * target), target);
            counter.innerText = current;

            if (current < target) {
                requestAnimationFrame(updateCount);
            } else {
                counter.innerText = target; // Ensure exact target at the end
            }
        }

        requestAnimationFrame(updateCount);
    });
} catch (err) {
    console.error("Counter animation error:", err);
}

//=========================================//
/*/*            05) Gallery filter js      */
//=========================================//

try {
    const Shuffle = window.Shuffle;

    class Demo {
        constructor(element) {
            if (!element) return;

            this.element = element;
            this.shuffle = new Shuffle(element, {
                itemSelector: '.picture-item',
                sizer: element.querySelector('.my-sizer-element'),
            });

            this._activeFilters = [];
            this.addShuffleEventListeners();
            this.addFilterButtons();
        }

        addShuffleEventListeners() {
            this.shuffle.on(Shuffle.EventType.LAYOUT, (data) => {
                console.log('Layout event:', data);
            });
            this.shuffle.on(Shuffle.EventType.REMOVED, (data) => {
                console.log('Removed event:', data);
            });
        }

        addFilterButtons() {
            const options = document.querySelector('.filter-options');
            if (!options) return;

            const filterButtons = Array.from(options.children);
            filterButtons.forEach(button => {
                button.addEventListener('click', this._handleFilterClick.bind(this), false);
            });
        }

        _handleFilterClick(evt) {
            const btn = evt.currentTarget;
            const isActive = btn.classList.contains('active');
            const btnGroup = btn.getAttribute('data-group');

            this._removeActiveClassFromChildren(btn.parentNode);

            if (isActive) {
                btn.classList.remove('active');
                this.shuffle.filter(Shuffle.ALL_ITEMS);
            } else {
                btn.classList.add('active');
                this.shuffle.filter(btnGroup);
            }
        }

        _removeActiveClassFromChildren(parent) {
            Array.from(parent.children).forEach(child => child.classList.remove('active'));
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        const gridElement = document.getElementById('grid');
        if (gridElement) {
            window.demo = new Demo(gridElement);
        }
    });
} catch (err) {
    console.error("Shuffle demo error:", err);
}


//=========================================//
/*/*            06) Tobii lightbox         */
//=========================================//

/* global Tobii */

try {
    if (typeof Tobii !== 'undefined') {
        new Tobii();
    }
} catch (err) {
    console.error("Failed to initialize Tobii:", err);
}


//=========================================//
/*/*            08) Back Button            */
//=========================================//
const backBtn = document.getElementsByClassName("back-button")[0];

backBtn?.addEventListener("click", (e) => {
  if (document.referrer !== "") {
    e.preventDefault();
    window.location.href = document.referrer;
  }
});

  

//=========================================//
/*            09) Components               */
//=========================================//

//============= 01) Navtabs ===============//
try {
    const Default = {
        defaultTabId: null,
        activeClasses: 'text-white bg-indigo-600',
        inactiveClasses: 'hover:text-indigo-600 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-slate-800',
        onShow: () => { }
    }

    class Tabs {
        constructor(items = [], options = {}) {
            this._items = items
            this._activeTab = options ? this.getTab(options.defaultTabId) : null
            this._options = { ...Default, ...options }
            this._init()
        }

        _init() {
            if (this._items.length) {
                // set the first tab as active if not set explicitly
                if (!this._activeTab) {
                    this._setActiveTab(this._items[0])
                }

                // force show the first default tab
                this.show(this._activeTab.id, true)

                // show tab content based on click
                this._items.forEach(tab => {
                    tab.triggerEl.addEventListener('click', () => {
                        this.show(tab.id)
                    })
                })
            }
        }

        getActiveTab() {
            return this._activeTab
        }

        _setActiveTab(tab) {
            this._activeTab = tab
        }

        getTab(id) {
            return this._items.find(t => t.id === id)
        }

        show(id, forceShow = false) {
            const tab = this.getTab(id)

            if (!tab) {
                console.warn(`No tab found with id: ${id}`)
                return
            }

            // don't do anything if already active
            if (tab === this._activeTab && !forceShow) {
                return
            }

            // hide other tabs
            this._items.forEach(t => {
                if (t !== tab) {
                    t.triggerEl.classList.remove(...this._options.activeClasses.split(" "));
                    t.triggerEl.classList.add(...this._options.inactiveClasses.split(" "));
                    if (t.targetEl) t.targetEl.classList.add('hidden')
                    t.triggerEl.setAttribute('aria-selected', false)
                }
            })

            // show active tab
            tab.triggerEl.classList.add(...this._options.activeClasses.split(" "));
            tab.triggerEl.classList.remove(...this._options.inactiveClasses.split(" "));
            tab.triggerEl.setAttribute('aria-selected', true)
            if (tab.targetEl) tab.targetEl.classList.remove('hidden')

            this._setActiveTab(tab)

            // callback function
            this._options.onShow(this, tab)
        }
    }

    window.Tabs = Tabs;

    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('[data-tabs-toggle]').forEach(triggerEl => {

            const tabElements = []
            let defaultTabId = null
            triggerEl.querySelectorAll('[role="tab"]').forEach(el => {
                const isActive = el.getAttribute('aria-selected') === 'true'
                const tab = {
                    id: el.getAttribute('data-tabs-target'),
                    triggerEl: el,
                    targetEl: document.querySelector(el.getAttribute('data-tabs-target'))
                }
                tabElements.push(tab)

                if (isActive) {
                    defaultTabId = tab.id
                }
            })
            new Tabs(tabElements, {
                defaultTabId: defaultTabId
            })
        })
    })
} catch (error) {
    console.error(error);
}

//********2) Accordions********/
try {
    const Default = {
        alwaysOpen: false,
        activeClasses: 'bg-gray-50 dark:bg-slate-800 text-indigo-600',
        inactiveClasses: 'text-slate-900 dark:text-white',
        onOpen: () => { },
        onClose: () => { },
        onToggle: () => { }
    }

    class Accordion {
        constructor(items = [], options = {}) {
            this._items = items
            this._options = { ...Default, ...options }
            this._init()
        }

        _init() {
            if (this._items.length) {
                this._items.forEach(item => {
                    if (item.active) {
                        this.open(item.id)
                    }
                    item.triggerEl.addEventListener('click', () => {
                        this.toggle(item.id)
                    })
                })
            }
        }

        getItem(id) {
            return this._items.find(item => item.id === id)
        }

        open(id) {
            const item = this.getItem(id)
            if (!item) return

            if (!this._options.alwaysOpen) {
                this._items.forEach(i => {
                    if (i !== item) {
                        i.triggerEl.classList.remove(...this._options.activeClasses.split(" "))
                        i.triggerEl.classList.add(...this._options.inactiveClasses.split(" "))
                        if (i.targetEl) i.targetEl.classList.add('hidden')
                        i.triggerEl.setAttribute('aria-expanded', false)
                        i.active = false

                        if (i.iconEl) {
                            i.iconEl.classList.remove('rotate-180')
                        }
                    }
                })
            }

            item.triggerEl.classList.add(...this._options.activeClasses.split(" "))
            item.triggerEl.classList.remove(...this._options.inactiveClasses.split(" "))
            item.triggerEl.setAttribute('aria-expanded', true)
            if (item.targetEl) item.targetEl.classList.remove('hidden')
            item.active = true

            if (item.iconEl) {
                item.iconEl.classList.add('rotate-180')
            }

            this._options.onOpen(this, item)
        }

        toggle(id) {
            const item = this.getItem(id)
            if (!item) return

            if (item.active) {
                this.close(id)
            } else {
                this.open(id)
            }

            this._options.onToggle(this, item)
        }

        close(id) {
            const item = this.getItem(id)
            if (!item) return

            item.triggerEl.classList.remove(...this._options.activeClasses.split(" "))
            item.triggerEl.classList.add(...this._options.inactiveClasses.split(" "))
            if (item.targetEl) item.targetEl.classList.add('hidden')
            item.triggerEl.setAttribute('aria-expanded', false)
            item.active = false

            if (item.iconEl) {
                item.iconEl.classList.remove('rotate-180')
            }

            this._options.onClose(this, item)
        }
    }

    window.Accordion = Accordion;

    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('[data-accordion]').forEach(accordionEl => {
            const alwaysOpen = accordionEl.getAttribute('data-accordion')
            const activeClasses = accordionEl.getAttribute('data-active-classes')
            const inactiveClasses = accordionEl.getAttribute('data-inactive-classes')

            const items = []
            accordionEl.querySelectorAll('[data-accordion-target]').forEach(el => {
                const item = {
                    id: el.getAttribute('data-accordion-target'),
                    triggerEl: el,
                    targetEl: document.querySelector(el.getAttribute('data-accordion-target')),
                    iconEl: el.querySelector('[data-accordion-icon]'),
                    active: el.getAttribute('aria-expanded') === 'true'
                }
                items.push(item)
            })

            new Accordion(items, {
                alwaysOpen: alwaysOpen === 'open',
                activeClasses: activeClasses || Default.activeClasses,
                inactiveClasses: inactiveClasses || Default.inactiveClasses
            })
        })
    })
} catch (error) {
    console.error(error)
}



//=========================================//
/*            10) Upload Profile           */
//=========================================//
// Declare it in global scope so it can be used in inline HTML
window.loadFile = function (event) {
    try {
        const image = document.getElementById(event.target.name);
        if (image && event.target.files.length > 0) {
            image.src = URL.createObjectURL(event.target.files[0]);
        }
    } catch (error) {
        console.error("Error loading image preview:", error);
    }
};

//=========================================//
/*            11) Custom Dropdown          */
//=========================================//

document.querySelectorAll(".dropdown").forEach(function (dropdown) {
    const toggle = dropdown.querySelector(".dropdown-toggle");
    const menu = dropdown.querySelector(".dropdown-menu");

    toggle.addEventListener("click", function (event) {
        event.stopPropagation(); // Prevent global click from firing

        const isOpen = menu.classList.contains("block");

        dismissDropdownMenu(); // Close all open dropdowns first

        if (!isOpen) {
            toggle.classList.add("block");
            menu.classList.remove("hidden");
            menu.classList.add("block");
        }
    });
});

// Function to close all dropdowns
function dismissDropdownMenu() {
    document.querySelectorAll(".dropdown-menu").forEach(function (menu) {
        menu.classList.remove("block");
        menu.classList.add("hidden");
    });
    document.querySelectorAll(".dropdown-toggle").forEach(function (toggle) {
        toggle.classList.remove("block");
    });
}

// Close dropdowns when clicking outside
window.addEventListener("click", function () {
    dismissDropdownMenu();
});