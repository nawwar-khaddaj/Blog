// require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });

$('document').ready(function () {
    $('.select2').select2();
    $('.dropify').dropify();
})

function clickLinkConfirm(element, message) {
    Swal.fire({
        title: "Confirm!",
        text: message,
        icon: "warning",
        buttonsStyling: false,
        confirmButtonText: "<i class='la la-thumbs-o-up'></i> Yes delete it!",
        showCancelButton: true,
        cancelButtonText: "<i class='la la-thumbs-down'></i> No, thanks",
        customClass: {
            confirmButton: "btn btn-danger",
            cancelButton: "btn btn-default"
        }
    }).then(function (result) {
        if (result.value) {
            $(element).find('form').submit();
        } else if (result.dismiss === "cancel") {
            Swal.fire(
                "Cancelled",
                "Your item is safe :)",
                "error"
            )
        }
    });
}

$('.deleteRow').click(function (e) {
    console.log('delete');
    clickLinkConfirm(this, "Are you sure you want to delete this item?");
    e.preventDefault();
});

$('input[name="type"]').on('change', function () {
    let selectedItem = 'settings_' +  $(this).val();
    $('.settings_text').slideUp();
    $('.settings_textarea').slideUp();
    $('.settings_rich_text_box').slideUp();
    $('.settings_number').slideUp();
    $('.settings_image').slideUp();
    $('.settings_album').slideUp();
    $('.settings_checkbox').slideUp();
    $('.settings_select').slideUp();
    $('.'+selectedItem).slideDown();
})


