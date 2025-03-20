<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> M - Tech || Home </title>
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <link rel="icon" type="image/x-icon" href="./img/favicon-16x16.png">
    <link rel="icon" type="image/x-icon" href="./img/favicon-32x32.png">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Google fonts -->
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <!--// bootstrap -->

    <!-- fancy box -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <!-- fancy box -->

    <!-- video -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/magnific-popup.min.css">
    <!-- video -->

    <!-- Table -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <!-- Table -->

</head>

<body>
    <!-- ======================
             HEADER START   
         ====================== -->

  <?php include('header.php'); ?>

    <!-- ======================
               HEADER END   
         ====================== -->

    <!-- ======================
            HERO AREA START   
         ====================== -->
    <section class="banner-area">
        <!-- Banner Video -->
        <video class="banner-video" src="./video/banner-video.mp4" autoplay muted loop> </video>
        <!-- Banner Video -->

        <!-- Banner Slider -->
        <div class="swiper sliderSwiper">
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="slider-content">
                        <h1> Building the <br>
                            future </h1>
                    </div>
                </div>
                <!-- Slide 1 -->

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="slider-content">
                        <h1> Building the <br>
                            future </h1>
                    </div>
                </div>
                <!-- Slide 2 -->

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="slider-content">
                        <h1> Building the <br>
                            future </h1>
                    </div>
                </div>
                <!-- Slide 3 -->


            </div>
            <div class="swiper-pagination"></div>
            <div class="autoplay-progress">
                <svg viewBox="0 0 48 48">
                    <circle cx="24" cy="24" r="20"></circle>
                </svg>
                <span></span>
            </div>
        </div>
        <!-- Banner Slider -->

        <!-- Social Media -->
        <div class="social-media">
            <ul>
                <li> <a href="https://www.linkedin.com/company/mtechbd/" target="_blank"> <i
                            class="fa-brands fa-linkedin"></i> </a> </li>
                <li> <a href="https://www.facebook.com/mtechbd/" target="_blank"> <i class="fa-brands fa-facebook"></i>
                    </a> </li>
                <li> <a href="https://www.instagram.com/mtechbd/" target="_blank"> <i
                            class="fa-brands fa-instagram"></i> </a> </li>
                <li> <a href="https://www.youtube.com/channel/UCd8PnTJH4O8f8o2xZ3Z7R6w" target="_blank"> <i
                            class="fa-brands fa-youtube"></i> </a> </li>

            </ul>
        </div>
        <!-- Social Media -->
        <!-- scroll down arrow -->
        <div class="scroll-down" onclick="scrollDown()">
            <span></span>
        </div>
        <!-- scroll down arrow -->
    </section>
    <!-- ======================
            HERO AREA END   
         ====================== -->



    <!-- ======================
            ABOUT AREA START   
         ====================== -->
    <section class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6 col-md-12 col-12 about-image">
                    <img src="./img/about-1.jpg" alt="about">
                    <img src="./img/about-2.jpg" alt="about">
                </div>
                <div class="col-xl-5 col-lg-6 col-md-12 col-12 about-content">
                    <h2> About Us </h2>
                    <p> MTECH Construction Solutions LLC is a recognized leader in the Middle East market, specializing
                        in the supply of Automatic Jumpform System that uses electronic screw-jacks which are safer,
                        more accurate, cleaner, and more environmentally friendly that hydraulic alternatives and the
                        system enables faster construction on any shape of floor plan, while minimizing personnel
                        requirements maximizing productivity.</p>
                    <img src="./img/iso.jpg" alt="iso certified">
                    <!-- Button -->
                    <a href="about.php" class="btn btn-lg">
                        <span> View More </span>
                    </a>
                    <!-- Button -->
                </div>
            </div>
        </div>
    </section>
    <!-- ======================
            ABOUT AREA END   
         ====================== -->


    <!-- ======================
           PRODUCTS AREA START   
         ====================== -->
    <section class="products-area">
        <div class="container">
            <h2 class="section-title"> Our Product </h2>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 product-home-box">
                    <div class="product-pic">
                        <a href="product-details.php">
                            <div class="box">
                                <img src="./img/products/jump-form-screwjacks.jpg" alt="products">
                                <div class="box-content">
                                    <div class="content">
                                        <ul class="icon">
                                            <li><span href="#"><i class="fa fa-search"></i></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="product-content">
                        <h4> Jump form screwjacks</h4>
                        <!-- Button -->
                        <a href="product-details.php" class="btn btn-lg">
                            <span> View More </span>
                        </a>
                        <!-- Button -->
                    </div>

                </div>
            </div>


        </div>
    </section>
    <!-- ======================
            PRODUCTS AREA END   
         ====================== -->
    <!-- ======================
            SECTOR AREA START   
         ====================== -->
    <section class="sector-area">
        <div class="container">
            <h2 class="section-title"> Industry we serve</h2>
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-10 col-sm-12 sector-home-box">
                    <div class="sector-pic">
                        <a>
                            <div class="box">
                                <img src="./img/sector/sector.jpg" alt="sector">

                            </div>
                        </a>
                    </div>

                    <div class="sector-content">
                        <h4> Commercial </h4>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis aspernatur eius mollitia
                            ipsum ab at numquam libero nesciunt similique esse provident, labore dignissimos molestiae,
                            cum a ratione optio enim velit!</p>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis aspernatur eius mollitia
                            ipsum ab at numquam libero nesciunt similique esse provident, labore dignissimos molestiae,
                            cum a ratione optio enim velit!</p>

                    </div>

                </div>
            </div>


        </div>
    </section>
    <!-- ======================
            SECTOR AREA END   
         ====================== -->


    <!-- ==================================
            REQUEST QUOTATION AREA START   
         ================================== -->
    <section class="request-quotation-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-10 col-md-12 mx-auto">
                    <div class="request-quotation-box">
                        <h3> Request for Quotation </h3>
                        <!-- Button -->
                        <a href="#" class="btn btn-lg" data-toggle="modal" data-target="#exampleModalCenter">
                            <span> View More </span>
                        </a>
                        <!-- Button -->
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close rq" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- body -->
                        <div class="career-form-area">
                            <div class="career-form request-qt">
                                <h2> Request Form </h2>
                                <p> Feel free to use the contact form below or reach out to us directly via phone or
                                    email. We look forward to hearing from you and beginning a conversation about how we
                                    can assist you with your construction needs.
                                </p>


                                <div class="career-form-box">
                                    <form id="contact" class="interest_send">

                                        <div class="form-bg">
                                            <div class="form-container">
                                                <form class="form-horizontal">
                                                    <div class="row justify-content-center">
                                                        <div class="col-xl-5 col-lg-5 col-md-10 form-group">
                                                            <input type="text" class="form-control" placeholder="Name">
                                                        </div>

                                                        <div class="col-xl-5 col-lg-5 col-md-10 form-group">
                                                            <input type="email" class="form-control"
                                                                placeholder="Email">
                                                        </div>
                                                        <div class="col-xl-5 col-lg-5 col-md-10 form-group">
                                                            <input type="text" class="form-control" placeholder="Phone">
                                                        </div>
                                                        <div class="col-xl-5 col-lg-5 col-md-10 form-group city">
                                                            <div class="form-group">
                                                                <label>City</label>
                                                                <select class="form-control">
                                                                    <option value="paris">Paris</option>
                                                                    <option value="new york">New York</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-10 col-lg-10 col-md-10 form-group"><i
                                                                class="fas fa-file"></i>
                                                            <input type="file" class="form-control" id="resume"
                                                                name="resume" accept=".pdf" placeholder=""><br>
                                                            <label style="color:white">(Laden Sie Ihren Lebenslauf oder
                                                                Lebenslauf unter 3 MB hoch)</label>

                                                        </div>

                                                        <div class="col-md-10 form-group">
                                                            <textarea class="form-control" rows="4" cols="120"
                                                                placeholder="Message"></textarea>

                                                        </div>
                                                    </div>
                                                    <!-- Button -->
                                                    <button type="button" class="btn btn-lg mx-auto d-flex"><span>
                                                            SUBMIT</span></button>
                                                    <!-- Button -->

                                                </form>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- body -->
                    </div>

                </div>
            </div>
        </div>
        <!-- modal -->
    </section>
    <!-- ==================================
            REQUEST QUOTATION AREA END   
         ================================== -->


    <!-- ===========================
            OUR SERVICE AREA START   
         =========================== -->
    <section class="service-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-10 col-sm-12 service-home-box">
                    <div class="service-pic">
                        <a href="service-details.php">
                            <div class="box">
                                <h5> Constructing a better future </h5>
                                <img src="./img/service/service.jpg" alt="service">
                                <div class="box-content">
                                    <div class="content">
                                        <ul class="icon">
                                            <li><span href="#"><i class="fa fa-search"></i></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="service-content">
                        <h2> Our Service </h2>
                        <p> We have the unique ability to think like our clients, ensuring integrated solutions that
                            deliver the exceptional quality and safety they expect for their projects.</p>
                        <!-- Button -->
                        <a href="service-details.php" class="btn btn-lg">
                            <span> View More </span>
                        </a>
                        <!-- Button -->

                    </div>

                </div>
            </div>


        </div>
    </section>
    <!-- =========================
            OUR SERVICE AREA END   
         ========================= -->


    <!-- ======================
            FAQ AREA START   
         ====================== -->
    <section class="faq-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-content-box">
                        <h2> What Sets Us Apart </h2>
                        <p> MTECH employs a capable, qualified, and motivated management team to provide
                            excellent services to its clients. Our team are considered experts in the
                            field and understand construction methodologies, programming, and cost
                            constraints, enabling them to deliver value-driven solutions in sync
                            with the Client’s objectives.We maintain the highest standards,
                            apply diligence, pay attention to the details, and ensure best
                            practice and a high level of customer service.

                        </p>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6">
                    <div class="faq-box">
                        <h2> FAQ </h2>
                        <!-- faq -->
                        <div id="accordion">
                            <div class="accordion">
                                <input type="radio" name="radacc" class="accordian-chk" checked />
                                <h4 class="accordian-header active">
                                    Lorem ipsum dolor sit amet consectetur

                                    <span class="acc-icon"></span>
                                </h4>
                                <div class="accordian-content" tabindex="2">

                                    <p>
                                        Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Unde non pariatur accusantium
                                        m, soluta quidem doloribus veniam incidunt, iste natus rem. Corrupti nostrum
                                        adipisci deserunt deleniti.

                                    </p>


                                </div>
                            </div>

                            <div class="accordion">
                                <input type="radio" name="radacc" class="accordian-chk" />
                                <h4 class="accordian-header">
                                    Lorem ipsum dolor sit amet consectetur
                                    <span class="acc-icon"></span>
                                </h4>
                                <div class="accordian-content">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Unde non pariatur accusantium
                                        m, soluta quidem doloribus veniam incidunt, iste natus rem. Corrupti nostrum
                                        adipisci deserunt deleniti.

                                    </p>
                                </div>
                            </div>

                            <div class="accordion">
                                <input type="radio" name="radacc" class="accordian-chk" />
                                <h4 class="accordian-header">
                                    Lorem ipsum dolor sit amet consectetur
                                    <span class="acc-icon"></span>
                                </h4>
                                <div class="accordian-content">

                                    <p>
                                        Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Unde non pariatur accusantium
                                        m, soluta quidem doloribus veniam incidunt, iste natus rem. Corrupti nostrum
                                        adipisci deserunt deleniti.
                                    </p>
                                </div>
                            </div>


                            <div class="accordion">
                                <input type="radio" name="radacc" class="accordian-chk" />
                                <h4 class="accordian-header">
                                    Lorem ipsum dolor sit amet consectetur
                                    <span class="acc-icon"></span>
                                </h4>
                                <div class="accordian-content">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Unde non pariatur accusantium
                                        m, soluta quidem doloribus veniam incidunt, iste natus rem. Corrupti nostrum
                                        adipisci deserunt deleniti.
                                    </p>
                                </div>
                            </div>


                            <div class="accordion">
                                <input type="radio" name="radacc" class="accordian-chk" />
                                <h4 class="accordian-header">
                                    Lorem ipsum dolor sit amet consectetur
                                    <span class="acc-icon"></span>
                                </h4>
                                <div class="accordian-content">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Unde non pariatur accusantium
                                        m, soluta quidem doloribus veniam incidunt, iste natus rem. Corrupti nostrum
                                        adipisci deserunt deleniti.

                                    </p>
                                </div>
                            </div>


                            <div class="accordion">
                                <input type="radio" name="radacc" class="accordian-chk" />
                                <h4 class="accordian-header">
                                    Lorem ipsum dolor sit amet consectetur
                                    <span class="acc-icon"></span>
                                </h4>
                                <div class="accordian-content">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Unde non pariatur accusantium
                                        m, soluta quidem doloribus veniam incidunt, iste natus rem. Corrupti nostrum
                                        adipisci deserunt deleniti.
                                    </p>
                                </div>
                            </div>



                        </div>

                        <!-- faq -->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ======================
            FAQ AREA END   
         ====================== -->



    <!-- ============================
            TESTIMONIALS AREA START   
         ============================ -->
    <section class="testimonial-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10 col-xl-9 col-xl-9">

                    <div class="swiper testimonialSwiper">
                        <h2 class="testi-head"> Testimonials </h2>
                        <div class="swiper-wrapper">

                            <!-- 1 -->
                            <div class="swiper-slide">
                                <div class="testimonial-main-box">
                                    <div class="testimonial-pic">
                                        <img src="./img/testimonials/alen.jpg" alt="testimonials">
                                    </div>
                                    <div class="testimonial-content">
                                        <h4> Alen Baber </h4>
                                        <p> MTECH Jumpforms truly went above and beyond to bring our vision to life.
                                            From the
                                            initial planning stages to the final execution, their team demonstrated
                                            expertise
                                            and dedication every step of the way. We are delighted with the outcome of
                                            our
                                            project and grateful for their outstanding work.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- 1 -->

                            <!-- 1 -->
                            <div class="swiper-slide">
                                <div class="testimonial-main-box">
                                    <div class="testimonial-pic">
                                        <img src="./img/testimonials/elizabath.jpg" alt="testimonials">
                                    </div>
                                    <div class="testimonial-content">
                                        <h4> Elizabeth </h4>
                                        <p> Choosing MTECH Jumpforms for our project was one of the best decisions we
                                            made. Their attention to detail, commitment to quality, and ability to meet
                                            deadlines were truly impressive. We are thrilled with the results and highly
                                            recommend their services.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- 1 -->

                            <!-- 1 -->
                            <div class="swiper-slide">
                                <div class="testimonial-main-box">
                                    <div class="testimonial-pic">
                                        <img src="./img/testimonials/robin.jpg" alt="testimonials">
                                    </div>
                                    <div class="testimonial-content">
                                        <h4> Robin George </h4>
                                        <p> MTECH Jumpforms exceeded our expectations with their exceptional service and
                                            expertise. Their team delivered our project with precision and
                                            professionalism, and the result speaks for itself. We couldn't be happier
                                            with the outcome!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- 1 -->

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================
            TESTIMONIALS AREA END   
         ============================ -->

    <!-- =========================
            CLIENTS AREA START   
         ======================== -->
    <section class="clients-area">
        <div class="client-box">
            <div class="row">
                <div class="col-lg-12">
                    <div class="clients-logo">
                        <div class="swiper clientSwiper">
                            <div class="swiper-wrapper">
                                <!-- slide -->
                                <div class="swiper-slide">
                                    <img src="./img/clients/logo-1.png" alt="logo" />
                                </div>
                                <!-- slide -->
                                <!-- slide -->
                                <div class="swiper-slide">
                                    <img src="./img/clients/logo-2.png" alt="logo" />
                                </div>
                                <!-- slide -->
                                <!-- slide -->
                                <div class="swiper-slide">
                                    <img src="./img/clients/logo-3.png" alt="logo" />
                                </div>
                                <!-- slide -->
                                <!-- slide -->
                                <div class="swiper-slide">
                                    <img src="./img/clients/logo-4.png" alt="logo" />
                                </div>
                                <!-- slide -->
                                <!-- slide -->
                                <div class="swiper-slide">
                                    <img src="./img/clients/logo-5.png" alt="logo" />
                                </div>
                                <!-- slide -->
                                <!-- slide -->
                                <div class="swiper-slide">
                                    <img src="./img/clients/logo-6.png" alt="logo" />
                                </div>
                                <!-- slide -->
                                <!-- slide -->
                                <div class="swiper-slide">
                                    <img src="./img/clients/logo-7.png" alt="logo" />
                                </div>
                                <!-- slide -->
                                <!-- slide -->
                                <div class="swiper-slide">
                                    <img src="./img/clients/logo-8.png" alt="logo" />
                                </div>
                                <!-- slide -->
                                <!-- slide -->
                                <div class="swiper-slide">
                                    <img src="./img/clients/logo-9.png" alt="logo" />
                                </div>
                                <!-- slide -->
                                <!-- slide -->
                                <div class="swiper-slide">
                                    <img src="./img/clients/logo-8.png" alt="logo" />
                                </div>
                                <!-- slide -->
                                <!-- slide -->
                                <div class="swiper-slide">
                                    <img src="./img/clients/logo-7.png" alt="logo" />
                                </div>
                                <!-- slide -->
                                <!-- slide -->
                                <div class="swiper-slide">
                                    <img src="./img/clients/logo-6.png" alt="logo" />
                                </div>
                                <!-- slide -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================
            CLIENTS AREA END   
         ====================== -->
    <!-- ======================
            BLOGS AREA START   
         ====================== -->
    <section class="blogs-area">
        <div class="row blogs-row">
            <div class="col-xl-2 col-lg-4 col-md-12">
                <div id="recent-blogs" class="recent-blogs-box">
                    <div class="recent-blog">
                        <!-- post slide -->
                        <div class="post-slide">

                            <div class="pic">
                                <img src="./img/blogs/blog-1.png" alt="blog">
                                <div class="post-category">
                                    <h6> Structural transformation completes at 76 Southbank </h6>
                                </div>
                            </div>

                        </div>
                        <!-- post slide -->
                    </div>
                    <div class="recent-blog">
                        <!-- post slide -->
                        <div class="post-slide">

                            <div class="pic">
                                <img src="./img/blogs/blog-2.png" alt="blog">
                                <div class="post-category">
                                    <h6> Construction commences on new homes at Television Centre for Phase 2 of the
                                        masterplan
                                        in White City, London </h6>
                                </div>
                            </div>

                        </div>
                        <!-- post slide -->
                    </div>

                </div>
            </div>
            <div class="col-xl-5 col-lg-8 col-md-12">
                <div id="recent-blogs" class="latest-blog-box">
                    <div class="latest-blog">
                        <!-- post slide -->
                        <div class="post-slide">

                            <div class="pic">
                                <img src="./img/blogs/blog-3.png" alt="blog">
                                <div class="post-category">
                                    <h5> Significant milestone achieved at One Leadenhall, in the City of London </h5>
                                </div>
                            </div>

                        </div>
                        <!-- post slide -->
                        <!-- <img src="./img/blogs/blog-3.png" alt="blog">
                        <h5> Significant milestone achieved at One Leadenhall, in the City of London </h5> -->
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-12 col-md-12 blg">
                <div class="blog-content-box">
                    <h2> Blogs </h2>
                    <div class="blog-content">
                        <h4> Significant milestone achieved at One Leadenhall, in the City of London </h4>
                        <p> Congratulations to our project team at One Leadenhall, who celebrated topping out
                            alongside
                            our client Brookfield Properties, marking a major milestone in the project’s delivery.
                        </p>
                        <!-- Button -->
                        <a href="blogs.php" class="btn btn-lg">
                            <span> View More </span>
                        </a>
                        <!-- Button -->
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- ======================
            BLOGS AREA END   
         ====================== -->

         <?php include 'footer.php'; ?>
 

</body>
