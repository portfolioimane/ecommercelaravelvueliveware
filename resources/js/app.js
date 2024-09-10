import { createApp } from 'vue'; // Import createApp from Vue 3
import ProductManager from './components/ProductManager.vue'; // Import your Vue component
import './bootstrap.js'; // Import bootstrap.js (make sure this file exists)

const app = createApp(ProductManager); // Create a Vue app instance with your component

app.mount('#appdashboard'); // Mount the Vue app to the DOM element with id 'app'

