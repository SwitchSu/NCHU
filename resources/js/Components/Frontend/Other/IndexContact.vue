<script>
import facebook from '/images/FooterIcon/Facebook-blue.svg';
import contact from '/images/main/contact.png';
export default {
    data() {
        return {
            images: {
                facebook, contact,
            },
        }
    },
}
</script>
<template>
    <main class="w-[90%] mb-[-5vw] 2sm-[] md:w-[80%] m-auto">
        <div class="contact">
                <div v-motion :initial="{ opacity: 0, x: -300 }" :visibleOnce="{ opacity: 1, x: 0, transition: {duration: 800,} }" class="frame-1">
                    <iframe class="w-[100%]"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3641.446104629765!2d120.67400941162171!3d24.1209667783293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d02fbdf00cf%3A0xca558b13873d5a59!2zNDAy5Y-w5Lit5biC5Y2X5Y2A6IiI5aSn6LevMTQ16Jmf!5e0!3m2!1szh-TW!2stw!4v1705892760083!5m2!1szh-TW!2stw"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div v-motion :initial="{ opacity: 0, x: 100 }" :visibleOnce="{ opacity: 1, x: 0, transition: {duration: 800,} }" class="con-right">
                    <div class=" con-img">
                        <img :src="images.contact" alt="">
                    </div>
                    <iframe class="frame-2"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3641.446104629765!2d120.67400941162171!3d24.1209667783293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d02fbdf00cf%3A0xca558b13873d5a59!2zNDAy5Y-w5Lit5biC5Y2X5Y2A6IiI5aSn6LevMTQ16Jmf!5e0!3m2!1szh-TW!2stw!4v1705892760083!5m2!1szh-TW!2stw"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" v-motion :initial="{ opacity: 0, x: -100 }" :visibleOnce="{ opacity: 1, x: 0, transition: {duration: 800,} }"></iframe>
                    <div class="con-r-b">
                        <a href="https://www.facebook.com/NCHUDEE/?locale=zh_TW" class=""><img class="face" :src="images.facebook" alt=""></a>
                        <pre class="phone"><i class="fa-solid fa-phone mr-[11%]"></i> 04 2284 0455</pre>
                        <pre class="mail"><i class="fa-solid fa-envelope mr-[11%] "></i> hello20131005@gmail.com</pre>
                        <pre class="address"><i class="fa-solid fa-location-dot mr-[15%]"></i>40227台中市南區興大路145號</pre>
                        <pre class="ps-[28%]">(綜合教學大樓8樓804、805室)</pre>
                    </div>
                </div>
        </div>
    </main>
</template>
<style scoped>
.contact {
    @apply flex justify-center gap-[5vw] items-center my-[15vw];
}

.frame-1 {
    @apply w-[50%];
}

.frame-2 {
    @apply hidden;
}

.provide {
    @apply text-[5vw] font-bold;
    font-family: 'Noto Sans TC', sans-serif;
}

.provide span {
    @apply text-[3vw] font-bold;
    font-family: 'Inter', sans-serif;
}

.con-right {
    @apply mt-[-10vh];
}

pre {
    @apply text-[1.3vw] font-[600];
    font-family: 'Noto Sans TC', sans-serif;
}

iframe {
    aspect-ratio: 5/3;
}

.face {
    @apply h-[1.85vw];
    filter: grayscale(100%);
}
.face:hover{
    filter: none;
}
.fa-solid {
    @apply text-[1.57vw];
}

.con-img {
    @apply mb-[40px] w-[100%];
}

.con-img img {
    @apply w-[24vw];
}

.phone {
    @apply mt-[30px] mb-[13px];
}

.mail {
    @apply mb-[13px];
}

.address {
    @apply ps-[0.3vw];
}

.con-r-b {
    @apply w-[50%] pl-[6%] mt-[-10px];
}

@media(max-width:1200px) {
    .con-img {
        @apply mb-[20px];
    }

    .con-right {
        @apply mt-[-5vh];
    }

    .phone {
        @apply mt-[10px] my-[10px];
    }

    .mail {
        @apply mb-[10px];
    }
}

@media(max-width:768px) {
    .con-right {
        @apply mt-[-50px];
    }

    .face {
        @apply h-[2.5vw] ml-[-1vw];
    }

    iframe {
        aspect-ratio: 3/2;
    }

    .con-img {
        @apply mb-0;
    }

    .con-img img {
        @apply w-[33vw];
    }

    pre {
        @apply text-[1.85vw];
    }

    .fa-solid {
        @apply text-[2.1vw];
    }

    .phone {
        @apply my-[5px];
    }

    .mail {
        @apply my-[5px];
    }

    .con-r-b {
        @apply mt-[-10px];
    }
}

@media (max-width:500px) {
    .contact {
        @apply w-[100%];
    }

    .frame-1 {
        @apply hidden;
    }

    .frame-2 {
        @apply w-[100%] block;
    }

    pre {
        @apply text-[3.2vw];
    }

    .fa-solid {
        @apply text-[4vw];
    }

    .face {
        @apply mb-[20px] h-[5vw];
    }

    .con-img img {
        @apply m-auto w-[55vw];
    }

    .con-right {
        @apply flex flex-col gap-[30px];
    }

    .con-r-b {
        @apply mt-0 translate-x-[10%];
    }
}

@media (max-width:375px) {
    pre {
        @apply text-[4.3vw];
    }

    .fa-solid {
        @apply text-[5vw];
    }

    .face {
        @apply h-[6vw];
    }
}
</style>
