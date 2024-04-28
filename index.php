<?php
require "game/init.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agario Private Server | Agar.io Game</title>
    <meta name="description" content="You can play agario private servers of 100 people on this site. In games you can use the agario skins that were added before on our site and you can play a casual Agario game with your friends. The only goal of the game is to be first in the ranking of leadership.">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="manifest" href="/manifest.json">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="agariowow.github.io/Agario/">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="apple-touch-icon" sizes="128x128" href="/manifest/img/128x128.png">
	<link rel="apple-touch-icon-precomposed" sizes="128x128" href="/manifest/img/128x128.png">
	<link rel="icon" sizes="192x192" href="/manifest/img/192x192.png">
	<link rel="icon" sizes="128x128" href="/manifest/img/128x128.png">
	<script>
        if ('serviceWorker' in navigator) {
        	window.addEventListener('load', function () {
        		navigator.serviceWorker.register('/sw.js?v=1');
        	});
        }
	</script>
    <meta name="google" content="notranslate">
	<meta property="og:url" content="https://agariowow.github.io/Agario/"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="content-language" content="en-US" />
    <meta name="language" content="en-US" />
    <meta property="og:title" content="Agario Private Server"/>
    <meta property="og:description" content="Agario, Agario Play, Agario Unblocked, Agario unblocked at shool, play agario, new agario private server, agario game.!"/>
    <meta property="og:image" content="https://agariowow.github.io/Agario//img/agario.png">
    <meta property="og:image:secure_url" content="https://agariowow.github.io/Agario//img/agario.png" />
    <meta property="og:image:width" content="1199"/>
    <meta property="og:image:height" content="599"/>
    <meta property="og:type" content="website"/>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@Agario">
    <meta name="twitter:creator" content="agar private server">
    <meta name="twitter:title" content="Agario">
    <meta name="twitter:description" content="Agario">
    <meta name="twitter:image:src" content="https://agariowow.github.io/Agario//img/agario.png">
    <meta property="og:type" content="website"/>
    <link id="favicon" rel="icon" type="image/png" href="https://agariowow.github.io/Agario//favicon.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@v2.8.8/dist/cookieconsent.css" media="print" onload="this.media='all'">
   <style>@media screen and (max-width:1400px) and (min-width:1100px),(min-width:1400px){#new_theme_agario{-moz-transform:scale(.9,.9);zoom:0.9;zoom:90%}}@import url(https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap);body{font-family:Lato,sans-serif;zoom: 0.8;background-color:rgba(0,0,0,.41)}.stats-btn__row{display:flex;padding-bottom:5px}.stats-btn__share-btn{flex:1}.stats-btn__share-btn:first-child{margin-right:2.5px}.stats-btn__share-btn:last-child{margin-left:2.5px}.stats-btn__share-btn{height:35px;color:#fff;font-weight:700;background-color:#428bca;border:1px solid #357ebd;border-radius:4px}.stats-btn__share-btn:active{background-color:#3574ab}.stats-btn__share-btn{display:flex;align-items:center}.stats-btn__icon-svg{height:25px}.stats-btn__text{margin-left:12px}.stats-box{width:auto;position:relative;background-color:#fff;border-radius:10px;padding:5px 15px;box-sizing:border-box}#scroll-area{height:114px;overflow:auto;margin-top:10px}.app-card a{color:#fff;text-decoration:none;transition:all .2s ease-in-out}#overlays{position:absolute;inset:0px;background-color:rgba(0,0,0,.4);z-index:200}#gamemodebtn{border-color:transparent;font-size:17px;text-indent:3px;margin-right:-1px;width:32%;border-radius:6px;height:42px}#gamemode{display:none}@media (max-width:715px){.controls{display:none!important}#gamemode{display:block}#gamemodes{display:none}#gamemodebtn{display:none}}#login{position:absolute;top:50%;left:50%;margin-right:-50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);display:inline-block;width:364px;border-radius:10px;vertical-align:top -webkit-box-shadow: 0 0 24px 1px rgba(0,0,0,.1);-moz-box-shadow:0 0 24px 1px rgba(0,0,0,.1);box-shadow:0 0 24px 1px rgba(0,0,0,.1)}#selector{border:0;background-color:rgba(0,0,0,.2);border-radius:10px;vertical-align:top -webkit-box-shadow: 0 0 24px 1px rgba(0,0,0,.1);-moz-box-shadow:0 0 24px 1px rgba(0,0,0,.1);box-shadow:0 0 24px 1px rgba(0,0,0,.1);width:100%;height:100%;position:absolute;z-index:9999;display:none}#selector #skinClose{cursor:pointer;position:absolute;top:8px;right:13px;font-size:28px;color:#000}#skinModal{width:370px;height:600px;position:absolute;top:50%;left:50%;margin-right:-50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.skins{overflow-y:scroll;overflow-x:hidden;height:100%;margin-top:50px;height:calc(100% - 50px)}ul.skinList{list-style:outside none none;padding:0;width:364px}ul.skinList li{float:left;height:85px;margin:10px;margin-bottom:20px;margin-top:5px;text-align:center;width:85px}ul.skinList li img{border:4px solid #fff;border-radius:250px;border-top-left-radius:250px;border-top-right-radius:250px;box-shadow:0 5px 6px #bbb;height:85px;transform:scale(1);transition:all .5s ease 0s;width:85px}ul.skinList li p{cursor:default;white-space:pre;font-weight:700}#settings label{float:left;text-align:left;display:inline-block;padding-right:5px}#party{display:none;position:absolute;z-index:99999;width:300px;left:375px}#locationKnown #region,#nick,.u-input select{width:76%;float:left;border-color:transparent;font-size:17px;text-indent:3px}.u-input select{margin-top:5px;display:none}#gamemode{border-color:transparent;font-size:17px;text-indent:3px;margin-right:-1px;width:32%;border-radius:6px;height:42px}.caret{margin-top:-3px;margin-left:10px}#placeholder{color:#fff;background-color:#2ecc71;font-size:12px;font-weight:700;height:30px;line-height:1.25}.btn-info.active,.btn-info.hover,.btn-info:active,.btn-info:focus,.btn-info:hover,.open>.dropdown-toggle.btn-info{color:#fff;background-color:#5dade2;border-color:#5dade2}.object_stil{height:485px;width:100%}#skinsec ul li img{border:4px solid #fff;border-radius:250px;box-shadow:0 8px 6px #bbb;transform:scale(1);transition:all .5s ease 0s}#skinsec ul li:hover img{cursor:pointer;transform:scale(1.2);transition:all .3s ease 0s}.gdtr_topla{height:auto;overflow:hidden}.istatistik_baslik{font-size:15px;line-height:30px;height:30px;margin-top:20px;border-bottom:1px solid #0088f5;margin-bottom:15px;color:#2196f3;width:198px;float:left}.istatistik_list{margin-top:0}.istatistik_list.collection a.collection-item:not(.active):hover{background-color:#f5f5f5}.istatistik_list.collection .collection-item{padding-left:0!important}.istatistik_list.collection a.collection-item{display:block;transition:.25s;color:#484747}.menu_bottom_o{margin-bottom:0}.menu_bg{background:#424242}.menu_bg .brand-logo{padding-left:15px!important}.istatistik_list span.badge.new_number{font-weight:300;font-size:.8rem;color:#fff;background-color:#607d8b;border-radius:2px}.tabs_style.tabs{display:-webkit-flex;display:-ms-flexbox;display:flex;position:relative;overflow-x:auto;overflow-y:hidden;height:30px;background-color:#2196f3;margin:0 auto;width:100%;white-space:nowrap}.tabs_style.tabs .indicator{background-color:#737373}.tabs_style.tabs .tab a{color:#fff;display:block;width:100%;height:100%;text-overflow:ellipsis;overflow:hidden;transition:color .28s ease}.tabs_style.tabs .tab{-webkit-box-flex:1;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1;display:block;float:left;text-align:center;line-height:30px;height:30px;padding:0;margin:0;text-transform:uppercase;text-overflow:ellipsis;overflow:hidden;letter-spacing:.8px;width:15%;min-width:80px;font-size:14px}.say{min-width:25px;text-align:center;font-size:1rem;line-height:inherit;color:#484747;float:left;display:block;box-sizing:border-box;height:25px;color:#616161;text-align:center;line-height:27px;font-weight:700;font-size:.8rem;background-color:#d2d0d0;margin-right:8px;border-top-right-radius:10px;border-bottom-right-radius:50px}.tabs_settings.tabs{display:-webkit-flex;display:-ms-flexbox;display:flex;position:relative;overflow-x:auto;overflow-y:hidden;height:35px;background-color:#fff;margin:0 auto;width:100%;white-space:nowrap}.tabs_settings .tabs .tab{-webkit-box-flex:1;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1;display:block;float:left;text-align:center;line-height:35px;height:35px;padding:0;margin:0;text-transform:uppercase;text-overflow:ellipsis;overflow:hidden;letter-spacing:.8px;width:15%;min-width:80px}.tabs_settings.tabs .indicator{position:absolute;bottom:0;height:2px;background-color:#424242}.tabs_settings.tabs .tab a{color:#424242;display:block;width:100%;height:100%;text-overflow:ellipsis;overflow:hidden;transition:color .28s ease}.home_row_bg{background:rgba(230,230,230,.5);margin-top:15px;margin-bottom:0}.input-field label{color:#424242}.input_m20{margin-right:20px}.input_mt15{margin-top:15px}.input_m10{margin-right:10px}.izleyici_bg,.izleyici_bg:active,.izleyici_bg:focus,.izleyici_bg:hover{background:rgba(255,87,34,.69)}.skinsec,.skinsec:active,.skinsec:focus,.skinsec:hover{background:rgba(139,195,74,.99)}.skinyukle,.skinyukle:active,.skinyukle:focus,.skinyukle:hover{background:rgba(76,175,80,.99)}.oyunabasla,.oyunabasla:active,.oyunabasla:focus,.oyunabasla:hover{background:#e91e63}.btn-flat,.btn-large,.girisyap.btn{background:rgba(158,158,158,.78);box-shadow:none;border:0;border-radius:2px;display:inline-block;height:25px;line-height:25px;outline:0;padding:0 1rem;text-transform:uppercase;vertical-align:middle;-webkit-tap-highlight-color:transparent}.btn-flat,.btn-large,.kayitol.btn{background:rgba(158,158,158,.6);box-shadow:none;border:0;border-radius:2px;display:inline-block;height:25px;line-height:25px;outline:0;padding:0 1rem;text-transform:uppercase;vertical-align:middle;-webkit-tap-highlight-color:transparent}.alert_warning{background:#fcf8e3;text-align:center;margin-bottom:10px;padding:10px}.alert_danger{background:#f2dede;text-align:center;margin-bottom:10px;padding:10px}#options>label{display:block;width:187px;float:left}#top-bar{border:3px double #000;width:450px;margin:10px auto;padding:5px 15px;position:absolute;top:2%;left:50%;margin-right:-50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);background-color:#fff;background-image:url(yeni-nesil-agario.png);background-repeat:no-repeat;height:75px;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px}body{padding:0;margin:0;overflow:hidden}#canvas{position:absolute;left:0;right:0;top:0;bottom:0;width:100%;height:100%}.checkbox label{margin-right:10px}form{margin-bottom:0}.btn-play{width:59%;float:left}.btn-settings{width:13%;float:left}.btn-user{font-size:11px}#adsBottom{position:absolute;left:0;right:0;bottom:0}#adsBottomInner{margin:0 auto;width:728px;height:90px;border:5px solid #fff;border-radius:5px 5px 0 0;background-color:#fff;box-sizing:content-box}.region-message{margin-bottom:12px;margin-left:6px;margin-right:6px;text-align:center}#locationKnown #region{width:50%;float:left}#locationUnknown #region{margin-bottom:15px}#spectateBtn{width:40.6%;float:right}.warball-panel{display:inline-block;vertical-align:top}#helloContainer{width:100%;position:absolute;top:45%;left:50%;margin-right:-50%;-webkit-transform:translate(-50%,-52%);-ms-transform:translate(-50%,-52%);transform:translate(-50%,-52%)}#levelbar{width:260px;height:145px;background-color:#fff;margin:10px auto;border-radius:10px;padding:5px 15px;position:absolute;top:520px;left:-150px;margin-right:-50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}#clan{font-size:10pt;width:260px;background-color:#fff;margin:10px auto;border-radius:10px;padding:5px 15px;position:absolute;top:150px;left:455px;margin-right:-50%}.partyMenu{position:absolute;top:0;left:370px;margin-right:-50%}#adsbanner{width:330px;background-color:#fff;margin:10px auto;border-radius:10px;padding:5px 15px;position:absolute;top:47%;right:200px;margin-left:-50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}#stats{width:360px;height:581px;padding:0;overflow:hidden;top:45%;position:absolute;left:50%;margin-right:-50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}#statsHighestMassContainer,#statsPelletsContainer,#statsPlayerCellsEatenContainer,#statsTimeAliveContainer,#statsTimeLeaderboardContainer,#statsTopPositionContainer{position:absolute;width:100px;height:100px}#statsPelletsContainer{top:30px;left:50px}#statsHighestMassContainer{top:30px;right:50px}#statsTimeAliveContainer{top:85px;left:50px}#statsTimeLeaderboardContainer{top:85px;right:50px}#statsPlayerCellsEatenContainer{top:140px;left:50px}#statsTopPositionContainer{top:140px;right:50px}#statsPellets{position:absolute;top:0;left:0;bottom:0;right:0;margin:auto}#statsText{position:absolute;top:0;bottom:0;left:0;right:0;line-height:100px;font-size:23px}#statsSubtext{position:absolute;bottom:0;left:0;right:0;line-height:60px;font-size:12px;color:#000;text-align:center}#statsChartText{position:absolute;left:20px;bottom:250px;line-height:40px;font-size:40px}#statsChartText,#statsText{cursor:default;color:#444;text-align:center;font-weight:700}#statsContinue{position:absolute;width:290px;right:30px}#statsGraph{position:absolute;bottom:130px;left:0;right:0;opacity:.4}#a300x250{width:300px;height:250px;background-repeat:no-repeat;background-size:contain;background-position:center center}.panel{margin-bottom:0}#graphfps{position:absolute;left:10px;top:90px;opacity:1!important;width:275px;z-index:0}.tosBox{background-color:#fff;border-radius:4px 0 0;bottom:0;color:#999;font-size:11px;padding:3px 10px;position:absolute;right:0;z-index:1000}.agario-exp-bar{height:30px;position:relative;border:2px solid #01612b}.agario-exp-bar .progress-bar{background-color:#383;border-radius:0 4px 4px 0;-webkit-transition:none;transition:none}.agario-exp-bar .progress-bar-text{font-size:12pt;cursor:default;opacity:.75;color:#fff;text-align:center;line-height:26px;text-shadow:0 0 3px #000,-1px 0 0 #000,1px 0 0 #000,0 1px 0 #000,0 -1px 0 #000,-1px -1px 0 #000,1px 1px 0 #000,-1px 1px 0 #000,1px -1px 0 #000;position:absolute;top:0;bottom:0;left:0;right:0;font-family:Roboto,sans-serif}#agario-results-table{width:100%}#agario-results-table th{text-align:center;font-size:8pt}#agario-results-table td{text-align:center;color:#999;font-size:11pt;padding-bottom:15px}.progress-bar-star{position:absolute;top:-13px;right:-16px;width:50px;height:50px;background-image:url(img/star.png);background-size:cover;-webkit-transform:rotate3d(0,0,0,0deg);transform:rotate3d(0,0,0,0deg);-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-delay:0s;animation-delay:0s;-webkit-animation-iteration-count:1;animation-iteration-count:1;cursor:default;color:#fff;text-align:center;line-height:55px;font-size:12pt;text-shadow:0 0 3px #000,-1px 0 0 #000,1px 0 0 #000,0 1px 0 #000,0 -1px 0 #000,-1px -1px 0 #000,1px 1px 0 #000,-1px 1px 0 #000,1px -1px 0 #000;font-family:Roboto,sans-serif}#chat_textbox{-webkit-transition:all .5s ease-in-out;-moz-transition:all .5s ease-in-out;-o-transition:all .5s ease-in-out;transition:all .5s ease-in-out;position:absolute;z-index:1;bottom:10px;background:#000;border:0;outline:0;color:#fff;height:30px;text-indent:12px;left:10px;width:300px}#chat_textbox:focus{background:rgba(0,0,0,.5)}.creating-party-text{position:absolute;cursor:default;top:0;bottom:0;left:0;right:0;width:200px;height:80px;text-align:center;color:#fff;font-size:24px;line-height:100px;text-shadow:0 0 3px #000,-1px 0 0 #000,1px 0 0 #000,0 1px 0 #000,0 -1px 0 #000,-1px -1px 0 #000,1px 1px 0 #000,-1px 1px 0 #000,1px -1px 0 #000}.agario-profile-picture{float:left;display:block;width:64px;height:64px;border-radius:5px;border:2px solid #ccc;margin-right:6px}.agario-clan-picture{float:left;display:block;width:50px;height:50px;border-radius:5px;border:2px solid #ccc;margin-right:6px}.agario-panel{display:inline-block;width:350px;background-color:#fff;margin:2px;border-radius:10px;padding:5px 15px;vertical-align:top}.agario-side-panel{display:inline-block;width:220px}#helloContainer,.connecting-panel{position:absolute;top:50%;left:50%;margin-right:-50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}#a300x250{width:300px;height:250px;background-repeat:no-repeat;background-size:contain;background-position:center center}.agario-exp-bar{height:30px;position:relative;border:2px solid #01612b}.agario-exp-bar .progress-bar{background-color:#383;border-radius:0 4px 4px 0;-webkit-transition:none;transition:none}.agario-exp-bar .progress-bar-text{font-size:12pt;cursor:default;opacity:.75;color:#fff;text-align:center;line-height:26px;text-shadow:0 0 3px #000,-1px 0 0 #000,1px 0 0 #000,0 1px 0 #000,0 -1px 0 #000,-1px -1px 0 #000,1px 1px 0 #000,-1px 1px 0 #000,1px -1px 0 #000;position:absolute;top:0;bottom:0;left:0;right:0;font-family:Roboto,sans-serif}#agario-results-table{width:100%}#agario-results-table th{text-align:center;font-size:8pt}#agario-results-table td{text-align:center;color:#999;font-size:11pt;padding-bottom:15px}.tooltip-inner{max-width:300px}.agario-profile-panel{padding:15px}.agario-profile-panel .agario-profile-picture{float:left;display:block;width:64px;height:64px;border-radius:5px;border:2px solid #ccc;margin-right:6px}.agario-profile-panel .agario-profile-name-container{float:left;display:table;width:120px;height:64px;position:relative}.agario-profile-panel .agario-profile-name-container .agario-profile-name{display:table-cell;vertical-align:middle;text-align:center;font-weight:700}#helloContainer[data-has-account-data='0'] .agario-profile-panel{display:none}.agario-party,.agario-party-0,.agario-party-1,.agario-party-2,.agario-party-3,.agario-party-4,.agario-party-5,.agario-party-6{display:none}#helloContainer[data-gamemode=':party'] .agario-party{display:block;position:relative}#helloContainer[data-gamemode=':party'] .agario-promo{display:none}#helloContainer[data-party-state='0'] .agario-party-0{display:block}#helloContainer[data-party-state='1'] .agario-party-1{display:block}#helloContainer[data-party-state='2'] .agario-party-2{display:block}#helloContainer[data-party-state='3'] .agario-party-3{display:block}#helloContainer[data-party-state='4'] .agario-party-4{display:block}#helloContainer[data-party-state='5'] .agario-party-5{display:block}#helloContainer[data-party-state='6'] .agario-party-6{display:block}.partyToken{margin-bottom:10px}.side-container{vertical-align:top;display:inline-block;width:224px}.cell-spinner{display:block;margin:0}#chat_settings{position:absolute;left:305px;z-index:1;bottom:12px;border:0;outline:0;color:#fff;height:30px;text-align:center;width:auto;padding:0 15px}.gdtr_chat_settings{width:auto;float:left}.gdtr_chat_button{line-height:.5;width:100px;border-style:none;height:auto;float:left;margin-right:10px;color:#fff;background-color:#1abc9c;padding:6px 5px;font-size:15px;font-weight:400}.gdtr_chat_button label{line-height:12px}.gdtr_chat_settings .switch{height:30px;line-height:30px}.gdtr_chat_settings .switch label{color:#fff}.gdtr_chat_settings .switch label .lever{background-color:#41535d}.gdtr_chat_settings .switch label input[type=checkbox]:checked+.lever{background-color:#48606b}.gdtr_chat_settings .switch label input[type=checkbox]:checked+.lever:after{background-color:#6c91a2;left:24px}#yourElement{-vendor-animation-duration:3s;-vendor-animation-delay:2s;-vendor-animation-iteration-count:infinite}#register_form h1{text-align:center;font-size:1.8em;font-family:roboto}#register_form label{color:#fff;background:#757575;display:block;text-indent:10px;padding:5px 0}#giris input[type=password],#giris input[type=text],#register_form input[type=password],#register_form input[type=text]{height:44px;font-size:16px;width:100%;margin-bottom:10px;-webkit-appearance:none;background:#424242;border:1px solid #d9d9d9;border-top:1px solid silver;padding:0 8px;box-sizing:border-box;-moz-box-sizing:border-box;color:#fff}#giris input[type=password],#giris input[type=text],#register_form input[type=password]:hover,#register_form input[type=text]:hover{border:1px solid #b9b9b9;border-top:1px solid #a0a0a0;-moz-box-shadow:inset 0 1px 2px rgba(0,0,0,.1);-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,.1);box-shadow:inset 0 1px 2px rgba(0,0,0,.1)}#kisim{width:200px;float:left;margin-right:30px}table.recipe{margin-bottom:3px}#don1{color:#000}#don1:hover{color:navy}#don{transition:width 2s,height 2s;-moz-transition:width 2s,height 2s,-moz-transform 2s;-webkit-transition:width 2s,height 2s,-webkit-transform 2s;-o-transition:width 2s,height 2s,-o-transform 2s}#don:hover{transform:rotate(360deg);-moz-transform:rotate(360deg);-webkit-transform:rotate(360deg);-o-transform:rotate(360deg)}#nicks{width:35%;margin-right:2%;float:left}#preview{width:50px;height:50px;border-radius:400px;border:3px solid #17c834;margin:-14px 0;float:left;transition:width 2s,height 2s;-moz-transition:width 2s,height 2s,-moz-transform 2s;-webkit-transition:width 2s,height 2s,-webkit-transform 2s;-o-transition:width 2s,height 2s,-o-transform 2s}#preview:hover{transform:rotate(360deg);-moz-transform:rotate(360deg);-webkit-transform:rotate(360deg);-o-transform:rotate(360deg)}.controls{position:fixed;right:208px;top:12px;width:190px;background:rgba(0,0,0,.46);padding:10px}.controls p{display:none}.gallery{margin-top:10px;margin-left:0;padding:0}.gallery img{width:100%;border-radius:7px;float:left;margin-right:10px;cursor:pointer}.btn-social{display:none}#window{width:70%;height:auto;position:fixed;left:calc(50% - 35%);top:30px;z-index:9999}#window img{width:100%;height:auto}#window .btn{position:absolute;z-index:101;margin-left:10px;margin-top:40px}.gdtr_tebrik_et{background:#e91e63 none repeat scroll 0 0;border-radius:10px;color:#ffd222;font-family:Roboto!important;font-size:160%;font-weight:400;height:150px;line-height:20px;position:absolute;text-align:center;text-shadow:1px 2px 0 #444;top:30px!important;width:280px;z-index:2000;box-shadow:0 8px 17px 0 rgba(0,0,0,.2),0 6px 20px 0 rgba(0,0,0,.19)}.bildirim_nedir_o{opacity:0;transform:scale(0);transition:all .5s ease 0s}.bildirim_nedir_g{opacity:1;transform:scale(1);transition:all .5s ease 0s}.kullanici_adi_nedir{background:rgba(0,0,0,.5) none repeat scroll 0 0;border-radius:5px;color:#fbfbfb;display:inline-block;font-family:Roboto!important;font-size:70%!important;margin-bottom:10px;margin-top:14px;padding:7px 33px}.bildirim_nedir{background:#a01a47;height:40px;line-height:40px;border-top-left-radius:10px;border-top-right-radius:10px;color:#fff}.tebrik_et{color:#fff;padding:6px}.btn-serverler{color:#fff;background-color:#3a8043;border:0}.skin_btn_style{width:130px;font-size:12px;height:30px;line-height:30px;padding:0!important}.input_mr7{margin-right:7px}#mini-map-wrapper{z-index:999;position:fixed;bottom:30px;right:19px;width:155px;height:155px;background:url(../../img/images/mini_map.png) no-repeat;background-size:cover;display:block;border:.02em solid}@media screen and (max-width:900px),screen and (max-device-width:900px){#mini-map-wrapper{display:none}}.gdtr_screenshot{width:170px;font-size:13px;padding-left:7px;padding-right:5px;text-transform:none;text-align:left;background:#3f51b5;color:#fff;border-radius:5px}.gdtr_screenshot:focus,.gdtr_screenshot:hover,gdtr_screenshot:active{background:#3f51b5}.gdtr_screenshot span{display:block;line-height:20px;float:left;font-size:14px;text-indent:10px}.gdtr_screenshot img{width:20px;float:left}.gdtr_screenshot_btn{width:170px;font-size:13px;padding-left:9px;padding-right:8px}.btn-social{margin-bottom:10px}.kadi_gdtr{height:15px;line-height:15px;text-align:left;font-size:13px}.kadi_exp_gdtr{text-align:left;font-size:12px;font-weight:100;height:15px;line-height:0}.progress.gdtr_level_bar{position:relative;height:7px;display:block;width:100%;background-color:#9c485c;border-radius:2px;margin:5px 0 14px;overflow:hidden}.gdtr_level_bar .determinate{background:#e25d7c}.gdtr_level_nedir{position:absolute;bottom:-15px;left:-19px;width:40px;height:40px;background-image:url(../../img/images/star.png);background-size:40px;background-repeat:no-repeat;-webkit-transform:rotate3d(0,0,0,0deg);transform:rotate3d(0,0,0,0deg);-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-delay:0s;animation-delay:0s;-webkit-animation-iteration-count:1;animation-iteration-count:1;cursor:default;color:#fff;text-align:center;line-height:45px;font-size:12pt;text-shadow:0 0 3px #000,-1px 0 0 #000,1px 0 0 #000,0 1px 0 #000,0 -1px 0 #000,-1px -1px 0 #000,1px 1px 0 #000,-1px 1px 0 #000,1px -1px 0 #000;font-family:Roboto,sans-serif}.gdtr_profil_resmi{position:relative;width:64px;height:64px}.loginBtn{box-sizing:border-box;position:relative;padding:0 11px 0 30px;border:0;text-align:left;line-height:25px;white-space:nowrap;border-radius:.2em;font-size:16px;color:#fff;font-size:13px;height:25px;display:block}.loginBtn:before{content:"";box-sizing:border-box;position:absolute;top:0;left:0;width:25px;height:100%}.loginBtn:focus{outline:0}.loginBtn:active{box-shadow:inset 0 0 0 32px rgba(0,0,0,.1)}.loginBtn--facebook{background-color:#4c69ba;background-image:linear-gradient(#4c69ba,#3b55a0);text-shadow:0 -1px 0 #354c8c;float:right;margin-right:10px}.loginBtn--facebook:before{border-right:#364e92 1px solid;background:url(../../img/images/icon_facebook.png) 6px 6px no-repeat;background-size:14px}.loginBtn--facebook:focus,.loginBtn--facebook:hover{background-color:#5b7bd5;background-image:linear-gradient(#5b7bd5,#4864b1)}#t{color:#fff!important;background:#333;text-align:left;border-radius:7px;font-weight:400!important;font-size:11px;font-family:Roboto;height:25px;width:122px;line-height:7px;text-indent:12px;float:right;margin-left:45%;margin-right:45%;position:absolute;top:10px}@media (max-width:767px){.hidden-xs{display:none!important}.izleyici_bg,.oyunabasla{padding:0 15px}}@media (max-width:992px){.hidden-xs-sol{display:none!important}}.tile{background-color:#e6e6fa}ul.setlist{margin:0;padding:0;min-height:60px;margin-top:6px;list-style:none!important}ul.setlist li{margin:0;padding:0;margin-right:1px;display:inline-block;text-align:center;margin-bottom:1px}ul.setlist li h3{font-size:11px;padding:0;margin:0;background:#1c86ee;display:inline-block;padding:2px 5px;box-shadow:0 1px 2px #87ceff;font-weight:400;border-radius:2px;color:teal;border:1px solid #87ceff}ul.setlist li h3:hover{background:#3e4150;border:1px solid #87ceff}.site_banner{margin-bottom:10px;background:url(http://agar.tv/banner.png?v=89745);height:90px}.form-control{display:block;width:100%;height:34px;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgb(0 0 0 / 8%);box-shadow:inset 0 1px 1px rgb(0 0 0 / 8%);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s}.form-control,.select2-search input[type=text]{height:42px;padding:8px 12px;font-family:Lato,Helvetica,Arial,sans-serif;font-size:15px;line-height:1.467;color:#34495e;border:2px solid #bdc3c7;border-radius:6px;box-shadow:none;-webkit-transition:border .25s linear,color .25s linear,background-color .25s linear;transition:border .25s linear,color .25s linear,background-color .25s linear}#new_theme_agario{display:flex;justify-content:center;width:100%;height:100vh;align-items:center;flex-direction:column}.new_theme_agario{display:flex;width:800px;height:auto}#new_theme_agario .nt_agario_center,#new_theme_agario .nt_agario_left,#new_theme_agario .nt_agario_right{display:flex;flex:1 1 auto;flex-direction:column}#new_theme_agario .nt_agario_center>div,#new_theme_agario .nt_agario_left>div,#new_theme_agario .nt_agario_right>div{background-color:#fff;border-radius:10px;padding:20px;margin-bottom:5px;position:relative;overflow:hidden}#new_theme_agario .nt_agario_center{width:40%}#new_theme_agario .nt_agario_left,#new_theme_agario .nt_agario_right{width:30%}#new_theme_agario .nt_agario_left{margin-right:5px}#new_theme_agario .nt_agario_right{margin-left:5px}#new_theme_agario .nt_agario_left div.nt_title,#new_theme_agario .nt_agario_right div.nt_title{display:flex;justify-content:space-between}#new_theme_agario .nt_agario_left h5,#new_theme_agario .nt_agario_right h5{margin:0 0 0 5px;border-bottom:1px solid #d3d3d3;padding-bottom:5px;width:60%;position:relative}#new_theme_agario .nt_agario_left h5:after,#new_theme_agario .nt_agario_right h5:after{content:"";border-bottom:1px solid #d3d3d3;padding-bottom:10px;width:60%;position:absolute;height:1px;bottom:-4px;left:0}#new_theme_agario .nt_agario_left .nt_title span,#new_theme_agario .nt_agario_right .nt_title span{display:none}#new_theme_agario .nt_agario_center #title-logo{display:flex;justify-content:center;margin:0}#new_theme_agario .nt_agario_center #title-logo p{display:flex;justify-content:center;margin:0}#new_theme_agario .nt_agario_center #user{display:flex;justify-content:space-around;align-items:center}#new_theme_agario .nt_agario_center #user .skin_img{position:relative;width:75px;height:75px}#new_theme_agario .nt_agario_center #user span{border:2px solid #55b300;background:#69dd00;color:#fff;width:20px;height:20px;position:absolute;text-align:center;line-height:18px;font-weight:700;border-radius:50%;font-size:24px;left:5px;top:-3px}#new_theme_agario .nt_agario_center #user small{position:absolute;top:0;bottom:0;width:100%;height:auto;text-align:center;display:flex;align-items:center;justify-content:center;font-size:16px}#new_theme_agario .nt_agario_center #user img{width:75px;height:75px;border:1px solid #000;border-radius:50%;box-shadow:-1px -1px 12px 0 #00000038}#new_theme_agario .nt_agario_center #user .u-input{display:flex;flex-direction:column}#new_theme_agario .nt_agario_center #user .u-input input,#new_theme_agario .nt_agario_center #user .u-input select{background-color:#f9f9f9;padding:5px 20px;border-radius:5px;border:1px solid #c3c1c1}#new_theme_agario .nt_agario_center #user .u-input label{color:#000;margin-bottom:5px}#new_theme_agario .nt_agario_center #playBtn{margin-top:15px;color:#fff;width:100%;height:34px;font-size:20px;line-height:1.5;background-color:#54c800;border-color:#54c800}#new_theme_agario .nt_agario_right #gamemodes{margin:0;padding:0;list-style:none;display:flex;flex-wrap:wrap}#new_theme_agario .nt_agario_right #gamemodes li{padding:5px 7px;cursor:pointer;width:50px;height:50px;margin:1px;display:flex;font-size:14px;align-items:center;justify-content:center;align-content:center;text-align:center;border-radius:5px;flex:1 1 auto;color:#fff}#new_theme_agario .nt_agario_right #gamemodes li.active{background:#faa439;text-align:center}#new_theme_agario .nt_agario_right #gamemodes li a{text-decoration:none;color:#000}#new_theme_agario .nt_agario_right #gamemodes li:hover{background:#faa439}#new_theme_agario .nt_c_height{min-height:150px}.footer{background-color:#fff;border-radius:10px;padding:20px;margin-top:10px;text-align:center}.footer ul{margin:5px 0 0 0;padding:0;list-style:none}.footer li{float:left;margin-right:5px;font-size:12px}.footer a{color:#54c702;text-decoration:none}button{display:inline-block;margin-bottom:0;font-size:15px;font-weight:700;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;border:1px solid transparent;border-radius:4px}button.btn-spectate{color:#fff;background-color:#e91e63;border-color:#e91e63;width:100%;height:34px;font-size:20px;line-height:1.5;border-radius:0}#settings>div{margin-top:10px}#gamemodes,#settings{margin-top:10px!important}.nt_rkm{display:flex;justify-content:center}body.dark{color:#fff}body.dark h3{color:#000}body.dark #new_theme_agario .nt_agario_center>div,body.dark #new_theme_agario .nt_agario_left>div,body.dark #new_theme_agario .nt_agario_right>div{background-color:#a7000a}body.dark #new_theme_agario .nt_agario_center #user img{width:75px;height:75px;border:1px solid #7b83af;border-radius:50%;box-shadow:-1px -1px 12px 0 #00000038}body.dark #new_theme_agario .nt_agario_center #user .u-input input,body.dark #new_theme_agario .nt_agario_center #user .u-input select{background-color:#474e74;border:1px solid #171922;color:#fff}body.dark .footer{background-color:#a7000a}#theme_body{position:absolute;top:0;width:30px;right:-12px}#ejectBtn,#splitBtn,#touchCircle,#touchpad{position:fixed}#ejectBtn,#splitBtn,#touchpad{z-index:2}#touchpad{background-color:#000;opacity:.4;width:20vw;height:20vh;left:0;bottom:0;background-image:url(../../assets/images/touch.svg);background-repeat:no-repeat;background-size:contain;background-position:center}#touchCircle{width:4vw;height:4vw;border-radius:2vw;background:red;opacity:.3;z-index:3}#ejectBtn,#splitBtn{width:8vw;height:8vw;border-radius:4vw;background:#777;opacity:.5}#splitBtn{left:11.5vw;bottom:22vh}#ejectBtn{left:.5vw;bottom:22vh}#select_theme{background:#bfbfbf;width:100%;text-align:center;padding-top:4px;margin-bottom:10px;padding-bottom:5px}body.dark #select_theme{background:#535770}#select_theme div.active span{display:block}.pa10{padding:10px}#select_theme div span{font-size:13px;text-transform:uppercase;display:none}#select_theme>div{color:#000;margin-top:5px;display:flex;justify-content:center}#select_theme>div div{flex:1 1 auto;height:20px;cursor:pointer;border-radius:5px;border:1px solid #ffffff80}#select_theme>div div:nth-child(1){background-color:#dbdbdb;margin-left:5px}.dark #select_theme>div div:nth-child(1){background-color:#fff}#select_theme>div div:nth-child(2){background-color:#ff1493;margin-left:5px}#select_theme>div div:nth-child(3){background-color:#006400;margin-left:5px}#select_theme>div div:nth-child(4){color:#fff;margin-left:5px;background-color:#00008b}#select_theme>div div:nth-child(5){margin-left:5px;margin-right:5px;color:#fff;background-color:#000}.nt_agario_center>div:nth-child(2){padding:0!important}.settings_content{display:flex;flex-direction:row;padding:0 10px;flex-wrap:wrap}.settings_content div.stt_c{padding:10px;display:flex;flex-direction:column;margin-right:10px;width:50px;height:50px;text-shadow:-1px -1px 0 #d84002,1px -1px 0 #d84002,-1px 1px 0 #d84002,1px 1px 0 #d84002;background-color:#f1590d;border:2px solid #d84002;margin-bottom:10px;flex:1 1 auto;border-radius:5px;text-align:center}.settings_content div.stt_c input{margin:auto}.settings_content div.stt_c strong{color:#fff;font-weight:400}#gamemodes li.color1{background-color:#04ddfd;border:2px solid #0fbbd5;text-shadow:-1px -1px 0 #0096ad,1px -1px 0 #0096ad,-1px 1px 0 #0096ad,1px 1px 0 #0096ad}#gamemodes li.color2{background-color:#226be4;border:2px solid #003da3;text-shadow:-1px -1px 0 #003da3,1px -1px 0 #003da3,-1px 1px 0 #003da3,1px 1px 0 #003da3;margin-right:0}#gamemodes li.color3{background-color:#9922e4;text-shadow:-1px -1px 0 #7300a3,1px -1px 0 #7300a3,-1px 1px 0 #7300a3,1px 1px 0 #7300a3;border:2px solid #7300a3}#gamemodes li.color4{background-color:#607d8b;text-shadow:-1px -1px 0 #37474f,1px -1px 0 #37474f,-1px 1px 0 #37474f,1px 1px 0 #37474f;border:2px solid #37474f}#gamemodes li.color5{background-color:#009688;text-shadow:-1px -1px 0 #00695c,1px -1px 0 #00695c,-1px 1px 0 #00695c,1px 1px 0 #00695c;border:2px solid #00695c}#gamemodes li.color6{background-color:#8bc34a;text-shadow:-1px -1px 0 #33691e,1px -1px 0 #33691e,-1px 1px 0 #33691e,1px 1px 0 #33691e;border:2px solid #33691e}#gamemodes li.color7{background-color:#795548;text-shadow:-1px -1px 0 #4e342e,1px -1px 0 #4e342e,-1px 1px 0 #4e342e,1px 1px 0 #4e342e;border:2px solid #4e342e}#gamemodes li.color8{background-color:#9e9e9e;text-shadow:-1px -1px 0 #4e342e,1px -1px 0 #4e342e,-1px 1px 0 #4e342e,1px 1px 0 #4e342e;border:2px solid #4e342e}.mobile-active{display:none}@media all and (max-width:767px){#skinModal{top:0;-webkit-transform:translate(-50%,0);-ms-transform:translate(-50%,0);transform:translate(-50%,0)}.nt_agario_right{display:none!important}.u-input select{display:block}#new_theme_agario .nt_agario_center #user .u-input input,#new_theme_agario .nt_agario_center #user .u-input select{padding:5px 20px}#overlays{overflow:scroll}#new_theme_agario{width:auto;margin:0 40px;height:1000px}#new_theme_agario .nt_agario_center #user .u-input{margin-left:15px}#new_theme_agario .nt_agario_center #user{justify-content:center}#new_theme_agario .nt_agario_center>div,#new_theme_agario .nt_agario_left>div,#new_theme_agario .nt_agario_right>div{padding:10px}#new_theme_agario .nt_agario_left,#new_theme_agario .nt_agario_right{margin:0}#new_theme_agario .nt_agario_center,#new_theme_agario .nt_agario_left,#new_theme_agario .nt_agario_right{width:100%}.new_theme_agario{width:100%;flex-direction:column}#gamemodes,#settings,.nt_rkm{display:none}.nt_rkm.active{display:block!important}#new_theme_agario .nt_c_height{min-height:auto}#new_theme_agario .nt_agario_left .nt_title span,#new_theme_agario .nt_agario_right .nt_title span{display:block}.mobile-active{display:block}}</style>
<meta name="google-adsense-account" content="ca-pub-1442411064092229">
<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
    <script>
        var knownNameDict   ="1;2;3;4;5;6;7;8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;166;167;168;169;170;171;172;173;174;175;176;177;178;179;180;181;182;183;184;185;186;187;188;189;190;191;192;193;194;195;196;197;198;199;200;201;202;203;204;205;206;207;208;209;210;211;212;213;214;215;216;217;218;219;220;221;222;223;224;225;226;227;228;229;230;231;232;233;234;235;236;237;238;239;240;241;242;243;244;245;246;247;248;249;250;251;252;253;254;255;256;257;258;259;260;261;262;263;264;265;266;267;268;269;270;271;272;273;274;275;276;277;278;279;280;281;282;283;284;285;286;287;288;289;290;291;292;293;294;295;296;297;298;299;300;301;302;303;304;305;306;307;308;309;310;311;312;313;314;315;316;317;318;319;320;321;322;323;324;325;326;327;328;329;330;331;332;333;334;335;336;337;338;339;340;341;342;343;344;345;346;347;348;349;350;351;352;353;354;355;356;357;358;359;360;361;362;363;364;365;366;367;368;369;370;371;372;373;374;375;376;377;378;379;380;381;382;383;384;385;386;387;388;389;390;391;392;393;394;395;396;397;398;399;400;401;402;403;404;405;406;407;408;409;410;411;412;413;414;415;416;417;418;419;420;421;422;423;424;425;426;427;428;429;430;431;432;433;434;435;436;437;438;439;440;441;442;443;444;445;446;447;448;449;450;451;452;453;454;455;456;457;458;459;460;461;462;463;464;465;466;467;468;469;470;471;472;473;474;475;476;477;478;479;480;481;482;483;484;485;486;487;488;489;490;491;492;493;494;495;496;497;498;499;500;501;502;503;504;505;506;507;508;509;510;511;512;513;514;515;516;517;518;519;520;521;522;523;524;525;526;527;528;529;530;531;532;533;534;535;536;537;538;539;540;541;542;543;544;545;546;547;548;549;550;551;552;553;554;555;556;557;558;559;560;561;562;563;564;565;566;567;568;569;570;571;572;573;574;575;576;577;578;579;580;581;582;583;584;585;586;587;588;589;590;591;592;593;594;595;596;597;598;599;600;601;602;603;604;605;606;607;608;609;610;611;612;613;614;615;616;617;618;619;620;621;622;623;624;625;626;627;628;629;630;631;632;633;634;635;636;637;638;639;640;641;642;643;644;645;646;647;648;649;650;651;652;653;654;655;656;657;658;659;660;661;662;663;664;665;666;667;668;669;670;671;672;673;674;675;676;677;678;679;680;681;682;683;684;685;686;687;688;689;700;701;702;703;704".split(";");

        var hash = "12321321";

        var site_adi="<?=$site_adi;?>";
        var __domain_adi = "<?=$site_adi;?>";
        var __ana_server = "<?=$ana_server;?>";
        var selectAgarioTheme = "<?=@$_COOKIE["gameDarkTheme"] ? $_COOKIE["gameDarkTheme"] : 'dark' ?>";

        setInterval(
            function(){
                if ( window.client!==undefined ){
                    window.client = undefined;
                    window.client2 = undefined;
                    window.agarServer = undefined;
                    window.bots = undefined;

                    delete window.client;
                    delete window.client2;
                    delete window.agarServer;
                    delete window.bots;
                }
            },
            1000);

var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
  googletag.cmd.push(function() {
    googletag.defineSlot('/21689150709/agariowow.github.io/Agario/-2', [300, 250], 'div-gpt-ad-1649899923350-0').addService(googletag.pubads());
	googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });

var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
  googletag.cmd.push(function() {
    googletag.defineSlot('/21689150709/agariowow.github.io/Agario/-4', [300, 250], 'div-gpt-ad-1649897722309-0').addService(googletag.pubads());
	googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
    </script>
</head>
<body <?php if($darkTheme){ echo "class='dark'";} ?>>
<div style="display: none;">
    <div class="form-group">
        <div class="locationKnown"></div>
    </div>
    <div id="locationUnknown">
        <select id="region" class="form-control" onchange="setRegion($('#region').val());" required>
            <option value="TK-Turkey">Global</option>
        </select>
    </div>
    <div>
        <div class="text-muted region-message CN-China"></div>
    </div>
</div>

<div class="modal" id="selector">
    <div class="tile" id="skinModal">
        <span onclick="$('#selector').fadeOut('fast');" id="skinClose" >x</span>
        <button class="btn btn-info navbar-btn btn-s" type="button" style="display:none;position:absolute;left:245px;top:9px;" id="clearSearch" onclick="clearSearch(); $('#searchText').val(''); $('#clearSearch').hide();">Clear Search</button>
        <form onsubmit="findInPage(document.getElementById('searchText').value); return false;">
            <input type="text" placeholder="Search" class="form-control" style="width: 220px;position: absolute;border:none;margin: 10px;height: 20px;" id="searchText" autocomplete="off">
        </form>
        <div class="skins" id="skins">
            <ul class="skinList">
                <li>
                    <img onclick="setSkin('None');" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                    <p>None</p>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="overlays">
    <div id="new_theme_agario">
        <div class="new_theme_agario">
            <div class="nt_agario_left">
                <div class="nt_c_height">
                    <div class="nt_title">
                        <h5>
                            Settings
                        </h5>
                        <span onclick="openSettings()">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
                    </span>
                    </div>
                    <div class="tile" id="settings">
                        <button onclick="spectate(); return false;" class="btn-spectate">Spectate</button>
                        <div class="settings_content">
                            <div class="stt_c">
                                <input <?= isset($_COOKIE["gameSkin"]) ? (!$_COOKIE["gameSkin"] ? "checked" : null)  : null ?> type="checkbox" onchange="setSkins(!$(this).is(':checked'));">
                                <strong>No skins</strong>
                            </div>
                            <div class="stt_c">
                                <input <?= isset($_COOKIE["gameName"]) ? (!$_COOKIE["gameName"] ? "checked" : null)  : null ?> type="checkbox" onchange="setNames(!$(this).is(':checked'));">
                                <strong>No names</strong>
                            </div>
                            <div class="stt_c">
                                <input <?= isset($_COOKIE["gameShowMass"]) ? ($_COOKIE["gameShowMass"] ? "checked" : null)  : null ?> type="checkbox" onchange="setShowMass($(this).is(':checked'));">
                                <strong>Show mass</strong>
                            </div>
                            <div class="stt_c">
                                <input <?= isset($_COOKIE["gameAcid"]) ? ($_COOKIE["gameAcid"] ? "checked" : null)  : null ?> type="checkbox" onchange="setAcid($(this).is(':checked'));">
                                <strong>Acid Mode</strong>
                            </div>
                            <div class="stt_c">
                                <input <?= isset($_COOKIE["gameSmooth"]) ? ($_COOKIE["gameSmooth"] ? "checked" : null)  : null ?> type="checkbox" onchange="setSmooth($(this).is(':checked'));">
                                <strong>Less Lag&nbsp</strong>
                            </div>
                            <div class="stt_c">
                                <input <?= isset($_COOKIE["gameZoom"]) ? ($_COOKIE["gameZoom"] ? "checked" : null)  : null ?> type="checkbox" onchange="setZoom($(this).is(':checked'));">
                                <strong>Zoom</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nt_rkm" style="flex-direction: column;">
                    <h5 class="app-btn-titlee">Agario Private Server information</h5>
                    <div id="scroll-area">
										<center><a target="_blank" href="https://www.facebook.com/groups/agarioboston/" rel="nofollow">
                        <img src="https://agariowow.github.io/Agario//grup.webp" width="120" height="100"/></a></center>
					Welcome to the world of <strong>Agario</strong>! If you are an avid gamer or someone who enjoys engaging online activities, you have likely heard about <strong>Agario</strong>. This multiplayer game has gained massive popularity since its launch, captivating players with its addictive and competitive gameplay. While many players enjoy the official Agario platform, there is a whole world of possibilities when it comes to playing on an <strong>Agario private server</strong>.
An <strong>Agario private server</strong> is an independent server that operates separately from the official <strong>Agario</strong> game. It offers a unique and customized gaming experience for players who prefer something beyond the traditional gameplay. Unlike the official game, private servers are often managed by communities or individuals who have modified the game to introduce new features, settings, and gameplay mechanics.
One of the most significant advantages of playing on an <strong>Agario private server</strong> is the customization and variety they offer. Private servers allow players to experience <strong>Agario</strong> in unique ways that are not available on the official platform. From custom game modes and different maps to exclusive skins and power-ups, private servers give you the freedom to tailor your gameplay experience to your liking.
Private servers often introduce new features and mechanics that enhance the overall gaming experience. These servers provide an opportunity for developers to experiment with different ideas and create innovative gameplay elements. Whether it's introducing new game modes, adding unique power-ups, or tweaking the gameplay mechanics, playing on an Agario private server can bring a fresh and exciting twist to the game.
Playing on an <strong>Agario private server</strong> often means immersing yourself in a tight-knit community of like-minded players. These communities can range from small groups of friends to larger communities with dedicated forums and social media channels. By joining a private server, you get the chance to connect with fellow players, make new friends, and engage in friendly competition.
Unlike the official <strong>Agario</strong> game, which requires an internet connection to play, some <strong>Agario private server</strong>s offer offline modes. This feature allows you to enjoy the game even when you don't have access to the internet, making it a great option for those who want to play anytime and anywhere.
Private servers often prioritize performance and stability, aiming to provide a smoother gaming experience compared to the official platform. Since private servers have a smaller player base, they can allocate more resources to ensure optimal performance. This means less lag, faster response times, and an overall better gameplay experience.
One common issue with the official <strong>Agario</strong> game is overcrowded servers, especially during peak hours. Playing on an <strong>Agario private server</strong> can help you avoid this problem by providing a more controlled and less chaotic environment. Private servers often have moderation measures in place to maintain a pleasant gaming experience, ensuring that players can enjoy the game without the frustration of overcrowded servers.
Private servers serve as excellent platforms for learning and improving your <strong>Agario</strong> skills. By playing on private servers with experienced players, you can observe different strategies, tricks, and techniques that can enhance your gameplay. The friendly and supportive communities often found on private servers are also willing to share tips and advice, helping you sharpen your skills and become a better player.
The official <strong>Agario</strong> game is supported by advertisements, which can sometimes be intrusive and disrupt the gaming experience. When playing on an <strong>Agario private server</strong>, you can enjoy the game without the interference of external advertisements. These servers typically rely on donations or other means to cover the hosting costs, ensuring a clutter-free and uninterrupted gameplay experience.
					</div>
                </div>
                <div class="nt_rkm mobile-active" style="text-align: center">
						<h1 style="display: none;"><a href="https://agariowow.github.io/Agario//" title="Agario Private Server">Agario Private Server</a></h1>
                    </a>
                </div>
            </div>
            <div class="nt_agario_center">
                <div>
                    <div id="title-logo" style="position:relative">
                        <img src="https://agariowow.github.io/Agario//logo.webp?2" alt="Agario private server" width="270px" height="66px">
                        <p style="display: none;"><a href="https://agariowow.github.io/Agario//" title="Agario">Agario</a></p>
                        <?php
                        if($darkTheme != ""){
                            if($darkTheme == "1"){
                                echo '<img onclick="setThemeBody()" data-theme="1" src="img/images/light_mode.svg" alt="light_mode" id="theme_body"/>';
                            }else{
                                echo '<img onclick="setThemeBody()" data-theme="0" src="img/images/dark_mode.svg" alt="dark_mode" id="theme_body" />';
                            }
                        }else{
                            echo '<img onclick="setThemeBody()" data-theme="0" src="img/images/dark_mode.svg" alt="dark_mode" id="theme_body" />';
                        }
                        ?>
                    </div>
                </div>
                <div>
                    <div id="select_theme">
                        <small>Game Theme</small>
                        <div>
                            <div class="select_white" data-theme="white"><span>Active</span></div>
                            <div class="select_pink" data-theme="pink"><span>Active</span></div>
                            <div class="select_green" data-theme="green"><span>Active</span></div>
                            <div class="select_blue" data-theme="blue"><span>Active</span></div>
                            <div class="select_dark" data-theme="dark"><span>Active</span></div>
                        </div>
                    </div>
                    <div class="pa10">
                        <div id="user">
                            <div class="u-profile">
                                <div class="skin_img" id="skinSelector">
                                    <span>+</span>
                                    <small>Skins</small>
                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="skin" />
                                </div>
                            </div>
                            <div class="u-input">
                                <select onfocus="this.size=3;" onblur="this.size=1;" onchange="this.size=1; this.blur();" class="gdtr_clan" style="display: block;padding: 2px 7px;font-size: 15px;margin-bottom: 5px">
                                    <option selected value>Clan Select</option>
                                    <?php
                                    foreach($clan as $row){
                                        if($userClan == $row){
                                            echo ' <option selected value="'.$row.'">'.$row.'</option>';
                                        }else{
                                            echo ' <option value="'.$row.'">'.$row.'</option>';
                                        }
                                    }
                                    ?>

                                </select>
                                <span style="display:none;" id="skin_no_gdtr"><?=$_COOKIE[ 'skinNo']?></span>
                                <input type="text" name="nick" id="nick" value="<?=$nick_agario?>" maxlength="30"/>
                                <select id="serversecx">
								     <option value="z2se.in:5216?key=<?php echo $keyCode3; ?>">🔵🇪🇺 ➢SERVER</option>
                                    <option value="server.z2se.in:3322?key=<?php echo $keyCode3; ?>">🔴🇺🇸 ➢SERVER</option>
                                    <option value="server.z2se.in:5858?key=<?php echo $keyCode3; ?>">🔴🇺🇸 ➢VIRUS MOD</option>
                                    <option value="z2se.in:5556?key=<?php echo $keyCode3; ?>">🔵🇪🇺 ➢VIRUS MOD</option>
									<option value="server.z2se.in:8216?key=<?php echo $keyCode3; ?>">🔴🇺🇸 ➢NA/2</option>
                                    <option value="server.z2se.in:2017?key=<?php echo $keyCode3; ?>">🔴🇺🇸 ➢CRAZY MOD</option>
                                    <option value="server.z2se.in:5216?key=<?php echo $keyCode3; ?>">🔴🇺🇸 ➢EASY MOD</option>
                                </select>
                            </div>
                        </div>
                        <button id="playBtn" onclick="rY();" class="oyunabasla playBtn_gdtr">Play</button>
												<div class="dx" style="border-top: 3px solid #fff;">                   <!-- /21689150709/agariowow.github.io/Agario/-2 -->
<div id='div-gpt-ad-1649899923350-0' style='min-width: 300px; min-height: 250px;'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1649899923350-0'); });
  </script>
</div></div>
                    </div>
                </div>
            </div>
            <div class="nt_agario_right">
                <div class="nt_c_height">
                    <div class="nt_title">
                        <h5>
                            Server List
                        </h5>
                        <span onclick="openServer()">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
                    </span>
                    </div>
                    <ul id="gamemodes" class="dropdown-menu">
                        <li class="color1" id="server.z2se.in:3322?key=<?php echo $keyCode3; ?>">FFA 1</li>
                        <li class="color3" id="server.z2se.in:5858?key=<?php echo $keyCode3; ?>">VIRUS 1</li>
                        <li class="color4" id="server.z2se.in:5556?key=<?php echo $keyCode3; ?>">VIRUS 2</li>
						<li class="color6" id="server.z2se.in:8216?key=<?php echo $keyCode3; ?>">NA/2</li>
                        <li class="color5" id="server.z2se.in:2017?key=<?php echo $keyCode3; ?>">CRAZY 1</li>
                        <li class="color6" id="server.z2se.in:5216?key=<?php echo $keyCode3; ?>">EASY 1</li>
                    </ul>
                </div>
                <div id="scroll-area" style="height:240px;">
				
                    <a target="_blank" class="" href="https://play.google.com/store/apps/details?id=com.agar.boston">
                        <img src="https://agariowow.github.io/Agario//google.webp" width="88" height="30"/>
                    </a>
                    <a target="_blank" class="" href="https://apps.apple.com/us/app/agario-boston/id1609023561">
                        <img src="https://agariowow.github.io/Agario//apple.webp" width="88" height="30"/>
                    </a>
					<center><a href="https://a99io.com/bigfish/" target="_blank"> <button style="background-color:#a0522d; color:#fffafa; width:150px;">Big Fish</button></a>
<a href="https://agario.boston/" target="_blank"> <button style="background-color:#FFCC99; color:#eeeee; width:150px;">Agario</button></a></center>
<a href="https://sites.google.com/view/classroom-workspaces/" title="Unblocked Games">Unblocked Games</a><!-- 28.04.2024 - 28.07.2024 Ertaş -->

															<p>By clicking the "Add To Your Browser" Button, you can add agariowow.github.io/Agario/ to your computer as a shortcut. </p>
						<button id="install-app" class="addbrowser"><img src="gicon.png" width="25" height="25" alt="chrome" class="cicon">Add To Your Browser</button>
                </div>
            </div>
        </div>
        <div class="footer" id="dmca">
            @2021  contact:info@agariowow.github.io/Agario/
            <ul>
                <li><a href="https://agariowow.github.io/Agario//" title="agario private server">agario private server</a></li>
                <li><a href="https://agariowow.github.io/Agario//play/privacy.html" target="_blank">privacy policy</a></li>
                <li><a href="https://agariowow.github.io/Agario//play/terms.html" target="_blank">Terms of Service</a></li>
                <li><a href="https://agario.boston" title="agario">agario</a></li>
                <li>This site is protected by reCAPTCHA and the Google</li>
                <li><a href="https://policies.google.com/privacy"  target="_blank" rel="nofollow"> Privacy Policy</a> and</li>
                <li><a href="https://policies.google.com/terms"  target="_blank" rel="nofollow"> Terms of Service</a> apply.</li>
				<p style="display:none;">
<a href="https://mt2.org" title="mt2">mt2</a>
<a href="https://www.zafer2.com" title="zafer2">zafer2</a>
</p>
            </ul>
        </div>
    </div>
</div>

<div id="chat_settings" class="hidden-xs">

    <div class="gdtr_chat_settings ">
        <div class="gdtr_chat_button">
            <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox1" onchange="setHideChat($(this).is(':checked'));"> Open Chat
            </label>
        </div>
        <div class="gdtr_chat_button" style="width: 135px;background:#2ecc71;">
            <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox2" onchange="setSkins(!$(this).is(':checked'));" onclick="setSmooth($(this).is(':checked'));"> Anti Lag & Skin
            </label>
        </div>
        <div class="gdtr_chat_button" style="width: 135px;background:#2ecc71;padding: 0px; display: none" id="return_home_btn">
            <button style="margin: 0px;font-size: 16px;font-weight: normal;height: 31px;" onclick="showLogin(); return false;" class="btn-spectate">Return home</button>
        </div>
    </div>

</div>
<input type="text" id="chat_textbox" class="hidden-xs" maxlength="200" placeholder="Chat Rooms" style="background: rgba(0, 0, 0, 0.2);position: absolute;left: 10px;z-index: 1;bottom: 12px;border: 0;outline: none;color: #fff;height: 30px;width: 290px;" />
<div id="statoverlay" style="display:none; position: absolute; left: 0; right: 0; top: 0; bottom: 0; background-color: rgba(0,0,0,0.5); z-index: 200;">
    <div id="stats" style="display:none;width:310px;" class="warball-panel">
        <div class="stats-box" style="height: 310px;position: relative;  margin-bottom: -12px;">
            <div style="border:none;">
                <h3 style="margin-top: 15px !important;text-align:center;">Match Results</h3>
            </div>
            <div id="statsPelletsContainer">
                <span id="statsText" class="stats-food-eaten gdtr_food_eaten">0</span>
                <span id="statsSubtext" data-itr="stats_food_eaten" >food eaten</span>
            </div>
            <div id="statsHighestMassContainer">
                <span id="statsText" class="stats-highest-mass gdtr_highest_mass">30</span>
                <span id="statsSubtext" data-itr="stats_highest_mass" >highest mass</span>
            </div>
            <div id="statsTimeAliveContainer">
                <span id="statsText" class="stats-time-alive gdtr_time_alive">0:01</span>
                <span id="statsSubtext" data-itr="stats_time_alive" >time alive</span>
            </div>
            <div id="statsTimeLeaderboardContainer">
                <span id="statsText" class="stats-leaderboard-time gdtr_top_leaderboard_position">0:00</span>
                <span id="statsSubtext" data-itr="stats_leaderboard_time">leaderboard time</span>
            </div>
            <div id="statsPlayerCellsEatenContainer">
                <span id="statsText" class="stats-cells-eaten">0</span>
                <span id="statsSubtext" data-itr="stats_cells_eaten">cells eaten</span>
            </div>
            <div id="statsTopPositionContainer">
                <span id="statsText" class="stats-top-position">:(</span>
                <span id="statsSubtext" data-itr="stats_top_position">top position</span>
            </div>

            <div style="padding: 10px;line-height: 1;position:absolute;bottom:5px;left:0;right:0;margin-left:auto;margin-right:auto;z-index:4;">
                <div class="stats-btn__row">
                    <button onclick="Share('tw')" class="stats-btn__share-btn">
                        <svg class="stats-btn__icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.537 511.537">
                            <path style="fill:#FFFFFF;" d="M357.038,49.172c-59.284,0.898-105.993,52.098-105.993,111.382v14.372 C145.052,156.063,92.954,127.319,35.466,67.137c-34.133,66.47,3.593,122.161,44.912,152.702c-27.846,0-51.2-3.593-69.165-19.761 c-1.796-0.898-3.593,0-2.695,1.797c15.27,55.691,67.368,96.112,107.789,107.789c-36.828,0-61.081,5.389-87.13-10.779 c-1.796-0.898-3.593,0-2.695,1.796c19.761,54.793,59.284,71.86,116.772,71.86c-28.744,21.558-67.368,43.116-140.126,44.912 c-2.695,0-4.491,3.593-1.796,5.389c26.947,22.456,93.418,39.523,186.835,39.523c153.6,0,278.456-136.533,278.456-305.404v-8.982 c24.253-8.982,37.726-30.54,44.912-52.098c0-0.898-0.898-1.796-1.797-1.796l-51.2,17.965c-0.898,0-1.796-1.796-0.898-2.695 C479.2,92.288,495.368,70.73,502.554,50.07c0,0-0.898-0.898-1.797-0.898c-24.253,9.881-47.607,19.761-65.572,25.151 c-2.695,0.898-6.288,0.898-8.982-0.898C414.526,67.137,379.494,49.172,357.038,49.172">
                            </path>
                        </svg>
                        <span class="stats-btn__text">
                          Share
                        </span>
                    </button>
                    <button onclick="Share('fb')" class="stats-btn__share-btn">
                        <svg class="stats-btn__icon-svg" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path style="fill:#FFFFFF;" d="m437 0h-362c-41.351562 0-75 33.648438-75 75v362c0 41.351562 33.648438 75 75 75h151v-181h-60v-90h60v-61c0-49.628906 40.371094-90 90-90h91v90h-91v61h91l-15 90h-76v181h121c41.351562 0 75-33.648438 75-75v-362c0-41.351562-33.648438-75-75-75zm0 0">
                            </path>
                        </svg>
                        <span class="stats-btn__text">
                           Share
                        </span>
                    </button>
                </div>
                <button style="width: 100%;background-color: #e91e63;color: white;height:34px"onclick="$('#statoverlay').hide(); $('#overlays').show();  $('#login-tile').fadeIn(); return false;" class="btn btn-primary btn-needs-server">Continue...</button>
            </div>
        </div>
        <div class="stats-box" style="height:260px;width: 100%;display: flex;justify-content: center;">
<div id='div-gpt-ad-1649897722309-0' style='min-width: 300px; min-height: 250px;'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1649897722309-0'); });
  </script>
</div>
        </div>
    </div>

</div>
<div id="connecting" style="display:none;position: absolute; left: 0; right: 0; top: 0; bottom: 0; z-index: 100; background-color: rgba(0,0,0,0.5);">

    <div style="width: 350px; background-color: #FFFFFF; margin: 100px auto; border-radius: 10px; padding: 5px 15px 5px 15px;">

        <h2 style="font-size:22px"><span data-itr="connecting"></span></h2>

        <div data-itr="connect_help">
            <p>
        </div>
        <br />

        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">
            </div>
        </div>
    </div>
</div>

<div id="mobileStuff" style="display:none">
    <img src="img/images/feed.png" alt="agario split" id="splitBtn">
    <img src="img/images/split.png" alt="agario eject" id="ejectBtn">
</div>
<canvas id="canvas" width="1440" height="770"></canvas>

<style>
.cicon{margin-bottom:-3px;margin-right:6px;}
.addbrowser{width:100%;outline:none;border:none;padding:8px;background-color:blue;color:white;margin-bottom:15px;}
.uorta{text-align:center}
</style>
<script>
    const installButton = document.getElementById('install-app');
    let beforeInstallPromptEvent
    window.addEventListener("beforeinstallprompt", function(e) {
        e.preventDefault();
        beforeInstallPromptEvent = e
        installButton.style.display = 'block'
        installButton.addEventListener("click", function() {
            e.prompt();
        });
        installButton.hidden = false;
    });
    installButton.addEventListener("click", function() {
        beforeInstallPromptEvent.prompt();
    });
</script>
<script type="text/javascript" src="lib/js/jquery-2.1.1.min.js?1561921511"></script>
<script type="text/javascript" async src="https://agar.cc/lib/js/data.js?v=<?=time();?>"></script>
<script type="text/javascript" async src="lib/js/v2_main.js?<?=time();?>"></script>
<script>
        window.addEventListener('load', function(){

            // obtain plugin
            var cc = initCookieConsent();

            // run plugin with your configuration
            cc.run({
                current_lang: 'en',
                autoclear_cookies: true,                   // default: false
                page_scripts: true,                        // default: false

                // mode: 'opt-in'                          // default: 'opt-in'; value: 'opt-in' or 'opt-out'
                // delay: 0,                               // default: 0
                // auto_language: '',                      // default: null; could also be 'browser' or 'document'
                // autorun: true,                          // default: true
                // force_consent: false,                   // default: false
                // hide_from_bots: false,                  // default: false
                // remove_cookie_tables: false             // default: false
                // cookie_name: 'cc_cookie',               // default: 'cc_cookie'
                // cookie_expiration: 182,                 // default: 182 (days)
                // cookie_necessary_only_expiration: 182   // default: disabled
                // cookie_domain: location.hostname,       // default: current domain
                // cookie_path: '/',                       // default: root
                // cookie_same_site: 'Lax',                // default: 'Lax'
                // use_rfc_cookie: false,                  // default: false
                // revision: 0,                            // default: 0

                onFirstAction: function(user_preferences, cookie){
                    // callback triggered only once on the first accept/reject action
                },

                onAccept: function (cookie) {
                    // callback triggered on the first accept/reject action, and after each page load
                },

                onChange: function (cookie, changed_categories) {
                    // callback triggered when user changes preferences after consent has already been given
                },

                languages: {
                    'en': {
                        consent_modal: {
                            title: 'We use cookies!',
                            description: 'Hi, this website uses essential cookies to ensure its proper operation and tracking cookies to understand how you interact with it. The latter will be set only after consent. <button type="button" data-cc="c-settings" class="cc-link">Let me choose</button>',
                            primary_btn: {
                                text: 'Accept all',
                                role: 'accept_all'              // 'accept_selected' or 'accept_all'
                            },
                            secondary_btn: {
                                text: 'Reject all',
                                role: 'accept_necessary'        // 'settings' or 'accept_necessary'
                            }
                        },
                        settings_modal: {
                            title: 'Cookie preferences',
                            save_settings_btn: 'Save settings',
                            accept_all_btn: 'Accept all',
                            reject_all_btn: 'Reject all',
                            close_btn_label: 'Close',
                            cookie_table_headers: [
                                {col1: 'Name'},
                                {col2: 'Domain'},
                                {col3: 'Expiration'},
                                {col4: 'Description'}
                            ],
                            blocks: [
                                {
                                    title: 'Cookie usage 📢',
                                    description: 'I use cookies to ensure the basic functionalities of the website and to enhance your online experience. You can choose for each category to opt-in/out whenever you want. For more details relative to cookies and other sensitive data, please read the full <a href="./privacy-policy.html" class="cc-link">privacy policy</a>.'
                                }, {
                                    title: 'Strictly necessary cookies',
                                    description: 'These cookies are essential for the proper functioning of my website. Without these cookies, the website would not work properly',
                                    toggle: {
                                        value: 'necessary',
                                        enabled: true,
                                        readonly: true          // cookie categories with readonly=true are all treated as "necessary cookies"
                                    }
                                }, {
                                    title: 'Performance and Analytics cookies',
                                    description: 'These cookies allow the website to remember the choices you have made in the past',
                                    toggle: {
                                        value: 'analytics',     // your cookie category
                                        enabled: false,
                                        readonly: false
                                    },
                                    cookie_table: [             // list of all expected cookies
                                        {
                                            col1: '^_ga',       // match all cookies starting with "_ga"
                                            col2: 'google.com',
                                            col3: '2 years',
                                            col4: 'description ...',
                                            is_regex: true
                                        },
                                        {
                                            col1: '_gid',
                                            col2: 'google.com',
                                            col3: '1 day',
                                            col4: 'description ...',
                                        }
                                    ]
                                }, {
                                    title: 'Advertisement and Targeting cookies',
                                    description: 'These cookies collect information about how you use the website, which pages you visited and which links you clicked on. All of the data is anonymized and cannot be used to identify you',
                                    toggle: {
                                        value: 'targeting',
                                        enabled: false,
                                        readonly: false
                                    }
                                }, {
                                    title: 'More information',
                                    description: 'For any queries in relation to our policy on cookies and your choices, please <a class="cc-link" href="./contact.html">contact us</a>.',
                                }
                            ]
                        }
                    }
                }
            });
        });
    </script>
	          <script defer src="https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@v2.8.8/dist/cookieconsent.js"></script>

</body>
</html>
