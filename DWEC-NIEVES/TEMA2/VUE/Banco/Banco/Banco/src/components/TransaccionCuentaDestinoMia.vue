<script setup>
  // Función: Mostrar las cuentas de un cliente a las que se puede hacer una transferencia.
  import {ref,defineProps} from 'vue';
  import {useCuentasStore} from '../stores/cuentas';

  const props = defineProps({
      cuentaOrigen: String
  });

  // Obtener usando el almacén todas las cuentas de un cliente.
  const cuentasStore = useCuentasStore();
  const cuentas = ref([]);
  cuentasStore.fCuentasUnCliente(localStorage.getItem('idCliente'));
  cuentas.value = cuentasStore.listaCuentasCliente;

  // Eliminar la cuenta origen de la transferencia.
  const cuentasTransferir = ref([]);
  cuentasTransferir.value = cuentas.value.filter((c)=>c.numeroCuenta != props.cuentaOrigen)

  // Evento que dice que ya tenemos la cuenta destino.
  const emit = defineEmits(['destino ']);

  function fFin(index)
  {
    emit('destino',cuentasTransferir.value[index].numeroCuenta)
  }
</script>

<template>
    <div>
        <p> Elige la cuenta de destino</p>
        <ul v-for="(cuenta,index) of cuentasTransferir" :key="index">
        <li @click="fFin(index)">{{ cuenta.numeroCuenta }} </li>
    </ul>
    </div>
</template>