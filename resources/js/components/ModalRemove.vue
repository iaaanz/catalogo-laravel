<template>
  <div id="overlay">
    <div class="modal-dialog">
      <div class="modal-content">
        <div
          class="modal-header"
          style="border-bottom: 0px; padding-bottom: 0rem"
        >
          <button class="btn-close" @click="$emit('close')" />
        </div>
        <div class="modal-body">
          <div class="text-center" style="color: #f5506f">
            <i
              class="far fa-times-circle my-3"
              style="font-size: 120px; font-weight: 10"
            />
          </div>
          <h1 class="text-center text-secondary font-weight-normal">
            Você tem certeza?
          </h1>
          <div class="px-5 text-center">
            <h6 style="color: rgb(122, 122, 122)">
              Essa operação não pode ser desfeita.
            </h6>
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
export default {
  props: {
    product: {
      type: Number,
      default: 0,
    },
  },
  methods: {
    onConfirm() {
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
