<!DOCTYPE html>
<html>

<head>
    <title>Financial Literacy Program</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <?php require_once("includes/bootstrap4.php"); ?>
    <link rel="icon" type="image/jpeg" href="assets/favi.jpeg" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="style/navbar.css" rel="stylesheet">
    <link href="style/footer.css" rel="stylesheet">
    <link href="style/fontstyles.css" rel="stylesheet">
    <link rel="stylesheet" href="style/financial.css">

</head>

<body>
    <!--header -->
    <?php require_once("includes/navbar.php"); ?>
    <div class="page-wrapper opensans-font">
        <div class="financial-banner row">
            <div class="right col-lg-6 text-center order-lg-2">
                <img src="./assets/finance-page/financial banner.svg" alt="">
            </div>
            <div class=" left col-lg-6 order-lg-1">
                <div class="content-box">
                    <p class="ftsz-16 bold-emphasis" style="color: #5b5d5f;">Collaboration with
                    <div id="dash"></div>
                    </p>
                    <p class="ftsz-32 bold-emphasis"><span><img id="bse-logo" src="./assets/finance-page/BSE Logo.png"
                                alt=""></span>
                        <span id="bse-name">BSE <span class="ftsz-16" style="color: #1B2F3F;">(formerly Bombay Stock
                                Exchange)</span></span>
                    </p>
                    <p class="title mont-font semibold-emphasis">Financial Literacy Program</p>
                    <p class="ftsz-20 semibold-emphasis ">Developing money management skills amongst youth</p>
                    <p class="ftsz-14 desc">The fundamentals of managing money are taught to students through financial
                        literacy: budgeting, saving, debt, investing, and lending.</p>
                    <button class="button mt-4">
                        <a class="ftsz-14 bold-emphasis" target="_blank" href="/">Register Now
                            <span>
                                <svg class="bi bi-arrow-right" width="16px" height="16px" viewBox="0 0 16 16"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z">
                                    </path>
                                    <path fill-rule="evenodd"
                                        d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z"></path>
                                </svg>
                            </span>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="overview row mx-0 my-5 align-items-center justify-content-center my-5">
        <div class=" left col-md-6 align-items-center ">
            <img id="overview-img" src="./assets/finance-page/overview-2.png" alt="">
        </div>
        <div class=" right col-md-6">
            <span id="start-quote" class="ftsz-32 bold-emphasis">"</span>
            <p class="ftsz-16">As a country, we've seen where the lack of education in personal finance can lead. Every
                day, millions of
                Indians are struggling with their money, living month after month and relying on credit cards for
                necessities, only to wind up massively in debt and short of hope. Beyond that, many Indians find that
                because of their own loan debt, large car payments, and general lack of financial planning, they do not
                buy houses, save for retirement, or save for their child's college fund. But it doesn't need to be like
                that. If financial literacy had been taught earlier, in school, a lot of the money problems Indians face
                could have been avoided. That's why we think that, as part of their school curriculum, more schools
                should offer financial literacy courses.</p>
            <span id="end-quote" class="ftsz-32 bold-emphasis" style="float: right;">"</span>
            <br>
            <br>
            <button class="button know-more">
                <a class="ftsz-14 bold-emphasis" target="_blank" href="#">Know More </a>
            </button>
        </div>
    </div>
    <div class="need-overlay row mx-0 my-5 opensans-font">
        <div class="need-left col-md-5 col-12 px-0">
            <img src="./assets/finance-page/need-left-bg.png" alt="" />
            <div class="need-left-content">
                <div class="need-left-box">
                    <img class="need-left-img" src="./assets/finance-page/read.png" alt="">
                    <h2 class="need-left-title mont-font">What you'll learn</h2>
                </div>
            </div>
        </div>
        <div class="need-right col-md-7 col-12 px-0">
            <img src="./assets/finance-page/need-right-bg.png" alt="" />
            <div class="need-right-content row">
                <div class="col-6 px-0">
                    <ul>
                        <li>Understand the concept of Personal Financial and money Management</li>
                        <li>Understand Banking systems, instruments used, and how to they work</li>
                        <li>Learn about Education loans and its nuances</li>
                    </ul>
                </div>
                <div class="col-6 px-1">
                    <ul>
                        <li>Understand Savings, benefits of starting early and how compounding helps money grow </li>
                        <li>Understand the risks of online banking and how to minimize it using cyber security</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="page-wrapper opensans-font my-5 text-center offering">
        <p class="ftsz-26 mont-font semibold-emphasis">This course includes</p>
        <p class="ftsz-16 desc">Lorem ipsum dolor sit amet, consectetuer adipiLorem ipsum dolor sit
            amet, consectetuer
            adipiLorem ipsum dolor sit amet, consectetuer adipiit amet, consectetuer adipiLorem ipsum dolor sit amet,
            consectetuer adipiLorem ipsum dolor sit amet, consectetuer ad</p>
        <div class="row course text-center">
            <div class="col-sm-6 my-4 text-center">
                <div class="content text-center">
                    <img src="./assets/finance-page/Group 1185.svg" alt="">
                    <p class="ftsz-18 semibold-emphasis mont-font mt-2">9 hours on-demand video</p>
                    <p class="ftsz-16 mt-2" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetuer adipiLorem ipsum dolor sit amet,
                    consectetuer adipiLorem ipsum dolor sit amet, consectetuer adipi</p>
                </div>
                
            </div>
            <div class="col-sm-6 my-4">
                <div class="content text-center">
                    <img src="./assets/finance-page/Group 1188.svg" alt="">
                    <p class="ftsz-18 semibold-emphasis mont-font mt-2">Project & Assignment</p>
                    <p class="ftsz-16 mt-2" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetuer adipiLorem ipsum dolor sit amet,
                    consectetuer adipiLorem ipsum dolor sit amet, consectetuer adipi</p>
                </div>
            </div>
            <div class="col-sm-6 my-4">
                <div class="content text-center">
                    <img src="./assets/finance-page/Group 1193.svg" alt="">
                    <p class="ftsz-18 semibold-emphasis mont-font mt-2">Access on mobile and computer</p>
                    <p class="ftsz-16 mt-2" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetuer adipiLorem ipsum dolor sit amet,
                    consectetuer adipiLorem ipsum dolor sit amet, consectetuer adipi</p>
                </div>
            </div>
            <div class="col-sm-6 my-4">
                <div class="content text-center">
                    <img src="./assets/finance-page/Group 1197.svg" alt="">
                <p class="ftsz-18 semibold-emphasis mont-font mt-2">Certificate of completion</p>
                <p class="ftsz-16 mt-2" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetuer adipiLorem ipsum dolor sit amet,
                    consectetuer adipiLorem ipsum dolor sit amet, consectetuer adipi</p>
                </div>
            </div>
        </div>
    </div>
    <div class="need-overlay row mx-0 my-5 opensans-font">
        <div class="need-left col-md-5 col-12 px-0">
            <img src="./assets/finance-page/benefit-left-bg.png" alt="" />
            <div class="need-left-content">
                <div class="need-left-box">
                    <img class="need-left-img" src="./assets/finance-page/benefits.png" alt="">
                    <h2 class="need-left-title mont-font benefit">Benefits</h2>
                </div>
            </div>
        </div>
        <div class="need-right col-md-7 col-12 px-0">
            <img src="./assets/finance-page/need-right-bg.png" alt="" />
            <div class="need-right-content ">
                <ul class="list ">
                    <li class="item px-1">
                        Think about the jump start your child could get on life if, when they passed high school, they
                        were already in the habit of budgeting, saving regularly and spending wisely!
                    </li>
                    <li class="item px-1">
                        Students who learn
                        the fundamentals of personal finance at an early stage have the most time to apply their
                        expertise and get the most from it. Better still, many students apply what they learn
                        immediately – while still at school.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="page-wrapper opensans-font my-5">
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6 text-center program-left">
                    <img class="my-2" height="147px" width="147px" src="./assets/careerday-page/program-left.png"
                        alt="">
                    <h4 class="mont-font ftsz-16 bold-emphasis">Recommended for :</h4>
                    <p class="ftsz-16">School Students from Class IX onwards</p>
                </div>
                <div class="col-md-6 text-center">
                    <img class="my-2" height="147px" width="147px" src="./assets/careerday-page/program-right.png"
                        alt="">
                    <h4 class="mont-font ftsz-16 bold-emphasis">Program Format :</h4>
                    <p class="ftsz-16">Online, over Zoom.</p>
                </div>
            </div>
            <div class="last-section text-center my-5">
                <p class="ftsz-18 yellow">The Experience</p>

                <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <p class="info">What a valuable gift to the people of India! NPOCA is a major force for the
                                advancement of career services in this country and deserves the attention of all people
                                who care about the future of India and its children.
                            </p>
                            <img style="border-radius: 50%;" height="60px" width="60px"
                                src="./assets/careerday-page/marilynmaze.jpg" alt="">
                            <h5 class="person">Dr. Marilyn Maze</h5>
                            <p class="designation">Executive Director<br>Asia Pacific Career Development Association</p>
                        </div>
                        <!-- <div class="carousel-item active">
                            <p class="info">A big thanks to NPOCA for extending support for our Annual Career Week -
                                'Making Informed Choices -2020'.
                                The event was action-packed with speakers of repute from an array of career fields.
                                They not only connected with our students, giving them new knowledge but also answered
                                all their queries.
                                A unique blend between academic research and industrial applications was seen for the
                                very first time in this annual event.
                                The feedback from parents, students, and all other attendees has been really
                                encouraging.
                                Making Informed choices 2020 was a resounding success but this could not have been
                                possible without the support of NPOCA.
                            </p>
                            <img style="border-radius: 50%;" height="40px" width="40px"
                                src="./assets/careerday-page/nbs.jpg" alt="">
                            <h5 class="person">Nidhi Aggarwal</h5>
                            <p class="designation">School Counselor, Nirmal Bhartia School, Delhi</p>
                        </div> -->
                        <!--<div class="carousel-item ">
                            <p class="info">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                            </p>
                            <img height="40px" width="40px" src="./assets/Ellipse 22.png" alt="">
                            <h5 class="person">Another One</h5>
                            <p class="designation">Chief Executive Officer of NPOCA</p>
                        </div> -->
                        <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"><img
                                    src="./assets/careerday-page/Path 370.png" alt=""></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"><img
                                    src="./assets/careerday-page/Path 371.png" alt=""></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class="more-info my-5">
                    <h2 class="semibold-emphasis mont-font ftsz-26">For More Information</h2>
                    <p class="desc-info">Interested in conducting Career Day at your school or want to know more, get in
                        touch with us on</p>
                    <div class="contact-boxes-wrap">
                        <div class="contact-box">
                            <img src="assets/contact-page/Building icon.svg" height="50" width="50">
                            <table>
                                <tr>
                                    <td class="pdr-10">
                                        <img src="assets/contact-page/pin  address.svg" height="20" width="20">
                                    </td>
                                    <td>
                                        <span class="opensans-font semibold-emphasis ftsz-12">
                                            Noida, Uttar Pradesh, India
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pdr-10">
                                        <img src="assets/contact-page/phone.svg" height="20" width="20">
                                    </td>
                                    <td>
                                        <span class="opensans-font semibold-emphasis ftsz-12">
                                            <a class="num-link" href="tel:+918588013322">
                                                +91 85880 13322
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="contact-box">
                            <img src="assets/contact-page/Mail icon.svg" height="50" width="50">
                            <table>
                                <tr>
                                    <td class="pdr-10">
                                        <img src="assets/contact-page/teacher girl.svg" height="20" width="20">
                                    </td>
                                    <td>
                                        <span class="opensans-font semibold-emphasis ftsz-12 orangish">
                                            <a href="mailto:sambhav@npoca.com"
                                                class="orangish">sambhav@npoca.com</a><br>
                                        </span>
                                        <span class="opensans-font semibold-emphasis ftsz-12" style="color: #666666">
                                            (For schools only)
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pdr-10">
                                        <img src="assets/contact-page/mail.svg" height="20" width="20">
                                    </td>
                                    <td>
                                        <span class="opensans-font semibold-emphasis ftsz-12">
                                            <a href="mailto:arun@npoca.com" class="orangish">arun@npoca.com</a>
                                        </span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="contact-box">
                            <img src="assets/contact-page/group chat.svg" height="50" width="50">
                            <p class="opensans-font semibold-emphasis ftsz-12" style="color: #666666">
                                Join our Whatsapp Group
                            </p>
                            <p class="opensans-font semibold-emphasis ftsz-12">
                                NPOCA Academic Group
                            </p>
                            <a class="join-button" href="https://wa.me/message/454W2XXUX4MQG1">
                                <span class="mont-font bold-emphasis ftsz-14" style="margin-right: 12px;">
                                    Join Now
                                </span>
                                <img src="assets/contact-page/whatsapp.svg" height="20" width="20">
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php require_once("includes/footersmall.php") ?>
    <script src="js/navbar.js" type="text/javascript"></script>
</body>

</html>