<div id="page-title">
	<a href="<?php echo site_url("site/viewnewsletter"); ?>" class="btn btn-primary btn-labeled fa fa-arrow-left margined pull-right">Back</a>
	<h1 class="page-header text-overflow">Newsletter Details</h1>
</div>
<div id="page-content">
	<div class="row">
		<div class="col-lg-12">
			<section class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Create Newsletter</h3>
				</div>
				<div class="panel-body">
					<form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/createnewslettersubmit");?>' enctype='multipart/form-data'>
						<div class="panel-body">
							<div class="form-group">
<label class="col-sm-2 control-label" for="normal-field">Email</label>
<div class="col-sm-4">
<input type="email" id="normal-field" class="form-control" name="email" value='<?php echo set_value('email');?>'>
</div>
</div>

							<div class="form-group">
								<label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
								<div class="col-sm-4">
									<button type="submit" class="btn btn-primary">Save</button>
									<a href="<?php echo site_url("site/viewnewsletter"); ?>" class="btn btn-secondary">Cancel</a>
								</div>
							</div>
					</form>
					</div>
			</section>
			</div>
		</div>
	</div>