<template>
    <div class="row">
        <div class="col-xxl-8 col-xl-7 col-lg-7">
            <!-- Stats -->
            <app-admin-stats></app-admin-stats>

            <!-- Vacancy Stats -->
            <app-admin-vacancy-stats></app-admin-vacancy-stats>

            <!-- Latest Jobs -->
            <app-admin-latest-jobs></app-admin-latest-jobs>

        </div>

        <div class="col-xxl-4 col-xl-5 col-lg-5">
            <!-- Top Candidates -->
            <app-admin-top-candidates></app-admin-top-candidates>

            <!-- Top Queries -->
            <app-admin-top-queries></app-admin-top-queries>

        </div>
    </div>
</template>

<script>
import AdminStats from '../../components/admin/AdminStats.vue'
import AdminVacancyStats from '../../components/admin/AdminVacancyStats.vue'
import AdminLatestJobs from '../../components/admin/AdminLatestJobs.vue'
import AdminTopCandidates from '../../components/admin/AdminTopCandidates.vue'
import AdminTopQueries from '../../components/admin/AdminTopQueries.vue'

export default {
    components: {
        appAdminStats: AdminStats,
        appAdminVacancyStats: AdminVacancyStats,
        appAdminLatestJobs: AdminLatestJobs,
        appAdminTopCandidates: AdminTopCandidates,
        appAdminTopQueries: AdminTopQueries
    }
}
</script>
