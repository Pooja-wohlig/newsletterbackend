	<div id="page-title">
	<a class="btn btn-primary btn-labeled fa fa-plus margined pull-right" href="<?php echo site_url("site/createnewsletter"); ?>">Create</a>
	<a class="btn btn-default btn-labeled fa fa-plus margined pull-right" href="<?php echo site_url("site/exportexcelreport"); ?>">Export CSV</a>
	<h1 class="page-header text-overflow">Newsletter Details</h1>
</div>
<div id="page-content">
<div class="row">
	<div class="col-lg-12">
			<div class="panel drawchintantable">
				<?php $this->chintantable->createsearch("Newsletter List");?>
				<div class="fixed-table-container">
					<div class="fixed-table-body">
				<table class="table table-hover" id="" cellpadding="0" cellspacing="0">
						<thead>
						<tr>
							<th data-field="id">ID</th>
<th data-field="email">Email</th>
<th data-field="timestamp">Time stamp</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
				<?php $this->chintantable->createpagination();?>
			</div>
		</section>
		<script>
function drawtable(resultrow) {
return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.email + "</td><td>" + resultrow.timestamp + "</td><td><a class='btn btn-primary btn-xs' href='<?php echo site_url('site/editnewsletter?id=');?>"+resultrow.id+"'><i class='icon-pencil'></i></a><a class='btn btn-danger btn-xs' href='<?php echo site_url('site/deletenewsletter?id='); ?>"+resultrow.id+"'><i class='icon-trash '></i></a></td></tr>";
}
generatejquery("<?php echo $base_url;?>");
</script>
	</div>
</div>
</div>
</div>
</div>
</div>
