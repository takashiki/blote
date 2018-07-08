<template>
    <el-row :gutter="20">
        <el-col :span="6">
            <router-link :to="{path:'/base64'}">
                Base64 编解码
            </router-link>
        </el-col>
        <el-col :span="6">
            <router-link :to="{path:'/php2json'}">
                PHP 数组转 Json
            </router-link>
        </el-col>
    </el-row>
</template>

<script>
    export default {
        name: "Index",
        data() {
            return {
                title: '工具集'
            };
        }
    }
</script>

<style lang="scss">

</style>