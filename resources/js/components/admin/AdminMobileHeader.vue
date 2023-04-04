<template>
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-content-area">
                <div class="perfect-scroll">
                    <div class="mobile-search mobile-header-border mb-30">
                        <form action="#">
                            <input type="text" placeholder="Search…"><i class="fi-rr-search"></i>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-border">
                        <!-- mobile menu start-->
                        <nav>
                            <ul class="main-menu">
                                <li>
                                    <RouterLink class="dashboard2" to="/admin"><img
                                            src="../../../assets/admin/imgs/page/dashboard/dashboard.svg"
                                            alt="employZongo"><span class="name">Dashboard</span>
                                    </RouterLink>
                                </li>
                                <li>
                                    <RouterLink class="dashboard2" to="/admin/candidates-list"><img
                                            src="../../../assets/admin/imgs/page/dashboard/candidates.svg"
                                            alt="employZongo"><span class="name">Candidates</span>
                                    </RouterLink>
                                </li>
                                <li>
                                    <RouterLink class="dashboard2" to="/"><img
                                            src="../../../assets/admin/imgs/page/dashboard/jobs.svg" alt="employZongo"><span
                                            class="name">Jobs</span>
                                    </RouterLink>
                                </li>
                                <li>
                                    <RouterLink class="dashboard2" to="/"><img
                                            src="../../../assets/admin/imgs/page/dashboard/cv-manage.svg"
                                            alt="employZongo"><span class="name">Articles</span>
                                    </RouterLink>
                                </li>
                                <li>
                                    <RouterLink class="dashboard2" to="/"><img
                                            src="../../../assets/admin/imgs/page/dashboard/tasks.svg"
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
                                    <RouterLink class="dashboard2" to="/"><img
                                            src="../../../assets/admin/imgs/page/dashboard/settings.svg"
                                            alt="employZongo"><span class="name">Settings</span>
                                    </RouterLink>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="mobile-account">
                        <h6 class="mb-10">Your Account</h6>
                        <ul class="mobile-menu font-heading">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Work Preferences</a></li>
                            <li><a href="#">Account Settings</a></li>
                            <li><a href="#">Go Pro</a></li>
                            <li><a href="page-signin.html">Sign Out</a></li>
                        </ul>
                        <div class="mb-15 mt-15"> <a class="btn btn-default icon-edit hover-up" href="post-job.html">Post
                                Job</a></div>
                    </div>
                    <div class="site-copyright">Copyright 2022 &copy; EmployZongo. <br>Designed by AliThemes.</div>
                </div>
            </div>
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