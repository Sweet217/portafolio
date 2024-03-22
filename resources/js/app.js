import './bootstrap';
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'

//import PhotoComponent from "../js/Components/PhotoComponent.vue"


createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/Gabriel/${name}.vue`]
    },
    // setup({ el, App, props, plugin }) {
    //     createApp({ render: () => h(App, props) })
    //         .use(plugin)
    //         .component('photo-component', PhotoComponent)
    //         .mount(el)
    // },
})