<script>
import { Link } from '@inertiajs/vue3';
import coursePC from '/images/coursePage/coursePC.png';
import coursePhone from '/images/coursePage/coursePhone.png';
export default {
    props: {
        resCourse: Object,
    },
    data() {
        return {
            Num: 1,
            ClickNum: 1,
            courses: this.resCourse.rt_data.courses ?? [],
            inputData: this.resCourse.rt_data.input ?? '',
            screenWidth: false,
            images: {
                coursePC, coursePhone,
            },
            screenScroll: 0,
        };
    },
    mounted() {
        this.checkScreenWidth();
        window.addEventListener('resize', this.checkScreenWidth);
    },
    computed: {
        getType() {
            if (this.inputData === 'all')
                return '全部課程';
            if (this.inputData === 'latest')
                return '最新課程';
            if (this.inputData == 1)
                return '兒童營隊';
            if (this.inputData == 2)
                return '單元手作';
            if (this.inputData == 3)
                return '運動課程';
            if (this.inputData == 4)
                return '職業訓練';
            if (this.inputData == 5)
                return '專業證照';
        },
    },
    methods: {
        toggle() {
            this.ClickNum = this.ClickNum === 1 ? 2 : 1;
        },
        checkScreenWidth() {
            this.screenWidth = window.innerWidth >= 500;
        },
    },
    components: { Link }
}
</script>
<template>
    <div class="w-[100%] 2sm:w-[85%]  m-auto flex  flex-col">
        <div class="title"><img :src="screenWidth ? images.coursePC : images.coursePhone" alt="" class="m-auto 2md:m-0">
        </div>
        <div class="w-[100%] 2sm:w-[90%] md:w-[80%] m-auto">
            <div :class="ClickNum == 1 ? 'all-2' : 'all'">
                <button @click="toggle()" class="OptionClick" type="button" v-if="Num == 1">{{ getType }}<i
                        class="fa-solid fa-chevron-down text-[3.2vw] mt-[1.6vw]"></i><img
                        class="w-[3vw] mt-1.5 ml-1 " :src="images.angleDown" alt=""></button>
                <Link :href="route('course.type', 'latest')"><button @click="toggle()" class="OptionClick" type="button"
                    v-if="Num == 2">最新課程<img class="w-[3vw] mt-1.5 ml-1 " :src="images.angleDown" alt=""></button></Link>
                <Link :href="route('course.type', type.id)" v-for="type in $page.props.classType.type" :key="type.id"><button
                    @click="toggle()" class="OptionClick" type="button" v-if="Num == 3">{{ type.name }}<img
                        class="w-[3vw] mt-1.5 ml-1 " :src="images.angleDown" alt=""></button></Link>
                <div :class="ClickNum == 2 ? 'SelectionOptionClick' : 'SelectionOption'">
                    <Link :href="route('course.type', 'all')">
                    <div @click="Num = 1, ClickNum = 1" class="OptionBtn">全部課程</div>
                    </Link>
                    <Link :href="route('course.type', 'latest')">
                    <div @click="Num = 2, ClickNum = 1" class="OptionBtn">最新課程</div>
                    </Link>
                    <Link :href="route('course.type', type.id)" v-for="type in $page.props.classType.type" :key="type.id">
                    <div @click="Num = 3, ClickNum = 1" class="OptionBtn">{{ type.name }}</div>
                    </Link>
                </div>
            </div>
            <div class="SelectionBar w-[99%]">
                <Link :href="route('course.type', 'all')"><button class="SelectionBtn"
                    :class="{ 'ClickColor': inputData == 'all' }" type="button">全部課程</button></Link>
                <Link :href="route('course.type', 'latest')"><button class="SelectionBtn"
                    :class="{ 'ClickColor': inputData == 'latest' }" type="button">最新課程</button></Link>
                <Link :href="route('course.type', type.id)" v-for="type in $page.props.classType.type" :key="type.id"><button
                    class="SelectionBtn" :class="{ 'ClickColor': inputData == type.id }" type="button">{{ type.name
                    }}</button></Link>
            </div>
        </div>
        <div
            class="w-[100%] 2sm:ml-[7.2vw] md:m-auto md:w-[80%] pt-[2.604vw] 2sm:pt-[3.3vw] md:pt-[1vw] md:pl-[1.5vw] py-[1%] flex gap-[3%] md:gap-[2.4vw] flex-wrap justify-center 2sm:justify-start">
            <div v-for="course in courses" :key="course.id" class="flex flex-col items-center bg-[#ffffff] w-[89vw] h-[350px] mb-[6.6vw] 2sm:w-[22vw] 2sm:h-[29.72vw] 2sm:mb-[2.5vw]
            md:mb-[1.5vw] md:w-[14.32vw] md:h-[19.06vw]  shadow-lg">
                <div class="w-full h-[500px] 2sm:w-[22vw] 2sm:h-[28.34vw] md:w-[14.32vw] md:h-[18.37vw]"
                    :style="{ backgroundImage: 'url(' + course.img_path + ')', backgroundSize: 'cover', backgroundPosition: 'center' }">
                </div>
                <div
                    class="flex flex-col justify-center items-start h-[100%] w-full 2sm:w-[22vw] md:w-[14.32vw] px-[6.6vw] 2sm:px-[1.6vw]  pt-[1.3vw] md:px-[0.78vw] md:pt-[0.52vw]">
                    <h1 class="card-name">{{ course.name }}</h1>
                    <ul>
                        <li class="card-text mt-[1vw]">課程日期 | {{ course.start_time.slice(0, 10) }} </li>
                        <li class="card-text ">課程價格 | {{ course.price === 0 ? 'Free' : '$' + course.price }}</li>
                    </ul>
                    <div class="flex  ml-auto 2sm:mt-auto mb-[1.04vw] px-[0.78vw] card-more"><a :href="course.link"
                            class=" border-b-[2px] border-[#ffffff] hover:border-b-[2px] hover:border-[#0057ff] ">了解更多 <i
                                class="fa-solid fa-arrow-right"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
