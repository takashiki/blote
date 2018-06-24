<template>
    <ul class="category">
       <li class="tool">
           <router-link :to="{path:'/base64'}">
               Base64 编解码
           </router-link>
       </li>
    </ul>
</template>

<script>
    export default {
        name: "Index"
    }
</script>

<style scoped>

</style>