<template>
  <div id="app">

  </div>
</template>

<script>
  import axios from 'axios';
  import {Api} from './utils/Api.js';
  export default {
    name: 'app',
    mounted(){

      Api().get('api/cliente',(result)=>{
              console.log('sssssssssssssss ',result)
            })

      var data={
        nombre:"Duverney",
        apellido:"Ortiz Alvarado"
      }
      Api().post('api/clienteNew',data,(result)=>{
              console.log('sssssssssssssss ',result)
            })


    },
    data () {
      return {
        msg: 'Welcome to Your Vue.js App'
      }
    }
  }
</script>

<style>

</style>
