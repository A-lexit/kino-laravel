/*import '../css/app.css';*/   /*ТЕСТ h1 150px*/

import '../assets/adminb4/plugins/fontawesome-free/css/all.min.css';
import '../assets/adminb4/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css';
import '../assets/adminb4/plugins/datatables-responsive/css/responsive.bootstrap4.min.css';
import '../assets/adminb4/plugins/datatables-buttons/css/buttons.bootstrap4.min.css';

import '../assets/adminb4/dist/css/adminlte.min.css';

/*import '../assets/adminb4/plugins/jquery/jquery.min.js';*/  // можливо потрібно для адмінки (згортання/розгортання сайдбара), але для каруселі не підходиить





/*import '../assets/adminb4/dist/js/demo.js';*/
import '../assets/adminb4/plugins/bootstrap/js/bootstrap.bundle.min.js';

import '../assets/adminb4/plugins/datatables/jquery.dataTables.min.js';
import '../assets/adminb4/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js';

import '../assets/adminb4/plugins/datatables-responsive/js/dataTables.responsive.min.js';

import '../assets/adminb4/plugins/datatables-responsive/js/responsive.bootstrap4.min.js';

import '../assets/adminb4/plugins/datatables-buttons/js/dataTables.buttons.min.js';

import '../assets/adminb4/plugins/datatables-buttons/js/buttons.bootstrap4.min.js';

import '../assets/adminb4/plugins/jszip/jszip.min.js';

import '../assets/adminb4/plugins/pdfmake/pdfmake.min.js';



import '../assets/adminb4/plugins/datatables-buttons/js/buttons.html5.min.js';

import '../assets/adminb4/plugins/datatables-buttons/js/buttons.print.min.js';

import '../assets/adminb4/plugins/datatables-buttons/js/buttons.colVis.min.js';

import '../assets/adminb4/dist/js/adminlte.min.js';
/*import '../assets/adminb4/plugins/pdfmake/vfs_fonts.js';*/











/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
/*import '../assets/admin/css/adminlte.css';*/
import './bootstrap';
import store from './store'
import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */
import FilmComponent from './components/FilmComponent.vue'
import ViewsComponent from "./components/ViewsComponent.vue";
import LikesComponent from "./components/LikesComponent.vue";
import CommentsComponent from './components/CommentsComponent.vue'
import CommComponent from './components/CommComponent.vue'

/*const app = createApp({});*/
const app = createApp({});

/*import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);*/

app.component('film-component', FilmComponent)
app.component('views-component', ViewsComponent)
app.component('likes-component', LikesComponent)
app.component('comments-component', CommentsComponent)
app.component('comm-component', CommComponent)



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.use(store)

app.mount('#app');
