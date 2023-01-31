import './bootstrap';
import Index from "./components/Index.vue";
import { createApp } from 'vue';
import router from './router'

createApp(Index)
    .use(router)
    .mount('#app')
