<template>
    <div class="box-heading">
        <div class="box-title">
            <h3 class="mb-35">{{ breadcrumbName }}</h3>
        </div>
        <div class="box-breadcrumb">
            <div class="breadcrumbs">
                <ul>
                    <li> <a class="icon-home" href="index-2.html">Admin</a></li>
                    <li><span>{{ breadcrumbName }}</span></li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    computed: {
        breadcrumbName() {
            return this.$store.state.breadcrumbName
        }
    }
}
</script>