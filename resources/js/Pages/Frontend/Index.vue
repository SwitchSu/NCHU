<!-- 前台首頁 -->

<script>
import frontendBackground from '/images/body/grid.svg';
import frontendBackgroundPad from '/images/body/smallGrid.svg';
import logo from '/images/logo/logo-loading.svg';

import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import IndexBanner from '@/Components/Frontend/Other/IndexBanner.vue';
import IndexMain from '@/Components/Frontend/Other/IndexMain.vue';
import IndexTrans from '@/Components/Frontend/Other/IndexTrans.vue';
import IndexCourse from '@/Components/Frontend/Other/IndexCourse.vue';
import IndexNews from '@/Components/Frontend/Other/IndexNews.vue';
import IndexContact from '@/Components/Frontend/Other/IndexContact.vue';

export default {
    props: { response: Array },
    components: {
        FrontendLayout,
        IndexBanner,
        IndexCourse,
        IndexMain,
        IndexNews,
        IndexContact,
        IndexTrans,
    },

    data() {
        return {
            show:false,
            stage: 1,
            screenWidth: false,
            images: {
                frontendBackground,
                frontendBackgroundPad,
                logo,
            }
        };
    },
    mounted() {
        this.show = true;
        this.checkScreenWidth();
        window.addEventListener('resize', this.checkScreenWidth);
    },
    methods: {
        checkScreenWidth() {
            this.screenWidth = window.innerWidth <= 768;
        },
        afterEnter() {
            this.stage = 2
        },
    },
};
</script>

<template>
    <div>
        <section v-if="stage == 1" id="frontend-layout" ref="frontendLayout"
            class="w-[100%] h-[100dvh] overflow-x-hidden flex justify-center items-center absolute z-[4] left-0"
            :style="{ backgroundImage: `url(${screenWidth ? images.frontendBackgroundPad : images.frontendBackground})` }">
            <transition name="fade" @after-enter="afterEnter">
                <div v-show="show" class="w-[90px] h-[100px] load" :style="{ backgroundImage: `url(${images.logo})` }">
                </div>
            </transition>
        </section>
        <FrontendLayout v-if="stage == 2">
            <div>
                <IndexBanner />
            </div>
            <div>
                <IndexMain :res-type="response" />
            </div>
            <div>
                <IndexTrans />
            </div>

            <div>
                <IndexCourse />
            </div>
            <div>
                <IndexNews />
            </div>
            <div>
                <IndexContact />
            </div>
        </FrontendLayout>
    </div>
</template>

<style scoped>
@keyframes loading {
    0% {
        @apply w-[90px];
    }

    100% {
        @apply w-[245px];
    }
}

.fade-enter-active,
.fade-leave-active {
    animation: loading 2s;
}
</style>
