<?php include('admin/dbconnect.php'); ?>
<?php
session_start();
$msg=NULL;

if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == 1) {
    header('Location: login_index.php');
    exit();
}

if (isset($_POST['login'])) {

    $id = $_POST['id'];
    $password = $_POST['password'];

    $q="SELECT * FROM student WHERE studentID='$id' AND password='$password'";
    $res=mysqli_query($con,$q);
    $rowcount=mysqli_num_rows($res);

    if($rowcount>0){
        $_SESSION["id"] = $id;
        $_SESSION["loggedIn"] = 1;

        header('Location: login_index.php');
        exit();
    }
    else{
        $msg="Login Failed! Try Again";
    }
}
?>
<!DOCTYPE html>
<html>
<head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="">
        <title>Unipix University</title>

        <!-- Styles -->
        <link rel="icon" href="assets/img/fav.svg"/> 
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="assets/css/owl.carousel.min.css" rel="stylesheet" media="screen">
        <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" media="screen">
        <link href="assets/css/style.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">
        <style>
            .number-row {
    padding: 50px 0;
}

.number-card {
    background: #fff;
    border: 1px solid #eee;
    border-radius: 10px;
    padding: 30px 20px;
    margin: 10px 0;
    text-align: center;
    transition: 0.3s;
    
    /* Box Shadow */
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

/* Hover effect (optional but সুন্দর লাগে) */
.number-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.2);
}

.number-card i {
    font-size: 30px;
    margin-bottom: 10px;
    color: #4c6ef5;
}

.number-card span {
    display: block;
    font-size: 28px;
    font-weight: bold;
    color: #000;
}

.number-card p {
    margin-top: 5px;
    font-size: 14px;
    color: #555;
    font-weight: 600;
}

.about-row {
    margin-left: -15px;
    margin-right: -15px;
}

.about-row > div {
    padding-left: 15px;
    padding-right: 15px;
    margin-bottom: 30px;
}

.we-offer-item {
    background: #fff;
    padding: 35px 25px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    transition: 0.3s;
    min-height: 260px;
    position: relative;
}

.we-offer-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

.we-offer-side {
    width: 70px;
    height: 70px;
    line-height: 70px;
    margin: 0 auto 20px;
    border: 2px solid #4c6ef5;
    border-radius: 50%;
    color: #4c6ef5;
    font-size: 28px;
    background: #fff;
}

.we-offer-item h5 {
    font-weight: 700;
    margin-bottom: 15px;
    color: #222;
}

.we-offer-item p {
    font-size: 15px;
    line-height: 1.8;
    color: #666;
    margin: 0;
}

.about-row .col-sm-6.col-md-4 {
    margin-bottom: 40px;
}

.section-row-header-center h1 {
    position: relative;
}

.section-row-header-center h1::after {
    content: "";
    width: 60px;
    height: 3px;
    background: #4c6ef5;
    display: block;
    margin: 10px auto 0;
}

.top-nav-search{
    margin-right: 10px;
    margin-top: 2px;
}

.top-nav-search form{
    display: flex;
    align-items: center;
    height: 32px;
    background: rgba(255,255,255,0.12);
    border: 1px solid rgba(255,255,255,0.20);
    border-radius: 30px;
    overflow: hidden;
    transition: 0.3s ease;
}

.nav-search-input{
    width: 200px !important;
    height: 32px;
    border: none;
    outline: none;
    background: transparent;
    color: #fff;
    padding: 0 10px;
    font-size: 13px;
    box-shadow: none;
}

.nav-search-input::placeholder{
    color: rgba(255,255,255,0.75);
}

.nav-search-btn{
    width: 32px;
    height: 32px;
    border: none;
    outline: none;
    background: rgba(255,255,255,0.92);
    color: #222;
    cursor: pointer;
    font-size: 13px;
    transition: 0.3s ease;
}

.nav-search-btn:hover{
    background: #4b57ff;
    color: #fff;
}

.top-nav-social a{
    width: 32px;
    height: 32px;
    line-height: 32px;
    text-align: center;
    font-size: 13px;
    margin-left: 4px;
}

