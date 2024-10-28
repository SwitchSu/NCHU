<script>
import about from '/images/About/aboutPC.png';
import aboutPhone from '/images/About/aboutPhone.png';
import member from '/images/About/member.svg';
import memberPhone from '/images/About/memberPhone.svg';
import result from '/images/About/result.svg';
import resultPhone from '/images/About/resultPhone.svg';

import { Navigation, Pagination, Mousewheel, Keyboard } from 'swiper/modules';
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/css';

import 'swiper/css/navigation';
import 'swiper/css/pagination';


export default {
    props: {
        response: Object,
    },
    components: {
        Swiper,
        SwiperSlide,
    },
    data() {
        return {
            inputData: this.response ?? '',
            images: {
                about, aboutPhone, member, memberPhone, result, resultPhone,
            },
            modules: [Navigation, Pagination, Mousewheel, Keyboard],
            Num: this.$page.props.response.rt_data.input ?? '',
            ClickNum: 1,
            show: false,
            screenWidth: false,
        }
    },
    mounted() {
        this.checkScreenWidth();
        window.addEventListener('resize', this.checkScreenWidth);
    },
    methods: {
        toggle() {
            if (this.ClickNum == 1) {
                return this.ClickNum = 2;
            } else {
                return this.ClickNum = 1;
            }
        },
        checkScreenWidth() {
            this.screenWidth = window.innerWidth >= 500;
        },
    }
}
</script>

