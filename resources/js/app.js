// import './bootstrap';

// import Alpine from 'alpinejs';
// import focus from '@alpinejs/focus';

// window.Alpine = Alpine;
//
// Alpine.plugin(focus);
//
// Alpine.start();

import * as Turbo from "@hotwired/turbo"
Turbo.start();

document.addEventListener("livewire:load", function(event) {
    Livewire.onPageExpired((response, message) => {})
});
