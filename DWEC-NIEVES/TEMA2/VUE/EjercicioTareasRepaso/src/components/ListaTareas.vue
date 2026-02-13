<script setup>
import { defineProps, defineEmits } from 'vue'

const props = defineProps({
  tareas: {
    type: Array,
    required: true
  }
})

const emit = defineEmits(['seleccionarTarea'])

function seleccionar(tarea) {
  emit('seleccionarTarea', tarea)
}
</script>

<template>
  <div>
    <h3>Tareas ({{ tareas.length }})</h3>
    <div v-if="tareas.length === 0">
      <p>No hay tareas</p>
    </div>
    <ul v-else>
      <li 
        v-for="tarea in tareas" 
        :key="tarea.id"
        @click="seleccionar(tarea)"
      >
        <strong>{{ tarea.titulo }}</strong> - {{ tarea.estado }}
        <br>
        <small>{{ tarea.fecha }}</small>
      </li>
    </ul>
  </div>
</template>