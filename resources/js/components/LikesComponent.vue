<template>
    <span @click="addLike()" class="badge likesButton" :class="isLike ? 'bg-primary' : 'bg-danger'">{{ likesNumber }} <i class="far fa-thumbs-up"></i></span>
</template>

<script>
/*import { mapGetters } from 'vuex'*/

export default {
    computed: {
        isLike() {
            return this.$store.state.likeIt;
        },
        likesNumber() {
            return this.$store.getters.filmLikes;
        },
        /*...mapGetters('film', ['filmLikes']),*/
    },
    methods: {
        addLike(){
            this.$store.dispatch('addLike', {
                slug : this.$store.state.slug,
                increment: this.isLike
            })
        }
    },
    mounted() {
        console.log('Component mounted.')
    }
}
</script>

<style scoped>

.likesButton {
    cursor: pointer;
}

</style>
