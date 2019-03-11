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
            <el-button type="primary" @click="unicodeEncode">编码</el-button>
            <el-button type="success" @click="unicodeDecode">解码</el-button>
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
            unicodeEncode: function () {
              let res = [];
              for (var i = 0; i < this.input.length; i++) {
                res[i] = ( "00" + this.input.charCodeAt(i).toString(16) ).slice(-4);
              }
              this.output =  "\\u" + res.join("\\u");
            },
            unicodeDecode: function () {
              this.input = eval("'" + this.output + "'");
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