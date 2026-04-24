<?php include('header.php'); ?>

<!-- Gallery Page Extra CSS -->
<link href="gallery-assets/css/all.css" rel="stylesheet" media="screen">
<link href="gallery-assets/css/magnific-popup.css" rel="stylesheet">
<link href="gallery-assets/css/owl.theme.css" rel="stylesheet">
<link href="gallery-assets/css/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="gallery-assets/css/ytplayer.css">
<link href="gallery-assets/css/animate.css" rel="stylesheet">
<link href="gallery-assets/css/style.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<style>
    /* ===== FINAL FOOTER OVERRIDE - SCREENSHOT STYLE ===== */
.footer-row{
    position: relative;
    padding: 70px 0 0 !important;
    margin-top: 0 !important;
    background: url('assets/img/unplash.jpg') center center no-repeat !important;
    background-size: cover !important;
    background-attachment: fixed !important;
    color: #fff !important;
    overflow: hidden;
}

.footer-row:before{
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(7, 37, 63, 0.15);
    z-index: 0;
}

.footer-row .container,
.footer-social-row{
    position: relative;
    z-index: 2;
}

.school-logo{
    text-align: center !important;
    margin-bottom: 40px !important;
}

.school-logo img{
    width: 170px !important;
    max-width: 100% !important;
    height: auto !important;
    display: inline-block !important;
    margin-bottom: 10px !important;
}

.school-logo h4{
    color: #fff !important;
    font-size: 14px !important;
    font-weight: 700 !important;
    letter-spacing: 0.8px !important;
    margin: 0 !important;
    text-transform: uppercase;
}

.footer-item{
    margin-bottom: 20px !important;
}

.footer-item h5{
    color: #fff !important;
    font-size: 14px !important;
    font-weight: 700 !important;
    margin: 0 0 22px 0 !important;
    text-transform: uppercase;
}

.footer-item p{
    color: #fff !important;
    font-size: 14px !important;
    line-height: 1.8 !important;
    margin-bottom: 10px !important;
}

.footer-item p i{
    width: 18px;
    margin-right: 8px !important;
    text-align: center;
    color: #fff !important;
}

.footer-item .quick-link-box a{
    display: block !important;
    color: #fff !important;
    font-size: 14px !important;
    margin: 0 0 10px 0 !important;
    text-decoration: none !important;
    transition: 0.3s ease;
}

.footer-item .quick-link-box a i{
    width: 18px;
    margin-right: 8px !important;
    text-align: center;
}

.footer-item .quick-link-box a:hover{
    color: #7ea7ff !important;
}

.footer-subscribe{
    display: flex !important;
    align-items: center !important;
    height: 46px !important;
    border: 1px solid rgba(255,255,255,0.75) !important;
    background: transparent !important;
    overflow: hidden;
}

.footer-subscribe i{
    color: #fff !important;
    padding: 0 14px !important;
    font-size: 15px !important;
}

.footer-subscribe input{
    flex: 1;
    height: 46px !important;
    border: none !important;
    border-left: 1px solid rgba(255,255,255,0.55) !important;
    background: transparent !important;
    color: #fff !important;
    padding: 0 14px !important;
    outline: none !important;
    box-shadow: none !important;
}

.footer-subscribe input::placeholder{
    color: rgba(255,255,255,0.75) !important;
}

.subscribe-link{
    display: inline-block !important;
    margin: 18px 0 0 !important;
    min-width: 102px;
    height: 42px !important;
    line-height: 42px !important;
    padding: 0 20px !important;
    border: 1px solid #5d61ff !important;
    background: #4b57ff !important;
    color: #fff !important;
    font-size: 14px !important;
    font-weight: 700 !important;
    text-align: center !important;
    border-radius: 0 !important;
    box-shadow: none !important;
}

.subscribe-link:hover{
    background: #fff !important;
    color: #4b57ff !important;
    border-color: #fff !important;
}

.footer-social-row{
    margin-top: 35px !important;
    padding: 28px 0 !important;
    text-align: center !important;
    border-top: 1px solid rgba(255,255,255,0.30) !important;
}

