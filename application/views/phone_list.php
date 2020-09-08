<?php $this->load->view('header');?>
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <h3 style="text-align: center;">Phone list of <?= $con->first_name;?></h3>
            <p><a href="<?= base_url();?>">Back to Home</a></p>
            <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Phone Type</th>
                        <th>Number</th>
                        <th><a class="btn btn-sm btn-primary" href="<?= base_url() . 'Welcome/add_phone/'.$con->id ?>">Add New</a></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                  <?php $i=0; foreach ($phone as $s) { $i++;?>
                    <tr>
                        <td><?= $i ;?></td>
                        <td><?= $s->phone_type ;?></td>
                        <td><?= $s->mobile ;?></td>
                        <td><a class="btn btn-sm btn-success" href="<?=base_url().'Welcome/add_phone/'.$con->id.'/'.$s->id?>">Edit</a></td>
                        <td><a class="btn btn-sm btn-danger" href="<?=base_url().'Welcome/delete_phone/'.$con->id.'/'.$s->id?>" onclick="return confirm('Are you sure delete the existing phone number')">Delete</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>
</div>


<?php $this->load->view('footer');?>