<!DOCTYPE html>
<html lang="en">
<!-- Head section inlcuding jQuery 3.3.1 for use with scripts -->
<!-- Includes a script to resize the Navigation to Nav when the screen shrinks -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School 2 Uni | Home</title>
    <?php include 'includes/styles.php'; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <?php include 'includes/navLabelResize.php'; ?>

</head>
<!-- Body section containing flexible columns displaying data, data is displayed from include files to allow for modularity -->
<body>
    <?php include 'includes/header.php'; ?>
    <div class="navigation" id="topnav">
        <a id="navLabel">Navigation</a>
        <a href="index.php" class="active">Home</a>
        <a href="uni.php" class="inactive">Universities</a>
        <a href="stats.php" class="inactive">Statistics</a>
        <a href="careers.php" class="inactive">Careers</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
<!-- Section containing the flexible columns -->
    <section class="columns">

        <div class="column" id="left">
            <h2>Popular Searches</h2>
            <input type="search" name="searchInput" id="inputChoice" placeholder="Enter search term">
            <p></p>
            <script src="database/storeData.js"></script>
            <?php include 'includes/wordCloud.php'; ?>
        </div>

        <div class="column" id="main">
            <h2>Main Content</h2>
            <h3>Introduction</h3>
            <p>Dear High School Pupil,<br><br>Welcome to the School 2 Uni Site.<br><br>This site was founded in 2018 and created to benefit high school pupils seeking further education in University.<br><br>
                You will find a list of UK universities as well as statistics on students currently in various types of courses. This information is available in easily viewable charts and displays information on both male and female students. We hope this information is useful to you and should you have any questions or suggestions, check out the <a href="contactus.php">contact us page</a>.<br><br>Yours Sincerely
            </p>
            <p id="signature">School 2 Uni Team</p>
        </div>

        <div class="column" id="right">
            <h2>Quick Links A-Z</h2>
            <p>
                <script src="scripts/sidebar_QuickList.js"></script>
            </p>
        </div>
    </section>
<!-- Script for adding a class to the navigation bar to allow it to restyle be responsive -->
    <script>
        /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
        function myFunction() {
            var x = document.getElementById("topnav");
            if (x.className === "navigation") {
                x.className += " responsive";
            } else {
                x.className = "navigation";
            }
            console.log("responsive script ran");
        }

    </script>
<!-- Footer -->
    <?php 
    include 'includes/footer.php'; 
    ?>
</body>

</html>