.footer-social-row a{
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    width: 40px !important;
    height: 40px !important;
    margin: 0 6px !important;
    border: 2px solid #fff !important;
    border-radius: 50% !important;
    color: #fff !important;
    background: transparent !important;
    text-decoration: none !important;
    transition: 0.3s ease;
}

.footer-social-row a i{
    font-size: 15px !important;
    color: #fff !important;
}

.footer-social-row a:hover{
    background: #4b57ff !important;
    border-color: #4b57ff !important;
}

@media (max-width: 991px){
    .footer-row{
        padding-top: 55px !important;
    }
}

@media (max-width: 767px){
    .school-logo img{
        width: 150px !important;
    }

    .footer-item{
        margin-bottom: 25px !important;
    }
}

<?php include('header.php'); ?>

<style>
.page-title.page-title-about{
    margin-bottom: 30px;
}

#portfolio{
    padding: 40px 0 60px;
}

.module-header{
    text-align: center;
    margin-bottom: 30px;
}

.module-title{
    font-size: 36px;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 10px;
}

.module-title span{
    color: #4b57ff;
}

.module-line{
    width: 60px;
    height: 2px;
    background: #999;
    margin: 0 auto;
}

#filter{
    list-style: none;
    padding: 0;
    margin: 0 0 30px 0;
    text-align: center;
}

#filter li{
    display: inline-block;
    padding: 10px 22px;
    margin: 0 6px 10px;
    background: #f1f1f1;
    color: #444;
    cursor: pointer;
    font-weight: 600;
    text-transform: uppercase;
    transition: .3s;
}

#filter li.active,
#filter li:hover{
    background: #4b57ff;
    color: #fff;
}

.gallery-grid{
    display: flex;
    flex-wrap: wrap;
    margin: 0 -10px;
}

.gallery-item{
    width: 33.3333%;
    padding: 10px;
    box-sizing: border-box;
}

.gallery-item.hide{
    display: none;
}

.gallery-card{
    background: #fff;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

.gallery-thumb{
    position: relative;
    cursor: pointer;
    overflow: hidden;
}

.gallery-thumb img{
    width: 100%;
    height: 260px;
    object-fit: cover;
    display: block;
    transition: transform .3s ease;
}

.gallery-thumb:hover img{
    transform: scale(1.05);
}

.gallery-thumb:after{
    content: "\002B";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 52px;
    height: 52px;
    line-height: 52px;
    text-align: center;
    font-size: 34px;
    color: #fff;
    background: rgba(75,87,255,.85);
    border-radius: 50%;
    opacity: 0;
    transition: .3s;
}

.gallery-thumb:before{
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,.28);
    opacity: 0;
    transition: .3s;
}

.gallery-thumb:hover:before,
.gallery-thumb:hover:after{
    opacity: 1;
}

.gallery-caption{
    padding: 12px;
    text-align: center;
}

.gallery-caption h3{
    margin: 0;
    font-size: 16px;
    font-weight: 600;
    color: #222;
}

.custom-lightbox{
    display: none;
    position: fixed;
    z-index: 99999;
    inset: 0;
    background: rgba(0,0,0,.88);
}

.custom-lightbox.show{
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 70px;
    box-sizing: border-box;
}

.lightbox-inner{
    display: flex;
    justify-content: center; /* horizontal center */
    align-items: center;     /* vertical center */
    flex-direction: column;  /* title নিচে রাখবে */
}

.lightbox-image{
    max-width: 100%;
    max-height: 78vh;
    width: auto;
    height: auto;
    display: block;
    margin: 0 auto;
    border-radius: 6px;
    box-shadow: 0 0 25px rgba(0,0,0,.45);
    background: #fff;
}

.lightbox-title{
    color: #fff;
    font-size: 22px;
    font-weight: 600;
    margin-top: 14px;
    text-align: center;
}

.lightbox-close,
.lightbox-prev,
.lightbox-next{
    position: absolute;
    border: none;
    cursor: pointer;
    transition: .3s;
    background: rgba(0,0,0,.45);
    color: #fff;
}

