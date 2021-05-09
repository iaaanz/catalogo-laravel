/* eslint-disable no-unused-vars */

const { default: axios } = require('axios');

require('./bootstrap');

window.Vue = require('vue');

Vue.component('ModalTransition', require('./transitions/ModalTransition.vue').default);
Vue.component('ModalCreateCategory', require('./components/ModalCreateCategory.vue').default);
Vue.component('ModalRemove', require('./components/ModalRemove.vue').default);

const vm = new Vue({
  el: '.app',
  data: {
    sModalRemove: false,
    sModalRegisterCategory: false,
    selectedProduct: null,
    selectedCategory: null
  },
  methods: {
    // Show
    showModalRemove() {
      this.sModalRemove = !this.sModalRemove;
    },
    showCreateCategory() {
      this.selectedCategory = null;
      this.sModalRegisterCategory = !this.sModalRegisterCategory;
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
    }
  }
});
