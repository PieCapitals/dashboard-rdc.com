
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= base_url('assets/images/logo_icone/dash.ico')?>">
    <title><?php echo ucfirst($username);?></title>
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/css/css/bootstrap.min3.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/font-awesome/css/font-awesome.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/css/product.css')?>" rel="stylesheet">
  </head>
  <script type="text/javascript">
  var observe;
  if (window.attachEvent) {
     observe = function (element, event, handler) {
         element.attachEvent('on'+event, handler);
     };
   }
  else {
    observe = function (element, event, handler) {
        element.addEventListener(event, handler, false);
    };
  }
  function init () {
    var text = document.getElementById('text');
    function resize () {
        text.style.height = 'auto';
        text.style.height = text.scrollHeight+'px';
    }
    /* 0-timeout to get the already changed text */
    function delayedResize () {
        window.setTimeout(resize, 0);
    }
    observe(text, 'change',  resize);
    observe(text, 'cut',     delayedResize);
    observe(text, 'paste',   delayedResize);
    observe(text, 'drop',    delayedResize);
    observe(text, 'keydown', delayedResize);

    text.focus();
    text.select();
    resize();
}
</script>
  <body onload="init();">

    <nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a style="cursor: pointer" class="navbar-brand system-header-nav" onclick="location.href='<?php echo base_url('users/profile/'.$username)?>'" title="mon profil">
            <img src="<?= base_url().$avatar;?>" width="30" height="30" alt="<?=$username;?>" title="<?=$username;?>" class="rounded-circle"> <span class="system-header"><?php  echo ucfirst($username); ?></span>
        </a>
        <a class="py-2 " href="#">
        	<form method="get" action="/search" id="search">
                <input name="q" type="text" size="40" placeholder="Search..." style=" " class="inputsearch"/>
            </form>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="#"></a>
        <a class="py-2 d-none d-md-inline-block" href="#"></a>
        <a class="py-2 d-none d-md-inline-block" href="#"></a>
        <a class="py-2 d-none d-md-inline-block" href="#"></a>
        <a class="py-2 d-none d-md-inline-block" href="#"></a>
        <a class="py-2  navbar "> 
         
          <i class=" fa fa-home fa-lg font-color" title="cliquer pour revenir à la page d'acceuil" onclick="location.href='<?php echo base_url('/')?>'" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;
         <i class=" fa fa-sign-out fa-lg font-color" title="voulez vous quittez?" onclick="location.href='<?php echo base_url('users/logout')?>'" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
         <?php $method= $this->router->fetch_method();
             if($method!='profile'){
          ?>
          <i  onclick="location.href='<?php echo base_url('users/profile/'.$username)?>'" class="fa fa-cog fa-spin fa-lg fa-fw font-color"></i>
          <span class="sr-only">Loading...</span></i>
          <?php }else{
            ?> <i   onclick="location.href='<?php echo base_url('users/login')?>'" class="fa fa-arrow-circle-left font-color"></i>
          <?php } ?>  
        </a>
      </div>
    </nav>

    

    