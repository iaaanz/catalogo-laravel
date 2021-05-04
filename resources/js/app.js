/* eslint-disable no-unused-vars */

const { default: axios } = require('axios');

require('./bootstrap');

window.Vue = require('vue');

Vue.component(
  'ModalCreateCategory',
  require('./components/ModalCreateCategory.vue').default
);
Vue.component('ModalRemove', require('./components/ModalRemove.vue').default);

const vm = new Vue({
  el: '.app',
  data: {
    showModalRemove: false,
    showModalRegisterCategory: false,
    categoryName: '',
    selectProduct: null
  },
  methods: {
    confirmProduct(idProduto) {
      this.showModalRemove = true;
      this.selectProduct = idProduto;
    },
    deleteProduct() {
      axios
        .delete(`/v1/admin/produtos/delete/${this.selectProduct}`)
        .then(res => {
          location.reload();
        })
        .catch(err => {
          console.log(err);
        });
      console.log(`deletou: ${this.selectProduct}`);
      this.showModalRemove = false;
      this.selectProduct = null;
    },
    cancelDeleteProduct() {
      this.showModalRemove = false;
      this.selectProduct = null;
    },
    deleteCategory() {
      // fazer
    },
    registerCategory() {
      console.log(this.categoryName);
    },
    cancelRegisterCategory() {
      this.showModalRegisterCategory = false;
    }
  }
});
