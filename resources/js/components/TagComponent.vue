<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                TAG:
                <div class="card" v-for="tag in tags" :key="tag.id">
                    <div class="card-header text-uppercase">{{tag.name}}</div>

                    
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                tags: '',
            }
        },
        
        mounted() {
            console.log('Component mounted.');
            axios.get('api/tags').then(response =>{
                this.tags = response.data.data;
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