/* =========================================
   FORCE MOBILE RESPONSIVE OVERRIDE
========================================= */
@media only screen and (max-width: 767px){

    html, body{
        overflow-x: hidden !important;
        width: 100% !important;
    }

    .container,
    .container-fluid,
    .row{
        width: 100% !important;
        max-width: 100% !important;
        margin-left: 0 !important;
        margin-right: 0 !important;
        padding-left: 10px !important;
        padding-right: 10px !important;
        box-sizing: border-box !important;
    }

    [class*="col-"]{
        width: 100% !important;
        max-width: 100% !important;
        flex: 0 0 100% !important;
        float: none !important;
        padding-left: 10px !important;
        padding-right: 10px !important;
    }

    img{
        max-width: 100% !important;
        height: auto !important;
    }

    /* ===== top navbar ===== */
    .top-navbar{
        padding: 8px 0 !important;
        margin-top: 0 !important;
    }

    .top-navbar .pull-right,
    .top-navbar .pull-left{
        float: none !important;
    }

    .top-navbar .pull-right{
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        flex-wrap: wrap !important;
        gap: 6px !important;
        width: 100% !important;
    }

    .top-nav-search{
        margin: 0 !important;
        display: inline-block !important;
    }

    .top-nav-search form{
        display: flex !important;
        align-items: center !important;
        height: 30px !important;
        margin: 0 !important;
    }

    .nav-search-input{
        width: 110px !important;
        min-width: 110px !important;
        max-width: 110px !important;
        height: 30px !important;
        font-size: 12px !important;
        padding: 0 8px !important;
    }

    .nav-search-btn{
        width: 30px !important;
        min-width: 30px !important;
        height: 30px !important;
        font-size: 12px !important;
    }

    .top-nav-social{
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        flex-wrap: wrap !important;
        padding: 0 !important;
        margin: 0 !important;
    }

    .top-nav-social a{
        display: inline-block !important;
        margin: 0 2px !important;
        padding: 0 !important;
        width: auto !important;
        height: auto !important;
        line-height: normal !important;
    }

    .top-nav-social a i{
        width: 28px !important;
        height: 28px !important;
        line-height: 18px !important;
        font-size: 11px !important;
        padding: 5px !important;
        border-radius: 50% !important;
    }

    /* ===== brand / logo ===== */
    .navbar-brand,
    .trans-menu .navbar-default .navbar-brand{
        margin: 0 !important;
        padding: 8px 10px !important;
        height: auto !important;
    }

    .navbar-brand img,
    .trans-menu .navbar-default .navbar-brand img,
    .logo img{
        width: 120px !important;
        max-width: 120px !important;
        height: auto !important;
    }

    .navbar-toggle{
        margin-top: 10px !important;
        margin-right: 10px !important;
        margin-bottom: 10px !important;
    }

    /* ===== navbar / menu ===== */
    .navbar,
    .navbar-default,
    .trans-menu{
        min-height: auto !important;
    }

    .navbar-header{
        float: none !important;
        width: 100% !important;
    }

    .navbar-collapse{
        width: 100% !important;
        border-top: none !important;
        box-shadow: none !important;
        background: rgba(0,0,0,0.92) !important;
        margin-top: 0 !important;
        max-height: none !important;
    }

    .navbar-nav{
        float: none !important;
        margin: 0 !important;
        width: 100% !important;
    }

    .navbar-nav > li{
        float: none !important;
        width: 100% !important;
    }

    .navbar-nav > li > a{
        display: block !important;
        width: 100% !important;
        font-size: 13px !important;
        padding: 10px 15px !important;
        line-height: 1.4 !important;
        text-align: left !important;
    }

    .navbar-nav .dropdown-menu{
        position: static !important;
        float: none !important;
        width: 100% !important;
        background: #111 !important;
        box-shadow: none !important;
        border: none !important;
    }

    /* ===== slider ===== */
    .carousel,
    .carousel-inner,
    .carousel-inner > .item{
        height: 300px !important;
        min-height: 300px !important;
    }

    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img{
        width: 100% !important;
        height: 300px !important;
        object-fit: cover !important;
    }

    .carousel-caption{
        top: 24% !important;
        left: 10px !important;
        right: 10px !important;
        bottom: auto !important;
        padding: 0 10px !important;
    }

    .carousel-caption h4{
        font-size: 12px !important;
        line-height: 1.5 !important;
        margin-bottom: 8px !important;
    }

    .carousel-caption h2{
        font-size: 24px !important;
        line-height: 1.25 !important;
        margin: 8px 0 12px !important;
    }

    .carousel-caption p{
        font-size: 12px !important;
        line-height: 1.5 !important;
    }

    .carousel-caption a,
    .slider-btn,
    .know-more-btn{
        font-size: 12px !important;
        padding: 10px 16px !important;
        display: inline-block !important;
    }

    .carousel-control{
        width: 34px !important;
        height: 34px !important;
        top: 45% !important;
    }

    /* ===== generic sections ===== */
    .p-100{
        padding: 45px 0 !important;
    }

    section,
    .section,
    .home-section{
        overflow: hidden !important;
    }

    h1{
        font-size: 28px !important;
        line-height: 1.25 !important;
    }

    h2{
        font-size: 24px !important;
        line-height: 1.3 !important;
    }

    h3{
        font-size: 20px !important;
        line-height: 1.35 !important;
    }

    h4{
        font-size: 16px !important;
        line-height: 1.4 !important;
    }

    p{
        font-size: 13px !important;
        line-height: 1.7 !important;
    }

    /* ===== departments / notice / cards / boxes ===== */
    .department-box,
    .dept-box,
    .department-item,
    .notice-board,
    .facility-box,
    .affiliation-box,
    .card,
    .box{
        width: 100% !important;
        max-width: 100% !important;
        float: none !important;
        margin-left: 0 !important;
        margin-right: 0 !important;
    }

    table{
        width: 100% !important;
        display: block !important;
        overflow-x: auto !important;
    }

    /* ===== footer ===== */
    .footer-row,
    footer{
        text-align: center !important;
    }

    .footer-item,
    .school-logo{
        margin-bottom: 20px !important;
        text-align: center !important;
    }

    .footer-social-row{
        text-align: center !important;
    }
}

