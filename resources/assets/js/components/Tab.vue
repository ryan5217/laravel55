<template>
    <el-tabs type="border-card" tab-position="left">
        <el-tab-pane>
            <span slot="label"><i class="el-icon-date"></i> 我的行程</span>
            我的行程
        </el-tab-pane>
        <el-tab-pane label="消息中心">
            <div>
                <h2>消息中心</h2>
                <ol>
                    <li>你是谁</li>
                    <li>我在哪里</li>
                    <li>你要干什么</li>
                </ol>
            </div>
        </el-tab-pane>
        <el-tab-pane label="角色管理">角色管理</el-tab-pane>
        <el-tab-pane label="定时任务补偿">定时任务补偿</el-tab-pane>
    </el-tabs>
</template>

<script>
    export default {
        name: "Tab"
    }
</script>

<style scoped>

</style>