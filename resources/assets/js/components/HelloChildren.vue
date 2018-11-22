<template>
    <div>
        <h2>{{msg}}</h2>
    </div>
</template>

<script>
    export default {
        name: "HelloChildren",
        data(){
            return {
                msg:'我是子路由1'
            }
        }
    }
</script>

<style scoped>

</style>