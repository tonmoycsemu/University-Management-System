<?php
include('admin/dbconnect.php');

$q = isset($_GET['q']) ? trim($_GET['q']) : '';
$keyword = "%$q%";

$deptRes = false;
$facultyRes = false;
$courseRes = false;
$noticeRes = false;

if ($q != '') {

    // ================= DEPARTMENT =================
    $sql1 = "SELECT id, dept, overview
             FROM dept
             WHERE dept LIKE ? OR overview LIKE ? OR details LIKE ?";
    $stmt1 = mysqli_prepare($con, $sql1);
    mysqli_stmt_bind_param($stmt1, "sss", $keyword, $keyword, $keyword);
    mysqli_stmt_execute($stmt1);
    $deptRes = mysqli_stmt_get_result($stmt1);

    // ================= FACULTY =================
    $sql2 = "SELECT id, name, designation
             FROM faculty
             WHERE name LIKE ? OR designation LIKE ? OR details LIKE ?";
    $stmt2 = mysqli_prepare($con, $sql2);
    mysqli_stmt_bind_param($stmt2, "sss", $keyword, $keyword, $keyword);
    mysqli_stmt_execute($stmt2);
    $facultyRes = mysqli_stmt_get_result($stmt2);

    // ================= COURSES =================
    $sql3 = "SELECT courseCode, courseTitle
             FROM curriculam
             WHERE courseCode LIKE ? OR courseTitle LIKE ?";
    $stmt3 = mysqli_prepare($con, $sql3);
    mysqli_stmt_bind_param($stmt3, "ss", $keyword, $keyword);
    mysqli_stmt_execute($stmt3);
    $courseRes = mysqli_stmt_get_result($stmt3);

    // ================= NOTICE =================
    $sql4 = "SELECT id, title, details, dates
             FROM noticeboard
             WHERE title LIKE ? OR details LIKE ?";
    $stmt4 = mysqli_prepare($con, $sql4);
    mysqli_stmt_bind_param($stmt4, "ss", $keyword, $keyword);
    mysqli_stmt_execute($stmt4);
    $noticeRes = mysqli_stmt_get_result($stmt4);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search Result</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background:#f5f7fb;
            font-family: Arial, sans-serif;
        }
        .search-wrap{
            margin-top:60px;
            margin-bottom:60px;
        }
        .search-card{
            background:#fff;
            border-radius:12px;
            box-shadow:0 8px 25px rgba(0,0,0,0.08);
            padding:30px;
        }
        .result-card{
            background:#fff;
            border:1px solid #e9ecef;
            border-radius:10px;
            padding:18px;
            margin-bottom:15px;
        }
        .result-card h4{
            margin-top:0;
            margin-bottom:8px;
            font-size:22px;
        }
        .section-title{
            margin-top:30px;
            margin-bottom:15px;
            font-weight:700;
        }
        .back-btn{
            margin-top:20px;
        }
        .search-form{
            display:flex;
            gap:10px;
            margin-bottom:25px;
        }
        .search-form input{
            height:45px;
        }
        .search-form button{
            height:45px;
        }
    </style>
</head>
<body>

<div class="container search-wrap">
    <div class="search-card">
        <h2>Search Results</h2>

        <form method="GET" action="search.php" class="search-form">
            <input
                type="text"
                name="q"
                class="form-control"
                placeholder="Type something to search..."
                value="<?php echo htmlspecialchars($q); ?>"
                required
            >
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        <?php if ($q == ''): ?>
            <div class="alert alert-info">Type something to search.</div>
        <?php else: ?>

            <h4>Search results for: <strong><?php echo htmlspecialchars($q); ?></strong></h4>
            <hr>

            <!-- ================= DEPARTMENT ================= -->
            <h3 class="section-title">Departments</h3>
            <?php if ($deptRes && mysqli_num_rows($deptRes) > 0): ?>
                <?php while($row = mysqli_fetch_assoc($deptRes)): ?>
                    <div class="result-card">
                        <h4><?php echo htmlspecialchars($row['dept']); ?></h4>
                        <p><?php echo htmlspecialchars(mb_strimwidth(strip_tags($row['overview']), 0, 180, '...')); ?></p>
                        <a href="dept.php?id=<?php echo urlencode($row['id']); ?>" class="btn btn-primary btn-sm">View Details</a>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No Department Found</p>
            <?php endif; ?>

            <!-- ================= FACULTY ================= -->
            <h3 class="section-title">Faculty</h3>
            <?php if ($facultyRes && mysqli_num_rows($facultyRes) > 0): ?>
                <?php while($row = mysqli_fetch_assoc($facultyRes)): ?>
                    <div class="result-card">
                        <h4><?php echo htmlspecialchars($row['name']); ?></h4>
                        <p><?php echo htmlspecialchars($row['designation']); ?></p>
                        <a href="Teacher-details.php?id=<?php echo urlencode($row['id']); ?>" class="btn btn-success btn-sm">View Details</a>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No Faculty Found</p>
            <?php endif; ?>

            <!-- ================= COURSES ================= -->
            <h3 class="section-title">Courses</h3>
            <?php if ($courseRes && mysqli_num_rows($courseRes) > 0): ?>
                <?php while($row = mysqli_fetch_assoc($courseRes)): ?>
                    <div class="result-card">
                        <h4><?php echo htmlspecialchars($row['courseTitle']); ?></h4>
                        <p>Code: <?php echo htmlspecialchars($row['courseCode']); ?></p>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No Course Found</p>
            <?php endif; ?>

            <!-- ================= NOTICE ================= -->
            <h3 class="section-title">Notices</h3>
            <?php if ($noticeRes && mysqli_num_rows($noticeRes) > 0): ?>
                <?php while($row = mysqli_fetch_assoc($noticeRes)): ?>
                    <div class="result-card">
                        <h4><?php echo htmlspecialchars($row['title']); ?></h4>
                        <p><?php echo htmlspecialchars(mb_strimwidth(strip_tags($row['details']), 0, 200, '...')); ?></p>
                        <p><strong>Date:</strong> <?php echo htmlspecialchars($row['dates']); ?></p>
                        <a href="notice.php" class="btn btn-warning btn-sm">View Notice Board</a>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No Notice Found</p>
            <?php endif; ?>

            <!-- ================= QUICK LINKS ================= -->
            <h3 class="section-title">Quick Links</h3>

            <?php
            $qLower = strtolower($q);
            $hasQuick = false;
            ?>

            <?php if (strpos($qLower, 'admission') !== false || strpos($qLower, 'apply') !== false): ?>
                <?php $hasQuick = true; ?>
                <div class="result-card">
                    <h4>Admission</h4>
                    <p>Go to the admission page for application and admission-related information.</p>
                    <a href="admission.php" class="btn btn-info btn-sm">View Admission</a>
                </div>
            <?php endif; ?>

            <?php if (strpos($qLower, 'academic') !== false || strpos($qLower, 'program') !== false || strpos($qLower, 'programs') !== false): ?>
                <?php $hasQuick = true; ?>
                <div class="result-card">
                    <h4>Academic Programs</h4>
                    <p>Go to the academic programs page to explore all available academic programs.</p>
                    <a href="academic.php" class="btn btn-dark btn-sm">View Academic Programs</a>
                </div>
            <?php endif; ?>

            <?php if (!$hasQuick): ?>
                <p>No Quick Link Found</p>
            <?php endif; ?>

        <?php endif; ?>

        <a href="index.php" class="btn btn-default back-btn">← Back to Home</a>
    </div>
</div>

</body>
</html>