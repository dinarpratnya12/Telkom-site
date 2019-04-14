<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">
		<?php echo $title; ?>
	</h1>
	
	<div class="col-lg-6">
		<table class="table table-bordered table-hover">
			<thead>
				<th>No</th>
				<th>Survey_date</th>
				<th>...</th>
			</thead>
			<tbody>
				<?php foreach ($data as $key => $value): ?>
					<tr>
						<td><?php echo ++$key; ?></td>
						<td><?php echo $value->survey_date ?></td>
						<td>...</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