@media (max-width: 767px){
    .principal-intro h2,
    .principal-intro h3,
    .principal-intro a{
        text-align: center;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .principal-intro a{
        width: fit-content;
        margin-top: 10px;
    }
}

@media (max-width: 767px){
    .principal-intro{
        text-align: center !important;
    }

    .principal-intro p{
        text-align: left !important;
    }

    .principal-intro .btn,
    .principal-intro a{
        display: inline-block !important;
        margin-top: 12px !important;
    }
}

@media (max-width: 767px){
    h2{
        text-align: center !important;
    }

    h2::after{
        left: 50% !important;
        transform: translateX(-50%) !important;
    }
}

@media (max-width: 767px){

    .principal-intro{
        text-align: center !important;
    }

    .principal-intro h3{
        position: relative !important;
        display: inline-block !important;
        padding-bottom: 0 !important;
        margin-bottom: 18px !important;
    }

    .principal-intro h3::before{
        content: "" !important;
        position: absolute !important;
        width: 60px !important;
        height: 3px !important;
        background: #4f46e5 !important;
        left: 50% !important;
        transform: translateX(-50%) !important;

        top: 100% !important;     /* heading er niche */
        margin-top: 4px !important;
        bottom: auto !important;  /* old bottom cancel */
    }
}

@media (max-width: 767px){

    .navbar-brand{
        position: absolute !important;
        top: -13px !important;   /* adjust if needed */
        left: 50% !important;
        transform: translateX(-50%) !important;
        z-index: 9999 !important;
    }

    .navbar-brand img{
        width: 80px !important;
    }

}

.top-nav-search{
    position: relative;
    margin-right: 10px;
    margin-top: 2px;
}

#searchResultBox{
    position: absolute;
    top: 40px;
    left: 0;
    width: 100%;
    min-width: 280px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.18);
    overflow: hidden;
    z-index: 99999;
    display: none;
    text-align: left;
}

.search-item{
    padding: 10px 14px;
    border-bottom: 1px solid #eee;
}

.search-item:last-child{
    border-bottom: none;
}

.search-item small{
    color: #666;
    font-size: 11px;
    text-transform: uppercase;
    font-weight: 700;
}

.search-item a{
    color: #222;
    text-decoration: none;
    display: inline-block;
    margin-top: 3px;
}

