<template>
  <div id="overlay">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">{{ title }}</h3>
          <button type="button" class="btn-close" @click="onCancel" />
        </div>
        <div class="modal-body">
          <div class="category">
            <div class="row">
              <div class="col">
                <input ref="category" v-model="category" type="text" class="form-control" />
              </div>
              <!-- <span v-if="msg">{{ msg }}</span> -->
            </div>
          </div>
          <div class="text-end pt-3">
            <button
              class="btn btn-md text-white me-2"
              style="background-color: #00cd45; width: 110px"
              :disabled="submitted"
              @click="onConfirm"
            >
              Salvar
            </button>
            <button
              class="btn btn-md text-white"
              style="background-color: rgb(173, 173, 173)"
              @click="onCancel"
            >
              Cancelar
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

  <!--
    Old input, send to app.js:

    <input
    ref="category"
    type="text"
    class="form-control"
    @input="$emit('send', $event.target.value)"
  /> -->

<script>
import axios from 'axios';

export default {
  props: {
    categoryEdit: {
      type: Object,
      default: null,
    },
  },
  data() {
    return {
      category: null,
      categoryId: null,
      submitted: false,
      title: 'Nova categoria',
      //  TODO: Tratar  quando a categoria for inválida
    };
  },
  mounted() {
    if (this.categoryEdit != null) {
      this.category = this.categoryEdit.name;
      this.categoryId = this.categoryEdit.id;
      this.title = 'Alterar categoria';
    }
  },
  methods: {
    validateCategory(category) {
      if (!category) {
        this.$refs.category.focus();
        return false;
      }
      return true;
    },
    onConfirm() {
      this.submitted = true;
      if (!this.validateCategory(this.category)) {
        this.submitted = false;
        return false;
      }

      if (this.categoryId) {
        return axios
          .patch(`/v1/admin/categorias/edit/${this.categoryId}`, {
            category: this.category,
          })
          .then((res) => {
            if (res.status === 200) {
              location.reload();
            }
          })
          .catch((err) => {
            console.log(err);
          });
      }

      return axios
        .post('/v1/admin/categorias/create', {
          category: this.category,
        })
        .then((res) => {
          if (res.status === 200) {
            location.reload();
          }
        })
        .catch((err) => {
          console.log(`deu ruim :/ : ${err.data}`);
        });
    },
    onCancel() {
      this.$emit('cancel');
    },
  },
};
</script>
