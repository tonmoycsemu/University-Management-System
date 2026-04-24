                    <div class="right-event-items">
                        <div class="right-side-admission">
                            <p>Admission Going On Summer-2026</p>
                        </div>
                        <div class="right-side-notice">
                            <h3 class="my-h-list-before">Notice Board</h3>
                            <ul class="list-group news-event-list">
                                    <?php
                                        $q='SELECT * FROM noticeboard ORDER BY id DESC LIMIT 10';
                                        $result=mysqli_query($con,$q);
                                        while($row=mysqli_fetch_array($result))
                                        {
                                    ?>
                                            <li><a href="notice-details.php?id=<?= intval($row['id']) ?>"><i class="fa fa-angle-double-right"></i>  <?= htmlspecialchars($row['dates']) . ' ' . nl2br(htmlspecialchars(substr($row['title'],0,100))) ?></a></li>
                                    <?php
                                        }
                                    ?>
                                </ul>
                        </div>



                        <div class="right-side-nav">
                            <ul class="list-group side-dept-list">
                                    <?php
                                    $q = "SELECT * FROM dept ORDER BY id ASC LIMIT 8";
                                    $result = mysqli_query($con,$q);
                                    if ($result && mysqli_num_rows($result) > 0) {
                                        while($row=mysqli_fetch_array($result))
                                        {
                                            echo '<li><a href="dept.php?id='.intval($row['id']).'">'.htmlspecialchars($row['dept']).'</a></li>';
                                        }
                                    } else {
                                        echo '<li><a href="#">No Department Found</a></li>';
                                    }
                                    ?>
                                    <li><a href="classRoutine.php">Class Routine</a></li>
                                    <li><a href="forms.php">Forms</a></li>
                                    <li><a href="library.php">Library</a></li>
                                    <li><a href="campus-life.php">Campus Life</a></li>
                                    <li><a href="research.php">Research</a></li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>