<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ title }}</div>

                    <ul>
                        <li v-for="produit in produits" v-bind:key="produit.id">
                            {{ produit.category_id }} {{ produit.title }} {{ $produit.created_at }} {{ produit.realisation }} {{ produit.description }} {{ produit.subtitle }} {{ produit.price }} {{ produit.image }} {{ produit.year }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

       // created() {}
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