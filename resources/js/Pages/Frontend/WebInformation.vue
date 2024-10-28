<script>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import BannerLayout from '@/Layouts/BannerLayout.vue';
import Information from '@/Components/Frontend/Other/Information.vue';

export default {
    components: {
        FrontendLayout,
        BannerLayout,
        Information,
    },
    data() {

    }
}
</script>
<template>
    <FrontendLayout>
        <BannerLayout>
            <div>
                <Information />
            </div>
        </BannerLayout>
    </FrontendLayout>
</template>
