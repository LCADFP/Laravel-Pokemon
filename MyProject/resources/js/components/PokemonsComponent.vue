<template>
    <div class="row" >
        <spiner v-show="loading"></spiner>
        
        <div class="col-sm" v-for="pokemon in pokemons">
            <div class="card text-center" style="width: 18rem; margin-top: 70px">
            <img style="height:100px; width:100px; background-color: #EFEFEF; margin:15px;" src="imagenes/" class="card-img-top rounded-circle mx-auto d-block" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ pokemon.nombre }}</h5>
                    <p class="card-text">{{ pokemon.descripcion }}</p>
                <a href="/maestros/" class="btn btn-primary">Detalles</a>
                </div>
            </div>
        </div>
    
  
</div>
</template>

<script>
 export default {
     data(){
         return {
             pokemons: [],
             loading: true
         }
     },
        mounted() {
            axios
                .get('http://localhost:8000/pokemons')
                .then((res) => {
                    this.pokemons = response.data
                    this.loading = false
                })
                
        }
    }

</script>
