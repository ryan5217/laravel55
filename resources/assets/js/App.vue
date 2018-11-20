<template>
    <div>
        <h1>{{msg}}</h1>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {
        name: "App",
        data(){
            return {
                msg:'欢迎来到艾泽拉斯'
            }
        }
    }
</script>

<style>
    body,html{
        color: black;
    }
</style>