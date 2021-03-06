<?php /* Template Name: Intro  */ ?>
<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ) ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="google-site-verification" content="DrJdD_5I_G84-PuPYyJBH80-SVSyXIblOU-DnYsDKd4" /> 
  <?php wp_head() ?>
  <style media="screen">
    body {
      background-color: #000;
      height: 100vh;
      width: 100%;
    }
    .mim-logo {

    }
    .vamtam-button {
      border-radius: var(--vamtam-border-radius-oval);
      box-shadow: none;
      padding: 14px 30px;
      border: 2px solid;
      background: 0 0;
      text-transform: uppercase;
      display: block;
    }

    .col-bg {
      height: 100vh;
      width: 50%;
      background-position: 50% 0%;
      background-repeat: no-repeat;
      background-size: cover;
       transition: all .5s ease;
       -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
       filter: grayscale(100%);
    }



    .caption {
      position: relative;
      height: 100%;
      background-color: rgba(0, 0, 0, .6);
      transition: all .8s ease;
      -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
      filter: grayscale(100%);
    }
    .caption::after {
      content: " ";
      position: absolute;
      bottom: 0;
      height: 50%;
      width: 100%;
      background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 1) 100%);
      background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 1) 100%);
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 1) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#000000', GradientType=0);
    }

    .caption img {
      position: absolute;
      top: 80px;
      left: 50%;
      margin-left: -90px;
      z-index: 9999;
      opacity: 0.5;

      height: auto;
      max-width: 200px;
      transition: all .3s ease;
    }

    .caption span {
      opacity: 0;
      transform: translateY(30px);
      transition: 0.3s !important;
      display: inline-block;
      /* color: #fff; */
      border-color: #fff;
      position: relative;
      z-index: 99;
    }

    .col-bg:hover {
      filter: none;
      background-position: 50% -10px;
    }

    .col-bg:hover .caption {
      filter: none;
      background-color: transparent;
    }

    .col-bg:hover .caption img {
      opacity: 1;
      transform: scale(1.08);
    }

    .col-bg:hover .caption span {
      transform: translateY(-20px);
      opacity: 0;
    }

    .col-bg:hover .caption span {
      transform: translateY(0px);
      opacity: 1;
      background-color: #fff !important;
      border-color: #fff !important;
    }

    .col-bg .caption span {
      background-color: #fff;
      border-color: #fff;
      transform: translateY(5px);
      opacity: 1;
    }

    .col-bg .caption span:hover {
      background-color: #d13338;
      border-color: #d13338;
      opacity: 1;
    }


    @media screen and (max-width: 768px) {


      .col-bg {
        height: 50vh;
        width: 100%;
      }

      .caption img {
        top: 20px;
        margin-left: -60px;
        max-width: 120px;
      }

      .col-bg .caption span {
        transform: translateY(30px);
      }

    }


  </style>
</head>
<body <?php body_class() ?>>
  <section class="do-landing h-100">
    <div class="mim-logo">
    </div>
    <div class="container-fluid h-100 px-0">
      <div class="d-block d-md-flex">
        <div class="px-0 col-bg" style="background-image: url('<?php the_field('inwood_bg') ?>');">
          <a href="<?php the_field('inwood_url') ?>" class="h-100">
            <div class="caption d-flex justify-content-center align-items-end">
              <div class="text-center">
                <img src="<?php echo get_template_directory_uri() ?>/images/logo-white.svg" alt="<?php bloginfo('name') ?>" height="150">
                <div class="d-block">
                  <span class="vamtam-button text-dark"><?php _e('Enter') ?></span>
                </div>
                <p class="text-white-50 position-relative my-5" style="z-index: 999;"><?php the_field('inwood_address') ?></p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-bg" style="background-image: url('<?php the_field('harlem_bg') ?>');">
          <a href="<?php the_field('harlem_url') ?>" class="h-100">
            <div class="caption d-flex justify-content-center align-items-end">
              <div class="text-center">
                <img src="<?php echo get_template_directory_uri() ?>/images/logo-harlem.svg" alt="<?php bloginfo('name') ?>" height="150">
                <div class="d-block">
                  <span class="vamtam-button text-dark"><?php _e('Enter') ?></span>
                </div>
                <p class="text-white-50 position-relative my-5" style="z-index: 999;"><?php the_field('harlem_address') ?></p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <?php wp_footer() ?>
</body>
</html>
