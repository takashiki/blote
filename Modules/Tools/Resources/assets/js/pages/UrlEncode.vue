<template>
    <div>
        <el-row type="flex" justify="center">
            <el-input
                    type="textarea"
                    :rows="5"
                    placeholder="请输入编码前的内容"
                    v-model="input">
            </el-input>
        </el-row>
        <el-row type="flex" justify="center">
            <el-button type="primary" @click="urlEncode">编码</el-button>
            <el-button type="success" @click="urlDecode">解码</el-button>
        </el-row>
        <el-row type="flex" justify="center">
            <el-input
                    type="textarea"
                    :rows="5"
                    placeholder="请输入编码后的内容"
                    v-model="output">
            </el-input>
        </el-row>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                input: '',
                output: ''
            }
        },
        methods: {
            urlEncode: function () {
                /**
                 * php 中 rawurlencode 和 js 中此函数是一致的，建议 php 中弃用 urlencode，详见：
                 * https://blog.csdn.net/suofiya2008/article/details/6397168
                 */
                this.output = encodeURIComponent(this.input);
            },
            urlDecode: function () {
                this.input = decodeURIComponent(this.output);
            }
        }
    }
</script>

<style lang="scss">
    .el-row {
        margin-bottom: 20px;
        &:last-child {
            margin-bottom: 0;
        }
    }
</style>