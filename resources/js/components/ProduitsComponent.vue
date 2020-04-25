<template>

    <!--
                    <ul>
                        <li v-for="contact in contacts" v-bind:key="contact.id">
                            {{ contact.firstname }} {{ contact.lastname }}
                        </li>
                    </ul>
      -->          
            <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">{{ title }}</div>
                       
<!--                  <div class="card">
            <div class="card-header">{{ title }}</div>
            <img class="card-img-top" src="{{ produit.image }} " alt="Card image" title="WAR">
            <div class="card-body">
            <h4 class="card-title">{{ produit.id }} {{ produit.title }}</h4> 
            <p class="card-text">{{ produit.realisation }}</p> 
            <p class='p1'>Notes for album</p> 
            <p class='p2'>{{ produit.description }}</p>
            <a href="panier.html" class="btn btn-dark">{{ produit.price }}€</a>
            </div>
            </li>
            </ul>-->
            
                    <ul>
<!--on va faire 1 boucle (comme si on faisait 1 foreach)-->
                        <li v-for="produit in produits" v-bind:key="produit.id">
                           <a href="#">{{ produit.id }}</a>
                           <button type="button" class="btn btn-secondary" data-toggle="produit" 
                               data-target="@Voir" @click="getProduit(produit.id)">
                               Voir
                           </button>
                           
                               <!-- <a href=# onclick=return findProduitsById();>lien</a>-->
                            <!--<a href="#">--><a>{{ produit.id }} {{ produit.title }} {{ produit.realisation }} {{ produit.image }} {{ produit.year }} {{ produit.price }} {{ produit.slug }}</a><!--</a>-->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
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
/*
    function findProduitsById()
                                {
                                //code
                                return false;
                                }
 */                               
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
/*on a définie une data qui doit être 1 fontion, qui retourne 1 tableau avec 1 objet
qui est 1 objet vide, donc:
je vais stocké des données ds data, puis je retourne 1 objet et ds ces données j'ai
1 objet vide 'produits', et je peux y accéder ds mon composant vue.js en faisant
'this.produits', donc qd je fais appel avec ma requête 'axios' à mon URL, je peux 
aller stocker mes données ds le tableau vide*/
</script>