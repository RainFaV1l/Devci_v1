import './bootstrap';

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

// document.addEventListener('turbolinks:before-render', () => {
//     Components.unloadAll();
// });
//
// document.addEventListener(
//     'turbolinks:load',
//     () => init.loadAll(),
//     {
//         once: true,
//     },
// );
//
// document.addEventListener('turbolinks:render', () =>
//     Components.loadAll(),
// );
