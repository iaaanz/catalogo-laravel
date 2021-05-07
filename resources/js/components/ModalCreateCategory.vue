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
                <input
                  ref="category"
                  type="text"
                  class="form-control"
                  @input="$emit('send', $event.target.value)"
                />
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

<script>
export default {
  model: {
    event: 'send',
  },
  props: {
    value: {
      type: String,
      default: '',
    },
  },
  data: function () {
    return {
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
      if (!this.validateCategory(this.value)) {
        return false;
      }

      this.$emit('confirm');
    },
    onCancel() {
      this.$emit('cancel');
    },
  },
};
</script>

<style>
.slide-fade-enter-active {
  transition: all 0.3s ease;
}

.slide-fade-leave-active {
  transition: all 0.3s ease;
}

.slide-fade-enter,
.slide-fade-leave-to {
  transform: translateX(10px);
  opacity: 0;
}
</style>
