<?php $this->load->view('header');?>
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <h3 style="text-align: center;">Address list of <?= $con->first_name;?></h3>
            <p><a href="<?= base_url();?>">Back to Home</a></p>
            <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Address Type</th>
                        <th>Street</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zip</th>
                        <th>Country</th>
                        <th><a class="btn btn-sm btn-primary" href="<?= base_url() . 'Welcome/add_address/'.$con->id ?>">Add New</a></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                  <?php $i=0; foreach ($address as $s) { $i++;?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $s->address_type ;?></td>
                        <td><?= $s->street ;?></td>
                        <td><?= $s->city ;?></td>
                        <td><?= $s->state ;?></td>
                        <td><?= $s->zip ;?></td>
                        <td><?= $s->country ;?></td>
                        <td><a class="btn btn-sm btn-success" href="<?=base_url().'Welcome/add_address/'.$con->id.'/'.$s->id?>">Edit</a></td>
                        <td><a class="btn btn-sm btn-danger" href="<?=base_url().'Welcome/delete_address/'.$con->id.'/'.$s->id?>" onclick="return confirm('Are you sure delete the existing address')">Delete</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>
</div>


<?php $this->load->view('footer');?>