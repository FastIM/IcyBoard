
<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../" class="navbar-brand"><?php echo ibc\tools::getSiteName();?></a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li <?php if(ibc\tools::endsWith($currFile,"index.php") == true) { echo 'class="active"'; } ?>>
              <a href="index.php">News</a>
            </li>
            <li <?php if(ibc\tools::endsWith($currFile,"viewthread.php") == true) { echo 'class="active"'; } ?>>
              <a href="viewthread.php">Community</a>
            </li>
            <li>
              <a href="http://news.bootswatch.com">Blog</a>
            </li>
            
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li <?php if(ibc\tools::endsWith($currFile,"login.php") == true) { echo 'class="active"'; } ?>><a href="login.php">Einloggen</a></li>
            <li><a href="https://wrapbootstrap.com/?ref=bsw" target="_blank">WrapBootstrap</a></li>
          </ul>

        </div>
      </div>
    </div>
<br />
<br />
<br />