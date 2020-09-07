<?php $this->load->view('header');?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>Date of Birth</th>
                    <th><a href="<?= base_url() . 'Welcome/add_contact' ?>">Add New</a></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
              <?php $i=0; foreach ($contact as $s) {?>
                <tr>
                    <td><?= $s->first_name ;?></td>
                    <td><?= $s->last_name ;?></td>
                    <td><?= $s->email ;?></td>
                    <td><?= $s->dob ;?></td>
                    <td><a class="btn btn-sm btn-success" href="<?=base_url().'Welcome/add_contact/'.$s->id?>">Edit</a></td>
                    <td><a class="btn btn-sm btn-danger" href="<?=base_url().'Welcome/delete_Welcome/'.$s->id?>" onclick="return confirm('are you sure?')">Delete</a></td>
                    <td><a  href="<?=base_url().'Welcome/address_list/'.$s->id?>" >Address List</a></td>
                    <td><a  href="<?=base_url().'Welcome/delete_Welcome/'.$s->id?>" >Phone List</a></td>
                </tr>
              <?php } ?>
            </tbody>
        </table>
          
        </div>
      </div>
    </div>
    

<?php $this->load->view('footer');?>