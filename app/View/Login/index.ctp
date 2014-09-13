<div class="row-fluid" style="max-width: 600px; margin: 0px auto 20px;">
  <form class="form-signin" method="post" action="<?php echo $this->Html->url(array('controller' => 'login', 'action' => 'authenticate')); ?>" style="position: relative;">
    <div style="width: 170px; margin: 0px auto 10px;"><img style="width: 170px;" src="<?php echo $this->webroot ?>img/logo-with-shades.png"></div>
    <br><br>
    <input type="email" class="form-control" type="text" name="login" class="input-block-level" placeholder="Votre e-mail"><br>
    <input class="form-control" type="password" name="password" class="input-block-level" placeholder="Votre mot de passe"><br>
    <?php echo $this->Session->flash(); ?>
    <button class="btn btn-large btn-danger input-block-level please-wait" data-loading-text="Authentification" type="submit">Entrer</button>
  </form>
</div>

<style type="text/css">
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro);
body {
    background:#2d3b36 url(<?php echo $this->webroot ?>img/login-bg.jpg)no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    padding-top:100px;
}

form {
    margin-left:auto;
    margin-right:auto;
    /*max-width: 343px;*/
    padding:30px;
    border: 1px solid rgba(0,0,0,.2);
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    background: rgba(0, 0, 0, 0.5); 
    -moz-box-shadow: 0 0 13px 3px rgba(0,0,0,.5);
    -webkit-box-shadow: 0 0 13px 3px rgba(0,0,0,.5);
    box-shadow: 0 0 13px 3px rgba(0,0,0,.5);
    overflow: hidden; 
}

.btn {
    width: 138px;
    height: 44px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    float:right;
    border: 1px solid #253737;
    background: #416b68;
    background: -webkit-gradient(linear, left top, left bottom, from(#6da5a3), to(#416b68));
    background: -webkit-linear-gradient(top, #6da5a3, #416b68);
    background: -moz-linear-gradient(top, #6da5a3, #416b68);
    background: -ms-linear-gradient(top, #6da5a3, #416b68);
    background: -o-linear-gradient(top, #6da5a3, #416b68);
    background-image: -ms-linear-gradient(top, #6da5a3 0%, #416b68 100%);
    padding: 10.5px 21px;
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px;
    -webkit-box-shadow: rgba(255,255,255,0.1) 0 1px 0, inset rgba(255,255,255,0.7) 0 1px 0;
    -moz-box-shadow: rgba(255,255,255,0.1) 0 1px 0, inset rgba(255,255,255,0.7) 0 1px 0;
    box-shadow: rgba(255,255,255,0.1) 0 1px 0, inset rgba(255,255,255,0.7) 0 1px 0;
    text-shadow: #333333 0 1px 0;
    color: #e1e1e1;
}

.btn:hover {
    border: 1px solid #253737;
    text-shadow: #333333 0 1px 0;
    background: #416b68;
    background: -webkit-gradient(linear, left top, left bottom, from(#77b2b0), to(#416b68));
    background: -webkit-linear-gradient(top, #77b2b0, #416b68);
    background: -moz-linear-gradient(top, #77b2b0, #416b68);
    background: -ms-linear-gradient(top, #77b2b0, #416b68);
    background: -o-linear-gradient(top, #77b2b0, #416b68);
    background-image: -ms-linear-gradient(top, #77b2b0 0%, #416b68 100%);
    color: #fff;
 }

.btn:active {
    margin-top:1px;
    text-shadow: #333333 0 -1px 0;
    border: 1px solid #253737;
    background: #6da5a3;
    background: -webkit-gradient(linear, left top, left bottom, from(#416b68), to(#416b68));
    background: -webkit-linear-gradient(top, #416b68, #609391);
    background: -moz-linear-gradient(top, #416b68, #6da5a3);
    background: -ms-linear-gradient(top, #416b68, #6da5a3);
    background: -o-linear-gradient(top, #416b68, #6da5a3);
    background-image: -ms-linear-gradient(top, #416b68 0%, #6da5a3 100%);
    color: #fff;
    -webkit-box-shadow: rgba(255,255,255,0) 0 1px 0, inset rgba(255,255,255,0.7) 0 1px 0;
    -moz-box-shadow: rgba(255,255,255,0) 0 1px 0, inset rgba(255,255,255,0.7) 0 1px 0;
    box-shadow: rgba(255,255,255,0) 0 1px 0, inset rgba(255,255,255,0.7) 0 1px 0;
   }



</style>