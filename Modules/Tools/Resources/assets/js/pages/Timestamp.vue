<template>
    <div>
        <el-row type="flex" justify="center" :gutter="20">
            <el-col :span="12">
                <el-input
                        placeholder="时间戳"
                        v-model="timestamp"
                        class="input-with-select">
                    <el-select v-model="unit" slot="prepend" value="second" placeholder="请选择">
                        <el-option label="秒" value="second"></el-option>
                        <el-option label="毫秒" value="millisecond"></el-option>
                    </el-select>
                    <el-button slot="append" icon="el-icon-d-arrow-right" @click="decode"></el-button>
                </el-input>
            </el-col>
            <el-col :span="12">
                <el-input
                        placeholder="时间"
                        v-model="time">
                    <el-button slot="prepend" icon="el-icon-d-arrow-left" @click="encode"></el-button>
                </el-input>
            </el-col>
        </el-row>
        <el-row type="flex" justify="center">

        </el-row>
        <el-row type="flex" justify="center">

        </el-row>
    </div>
</template>

<script>
    import dayjs from 'dayjs';

    export default {
        data() {
            return {
                unit: 'second',
                timestamp: dayjs().unix(),
                time: ''
            }
        },
        methods: {
            decode: function () {
                let millisecond = this.unit === 'second' ? this.timestamp * 1000 : this.timestamp;
                this.time = dayjs(millisecond).format('YYYY-MM-DD HH:mm:ss');
            },
            encode: function () {
                let day = dayjs(this.time);
                this.timestamp = this.unit === 'second' ? day.unix() : day.valueOf();
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
    .el-select .el-input {
        width: 80px;
    }
</style>