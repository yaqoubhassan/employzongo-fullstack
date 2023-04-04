<template>
    <div>
        <section class="section-box-2">
            <div class="container">
                <div class="banner-hero banner-company">
                    <div class="block-banner text-center">
                        <h3 class="wow animate__animated animate__fadeInUp">Browse Candidates</h3>
                        <div class="font-sm color-text-paragraph-2 mt-10 wow animate__animated animate__fadeInUp"
                            data-wow-delay=".1s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus
                            magni, <br class="d-none d-xl-block">atque delectus molestias quis?</div>
                        <div class="box-list-character">
                            <ul>
                                <li><a class="active" href="#">A</a></li>
                                <li><a href="#">B</a></li>
                                <li><a href="#">C</a></li>
                                <li><a href="#">D</a></li>
                                <li><a href="#">E</a></li>
                                <li><a href="#">F</a></li>
                                <li><a href="#">G</a></li>
                                <li><a href="#">H</a></li>
                                <li><a href="#">I</a></li>
                                <li><a href="#">J</a></li>
                                <li><a href="#">K</a></li>
                                <li><a href="#">L</a></li>
                                <li><a href="#">M</a></li>
                                <li><a href="#">N</a></li>
                                <li><a href="#">O</a></li>
                                <li><a href="#">P</a></li>
                                <li><a href="#">Q</a></li>
                                <li><a href="#">R</a></li>
                                <li><a href="#">S</a></li>
                                <li><a href="#">T</a></li>
                                <li><a href="#">U</a></li>
                                <li><a href="#">V</a></li>
                                <li><a href="#">W</a></li>
                                <li><a href="#">X</a></li>
                                <li><a href="#">Y</a></li>
                                <li><a href="#">Z</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box mt-30">
            <div class="container">
                <div class="content-page">
                    <div class="box-filters-job">
                        <div class="row">
                            <div class="col-xl-6 col-lg-5"><span class="text-small text-showing">Showing <strong>41-60
                                    </strong>of <strong>944 </strong>jobs</span></div>
                            <div class="col-xl-6 col-lg-7 text-lg-end mt-sm-15">
                                <div class="display-flex2">
                                    <div class="box-border mr-10"><span class="text-sortby">Show:</span>
                                        <div class="dropdown dropdown-sort">
                                            <button class="btn dropdown-toggle" id="dropdownSort" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                data-bs-display="static"><span>12</span><i
                                                    class="fi-rr-angle-small-down"></i></button>
                                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort">
                                                <li><a class="dropdown-item active" href="#">10</a></li>
                                                <li><a class="dropdown-item" href="#">12</a></li>
                                                <li><a class="dropdown-item" href="#">20</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="box-border"><span class="text-sortby">Sort by:</span>
                                        <div class="dropdown dropdown-sort">
                                            <button class="btn dropdown-toggle" id="dropdownSort2" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                data-bs-display="static"><span>Newest Post</span><i
                                                    class="fi-rr-angle-small-down"></i></button>
                                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort2">
                                                <li><a class="dropdown-item active" href="#">Newest Post</a></li>
                                                <li><a class="dropdown-item" href="#">Oldest Post</a></li>
                                                <li><a class="dropdown-item" href="#">Rating Post</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="box-view-type"><a class="view-type" href="jobs-list.html"><img
                                                src="../../assets/imgs/template/icons/icon-list.svg"
                                                alt="EmployZongo"></a><a class="view-type" href="jobs-grid.html"><img
                                                src="../../assets/imgs/template/icons/icon-grid-hover.svg"
                                                alt="EmployZongo"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left">
                                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                                            <figure><img alt="EmployZongo"
                                                    src="../../assets/imgs/page/candidates/user1.png">
                                            </figure>
                                        </a></div>
                                    <div class="card-profile pt-10"><a @click="navigateToCandidateDetails"
                                            class="item-details">
                                            <h5>Robert Fox</h5>
                                        </a><span class="font-xs color-text-mutted">Backend Developer</span>
                                        <div class="rate-reviews-small pt-5"><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span
                                                class="ml-10 color-text-mutted font-xs">(65)</span></div>
                                    </div>
                                </div>
                                <div class="card-block-info">
                                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                        <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Digital</a>
                                        </div>
                                    </div>
                                    <div class="employers-info align-items-center justify-content-center mt-15">
                                        <div class="row">
                                            <div class="col-6"><span class="d-flex align-items-center"><i
                                                        class="fi-rr-marker mr-5 ml-0"></i><span
                                                        class="font-sm color-text-mutted">Chicago, US</span></span></div>
                                            <div class="col-6"><span
                                                    class="d-flex justify-content-end align-items-center"><i
                                                        class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45
                                                        / hour</span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left">
                                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                                            <figure><img alt="EmployZongo"
                                                    src="../../assets/imgs/page/candidates/user2.png">
                                            </figure>
                                        </a></div>
                                    <div class="card-profile pt-10"><a href="candidate-details.html">
                                            <h5>Cody Fisher</h5>
                                        </a><span class="font-xs color-text-mutted">Python developer</span>
                                        <div class="rate-reviews-small pt-5"><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span
                                                class="ml-10 color-text-mutted font-xs">(65)</span></div>
                                    </div>
                                </div>
                                <div class="card-block-info">
                                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                        <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Digital</a>
                                        </div>
                                    </div>
                                    <div class="employers-info align-items-center justify-content-center mt-15">
                                        <div class="row">
                                            <div class="col-6"><span class="d-flex align-items-center"><i
                                                        class="fi-rr-marker mr-5 ml-0"></i><span
                                                        class="font-sm color-text-mutted">Chicago, US</span></span></div>
                                            <div class="col-6"><span
                                                    class="d-flex justify-content-end align-items-center"><i
                                                        class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45
                                                        / hour</span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left">
                                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                                            <figure><img alt="EmployZongo"
                                                    src="../../assets/imgs/page/candidates/user3.png">
                                            </figure>
                                        </a></div>
                                    <div class="card-profile pt-10"><a href="candidate-details.html">
                                            <h5>Jerome Bell</h5>
                                        </a><span class="font-xs color-text-mutted">Content Manager</span>
                                        <div class="rate-reviews-small pt-5"><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span
                                                class="ml-10 color-text-mutted font-xs">(65)</span></div>
                                    </div>
                                </div>
                                <div class="card-block-info">
                                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                        <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Digital</a>
                                        </div>
                                    </div>
                                    <div class="employers-info align-items-center justify-content-center mt-15">
                                        <div class="row">
                                            <div class="col-6"><span class="d-flex align-items-center"><i
                                                        class="fi-rr-marker mr-5 ml-0"></i><span
                                                        class="font-sm color-text-mutted">Chicago, US</span></span></div>
                                            <div class="col-6"><span
                                                    class="d-flex justify-content-end align-items-center"><i
                                                        class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45
                                                        / hour</span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left">
                                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                                            <figure><img alt="EmployZongo"
                                                    src="../../assets/imgs/page/candidates/user4.png">
                                            </figure>
                                        </a></div>
                                    <div class="card-profile pt-10"><a href="candidate-details.html">
                                            <h5>Jane Cooper</h5>
                                        </a><span class="font-xs color-text-mutted">Network</span>
                                        <div class="rate-reviews-small pt-5"><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span
                                                class="ml-10 color-text-mutted font-xs">(65)</span></div>
                                    </div>
                                </div>
                                <div class="card-block-info">
                                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                        <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Digital</a>
                                        </div>
                                    </div>
                                    <div class="employers-info align-items-center justify-content-center mt-15">
                                        <div class="row">
                                            <div class="col-6"><span class="d-flex align-items-center"><i
                                                        class="fi-rr-marker mr-5 ml-0"></i><span
                                                        class="font-sm color-text-mutted">Chicago, US</span></span></div>
                                            <div class="col-6"><span
                                                    class="d-flex justify-content-end align-items-center"><i
                                                        class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45
                                                        / hour</span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left">
                                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                                            <figure><img alt="EmployZongo"
                                                    src="../../assets/imgs/page/candidates/user5.png">
                                            </figure>
                                        </a></div>
                                    <div class="card-profile pt-10"><a href="candidate-details.html">
                                            <h5>Floyd Miles</h5>
                                        </a><span class="font-xs color-text-mutted">Photo Editing</span>
                                        <div class="rate-reviews-small pt-5"><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span
                                                class="ml-10 color-text-mutted font-xs">(65)</span></div>
                                    </div>
                                </div>
                                <div class="card-block-info">
                                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                        <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Digital</a>
                                        </div>
                                    </div>
                                    <div class="employers-info align-items-center justify-content-center mt-15">
                                        <div class="row">
                                            <div class="col-6"><span class="d-flex align-items-center"><i
                                                        class="fi-rr-marker mr-5 ml-0"></i><span
                                                        class="font-sm color-text-mutted">Chicago, US</span></span></div>
                                            <div class="col-6"><span
                                                    class="d-flex justify-content-end align-items-center"><i
                                                        class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45
                                                        / hour</span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left">
                                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                                            <figure><img alt="EmployZongo"
                                                    src="../../assets/imgs/page/candidates/user6.png">
                                            </figure>
                                        </a></div>
                                    <div class="card-profile pt-10"><a href="candidate-details.html">
                                            <h5>Devon Lane</h5>
                                        </a><span class="font-xs color-text-mutted">Online Marketing</span>
                                        <div class="rate-reviews-small pt-5"><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span
                                                class="ml-10 color-text-mutted font-xs">(65)</span></div>
                                    </div>
                                </div>
                                <div class="card-block-info">
                                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                        <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Digital</a>
                                        </div>
                                    </div>
                                    <div class="employers-info align-items-center justify-content-center mt-15">
                                        <div class="row">
                                            <div class="col-6"><span class="d-flex align-items-center"><i
                                                        class="fi-rr-marker mr-5 ml-0"></i><span
                                                        class="font-sm color-text-mutted">Chicago, US</span></span></div>
                                            <div class="col-6"><span
                                                    class="d-flex justify-content-end align-items-center"><i
                                                        class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45
                                                        / hour</span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left">
                                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                                            <figure><img alt="EmployZongo"
                                                    src="../../assets/imgs/page/candidates/user7.png">
                                            </figure>
                                        </a></div>
                                    <div class="card-profile pt-10"><a href="candidate-details.html">
                                            <h5>Jerome Bell</h5>
                                        </a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                                        <div class="rate-reviews-small pt-5"><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span
                                                class="ml-10 color-text-mutted font-xs">(65)</span></div>
                                    </div>
                                </div>
                                <div class="card-block-info">
                                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                        <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Digital</a>
                                        </div>
                                    </div>
                                    <div class="employers-info align-items-center justify-content-center mt-15">
                                        <div class="row">
                                            <div class="col-6"><span class="d-flex align-items-center"><i
                                                        class="fi-rr-marker mr-5 ml-0"></i><span
                                                        class="font-sm color-text-mutted">Chicago, US</span></span></div>
                                            <div class="col-6"><span
                                                    class="d-flex justify-content-end align-items-center"><i
                                                        class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45
                                                        / hour</span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left">
                                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                                            <figure><img alt="EmployZongo"
                                                    src="../../assets/imgs/page/candidates/user8.png">
                                            </figure>
                                        </a></div>
                                    <div class="card-profile pt-10"><a href="candidate-details.html">
                                            <h5>Eleanor</h5>
                                        </a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                                        <div class="rate-reviews-small pt-5"><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span
                                                class="ml-10 color-text-mutted font-xs">(65)</span></div>
                                    </div>
                                </div>
                                <div class="card-block-info">
                                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                        <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Digital</a>
                                        </div>
                                    </div>
                                    <div class="employers-info align-items-center justify-content-center mt-15">
                                        <div class="row">
                                            <div class="col-6"><span class="d-flex align-items-center"><i
                                                        class="fi-rr-marker mr-5 ml-0"></i><span
                                                        class="font-sm color-text-mutted">Chicago, US</span></span></div>
                                            <div class="col-6"><span
                                                    class="d-flex justify-content-end align-items-center"><i
                                                        class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45
                                                        / hour</span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left">
                                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                                            <figure><img alt="EmployZongo"
                                                    src="../../assets/imgs/page/candidates/user9.png">
                                            </figure>
                                        </a></div>
                                    <div class="card-profile pt-10"><a href="candidate-details.html">
                                            <h5>Theresa</h5>
                                        </a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                                        <div class="rate-reviews-small pt-5"><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span
                                                class="ml-10 color-text-mutted font-xs">(65)</span></div>
                                    </div>
                                </div>
                                <div class="card-block-info">
                                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                        <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Digital</a>
                                        </div>
                                    </div>
                                    <div class="employers-info align-items-center justify-content-center mt-15">
                                        <div class="row">
                                            <div class="col-6"><span class="d-flex align-items-center"><i
                                                        class="fi-rr-marker mr-5 ml-0"></i><span
                                                        class="font-sm color-text-mutted">Chicago, US</span></span></div>
                                            <div class="col-6"><span
                                                    class="d-flex justify-content-end align-items-center"><i
                                                        class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45
                                                        / hour</span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left">
                                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                                            <figure><img alt="EmployZongo"
                                                    src="../../assets/imgs/page/candidates/user10.png">
                                            </figure>
                                        </a></div>
                                    <div class="card-profile pt-10"><a href="candidate-details.html">
                                            <h5>Robert Fox</h5>
                                        </a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                                        <div class="rate-reviews-small pt-5"><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span
                                                class="ml-10 color-text-mutted font-xs">(65)</span></div>
                                    </div>
                                </div>
                                <div class="card-block-info">
                                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                        <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Digital</a>
                                        </div>
                                    </div>
                                    <div class="employers-info align-items-center justify-content-center mt-15">
                                        <div class="row">
                                            <div class="col-6"><span class="d-flex align-items-center"><i
                                                        class="fi-rr-marker mr-5 ml-0"></i><span
                                                        class="font-sm color-text-mutted">Chicago, US</span></span></div>
                                            <div class="col-6"><span
                                                    class="d-flex justify-content-end align-items-center"><i
                                                        class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45
                                                        / hour</span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left">
                                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                                            <figure><img alt="EmployZongo"
                                                    src="../../assets/imgs/page/candidates/user11.png">
                                            </figure>
                                        </a></div>
                                    <div class="card-profile pt-10"><a href="candidate-details.html">
                                            <h5>Cameron</h5>
                                        </a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                                        <div class="rate-reviews-small pt-5"><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span
                                                class="ml-10 color-text-mutted font-xs">(65)</span></div>
                                    </div>
                                </div>
                                <div class="card-block-info">
                                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                        <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Digital</a>
                                        </div>
                                    </div>
                                    <div class="employers-info align-items-center justify-content-center mt-15">
                                        <div class="row">
                                            <div class="col-6"><span class="d-flex align-items-center"><i
                                                        class="fi-rr-marker mr-5 ml-0"></i><span
                                                        class="font-sm color-text-mutted">Chicago, US</span></span></div>
                                            <div class="col-6"><span
                                                    class="d-flex justify-content-end align-items-center"><i
                                                        class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45
                                                        / hour</span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left">
                                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                                            <figure><img alt="EmployZongo"
                                                    src="../../assets/imgs/page/candidates/user12.png">
                                            </figure>
                                        </a></div>
                                    <div class="card-profile pt-10"><a href="candidate-details.html">
                                            <h5>Jacob Jones</h5>
                                        </a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                                        <div class="rate-reviews-small pt-5"><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span
                                                class="ml-10 color-text-mutted font-xs">(65)</span></div>
                                    </div>
                                </div>
                                <div class="card-block-info">
                                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                        <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Digital</a>
                                        </div>
                                    </div>
                                    <div class="employers-info align-items-center justify-content-center mt-15">
                                        <div class="row">
                                            <div class="col-6"><span class="d-flex align-items-center"><i
                                                        class="fi-rr-marker mr-5 ml-0"></i><span
                                                        class="font-sm color-text-mutted">Chicago, US</span></span></div>
                                            <div class="col-6"><span
                                                    class="d-flex justify-content-end align-items-center"><i
                                                        class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45
                                                        / hour</span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left">
                                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                                            <figure><img alt="EmployZongo"
                                                    src="../../assets/imgs/page/candidates/user13.png">
                                            </figure>
                                        </a></div>
                                    <div class="card-profile pt-10"><a href="candidate-details.html">
                                            <h5>Court Henry</h5>
                                        </a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                                        <div class="rate-reviews-small pt-5"><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span
                                                class="ml-10 color-text-mutted font-xs">(65)</span></div>
                                    </div>
                                </div>
                                <div class="card-block-info">
                                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                        <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Digital</a>
                                        </div>
                                    </div>
                                    <div class="employers-info align-items-center justify-content-center mt-15">
                                        <div class="row">
                                            <div class="col-6"><span class="d-flex align-items-center"><i
                                                        class="fi-rr-marker mr-5 ml-0"></i><span
                                                        class="font-sm color-text-mutted">Chicago, US</span></span></div>
                                            <div class="col-6"><span
                                                    class="d-flex justify-content-end align-items-center"><i
                                                        class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45
                                                        / hour</span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left">
                                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                                            <figure><img alt="EmployZongo"
                                                    src="../../assets/imgs/page/candidates/user14.png">
                                            </figure>
                                        </a></div>
                                    <div class="card-profile pt-10"><a href="candidate-details.html">
                                            <h5>Hawkins</h5>
                                        </a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                                        <div class="rate-reviews-small pt-5"><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span
                                                class="ml-10 color-text-mutted font-xs">(65)</span></div>
                                    </div>
                                </div>
                                <div class="card-block-info">
                                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                        <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Digital</a>
                                        </div>
                                    </div>
                                    <div class="employers-info align-items-center justify-content-center mt-15">
                                        <div class="row">
                                            <div class="col-6"><span class="d-flex align-items-center"><i
                                                        class="fi-rr-marker mr-5 ml-0"></i><span
                                                        class="font-sm color-text-mutted">Chicago, US</span></span></div>
                                            <div class="col-6"><span
                                                    class="d-flex justify-content-end align-items-center"><i
                                                        class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45
                                                        / hour</span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left">
                                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                                            <figure><img alt="EmployZongo"
                                                    src="../../assets/imgs/page/candidates/user15.png">
                                            </figure>
                                        </a></div>
                                    <div class="card-profile pt-10"><a href="candidate-details.html">
                                            <h5>Howard</h5>
                                        </a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                                        <div class="rate-reviews-small pt-5"><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span
                                                class="ml-10 color-text-mutted font-xs">(65)</span></div>
                                    </div>
                                </div>
                                <div class="card-block-info">
                                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                        <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Digital</a>
                                        </div>
                                    </div>
                                    <div class="employers-info align-items-center justify-content-center mt-15">
                                        <div class="row">
                                            <div class="col-6"><span class="d-flex align-items-center"><i
                                                        class="fi-rr-marker mr-5 ml-0"></i><span
                                                        class="font-sm color-text-mutted">Chicago, US</span></span></div>
                                            <div class="col-6"><span
                                                    class="d-flex justify-content-end align-items-center"><i
                                                        class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45
                                                        / hour</span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left">
                                    <div class="card-grid-2-image-rd online"><a href="candidate-details.html">
                                            <figure><img alt="EmployZongo"
                                                    src="../../assets/imgs/page/candidates/user1.png">
                                            </figure>
                                        </a></div>
                                    <div class="card-profile pt-10"><a href="candidate-details.html">
                                            <h5> Alexander</h5>
                                        </a><span class="font-xs color-text-mutted">UI/UX Designer</span>
                                        <div class="rate-reviews-small pt-5"><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span><img
                                                    src="../../assets/imgs/template/icons/star.svg"
                                                    alt="EmployZongo"></span><span
                                                class="ml-10 color-text-mutted font-xs">(65)</span></div>
                                    </div>
                                </div>
                                <div class="card-block-info">
                                    <p class="font-xs color-text-paragraph-2">| Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Vero repellendus magni, atque delectus molestias quis?</p>
                                    <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                        <div class="text-start"><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Figma</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Adobe XD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">PSD</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">App</a><a class="btn btn-tags-sm mb-10 mr-5"
                                                href="jobs-grid.html">Digital</a>
                                        </div>
                                    </div>
                                    <div class="employers-info align-items-center justify-content-center mt-15">
                                        <div class="row">
                                            <div class="col-6"><span class="d-flex align-items-center"><i
                                                        class="fi-rr-marker mr-5 ml-0"></i><span
                                                        class="font-sm color-text-mutted">Chicago, US</span></span></div>
                                            <div class="col-6"><span
                                                    class="d-flex justify-content-end align-items-center"><i
                                                        class="fi-rr-clock mr-5"></i><span class="font-sm color-brand-1">$45
                                                        / hour</span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="paginations">
                    <ul class="pager">
                        <li><a class="pager-prev" href="#"></a></li>
                        <li><a class="pager-number" href="#">1</a></li>
                        <li><a class="pager-number" href="#">2</a></li>
                        <li><a class="pager-number" href="#">3</a></li>
                        <li><a class="pager-number" href="#">4</a></li>
                        <li><a class="pager-number" href="#">5</a></li>
                        <li><a class="pager-number active" href="#">6</a></li>
                        <li><a class="pager-number" href="#">7</a></li>
                        <li><a class="pager-next" href="#"></a></li>
                    </ul>
                </div>
            </div>
    </section>
    <app-blogs-component></app-blogs-component>
    <div style="height: 100px;"></div>
    <app-newsletter></app-newsletter>
</div></template>

<script>
export default {
    methods: {
        navigateToCandidateDetails() {
            this.$router.push('/candidate-details')
        }
    }
}
</script>