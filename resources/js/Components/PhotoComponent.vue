<template>
    <div class="photo">
        <transition appear>
            <img src="../../../public/Assets/1688841381967.jpeg" alt="Handsome Man With A Beard ;)" class="photo-img">
        </transition>
    </div>
</template>

<script>
export default {
    name: 'PhotoComponent',

    mounted() {
        setTimeout(() => {
            const photoImg = this.$el.querySelector('img');
            photoImg.classList.add('enter-active');
        }, 0);
    },
};
</script>

<style scoped>

img {
    border-radius: 100%;
    height: 200px;
    border-style: solid;
    border-width: 0px;
    border-color: #a931b6;
    opacity: 0.1;
    transition: opacity 1s ease-in-out;
}

.photo img.enter-active {
    opacity: 1;
}
</style>