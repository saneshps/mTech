<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> M - Tech || Career Form </title>
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <link rel="icon" type="image/x-icon" href="./img/favicon-16x16.png">
    <link rel="icon" type="image/x-icon" href="./img/favicon-32x32.png">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <!--// bootstrap -->
    <!-- Table -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <!-- Table -->
</head>

<body>
    <!-- ======================
             HEADER START   
         ====================== -->

   <?php include 'header.php'; ?>

    <!-- ======================
               HEADER END   
         ====================== -->



    <!-- ======================
            BANNER AREA START   
         ====================== -->
    <section class="page-banner-area career-form-hero">
        <!-- Page Banner -->
        <div class="page-banner">
            <h1> Job Opportunities </h1>
        </div>
        <!-- Page Banner -->
    </section>
    <!-- ======================
             BANNER AREA END   
         ====================== -->

    <!-- ==========================
             JOB STRIP AREA START   
         ========================== -->
    <section class="job-strip-area">
        <div class="container">
            <div class="row job-strip-box">
                <div class="col-xl-8 col-lg-9 col-md-10 col-sm-12">
                    <h5> If you are interested in a career with Multiplex, search our global job opportunities below.
                    </h5>
                </div>
            </div>

        </div>
    </section>
    <!-- =========================
             JOB STRIP AREA END   
         ========================= -->
    <!-- =========================
             VACANCIES AREA START   
         ========================= -->
    <section class="vacancies-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 vacancies-head">
                    <h2> Search Results </h2>
                    <h6> There are 14 opportunities matching your search criteria </h6>
                </div>
            </div>
            <!-- tabl -->
            <div class="row">
                <div class="col-md-12 vacancies-table">
                    <table class="responsive-table">
                        <thead>
                            <tr>
                                <th scope="col">POSITION</th>
                                <th scope="col">DISCIPLINE</th>
                                <th scope="col">JOB TYPE</th>
                                <th scope="col">LOCATION</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <th scope="row">Contracts Administrator</th>
                                <td data-title="Released">Construction</td>
                                <td data-title="Studio">Full Time</td>
                                <td data-title="Worldwide Gross" data-type="currency"> AUS - NSW - Regional</td>
                            </tr>
                            <tr>
                                <th scope="row">Senior IT Business Analyst</th>
                                <td data-title="Released">Support - IT, Legal, HR, Marketing & Communications</td>
                                <td data-title="Studio">Full Time</td>
                                <td data-title="Worldwide Gross" data-type="currency">AUS - Sydney</td>
                            </tr>
                            <tr>
                                <th scope="row">Project Lead (M&E)</th>
                                <td data-title="Released">Construction</td>
                                <td data-title="Studio">Full Time</td>
                                <td data-title="Worldwide Gross" data-type="currency">UK - London</td>
                            </tr>
                            <tr>
                                <th scope="row">Package Manager (Facade)</th>
                                <td data-title="Released">Construction</td>
                                <td data-title="Studio">Full Time</td>
                                <td data-title="Worldwide Gross" data-type="currency">AUS - NSW - Regional</td>
                            </tr>
                            <tr>
                                <th scope="row">Contracts Administrator</th>
                                <td data-title="Released">Construction</td>
                                <td data-title="Studio">Full Time</td>
                                <td data-title="Worldwide Gross" data-type="currency">AUS - Adelaide</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- tabl -->
        </div>
    </section>
    <!-- =========================
             VACANCIES AREA END   
         ========================= -->

    <!-- ============================
             CAREER FORM AREA START   
         ============================ -->
    <section class="career-form-area">
        <div class="container">
            <div class="row career-form">
                <div class="col-xl-8">
                    <h2> Apply Now </h2>
                    <p> Feel free to use the contact form below or reach out to us directly via phone or email. We look
                        forward to hearing from you and beginning a conversation about how we can assist you with your
                        construction needs.
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
                                                <input type="email" class="form-control" placeholder="Email">
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
                                                <input type="file" class="form-control" id="resume" name="resume"
                                                    accept=".pdf" placeholder=""><br>
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
        </div>
    </section>
    <!-- =========================
             CAREER FORM AREA END   
         ========================= -->



    <?php include 'footer.php'; ?>
</body>
 