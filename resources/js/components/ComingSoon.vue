<template>
    <section id="comingSoon">
        <div class="row text-center pb-50" style="background-color: #05264E60">
            <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                <div class="row pt-50 main-div">
                    <div class="col-xl-4 col-lg-4 col-md-4 main-container" id="mobile-img">
                        <div style="height: 100%;"><img src="../../assets/imgs/app-mobile.png" style="height: 100%" alt="">
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 text-start">
                        <div class="mobile-app px-3">
                            <h5>Coming Soon...</h5>
                            <h2 style="word-spacing: 10px; line-height: 120%; font-weight: 900;">THE
                                EMPLOYZONGO <span style="color: #3C65F5;">MOBILE APP</span>
                            </h2>
                            <h4 style="word-spacing: 5px">A world of opportunity in your hand</h4>
                            <p class="pb-50 pt-10" style="text-align: justify">Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit. Minus omnis
                                mollitia labore
                                repudiandae
                                sequi sit architecto enim maxime qui impedit accusamus tempore quo modi quia at deserunt
                                necessitatibus, harum consequuntur debitis. Hic assumenda itaque alias accusamus fugit,
                                unde
                                eaque consectetur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
.mobile-app h5,
h2,
h4,
p {
    color: #FFFFFF;
}

.main-container {
    display: flex;
    align-items: flex-end;
}

@media screen and (max-width: 992px) {
    #mobile-img {
        display: none
    }
}
</style>