.lightbox-close:hover,
.lightbox-prev:hover,
.lightbox-next:hover{
    background: #4b57ff;
}

.lightbox-close{
    top: 50px;
    right: 270px;
    width: 42px;
    height: 42px;
    font-size: 28px;
    line-height: 42px;
    border-radius: 50%;
}

.lightbox-prev,
.lightbox-next{
    top: 50%;
    transform: translateY(-50%);
    width: 46px;
    height: 46px;
    line-height: 46px;
    font-size: 28px;
    border-radius: 50%;
}

.lightbox-prev{
    left: 15px;
}

.lightbox-next{
    right: 15px;
}

@media(max-width: 767px){
    .custom-lightbox.show{
        padding: 15px;
    }

    .lightbox-image{
        max-height: 68vh;
    }

    .lightbox-title{
        font-size: 18px;
    }

    .lightbox-prev,
    .lightbox-next{
        width: 40px;
        height: 40px;
        line-height: 40px;
        font-size: 24px;
    }

    .lightbox-close{
        top: -45px;
        width: 38px;
        height: 38px;
        line-height: 38px;
        font-size: 24px;
    }
}
</style>

<div class="row page-title page-title-about">
    <div class="container">
        <h2 style="color:#fff;"><i class="fas fa-images"></i> Gallery</h2>
    </div>
</div>

<section id="portfolio">
    <div class="container">
        <div class="module-header">
            <h2 class="module-title">Our <span>Gallery</span></h2>
            <div class="module-line"></div>
        </div>

        <ul id="filter">
            <li class="active" data-group="all">All</li>
            <?php
            $catQuery = "SELECT * FROM gallerycategory ORDER BY id ASC";
            $catResult = mysqli_query($con, $catQuery);
            while($catRow = mysqli_fetch_array($catResult)){
            ?>
                <li data-group="<?= (int)$catRow['id'] ?>"><?= htmlspecialchars($catRow['category']) ?></li>
            <?php } ?>
        </ul>

        <div class="gallery-grid" id="galleryGrid">
            <?php
            $q = "SELECT * FROM gallery ORDER BY id DESC";
            $result = mysqli_query($con, $q);
            $galleryItems = [];
            $index = 0;

            while($row = mysqli_fetch_array($result)){
                $imagePath = "admin/" . $row['image'];
                $categoryId = (int)$row['category'];
                $title = htmlspecialchars($row['title']);
                $galleryItems[] = [
                    'src' => $imagePath,
                    'title' => $title,
                    'category' => $categoryId
                ];
            ?>
                <div class="gallery-item"
                     data-category="<?= $categoryId ?>"
                     data-index="<?= $index ?>"
                     data-src="<?= htmlspecialchars($imagePath) ?>"
                     data-title="<?= $title ?>">
                    <div class="gallery-card">
                        <div class="gallery-thumb open-lightbox">
                            <img src="<?= htmlspecialchars($imagePath) ?>" alt="gallery-image">
                        </div>
                        <div class="gallery-caption">
                            <h3><?= $title ?></h3>
                        </div>
                    </div>
                </div>
            <?php
                $index++;
            } ?>
        </div>
    </div>
</section>

<div class="custom-lightbox" id="customLightbox">
    <div class="lightbox-inner">
        <button class="lightbox-close" id="lightboxClose">&times;</button>
        <button class="lightbox-prev" id="lightboxPrev">&#10094;</button>
        <img src="" alt="lightbox-image" class="lightbox-image" id="lightboxImage">
        <button class="lightbox-next" id="lightboxNext">&#10095;</button>
        <div class="lightbox-title" id="lightboxTitle"></div>
    </div>
</div>

<?php include('footer.php'); ?>


