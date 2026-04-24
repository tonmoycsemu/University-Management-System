<?php include('header.php'); ?>

<?php 
    $dept = isset($_GET['id']) ? (int)$_GET['id'] : 0;
?>
<?php 
    $q="SELECT * FROM dept where id=$dept ORDER BY id ASC";
    $result=mysqli_query($con,$q);
    $rowc=mysqli_fetch_array($result);
?>

        <div class="row page-title page-title-about">
            <div class="container">
                <h2>
                  <i class="<?= htmlspecialchars($rowc['icon']) ?>"></i>
                  <?= htmlspecialchars($rowc['dept'] ?? '') ?>
                </h2>
            </div>
        </div>

        <div class=" section-row evets-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="border-bottom" style="margin:0 0 30px 0;">
                            <div class="my-carousel-div" style="margin:0;">
                                <div id="homeSlider" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators hidden">
                                        <li data-target="#homeSlider" data-slide-to="0" class="active"></li>
                                        <li data-target="#homeSlider" data-slide-to="1"></li>
                                        <li data-target="#homeSlider" data-slide-to="2"></li>
                                        <li data-target="#homeSlider" data-slide-to="3"></li>
                                        <li data-target="#homeSlider" data-slide-to="4"></li>
                                    </ol>

                                    <div class="carousel-inner" role="listbox">

<?php 
$c=0;
$q='SELECT * FROM banner WHERE category='.$dept.' ORDER BY id ASC LIMIT 3';
$result=mysqli_query($con,$q);
while($row=mysqli_fetch_array($result))
{
    $active = ($c==0) ? 'active' : '';
?>                                          
                                        <div class="item <?= $active; ?>">
                                            <img src="admin/<?= htmlspecialchars($row['bannerimg']) ?>" alt="slide1">
                                        </div>

<?php $c++; } ?>                                          
                                    </div>

                                    <a class="left carousel-control" href="#homeSlider" role="button" data-slide="prev">
                                        <span class="fa fa-arrow-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#homeSlider" role="button" data-slide="next">
                                        <span class="fa fa-arrow-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <h3 class="my-h-list-before"><strong>Overview</strong></h3>

                            <p align="justify" style="margin:0 0 30px 0;"><?= nl2br(htmlspecialchars($rowc['overview'] ?? ''))?></p>
                        </div>
                        <div class="research-content">
                            <div class="research-property border-bottom">
                                <h2 class="my-h-list-before"><strong>Message From Head :</strong></h2>
                                <div class="dept-content">
                                    <?php 
                                    $qry='SELECT * FROM faculty where id='.(int)($rowc['faculty'] ?? 0);
                                    $res=mysqli_query($con,$qry);
                                    $rows=mysqli_fetch_array($res);
                                    ?>
                                    <div class="dept-img">
                                        <img src="admin/<?= htmlspecialchars($rows['picture'] ?? '') ?>" alt="" />
                                    </div>
                                    <h4><strong><?= htmlspecialchars($rows['name'] ?? '')?></strong></h4>
                                    <p><strong><?= htmlspecialchars($rowc['details'] ?? '')?></strong></p>
                                    <p align="justify"><?= nl2br(htmlspecialchars($rowc['message_from_head'] ?? ''))?></p>
                                </div>
                            </div>
                            <div class="research-property border-bottom" style="margin:0 0 40px 0;">
                                <h2 class="my-h-list-before"><strong>Curriculam :</strong></h2>
                                <div class="dept-content">
                                    <h4>Session 2015-2016<h4>

                                    <div id="pAccordion" class="p-accordion faq-accordion">
<?php
$semesterTitles = array(
    1 => 'First Semister : I',
    2 => 'Second Semister : II',
    3 => 'Third Semister : III',
    4 => 'Fourth Semister : IV',
    5 => 'Fifth Semister : V',
    6 => 'Sixth Semister : VI',
    7 => 'Seventh Semister : VII',
    8 => 'Eighth Semister : VIII'
);
for($i=1;$i<=8;$i++){
?>
                                        <h4 class="accordion-header"><?= $semesterTitles[$i] ?></h4>
                                        <div class="">
                                            <table class="my-table">
                                                <thead>
                                                    <tr>
                                                        <th>Course No</th>
                                                        <th>Course Title</th>
                                                        <th>Hours/Week <br>
                                                        Theory + Lab</th>
                                                        <th>Credits</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
<?php
    $q="SELECT * FROM curriculam where dept=$dept AND semester='Semester $i' ORDER BY id ASC";
    $result=mysqli_query($con,$q);
    while($row=mysqli_fetch_array($result))
    {
?>                                                    
            <tr>
                <td><?= htmlspecialchars($row['courseCode']) ?></td>
                <td><a href="#"><?= htmlspecialchars($row['courseTitle']) ?></a></td>
                <td><?= htmlspecialchars($row['hours']) ?></td>
                <td><?= htmlspecialchars($row['credit']) ?></td>
            </tr>
    <?php } ?>
                                                </tbody>    
                                            </table>
                                        </div>
<?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="research-property border-bottom">
                                <h2 class="my-h-list-before"><strong>Faculty Details :</strong></h2>
                                <div class="dept-content">
                                    <div class="faculty-content">
                                        <div class="row">
    <?php $q="SELECT * FROM faculty where dept=$dept ORDER BY id ASC";
    $result=mysqli_query($con,$q);
    while($row=mysqli_fetch_array($result))
    {
    ?>                                                    
            <div class="col-md-4">
                <div class="faculty" style="margin: 0 0 20px 0;">
                <div class="faculty-img">
                    <a href="Teacher-details.php?id=<?= (int)$row['id']?>"><img src="admin/<?= htmlspecialchars($row['picture']) ?>" alt="event" /></a>
                </div>
                <p class="text-center"><strong><?= htmlspecialchars($row['name']) ?></strong></p>
                <p class="text-center mb-4"><?= htmlspecialchars($row['designation']) ?></p>
                </div>
            </div>
    <?php } ?>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>

    <?php $q="SELECT * FROM studentadvisor where dept=$dept ORDER BY id ASC";
    $result=mysqli_query($con,$q);
    $row=mysqli_fetch_array($result);
    ?>
                            <div class="research-property">
                                    <h2 class="my-h-list-before"><strong><?= htmlspecialchars($row['designation'] ?? '') ?> :</strong></h2>
                                    <div class="dept-content">
                                        <div class="adviser-content">
                                            <div class="row ">
                                                <div class="col-md-4 ">
                                                    <div class=" faculty-img">
                                                        <img src="admin/<?= htmlspecialchars($row['picture'] ?? '') ?>" alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-md-8 mb-4">
                                                    <h4><strong><?= htmlspecialchars($row['name'] ?? '') ?></strong></h4>
                                                    <p><strong><?= htmlspecialchars($row['designation'] ?? '') ?></strong></p>
                                                    <p align="justify"><?php echo isset($row['details']) ? $row['details'] : ''; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4">
                        <?php include('sidebar.php'); ?>    
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <?php include('footer.php'); ?>