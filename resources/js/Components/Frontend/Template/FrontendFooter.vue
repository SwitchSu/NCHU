<!-- 前台頁尾組件 -->

<script>
import { document } from 'postcss';
import logo from '/images/logo/logo.svg';

window.onscroll = function () {
    scrollFunction();
}

export default {
    data() {
        return {
            images: {
                logo,
            },
        };
    },
    methods: {

    },

};
</script>

<template>
    <footer class="w-[100%]  bg-white flex justify-center all">
        <div class="main w-[79%]">
            <div class="top">
                <div class="top-left">
                    <div class="logo">
                        <img class="w-[100%]" :src="images.logo" alt="中興大學推廣組Logo">
                    </div>
                    <div class="word">
                        <pre class="h1">聯絡電話  04 2284 0455</pre>
                        <pre class="h1">電子信箱  hello20131005@gmail.com</pre>
                        <pre class="h1">學校地址  40227台中市南區興大路145號(綜合教學大樓8樓804、805室)</pre>
                        <pre class="h1">製作人員  王亞筑 陳喬旭 蘇煒峻 林聖翰 陳瑋祥</pre>
                    </div>
                </div>
                <div class="top-right flex justify-end ">
                    <div class="content-3">
                        <div class="h2">消息資訊</div>
                        <div>
                            <Link class="h3" :href="route('news.type', '2')">最新消息</Link>
                        </div>
                    </div>
                    <div class="content-3">
                        <div class="h2">關於我們</div>
                        <div>
                            <Link class="h3" :href="route('about.type', '1')">單位介紹</Link>
                        </div>
                        <div>
                            <Link class="h3" :href="route('about.type', '2')">成員介紹</Link>
                        </div>
                        <div>
                            <Link class="h3" :href="route('about.type', '3')">相關法規</Link>
                        </div>
                        <div>
                            <Link class="h3" :href="route('about.type', '4')">表單下載</Link>
                        </div>
                        <div>
                            <Link class="h3" :href="route('about.type', '5')">成果展示</Link>
                        </div>
                    </div>
                    <div class="content-3">
                        <div class="h2">
                            <Link :href="route('course.type', 'all')">課程資訊</Link>
                        </div>
                        <div v-for="type in $page.props.classType.type" :key="type.id">
                            <Link class="h3" :href="route('course.type', type.id)">{{ type.name }}</Link>
                        </div>
                    </div>
                </div>
            </div>
            <div class="word-small">
                <pre class="h1">聯絡電話  04 2284 0455</pre>
                <pre class="h1">電子信箱  hello20131005@gmail.com</pre>
                <p class="h1 flex flex-wrap">學校地址 &nbsp;40227台中市南區興大路145號(綜合教學大樓8樓804、805室)</p>
                <pre class="h1">製作人員  王亞筑 陳喬旭 蘇煒峻 林聖翰 陳瑋祥</pre>
            </div>
            <div class="bottom flex ">
                <div class="formatH5">
                    <div class="h4">©2024 International College of Innovation and Industry Liaison, N.C.H.U.
                    </div>
                </div>
                <div class="flex gap-1 tabs">
                    <div class="informationBar">
                        <Link class="h4" :href="route('web.type', '1')">隱私權聲明 |</Link>
                    </div>
                    <div class="informationBar">
                        <Link class="h4" :href="route('web.type', '2')">智慧財產權聲明 |</Link>
                    </div>
                    <div class="informationBar">
                        <Link class="h4" :href="route('web.type', '3')">網站導覽 |</Link>
                    </div>
                    <div class="informationBar">
                        <Link class="h4" :href="route('web.type', '4')">網站意見回饋</Link>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<style scoped>
* {
    scroll-behavior: smooth;
}

.word-small {
    display: none;
    flex-direction: column;
    width: 100%;
    margin-top: 10%;
}

.main {
    display: flex;
    align-items: center;
    height: 100%;
    flex-direction: column;
}

.top {
    height: 70%;
    width: 100%;
    margin-top: 40px;
    display: flex;
}

