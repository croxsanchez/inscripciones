<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>

<section class="bg pd4">
<div class="container center">
  <div class="row-fluid">
    <div class="span8">
      <div class="well">
          <!--<i style="font-size: 200px" class="icon-credit-card icon-4x"></i>-->
          <img src="<?php echo $dir; ?>/images/logo-bellatrix.png" class="img-rounded img-polaroid" />
          <h2>¡Bienvenido!</h2>
          <h4>
            <?php echo Yii::app()->name;?>
          </h4>
          <div class="thumbnail">
            <img data-src="holder.js/260x180" alt="260x180" src="<?php echo $dir; ?>/images/foto_sede1.jpg" class="img-rounded"/>
            <div class="caption">
              <h3>CEVAM</h3>
              <p style="text-align:justify;">El Centro Venezolano Americano de Mérida, CEVAM, es uno de los tres centros 
                binacionales ubicados en Venezuela. Fue fundado en 1.992 partiendo de una 
                asociación creada dos años antes por norteamericanos y venezolanos que se 
                reunían para celebrar las fiestas patrióticas de los Estados Unidos. CEVAM es 
                una asociación civil sin fines de lucro dedicada a la promoción de la amistad 
                y el entendimiento entre los pueblos norteamericano y venezolano a través de 
                actividades sociales, culturales, filantrópicas y educativas.</p>
            </div>
          </div>
      </div><!-- /.well -->
    </div><!-- /.span4 -->
    <div class="span4">
      <div class="well">
      <?php $form=$this->beginWidget('CActiveForm', array(
          'id'=>'login-form',
          'action'=>$this->createUrl("site/login"),
          'htmlOptions'=>array("style"=>"text-align: left"),
          'enableClientValidation'=>true,
          'clientOptions'=>array(
            'validateOnSubmit'=>true,
          ),
        )); 

        ?>
        <h3 class="form-signin-heading">Ingresar (Log in)</h3>  
        <?php echo $form->labelEx($model,'username'); ?>
        <?php echo $form->textField($model,'username',array("class"=>"input-block-level","placeholder"=>"Username")); ?>
        <?php echo $form->error($model,'username'); ?>

        <?php echo $form->labelEx($model,'password'); ?>
        <?php echo $form->passwordField($model,'password',array("class"=>"input-block-level","placeholder"=>"Password")); ?>
        <?php echo $form->error($model,'password'); ?>
        <br/>
        <?php echo $form->checkBox($model,'rememberMe'); ?>
        <?php echo $form->label($model,'rememberMe'); ?>
        <?php echo $form->error($model,'rememberMe'); ?>

        <?php echo CHtml::submitButton('Login',array("class"=>"btn btn-primary pull-right")); ?>
      <?php $this->endWidget(); ?>

      </div>

      <div class="well">
        <form class="form-signin" style="text-align: left" id="login-form" action="#" method="post">
          <h3 class="form-signin-heading">Registrarse (Sign in)</h3>
          <label class="required">Nombres <span class="required">*</span></label>   
          <input class="input-block-level" placeholder="Nombres" type="text">
          <label class="required">Email <span class="required">*</span></label>   
          <input class="input-block-level" placeholder="Email" type="text">
          <label class="control-label required">Contraseña <span class="required">*</span></label>   
          <input class="input-block-level" placeholder="Password" type="password">
          <input class="btn btn-primary pull-right" type="submit" value="Registrarme"> 
        </form>
      </div>  
    </div><!-- /.span4 -->
  </div><!-- /.row -->
</div>
</section>


