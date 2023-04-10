<template>
    <div class="row">
        <div class="col-lg-12">
            <div class="section-box">
                <div class="container">
                    <div class="panel-white mb-30">
                        <div class="box-padding bg-postjob">
                            <!-- <h5 class="icon-edu">Tell us about your role</h5> -->
                            <div class="row mt-30">
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-30">
                                                <label class="font-sm color-text-mutted mb-10">Title <span
                                                        style="color: red">*</span> </label>
                                                <input class="form-control" type="text" placeholder="How To Write A Resume"
                                                    v-model="title">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-30">
                                                <label class="font-sm color-text-mutted mb-10"> Description
                                                    <span style="color: red">*</span></label>
                                                <textarea class="form-control" name="message" rows="8"
                                                    v-model="description"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group mb-30">
                                                <label class="font-sm color-text-mutted mb-10">Category</label>
                                                <select class="form-control" v-model="selectedCategory">
                                                    <option :key="index" v-for="(category, index) in categories">{{
                                                        category }}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group mb-30">
                                                <div class="box-upload">
                                                    <div class="add-file-upload">
                                                        <input class="form-control" type="file" name="file"
                                                            @change="onChange">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6" v-if="img">
                                            <img v-bind:src="imgPreview" />
                                            <div class="row text-start">
                                                <div>
                                                    <span>{{ img.name }}</span>
                                                </div>
                                                <div>
                                                    <a class="btn btn-delete" @click="img = ''">Delete</a>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mt-10">
                                                <button class="btn btn-default btn-brand icon-tick"
                                                    @click.prevent="createArticle">Create</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'

export default {
    data() {
        return {
            title: '',
            description: '',
            selectedCategory: 'News',
            img: '',
            imgPreview: null,
            categories: []
        }
    },
    methods: {
        onChange(e) {
            this.img = e.target.files[0];
            let reader = new FileReader();
            reader.addEventListener("load", function () {
                this.imgPreview = reader.result;
            }.bind(this), false);

            if (this.img) {
                if (/\.(jpe?g|png|gif)$/i.test(this.img.name)) {
                    reader.readAsDataURL(this.img);
                }
            }
        },
        async createArticle() {
            this.$swal({
                title: 'Success!',
                text: 'Article successfully created',
                icon: 'success',
                confirmButtonColor: '#3C65F5',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', function () {
                        window.swal.stopTimer()
                    });
                    toast.addEventListener('mouseleave', function () {
                        window.swal.resumeTimer()
                    })
                }
            })
            // this.$Progress.start();
            const config = {
                headers: {
                    'content-type': 'multipart/form-data'
                }
            }
            const formData = {
                title: this.title,
                description: this.description,
                category: this.selectedCategory,
                image: this.img
            };
            await axios.post('articles', formData, config)
                .then(response => {
                    console.log(response)
                    // this.$Progress.finish();
                    this.$swal({
                        title: 'Success!',
                        text: 'Article successfully created',
                        icon: 'success',
                        confirmButtonColor: '#3C65F5',
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', function () {
                                window.swal.stopTimer()
                            });
                            toast.addEventListener('mouseleave', function () {
                                window.swal.resumeTimer()
                            })
                        }
                    })
                    this.$router.push('/admin/articles')
                }).catch(error => {
                    console.log(error)
                    // this.$Progress.fail();
                })
        }
    },
    async created() {
        await axios.get('tags?category=Articles')
            .then(response => {
                let responseData = response.data.data;
                responseData.forEach(element => {
                    this.categories.push(element.name)
                });
            }).catch(error => console.log(error))
    }
}
</script>

<style scoped>
input,
label,
textarea,
select {
    color: #000000;
}
</style>