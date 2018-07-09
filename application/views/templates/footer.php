
      <footer class="page-footer font-small unique-color-dark pt-0" >
      
           <div style="background-color:#cf370f !important; ">
              <div class="container">
                  <!--Grid row-->
                  <div class="row py-4 d-flex align-items-center" >
      
                      <!--Grid column-->
                      <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0" >
                          <h6 class="mb-0 white-text"><?php echo $this->lang->line('dasrdc_connecter');?> </h6>
                      </div>
                      <!--Grid column-->
      
                      <!--Grid column-->
                      <div class="col-md-6 col-lg-7 text-center text-md-right">
                          <!--Facebook-->
                          <a class="fb-ic ml-0" href="https://web.facebook.com/profile.php?id=100015177992435"><i class="fa fa-facebook white-text mr-lg-4"> </i></a>
                          <!--Twitter-->
                          <a class="tw-ic"><i class="fa fa-whatsapp white-text mr-lg-4"> </i></a>
                          <!--Google +-->
                          <a class="gplus-ic" href="mailto:akajoSelf@gmail.com"><i class="fa fa-google-plus white-text mr-lg-4"> </i></a>
                         
                      </div>
                      <!--Grid column-->
      
                  </div>
                  <!--Grid row-->
              </div>
          </div>
      
      
          <!--Footer Links-->
          <div class="container mt-5 mb-4 text-center text-md-left" style="padding-top: 10px">
              <div class="row mt-3">
      
                  <!--First column-->
                  <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                      <h6 class="text-uppercase font-weight-bold"><strong><?=$this->lang->line('dasrdc_propos');?></strong></h6>
                      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 90px;">
                      <p><?php echo $this->lang->line('dasrdc_informationg')?></p>
                  </div>
                  <!--/.First column-->
      
                  <!--Second column-->
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                      <h6 class="text-uppercase font-weight-bold"><strong><?php echo $this->lang->line('dasrdc_partenaire');?></strong></h6>
                      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 120px;">
                      <p><a href="http://www.resourceevents.co.za/" target="_blank">MRS Corporation</a></p>
                  </div>
                  <!--/.Second column-->
      
                  <!--Third column-->
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                      <h6 class="text-uppercase font-weight-bold"><strong><?php echo $this->lang->line('nosexperts')?></strong></h6>
                      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 130px;">
                      <p><a href="#!">Webmaster</a></p>
                      <p><a href="#!">Infographiste</a></p>
                      <p><a href="#!">Maintenance</a></p>
                      <p><a href="#!">Reseau</a></p>
                  </div>
                  <!--/.Third column-->
      
                  <!--Fourth column-->
                  <div class="col-md-4 col-lg-3 col-xl-3">
                      <h6 class="text-uppercase font-weight-bold"><strong><?php echo $this->lang->line('dasrdc_contact');?></strong></h6>
                      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 90px;">
                      <p><i class="fa fa-home mr-3"></i> 1 Av. Kimpe Q/Djeo-Binza, C/Ngaliema</p>
                      <p><i class="fa fa-envelope mr-3"></i><a href="mailto:info@dashboard-drc.com" title="envoyer un mail à nous"> info@dashboard-drc.com</a></p>
                      <p><i class="fa fa-phone mr-3"></i> <a href="tel:+243 89 58 50 467">+ 243 89 58 50 467</a></p>
                      <p><i class="fa fa-print mr-3"></i><a href="tel:+ 243 99 07 53 266"> + 243 99 07 53 266</a></p>
                  </div>
              </div>
          </div>
          <div class="footer-copyright py-2 text-center">
              <div class="container-fluid">
                  © 2018 Design & Create by <a href="https://www.facebook.com/anaelmarlon"><strong> Anaelmarlon Luzayamo</strong></a>
              </div>
          </div>   
      </footer>







  </body>
   <script type="text/javascript" src="<?= base_url('assets/js/jquery-3.2.1.min.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/popper.min.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/mdb.min.js')?>"></script>

    <script>
        // initialize scrollspy
        $('body').scrollspy({
            target: '.dotted-scrollspy'
        });

        // initialize lightbox
        $(function () {
            $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
        });

        $('.navbar-collapse a').click(function(){
            $(".navbar-collapse").collapse('hide');
        });

        /* WOW.js init */
        new WOW().init();

    </script>


<div class="hiddendiv common"></div></body></html>
</html>