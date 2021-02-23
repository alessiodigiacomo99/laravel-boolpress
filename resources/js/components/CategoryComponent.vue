<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                CATEGORIE:
                <div class="card" v-for="category in categories" :key="category.id">
                    <div class="card-header text-uppercase">{{category.name}}</div>

                    
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                categories: '',
            }
        },
        
        mounted() {
            console.log('Component mounted.');
            axios.get('api/categories').then(response =>{
                this.categories = response.data.data;
            }).catch(error =>{
                console.log(error);
            })
        }
    }
</script>
<style lang="scss" scoped>
.card{
    margin: 20px 0;
    border: 2px solid lightblue;
    .card-header{
        background-color: lightblue;
    }
}

</style>