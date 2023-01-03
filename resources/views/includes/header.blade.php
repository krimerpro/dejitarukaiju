<!-- Header Start-->
<header class="page-header">
  <!-- Horizontal Menu Start-->
  <nav class="main-menu static-top navbar-dark navbar navbar-expand-lg fixed-top mb-1" style="background:white">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="background:black;margin-left:20px">
          <span class="navbar-toggler-icon"></span>
      </button>

      <?php
        if($agent->isMobile()){
      ?>
            <h4 style="margin:auto">KAIJU 怪物</h4>
      <?php
          }
      ?>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div id="navigation" class="navbar-nav" style="width:100%">
            <ul class="navbar-nav mt-1">
              <?php
                if(!$agent->isMobile()){
              ?>
                  <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.1s">
                      <a class="nav-link" href="/" style="color:black;font-size:large">KAIJU 怪物</a>
                  </li>
              <?php } ?>

              <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.1s">
                  <a class="nav-link" href="#head-area" style="color:black;font-size:large">Home</a>
              </li>
              <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.1s">
                  <a class="nav-link" href="https://www.dextools.io/app/en/ether/pair-explorer" style="color:black;font-size:large">Dextools</a>
              </li>
              <li class="nav-item animated" data-animation="fadeInDown" data-animation-delay="1.1s">
                  <a class="nav-link" href="https://medium.com/@KingGhidorah/kaiju-%E6%80%AA%E7%89%A9-e1b6b32fc2d5" style="color:black;font-size:large">Medium</a>
              </li>
          </ul>
          <span id="slide-line"></span>
          <!-- <form class="form-inline mt-2 mt-md-0 text-right" style="margin-left:auto">
              <a class="btn btn-sm btn-gradient-purple btn-glow my-2 my-sm-0 animated" data-animation="fadeInDown" data-animation-delay="1.8s" href="#connect" style="background:#F6BE00">CONNECT</a>
          </form> -->
        </div>
      </div>
    </div>
  </nav>
  <!-- /Horizontal Menu End-->
</header>
<!-- /Header End-->
