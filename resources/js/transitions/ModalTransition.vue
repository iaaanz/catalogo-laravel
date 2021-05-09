<template>
  <transition name="slide-fade">
    <slot></slot>
  </transition>
</template>

<script>
export default {};
</script>

<style>
.slide-fade-enter-active,
.slide-fade-leave-active {
  transition: all 0.3s ease;
}

.slide-fade-enter,
.slide-fade-leave-to {
  transform: translateX(10px);
  opacity: 0;
}
</style>
