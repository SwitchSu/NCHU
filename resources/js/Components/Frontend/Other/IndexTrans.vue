<script>
import trans from '/images/main/trans.svg';
import vector from '/images/main/vector.png';
import transition from '/images/main/transition.png';


export default {
    data() {
        return {
            images: {
                trans, vector, transition,
            },
        }
    },
}
</script>
<template>
    <main class="w-[100%] h-[60dvh] md:h-[100dvh] bg-[#0057ff] flex flex-col items-center px-[10%] mb-[26.6vw] 2sm:px-[15%] 2sm:mb-[12vw] md:px-0" v-motion
                    :initial="{ opacity: 0, y: 300 }" :visibleOnce="{ opacity: 1, y: 0, transition: { duration: 550, } }">
        <img :src="images.transition" alt="">
    </main>
</template>
<style scoped></style>
