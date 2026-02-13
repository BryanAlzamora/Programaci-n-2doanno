import { ref } from 'vue'
import { defineStore } from 'pinia'
import tareas from '@/datos/tareas.json'

export const useTareasStore = defineStore('tareas', () => {
    const listaTareas = ref(tareas)
    const tareaSeleccionada = ref(null)

    function seleccionarTarea(tarea) {
        tareaSeleccionada.value = tarea
    }

    function completarTarea(id) {
        const tarea = listaTareas.value.find(t => t.id === id)
        if (tarea) {
            tarea.estado = 'completado'
        }
    }

    function agregarTarea(nuevaTarea) {
        const nuevoId = Math.max(...listaTareas.value.map(t => t.id)) + 1
        listaTareas.value.push({
            id: nuevoId,
            ...nuevaTarea,
            estado: 'no completado'
        })
    }

    function getTareasPorEstado(estado) {
        if (estado === 'todas') {
            return listaTareas.value
        }
        return listaTareas.value.filter(t => t.estado === estado)
    }

    return { 
        listaTareas, 
        tareaSeleccionada, 
        seleccionarTarea, 
        completarTarea, 
        agregarTarea,
        getTareasPorEstado
    }
})