<section id="why" class="clearfix mg4">
<div class="container">
<div class="row-fluid">
            <ul class="thumbnails">
              <li class="span3">
                <div class="thumbnail">
                  <img data-src="holder.js/210x100" alt="210x100" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAADICAYAAABS39xVAAALgUlEQVR4Xu3b969VRRuG4UFBEFERO8aCBHsFYyyJ/ulGY8MSsMVeoz9YEXsJ8uVdySL7Q9Sz0APn4b1WQrJzGPZ+5n6GO7Nmr7Ppm2++OT5cCCCAQACBTYQV0JKICCAwESAsCwEBBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6aqvw/6/fffjw8++GAcOXJkHD9+fFx88cXj5ptvHrt27frTP/z111/He++9N7766qtx7NixsWPHjrFnz55x5ZVX/quxS1BW3g8//HAcPXp0/P7772Pr1q3jmmuuGTfddNM4//zz/++tNkLeJXMzdv0IENb6sT1j7/zdd9+Nl19+eZLP6rVp06Zx3333jcsvv/zEj2vMwYMHx08//fSnfPfcc8+46qqrTmvsksmWKF955ZVJrCdfl1122di/f/+o7HVthLxL5mbs+hIgrPXle0be/dChQ+Prr78emzdvHnfdddc477zzxuuvvz5+++23sX379vHII4+cyPHRRx9Nu6u6brnllnHppZdOY3/++eexbdu28eijj56QxZKxSyb63HPPjR9//HHaSd1xxx1TxtptffHFF9Pb3H333ePqq6+eXi/JsGTskrzGbhwChLVxujitJLVLeeaZZ8Yvv/wy3QLWn7reeeed8cknn0yvH3vssXHBBRdMr2t3VbdjF1100Xj44Yenn3366afjrbfeml4/8MADY+fOnYvHrjV85Xz66aen4TfccMMkzbpKrk899dT0+vrrrx+33nrr4gxL5rbWvMZtLAKEtbH6OO00JYLaWc1ievPNN8dnn3027ZYef/zxaff1xx9/jCeeeGK6FavzotqN1VXnSC+++OL0ukRRwlgytj6nPq+uuqU7cODA9Lp2TK+++ur0um5L77///ul9azdXeS+88MJpd3WysGaRLcmwZOxpQ/YPzzoBwjrrFfy3AerMpw7eX3vtten859prrx133nnn9CElitqN1bW6uznVz5eMrfcrMc23dLfffvt0Fla3frVz2rJly3jooYemg/W/uuqW8P3335/+er4lXJJhydj/lrh3O5MECOtM0j4DnzWfZ9VHXXHFFdMuqnZXdf3www/j+eefn17feOONY9++fdPr1du06667bpRwloyt96hv+uq96xu9+ry6razD9bpOPsw/GUOdvx0+fHja+dWuq87came4JMOSsWegBh+xTgQIa53Anq23rV1NCah2VyWOekyg/tRVZ1d1zrMWYS0ZO8+1BFXiWb127949Haz/1VWyqm8M65auJFW3k/MZ2pIMS8aerW587r8nQFj/nuGGeofapdR//I8//ni8++67U7baZdWZVT3K8Oyzz04/+6dbwiVjVwHU4X0d4tdV52m1W5p3eKfaWa3KqnLO3w7W2CUZlozdUIUJs4gAYS3ClTO4xFUH7LVzqfOkui2rXVf9rK7Vs61THbovGTtTqc986aWXpkP8+aqD9tXnwOaf1zlb3b7OO6uTZVXjlmRYMjanRUlPJkBY4Wuidhb1DV2dHdUjDbWTqqvOlJ588snpdT3Bfu+9906v52egVh9rWP2Wb/WxhiVj671Xn4OasdZBex2418H7fNUB+QsvvDBlrN3gqWQ1j12SYcnY8Nrbxies8OprZ1HPNc2/3nLbbbdNt2L1azp1PlRXHaLXYXpd9fP6U1c9A3XJJZeMN95445QPji4ZW2dI9WhE7ZjqYdTa1c23pPMOb0a9+sVAfX6dc61eJdN6PGI984bX3jY+YZ0D1X/++efTYwynuuqbwtpdzb/qUmIrsazlV3PWOrYkVYf59fR6PQv24IMPTg+mrt4ezudoNaZ2Qn93rR7UrzVDvd+SsedA7S2nQFjnSO11JlS3ZN9+++2JxwPqP34drs+ymqdat4/1zNOXX365pl9+/qexq0/V7927d/pF6rrqUYO69Suh1cF73RrWZ7799ttrFlYN/K/zniOVt5wGYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAv8DQqEKOqUAkIYAAAAASUVORK5CYII=">
                  <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta .</p>
                    <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p>
                  </div>
                </div>
              </li>

              <li class="span3">
                <div class="thumbnail">
                  <img data-src="holder.js/210x100" alt="210x100" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAADICAYAAABS39xVAAALgUlEQVR4Xu3b969VRRuG4UFBEFERO8aCBHsFYyyJ/ulGY8MSsMVeoz9YEXsJ8uVdySL7Q9Sz0APn4b1WQrJzGPZ+5n6GO7Nmr7Ppm2++OT5cCCCAQACBTYQV0JKICCAwESAsCwEBBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6aqvw/6/fffjw8++GAcOXJkHD9+fFx88cXj5ptvHrt27frTP/z111/He++9N7766qtx7NixsWPHjrFnz55x5ZVX/quxS1BW3g8//HAcPXp0/P7772Pr1q3jmmuuGTfddNM4//zz/++tNkLeJXMzdv0IENb6sT1j7/zdd9+Nl19+eZLP6rVp06Zx3333jcsvv/zEj2vMwYMHx08//fSnfPfcc8+46qqrTmvsksmWKF955ZVJrCdfl1122di/f/+o7HVthLxL5mbs+hIgrPXle0be/dChQ+Prr78emzdvHnfdddc477zzxuuvvz5+++23sX379vHII4+cyPHRRx9Nu6u6brnllnHppZdOY3/++eexbdu28eijj56QxZKxSyb63HPPjR9//HHaSd1xxx1TxtptffHFF9Pb3H333ePqq6+eXi/JsGTskrzGbhwChLVxujitJLVLeeaZZ8Yvv/wy3QLWn7reeeed8cknn0yvH3vssXHBBRdMr2t3VbdjF1100Xj44Yenn3366afjrbfeml4/8MADY+fOnYvHrjV85Xz66aen4TfccMMkzbpKrk899dT0+vrrrx+33nrr4gxL5rbWvMZtLAKEtbH6OO00JYLaWc1ievPNN8dnn3027ZYef/zxaff1xx9/jCeeeGK6FavzotqN1VXnSC+++OL0ukRRwlgytj6nPq+uuqU7cODA9Lp2TK+++ur0um5L77///ul9azdXeS+88MJpd3WysGaRLcmwZOxpQ/YPzzoBwjrrFfy3AerMpw7eX3vtten859prrx133nnn9CElitqN1bW6uznVz5eMrfcrMc23dLfffvt0Fla3frVz2rJly3jooYemg/W/uuqW8P3335/+er4lXJJhydj/lrh3O5MECOtM0j4DnzWfZ9VHXXHFFdMuqnZXdf3www/j+eefn17feOONY9++fdPr1du06667bpRwloyt96hv+uq96xu9+ry6razD9bpOPsw/GUOdvx0+fHja+dWuq87came4JMOSsWegBh+xTgQIa53Anq23rV1NCah2VyWOekyg/tRVZ1d1zrMWYS0ZO8+1BFXiWb127949Haz/1VWyqm8M65auJFW3k/MZ2pIMS8aerW587r8nQFj/nuGGeofapdR//I8//ni8++67U7baZdWZVT3K8Oyzz04/+6dbwiVjVwHU4X0d4tdV52m1W5p3eKfaWa3KqnLO3w7W2CUZlozdUIUJs4gAYS3ClTO4xFUH7LVzqfOkui2rXVf9rK7Vs61THbovGTtTqc986aWXpkP8+aqD9tXnwOaf1zlb3b7OO6uTZVXjlmRYMjanRUlPJkBY4Wuidhb1DV2dHdUjDbWTqqvOlJ588snpdT3Bfu+9906v52egVh9rWP2Wb/WxhiVj671Xn4OasdZBex2418H7fNUB+QsvvDBlrN3gqWQ1j12SYcnY8Nrbxies8OprZ1HPNc2/3nLbbbdNt2L1azp1PlRXHaLXYXpd9fP6U1c9A3XJJZeMN95445QPji4ZW2dI9WhE7ZjqYdTa1c23pPMOb0a9+sVAfX6dc61eJdN6PGI984bX3jY+YZ0D1X/++efTYwynuuqbwtpdzb/qUmIrsazlV3PWOrYkVYf59fR6PQv24IMPTg+mrt4ezudoNaZ2Qn93rR7UrzVDvd+SsedA7S2nQFjnSO11JlS3ZN9+++2JxwPqP34drs+ymqdat4/1zNOXX365pl9+/qexq0/V7927d/pF6rrqUYO69Suh1cF73RrWZ7799ttrFlYN/K/zniOVt5wGYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAv8DQqEKOqUAkIYAAAAASUVORK5CYII=">
                  <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit n.</p>
                    <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img data-src="holder.js/210x100" alt="210x100" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAADICAYAAABS39xVAAALgUlEQVR4Xu3b969VRRuG4UFBEFERO8aCBHsFYyyJ/ulGY8MSsMVeoz9YEXsJ8uVdySL7Q9Sz0APn4b1WQrJzGPZ+5n6GO7Nmr7Ppm2++OT5cCCCAQACBTYQV0JKICCAwESAsCwEBBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6aqvw/6/fffjw8++GAcOXJkHD9+fFx88cXj5ptvHrt27frTP/z111/He++9N7766qtx7NixsWPHjrFnz55x5ZVX/quxS1BW3g8//HAcPXp0/P7772Pr1q3jmmuuGTfddNM4//zz/++tNkLeJXMzdv0IENb6sT1j7/zdd9+Nl19+eZLP6rVp06Zx3333jcsvv/zEj2vMwYMHx08//fSnfPfcc8+46qqrTmvsksmWKF955ZVJrCdfl1122di/f/+o7HVthLxL5mbs+hIgrPXle0be/dChQ+Prr78emzdvHnfdddc477zzxuuvvz5+++23sX379vHII4+cyPHRRx9Nu6u6brnllnHppZdOY3/++eexbdu28eijj56QxZKxSyb63HPPjR9//HHaSd1xxx1TxtptffHFF9Pb3H333ePqq6+eXi/JsGTskrzGbhwChLVxujitJLVLeeaZZ8Yvv/wy3QLWn7reeeed8cknn0yvH3vssXHBBRdMr2t3VbdjF1100Xj44Yenn3366afjrbfeml4/8MADY+fOnYvHrjV85Xz66aen4TfccMMkzbpKrk899dT0+vrrrx+33nrr4gxL5rbWvMZtLAKEtbH6OO00JYLaWc1ievPNN8dnn3027ZYef/zxaff1xx9/jCeeeGK6FavzotqN1VXnSC+++OL0ukRRwlgytj6nPq+uuqU7cODA9Lp2TK+++ur0um5L77///ul9azdXeS+88MJpd3WysGaRLcmwZOxpQ/YPzzoBwjrrFfy3AerMpw7eX3vtten859prrx133nnn9CElitqN1bW6uznVz5eMrfcrMc23dLfffvt0Fla3frVz2rJly3jooYemg/W/uuqW8P3335/+er4lXJJhydj/lrh3O5MECOtM0j4DnzWfZ9VHXXHFFdMuqnZXdf3www/j+eefn17feOONY9++fdPr1du06667bpRwloyt96hv+uq96xu9+ry6razD9bpOPsw/GUOdvx0+fHja+dWuq87came4JMOSsWegBh+xTgQIa53Anq23rV1NCah2VyWOekyg/tRVZ1d1zrMWYS0ZO8+1BFXiWb127949Haz/1VWyqm8M65auJFW3k/MZ2pIMS8aerW587r8nQFj/nuGGeofapdR//I8//ni8++67U7baZdWZVT3K8Oyzz04/+6dbwiVjVwHU4X0d4tdV52m1W5p3eKfaWa3KqnLO3w7W2CUZlozdUIUJs4gAYS3ClTO4xFUH7LVzqfOkui2rXVf9rK7Vs61THbovGTtTqc986aWXpkP8+aqD9tXnwOaf1zlb3b7OO6uTZVXjlmRYMjanRUlPJkBY4Wuidhb1DV2dHdUjDbWTqqvOlJ588snpdT3Bfu+9906v52egVh9rWP2Wb/WxhiVj671Xn4OasdZBex2418H7fNUB+QsvvDBlrN3gqWQ1j12SYcnY8Nrbxies8OprZ1HPNc2/3nLbbbdNt2L1azp1PlRXHaLXYXpd9fP6U1c9A3XJJZeMN95445QPji4ZW2dI9WhE7ZjqYdTa1c23pPMOb0a9+sVAfX6dc61eJdN6PGI984bX3jY+YZ0D1X/++efTYwynuuqbwtpdzb/qUmIrsazlV3PWOrYkVYf59fR6PQv24IMPTg+mrt4ezudoNaZ2Qn93rR7UrzVDvd+SsedA7S2nQFjnSO11JlS3ZN9+++2JxwPqP34drs+ymqdat4/1zNOXX365pl9+/qexq0/V7927d/pF6rrqUYO69Suh1cF73RrWZ7799ttrFlYN/K/zniOVt5wGYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAv8DQqEKOqUAkIYAAAAASUVORK5CYII=">
                  <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget .</p>
                    <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img data-src="holder.js/210x100" alt="210x100" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAADICAYAAABS39xVAAALgUlEQVR4Xu3b969VRRuG4UFBEFERO8aCBHsFYyyJ/ulGY8MSsMVeoz9YEXsJ8uVdySL7Q9Sz0APn4b1WQrJzGPZ+5n6GO7Nmr7Ppm2++OT5cCCCAQACBTYQV0JKICCAwESAsCwEBBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6YqQRFAgLCsAQQQiCFAWDFVCYoAAoRlDSCAQAwBwoqpSlAEECAsawABBGIIEFZMVYIigABhWQMIIBBDgLBiqhIUAQQIyxpAAIEYAoQVU5WgCCBAWNYAAgjEECCsmKoERQABwrIGEEAghgBhxVQlKAIIEJY1gAACMQQIK6aqvw/6/fffjw8++GAcOXJkHD9+fFx88cXj5ptvHrt27frTP/z111/He++9N7766qtx7NixsWPHjrFnz55x5ZVX/quxS1BW3g8//HAcPXp0/P7772Pr1q3jmmuuGTfddNM4//zz/++tNkLeJXMzdv0IENb6sT1j7/zdd9+Nl19+eZLP6rVp06Zx3333jcsvv/zEj2vMwYMHx08//fSnfPfcc8+46qqrTmvsksmWKF955ZVJrCdfl1122di/f/+o7HVthLxL5mbs+hIgrPXle0be/dChQ+Prr78emzdvHnfdddc477zzxuuvvz5+++23sX379vHII4+cyPHRRx9Nu6u6brnllnHppZdOY3/++eexbdu28eijj56QxZKxSyb63HPPjR9//HHaSd1xxx1TxtptffHFF9Pb3H333ePqq6+eXi/JsGTskrzGbhwChLVxujitJLVLeeaZZ8Yvv/wy3QLWn7reeeed8cknn0yvH3vssXHBBRdMr2t3VbdjF1100Xj44Yenn3366afjrbfeml4/8MADY+fOnYvHrjV85Xz66aen4TfccMMkzbpKrk899dT0+vrrrx+33nrr4gxL5rbWvMZtLAKEtbH6OO00JYLaWc1ievPNN8dnn3027ZYef/zxaff1xx9/jCeeeGK6FavzotqN1VXnSC+++OL0ukRRwlgytj6nPq+uuqU7cODA9Lp2TK+++ur0um5L77///ul9azdXeS+88MJpd3WysGaRLcmwZOxpQ/YPzzoBwjrrFfy3AerMpw7eX3vtten859prrx133nnn9CElitqN1bW6uznVz5eMrfcrMc23dLfffvt0Fla3frVz2rJly3jooYemg/W/uuqW8P3335/+er4lXJJhydj/lrh3O5MECOtM0j4DnzWfZ9VHXXHFFdMuqnZXdf3www/j+eefn17feOONY9++fdPr1du06667bpRwloyt96hv+uq96xu9+ry6razD9bpOPsw/GUOdvx0+fHja+dWuq87came4JMOSsWegBh+xTgQIa53Anq23rV1NCah2VyWOekyg/tRVZ1d1zrMWYS0ZO8+1BFXiWb127949Haz/1VWyqm8M65auJFW3k/MZ2pIMS8aerW587r8nQFj/nuGGeofapdR//I8//ni8++67U7baZdWZVT3K8Oyzz04/+6dbwiVjVwHU4X0d4tdV52m1W5p3eKfaWa3KqnLO3w7W2CUZlozdUIUJs4gAYS3ClTO4xFUH7LVzqfOkui2rXVf9rK7Vs61THbovGTtTqc986aWXpkP8+aqD9tXnwOaf1zlb3b7OO6uTZVXjlmRYMjanRUlPJkBY4Wuidhb1DV2dHdUjDbWTqqvOlJ588snpdT3Bfu+9906v52egVh9rWP2Wb/WxhiVj671Xn4OasdZBex2418H7fNUB+QsvvDBlrN3gqWQ1j12SYcnY8Nrbxies8OprZ1HPNc2/3nLbbbdNt2L1azp1PlRXHaLXYXpd9fP6U1c9A3XJJZeMN95445QPji4ZW2dI9WhE7ZjqYdTa1c23pPMOb0a9+sVAfX6dc61eJdN6PGI984bX3jY+YZ0D1X/++efTYwynuuqbwtpdzb/qUmIrsazlV3PWOrYkVYf59fR6PQv24IMPTg+mrt4ezudoNaZ2Qn93rR7UrzVDvd+SsedA7S2nQFjnSO11JlS3ZN9+++2JxwPqP34drs+ymqdat4/1zNOXX365pl9+/qexq0/V7927d/pF6rrqUYO69Suh1cF73RrWZ7799ttrFlYN/K/zniOVt5wGYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAoSV2ZvUCLQkQFgtazdpBDIJEFZmb1Ij0JIAYbWs3aQRyCRAWJm9SY1ASwKE1bJ2k0YgkwBhZfYmNQItCRBWy9pNGoFMAv8DQqEKOqUAkIYAAAAASUVORK5CYII=">
                  <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non m.</p>
                    <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p>
                  </div>
                </div>
              </li>
            </ul>
          </div>

</div>
</section>
  <!-- START THE FEATURETTES -->
  <script>
    !function ($) {
      $(function(){
        // carousel demo
        $('#myCarousel').carousel()
      })
    }(window.jQuery)
  </script>
