<template>
  <div id="overlay">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Nova categoria</h3>
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
  data() {
    return {
      category: null,

      /**  TODO: Tratar no front quando a categoria for inválida
       *    e qundo for sucesso para recarregar SOMENTE as categorias
       *    e não toda a página.
       */
    };
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
      if (!this.validateCategory(this.category)) {
        return false;
      }

      axios
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
