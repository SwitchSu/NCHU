<!-- 前台模板 -->

<script>
import FrontendHeader from '@/Components/Frontend/Template/FrontendHeader.vue';
import FrontendFooter from '@/Components/Frontend/Template/FrontendFooter.vue';

import frontendBackground from '/images/body/grid.svg';
import frontendBackgroundPad from '/images/body/smallGrid.svg';
import top from '/images/logo/top.png';

export default {
    components: {
        FrontendHeader,
        FrontendFooter,
    },
    data() {
        return {
            images: {
                frontendBackground, frontendBackgroundPad, top,
            },
            screenWidth: false,
        };
    },
    mounted() {
        this.checkScreenWidth();
        window.addEventListener('resize', this.checkScreenWidth);
    },
    methods: {
        checkScreenWidth() {
            this.screenWidth = window.innerWidth <= 768;
        },
        toTop() {
            this.$refs.frontendLayout.scrollTo({ top: 0, behavior: 'smooth' });
        },
    },
    watch: {
        // 監聽路由變化，回到頁面頂端
        '$page': {
            handler() {
                if (this.$refs.frontendLayout) {
                    this.$refs.frontendLayout.scrollTop = 0;
                }
            },
            deep: true,
        },
    },
};
</script>

<template>
    <section id="frontend-layout" ref="frontendLayout" class="h-[100dvh] overflow-x-hidden"
        :style="{ backgroundImage: `url(${screenWidth ? images.frontendBackgroundPad : images.frontendBackground})` }">
        <div>
            <FrontendHeader />

            <main>
                <slot />
            </main>
            <button @click="toTop()" class="goTop"><img :src="images.top" alt="" class="w-[50px] md:w-[63px]"></button>
            <FrontendFooter />
        </div>
    </section>
</template>

<style scoped>

.goTop {
    position: sticky;
    margin-bottom: 30px;
    bottom: 30px;
    float: right;
    right: 30px;
    z-index: 10;
    opacity: 0.9;
}


@media (max-width:768px) {
    .goTop {
        margin-bottom: 10px;
        right: 10px;
        bottom: 10px;
    }
}</style>
