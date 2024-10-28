<script>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import BannerLayout from '@/Layouts/BannerLayout.vue';
import CoursePage from '@/Components/Frontend/Other/CoursePage.vue';

export default {
    props: {
        response: Array
    },
    components: {
        FrontendLayout,
        BannerLayout,
        CoursePage
    },
    data() {

    }
}
</script>
<template>
    <FrontendLayout>
        <BannerLayout>
            <div>
                <CoursePage :res-course="response"  />
            </div>
        </BannerLayout>
    </FrontendLayout>
</template>
