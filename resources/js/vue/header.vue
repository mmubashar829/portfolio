<template>
    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

        <div class="profile">
            <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="#">{{ data.first_name}}<br>{{ data.last_name }}</a></h1>
            <div class="social-links mt-3 text-center">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a :href="data.skype" target="_blank" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a :href="data.linkedin" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>

        <nav id="navbar" class="nav-menu navbar">
            <ul>
            <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
            <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
            <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
            <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
            <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
            <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
            </ul>
        </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
        <h1>{{ data.first_name}} {{ data.last_name }}</h1>
        <!-- <input id="custom_title" type="hidden" :value="data.title"> -->
        <!-- <p>I'm <span class="typed" data-typed-items="">{{ data.title }}</span></p> -->
        <p><span style="position: relative;animation: mymove 5s infinite;">I'm {{ data.title }}</span></p>
        </div>
    </section><!-- End Hero -->
    
</template>
<style>

@keyframes mymove {
  from {left: 0px;}
  to {left: 100px;}
}
</style>
<script>
export default{
    metaInfo: {
      script: [
        // { src: '/assets/vendor/purecounter/purecounter_vanilla.js', async: true, defer: true },
      ],
    },
    data: function(){
        return{
            data: []
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
        }
    },
    created(){
        this.getData();
    }
}
</script>