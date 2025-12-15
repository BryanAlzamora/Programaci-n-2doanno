<script setup>
import { RouterLink, RouterView } from 'vue-router'
import index from './views/indexView.vue'

</script>

<template>
 <div class="izquierda">
    <index/>
 </div>
 <div class="derecha">
    <index />
 </div>

  <RouterView />
</template>

<style scoped>

</style>
