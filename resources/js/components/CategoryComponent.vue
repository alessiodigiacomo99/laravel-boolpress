<template>
    <div class="container">
    
        CATEGORIE:
        <select class="card">
            <option v-for="category in categories" class="card-header text-uppercase" :key="category.id">{{category.name}}</option>

            
        </select>
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
            axios.get('../../api/categories').then(response =>{
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