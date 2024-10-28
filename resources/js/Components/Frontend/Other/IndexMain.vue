<script>
import camp from '/images/main/camp.svg';
import certificate from '/images/main/certificate.svg';
import handmade from '/images/main/hand-made.svg';
import sport from '/images/main/sport.svg';
import training from '/images/main/training.svg';
import blueRow from '/images/banner/blue-row.png';
import provide from '/images/main/provide.png';

export default {
    props: {
        resType: Array,
    },
    data() {
        return {
            course: this.resType ?? [],
            images: {
                camp, certificate, handmade, sport, training, blueRow, provide,
            },
        }
    },
}
</script>
<template>
    <main class="w-[90%] mb-[13.3vw] md:w-[80%] 2sm:mb-[4vw] m-auto">
        <div class="main">
            <div class="main-top top-1">
                <div v-motion :initial="{ opacity: 0, x: -300 }"
                    :visibleOnce="{ opacity: 1, x: 0, transition: { duration: 800, } }" class="big-title mb-[30px]">
                    <img :src="images.provide" alt="">
                </div>
                <ul v-motion :initial="{ opacity: 0, x: 300 }"
                    :visibleOnce="{ opacity: 1, x: 0, transition: { duration: 800, } }" class="list">
                    <li v-for="item in course.rt_data" :key="item.id">
                        <Link :href="route('course.type', item.id)">0{{ item.sort }}{{ item.name }}</Link><span class="ml-[10px]"
                            :class="{ 'hidden': item.sort == course.rt_data.length }">|</span>
                    </li>
                </ul>
            </div>
            <div class="main-top top-2">
                <div v-motion :initial="{ opacity: 0, x: -300 }"
                    :enter="{ opacity: 1, x: 0, transition: { delay: 1500, duration: 800, } }" class="big-title mb-[30px] m-auto 2md:ml-0">
                    <img :src="images.provide" alt="">
                </div>
                <ul v-motion :initial="{ opacity: 0, x: 300 }"
                    :enter="{ opacity: 1, x: 0, transition: { delay: 1500, duration: 800, } }" class="list">
                    <li v-for="item in course.rt_data" :key="item.id">
                        <Link :href="route('course.type', item.id)">0{{ item.sort }}{{ item.name }}</Link><span class="ml-[10px]"
                            :class="{ 'hidden': item.sort == course.rt_data.length }">|</span>
                    </li>
                </ul>
            </div>
            <div class="main-bottom">
                <div class="main-cards" v-for="item in course.rt_data" :key="item.id"
                    :class="{ 'card-border': item.sort == course.rt_data.length }" v-motion
                    :initial="{ opacity: 0, y: 300 }" :visibleOnce="{ opacity: 1, y: 0, transition: { duration: 800, } }">
                    <div class="card">
                        <div class="main-card">
                            <div class="title ml-[-10px]">0{{ item.sort }}</div>
                            <div class="title-name">{{ item.name }}</div>
                            <div class="content">{{ item.content }}</div>
                            <Link :href="route('course.type', item.id)" class="more">了解更多&nbsp<i class="fa-solid fa-arrow-right"></i>
                            </Link>
                        </div>
                        <a :href="route('course.type', item.id)" class="card-img"><img :src="item.img_path" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>
<style scoped>
.main-top {
    @apply flex justify-center pt-[63px] gap-[1.5%] mt-[-0.5%] mb-[5%];
}

.top-2 {
    @apply hidden;
}

.big-title {
    @apply w-[32%] text-[5vw] font-[700];
}

.list {
    @apply text-[1.15vw] font-[800] flex items-center justify-center flex-wrap gap-[1vw];
}

.list li:hover {
    @apply text-[#0057FF];
}

@media(max-width:1400px) {}

.main-cards {
    @apply w-[85%] mt-[-7%];
}

.card {
    @apply w-[100%] flex justify-evenly;
}

.main-card {
    @apply w-[30%] py-[10%];
}

.title,
.title-name {
    @apply text-[4vw] text-[#0057ff] font-[900];
}

.title-name {
    @apply float-right mt-[-6%] mb-[10px];
}

.content {
    @apply text-[1vw] font-[900] ml-[28%] md:ml-[20%] text-justify;
}

.more {
    @apply text-[1vw] font-[700] mt-[30px] float-right hover:text-[#0057ff];
}

.card-img {
    @apply w-[60%] flex;
    filter: grayscale(100%);
}

.card-img:hover {
    filter: none;
    transition: 0.3s;
}

.main-bottom {
    @apply flex items-center flex-col ml-[4%];
}

.main-cards.active {
    opacity: 1;
    transform: translateX(0%) scale(1);
}

@media(max-width:1400px) {
    .list {
        @apply text-[1.4vw];
    }

    .main-cards {
        @apply w-[95%];
    }

    .title,
    .title-name {
        @apply text-[4.3vw];
    }

    .content,
    .more {
        @apply text-[1.3vw];
    }
}

@media(max-width:768px) {
    .main-top {
        @apply flex-col pt-0;
    }

    .top-1 {
        @apply hidden;
    }
    .top-2 {
        @apply block;
    }
    .big-title {
        @apply w-[41%];
    }

    .list {
        @apply text-[2.3vw] mb-[30px];
    }

    .main-bottom {
        @apply gap-[40px];
    }

    .main-card {
        @apply w-[35%] py-[6%];
    }

    .card {
        @apply justify-between;
    }

    .title,
    .title-name {
        @apply text-[5.2vw] mb-[-10px];
    }

    .content {
        @apply text-[1.6vw] pt-[16px];
        clear: right;
    }

    .more {
        @apply text-[1.5vw] mt-[10px] font-[900];
    }
}

@media(max-width:500px) {
    .main-top {
        @apply items-center mb-0;
    }

    .big-title {
        @apply w-[65%];
    }

    .list {
        @apply text-[3.8vw] gap-[2vw];
    }

    .main-bottom {
        @apply gap-[20px];
    }

    .main-cards {
        @apply pt-[30px] border-b-[0.2vw] border-black;
    }

    .card {
        @apply flex flex-col;
    }

    .main-card {
        @apply w-[100%] order-2;
    }

    .title-name {
        @apply pr-[28vw];
    }

    .title,
    .title-name {
        @apply text-[9.6vw] m-0 inline-block text-left;
    }

    .card-img {
        @apply w-[100%];
    }

    .card-border {
        @apply border-0;
    }

    .content {
        @apply ml-0 px-[5%] text-[4.3vw] font-[600];
    }

    .more {
        @apply text-[3.8vw] mr-[22px] mt-[20px] font-[600];
    }

}</style>
