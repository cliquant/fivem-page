<?php
	$discordinvite = "https://discord.gg/yourinvitehere";
    $jsonIn = file_get_contents("https://discordapp.com/api/guilds/413438066984747026/widget.json");
    $JSON = json_decode($jsonIn, true);

    $membersCount = count($JSON['members']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <link rel="stylesheet" href="./assets/css/reset.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/balloon-css/0.5.0/balloon.min.css">
  <link rel="stylesheet" href="./assets/css/style.css?=tineklis">
</head>
<body>

<div class="wrap">
  <div class="bg"></div>
  <div class="bg_before"></div>
  <div class="button-parent">

    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo">
      <defs>
        <filter id="goo">
          <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
          <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
          <feComposite in="SourceGraphic" in2="goo"/>
        </filter>
      </defs>
    </svg>

    <div class="button-semi-parent">

      <div>
        <span class="button--bubble__container">
          <a href="" class="button button--bubble">
            Forum
          </a>
          <span class="button--bubble__effect-container">
            <span class="circle top-left"></span>
            <span class="circle top-left"></span>
            <span class="circle top-left"></span>

            <span class="button effect-button"></span>

            <span class="circle bottom-right"></span>
            <span class="circle bottom-right"></span>
            <span class="circle bottom-right"></span>
          </span>
        </span>
      </div>

      <div>
        <span class="button--bubble__container">
          <a href="<?=$discordinvite;?>" class="button button--bubble">
            Discord
          </a>
          <span class="button--bubble__effect-container">
            <span class="circle top-left"></span>
            <span class="circle top-left"></span>
            <span class="circle top-left"></span>

            <span class="button effect-button"></span>

            <span class="circle bottom-right"></span>
            <span class="circle bottom-right"></span>
            <span class="circle bottom-right"></span>
          </span>
        </span>
      </div>

      <div>
        <span class="button--bubble__container">
          <a href="" class="button button--bubble">
            Apply
          </a>
          <span class="button--bubble__effect-container">
            <span class="circle top-left"></span>
            <span class="circle top-left"></span>
            <span class="circle top-left"></span>

            <span class="button effect-button"></span>

            <span class="circle bottom-right"></span>
            <span class="circle bottom-right"></span>
            <span class="circle bottom-right"></span>
          </span>
        </span>
      </div>
    </div>
  </div>

  <div class="monitor-parent">
           </div>
    <div class="monitor-box">
      <a><img src="./assets/visual/logo-discord.jpg" alt="Discord Logo" class="logo-visual" draggable="false"></a>
      <div class="descriptive-text">
        <span class="no-select">Discord <span class="bullet">•</span> <span class="online"><?=$membersCount;?></span> <span class="dash">/</span> <span class="max-count">∞</span></span>
        <a href="<?=$discordinvite;?>"><span class="the-ip-connext no-select tooltip-bottom" data-balloon="Click, to join!" data-balloon-pos="down" id="js--">Join server</span></a>
      </div>
    </div>

  </div>

</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/plugins/CSSPlugin.min.js" charset="utf-8"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/easing/EasePack.min.js" charset="utf-8"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenLite.min.js" charset="utf-8"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js" charset="utf-8"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" charset="utf-8"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js" charset="utf-8"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" charset="utf-8"></script>
<script src="./assets/js/index.js" charset="utf-8"></script>
</body>
</html>