<template>
    {{ inputData }}
    <div class="w-[100%] flex justify-center">
        <div class="main w-[100%] 2sm:w-[67%] mb-[70px]">
            <div class="title"><img :src="screenWidth ? images.about : images.aboutPhone" alt="" class="m-auto 2md:m-0">
            </div>
            <div :class="ClickNum == 1 ? 'all-2' : 'all'">
                <button @click="toggle()" class="OptionClick" type="button" v-if="Num == 1">單位介紹<i
                        class="fa-solid fa-chevron-down"></i></button>
                <button @click="toggle()" class="OptionClick" type="button" v-if="Num == 2">成員介紹<i
                        class="fa-solid fa-chevron-down"></i></button>
                <button @click="toggle()" class="OptionClick" type="button" v-if="Num == 3">相關法規<i
                        class="fa-solid fa-chevron-down"></i></button>
                <button @click="toggle()" class="OptionClick" type="button" v-if="Num == 4">表單下載<i
                        class="fa-solid fa-chevron-down"></i></button>
                <button @click="toggle()" class="OptionClick" type="button" v-if="Num == 5">成果展示<i
                        class="fa-solid fa-chevron-down"></i></button>
                <div :class="ClickNum == 2 ? 'SelectionOptionClick' : 'SelectionOption'">
                    <button @click="Num = 1, ClickNum = 1" class="OptionBtn" type="button">單位介紹</button>
                    <button @click="Num = 2, ClickNum = 1" class="OptionBtn" type="button">成員介紹</button>
                    <button @click="Num = 3, ClickNum = 1" class="OptionBtn" type="button">相關法規</button>
                    <button @click="Num = 4, ClickNum = 1" class="OptionBtn" type="button">表單下載</button>
                    <button @click="Num = 5, ClickNum = 1" class="OptionBtn" type="button">成果展示</button>
                </div>
            </div>
            <div class="SelectionBar w-[100%]">
                <button @click="Num = 1" :class="Num == 1 ? 'ClickColor' : 'SelectionBtn'" type="button">單位介紹</button>
                <button @click="Num = 2" :class="Num == 2 ? 'ClickColor' : 'SelectionBtn'" type="button">成員介紹</button>
                <button @click="Num = 3" :class="Num == 3 ? 'ClickColor' : 'SelectionBtn'" type="button">相關法規</button>
                <button @click="Num = 4" :class="Num == 4 ? 'ClickColor' : 'SelectionBtn'" type="button">表單下載</button>
                <button @click="Num = 5" :class="Num == 5 ? 'ClickColor' : 'SelectionBtn'" type="button">成果展示</button>
            </div>
            <div v-if="Num == 1" class="w-[90%] 2sm:w-[100%] m-auto md:mt-[-1.5vw]">
                <div class="content">
                    <span
                        class="h2">中興大學推廣教育組以履行高等技職回流教育使命及推動終身學習為核心目標。我們充分運用學校充沛的資源，舉辦委託培訓等專業推廣教育計畫。同時，根據社會需求精心規劃學分班和非學分班課程，旨在為有志於進修的社會成員提供寶貴機會，協助其深化專業領域，同時提升生活技能。</span>
                </div>
                <div class="content">
                    <span class="h1">願景</span><br>
                    <span class="h2">成為社會大眾、就業人士、青年、學童的智慧學習之平台為目標，期望能成為大家信任終生學習的知識平台。</span>
                </div>
                <div class="content">
                    <span class="h1">服務內容</span><br>
                    <span
                        class="h2">中興大學推廣教育組以履行高等技職回流教育使命及推動終身學習為核心目標。我們充分運用學校充沛的資源，舉辦委託培訓等專業推廣教育計畫。同時，根據社會需求精心規劃學分班和非學分班課程，旨在為有志於進修的社會成員提供寶貴機會，協助其深化專業領域，同時提升生活技能。</span>
                </div>
                <div class="content">
                    <span class="h1">發展使命</span><br>
                    <span class="h2">配合政府政策 以優良的教育訓練品質 引領產業朝趨勢前進。</span>
                </div>
                <div class="content">
                    <span class="h1">核心價值</span><br>
                    <span class="h2">終生學習、多元發展、創造價值。</span>
                </div>
                <div class="content">
                    <span class="h1">經營目標</span><br>
                    <span class="h2">1.提供「人才與產業需求無縫接軌」所需之課程<br>
                        2.打造終身學習機會<br>
                        3.培育具創新思維之人才</span>
                </div>
                <div class="content">
                    <span class="h1">訓練政策</span><br>
                    <span class="h2">1.配合政府政策推動，結合學術專業優勢，開拓人才培訓資源，發展特色培訓課程。<br>
                        2.結合各學院教育特色、應用產業與核心訓練類別，提供優質教育訓練。<br>
                        3.運用社會資源，提供多元專業訓練，以提升產業人才職能與競爭力，創造產官學訓四贏局面。</span>
                </div>
                <div class="content">
                    <span class="h1">訓練承諾</span><br>
                    <span class="h2">1.秉持持續改善精神，致力提供專業訓練課程及輔導協助，以培育優秀專業人才，進而提昇學員個人職場職能之水平。<br>
                        2.期以用心專業的服務，營造快樂學習、創造價值的學習環境。<br>
                        3.提供學費優惠機制，減低學員學習成本。</span>
                </div>
            </div>
            <div v-if="Num == 2" class="w-[100%] flex flex-wrap justify-around">
                <div class="members">
                    <div><img class="mem" :src="screenWidth ? images.member : images.memberPhone" alt=""></div>
                    <div class="info">
                        <p>主任秘書</p>
                        <p class="name">王大詹</p>
                        <div class="contact">
                            <div class="w-[12%] 2sm:w-[15%] md:w-[16%]">
                                <p>電話 |</p>
                                <p>信箱 |</p>
                            </div>
                            <div class="w-[70%]">
                                <p>0212312312 #1234</p>
                                <p>a123456789123456789@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="members">
                    <div><img class="mem" :src="screenWidth ? images.member : images.memberPhone" alt=""></div>
                    <div class="info">
                        <p>主任秘書</p>
                        <p class="name">王大詹</p>
                        <div class="contact">
                            <div class="w-[12%] 2sm:w-[15%] md:w-[16%]">
                                <p>電話 |</p>
                                <p>信箱 |</p>
                            </div>
                            <div class="w-[70%]">
                                <p>0212312312 #1234</p>
                                <p>a123456789123456789@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="members">
                    <div><img class="mem" :src="screenWidth ? images.member : images.memberPhone" alt=""></div>
                    <div class="info">
                        <p>主任秘書</p>
                        <p class="name">王大詹</p>
                        <div class="contact">
                            <div class="w-[12%] 2sm:w-[15%] md:w-[16%]">
                                <p>電話 |</p>
                                <p>信箱 |</p>
                            </div>
                            <div class="w-[70%]">
                                <p>0212312312 #1234</p>
                                <p>a123456789123456789@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="members">
                    <div><img class="mem" :src="screenWidth ? images.member : images.memberPhone" alt=""></div>
                    <div class="info">
                        <p>主任秘書</p>
                        <p class="name">王大詹</p>
                        <div class="contact">
                            <div class="w-[12%] 2sm:w-[15%] md:w-[16%]">
                                <p>電話 |</p>
                                <p>信箱 |</p>
                            </div>
                            <div class="w-[70%]">
                                <p>0212312312 #1234</p>
                                <p>a123456789123456789@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="members">
                    <div><img class="mem" :src="screenWidth ? images.member : images.memberPhone" alt=""></div>
                    <div class="info">
                        <p>主任秘書</p>
                        <p class="name">王大詹</p>
                        <div class="contact">
                            <div class="w-[12%] 2sm:w-[15%] md:w-[16%]">
                                <p>電話 |</p>
                                <p>信箱 |</p>
                            </div>
                            <div class="w-[70%]">
                                <p>0212312312 #1234</p>
                                <p>a123456789123456789@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="members">
                    <div><img class="mem" :src="screenWidth ? images.member : images.memberPhone" alt=""></div>
                    <div class="info">
                        <p>主任秘書</p>
                        <p class="name">王大詹</p>
                        <div class="contact">
                            <div class="w-[12%] 2sm:w-[15%] md:w-[16%]">
                                <p>電話 |</p>
                                <p>信箱 |</p>
                            </div>
                            <div class="w-[70%]">
                                <p>0212312312 #1234</p>
                                <p>a123456789123456789@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div v-if="Num == 3" class="w-[90%] 2sm:w-[100%] m-auto">
                <button type="button" class="news" href="">
                <div>2024.01.01</div>
                <div>國立中興大學辦理推廣教育注意事項</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </button>
                <button type="button" class="news" href="">
                <div>2024.01.01</div>
                <div>國立中興大學辦理推廣教育注意事項</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </button>
                <button type="button" class="news" href="">
                <div>2024.01.01</div>
                <div>國立中興大學辦理推廣教育注意事項</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </button>
                <button type="button" class="news" href="">
                <div>2024.01.01</div>
                <div>國立中興大學辦理推廣教育注意事項</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </button>
                <button type="button" class="news" href="">
                <div>2024.01.01</div>
                <div>國立中興大學辦理推廣教育注意事項</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </button>
                <button type="button" class="news" href="">
                <div>2024.01.01</div>
                <div>國立中興大學辦理推廣教育注意事項</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </button>
                <button type="button" class="news" href="">
                <div>2024.01.01</div>
                <div>國立中興大學辦理推廣教育注意事項</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </button>
                <button type="button" class="news" href="">
                <div>2024.01.01</div>
                <div>國立中興大學辦理推廣教育注意事項</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </button>
                <button type="button" class="news" href="">
                <div>2024.01.01</div>
                <div>國立中興大學辦理推廣教育注意事項</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </button>
                <button type="button" class="news" href="">
                <div>2024.01.01</div>
                <div>國立中興大學辦理推廣教育注意事項</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </button>
            </div>
            <div v-if="Num == 4" class="w-[90%] 2sm:w-[100%] m-auto">
                <button type="button" class="news" >
                <div>2024.01.01</div>
                <div class="truncate">國立中興大學辦理推廣教育注意事項</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </button>
                <button type="button" class="news" >
                <div>2024.01.01</div>
                <div class="truncate">國立中興大學辦理推廣教育注意事項</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </button>
                <button type="button" class="news" >
                <div>2024.01.01</div>
                <div class="truncate">國立中興大學辦理推廣教育注意事項</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </button>
                <button type="button" class="news" >
                <div>2024.01.01</div>
                <div class="truncate">國立中興大學辦理推廣教育注意事項</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </button>
                <button type="button" class="news" >
                <div>2024.01.01</div>
                <div class="truncate">國立中興大學辦理推廣教育注意事項</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </button>
                <button type="button" class="news" >
                <div>2024.01.01</div>
                <div class="truncate">國立中興大學辦理推廣教育注意事項</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </button>
                <button type="button" class="news" >
                <div>2024.01.01</div>
                <div class="truncate">國立中興大學辦理推廣教育注意事項</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </button>
                <button type="button" class="news" >
                <div>2024.01.01</div>
                <div class="truncate">國立中興大學辦理推廣教育注意事項</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </button>
                <button type="button" class="news" >
                <div>2024.01.01</div>
                <div class="truncate">國立中興大學辦理推廣教育注意事項</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </button>
                <button type="button" class="news" >
                <div>2024.01.01</div>
                <div class="truncate">國立中興大學辦理推廣教育注意事項</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </button>
            </div>
            <div v-if="Num == 5" class="w-[100%] flex flex-wrap justify-evenly md:justify-evenly">
                <div class="results">
                    <div><img class="reimg" :src="screenWidth ? images.result : images.resultPhone" alt=""></div>
                    <div class="recard">
                        <p>2022.01.01</p>
                        <p class="card-title">有氧鬆筋雕塑</p>
                        <p class="card-content">一個人走得快，一群人走得遠，一同在教室揮灑汗水。</p>
                        <button type="button" class="more" @click="show = true">了解更多<i
                                class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="results">
                    <div><img class="reimg" :src="images.result" alt=""></div>
                    <div class="recard">
                        <p>2022.01.01</p>
                        <p class="card-title">有氧鬆筋雕塑</p>
                        <p class="card-content">一個人走得快，一群人走得遠，一同在教室揮灑汗水。</p>
                        <button type="button" class="more" @click="show = true">了解更多<i
                                class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="results">
                    <div><img class="reimg" :src="images.result" alt=""></div>
                    <div class="recard">
                        <p>2022.01.01</p>
                        <p class="card-title">有氧鬆筋雕塑</p>
                        <p class="card-content">一個人走得快，一群人走得遠，一同在教室揮灑汗水。</p>
                        <button type="button" class="more" @click="show = true">了解更多<i
                                class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="results">
                    <div><img class="reimg" :src="images.result" alt=""></div>
                    <div class="recard">
                        <p>2022.01.01</p>
                        <p class="card-title">有氧鬆筋雕塑</p>
                        <p class="card-content">一個人走得快，一群人走得遠，一同在教室揮灑汗水。</p>
                        <button type="button" class="more" @click="show = true">了解更多<i
                                class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="results">
                    <div><img class="reimg" :src="images.result" alt=""></div>
                    <div class="recard">
                        <p>2022.01.01</p>
                        <p class="card-title">有氧鬆筋雕塑</p>
                        <p class="card-content">一個人走得快，一群人走得遠，一同在教室揮灑汗水。</p>
                        <button type="button" class="more" @click="show = true">了解更多<i
                                class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="results">
                    <div><img class="reimg" :src="images.result" alt=""></div>
                    <div class="recard">
                        <p>2022.01.01</p>
                        <p class="card-title">有氧鬆筋雕塑</p>
                        <p class="card-content">一個人走得快，一群人走得遠，一同在教室揮灑汗水。</p>
                        <button type="button" class="more" @click="show = true">了解更多<i
                                class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="results">
                    <div><img class="reimg" :src="images.result" alt=""></div>
                    <div class="recard">
                        <p>2022.01.01</p>
                        <p class="card-title">有氧鬆筋雕塑</p>
                        <p class="card-content">一個人走得快，一群人走得遠，一同在教室揮灑汗水。</p>
                        <button type="button" class="more" @click="show = true">了解更多<i
                                class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="w-[334px] 2md:w-[169px] md:w-[275px] opacity-0"></div>
                <div class="w-[334px] 2md:w-[169px] md:w-[275px] opacity-0"></div>
            </div>
        </div>
        <div v-if="show" class="w-[100%] h-[100%] absolute top-0">
            <div class="mask w-full h-full fixed z-[5] top-0 left-0 bg-black/50">
                <div class="modal">
                    <div class="my-[20px] text-center relative">
                        <div class="text-[14px] 2sm:text-[24px] md:text-[26px] font-[600] text-[#0057ff]">有氧鬆筋雕塑
                        </div>
                        <button type="button" @click="show = false"><i
                                class="fa-solid fa-xmark text-[21px] absolute top-[25%] right-0"></i></button>
                    </div>
                    <div class="flex flex-col text-[12px] 2sm:text-[20px] md:text-[22px] font-[500] text-center">
                        <div class="mb-[20px]">一個人走得快，一群人走得遠，一同在教室揮灑汗水。</div>
                    </div>
                    <swiper :cssMode="true" :navigation="true" :pagination="true" :mousewheel="true" :keyboard="true"
                        :modules="modules" class="mySwiper h-[50%] mt-[30px]">
                        <swiper-slide></swiper-slide>
                        <swiper-slide></swiper-slide>
                        <swiper-slide></swiper-slide>
                    </swiper>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.all {
    max-height: 12.4vh;
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

.all .OptionClick {
    font-weight: 800;
}

.all-2 .OptionClick {
    font-weight: 800;
}

.SelectionBar button {
    font-weight: 800;
}

.modal {
    @apply absolute z-[6] top-[5%] left-[16%] w-[68%] h-[90dvh] px-[3%] bg-white overflow-y-scroll;
}

@keyframes up {
    from {
        max-height: 12.4vh;
    }

    to {
        max-height: 30vh;
    }
}


.title {
    @apply mt-[20px] md:mt-[60px] mb-[10px] md:mb-[20px] 2md:w-[185px] md:w-[315px];
}

.SelectionBar {
    @apply md:font-[800];
    border-bottom: 2px solid black;
}

.SelectionBtn {
    padding: 0.48vw 1.46vw;
    border-radius: 1.04vw 1.04vw 0px 0px;
    font-size: 1.04vw;
    background-color: transparent;
    margin-right: 1vw;
    font-weight: 500;
}

.ClickColor {
    padding: 0.48vw 1.46vw;
    border-radius: 20px 20px 0px 0px;
    font-size: 1.04vw;
    font-family: inter;
    color: white;
    background-color: rgb(0, 87, 255);
    margin-right: 1vw;
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
    padding-bottom: 5px;
}

.OptionClick i {
    font-size: 12px;
}

.SelectionOptionClick {
    display: flex;
    flex-direction: column;
    font-size: 2.8vw;
}

.SelectionOption {
    display: none;
}

.news {
    @apply w-[100%] py-[10px] md:py-[20px] text-[3vw] 2sm:text-[1.8vw] md:text-[2vw] xl:text-[1.28vw] font-[800] border-b-[1px] 2sm:border-b-[2px] border-black flex justify-between md:gap-[4vw] xl:gap-[5vw];
}

.news:hover {
    @apply text-[#0057ff] duration-500;
}

.h1 {
    @apply text-[16px] 2sm:text-[14px] md:text-[1.35vw] font-[900] text-[#0057ff];
}

.h2 {
    @apply text-[14px] 2sm:text-[12px] md:text-[1.146vw];
}

.content {
    margin-top: 2.604vw;
    padding: 0px 1.04vw;
}

.swiper-slide {
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
    margin-left: 10px;
    margin-right: 10px;
}

.swiper-slide:nth-child(1) {
    background-image: url('/images/About/yoga-1.jpg');
}

.swiper-slide:nth-child(2) {
    background-image: url('/images/About/yoga-2.jpg');
}

.swiper-slide:nth-child(3) {
    background-image: url('/images/About/yoga-3.jpg');
}

.members {
    @apply w-[334px] h-[361px] 2md:w-[440px] 2md:h-[173px] md:w-[600px] md:h-[230px] mt-[20px] font-[700] flex flex-col 2md:flex-row bg-white shadow-lg;

}

.mem {
    @apply 2md:w-[173px] 2md:h-[173px] md:w-[230px] md:h-[230px];
}

.results {
    @apply w-[334px] h-[430px] 2sm:w-[242px] 2sm:h-[385px] 2md:w-[169px] 2md:h-[242px] md:w-[275px] md:h-[404px] bg-white mt-[20px] shadow-lg;
}

.reimg {
    /* @apply w-[334px] 2sm:w-[169px]; */
    @apply w-[100%];
}

.info {
    @apply text-[14px] pt-[20px] md:pl-[40px] md:text-[16px] break-all;
}

.recard {
    @apply text-[14px] 2md:text-[10px] md:text-[16px] font-[600] p-[25px] 2md:p-[15px] md:p-[25px] flex flex-col gap-[12px] 2md:gap-[9px] md:gap-[15px];
}

.card-title {
    @apply text-[22px] 2md:text-[14px] md:text-[22px] text-[#0057ff] font-[800];
}

.name {
    @apply text-[22px] md:text-[30px] text-[#0057ff] my-[15px];
}

.contact {
    @apply flex gap-[5px];
}

.card-content {
    @apply text-[16px] 2md:text-[10px] md:text-[16px];
}

.more {
    @apply text-[#0057ff] text-[14px] 2md:text-[8px] md:text-[14px] font-[800] mt-[3px] md:mt-[5px] ml-auto;
}

@media(max-width:900px) {
    .info {
        @apply text-[12px] pt-[40px] pl-[40px];
    }
}

@media(max-width:767px) {
    .info {
        @apply text-[12px] pt-[15px] pl-[20px];
    }

    .SelectionBtn {
        border-radius: 1.56vw 1.56vw 0px 0px;
        font-size: 1.56vw;
    }

    .ClickColor {
        border-radius: 1.56vw 1.56vw 0px 0px;
        font-size: 1.56vw;
    }
}

@media (max-width:568px) {
    .info {
        @apply text-[8px];
    }
}

@media (max-width:499px) {
    .OptionBtn {
        @apply font-[100];
    }

    .info {
        @apply text-[12px];
    }

    .SelectionBar {
        display: none;
    }

    .OptionClick {
        display: block;
    }
}</style>
