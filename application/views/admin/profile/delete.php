<!--h2>Delete Member<?php //echo $page_title;?></h2-->
<br><p style="color: black; font-weight: bold;">Delete this user?<?php //echo $this->lang->line('clients_client_has') . $numInvoices . ' ' . $this->lang->line('clients_assigned_to_them');?></p><br>
<ul id="logout_list">
	<li><a href="<?php echo site_url('admin/profile/delete_confirmed')?>">Ok<?php //echo $this->lang->line('clients_delete_all_invoices');?></a></li>
	<li><a href="<?php echo site_url('clients')?>" id="logout" class="lbAction" rel="deactivate">Cancel<?php //echo $this->lang->line('actions_cancel');?></a></li>
</ul>