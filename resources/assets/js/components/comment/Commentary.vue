<template>
    <div class="comment-content text-center">
        <div>
            <h4>{{ test }}</h4>
        </div>
        <div class="comment-body">
            <div class="commentary" v-for></div>
        </div>
    </div>

</template>

<script>
export default {
    data() {
        return{
            test: 'Comentários',
            commentaries: {
                {
                    author: 'fulano',
                    description: 'uhaussahusahsuahauhsa'
                }
            }
        }
    }
}
</script>

<style scoped>
    .comment-content {
        border: 1px solid gray;
        align-content: center;
        align-items: center;
    }

    .comment-body {
        border: 1px solid gray;
    }
</style>
