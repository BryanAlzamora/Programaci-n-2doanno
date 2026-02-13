<script setup>
import { ref, computed } from 'vue'
import { useTareasStore } from '@/stores/tareasStore'
import ListaTareas from '@/components/ListaTareas.vue'
import DetallesTarea from '@/components/DetalleTarea.vue'

const tareasStore = useTareasStore()
const filtro = ref('todas')
const vistaActual = ref('lista') // 'lista' o 'nueva'

// Formulario nueva tarea
const titulo = ref('')
const descripcion = ref('')
const fecha = ref('')

const tareasFiltradas = computed(() => {
  return tareasStore.getTareasPorEstado(filtro.value)
})

const tareaActual = computed(() => tareasStore.tareaSeleccionada)

function seleccionarTarea(tarea) {
  tareasStore.seleccionarTarea(tarea)
}

function completarTarea(id) {
  tareasStore.completarTarea(id)
}

function mostrarLista() {
  vistaActual.value = 'lista'
}

function mostrarNueva() {
  vistaActual.value = 'nueva'
}

function crearTarea() {
  if (!titulo.value || !descripcion.value || !fecha.value) {
    alert('Todos los campos son obligatorios')
    return
  }

  const nuevaTarea = {
    titulo: titulo.value,
    descripcion: descripcion.value,
    fecha: fecha.value
  }

  tareasStore.agregarTarea(nuevaTarea)
  
  // Limpiar formulario
  titulo.value = ''
  descripcion.value = ''
  fecha.value = ''
  
  alert('Tarea creada')
  vistaActual.value = 'lista'
}
</script>

<template>
  <div>
    <nav>
      <h1>Gestor de Tareas</h1>
      <button @click="mostrarLista">Home</button>
      <button @click="mostrarNueva">Nueva Tarea</button>
    </nav>

    <!-- VISTA LISTA DE TAREAS -->
    <div v-if="vistaActual === 'lista'">
      <h2>Lista de Tareas</h2>
      
      <label>Filtrar por estado:</label>
      <select v-model="filtro">
        <option value="todas">Todas</option>
        <option value="completado">Completadas</option>
        <option value="no completado">No Completadas</option>
      </select>

      <div style="display: flex;">
        <ListaTareas 
          :tareas="tareasFiltradas"
          @seleccionarTarea="seleccionarTarea"
        />
        <DetallesTarea 
          :tarea="tareaActual"
          @completarTarea="completarTarea"
        />
      </div>
    </div>

    <!-- VISTA NUEVA TAREA -->
    <div v-else-if="vistaActual === 'nueva'">
      <h2>Crear Nueva Tarea</h2>
      
      <form @submit.prevent="crearTarea">
        <div>
          <label>Título:</label>
          <input type="text" v-model="titulo">
        </div>

        <div>
          <label>Descripción:</label>
          <textarea v-model="descripcion"></textarea>
        </div>

        <div>
          <label>Fecha:</label>
          <input type="date" v-model="fecha">
        </div>

        <button type="submit">Crear Tarea</button>
        <button type="button" @click="mostrarLista">Cancelar</button>
      </form>
    </div>
  </div>
</template>