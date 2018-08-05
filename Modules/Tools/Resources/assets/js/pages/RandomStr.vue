<template>
    <div>
        <el-row type="flex" justify="center">
            <el-checkbox v-model="numeric">数字</el-checkbox>
            <el-checkbox v-model="letters">字母</el-checkbox>
            <el-checkbox v-model="special">特殊字符</el-checkbox>
        </el-row>
        <el-row type="flex" justify="center">
            <el-radio-group v-model="length">
                <el-radio :label="8">8位</el-radio>
                <el-radio :label="16">16位</el-radio>
                <el-radio :label="32">32位</el-radio>
            </el-radio-group>
        </el-row>
        <el-row type="flex" justify="center">
            <el-button type="primary" @click="generate">生成</el-button>
        </el-row>
        <el-row type="flex" justify="center">
            <pre>{{output}}</pre>
        </el-row>
    </div>
</template>

<script>
    const randomString = require('random-string');

    export default {
        data() {
            return {
                length: 16,
                numeric: true,
                letters: true,
                special: true,
                exclude: [],
                output: ''
            }
        },
        methods: {
            generate: function () {
                this.output = randomString({
                    length: this.length,
                    numeric: this.numeric,
                    letters: this.letters,
                    special: this.special,
                    exclude: this.exclude
                });
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