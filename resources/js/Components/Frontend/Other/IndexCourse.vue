<script>
import laptopCourse from '/images/Course/laptopCourse.png';
import { Swiper, SwiperSlide } from 'swiper/vue';
import { EffectCards } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/effect-cards';
export default {
    components: {
        Swiper,
        SwiperSlide,
    },

    data() {
        return {
            modules: [EffectCards],
            imgs: {
                laptopCourse,
            },
            cards: [
                { title: '綠能溫室智慧環控實務班', type: '專業證照', tag1: '團隊', tag2: '實務班', tag3: '管理', tag4: '綠能', color: '#7dbda8', text: '在物聯網遠端控制催生第四波農業革命下，本計畫積極打造俱備環控自動化及農業生產知識人才，以垂直立體種植為架構，學習善用溫室設施。', link: 'https://elite.taiwanjobs.gov.tw/ClassSearch/Detail?UUID=B38ED0FDE9B34989A0DA2D56403CBEBE&SOURCE_TYPE=ELIT&fbclid=IwAR0JwbuW0bb_YR8W127wlIALqepRInPjsx8aja0hIwlZbrqvw08S82XAKhI', img_path:'/images/course/training.jpg' },
                { title: '樂活陶-No10', type: '單元手作', tag1: '樂齡', tag2: '手作', tag3: '陶藝', tag4: '藝術', color: '#21d2db', text: '捏陶能幫助樂齡們訓練手部的靈活度，還能幫助大腦不斷運作，思考捏陶步驟或發想新造型，最重要的是周圍都是同年齡層。', link: 'https://www.siileec.com/subject.php?sn=4346&fbclid=IwAR0NY-qTpIUc9M1FlK5-4kIfyjS8zi85ik-JIchGmuQzVL8tKJIm8XvPso4', img_path:'/images/course/made.png' },
                { title: '居家水電修繕入門班', type: '職業訓練', tag1: '水電', tag2: '入門', tag3: '修繕', tag4: '專業', color: '#ffcc00', text: '基本的居家水電維修絕對是值得投資的項目當家中水電出現小問題時，不必再擔心叫不到水電。', link:  'https://www2.nchu.edu.tw/news-detail/id/56627', img_path:'/images/main/engineerIMG.jpg' },
                { title: '一般專案經理證照培訓班', type: '專業證照', tag1: '新手', tag2: '培訓班', tag3: '管理', tag4: '證照', color: '#db5621', text: '專案經理是現在團隊中不可或缺的角色，擁有專業的證照能夠提升個人競爭力並開啟更廣況的職業發展道路。', link:  'https://www.siileec.com/subject.php?sn=4312', img_path:'/images/course/fakeIMG.jpg' },
            ],
            topCardIndex: 3,
        }
    },

    methods: {

        handleMouseWheel(event) {
            const deltaY = event.deltaY;
            const direction = deltaY > 0 ? 'down' : 'up';

            if (direction === 'down') {
                if (this.topCardIndex > 0 && this.topCardIndex < this.cards.length) {
                    this.cards[this.topCardIndex] = { ...this.cards[this.topCardIndex], transform: 'translateY(93%)', };
                    this.topCardIndex--;
                }
            } else if (direction === 'up') {
                if (this.topCardIndex < this.cards.length - 1) {
                    this.topCardIndex++;
                    this.cards[this.topCardIndex] = { ...this.cards[this.topCardIndex], transform: 'translateY(0%)', };
                }
            }
        },
        resetCards() {
            this.cards.forEach((card, index) => {
                setTimeout(() => {
                    this.cards[index] = { ...card, transform: 'translateY(0%)' };
                }, index * 100);
            });
            this.topCardIndex = 3;

        },

    }
}
</script>
<template>
    <div class="w-[90%] mb-[26.6vw] 2sm:mb-[13vw] md:w-[80%] m-auto">
        <div class="hidden-on-desktop flex justify-center items-center mb-[5%]">
            <section class=" w-[90vw] py-[3%] flex flex-col justify-center items-center overflow-hidden "
                @mouseleave="resetCards">
                <div class="  mb-[15vw]  w-[45.7vw] h-[20.51vw]  2md:ml-[58vw] 2md:mb-[2vw] 2md:w-[27.97vw]" v-motion :initial="{ opacity: 0, x: -200 }" :visibleOnce="{ opacity: 1, x: 0, transition: {duration: 800,} }">
                    <img :src="imgs.laptopCourse" alt="">
                </div>
                <div class="card-tip" v-motion :initial="{ opacity: 0, x: 200 }" :visibleOnce="{ opacity: 1, x: 0, transition: {duration: 800,} }"><i class="fa-solid fa-arrow-left"></i> 左右滑動圖片 <i class="fa-solid fa-arrow-right"></i>
                </div>
                <div class=" w-[118.8vw] h-[80vw] 2md:w-[90vw] 2md:h-[45vw]" v-motion :initial="{ opacity: 0, x: 200 }" :visibleOnce="{ opacity: 1, x: 0, transition: {duration: 800,} }">
                    <swiper class=" swiper  ml-[16.24vw]  2sm:ml-[11vw] h-[70vw]  relative" :effect="'cards'"
                        :grabCursor="true" :modules="modules" :loop="true">
                        <swiper-slide v-for="(card, index) in cards" :key="index" class="swiper-slide"
                            :style="{ backgroundColor: card.color,backgroundImage: 'url(' + card.img_path + ')', backgroundSize: '100%', backgroundPosition:'50%  2%', boxShadow: 'inset 0px -40vw 100px 1px rgba(0, 0, 0, 0.3)',backgroundRepeat: 'no-repeat'}">
                            <a :href="card.link">
                                <div class="card flex flex-col justify-end">
                                    <div class="card-type">{{ card.type }}</div>
                                    <div class="card-title flex flex-wrap w-[230px] mb-[2vw] 2sm:w-[800px] 2sm:mb-[0px]">{{ card.title }}</div>
                                    <div class="card-tags flex flex-wrap w-[230px] 2sm:w-[800px]">
                                        <div v-for="tag in [card.tag1, card.tag2, card.tag3, card.tag4]" :key="tag.id"
                                            class="card-tag">#{{ tag }}</div>
                                    </div>
                                </div>
                            </a>
                        </swiper-slide>
                    </swiper>
                </div>
            </section>
        </div>
        <div class=" hidden-on-laptop flex justify-center items-center mb-[5%]">
            <section class=" w-[67.39vw] py-[3%] flex justify-center items-center  overflow-hidden"
                @mouseleave="resetCards">
                <div class="w-[40.41vw] h-[33.85vw]"  v-motion :initial="{ opacity: 0, x: -200 }" :visibleOnce="{ opacity: 1, x: 0, transition: {duration: 800,} }">
                    <div class="cards h-[24.37vw] relative" @wheel.prevent="handleMouseWheel">
                        <div v-for="card in cards" :key="card.id" class="card "
                            :style="{ transform: card.transform, backgroundColor: card.color ,backgroundImage: 'url(' + card.img_path + ')', backgroundSize: 'cover', backgroundPosition:'50%  2%', boxShadow: 'inset 0px -12.5vw 50px 1px rgba(0, 0, 0, 0.3)' }">
                            <a :href="card.link">
                                <div class="card flex flex-col justify-end">
                                    <div class="card-type">{{ card.type }}</div>
                                    <div class="card-title">{{ card.title }}</div>
                                        <div class="card-tags flex">
                                            <div v-for="tag in [card.tag1, card.tag2, card.tag3, card.tag4]" :key="tag.id"
                                                class="card-tag">#{{ tag }}
                                            </div>
                                        </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-[27.7vw] h-[34.59] " v-motion :initial="{ opacity: 0, x: 200 }" :visibleOnce="{ opacity: 1, x: 0, transition: {duration: 800,} }">
                    <div class="mt-[-3.47vw]  w-[27.7vw] h-[13.84vw]  ">
                        <div class="provide w-[27.7vw] h-[13.84vw] ">
                            <div class="w-[27.7vw] pl-[5.76vw]  arrow tracking-[-1px] xl:tracking-[-3px]"><span
                                    class="mr-[1.07vw]">Latest</span>最新
                            </div>
                            <div class=" w-[27.7vw]  pl-[8.54vw] mt-[-2.78vw] flex gap-[0.81vw] tracking-[-3px] row ">
                                課程<span class="mt-[0.81vw] tracking-[-1px] xl:tracking-[-3px]">course</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-[26.92vw] h-[20.31vw] mt-[2.69vw] relative flex flex-col justify-end ">
                        <transition name="slide-down">
                            <div v-if="topCardIndex === 0"
                                class="trans-title w-[27.79vw]  h-[8.38vw] title pl-[4.16vw]  mb-[0.053vw]">
                                {{ cards[0].title }}</div>
                            <div v-else-if="topCardIndex === 1"
                                class="trans-title w-[27.79vw]  h-[8.38vw] title pl-[4.16vw]  mb-[0.053vw]">
                                {{ cards[1].title }}</div>
                            <div v-else-if="topCardIndex === 2"
                                class="trans-title w-[27.79vw]  h-[8.38vw] title pl-[4.16vw]  mb-[0.053vw]">
                                {{ cards[2].title }}</div>
                            <div v-else-if="topCardIndex === 3"
                                class="trans-title w-[27.79vw]  h-[8.38vw] title pl-[4.16vw]  mb-[0.053vw] ">
                                {{ cards[3].title }}</div>
                        </transition>
                        <transition name="slide-down-content">
                            <div v-if="topCardIndex === 0"
                                class="trans-content w-[27.79vw] h-[8.97vw] intro pl-[4.16vw] pt-[1.107vw] mb-[0.053vw]">{{
                                    cards[0].text }}</div>
                            <div v-else-if="topCardIndex === 1"
                                class="trans-content w-[27.79vw] h-[8.97vw] intro pl-[4.16vw] pt-[1.107vw] mb-[0.053vw]">{{
                                    cards[1].text }}</div>
                            <div v-else-if="topCardIndex === 2"
                                class="trans-content w-[27.79vw] h-[8.97vw] intro pl-[4.16vw] pt-[1.107vw] mb-[0.053vw]">{{
                                    cards[2].text }}</div>
                            <div v-else-if="topCardIndex === 3"
                                class="trans-content w-[27.79vw] h-[8.97vw] intro pl-[4.16vw] pt-[1.107vw] mb-[0.053vw] ">{{
                                    cards[3].text }}
                            </div>
                        </transition>
                        <transition name="slide-down-more">
                            <div v-if="topCardIndex === 0" class="trans-more w-[26.9vw]  flex justify-end more "><a
                                    :href="cards[0].link">了解更多<i class="fa-solid fa-arrow-right"></i>
                                </a></div>
                            <div v-else-if="topCardIndex === 1" class="trans-more w-[26.9vw] flex justify-end more "><a
                                    :href="cards[1].link">了解更多<i class="fa-solid fa-arrow-right"></i> </a></div>
                            <div v-else-if="topCardIndex === 2" class="trans-more w-[26.9vw] flex justify-end more "><a
                                    :href="cards[2].link">了解更多 <i class="fa-solid fa-arrow-right"></i> </a></div>
                            <div v-else-if="topCardIndex === 3" class="trans-more w-[26.9vw] flex justify-end more "><a
                                    :href="cards[3].link">了解更多 <i class="fa-solid fa-arrow-right"></i> </a></div>
                        </transition>
                    </div>

                </div>
            </section>
        </div>
    </div>
