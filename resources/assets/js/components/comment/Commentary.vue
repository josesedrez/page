<template>
    <div class="comment-body">
        {{ test }}
    </div>
</template>

<script>
export default {
    data() {
        return{
            test: 'TESTEEEEEE'
        }
    }
}
</script>

<style scoped>
    .comment-body{
        border: 1px solid red;
    }
</style>
