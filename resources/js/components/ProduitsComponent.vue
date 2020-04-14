<template>
    

                    <ul>
<!--on va faire 1 boucle (comme si on faisait 1 foreach)-->
                        <li v-for="produit in produits" v-bind:key="produit.id">
                            <a href="#">{{ produit.title }} {{ produit.realisation }} {{ produit.subtitle }}{{ produit.image }} {{ produit.year }}</a>
                        </li>
                    </ul>
        
</template>

<script>
    //export default {

/*je dédinie une data qui doit être 1 fontion, qui retourne 1 tableau avec 1 objet
qui est 1 objet vide, donc:
je vais stocké des données ds data, puis je retourne 1 objet et ds ces données j'ai
1 objet vide 'produits', et je peux y accéder ds mon composant vue.js en faisant
'this.produits', donc qd je fais appel avec ma requête 'axios' à mon URL, je peux 
aller stocker mes données ds le tableau vide*/
       // data() {
        //    return{
          //      produits: []
            //}
     //   },

//je créé 1 fonction created () pour faire des appels back-end au niveau de la base de donnée par ex
       // created() {
//je fais qd même 1 console.log pr aller insperter différentes choses
            
         //   axios.get('http://localhost:8000/api/produits')
/*puis j'appel la fontion 'then', c'est 1 prommesse faite à la base de donnée 
qui sont des 'data' c'est à dire nos produits et renvoyé par l'URL ci-dessus, 
et à l'intérieur (), elle va attendre de façon 'asyncrone'(tt ce qui va ce passer 
qd le composant sera appellé)*/
// avant d'afficher les data, il faut les stocker
     //       .then(response => this.produits = response)
//si on a 1 erreur, on aurait 'catch' qui serait appellé
     /*       .catch(error => console.log(console.error));
            
        },

        mounted() {
            console.log('Component mounted.')
                
        },

        mounted() {
            axios
                .get('api/produits')
                .then(response => (this.produits = response.data));
        },

        data: function() {
            return {
                title: 'Produits',
                produits: [] 
            }
        }
    }*/

    
    export default {
        mounted() {
            axios
                .get('api/produits')
                .then(response => (this.produits = response.data));
        },
        data: function() {
            return {
                title: 'Produits',
                produits: [] 
            }
        }
    }

</script>