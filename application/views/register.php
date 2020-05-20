

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title">REGISTER</h5>
            <br>
            <?php
              $attributes = array('class' => 'form-signin');
              echo form_open('/main/register', $attributes);
            ?>
              <div class="form-label-group">
                <?php echo form_input(array(
                    'name'=>'email',
                    'type'=>'email', 
                    'id'=> 'email', 
                    'placeholder'=>'Email address', 
                    'class'=>'form-control', 
                    'value'=> set_value('email'))); ?>
                <?php echo form_error('email') ?>
                <label class="inputStyle">Email</label>
              </div>
              <br>
              <div class="form-label-group">
                <?php echo form_input(array(
                    'name'=>'firstname',
                    'id'=> 'firstname', 
                    'placeholder'=>'First Name', 
                    'class'=>'form-control', 
                    'value'=> set_value('email'))); ?>
                <?php echo form_error('firstname') ?>
                <label class="inputStyle">First Name</label>
              </div>
              <br>
              <div class="form-label-group">
                  <?php echo form_input(array(
                      'name'=>'lastname', 
                      'id'=> 'lastname', 
                      'placeholder'=>'Last Name', 
                      'class'=>'form-control', 
                      'value'=> set_value('lastname'))); ?>
                  <?php echo form_error('lastname') ?>
                <label class="inputStyle">Last Name</label>
              </div>

              <button class="btn btn-lg btn-danger btn-block text-uppercase" type="submit">Submit</button>
              <hr class="my-4">
              <a id="app-fp" href="<?php echo site_url();?>main/login">Login →</a><p id="app-divider"></p>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
