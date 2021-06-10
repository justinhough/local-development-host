<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="container">

    <div class="navbar-brand">
      <a class="navbar-item" href="/">
        <strong><?php echo $_ENV['LOCAL_DEV_NAME']; ?></strong>
      </a>

      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a class="button" href="<?php echo $_ENV['GITHUB_URL']; ?>">Github</a>
            <a class="button" href="<?php echo $_ENV['BITBUCKET_URL']; ?>">Bitbucket</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</nav>
