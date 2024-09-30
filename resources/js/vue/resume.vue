<template>
    
        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
            <h2>Resume</h2>
            </div>

            <div class="row">
            <div class="col-lg-6" data-aos="fade-up">
                <div id="show_summary" v-show="show  === show_summary">
                    <h3 class="resume-title">Sumary
                        <button @click="toggleComment(show)" class="btn btn-primary">
                            <i class="fa fa-edit" aria-hidden="true"></i>
                        </button>
                    </h3>
                    <div class="resume-item pb-0">
                        <h4>{{ data.first_name }} {{ data.last_name }}</h4>
                        <p><em>{{ data.sumary }}</em></p>
                        <ul>
                            <li>{{ data.city }}</li>
                            <li>{{ data.phone }}</li>
                            <li>{{ data.email }}</li>
                        </ul>
                    </div>
                </div>
                <div id="hide_summary" v-show="show  === hide_summary">
                    <form @submit="submit" enctype="multipart/form-data">
                        <h3 class="resume-title">Sumary
                            <button @click="toggleComment(show)" class="btn btn-primary">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </button>
                        </h3>
                        <div class="resume-item pb-0">
                            <h4><input style="width: 50%" v-model="data.first_name"> <input style="width: 49%" v-model="data.last_name"></h4>
                            <p><em>
                                    <textarea style="height: 180px; width: 100%" v-model="data.sumary">

                                    </textarea>
                                </em>
                            </p>
                            <ul>
                                <li><input style="width: 47%" v-model="data.city"></li>
                                <li><input style="width: 47%" v-model="data.phone"></li>
                                <li><input style="width: 47%" v-model="data.email"></li>
                            </ul>
                        </div>
                        <br>
                        <div class="col-lg-12" style="text-align: center;">
                            <button class="btn btn-primary" style="width: 250px;" type="submit">Update</button>
                        </div>
                    </form>
                </div>

                <h3 class="resume-title">Education</h3>
                <div class="resume-item">
                <h4>Master of Fine Arts &amp; Graphic Design</h4>
                <h5>2015 - 2016</h5>
                <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
                </div>
                <div class="resume-item">
                <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
                <h5>2010 - 2014</h5>
                <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <h3 class="resume-title">Professional Experience</h3>
                <div class="resume-item">
                <h4>Senior graphic design specialist</h4>
                <h5>2019 - Present</h5>
                <p><em>Experion, New York, NY </em></p>
                <ul>
                    <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                    <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                    <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                    <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
                </ul>
                </div>
                <div class="resume-item">
                <h4>Graphic design specialist</h4>
                <h5>2017 - 2018</h5>
                <p><em>Stepping Stone Advertising, New York, NY</em></p>
                <ul>
                    <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
                    <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                    <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                    <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
                </ul>
                </div>
            </div>
            </div>

        </div>
        </section><!-- End Resume Section -->

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
            hide_summary: false,
            show_summary: true,
            data: [],
            show: true,
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
            formData.append('first_name', this.data.first_name);
            formData.append('last_name', this.data.last_name);
            formData.append('sumary', this.data.sumary);
            formData.append('city', this.data.city);
            formData.append('phone', this.data.phone);
            formData.append('email', this.data.email);

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
    },
    created(){
        this.getData();
    }
}
</script>