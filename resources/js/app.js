require('./bootstrap');
import flatpickr from 'flatpickr';

/* import * as FilePond from 'filepond';
import 'filepond/dist/filepond.min.css';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css';
FilePond.registerPlugin(FilePondPluginImagePreview);
window.FilePond = FilePond; */

import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';
import persist from '@alpinejs/persist';
import collapse from '@alpinejs/collapse';
import focus from '@alpinejs/focus';
import ToastComponent from '../../vendor/usernotnull/tall-toasts/resources/js/tall-toasts';

require('livewire-sortable');
// require('@nextapps-be/livewire-sortablejs');

Alpine.plugin(intersect);
Alpine.plugin(persist);
Alpine.plugin(collapse);
Alpine.plugin(focus);
Alpine.plugin(ToastComponent);
window.Alpine = Alpine;

Alpine.store('darkMode', {
  on: Alpine.$persist(false).as('darkMode'),

  toggle() {
    this.on = !this.on;
  },
});

Alpine.start();

// window.getCoursesSidebar= ()=>{
//     return {
//         openBrowseCourses:true,
//         courseCategories:false,
//         courseTopics:false,
//         courseDeliveryModes:false,
//         // openBrowseCourses:false
//     }
//
// }

// window.browseCourses =() => {
//     return {
//             open: false
//     };
//
//     // let response = await fetch('/api/label')
//     //
//     // return await response.text()
// }
// window.getCourseCategories =() => {
//     console.log(location);
//
//     return {
//             open: true
//     };
//
//     // let response = await fetch('/api/label')
//     //
//     // return await response.text()
// }
//

// window.browseCourses = () => {
//     return {
//         open: false
//     };
// }
// window.courseCategories = () => {
//     return {
//         open: false
//     };
// }
window.courseTopics = () => {
  return {
    open: false,
  };
};
window.courseDeliveryMode = () => {
  return {
    open: false,
  };
};

window.courseSideMenu = () => {
  return {
    // open: false
    test: () => {
      console.log(1);
      console.log(2);
    },
  };
};
