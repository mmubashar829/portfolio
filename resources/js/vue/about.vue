<template>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div id="show_about" class="container" v-show="show  === show_about">

            <div class="section-title">
            <h2>About
                <button @click="toggleComment(show)" class="btn btn-primary">
                    <i class="fa fa-edit" aria-hidden="true"></i>
                </button>
            </h2>
            <!-- <p>{{ data.sumary }}</p> -->
            <p>{{ data.sumary }}</p>
            </div>

            <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                <img :src="'storage/profile_pic/'+ data.profile_pic" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>{{ data.title }}</h3>
                <p class="fst-italic">
                </p>
                <div class="row">
                <div class="col-lg-6">
                    <ul>
                    <!-- <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>1 May 1995</span></li> -->
                    <!-- <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li> -->
                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ data.phone }}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ data.city }}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ data.age }}</span></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{ data.degree }}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{ data.email }}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>{{ data.freelance }}</span></li>
                    </ul>
                </div>
                </div>
                <p></p>
            </div>
            </div>

        </div>
        <div id="hide_about" class="container" v-show="show  === hide_about">
            <form @submit="submit" enctype="multipart/form-data">
                <div class="section-title">
                    <h2>About
                        <button @click="toggleComment(show)" class="btn btn-primary">
                            <i class="fa fa-check" aria-hidden="true"></i>
                        </button>
                    </h2>
                    <!-- <p>{{ data.sumary }}</p> -->
                    <textarea style="height: 193px" class="col-lg-12 form-control" v-model="data.sumary">
                        
                    </textarea>
                    </div>

                    <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img :src="'storage/profile_pic/'+ data.profile_pic" class="img-fluid" alt="">
                        <input type="file" @change="onfilechange" id="profile_pic" name="profile_pic" class="btn btn-primary" title="Upload" style="width: 100%;" accept="image/png, image/gif, image/jpg, image/jpeg">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <!-- <h3>{{ data.title }}</h3> -->
                        <input  v-model="data.title" class="col-lg-12 form-control"  style="width: 100%;">
                        <p class="fst-italic">
                        </p>
                        <div class="row">
                        <div class="col-lg-6">
                            <ul>
                            <!-- <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>1 May 1995</span></li> -->
                            <!-- <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li> -->
                            <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <input style="width: 80%;" class="col-lg-4 form-control"  v-model="data.phone"></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <input style="width: 85%;" class="col-lg-4 form-control"  v-model="data.city"></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <input style="width: 86%;" class="col-lg-4 form-control"  v-model="data.age"></li>
                            <!-- <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ data.phone }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ data.city }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ data.age }}</span></li> -->
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <input style="width: 75%;" class="col-lg-4 form-control"  v-model="data.degree"></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <input style="width: 78%;" class="col-lg-4 form-control"  v-model="data.email"></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <input style="width: 69%;" class="col-lg-4 form-control"  v-model="data.freelance"></li>
                            <!-- <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{ data.degree }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{ data.email }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>{{ data.freelance }}</span></li> -->
                            </ul>
                        </div>
                        </div>
                        <p></p>
                    </div>
                </div>
                <br>
                <div class="col-lg-12" style="text-align: center;">
                    <button class="btn btn-primary" style="width: 250px;" type="submit">Submit</button>
                </div>
            </form>

        </div>
    </section><!-- End About Section -->
</template>

<script>
export default{
    metaInfo: {
      script: [
        // { src: '/assets/vendor/purecounter/purecounter_vanilla.js', async: true, defer: true },
      ],
    },
    data: function(){
        return{
            hide_about: false,
            show_about: true,
            data: [],
            show: true,
            image: '',
        }
    },
    methods: {
        getData () {
            axios.get('api/index')
            .then( response => {
                this.data = response.data;
                console.log(response);
            })
            .catch( error => {
                console.log(error)
            })
        },
        toggleComment(show) {
            console.log(['show',this.show]);
            if(show == true){
                this.show = false;
            }else{
                this.show = true;
            }
        },
        submit(e) {
        //    console.log('submit', this.data)
            e.preventDefault();
            
            const config = {
                headers: { 'content-type': 'multipart/form-data' }
            }

            let formData = new FormData();
            formData.append('image', this.image);
            formData.append('sumary', this.data.sumary);
            formData.append('title', this.data.title);
            formData.append('phone', this.data.phone);
            formData.append('city', this.data.city);
            formData.append('age', this.data.age);
            formData.append('degree', this.data.degree);
            formData.append('email', this.data.email);
            formData.append('freelance', this.data.freelance);

            axios.post('api/updateAbout', formData, config)
            .then( response => {
                this.data = response.data;
                console.log(response);
            })
            .catch( error => {
                console.log(error)
            });
            this.show = true;
        },
        onfilechange(e){
            console.log(e.target.files[0]);
            this.image = e.target.files[0];
        },
    },
    created(){
        this.getData();
    }
}
</script>