<?php
include('admin/dbconnect.php');

header('Content-Type: application/json; charset=utf-8');

$q = isset($_GET['q']) ? trim($_GET['q']) : '';

if ($q === '') {
    echo json_encode([]);
    exit();
}

$keyword = "%{$q}%";
$data = [];

/* =========================
   DEPARTMENT SEARCH
========================= */
$sql = "SELECT id, dept AS title, 'Department' AS type
        FROM dept
        WHERE dept LIKE ? OR overview LIKE ? OR details LIKE ?
        LIMIT 6";

$stmt = mysqli_prepare($con, $sql);
if ($stmt) {
    mysqli_stmt_bind_param($stmt, "sss", $keyword, $keyword, $keyword);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($res)) {
        $data[] = [
            'type'  => $row['type'],
            'title' => $row['title'],
            'link'  => 'dept.php?id=' . urlencode($row['id'])
        ];
    }
    mysqli_stmt_close($stmt);
}

/* =========================
   FACULTY SEARCH
========================= */
$sql = "SELECT id, name AS title, designation, 'Faculty' AS type
        FROM faculty
        WHERE name LIKE ? OR designation LIKE ? OR details LIKE ?
        LIMIT 6";

$stmt = mysqli_prepare($con, $sql);
if ($stmt) {
    mysqli_stmt_bind_param($stmt, "sss", $keyword, $keyword, $keyword);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($res)) {
        $data[] = [
            'type'  => $row['type'],
            'title' => $row['title'] . ' - ' . $row['designation'],
            'link'  => 'Teacher-details.php?id=' . urlencode($row['id'])
        ];
    }
    mysqli_stmt_close($stmt);
}

/* =========================
   COURSE SEARCH
========================= */
$sql = "SELECT courseCode, courseTitle, 'Course' AS type
        FROM curriculam
        WHERE courseCode LIKE ? OR courseTitle LIKE ?
        LIMIT 8";

$stmt = mysqli_prepare($con, $sql);
if ($stmt) {
    mysqli_stmt_bind_param($stmt, "ss", $keyword, $keyword);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($res)) {
        $data[] = [
            'type'  => $row['type'],
            'title' => $row['courseCode'] . ' - ' . $row['courseTitle'],
            'link'  => 'search.php?q=' . urlencode($row['courseCode'])
        ];
    }
    mysqli_stmt_close($stmt);
}

/* =========================
   NOTICE SEARCH
========================= */
$sql = "SELECT id, title, 'Notice' AS type
        FROM noticeboard
        WHERE title LIKE ? OR details LIKE ?
        LIMIT 6";

$stmt = mysqli_prepare($con, $sql);
if ($stmt) {
    mysqli_stmt_bind_param($stmt, "ss", $keyword, $keyword);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($res)) {
        $data[] = [
            'type'  => $row['type'],
            'title' => $row['title'],
            'link'  => 'notice.php'
        ];
    }
    mysqli_stmt_close($stmt);
}

/* =========================
   ADMISSION SEARCH
========================= */
if (stripos($q, 'admission') !== false || stripos($q, 'apply') !== false) {
    $data[] = [
        'type'  => 'Admission',
        'title' => 'Admission Information',
        'link'  => 'admission.php'
    ];
}

/* =========================
   ACADEMIC PROGRAM SEARCH
========================= */
if (
    stripos($q, 'academic') !== false ||
    stripos($q, 'program') !== false ||
    stripos($q, 'programs') !== false
) {
    $data[] = [
        'type'  => 'Academic Program',
        'title' => 'Academic Programs',
        'link'  => 'academic.php'
    ];
}

/* =========================
   REMOVE DUPLICATES
========================= */
$unique = [];
foreach ($data as $item) {
    $key = $item['type'] . '|' . $item['title'] . '|' . $item['link'];
    $unique[$key] = $item;
}
$data = array_values($unique);

/* =========================
   SORT RESULTS
========================= */
usort($data, function ($a, $b) {
    return strcmp($a['type'], $b['type']);
});

echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
?>