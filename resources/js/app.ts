import Alpine from 'alpinejs';
import * as components from './components'
import { ComponentInfo } from './types/interfaces';

document.addEventListener('alpine:init', () => {
    Object.values(components).forEach((info : ComponentInfo) => {
        const { key, component } = info;
        Alpine.data(key, component);
    })
});

Alpine.start();
