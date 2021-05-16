<template>
  <div id="overlay">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="border-bottom: 0px; padding-bottom: 0rem">
          <button class="btn-close" @click="$emit('cancel')" />
        </div>
        <div class="modal-body">
          <div class="text-center" style="color: #f5506f">
            <i class="far fa-times-circle my-3" style="font-size: 120px; font-weight: 10" />
          </div>
          <h1 class="text-center text-secondary font-weight-normal">Você tem certeza?</h1>
          <div class="px-5 text-center">
            <h6 style="color: rgb(122, 122, 122)">Essa operação não pode ser desfeita.</h6>
          </div>
          <div class="text-center py-3">
            <button
              class="btn btn-lg text-white me-5"
              style="background-color: rgb(173, 173, 173)"
              @click="onCancel"
            >
              Cancelar
            </button>
            <button
              class="btn btn-lg text-white"
              style="background-color: #f5506f; width: 110px"
              @click="onConfirm"
            >
              Delete
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  props: {
    delItem: {
      type: Object,
      default: null,
    },
  },
  mounted() {
    if (this.delItem === null) {
      console.log('Algo errado no ModalRemove, nenhum objeto trazido');
    }
  },
  methods: {
    delCat(id) {
      axios
        .delete(`/v1/admin/categorias/delete/${id}`)
        .then((res) => {
          if (res.status === 200) {
            location.reload();
          }
        })
        .catch((err) => {
          console.log(err);
        });
    },
    delSubcat(id) {
      axios
        .delete(`/v1/admin/subcategorias/delete/${id}`)
        .then((res) => {
          if (res.status === 200) {
            location.reload();
          }
        })
        .catch((err) => {
          console.log(err);
        });
    },
    delProd(id) {
      axios
        .delete(`/v1/admin/produtos/delete/${id}`)
        .then((res) => {
          if (res.status === 200) {
            location.reload();
          }
        })
        .catch((err) => {
          console.log(err);
        });
    },
    onConfirm() {
      const { mode, id } = this.delItem;
      if (mode === 'cat') {
        this.delCat(id);
      } else if (mode === 'subCat') {
        this.delSubcat(id);
      } else if (mode === 'prod') {
        this.delProd(id);
      } else {
        console.log('Erro: ModalRemove.vue(onConfirm)');
      }
      this.$emit('cancel');
    },
    onCancel() {
      this.$emit('cancel');
    },
  },
};
</script>
