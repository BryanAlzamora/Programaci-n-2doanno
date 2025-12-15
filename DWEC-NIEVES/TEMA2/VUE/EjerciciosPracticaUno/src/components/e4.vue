<script setup>
    import {reactive,ref} from 'vue'
const arrayTareas=reactive({
        tareas:["tarea1","tarea2","tarea3","tarea4","tarea5","tarea6"]
});
const contadorTareas=ref(0);
function agregarTarea(){
    if(contadorTareas.value<tareas.value.length-1){
            contadorTareas.value++;
    }

}
</script>

<template>
    <h1>Ejercicio4</h1>
    <h2>Tareas{{ contadorTareas }}</h2>

    <ul>
        <li v-for="tarea in arrayTareas.tareas">
            {{ tarea }}
        </li>
    </ul>


    <button @click="agregarTarea">Agregar tarea</button>
    
</template>