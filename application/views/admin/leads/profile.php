        <?php //echo validation_errors(); ?>
		<div class="midmrtitle t3">Lead Profile</div>
		
		<div class="midmrc">
          <div class="midrca t4">
            <div class="cul" style="width: 400px; min-height: 250px;">
		
        	<table width="100%">
	            <tr>
                	<td>First Name</td><td><?php echo $lead->first_name ?></td>
                </tr>
                <tr>
                	<td>Last Name</td><td><?php echo $lead->last_name; ?></td>
                </tr>
                <tr>
                	<td>Street Address</td><td><?php echo $lead->address; ?></td>
                </tr>
                <tr>
                	<td>State/Province</td><td><?php echo $lead->state_province; ?></td>
                </tr>
                <tr>
                	<td>Zip Code/Postal Code</td><td><?php echo $lead->zip; ?></td>
                </tr>
				<tr>
					<td>Home Phone</td><td><?php echo $lead->home_phone; ?></td>
                </tr>
                <tr>
                	<td>Mobile Phone</td><td><?php echo $lead->mobile_phone; ?></td>
                </tr>
                <tr>
                	<td>Ethnicity</td><td><?php echo $lead->ethnicity; ?></td>
                </tr>
                <tr>
                	<td>Time Zone</td><td><?php echo $lead->timezone; ?></td>
                </tr>
                <tr>
                	<td>Lead Source</td><td><?php echo $lead->lead_source; ?></td>
                </tr>
				<tr>
                	<td>Lead Quality</td><td><?php echo $lead->lead_quality; ?></td>
                </tr>
                <!--/div-->
                </table>
		</div>	
			
		<div class="cur2" style="min-height: 250px;">
          <div class="cura2">
            <div class="curb">
            	<table width="100%">
                <tr>
					<td>Lead Import Date</td><td><?php echo $lead->date_encoded; ?></td>
                </tr>
                <tr>
                	<td>Company</td><td><?php echo $lead->company; ?></td>
                </tr>
				<tr>
                	<td>Apartment Number</td><td><?php echo $lead->apartment_num; ?></td>
                </tr>
                <tr>
                	<td>City</td><td><?php echo $lead->city; ?></td>
                </tr>
                <tr>
                	<td>Country</td><td><?php echo $lead->country; ?></td>
                </tr>
				<tr>
                	<td>Work Phone</td><td><?php echo $lead->work_phone; ?></td>
                </tr>
                <tr>
                	<td>Email</td><td><?php echo $lead->email; ?></td>
                </tr>
                <tr>
                	<td>Website</td><td><?php echo $lead->website; ?></td>
                </tr>
                <tr>
            		<td>Language</td><td><?php echo $lead->language; ?></td>
                </tr>
                <tr>
					<td>Lead Type</td><td><?php echo $lead->lead_type; ?></td>
                </tr>	
                </table>
			</div></div></div>
				
		<div style="clear: both;"></div>
				<br>
				<!--div-->
					<!--button class="btn btn-primary" type="submit"><i class="icon-ok icon-white"></i> Save changes</button-->
					<!--input type="hidden" name="leadid" value="<?php echo $lead->id; ?>">
					<input type="submit" name="submit" value="Submit" class="btn_send" /-->
					<!--button class="btn" type="reset"><i class="icon-ok icon-remove"></i> Cancel</button-->
				<!--/div-->
			<!--/form-->
			<div style="clear: both;"></div>
		</div></div>