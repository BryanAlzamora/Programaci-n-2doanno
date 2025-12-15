<script setup>
const emit=defineEmits(["click"]);
</script>
<template>
<button @click="emit('click')">
    Eliminar
</button>
</template>
<style scoped>
button{
    background:red;
    color:white;
    border:none;
    padding:6px 10px;
    border-radius:5px;
    cursor:pointer;
}
</style>