<!-- Gallery Specific Scripts Only -->
<script src="gallery-assets/js/jquery.magnific-popup.min.js"></script>
<script src="gallery-assets/js/jquery.parallax-1.1.3.js"></script>
<script src="gallery-assets/js/imagesloaded.pkgd.js"></script>
<script src="gallery-assets/js/jquery.shuffle.min.js"></script>
<script src="gallery-assets/js/owl.carousel.min.js"></script>
<script src="gallery-assets/js/jquery.fitvids.js"></script>
<script src="gallery-assets/js/jquery.sticky.js"></script>
<script src="gallery-assets/js/smoothscroll.js"></script>
<script src="gallery-assets/js/wow.min.js"></script>
<script src="gallery-assets/js/custom.js"></script>
<script src="gallery-assets/js/custom-shuffle-init.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const filterButtons = document.querySelectorAll('#filter li');
    const galleryItems = document.querySelectorAll('.gallery-item');

    const lightbox = document.getElementById('customLightbox');
    const lightboxImage = document.getElementById('lightboxImage');
    const lightboxTitle = document.getElementById('lightboxTitle');
    const lightboxClose = document.getElementById('lightboxClose');
    const lightboxPrev = document.getElementById('lightboxPrev');
    const lightboxNext = document.getElementById('lightboxNext');

    let currentVisibleItems = [];
    let currentPosition = 0;

    function refreshVisibleItems() {
        currentVisibleItems = Array.from(document.querySelectorAll('.gallery-item')).filter(function(item){
            return !item.classList.contains('hide');
        });
    }

    filterButtons.forEach(function(btn){
        btn.addEventListener('click', function(){
            filterButtons.forEach(function(b){ b.classList.remove('active'); });
            btn.classList.add('active');

            const group = btn.getAttribute('data-group');

            galleryItems.forEach(function(item){
                const category = item.getAttribute('data-category');
                if(group === 'all' || group === category){
                    item.classList.remove('hide');
                } else {
                    item.classList.add('hide');
                }
            });

            refreshVisibleItems();
        });
    });

    refreshVisibleItems();

    function openLightboxByElement(item) {
        const src = item.getAttribute('data-src');
        const title = item.getAttribute('data-title');

        refreshVisibleItems();
        currentPosition = currentVisibleItems.indexOf(item);

        lightboxImage.src = src;
        lightboxTitle.textContent = title;
        lightbox.classList.add('show');
        document.body.style.overflow = 'hidden';
    }

    document.querySelectorAll('.open-lightbox').forEach(function(thumb){
        thumb.addEventListener('click', function(){
            const item = thumb.closest('.gallery-item');
            openLightboxByElement(item);
        });
    });

    function showCurrentImage() {
        if(currentVisibleItems.length === 0) return;
        const item = currentVisibleItems[currentPosition];
        lightboxImage.src = item.getAttribute('data-src');
        lightboxTitle.textContent = item.getAttribute('data-title');
    }

    lightboxPrev.addEventListener('click', function(){
        if(currentVisibleItems.length === 0) return;
        currentPosition--;
        if(currentPosition < 0){
            currentPosition = currentVisibleItems.length - 1;
        }
        showCurrentImage();
    });

    lightboxNext.addEventListener('click', function(){
        if(currentVisibleItems.length === 0) return;
        currentPosition++;
        if(currentPosition >= currentVisibleItems.length){
            currentPosition = 0;
        }
        showCurrentImage();
    });

    lightboxClose.addEventListener('click', function(){
        lightbox.classList.remove('show');
        lightboxImage.src = '';
        document.body.style.overflow = '';
    });

    lightbox.addEventListener('click', function(e){
        if(e.target === lightbox){
            lightbox.classList.remove('show');
            lightboxImage.src = '';
            document.body.style.overflow = '';
        }
    });

    document.addEventListener('keydown', function(e){
        if(!lightbox.classList.contains('show')) return;

        if(e.key === 'Escape'){
            lightbox.classList.remove('show');
            lightboxImage.src = '';
            document.body.style.overflow = '';
        }
        if(e.key === 'ArrowLeft'){
            lightboxPrev.click();
        }
        if(e.key === 'ArrowRight'){
            lightboxNext.click();
        }
    });
});
</script>