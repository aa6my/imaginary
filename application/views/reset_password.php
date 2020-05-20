<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">RESET PASSWORD</h5>
            <br>
            <?php
              $attributes = array('class' => 'form-signin');
              echo form_open(site_url().'main/reset_password/token/'.$token, $attributes); ?>
              <div class="form-label-group">
                <?php echo form_password(array('name'=>'password', 'id'=> 'password', 'placeholder'=>'Password', 'class'=>'form-control', 'value' => set_value('password'))); ?>
                <?php echo form_error('password') ?>
                <label class="inputStyle">Password</label>
              </div>
              <br>
              <div class="form-label-group">
                <?php echo form_password(array('name'=>'passconf', 'id'=> 'passconf', 'placeholder'=>'Confirm Password', 'class'=>'form-control', 'value'=> set_value('passconf'))); ?>
                <?php echo form_error('passconf') ?>
                <label class="inputStyle">Confirm Password</label>
              </div>              
              <button class="btn btn-lg btn-danger btn-block text-uppercase" type="submit">Submit</button>
              <hr class="my-4">
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