.search-item:hover{
    background: #f7f9fc;
}
        </style>

   </head>
    <body>
        <div class="row nav-row trans-menu scroll-nav">
            <div class="container nav-container">
                <div class="top-navbar">
                    <div class = "pull-right">
                        <!-- 🔍 SEARCH (NEW ADD) -->
                        <div class="top-nav-search pull-left">
                            <form action="search.php" method="GET">
                                <input type="text" name="q" placeholder="Search..." class="nav-search-input">
                                <button type="submit" class="nav-search-btn">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                            <div id="searchResultBox"></div>
                        </div>
                        <div class="top-nav-social pull-left">
                            <a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a>
                            <a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
                            <a href="javascript:void(0);"><i class="fab fa-google-plus-g"></i></a>
                            <a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class = "clearfix"></div>
                </div> 
                <div class = "clearfix"></div>
                <nav id="pNavbar" class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#pNavbarCollapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"><img src="assets/img/logo__white.svg" alt="logo" class="img-fluid"></a>
                    </div>

                    <div class="collapse navbar-collapse" id="pNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php"><i class="fa fa-home"></i>HOME</a></li>
                            <li><a href="about.php"><i class="fa fa-info-circle"></i>ABOUT <i class="fa fa-caret-down"></i></a>
                                <ul class="drop">
                                    <li><a href="contact.php"><i class="fas fa-envelope"></i> CONTACT US</a></li>
                                    <li><a href="research.php"><i class="fas fa-flask"></i> Research</a></li>
                                    <li><a href="gallery.php"><i class="fas fa-images"></i> Gallery</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-phone-square"></i>Student Portal <i class="fa fa-caret-down"></i></a>
                                <ul class="drop">
                                    <li><a href="result.php"><i class="fas fa-poll"></i> Results</a></li>
                                    <li><a href="classRoutine.php"><i class="fas fa-calendar-alt"></i> Class Routine</a></li>
                                    <li><a href="forms.php"><i class="fas fa-file-alt"></i> Forms</a></li>
                                    <li><a href="library.php"><i class="fas fa-book"></i> Library</a></li>
                                    <li><a href="campus-life.php"><i class="fas fa-university"></i> Campus Life</a></li>
                                </ul>
                            </li>

                            <li><a><i class="fa fa-book"></i>Department <i class="fa fa-caret-down"></i></a>
                                <ul class="drop">
                                    <?php
                                    $deptQuery = "SELECT * FROM dept ORDER BY id ASC LIMIT 8";
                                    $deptResult = mysqli_query($con, $deptQuery);
                                    if ($deptResult && mysqli_num_rows($deptResult) > 0) {
                                        while($deptRow = mysqli_fetch_array($deptResult)) {
                                            ?>
                                            <li>
                                                <a href="dept.php?id=<?= intval($deptRow['id']) ?>">
                                                    <i class="<?= htmlspecialchars($deptRow['icon']) ?>"></i>
                                                    <?= htmlspecialchars($deptRow['dept']) ?>
                                                </a>
                                            </li>
                                            <?php
                                        }
                                    } else {
                                        echo '<li><a href="#">No Department Found</a></li>';
                                    }
                                    ?>
                                </ul>
                            </li>

                            <li>
                                <a><i class="fas fa-graduation-cap"></i> Academics <i class="fas fa-caret-down"></i></a>
                                <ul class="drop">
                                    <li><a href="admission.php"><i class="fas fa-user-plus"></i> Admission</a></li>
                                    <li><a href="academic.php"><i class="fas fa-book-open"></i> Academic Programs</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="notice.php"><i class="fa fa-exclamation"></i>Notice</a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#loginModal"><i class="fas fa-sign-in-alt"></i>LOGIN</a>
                            </li>

                        </ul>
                    </div>
                </nav>


<script>
const input = document.querySelector('.nav-search-input');
const resultBox = document.getElementById('searchResultBox');

input.addEventListener('keyup', function() {
    let query = this.value.trim();

    if(query.length < 2){
        resultBox.innerHTML = "";
        resultBox.style.display = "none";
        return;
    }

    fetch('search_api.php?q=' + encodeURIComponent(query))
    .then(res => res.json())
    .then(data => {
        let html = "";

        if(data.length === 0){
            html = "<div class='search-item'>No result found</div>";
        } else {
            data.forEach(item => {
                html += `
                    <div class="search-item">
                        <small>${item.type}</small><br>
                        <a href="${item.link}">${item.title}</a>
                    </div>
                `;
            });
        }

        resultBox.innerHTML = html;
        resultBox.style.display = "block";
    })
    .catch(() => {
        resultBox.innerHTML = "<div class='search-item'>Search error</div>";
        resultBox.style.display = "block";
    });
});

document.addEventListener('click', function(e){
    if(!e.target.closest('.top-nav-search') && !e.target.closest('#searchResultBox')){
        resultBox.style.display = "none";
    }
});
</script>
            </div>
        </div>

    </body>
    </html>