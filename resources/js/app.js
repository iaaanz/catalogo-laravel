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
    selectedSubcategory: null
  },
  methods: {
    // Show
    showModalRemove() {
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

    // Products
    confirmProduct(idProduto) {
      this.showModalRemove();
      this.selectedProduct = idProduto;
    },
    deleteProduct() {
      axios
        .delete(`/v1/admin/produtos/delete/${this.selectedProduct}`)
        .then(res => {
          location.reload();
        })
        .catch(err => {
          console.log(err);
        });
      this.showModalRemove();
      this.selectedProduct = null;
    },

    // Categories
    confirmDelCategory(idCategory) {
      this.showModalRemove();
      this.selectedCategory = idCategory;
    },
    deleteCategory() {
      axios
        .delete(`/v1/admin/categorias/delete/${this.selectedCategory}`)
        .then(res => {
          if (res.status === 200) {
            console.log(res.status);
            location.reload();
          }
        })
        .catch(err => {
          console.log(err);
        });
      this.showModalRemove();
      this.selectedProduct = null;
    },
    editCategory(category) {
      this.showCreateCategory();
      this.selectedCategory = category;
    },

    // Subcategories
    confirmDelSubcategory(idSubcategory) {
      this.showModalRemove();
      this.selectedSubcategory = idSubcategory;
    }
  }
});
