<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Вход</title>
    <link rel="icon" href="logotype.png" type="image/png">
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="login.css">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.21.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site2",
		"logo": "images/logotype.svg"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Вход">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-image u-xl-mode" data-lang="ru" style="background-position: 50% 50%; background-attachment: fixed; background-image: url(&quot;images/1626250760_24-kartinkin-com-p-belaya-kirpichnaya-stena-tekstura-krasivo-29.jpg&quot;);"><header class="u-clearfix u-header u-header" id="sec-cb48"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="dev-house-shop.html" class="u-image u-logo u-image-1" data-image-width="65" data-image-height="50" title="О нас">
          <img src="images/logotype.svg" class="u-logo-image u-logo-image-1">
        </a>
        <a href="Корзина.html" class="u-border-active-black u-border-black u-border-hover-palette-3-base u-border-none u-btn u-button-style u-custom-font u-hover-feature u-none u-text-active-black u-text-body-color u-text-hover-palette-3-dark-1 u-btn-1">Корзина</a>
        <a href="https://dev-house.online/" class="u-border-active-black u-border-black u-border-hover-palette-3-base u-btn u-button-style u-custom-font u-hover-feature u-none u-text-active-black u-text-body-color u-text-hover-palette-3-dark-1 u-btn-2" target="_blank">Наш курс</a>
        <a href="Вход.php" class="u-border-active-black u-border-black u-border-hover-palette-3-base u-btn u-button-style u-custom-font u-hover-feature u-none u-text-active-black u-text-body-color u-text-hover-palette-3-dark-1 u-btn-3" target="_self">Вход</a>
        <a href="О-нас.html" class="u-border-active-black u-border-black u-border-hover-palette-3-base u-border-none u-btn u-button-style u-custom-font u-hover-feature u-none u-text-active-black u-text-body-color u-text-hover-palette-3-dark-1 u-btn-4">О нас</a><span class="u-file-icon u-hover-feature u-icon u-icon-circle u-icon-1"><img src="images/87413.png" alt=""></span><span class="u-file-icon u-hover-feature u-icon u-icon-circle u-icon-2"><img src="images/81893.png" alt=""></span><span class="u-file-icon u-hover-feature u-icon u-icon-circle u-text-black u-icon-3"><img src="images/152810-de014dd2.png" alt=""></span>
      </div></header>
      <?php
    require "db.php";

    $data = $_POST;
    if( isset ($data['do_login']) )
    {
        $errors = array();
        $user = R::findOne('users', 'login = ?', array($data['login']));
    if ( $user )
    {
    // логин существует
    if( password_verify($data['password'], $user->password)) {
        // всё хорошо, логиним пользователя
        $_SESSION['logged_user'] = $user;
        echo '<div class="logok">Вы авторизованы!</div><hr>';
    } else 
    {
        $errors[] = 'Неверно введён пароль!';
    }
    } else
    {
        $errors[] = 'Пользователь с таким логином не найден!';
    }

    if( ! empty($errors) )
    {
        echo '<div class="logok">'.array_shift($errors).'</div><hr>';
    }

    }

?>
<div class="log">
<form action="login.php" method="POST">

<p>
    <p><strong>Логин</strong>:<p>
    <input type="text" name="login" value="<?php echo @$data['login']; ?>">
</p>

<p>
    <p><strong>Пароль</strong>:<p>
    <input type="password" name="password" value="<?php echo @$data['password']; ?>">
</p>

<p>
  <div class="btn">
        <button type="submit" name="do_login" class="btn btn-primary" id="xyi">Войти</button>
  </div>
</p>

</form>
</div>
</head>

    <section class="u-clearfix u-section-1" id="sec-5e9c">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section> 
    
    <footer class="u-clearfix u-footer u-white u-footer" id="sec-795a"><div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-1">
                <div class="u-container-layout u-valign-bottom-sm u-valign-bottom-xs u-valign-top-lg u-valign-top-md u-valign-top-xl u-container-layout-1">
                  <a href="dev-house-shop.html" class="u-image u-logo u-image-1" data-image-width="65" data-image-height="50" title="dev-house-shop">
                    <img src="images/logotype.svg" class="u-logo-image u-logo-image-1">
                  </a><!--position-->
                  <div data-position="" class="u-position u-position-1"><!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix"><!--block_header-->
                        <h5 class="u-align-center u-block-header u-text"><!--block_header_content--><!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                        <div class="u-align-center u-block-content u-custom-font u-text u-text-2"><!--block_content_content-->
                          <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-black u-btn-1" href="https://nicepage.com">Условия ​cookie</a><!--/block_content_content-->
                        </div><!--/block_content-->
                      </div>
                    </div><!--/block-->
                  </div><!--/position-->
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-size-20 u-layout-cell-2">
                <div class="u-container-layout u-valign-top-sm u-valign-top-xs u-container-layout-2"><!--position-->
                  <div data-position="" class="u-position u-position-2"><!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix"><!--block_header-->
                        <h5 class="u-align-center u-block-header u-text"><!--block_header_content--> ©Dev House<!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                        <div class="u-align-center u-block-content u-custom-font u-text u-text-4"><!--block_content_content-->
                          <br><!--/block_content_content-->
                        </div><!--/block_content-->
                      </div>
                    </div><!--/block-->
                  </div><!--/position-->
                  <div class="facebook u-clearfix u-custom-html u-expanded-width u-custom-html-1"></div>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-3">
                <div class="u-container-layout u-valign-bottom-sm u-valign-bottom-xs u-container-layout-3"><span class="u-file-icon u-hover-feature u-icon u-icon-circle u-icon-1"><img src="images/87413.png" alt=""></span><span class="u-file-icon u-hover-feature u-icon u-icon-circle u-icon-2"><img src="images/81893.png" alt=""></span><span class="u-file-icon u-hover-feature u-icon u-icon-circle u-text-black u-icon-3"><img src="images/152810-de014dd2.png" alt=""></span>
                  <a href="https://t.me/alexander_noskov" class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-2"><span class="u-icon"></span>&nbsp;Telegram@53xApps
                  </a>
                  <p class="u-text u-text-default u-text-5"><span class="u-file-icon u-icon"><img src="images/5757765.png" alt=""></span>&nbsp;<a class="contacts__link u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-3" href="mailto:hello@53xapps.com">hello@53xapps.com</a>
                  </p>
                  <a href="https://nicepage.com/c/architecture-building-website-templates" class="u-active-none u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-btn-rectangle u-button-style u-hover-none u-none u-radius-0 u-top-left-radius-0 u-top-right-radius-0 u-btn-4"><span class="u-icon"><svg class="u-svg-content" viewBox="0 0 405.333 405.333" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M373.333,266.88c-25.003,0-49.493-3.904-72.704-11.563c-11.328-3.904-24.192-0.896-31.637,6.699l-46.016,34.752    c-52.8-28.181-86.592-61.952-114.389-114.368l33.813-44.928c8.512-8.512,11.563-20.971,7.915-32.64    C142.592,81.472,138.667,56.96,138.667,32c0-17.643-14.357-32-32-32H32C14.357,0,0,14.357,0,32    c0,205.845,167.488,373.333,373.333,373.333c17.643,0,32-14.357,32-32V298.88C405.333,281.237,390.976,266.88,373.333,266.88z"></path></svg><img></span>&nbsp;+7 (941) 322-1522
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div></footer>
</body></html>