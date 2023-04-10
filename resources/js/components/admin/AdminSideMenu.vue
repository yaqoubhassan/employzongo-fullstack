<template>
    <div class="nav"><a class="btn btn-expanded"></a>
        <nav class="nav-main-menu">
            <ul class="main-menu">
                <li>
                    <RouterLink class="dashboard2" to="/admin"><img
                            src="../../../assets/admin/imgs/page/dashboard/dashboard.svg" alt="employZongo"><span
                            class="name">Dashboard</span>
                    </RouterLink>
                </li>
                <li>
                    <RouterLink class="dashboard2" to="/admin/candidates-list"><img
                            src="../../../assets/admin/imgs/page/dashboard/candidates.svg" alt="employZongo"><span
                            class="name">Candidates</span>
                    </RouterLink>
                </li>
                <li>
                    <RouterLink class="dashboard2" to="/"><img src="../../../assets/admin/imgs/page/dashboard/jobs.svg"
                            alt="employZongo"><span class="name">Jobs</span>
                    </RouterLink>
                </li>
                <li>
                    <RouterLink class="dashboard2" to="/admin/articles"><img
                            src="../../../assets/admin/imgs/page/dashboard/cv-manage.svg" alt="employZongo"><span
                            class="name">Articles</span>
                    </RouterLink>
                </li>
                <li>
                    <RouterLink class="dashboard2" to="/"><img src="../../../assets/admin/imgs/page/dashboard/tasks.svg"
                            alt="employZongo"><span class="name">Skills</span>
                    </RouterLink>
                </li>
                <li>
                    <RouterLink class="dashboard2" to="/"><img class="tag-icon"
                            src="../../../assets/admin/imgs/page/dashboard/tags.svg" alt="employZongo"><span
                            class="name">Tags</span>
                    </RouterLink>
                </li>
                <li>
                    <RouterLink class="dashboard2" to="/"><img src="../../../assets/admin/imgs/page/dashboard/settings.svg"
                            alt="employZongo"><span class="name">Settings</span>
                    </RouterLink>
                </li>
            </ul>
        </nav>
        <div class="border-bottom mb-20 mt-20"></div>
        <div class="box-profile-completed text-center mb-30">
            <div id="circle-staticstic-demo"></div>
            <h6 class="mb-10">Profile Completed</h6>
            <p class="font-xs color-text-mutted">Please add detailed information to your profile. This will help you
                develop your career more quickly.</p>
        </div>
        <div class="sidebar-border-bg mt-50"><span class="text-grey">WE ARE</span><span class="text-hiring">HIRING</span>
            <p class="font-xxs color-text-paragraph mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Recusandae architecto</p>
            <div class="mt-15"><a class="btn btn-paragraph-2" href="#">Know More</a></div>
        </div>
    </div>
</template>

<style scoped>
.tag-icon {
    height: 25px;
    filter: invert(48%) sepia(12%) saturate(1068%) hue-rotate(182deg) brightness(94%) contrast(93%);
    stroke-width: 20px;

}

.router-link-exact-active,
.nav-link:hover {
    background-color: #3C65F5 !important;
    color: #ffffff !important;
    border-radius: 8px;
}

.router-link-exact-active img {
    filter: invert(100%) sepia(50%) saturate(50%) hue-rotate(124deg) brightness(200%) contrast(100%);
}
</style>