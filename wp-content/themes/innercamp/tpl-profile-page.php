<?php
/**
* Template Name: Profile Page*
*
*/
get_header();

  $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  $urlParts = parse_url($url);
  $path = $urlParts['path'];
  $subdomain = explode('/', $path);

?>
   
   <?php if ($subdomain[2] == 'lost-password') { ?>
    <section class="reset__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </section>
   
       <?php get_footer('none'); ?>  
       
    <?php }else{ ?> 

    <section class="profile__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l3 xl2">
            <div class="menu__">
              <ul> 
                <li> <a class="order" href="/my-account/orders/">Orders</a></li>
                <li> <a class="profile" href="#">Profile</a></li>
                <li> <a class="affilate" href="#">Affilate</a></li>
              </ul>
            </div>
          </div>
          <div class="col m12 s12 l9 xl10">
          
                   <?php the_content(); ?>

          </div>
        </div>
      </div>
    </section>
    
    <?php get_footer();  
    
     } 
    
    
  if(0){  ?>
    
    <section class="profile__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l3 xl2">
            <div class="menu__">
              <ul> 
                <li> <a class="order" href="#">Orders</a></li>
                <li> <a class="profile" href="#">Profile</a></li>
                <li> <a class="affilate" href="#">Affilate</a></li>
              </ul>
            </div>
          </div>
          <div class="col m12 s12 l9 xl10">
            <h1 class="title">Account information</h1>
            <div class="box__forma">
              <form method="POST" action="javascript:void(null);">
                <!-- Hidden Required Fields-->
                <div class="form_input"><span class="field">
                    <input type="text" name="name" required="" value="" placeholder="Your name"></span></div>
                <div class="form_input"><span class="field">
                    <input class="email" type="email" name="email" required="" value="" placeholder="Your email"></span></div>
                <button class="bundle" type="submit" name="send">Save</button>
                <div class="bottom__"><a href="javascript:;">Сhange password</a><a href="javascript:;">Reset password</a></div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <section class="profile__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l3 xl2">
            <div class="menu__">
              <ul> 
                <li> <a class="order" href="#">Orders</a></li>
                <li> <a class="profile" href="#">Profile</a></li>
                <li> <a class="affilate" href="#">Affilate</a></li>
              </ul>
            </div>
          </div>
          <div class="col m12 s12 l9 xl10">
            <h1 class="title">Orders</h1>
            <ul class="orderli">
              <li> 
                <div class="box__img"><img src="<?= get_template_directory_uri(); ?>/img/orders_ava.svg" alt="#"></div>
                <div class="box__content">
                  <p class="title__">Cacao Ceremony Facilitator Training</p><a class="price" href="javascript:;">1950€</a>
                </div>
              </li>
              <li> 
                <div class="box__img"><img src="<?= get_template_directory_uri(); ?>/img/orders_ava.svg" alt="#"></div>
                <div class="box__content">
                  <p class="title__">Cacao Ceremony Facilitator Training</p><a class="price" href="javascript:;">1950€</a>
                </div>
              </li>
              <li> 
                <div class="box__img"><img src="<?= get_template_directory_uri(); ?>/img/orders_ava.svg" alt="#"></div>
                <div class="box__content">
                  <p class="title__">Cacao Ceremony Facilitator Training</p><a class="price" href="javascript:;">1950€</a>
                </div>
              </li>
              <li> 
                <div class="box__img"><img src="<?= get_template_directory_uri(); ?>/img/orders_ava.svg" alt="#"></div>
                <div class="box__content">
                  <p class="title__">Cacao Ceremony Facilitator Training</p><a class="price" href="javascript:;">1950€</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="profile__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l3 xl2">
            <div class="menu__">
              <ul> 
                <li> <a class="order" href="#">Orders</a></li>
                <li> <a class="profile" href="#">Profile</a></li>
                <li> <a class="affilate" href="#">Affilate</a></li>
              </ul>
            </div>
          </div>
          <div class="col m12 s12 l9 xl10">
            <h1 class="title">Orders</h1>
            <div class="box__see"><img class="images" src="<?= get_template_directory_uri(); ?>/img/orderspack_ava.svg" alt="">
              <p class="strong"> There are no orders</p>
              <p>There are no orders in your account </p><a class="next" href="javascript:;">Find something for yourself </a>
            </div>
          </div>
        </div>
      </div>
    </section>
 <? }  
   
