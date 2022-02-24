<footer>
        <div class="gradient-bar"></div>
        <div class="container-fluid px-md-5 py-5">
            <div class="row gy-3">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <img src="<?php site_url()?>./wp-content/themes/Fashion/img/Logo-black.png" class="img-fluid w-50" alt="">
                    <p>
                        Fashion Foresight <br>
                        Creative digital technology and new age brand consulting, <br>
                    </p>
                    <p>
                        Dubai design district Haid3,<br>
                        in5 design, container 7 – Dubai
                    </p>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <h4>Helpfull Links</h4>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 pe-lg-4" data-aos="fade-up" data-aos-delay="900">
                    <h4>Latest Posts</h4>
                    <ul>
                        <li><a href="">E-Commerce and the Future 
                            of the Fashion Industry </a></li>
                        <li><a href="">The Future of Marketing With 
                            Technology In Dubai And The 
                            Middle East  </a></li>
                        <li><a href="">How Immersive Technology 
                            Can Enhance Events In The 
                            Middle East  </a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 ps-lg-4" data-aos="fade-up" data-aos-delay="1200">
                    <h4>Follow Us</h4>
                    <a href="" class="social-icons-box"><i class="fab fa-facebook-f"></i></a>
                    <a href="" class="social-icons-box"><i class="fab fa-instagram"></i></a>
                    <a href="" class="social-icons-box"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>
    <script src="http://localhost/fashion-foresight-services/wp-content/themes/Fashion/js/jquery.js"></script>
    <script src="http://localhost/fashion-foresight-services/wp-content/themes/Fashion/js/bootstrap.bundle.js"></script>
    <script src="http://localhost/fashion-foresight-services/wp-content/themes/Fashion/js/main.js"></script>


    
 
    <script>
        <!-- Enabling Parallax Effect -->
        var rellax = new Rellax('.rellax');

        AOS.init({
            mirror: false,
            duration: 1200,
            // once:true,
        });
    </script>

    <script >
        const next = document.querySelector(".carousel-control-next")
        const prev = document.querySelector(".carousel-control-prev")
        const box = document.querySelector(".smooth-box")
        let i = 45
        next.addEventListener("click",function () {
            
            i = i + 90
            box.style.transform = `translate(-50%,-50%) rotate(${i}deg)`
        })
        prev.addEventListener("click",function () {
          
            i = i + -90
            box.style.transform = `translate(-50%,-50%) rotate(${i}deg)`
        })
       
    </script>
</body>

</html>