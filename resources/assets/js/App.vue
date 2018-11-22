<template>
    <div>
        <el-row>
            <el-col :span="24">
                <div class="grid-content bg-purple-dark">
                    <h1>{{msg}}</h1>
                </div>
            </el-col>
        </el-row>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {
        name: "App",
        data(){
            return {
                msg:'呵呵'
            }
        }
    }
</script>

<style>
    body,html{
        padding: 0px;
        margin: 0 auto;
        max-width: 1200px;
        min-width: 960px;
    }
</style>