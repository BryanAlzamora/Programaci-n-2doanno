import { ref, computed } from 'vue'
import { defineStore } from 'pinia'
import pedidos from '../datos/pedidos.json';

export const useHostelerosStore = defineStore('hosteleros', () => {
    
    const datosPedidos=ref(pedidos);
    const listaPedidos=ref([]);

    function fPedidosHostelero(id){
        listaPedidos.value=
        datosPedidos.value.find((h)=>h.id==id)?.pedidos || []
    }

    return {listaPedidos, fPedidosHostelero}
})