</template>
<style scoped>
.swiper {
    @apply w-[69vw] h-[100%] 2sm:w-[67.35vw] 2sm:h-[44.15vw];
}

.swiper-slide {
    @apply px-[2vw]
}


/* transition */

.trans-content,
.trans-title,
.trans-more {
    @apply absolute;
}

.trans-title {
    top: 2.03vw;
}

.trans-content {
    top: 10.56vw;
}

.trans-more {
    top: 18.68vw;
}

/* transition-title */
.slide-down-enter-active {
    transition: 0.5s ease-in;
}

.slide-down-leave-active {
    transition: 0.2s ease-out;
}

.slide-down-enter-from {
    opacity: 0;
    transform: translateY(-2.6vw);
}

.slide-down-leave-to {
    opacity: 0;
    transform: translateY(1.56vw);
}

/* transition-content */
.slide-down-content-enter-active {
    transition: 0.5s ease-in;
}

.slide-down-content-leave-active {
    transition: 0.2s ease-out;
}

.slide-down-content-enter-from {
    opacity: 0;
    transform: translateY(-2.08vw);
}

.slide-down-content-leave-to {
    opacity: 0;
    transform: translateY(1.56vw);
}

/* transition-moreLink*/
.slide-down-more-enter-active {
    transition: 0.5s ease-in;
}

