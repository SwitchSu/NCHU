<script>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import BannerLayout from '@/Layouts/BannerLayout.vue';
import NewsPage from '@/Components/Frontend/Other/NewsPage.vue';

export default {
    components: {
        FrontendLayout,
        BannerLayout,
        NewsPage,
    },
    data() {

    }
}
</script>
<template>
    <FrontendLayout>
        <BannerLayout>
            <div>
                <NewsPage />
            </div>
        </BannerLayout>
    </FrontendLayout>
</template>
