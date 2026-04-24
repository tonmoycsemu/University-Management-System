<?php include('admin/dbconnect.php'); ?>
<div class="research-property">
	<h2 class="my-h-list-before"><strong>Contact :</strong></h2>
	<div class="row">
<?php 
	$q='SELECT * FROM contactinfo';
    $result=mysqli_query($con,$q);
    $rows=mysqli_fetch_array($result);
?>			
		<div class="col-md-3">
			<img src="admin/<?= htmlspecialchars($rows['picture'] ?? '') ?>" class="img-fluid">
		</div>
		<div class="col-md-9">
			<div class="dept-content">	
				<h4><?= htmlspecialchars($rows['name'] ?? '') ?></h4>
				<p style="margin:0;color: #000;"><?= htmlspecialchars($rows['address'] ?? '') ?></p>
				<p style="margin:0;color: #000;"><strong>Phone :</strong> <?= htmlspecialchars($rows['phone'] ?? '') ?></p>
				<p style="margin:0;color: #000;"><strong>Fax :</strong> <?= htmlspecialchars($rows['fax'] ?? '') ?></p>
				<p style="margin:0;color: #000;"><strong>Website :</strong> <?= htmlspecialchars($rows['website'] ?? '') ?></p>
				<p style="margin:0;color: #000;"><strong>E-mail :</strong> <?= htmlspecialchars($rows['email'] ?? '') ?></p>
				<p style="margin:0;color: #000;"><strong>Website Name :</strong> <?= htmlspecialchars($rows['name'] ?? '') ?></p>
			</div>
		</div>
	</div>
</div>