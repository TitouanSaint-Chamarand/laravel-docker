import './bootstrap';

import { createApp } from 'vue';
import welcome from './Vue/component/welcome.vue';
import 'doodle.css/doodle.css';

const app = createApp(welcome);
app.mount('#app');
