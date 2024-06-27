import './bootstrap';

import { createApp } from 'vue';
import welcome from './Vue/component/welcome.vue';

const app = createApp(welcome);
app.mount('#app');
