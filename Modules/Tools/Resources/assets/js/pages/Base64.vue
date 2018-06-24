<template>
    <div class="base64">
        <textarea v-model="input"></textarea>
        <button v-on:click="base64Encode">编码</button>
        <button v-on:click="base64Decode">解码</button>
        <textarea v-model="output"></textarea>
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

<style scoped>

</style>