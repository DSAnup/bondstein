<?php $this->load->view('header');?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php if(isset($edit)){ ?>
                <h3 style="text-align: center;">Edit address for <?= $con->first_name;?></h3>
            <?php } else{?>
                <h3 style="text-align: center;">Add an address for <?= $con->first_name;?></h3>
            <?php }?>
          <p><a href="<?= base_url() . 'Welcome/address_list/'.$con->id ?>">Back to address list</a></p>
            <form action="<?=base_url()?>Welcome/submit_address" method="post">
                <?php if(isset($edit)){ ?>
                    <input type="hidden" name="id" value="<?=$edit->id?>">
                <?php } ?>
                <input type="hidden" name="contact_id" value="<?=$con->id;?>">
             <div class="form-group">
                <label for="exampleInputEmail1">Address Type</label>
                <input type="text" class="form-control" name="address_type" aria-describedby="emailHelp" value="<?=@$edit->address_type?>">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Street</label>
                <input type="text" name="street" value="<?=@$edit->street?>" class="form-control"  aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">City</label>
                <input type="text" name="city" value="<?=@$edit->city?>" class="form-control"  aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">State</label>
                <input type="text" name="state" value="<?=@$edit->state?>" class="form-control"  aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Zip</label>
                <input type="text" name="zip" value="<?=@$edit->zip?>" class="form-control"  aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Country</label>
                <input type="text" name="country" value="<?=@$edit->country?>" class="form-control"  aria-describedby="emailHelp">
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