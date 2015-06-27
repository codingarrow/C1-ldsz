<div class="span9">
    <div class="row-fluid">
        <div class="page-header">
            <h1>Registrations for the Day</h1>
            <h2><?php echo date('l, F j, Y'); ?></h2>
        </div>
        <hr/>

        <?php echo $this->session->flashdata('message'); ?>
        <p>
            <?php echo anchor('admin/registrations/printer', '<i class="icon-print icon-white"></i> Print', array('class' => 'btn btn-primary', 'target' => '_blank')); ?>
            <?php echo anchor('admin/registrations/export', '<i class="icon-print icon-white"></i> Export', array('class' => 'btn btn-primary', 'target' => '_blank')); ?>
        </p>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Company Name</th>
                    <th>Industry</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Designation</th>
                    <th>Email</th>
                    <th>Office Number</th>
                    <th>Mobile Number</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($registrations as $registration): ?>
                    <tr>
                        <td><?php echo $registration['company_name']; ?></td>
                        <td><?php echo $registration['industry']; ?></td>
                        <td><?php echo $registration['last_name']; ?></td>
                        <td><?php echo $registration['first_name']; ?></td>
                        <td><?php echo $registration['designation']; ?></td>
                        <td><?php echo $registration['email']; ?></td>
                        <td><?php echo $registration['office_number']; ?></td>
                        <td><?php echo $registration['mobile_number']; ?></td>
                    </tr>	
                <?php endforeach; ?>
            </tbody>
        </table>

        <?php echo $this->pagination->create_links(); ?>
    </div>
</div>