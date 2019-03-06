<template>
    <div class="row" >
        
        <div class="col-sm" v-for="pokemon in pokemons">
            <div class="card text-center" style="width: 18rem; margin-top: 70px">
            <img style="height:100px; width:100px; background-color: #EFEFEF; margin:15px;" src="imagenes/" class="card-img-top rounded-circle mx-auto d-block" alt="...">
                <div class="card-body">
                    <h5 class="card-title">PokemonNombre</h5>
                    <p class="card-text">PokemonDescrip</p>
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
             pokemons: [
                 {id: 1, nombre: "Pikachu"},
                 {id: 2, nombre: "Squirtle"},
                 {id: 3, nombre: "Charizard"}

             ]
         }
     },
        mounted() {
            console.log('Component mounted.')
        }
    }

</script>
