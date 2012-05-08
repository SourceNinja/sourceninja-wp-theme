<!DOCTYPE html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title(''); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
    /* We add some JavaScript to pages with the comment form
     * to support sites with threaded comments (when in use).
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );

    /* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
?>

<link rel="shortcut icon" href="http://blog.sourceninja.com/wp-content/uploads/2011/10/favicon.ico" />

</head>

<body <?php body_class(); ?>>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <div id="wrapper">
      <header id="header">
        <div class="wrapper clearfix">
            
            <div id="logo"><a href="http://www.sourceninja.com"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Source Ninja Logo" /></a></div>
             <div class="menu-login">
            <div class="menu-login">
            <span><a href="https://app.sourceninja.com/d/users/sign_in">Login</a> | <a href="http://www.sourceninja.com/sign-up.html">Sign Up</a></span>
          </div>
          </div>
             <nav>
                <li><a href="http://blog.sourceninja.com/">Blog</a></li>
                <li><a href="https://app.sourceninja.com/packages">Packages</a></li>
                <li><a href="https://app.sourceninja.com/contact">Contact</a></li>
            </nav>
             
             
            
            
            </header>
            <!-- <h2 id="site-description"><?php bloginfo( 'description' ); ?></h2> -->
        </div><!--.wrapper clearfix-->
      
  <div class="wrapper clearfix">
      
  </div>
<div class="wrapper">
