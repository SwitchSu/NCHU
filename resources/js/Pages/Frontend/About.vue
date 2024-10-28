<script>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import BannerLayout from '@/Layouts/BannerLayout.vue';
import AboutPage from '@/Components/Frontend/Other/AboutPage.vue';

export default {
    components: {
        FrontendLayout,
        BannerLayout,
        AboutPage,
    },
    data() {
        return{

        }
    }
}
</script>
<template>
    <FrontendLayout>
        <BannerLayout>
            <div >
                <AboutPage />
            </div>
        </BannerLayout>
    </FrontendLayout>
</template>
