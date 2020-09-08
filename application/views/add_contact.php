<?php $this->load->view('header');?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <?php if(isset($edit)){ ?>
                <h3 style="text-align: center;">Edit information of <?= $edit->first_name;?></h3>
            <?php } else{?>
                <h3 style="text-align: center;">Add an new contact</h3>
            <?php }?>
          <p><a href="<?= base_url(); ?>">Back to Home</a></p>
            <form action="<?=base_url()?>Welcome/submit_contact" method="post">
                <?php if(isset($edit)){ ?>
                    <input type="hidden" name="id" value="<?=$edit->id?>">
                <?php } ?>
             <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="text" class="form-control" name="first_name" aria-describedby="emailHelp" value="<?=@$edit->first_name?>">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" name="last_name" value="<?=@$edit->last_name?>" class="form-control"  aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" value="<?=@$edit->email?>" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Date of Birth</label>
                <input type="date" name="dob" class="form-control" id="exampleInputPassword1" value="<?=@$edit->dob?>">
              </div>
              
              <?php if(isset($edit)){ ?>
                  <button type="submit" class="btn btn-primary">Update</button>
              <?php } else{?>
                  <button type="submit" class="btn btn-primary">Submit</button>
              <?php }?>
            </form>
            
        </div>
      </div>
    </div>
    

<?php $this->load->view('footer');?>