<template>
            
        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Skills
                    <button @click="toggleComment(hide_add_skill)" class="btn btn-primary">
                        <i class="fa fa-add" v-show="show  !== hide_add_skill" aria-hidden="true"></i>
                        <i class="fa fa-close" v-show="show  === hide_add_skill" aria-hidden="true"></i>
                    </button>
                </h2>
                <form @submit="addData" enctype="multipart/form-data" v-show="show  === hide_add_skill">
                    <div class="row">
                        <div class="col-lg-6">
                            <label class="form-label">Name</label>
                            <input type="text" required v-model="name" class="form-control">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">value</label>
                            <input type="numeric" required v-model="value" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-1">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row skills-content">

                <div class="row col-lg-6" v-for="item in data" data-aos="fade-up">

                    <form @submit="updateData" enctype="multipart/form-data"  v-if="update_id === item.id"  v-show="show  === hide_update_skill">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="form-label">Name</label>
                                <input type="hidden" required v-model="id" class="form-control">
                                <input type="text" v-model="name" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label">value</label>
                                <input type="numeric" required v-model="value" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-6">
                                <button class="btn btn-warning" type="submit">Update</button>
                            </div>
                        </div>
                    </form>
                    <div class="col-lg-1 pt-1">
                        <button @click="toggleUpdateSkill(hide_update_skill, item.id, item.name, item.value)" class="btn btn-primary">
                            <i class="fa fa-edit" v-if="update_id === item.id" v-show="show  !== hide_update_skill" aria-hidden="true"></i>
                            <i class="fa fa-close" v-if="update_id === item.id" v-show="show  === hide_update_skill" aria-hidden="true"></i>
                            <i class="fa fa-edit" v-else  aria-hidden="true"></i>
                        </button>
                    </div>
                    <div @click="removeData(item.id)" class="col-lg-1 pt-1">
                        <button class="btn btn-danger">
                            <i class="fa fa-minus" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="progress">
                    <span class="skill">{{ item.name }} <i class="val">{{ item.value }}%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" :aria-valuenow="item.value" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>

                </div>

                <!-- <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                    <div class="progress">
                    <span class="skill">PHP <i class="val">80%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>

                    <div class="progress">
                    <span class="skill">WordPress/CMS <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>

                    <div class="progress">
                    <span class="skill">Photoshop <i class="val">55%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>

                </div> -->

            </div>

        </div>
        </section><!-- End Skills Section -->

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
            data:[],
            show: true,
            hide_add_skill: false,
            hide_update_skill: false,
            id: '',
            name: '',
            value: '',
            update_id: null,
        }
    },
    methods: {
        getData () {
            axios.get('api/getSkill')
            .then( response => {
                this.data = response.data;
                console.log(response);
            })
            .catch( error => {
                console.log(error)
            })
        },
        addData(e) {
        //    console.log('submit', this.data)
            e.preventDefault();
            
            const config = {
                headers: { 'content-type': 'multipart/form-data' }
            }

            let formData = new FormData();
            formData.append('name', this.name);
            formData.append('value', this.value);

            axios.post('api/addSkill', formData, config)
            .then( response => {
                console.log(response);
                this.getData();
                this.name = '';
                this.value = '';
            })
            .catch( error => {
                console.log(error)
            });
            this.show = true;
        },
        updateData(e) {
        //    console.log('update', data)
            e.preventDefault();
            
            const config = {
                headers: { 'content-type': 'multipart/form-data' }
            }

            let formData = new FormData();
            formData.append('id', this.id);
            formData.append('name', this.name);
            formData.append('value', this.value);

            axios.post('api/updateSkill', formData, config)
            .then( response => {
                console.log(response);
                this.getData();
                this.toggleUpdateSkill(true);
                this.id = '';
                this.name = '';
                this.value = '';
            })
            .catch( error => {
                console.log(error)
            });
            this.show = true;
        },
        removeData(id) {
           console.log('remove', id)

            axios.post('api/removeSkill/'+id)
            .then( response => {
                console.log(response);
                this.getData();
            })
            .catch( error => {
                console.log(error)
            });
            this.show = true;
        },
        toggleComment(show) {
            console.log(['show',this.hide_add_skill]);
            if(show == false){
                this.hide_add_skill = true;
            }else{
                this.hide_add_skill = false;
            }
        },
        toggleUpdateSkill(show, id, name, value) {
            console.log(['show',this.hide_update_skill]);
            if(show == false){
                this.id = id;
                this.name = name;
                this.value = value;
                this.hide_update_skill = true;
                this.update_id = id;
            }else{
                this.id = '';
                this.name = '';
                this.value = '';
                this.hide_update_skill = false;
                this.update_id = null;
            }
        },
    },
    created(){
        this.getData();
    }
}
</script>