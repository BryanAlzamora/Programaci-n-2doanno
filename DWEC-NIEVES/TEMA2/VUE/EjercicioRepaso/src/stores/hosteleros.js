import { ref } from 'vue'
import { defineStore } from 'pinia'
import hosteleros from '../datos/hosteleros.json';

export const useHostelerosStore = defineStore('hosteleros', () => {

  const listaHosteleros=ref(hosteleros);
  const unHostelero=ref(null);
  
  function fUnHostelero(obj) {
    unHostelero.value = listaHosteleros.value.find(
      h => h.id == obj.id && h.password == obj.password
    )
  }
  return(fUnHostelero,unHostelero)
})