.slide-down-more-leave-active {
    transition: 0.2s ease-out;
}

.slide-down-more-enter-from {
    opacity: 0;
    transform: translateY(-2.08vw);
}

.slide-down-more-leave-to {
    opacity: 0;
    transform: translateY(1.56vw);
}



/* Card Styles */
.card:nth-child(1) {
    @apply top-[0] 2sm:top-[0] md:top-[0];
}

.card:nth-child(2) {
    @apply top-[6.7vw] 2sm:top-[5.6vw] md:top-[3.125vw];
}

.card:nth-child(3) {
    @apply top-[13.4vw] 2sm:top-[11.2vw] md:top-[6.33vw];
}

.card:nth-child(4) {
    @apply top-[20.1vw] 2sm:top-[16.8vw] md:top-[9.5vw];
}

.card-tip {
    @apply text-[3vw] 2sm:text-[2.5vw] font-bold mb-[1.5vw];
    font-family: 'Inter', sans-serif;
}

.card {

    @apply w-[86.26vw] h-[78vw] p-[2.05vw]
    /*變版*/
    2sm:w-[65.35vw] 2sm:h-[43.15vw] sm:p-[1.56vw]
    /* 變版||原版 */
    md:w-[38.38vw] md:h-[24.37vw] md:p-[1.56vw] absolute cursor-pointer border-dotted;
    transition: 0.5s ease-in-out;
    transform-origin: bottom center;
    will-change: transform;
}

