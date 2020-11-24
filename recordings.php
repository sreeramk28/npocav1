<!DOCTYPE html>
<html>

<head>
    <title>Recordings</title>
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
    <link rel="stylesheet" href="style/recordings.css">
</head>

<body>
    <!--header -->
    <?php require_once("includes/navbar.php"); ?>
    <div class="page-wrapper opensans-font">
        <p class="ftsz-26 mont-font semibold-emphasis text-center video-repository">Video Repository</p>
        <p class="ftsz-16 desc">An excellent source for exploring careers, learning skills and collaborating with
            industry and academia experts.</p>

        <p class="ftsz-20 semibold-emphasis text-center mt-4">Career Options</p>
        <ul class="recordings recording-wrapper text-center">

        </ul>

        <p class="ftsz-20 semibold-emphasis text-center mt-4">Expert Talks</p>
        <ul class="recordings-2 recording-wrapper text-center">

        </ul>
        <p class="ftsz-20 semibold-emphasis text-center mt-4">Workshops & Courses</p>
        <ul class="recordings-3 recording-wrapper">

        </ul>
    </div>
    <!-- footer -->
    <?php require_once("includes/footersmall.php") ?>
    <!-- Script  -->
    <script src="js/navbar.js" type="text/javascript"></script>
    <script src="js/recordings.js" type="text/javascript"></script>
</body>

</html>