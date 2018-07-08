<template>
    <div>
        <el-row type="flex" justify="center">
            <el-input
                    type="textarea"
                    :rows="5"
                    placeholder="PHP 数组"
                    v-model="input">
            </el-input>
        </el-row>
        <el-row type="flex" justify="center">
            <el-button type="primary" @click="php2json">转 Json</el-button>
        </el-row>
        <el-row type="flex" justify="center">
            <el-input
                    type="textarea"
                    :rows="5"
                    placeholder="Json 字符串"
                    v-model="output">
            </el-input>
        </el-row>
    </div>
</template>

<script>
    const parser = require('php-array-parser');

    export default {
        name: "Base64",
        data() {
            return {
                input: '',
                output: ''
            }
        },
        methods: {
            php2json: function () {
                this.output = JSON.stringify(parser.parse(this.input));
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