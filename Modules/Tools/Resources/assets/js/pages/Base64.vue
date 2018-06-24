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
            <el-button type="success" @click="base64Encode">编码</el-button>
            <el-button type="info" @click="base64Decode">解码</el-button>
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
        name: "Base64",
        data() {
            return {
                input: '',
                output: ''
            }
        },
        methods: {
            base64Encode: function () {
                this.output = btoa(this.input);
            },
            base64Decode: function () {
                this.input = atob(this.output);
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