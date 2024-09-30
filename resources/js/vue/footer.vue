<template>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>{{ data.first_name}} {{ data.last_name }}</span></strong>
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
            Designed by <a href="#">{{ data.first_name}} {{ data.last_name }}</a>
        </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    
    
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