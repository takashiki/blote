<template>
    <el-row :gutter="20">
        <el-col class="tool-link" :span="6">
            <router-link :to="{path:'/base64'}">
                Base64 编解码
            </router-link>
        </el-col>
        <el-col class="tool-link" :span="6">
            <router-link :to="{path:'/urlEncode'}">
                UrlEncode 编解码
            </router-link>
        </el-col>
        <el-col class="tool-link" :span="6">
            <router-link :to="{path:'/php2json'}">
                PHP 数组转 Json
            </router-link>
        </el-col>
        <el-col class="tool-link" :span="6">
            <router-link :to="{path:'/hash'}">
                字符串 Hash
            </router-link>
        </el-col>
        <el-col class="tool-link" :span="6">
            <router-link :to="{path:'/randomStr'}">
                随机字符串
            </router-link>
        </el-col>
        <el-col class="tool-link" :span="6">
            <router-link :to="{path:'/timestamp'}">
                时间戳转换
            </router-link>
        </el-col>
        <el-col class="tool-link" :span="6">
            <router-link :to="{path:'/info'}">
                客户端信息
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
.tool-link {
    padding: 20px;
    text-align: center;
}
</style>