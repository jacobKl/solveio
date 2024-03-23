import Alpine from 'alpinejs';
import Components from './components'
import { Component } from './types/interfaces';


document.addEventListener('alpine:init', () => {
    Object.values(Components).forEach((component) => {
        const instance = new component();
        Alpine.data(instance.getKey(), instance.getComponent());
    })
});

Alpine.start();
