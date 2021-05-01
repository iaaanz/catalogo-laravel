/* eslint-disable no-unused-vars */

const { default: axios } = require('axios');

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('ModalRemove', require('./components/ModalRemove.vue').default);

const vm = new Vue({
  el: '.app',
  data: {
    showModalRemove: false,
    selectProduct: null
  },
  methods: {
    confirmProduct(idProduto) {
      this.showModalRemove = true;
      this.selectProduct = idProduto;
      console.log(`confirmProduct:${idProduto}`);
    },
    deleteProduct() {
      axios
        .delete(`/v1/admin/produtos/delete/${this.selectProduct}`)
        .then(res => {
          console.log(res.data);
          location.reload();
        })
        .catch(err => {
          console.log(err);
        });
      console.log(`deletou: ${this.selectProduct}`);
      this.showModalRemove = false;
      this.selectProduct = null;
    },
    cancelDelete() {
      this.showModalRemove = false;
      this.selectProduct = null;
      console.log('cancelou');
    }
  }
});
