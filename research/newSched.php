<script>
$(document).ready(function() {
	$('#schedResDateTime').datepicker({
	});
});

</script>

<header class="w3-container" style="padding-top:22px">
	<h5><b><i class="fa fa-book fa-fx"></i> New Reseach</b><hr style="margin:0px" /></h5>
</header>
<div class="w3-container" style="">
	<div class="w3-row"  style="min-width:250px; max-width:800px;margin:0px auto;" >
		<form action="javascript:void(0);" onsubmit="return new_research()" class="w3-container w3-margin">
			<div class="w3-row">
			  <div class="w3-col m3 l3 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> Title:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large"><span class="w3-text-red">*</span> Title:</b></div>
				<div class="w3-col s12 l9 m9">
				  <select id="schedResTitle" placeholder="Select Title of Research">
						<option value="">Select a state...</option>
						<option value="AL">Alabama</option>
					</select>
				  <!--<input class="w3-input w3-border" name="user_name" id="user_name" type="text" placeholder="Username" required />-->
				  
				<script>
				$('#schedResTitle').selectize({
					persist: false,
					maxItems: 1,
				});
				</script>
				</div>
			</div>
			<div class="w3-row">
			  <div class="w3-col m3 l3 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> Venue:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large"><span class="w3-text-red">*</span> Venue:</b></div>
				<div class="w3-col s12 l9 m9">
					<input type='text' name="scheResVenue" id="scheResVenue" class="w3-input w3-border" required />
				</div>
			</div>
			<div class="w3-row">
			  <div class="w3-col m3 l3 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> Defense Type:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large"><span class="w3-text-red">*</span> Defense Type:</b></div>
				<div class="w3-col s12 l9 m9">
					<select id="schedResType" placeholder="Defense Type">
						<option value="">Select Panel Chairman</option>
						<option value="1">Proposal Defense</option>
						<option value="2">Final Defense</option>
					</select>
					<script>
					$('#schedResType').selectize({
						persist: false,
						maxItems: 1,
					});
					</script>
				</div>
			</div>
			<div class="w3-row">
			  <div class="w3-col m3 l3 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> Proponents:</b><b class="w3-left w3-hide-medium w3-hide-large w3-large"><span class="w3-text-red">*</span> Proponents:</b></div>
				<div class="w3-col s12 l9 m9">
					<select id="rubricRes" placeholder="Select Rubric">
						<option value="">Select Rubric</option>
						<option value="1">Proposal Defense</option>
						<option value="2">Final Defense</option>
					</select>
					<script>
					$('#rubricRes').selectize({
						persist: false,
						maxItems: 1,
					});
					</script>
				</div>
			</div>
			<div class="w3-row">
			  <div class="w3-col m3 l3 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> Schedule Date:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large"><span class="w3-text-red">*</span> Schedule Date:</b></div>
				<div class="w3-col s12 l9 m9">
					<div class="form-group">
						<div class='input-group' >
							 <!-- <div id="datetimepicker1"></div>-->
							<input type='text' id='scheduleDate' class="w3-input w3-border" required />
							<span class="input-group-addon">
								<span class="fa fa-calendar"></span>
							</span>
						</div>
					</div>
					<script type="text/javascript">
						$(function () {
							$('#scheduleDate').datetimepicker({
								//inline: true,
								sideBySide: true
								
							});
						});
					</script>
				</div>
			</div>
			<button class="w3-button w3-right w3-section w3-blue w3-ripple w3-padding">Submit</button>

			</form>
	</div>
</div>