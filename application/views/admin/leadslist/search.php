        <?php //echo validation_errors(); ?>
		<div class="midmrtitle t3">Search Result</div>
		<!--div class="row-fluid"-->
			<!--div class="page-header">
				<h1>List of Members</h1>
				<!--h2><?php //echo date('l, F j, Y'); ?></h2-->
			<!--/div-->
		 <div class="midmrc">
			<div class="midrca t4">
				<?php echo $this->session->flashdata('message'); ?>
				<!--Search Facility-->
				<!--div style="border:1px solid white; padding-top: 10px; padding-left: 10px;"-->
				<!--Search Facility-->
			<div style="border:1px solid black; padding-top: 10px; padding-left: 5px; padding-bottom: 10px; width: 750px;" class="t4">
				<table width="70%">
				<?php echo form_open('admin/leadslist/search', array('name' => 'form2', 'id' => 'form2')); ?>
					<tr><td width="20%">First Name</td><td><input type="text" name="search_firstname"></td><td>Last Name</td><td><input type="text" name="search_lastname"></td><!--td>Credit Card:</td><td><input type="text" name="search_ccdnum"></td--></tr>
					<!--tr><td colspan="6" align="right"><b><i>**Input last 4 digit of card for searching**</i></b></td></tr-->
					<tr><td colspan="4">&nbsp;</td></tr>
					<tr><td>Email</td><td><input type="text" name="search_email"></td><td>Phone Number</td><td><input type="text" name="search_phone"></td><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr><td colspan="4">&nbsp;</td></tr>
					<tr><td colspan="4"><input type="submit" name="submit" value="Search" class="btn_send" />&nbsp;&nbsp;<input type="reset" name="submit" value="Reset" class="btn_send" /></tr>
				</form>
				</table>
			</div><br>
				<p style="padding-bottom: 10px;">
					<?php //echo anchor('admin/registrations/printer', '<i class="icon-print icon-white"></i> Print', array('class' => 'btn btn-primary', 'target' => '_blank')); ?>
					<?php //echo anchor('admin/registrations/export', '<i class="icon-print icon-white"></i> Export', array('class' => 'btn btn-primary', 'target' => '_blank')); ?>
					<?php echo anchor('admin/leads/index', '<input type="button" value="Add New Lead">'); ?>
				</p>
				<?php
				//$orderdetails = array_filter($errors);
				if(!empty($leads))
				{ ?>
				<!--table class="table table-striped table-bordered"-->
						<table class="t4" width="83%" border="1px solid black">
							<thead>
								<tr>
									<!--th width="16%">ID</th-->
									<th width="15%">LAST NAME</th>
									<th width="15%">FIRST NAME</th>
									<th width="10%">COMPANY</th>
									<th width="10%">TYPE</th>
									<th width="10%">QUALITY</th>
									<th width="20%">ACTION</th>
								</tr>
							</thead>
						</table>
						<div style="height: 500px; overflow: auto;">
							<table class="t4" width="83%" border="1px solid black">
								<tbody>
										<?php foreach($leads as $lead):  
											  //$pid = $registration['ID'];
										?>
											<tr style="text-align:center;">
												<!--td><?php //echo anchor('admin/memberlist', $registration['member_id']); ?></td-->
												<!--td width="16%"><?php //if(!empty($registration['member_id'])) { echo $registration['member_id']; } else { echo "Non-member"; } ?></td-->
												<td width="15%"><?php echo $lead['last_name']; ?></td>
												<td width="15%"><?php echo $lead['first_name']; ?></td>
												<td width="10%"><?php echo $lead['company']; ?></td>
												<td width="10%"><?php echo $lead['lead_type']; ?></td>
												<td width="10%"><?php echo $lead['lead_quality']; ?></td>
								<?php
									//if($this->session->userdata('groupid') == 1)
									//if($this->session->userdata('uname') == "admin")
									if($this->session->userdata('uname') == "admin" || $this->session->userdata('uname') == "billyespina" || $this->session->userdata('uname') == "nelsonbitana")
									{ ?>
											<td width="20%"><?php echo anchor('admin/leads/profile/' . $lead['id'], 'View');?>&nbsp;&nbsp;&nbsp;<?php echo anchor('admin/leads/edit/' . $lead['id'], 'Edit');?>&nbsp;&nbsp;&nbsp;<?php echo anchor('admin/leads/delete/' . $lead['id'], 'Delete', array('onClick' => "return confirm('Are you sure you want to delete?')"));?></td>
							<?php   }else{ ?>
											<td width="20%"><?php echo anchor('admin/leads/profile/' . $lead['id'], 'View');?>&nbsp;&nbsp;&nbsp;<?php echo anchor('admin/leads/edit/' . $lead['id'], 'Edit');?></td>
							<?php	} ?>							
											</tr>	
										<?php endforeach; ?>
								</tbody>	
							</table>
						</div>				
		<?php   }else{ ?>
				<table width="100%" border="0">
				  <tbody>
					<tr><td colspan="6"><div class="midmrtitle t3">No Records Found.</div></td></tr>
					<tr><td colspan="6">&nbsp;</td></tr>
				  </tbody>
				</table>
		<?php   } ?>

				<?php echo $this->pagination->create_links(); ?>
			<!--/div-->
			</div>
		 </div>