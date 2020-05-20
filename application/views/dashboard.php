<body>
<header>
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <a class="navbar-brand" href="#">TEST AUTH</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo site_url();?>main">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link">Hi <?php echo $this->session->first_name." ".$this->session->last_name; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link">|</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url();?>main/logout">Logout →</a>
        </li>
      </ul>
    </div>
  </nav>
</header>

<main role="main">
<br><br><br>
    <div class="row featurette">
      <div class="col-md-12">
        <h2 class="featurette-heading">DASHBOARD</h2>
        <p class="lead">
          Welcome to TEST AUTH Dashboard!<br>
          <pre>
            <?php //print_r($this->session); ?>
          </pre>
        </p>
      </div>
    </div>
  </div>
</main>
</body>