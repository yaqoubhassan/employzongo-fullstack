<template>
    <div>
        <!-- Preloader -->
        <app-preloader></app-preloader>
        <!-- Apply Job Form Modal -->
        <app-apply-job-modal></app-apply-job-modal>
        <!-- Header -->
        <app-header></app-header>
        <!-- Mobile Header -->
        <app-mobile-header></app-mobile-header>

        <main class="main">
            <router-view></router-view>
        </main>
        <!-- Footer -->
        <app-footer></app-footer>
    </div>
</template>
<script>
import Header from './components/Header.vue'
import MobileHeader from './components/MobileHeader.vue'
import Preloader from './components/Preloader.vue'
import ApplyJobModal from './components/ApplyJobModal.vue'
import Footer from './components/Footer.vue'

export default {
    components: {
        appHeader: Header,
        appMobileHeader: MobileHeader,
        appPreloader: Preloader,
        appApplyJobModal: ApplyJobModal,
        appFooter: Footer
    }
}
</script>

<style>
.bigImg-one {
    background-image: url('../assets/imgs/page/homepage2/img-big1.png');
}

.bigImg-two {
    background-image: url('../assets/imgs/page/homepage2/img-big2.png');
}

.bigImg-three {
    background-image: url('../assets/imgs/page/homepage2/img-big3.png');
}

.location-one {
    background-image: url('../assets/imgs/page/homepage1/location1.png');
}

.location-two {
    background-image: url('../assets/imgs/page/homepage1/location2.png');
}

.location-three {
    background-image: url('../assets/imgs/page/homepage1/location3.png');
}

.location-four {
    background-image: url('../assets/imgs/page/homepage1/location4.png');
}

.location-five {
    background-image: url('../assets/imgs/page/homepage1/location5.png');
}

.location-six {
    background-image: url('../assets/imgs/page/homepage1/location6.png');
}

.item-details {
    cursor: pointer;
}
</style>