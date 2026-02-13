<script setup>
import { defineProps, defineEmits } from 'vue'

const props = defineProps({
  tarea: {
    type: Object,
    default: null
  }
})

const emit = defineEmits(['completarTarea'])

function completar() {
  if (props.tarea) {
    emit('completarTarea', props.tarea.id)
  }
}
</script>

<template>
  <div>
    <h3>Detalles</h3>
    
    <div v-if="!tarea">
      <p>Selecciona una tarea</p>
    </div>

    <div v-else>
      <p><strong>Título:</strong> {{ tarea.titulo }}</p>
      <p><strong>Descripción:</strong> {{ tarea.descripcion }}</p>
      <p><strong>Fecha:</strong> {{ tarea.fecha }}</p>
      <p><strong>Estado:</strong> {{ tarea.estado }}</p>

      <button 
        v-if="tarea.estado === 'no completado'"
        @click="completar"
      >
        Marcar como Completada
      </button>

      <p v-else>✓ Tarea completada</p>
    </div>
  </div>
</template>