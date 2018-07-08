<template>
    <div>
        <el-row type="flex" justify="center">
            <el-input
                    placeholder="字符串"
                    v-model="input">
            </el-input>
        </el-row>
        <el-row type="flex" justify="center">
            <el-button type="primary" @click="md5Hash">md5</el-button>
            <el-button type="success" @click="sha1Hash">sha1</el-button>
        </el-row>
        <el-row type="flex" justify="center">
            <pre>{{output}}</pre>
        </el-row>
    </div>
</template>

<script>
    const md5 = require('js-md5');
    const sha1 = require('js-sha1');

    export default {
        data() {
            return {
                input: '',
                output: ''
            }
        },
        methods: {
            md5Hash: function () {
                this.output = md5(this.input);
            },
            sha1Hash: function () {
                this.output = sha1(this.input);
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