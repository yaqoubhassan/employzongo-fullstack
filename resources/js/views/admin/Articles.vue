<template>
    <div>
        <div class="row">

            <div class="col-lg-12">
                <div class="section-box">
                    <div class="container">

                        <div class="panel-white mb-30">
                            <div class="row">
                                <div class="container"><a class="btn btn-default icon-edit hover-up mx-5 mt-4"
                                        style="float: right" @click="navigateToCreateArticle">Create New Article</a></div>
                            </div>
                            <div class="box-padding">

                                <div class="row mb-30">
                                    <div class="col-12">
                                        <div class="box-filters-job">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-5"><span class="text-small text-showing">Showing
                                                        <strong>41-60 </strong>of
                                                        <strong>944 </strong>jobs</span></div>
                                                <div class="col-xl-6 col-lg-7 text-lg-end mt-sm-15">
                                                    <div class="display-flex2">
                                                        <div class="box-border mr-10"><span class="text-sortby">Show:</span>
                                                            <div class="dropdown dropdown-sort">
                                                                <button class="btn dropdown-toggle" id="dropdownSort"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false"
                                                                    data-bs-display="static"><span>12</span><i
                                                                        class="fi-rr-angle-small-down"></i></button>
                                                                <ul class="dropdown-menu dropdown-menu-light"
                                                                    aria-labelledby="dropdownSort">
                                                                    <li><a class="dropdown-item active" href="#">10</a></li>
                                                                    <li><a class="dropdown-item" href="#">12</a></li>
                                                                    <li><a class="dropdown-item" href="#">20</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="box-border"><span class="text-sortby">Sort by:</span>
                                                            <div class="dropdown dropdown-sort">
                                                                <button class="btn dropdown-toggle" id="dropdownSort2"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false"
                                                                    data-bs-display="static"><span>Newest
                                                                        Post</span><i
                                                                        class="fi-rr-angle-small-down"></i></button>
                                                                <ul class="dropdown-menu dropdown-menu-light"
                                                                    aria-labelledby="dropdownSort2">
                                                                    <li><a class="dropdown-item active" href="#">Newest
                                                                            Post</a></li>
                                                                    <li><a class="dropdown-item" href="#">Oldest Post</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item" href="#">Rating Post</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="box-view-type"><a class="view-type"
                                                                href="jobs-list.html"><img
                                                                    src="../../../assets/admin/imgs/template/icons/icon-list.svg"
                                                                    alt="EmployZongo"></a><a class="view-type"
                                                                href="jobs-grid.html"><img
                                                                    src="../../../assets/admin/imgs/template/icons/icon-grid-hover.svg"
                                                                    alt="EmployZongo"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <section class="section-box">
                                    <div class="post-loop-grid">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-4 mb-30" :key="index"
                                                    v-for="(article, index) in articles">
                                                    <div class="card-grid-3 hover-up">
                                                        <div class="text-center card-grid-3-image"><a
                                                                href="blog-details.html">
                                                                <figure><img alt="jobBox" :src="`${article.image}`">
                                                                </figure>
                                                            </a></div>
                                                        <div class="card-block-info">
                                                            <div class="tags mb-15"><a class="btn btn-tag"
                                                                    href="blog-grid.html">{{ article.category }}</a></div>
                                                            <h5><a href="blog-details.html">{{ article.title }}</a></h5>
                                                            <p class="mt-10 color-text-paragraph font-sm">
                                                                {{ article.description }}</p>
                                                            <div class="card-2-bottom mt-20">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-6">
                                                                        <div class="d-flex"><img class="img-rounded"
                                                                                src="../../../assets/imgs/page/homepage1/user1.png">
                                                                            <div class="info-right-img"><span
                                                                                    class="font-sm font-bold color-brand-1 op-70">{{
                                                                                        article.author_name }}</span><br><span
                                                                                    class="font-xs color-text-paragraph-2">{{
                                                                                        $filters.timeAgo(article.created_at)
                                                                                    }}</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 text-end col-6 pt-15"><span
                                                                            class="color-text-paragraph-2 font-xs">8
                                                                            mins to read</span></div>
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
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            articles: []
        }
    },
    methods: {
        navigateToCreateArticle() {
            this.$router.push('/admin/create-article')
        }
    },
    async created() {
        await axios.get('articles')
            .then(response => {
                console.log(response)
                let responseData = response.data.data;
                responseData.forEach(element => {
                    this.articles.push(element)
                })
            })
            .catch(error => {
                console.log(error)
            })
        // console.log(this.articles[0])
    }
}
</script>