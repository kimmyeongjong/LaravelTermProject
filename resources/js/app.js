
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window._ = require('lodash');
window.$ = window.jQuery = require('jquery');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('lesson', require('./components/LessonNotification.vue'));

const app = new Vue({
    el: '#app',
    data:{
        lessons: '',
    },
    created(){
        if (window.Laravel.userId) {
            axios.post('/notification/lesson/notification').then(response => {
                this.lessons = response.data;
                console.log(response.data)
            });

            Echo.private('App.User' + window.Laravel.userId).notification((response)=>{
                data = {"data":response, "created_at":response.lesson.created_at};
                this.lessons.push(data);
                console.log(response);
            });
        }
    }
});


// // Bulma NavBar Burger Script
// document.addEventListener('DOMContentLoaded', function () {
//     // Get all "navbar-burger" elements
//     const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
//
//     // Check if there are any navbar burgers
//     if ($navbarBurgers.length > 0) {
//
//         // Add a click event on each of them
//         $navbarBurgers.forEach(function ($el) {
//             $el.addEventListener('click', function () {
//
//                 // Get the target from the "data-target" attribute
//                 let target = $el.dataset.target;
//                 let $target = document.getElementById(target);
//
//                 // Toggle the class on both the "navbar-burger" and the "navbar-menu"
//                 $el.classList.toggle('is-active');
//                 $target.classList.toggle('is-active');
//
//             });
//         });
//     }
//
// });
//
//
//
// require('./bulma-extensions');
