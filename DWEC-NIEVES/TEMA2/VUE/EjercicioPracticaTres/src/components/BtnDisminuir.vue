<script setup>

// Define que este componente puede emitir un evento llamado "click" al padre
const emit=defineEmits(["click"]);
</script>

<template>
<button @click="emit('click')">
    Disminuir
</button>
</template>
<style scoped>
button{
    background:orange;
    color:white;
    border:none;
    padding:6px 10px;
    border-radius:5px;
    cursor:pointer;
}
</style>