/* .title {
    @apply text-[6.7vw] 2sm:text-[5.38vw] md:text-[3.38vw] font-bold;
    font-family: 'Inter', sans-serif;
} */
.title {
    @apply mt-[20px] md:mt-[60px] md:mb-[20px] 2md:w-[185px] md:w-[315px];
}

.card-name {
    @apply text-[6vw] 2sm:text-[1.92vw] md:text-[1.2vw] font-black text-[#0057ff] mb-[2.1vw] 2sm:mb-0;
    font-family: 'Noto Sans TC', sans-serif;
}

.card-text {
    @apply text-[4.3vw] 2sm:text-[1.28vw] md:text-[0.8vw] font-medium text-[#00000] mt-[0.50.8vw] tracking-[1.5px];
    font-family: 'Noto Sans TC', sans-serif;
}

.card-more {
    @apply text-[3.2vw] 2sm:text-[1.28vw] md:text-[0.8vw] text-[#0057ff] font-[800];
}

/*barton*/
.all {
    max-height: 1.4vh;
    overflow: hidden;
    animation-name: up;
    animation-duration: 0.5s;
    animation-timing-function: linear;
    animation-fill-mode: forwards;
}

.all-2 {
    max-height: 12.4vh;
    overflow: hidden;
}

@keyframes up {
    from {
        max-height: 12.4vh;
    }

    to {
        max-height: 40vh;
    }
}


.title {
    @apply mt-[20px] md:mt-[60px] 2sm:mb-[1vw] md:mb-[20px] 2md:w-[185px] md:w-[315px] 2sm:ml-[4vw] md:ml-[8.5vw];
}

.SelectionBar {
    border-bottom: 2px solid black;
}

.SelectionBtn {
    @apply py-[0.48vw] px-[1.46vw] text-[1.04vw] bg-transparent mr-[1vw];
    border-radius: 1.04vw 1.04vw 0px 0px;
    font-weight: 500;
}

.ClickColor {
    @apply py-[0.48vw] px-[1.46vw] text-[1.04vw] text-[#ffffff] bg-[#0057ff] mr-[1vw];
    border-radius: 20px 20px 0px 0px;
    font-family: inter;

}

.SelectionBtn:hover {
    background-color: rgb(210, 210, 210);
}


.OptionBtn {
    text-align: center;
    background-color: rgb(0, 87, 255);
    color: white;
    padding: 1.5vw 0px;
    border-bottom: 0.2vw solid rgba(255, 255, 255, 0.35);
    font-size: 2.8vw;
}

.OptionClick {
    width: 100%;
    text-align: center;
    border-bottom: 1px black solid;
    display: none;
}

.SelectionOptionClick {
    display: flex;
    flex-direction: column;
    font-size: 2.8vw;
}

.SelectionOption {
    display: none;
}

@media(max-width:768px) {
    .SelectionBtn {
        border-radius: 1.56vw 1.56vw 0px 0px;
        font-size: 1.56vw;
    }

    .ClickColor {
        border-radius: 1.56vw 1.56vw 0px 0px;
        font-size: 1.56vw;
    }
}

@media (max-width:500px) {

    .SelectionBar {
        display: none;
    }

    .title {
        font-size: 5.2vw;
        text-align: center;
        margin-bottom: 2.5vw;
    }

    .h1 {
        font-size: 3.2vw;
    }

    .h2 {
        font-size: 2.8vw;
    }

    .h3 {
        font-size: 4vw;
    }

    li {
        font-size: 3.2vw;
    }

    .OptionClick {
        display: inline-flex;
        justify-content: center;
        font-size: 4.2vw;
        font-weight: 800;
        padding-bottom: 2.13vw;
    }

    .Guide {
        flex-direction: column;
    }
}</style>


