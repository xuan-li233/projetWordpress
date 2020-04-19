<header class="banner">
  <a class="container">
{{--    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>--}}
    <div class="line"></div>
    <a href="{{ home_url('/') }}"> <h1 class="title" >XUAN LI</h1></a>
    <div class="line"></div>
  </div>
<?php wp_nav_menu( array( 'theme_location' => 'my-custom-menu', 'container_class' => 'custom-menu-class' ) ); ?>
</header>