/* Card Content Styles */
.card-title {
    @apply text-[5.5vw]
    /* 變版 */
    2md:text-[3.54vw]
    /* 變版||原版 */
    md:text-[1.97vw] font-bold text-[#ffffff];
    font-family: 'Noto Sans TC', sans-serif;
}

.card-tag {
    @apply bg-[#ffffff] text-[3vw] mr-[1.19vw] px-[2.39vw] py-[0.93vw] mt-[1vw]
    /* 變版 */
    2md:text-[1.76vw] 2md:mr-[0.93vw] 2md:px-[1.87vw] 2md:py-[0.73vw] 2md:mt-[1.4vw]
    /* 變版||原版 */
    md:text-[0.98vw] md:mr-[0.52vw] md:px-[1.04vw] md:py-[0.41vw] md:mt-[0.78vw] font-bold rounded-full;
    font-family: 'Inter', sans-serif;
}

.card-type {
    @apply w-[18vw] py-[0.92vw] text-[3vw] mb-[1.88vw]
    /* 變版 */
    2md:w-[12.79vw] 2md:py-[0.72vw] 2md:text-[1.76vw] 2md:mb-[1.47vw]
    /* 變版||原版 */
    md:w-[7.11vw] md:py-[0.40vw] md:text-[0.98vw] md:mb-[0.82vw] text-white border-white border-[1px] border-solid rounded-full font-semibold flex justify-center items-center;
    font-family: 'Inter', sans-serif;
}

/* Provide Styles */
.provide {
    @apply text-[4.94vw] font-bold;
    font-family: 'Noto Sans TC', sans-serif;
}

.provide span {
    @apply text-[2.6vw] font-bold;
    font-family: 'Inter', sans-serif;
}

/* Row Styles */
.row {
    position: relative;
}

.row:after {
    @apply absolute top-[4.34vw] left-[22.04vw] w-[6.45vw] h-[5.9vw] bg-no-repeat bg-right bg-[length:4.56vw_4.56vw] rotate-90;
    content: "";
    background-image: url('/images/banner/blue-row.png');
}

/* Title Styles */
.title {
    @apply text-[3.75vw] text-[#0054ff] font-black;
    font-family: 'Noto Sans TC', sans-serif;
    line-height: 1.1;
}

/* Introduction Styles */
.intro {
    @apply text-[1.04vw] font-bold;
    line-height: 1.6;
    font-family: 'Noto Sans TC', sans-serif;
}

/* More Styles */
.more {
    @apply text-[1.04vw] font-extrabold text-[#000000] font-[800];
    font-family: 'Inter', sans-serif;
}

.more:hover{
    @apply text-[#0057FF];
}

/* 小於 768 像素時隱藏某個區塊 */
@media screen and (max-width: 767px) {
    .hidden-on-laptop {
        display: none;
    }
}

/* 大於等於 768 像素時隱藏某個區塊 */
@media screen and (min-width: 768px) {
    .hidden-on-desktop {
        display: none;
    }
}
</style>


