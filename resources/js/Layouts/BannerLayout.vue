<script>
import bannerPC from '/images/banner/bannerPC.svg';
import bannerPhone from '/images/banner/bannerPhone.svg';
export default {
    data() {
        return {
            images: {
                bannerPC, bannerPhone,
            },
            screenWidth: false,
        }
    },
    mounted() {
        this.checkScreenWidth();
        window.addEventListener('resize', this.checkScreenWidth);
    },
    methods: {
        checkScreenWidth() {
            this.screenWidth = window.innerWidth > 375;
        }
    }
}
</script>
<template>
    <div class="mt-[60px]">
        <div class="w-full"><img class="w-full" :src="screenWidth ? images.bannerPC : images.bannerPhone" alt=""></div>
        <slot></slot>
    </div>
</template>
<style scoped>
    img {
        filter: grayscale(100%);
    }
    img:hover{
        filter: none;
    }
</style>
