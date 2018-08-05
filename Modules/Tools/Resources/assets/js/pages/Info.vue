<template>
    <div>
        <el-row type="flex" justify="center">
            {{ ua }}
        </el-row>
        <el-row type="flex" justify="center">
            {{ ip }}
        </el-row>
    </div>
</template>

<script>
    const axios = require('axios');

    export default {
        data() {
            return {
                ua: navigator.userAgent,
                ip: ''
            }
        },
        mounted () {
            let api = 'https://myip.ipip.net';
            fetch(api).then(response => {
                response.text().then(text => {
                    this.ip = text;
                });
            });
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