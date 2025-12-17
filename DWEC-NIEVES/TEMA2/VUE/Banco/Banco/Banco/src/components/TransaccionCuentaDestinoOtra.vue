<script setup>
    // Función: Obtener una cuenta a la que hacer la transferencia.
    import {ref} from 'vue';
    // Libreria para comprobar el iban de la cuenta -- No le he probado.
    import IBAN from 'iban';
    
    const emit=defineEmits(['destino']);
    const numeroCuenta = ref('');

    function validarCuentaCorrienteConIBAN() {
        try 
        {
            // Verificar la longitud del número de cuenta
            if (numeroCuenta.value.length !== 24) {
                throw new Error("La longitud del número de cuenta con IBAN debe ser 24.");
            }

            // Validar el formato del IBAN
            if (!IBAN.isValid(numeroCuenta.value)) {
                throw new Error("El formato del IBAN no es válido.");
            }
            return true;

        } catch (error) 
        {
            // Capturar y manejar cualquier excepción lanzada durante la validación
            console.error("Error de validación:", error.message);
            return false;
        }
    }


    function fFin()
    {
        //if (validarCuentaCorrienteConIBAN())
            emit('destino', numeroCuenta.value);
    }
    

</script>
<template>
    <p>Número de cuenta destino:</p>
    <input type="text" v-model="numeroCuenta"/>
    <button @click="fFin">Terminar</button>
</template>