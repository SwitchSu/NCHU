<script>
import latest from '/images/main/news.png';
import latestPhone from '/images/main/newsPhone.png';
export default {
    data() {
        return {
            images: {
                latest,
                latestPhone,
            },
            screenWidth: false,
        }
    },
    methods: {
        checkScreenWidth() {
            this.screenWidth = window.innerWidth >= 500;
        },
    },
    mounted() {
        this.checkScreenWidth();
        window.addEventListener('resize', this.checkScreenWidth);
    },
}
</script>
<template>
    <main class="w-[90%] mb-[40vw] 2sm:mb-[20vw] md:w-[80%] m-auto">
        <div class="all">
            <img v-motion :initial="{ opacity: 0, x: -200 }" :visibleOnce="{ opacity: 1, x: 0, transition: {duration: 800,} }"
                :src="screenWidth ? images.latest : images.latestPhone" alt="">
            <div ref="slide" v-motion :initial="{ opacity: 0, y: 300 }" :visibleOnce="{ opacity: 1, y: 0, transition: {duration: 800,} }">
                <Link :href="route('news.type', '1')" class="more">了解更多</Link>
                <div class="all-news">
                    <Link class="news" :href="route('news.type', '1')">
                    <div>2023.01.01</div>
                    <div>包含職業訓練、兒童營隊、專業證照、運動課程</div>
                    <div><i class="fa-solid fa-arrow-right"></i></div>
                    </Link>
                    <Link class="news" :href="route('news.type', '1')">
                    <div>2023.01.01</div>
                    <div>包含職業訓練、兒童營隊、專業證照、運動課程</div>
                    <div><i class="fa-solid fa-arrow-right"></i></div>
                    </Link>
                    <Link class="news" :href="route('news.type', '1')">
                    <div>2023.01.01</div>
                    <div>包含職業訓練、兒童營隊、專業證照、運動課程</div>
                    <div><i class="fa-solid fa-arrow-right"></i></div>
                    </Link>
                    <Link class="news" :href="route('news.type', '1')">
                    <div>2023.01.01</div>
                    <div>包含職業訓練、兒童營隊、專業證照、運動課程</div>
                    <div><i class="fa-solid fa-arrow-right"></i></div>
                    </Link>
                    <Link class="news" :href="route('news.type', '1')">
                    <div>2023.01.01</div>
                    <div>包含職業訓練、兒童營隊、專業證照、運動課程</div>
                    <div><i class="fa-solid fa-arrow-right"></i></div>
                    </Link>
                </div>
            </div>
        </div>
    </main>
</template>
<style scoped>
.all {
    @apply w-[83%] m-auto;
}

.title {
    @apply w-[32%] h-[252px] text-[95px] font-[700] pt-[10px] flex flex-col;
}

img {
    @apply w-[18vw];
    margin-bottom: 30px;
}

.title span {
    @apply text-[53%] font-[800];
}

.more {
    @apply text-[1.15vw] font-[700] border-b-[0.2vw] border-black hover:text-[#0057ff] hover:border-[#0057ff] float-right translate-y-[-2.5vw] translate-x-[-5vw] mt-[20px];
    margin-bottom: 20px;
}

.all-news {
    @apply w-[100%] flex flex-col justify-center ml-[8vw] translate-y-[-2vw];
}

.news {
    @apply w-[80%] py-[10px] text-[1.53vw] font-[800] border-b-[0.2vw] border-black flex justify-between gap-[5vw];
}

.news:hover {
    @apply text-[#0057ff] duration-500;
}


@media(max-width:768px) {
    img {
        @apply w-[25vw] ms-[-10%];
    }

    .more {
        @apply translate-x-0 text-[1.5vw];
    }

    .all-news {
        @apply ml-[0];
    }

    .news {
        @apply w-[100%] text-[1.9vw] border-b-[0.1vw] font-[700];
    }
}

@media(max-width:500px) {
    .all {
        @apply w-[90%];
    }

    img {
        @apply w-[47vw] m-auto;
    }

    .more {
        @apply text-[3vw] mb-[0px];
    }

    .all-news {
        @apply ml-[0];
    }

    .news {
        @apply text-[3.55vw] flex-col gap-0;
    }

    i {
        @apply hidden;
    }
}
</style>
