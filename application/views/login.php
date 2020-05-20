<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title">LOGIN</h5>
            <br>
            <?php
              $attributes = array('class' => 'form-signin');
              echo form_open(site_url().'main/login/', $attributes);
            ?>
              <div class="form-label-group">
                <?php echo form_input(array(
                    'name'=>'email',
                    'type'=>'email', 
                    'id'=> 'inputEmail', 
                    'placeholder'=>'Email address', 
                    'class'=>'form-control', 
                    'value'=> set_value('email'))); ?>
                <?php echo form_error('email') ?>
                <label class="inputStyle">Email</label>
              </div>
              <br>
              <div class="form-label-group">
                  <?php echo form_password(array(
                      'name'=>'password', 
                      'id'=> 'inputPassword', 
                      'placeholder'=>'Password', 
                      'class'=>'form-control', 
                      'value'=> set_value('password'))); ?>
                  <?php echo form_error('password') ?>
                <label class="inputStyle">Password</label>
              </div>

              <button class="btn btn-lg btn-danger btn-block text-uppercase" type="submit">Submit</button>
              <hr class="my-4">
              <p id="app-divider"><a id="app-fp" href="<?php echo site_url();?>main/forgot">Forgot Password →</a> | <a id="app-register" href="<?php echo site_url();?>main/register">Register →</a></p>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
