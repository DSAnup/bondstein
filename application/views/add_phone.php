<?php $this->load->view('header');?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php if(isset($edit)){ ?>
                <h3 style="text-align: center;">Edit phone for <?= $con->first_name;?></h3>
            <?php } else{?>
                <h3 style="text-align: center;">Add an phone for <?= $con->first_name;?></h3>
            <?php }?>
          
          <p><a href="<?= base_url() . 'Welcome/phone_list/'.$con->id ?>">Back to phone list</a></p>
            <form action="<?=base_url()?>Welcome/submit_phone" method="post">
                <?php if(isset($edit)){ ?>
                    <input type="hidden" name="id" value="<?=$edit->id?>">
                <?php } ?>
                <input type="hidden" name="contact_id" value="<?=$con->id;?>">
             <div class="form-group">
                <label for="exampleInputEmail1">Phone Type</label>
                <input type="text" class="form-control" name="phone_type" aria-describedby="emailHelp" value="<?=@$edit->phone_type?>">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Number</label>
                <input type="text" name="mobile" value="<?=@$edit->mobile?>" class="form-control"  aria-describedby="emailHelp">
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