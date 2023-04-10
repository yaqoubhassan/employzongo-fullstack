<template>
    <div>
        <!-- <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="text-center"><img src="../../../assets/admin/imgs/template/loading.gif" alt="EmployZongo"></div>
                </div>
            </div>
        </div> -->

        <!-- Preloader -->
        <!-- <app-preloader></app-preloader> -->

        <!-- Header -->
        <app-admin-header></app-admin-header>

        <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span
                class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>

        <!-- Mobile Header -->
        <app-admin-mobile-header></app-admin-mobile-header>

        <main class="main">
            <!-- Side Menu -->
            <app-admin-side-menu></app-admin-side-menu>
            <div class="box-content">
                <!-- Breadcrumb -->
                <app-admin-breadcrumb></app-admin-breadcrumb>
                <router-view></router-view>
                <vue-progress-bar></vue-progress-bar>
                <!-- Footer -->
                <app-admin-footer></app-admin-footer>
            </div>


        </main>
    </div>
</template>

<script>
import Preloader from '../../components/Preloader.vue'
import AdminHeader from '../../components/admin/AdminHeader.vue'
import AdminFooter from '../../components/admin/AdminFooter.vue'
import AdminMobileHeader from '../../components/admin/AdminMobileHeader.vue'
import AdminSideMenu from '../../components/admin/AdminSideMenu.vue'
import AdminBreadcrumb from '../../components/admin/AdminBreadcrumb.vue'

export default {

    components: {
        appPreloader: Preloader,
        appAdminHeader: AdminHeader,
        appAdminFooter: AdminFooter,
        appAdminMobileHeader: AdminMobileHeader,
        appAdminSideMenu: AdminSideMenu,
        appAdminBreadcrumb: AdminBreadcrumb
    },
    created() {
        let tags = document.getElementsByTagName('script');
        let styles = document.getElementsByTagName('style');

        // tags[0].remove();
        // tags[1].remove();
        // styles[0].remove();

        import('../../../assets/admin/css/stylecd4e.css')

        import('../../../assets/admin/js/plugins/jquery.circliful.js')
        import('../../../assets/admin/js/plugins/charts/index.js')
        import('../../../assets/admin/js/plugins/charts/xy.js')
        import('../../../assets/admin/js/plugins/charts/Animated.js')
        import('../../../assets/admin/js/plugins/charts/Animated.js')
        import('../../../assets/admin/js/plugins/armcharts5-script.js')
    }

}
</script>