.top-left {
    width: 50%;
    height: 100%;
}

.logo {
    width: 45%;
    margin-bottom: 18%;
}

.word {
    width: 100%;
    margin-bottom: 15%;
}

.h1 {
    font-size: 1.2vw;
    margin-bottom: 1%;
    font-weight: bold;
    font-family: 'Noto Sans TC', sans-serif;
}

.top-right {
    width: 50%;
    height: 100%;
}

.h2 {
    margin-bottom: 2.2vh;
    font-size: 1.35vw;
    font-weight: bold;
}

.h3 {
    font-size: 1vw;
    display: block;
    padding-bottom: 2.5vh;
}

.h4 {
    font-size: 0.9vw;
    font-family: 'Noto Sans TC', sans-serif;
}

.formatH5 {
    display: flex;
    justify-content: center;
    align-items: center;
    padding-top: 0.5vw;
}

.content-3 {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-left: 3vw;
}

.bottom {
    width: 100%;
    height: 27px;
    margin-bottom: 5%;
    position: relative;
    justify-content: space-between;
}

.bottom::before {
    content: "";
    position: absolute;
    right: -17vw;
    top: -7vh;
    background-image: url('/images/FooterIcon/Facebook-blue.svg');
    filter: grayscale(100%);
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
    width: 50%;
    height: 80%;

}

.bottom:hover::before {
    filter: none;
}


@media (max-width:1280px) {


    .bottom::before {
        top: -4vh;
        right: -16.5vw;
        height: 50%;
    }
}


@media (max-width:960px) {

    .bottom::before {
        top: -3vh;
        height: 1.3vw;
    }
}

@media (max-width:800px) {

    .bottom::before {
        top: -2vh;
    }
}

@media (max-width:768px) {

    .logo {
        width: 80%;
        margin-bottom: 26vh;
    }

    .bottom {
        flex-direction: column-reverse;
    }

    .bottom::before {
        top: -23vh;
        left: -9.5vw;
        height: 2vh;
    }

    .h1 {
        font-size: 1.8vw;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .h2 {
        font-size: 1.9vw;
        font-weight: bold;
    }

    .h3 {
        font-size: 1.5vw;
        padding-bottom: 1.5vh;
    }

    .h4 {
        font-size: 1.5vw;
        text-align: center;
    }

    .tabs {
        justify-content: center;
    }

    .word {
        margin-bottom: 9vh;
    }

    .main {
        width: 64%;
    }

}

@media (max-width:600px) {

    .bottom::before {
        top: -23vh;
        left: -11vw;
    }

}

@media (max-width:500px) {

    .all {
        height: 130vh;
    }

    .main {
        position: relative;
        height: 200vh;
    }


    .word {
        display: none;
    }

    .top {
        flex-direction: column;
        height: auto;
        height: 90vh;
        margin-top: 0;
        padding-top: 5vh;
    }

    .top-right {
        flex-direction: column;
        height: auto;
    }

    .top-left {
        height: 10%;
    }

    .content-3 {
        margin-left: 0;
        padding-bottom: 1.5vh;
        height: auto;
        align-items: flex-start;
    }

    .h2 {
        margin: 0;
        font-size: 4.266vw;
    }

    .bottom::before {
        left: -9vw;
        top: -21vh;
    }

    .h3 {
        font-size: 3.8vw;
        padding-bottom: 1.5vh;
    }

    .bottom {
        height: auto;
        padding-top: 5vh;
    }

    .word-small {
        display: block;
    }

    .word-small .h1 {
        font-size: 3vw;
    }

    .h4 {
        text-align: left;
        font-size: 2.5vw;
        line-height: 2.5vh;
    }

    .main {
        height: 100%;
    }
}


@media (max-width:376px) {

    .top{
        height: 80vh;
    }

    .all{
        height: 130vh;
    }
    .h2{
        padding-bottom: 1vh;
    }
    .top{
        height: 90vh;
    }
    .bottom::before {
        left: -8vw;
        top: -20vh;
    }
}

</style>
