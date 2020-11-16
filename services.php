<!DOCTYPE html>
<html>

<head>
    <title>Services</title>
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
    <link rel="stylesheet" href="style/services.css">
    
</head>
<body>
    
    <!--header -->
    <?php require_once("includes/navbar.php"); ?>
    <!-- Main-Content  -->
    <div class="page-wrapper opensans-font">
        <p class="ftsz-28 bold-emphasis text-center my-3">Services</p>
        <p class="ftsz-16 text-center my-3 services-desc">At NPOCA, we are attempting to build comprehensive career services for school students, which would help them
            identify their talent, explore opportunities and make informed career decisions using the best resource
            available globally.</p>
        <div class="profile-cards my-4">
            <ul class="card-wrapper" id="card-wrapper">
                <li class="card">
                    <div class="card-container">
                        <img class="card-pic" src="./assets/services-page/career-guidance.png" alt="" />
                        <p class="card-title ftzs-18 bold-emphasis">Career Guidance</p>
                        <p class="card-tagline ftzs-18 bold-emphasis">
                            Year long services for career selection &
                            planning
                        </p>
                        <p class="card-info ftsz-13">
                            Attempts to create integrated career programs for school students to help them recognise
                            their skills, pursue opportunities, and make informed career decisions.
                        </p>
                    </div>
                    <div class="card-button">
                        <a class="card-link ftsz-16 bold-emphasis" href="#">Know More<span><img class="card-link-arrow"
                            src="./assets/services-page/read-blog-arrow.png" alt="" /></span></a>
                    </div>
                </li>
                <li class="card">
                    <div class="card-container">
                        <img class="card-pic rect-pic" src="./assets/services-page/events.png" alt="" />
                        <p class="card-title ftzs-18 bold-emphasis">Events</p>
                        <p class="card-tagline ftzs-18 bold-emphasis">
                            Focused activities delivered at specified times
                        </p>
                        <p class="card-info ftsz-13">
                            Part of annual calendar, conducted either as
                            open events or for specific audience.
                        </p>
                    </div>
                    <div class="card-button">
                        <a class="card-link ftsz-16 bold-emphasis" href="#">What's New<span><img class="card-link-arrow"
                            src="./assets/services-page/read-blog-arrow.png" alt="" /></span></a>
                    </div>
                </li>
                <li class="card">
                    <div class="card-container">
                        <img class="card-pic" src="./assets/services-page/project.png" alt="" />
                        <p class="card-title ftzs-18 bold-emphasis">Projects</p>
                        <p class="card-tagline ftzs-18 bold-emphasis">
                            Committing to areas of <br>higher importance
                        </p>
                        <p class="card-info ftsz-13">
                            Creating long term value of issues, which need
                            sustained efforts to provide long term value.
                        </p>
                    </div>
                    <div class="card-button">
                        <a class="card-link ftsz-16 bold-emphasis" href="#">Upcoming Sessions<span><img class="card-link-arrow"
                            src="./assets/services-page/read-blog-arrow.png" alt="" /></span></a>
                    </div>
                </li>
                <li class="card">
                    <div class="card-container">
                        <img class="card-pic" src="./assets/services-page/academic-research.png" alt="" />
                        <p class="card-title ftzs-18 bold-emphasis">Academic Research</p>
                        <p class="card-tagline ftzs-18 bold-emphasis">
                            Driving decisions based on data
                        </p>
                        <p class="card-info ftsz-13">
                            Fund research, to avoid hunch based decisions in
                            the area of Career Education.
                        </p>
                    </div>
                    <div class="card-button fix">
                        <a class="card-link ftsz-16 bold-emphasis" href="#">Know More<span><img class="card-link-arrow"
                            src="./assets/services-page/read-blog-arrow.png" alt="" /></span></a>
                    </div>
                </li>
                <li class="card">
                    <div class="card-container">
                        <img class="card-pic" src="./assets/services-page/advocacy.png" alt="" />
                        <p class="card-title ftzs-18 bold-emphasis">Advocacy</p>
                        <p class="card-tagline ftzs-18 bold-emphasis">
                            Building a nexus of good<br>
                        </p>
                        <p class="card-info ftsz-13">
                            Building consensus on practices and policy
                            around Career Education.
                        </p>
                    </div>
                    <div class="card-button">
                        <a class="card-link ftsz-16 bold-emphasis" href="#">Know More<span><img class="card-link-arrow"
                            src="./assets/services-page/read-blog-arrow.png" alt="" /></span></a>
                    </div>
                </li>
                <!-- <li class="card">
                    <div class="card-container">
                        <img class="card-pic rect-pic career-fix" src="./assets/services-page/career-day.png" alt="" />
                        <p class="card-title ftzs-18 bold-emphasis">Career Day</p>
                        <p class="card-tagline ftzs-18 bold-emphasis">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing
                        </p>
                        <p class="card-info ftsz-13">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing
                        </p>
                    </div>
                    <div class="card-button">
                        <a class="card-link ftsz-16 bold-emphasis" href="#">Know more<span><img class="card-link-arrow"
                                    src="./assets/services-page/read-blog-arrow.png" alt="" /></span></a>
                    </div>
                </li> -->
            </ul>
        </div>
    </div>
    <!-- footer -->
    <?php require_once("includes/footersmall.php") ?>
    <!-- Scripts  -->
    <script src="js/navbar.js" type="text/javascript"></script>
</body>

</html>