
<script>
import blackRow from '/images/banner/black-row.png';
import indexP from '/images/banner/index-p.svg';

export default {
    data() {
        return {
            images: {
                blackRow,
                indexP,
            },
            show: false,
            stage: 1,
        };
    },
    mounted() {
        this.show = true;
    },
    methods: {
        showTwo() {
            this.stage = 2;
        },
        showThree() {
            this.stage = 3;
        }
    },
}
</script>

<template >
    <div class=" w-[90%] md:w-[80%] m-auto">
        <div class="  w-full md:w-[85%] m-auto mb-[10%] mt-[25%] 2sm:mt-[15%] md:mt-[8%]  lg:mt-[8%]  xl:mt-[6%] ">
            <div class="md:ml-0">
                <transition name="left-in" @after-enter="showTwo">
                    <div v-show="show" class=" font-title  row-one ">創新教育</div>
                </transition>
                <transition name="right-in" @after-enter="showThree">
                    <div v-show="show" class=" font-title   ml-[20vw] md:ml-[15.15vw] mt-[-3.4vw] row-two ">開啟無限可能</div>
                </transition>
                <transition name="right-in" @after-enter="showThree">
                    <div v-show="show" class="font-large ml-[30.4vw]  md:ml-[22.34vw] mt-[-1.3vw] row-three z-[1]">
                        Innovative education,
                    </div>
                </transition>
                <transition>
                    <div v-show="stage >= 2" class="left-p w-0 h-0 z-[0]"></div>
                </transition>
                <transition name="left-in" @after-enter="showTwo">
                    <div v-show="show" class="z-[2] font-large  ml-[14.2vw]  md:ml-[10.3vw]  mt-[-1.56vw] row-four">
                        unlocking limitless</div>
                </transition>
                <transition>
                    <div v-show="stage >= 2" class="circle-p w-0 h-0 z-[0]"></div>
                </transition>
                <transition>
                    <div v-show="stage >= 2" class="right-p w-0 h-0"></div>
                </transition>
                <transition name="right-in" @after-enter="showThree">
                    <div v-show="show" class="font-large  ml-[50vw] md:ml-[36vw] mt-[-2.23vw] row-five">possibilities.
                    </div>
                </transition>
                <transition name="left-in" @after-enter="showTwo">
                    <div v-show="show" class=" flex ml-[16.36vw] md:ml-[15.36vw] mb-[4.68vw] ">
                        <img class="z-[2] mr-[2.7vw] w-[6.8vw]  md:w-[4.68vw] " :src="images.blackRow" alt="">
                        <img class="z-[2] mr-[2.7vw] w-[6.8vw]  md:w-[4.68vw] " :src="images.blackRow" alt="">
                        <img class="z-[2] mr-[2.7vw] w-[6.8vw]  md:w-[4.68vw] " :src="images.blackRow" alt="">
                    </div>
                </transition>
            </div>
            <transition>
                <img v-show="stage >= 2" class=" indexP  md:w-[98%] m-auto" :src="images.indexP" alt="">
            </transition>
        </div>
    </div>
</template>

<style scoped>
/* transition */
/* left-in*/
.left-in-enter-active {
    transition: all 0.8s ease-out;
}

.left-in-enter-from {
    transform: translateX(-8%);
    opacity: 0;
}

.left-in-leave-to {
    transform: translateX(0%);
    opacity: 0;
}

/* right-in*/
.right-in-enter-active {
    transition: all 0.8s ease-out;
}

.right-in-enter-from {
    transform: translateX(8%);
    opacity: 0;
}

.right-in-leave-to {
    transform: translateX(0%);
    opacity: 0;
}

/* animation */
@keyframes upAnimation {
    0% {
        transform: translateY(26vw);
    }

    100% {
        transform: translateY(0%);
    }
}

/* CSS */
img {
    @apply grayscale;
}

.indexP {
    animation: upAnimation 1.3s ease;
}

img:hover {
    @apply filter-none;
}

.font-title {
    @apply text-[10.4vw] text-[10.4vw] md:text-[7.9vw] text-[#0057ff] font-black;
    font-family: 'Noto Sans TC', sans-serif;
    position: absolute;
    z-index: 2;
}

.font-large {
    @apply  text-[5.2vw] md:text-[3.33vw] text-[#000000] font-black tracking-[-1px] md:tracking-[-2px] lg:tracking-[-3px] font-bold;
    font-family: 'Inter', sans-serif;
}

.row-one,
.row-two,
.row-three,
.row-four,
.circle-p,
.right-p,
.left-p,
.row-five {
    @apply relative;
}

.row-one:after {
    @apply absolute left-[43vw] md:left-[32vw] bottom-[2.5vw] md:bottom-[1.7vw] w-[6.42vw] h-[6.42vw] md:w-[4.42vw] md:h-[4.42vw] bg-no-repeat bg-right bg-[length:6.42vw_6.42vw] md:bg-[length:4.42vw_4.42vw];
    content: "";
    background-image: url('/images/banner/blue-row.png');
}

.row-four:hover~.right-p:after,
.row-five:hover~.right-p:after,
.row-one:hover~.circle-p:after,
.row-two:hover~.circle-p:after {
    filter: none;
}

.row-two:after {
    @apply absolute left-[64vw] md:left-[48vw] bottom-[3vw] md:bottom-[2.29vw] w-[6.42vw] h-[6.42vw] md:w-[4.42vw] md:h-[4.42vw] bg-no-repeat bg-right bg-[length:6.42vw_6.42vw] md:bg-[length:4.42vw_4.42vw] rotate-90;
    content: "";
    background-image: url('/images/banner/blue-row.png');
}

.left-p:before {
    @apply absolute left-[0.53vw] bottom-[0vw] md:left-[0.52vw] md:top-[-11.45vw] h-[20vw] w-[23vw] md:h-[10.46vw] md:w-[28.59vw] bg-no-repeat bg-left duration-300 grayscale bg-[length:23vw_26vw] md:bg-[length:17.23vw_10.45vw] hover:filter-none;
    content: "";
    background-image: url('/images/banner/left-p.svg');
    animation: upAnimation 1.3s ease;
}

.row-five:before {
    @apply absolute left-[-7.8vw] bottom-[-5.7vw] md:left-[-6.25vw] md:bottom-[-3.64vw] h-[18.45vw] md:h-[11.45vw] w-[43.2vw] md:w-[30.20vw] bg-no-repeat bg-[length:43.2vw_18.45vw] md:bg-[length:30.2vw_11.45vw];
    content: "";
    background-image: url('/images/banner/draw_circle.gif');
}

.right-p:after {
    @apply absolute left-[68.12vw] top-[-3.02vw] md:left-[53.12vw] md:top-[-3.02vw] h-[14.25vw] w-[23.07vw] md:h-[11.25vw] md:w-[13.07vw] bg-no-repeat duration-300 bg-[length:23.07vw_14.25vw] md:bg-[length:13.07vw_11.25vw] grayscale hover:filter-none;
    content: "";
    background-image: url('/images/banner/right-p.svg');
    animation: upAnimation 1.3s ease;
}

.circle-p:after {
    @apply absolute left-[52vw] bottom-[21vw] md:left-[38.54vw] md:bottom-[12.9vw] h-[14vw] w-[14vw] md:h-[8.64vw] md:w-[8.64vw] bg-[length:14vw_14vw] md:bg-[length:8.64vw_8.64vw] bg-no-repeat duration-300 grayscale;
    content: "";
    background-image: url('/images/banner/circle-p.svg');
    animation: upAnimation 1.3s ease;
}
</style>
