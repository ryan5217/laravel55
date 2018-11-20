<template>
    <div>
        <h1>Hello</h1>
        <p class="hello">{{msg}}</p>
        <el-button @click="visible = true">按钮</el-button>
        <el-dialog v-model="visible">
            <p>欢迎使用 Element</p>
        </el-dialog>
    </div>
</template>

<script>
    export default {
        name: "Hello",
        data() {
            return {
                msg:'This is a Laravel with Vue and Element Demo.',
                visible:false
            }
        }
    }
</script>

<style scoped>
    .hello{
        font-size: 3em;
        color: green;
    }

</style>