/* eslint-disable no-unused-vars */

const { default: axios } = require('axios');

require('./bootstrap');

window.Vue = require('vue');

Vue.component('ModalTransition', require('./transitions/ModalTransition.vue').default);
Vue.component('ModalCreateCategory', require('./components/ModalCreateCategory.vue').default);
Vue.component('ModalCreateSubcategory', require('./components/ModalCreateSubcategory.vue').default);
Vue.component('ModalRemove', require('./components/ModalRemove.vue').default);

const vm = new Vue({
  el: '.app',
  data: {
    sModalRemove: false,
    sModalCreateCategory: false,
    sModalCreateSubcategory: false,
    selectedProduct: null,
    selectedCategory: null,
    selectedSubcategory: null,
    delObj: null
  },
  methods: {
    // Show
    showModalRemove() {
      this.delObj = null;
      this.sModalRemove = !this.sModalRemove;
    },
    showCreateCategory() {
      this.selectedCategory = null;
      this.selectedSubcategory = null;
      this.sModalCreateCategory = !this.sModalCreateCategory;
    },
    showCreateSubcategory() {
      this.selectedCategory = null;
      this.selectedSubcategory = null;
      this.sModalCreateSubcategory = !this.sModalCreateSubcategory;
    },

    // Delete modal
    deleteId(id, mode) {
      this.showModalRemove();
      this.delObj = {
        id: id,
        mode: mode
      };
    },

    // Categories
    editCategory(category) {
      this.showCreateCategory();
      this.selectedCategory = category;
    },

    // Subcategories
    editSubcategory(subcategory) {
      this.showCreateSubcategory();
      this.selectedSubcategory = subcategory;
    }
  }
});
