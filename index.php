<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!-- saved from url=(0038)http://forum.minecraft-galaxy.ru/main/ -->
<html style="overflow: auto;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="x-rim-auto-match" content="none">
	
	<meta http-equiv="keywords" content="minecraft, многопользовательская, игра, game, beta, server, сервер, mmorpg, dmh"> 
	<meta http-equiv="description" content="Сервер игры Minecraft Alpha">
		
	<title>Minecraft Galaxy</title>

	<link rel="stylesheet" href="./index_files/style.css" type="text/css">
	<link rel="stylesheet" href="./index_files/red.css" type="text/css">	<link rel="stylesheet" href="./index_files/adaptive.css" type="text/css">
	
	<meta property="og:image" content="http://minecraft-galaxy.ru/img/logo_large.png"> 
	<script type="text/javascript" async="" src="./index_files/ga.js.Без названия"></script><script type="text/javascript" src="./index_files/jquery.min.js.Без названия"></script> 
	<script type="text/javascript" src="./index_files/jquery-ui.min.js.Без названия"></script> 
	
	<script type="text/javascript" src="./index_files/jquery.autocomplete.js.Без названия"></script>
	
	<script type="text/javascript" src="./index_files/script.js.Без названия"></script>
	<script type="text/javascript" src="./index_files/format.js.Без названия"></script>
	<script src="./index_files/script.js(1).Без названия"></script>
	
	<script type="text/javascript" src="./index_files/ThreeCanvas.js.Без названия"></script>
	<script type="text/javascript" src="./index_files/Cube.js.Без названия"></script>
	<script type="text/javascript" src="./index_files/BinFileReader.js.Без названия"></script><script type="text/vbscript">
Function BinFileReaderImpl_IE_VBAjaxLoader(fileName)
	Dim xhr
	Set xhr = CreateObject("Microsoft.XMLHTTP")

	xhr.Open "GET", fileName, False

	xhr.setRequestHeader "Accept-Charset", "x-user-defined"
	xhr.send

	Dim byteArray()

	if xhr.Status = 200 Then
		Dim byteString
		Dim i

		byteString=xhr.responseBody

		ReDim byteArray(LenB(byteString))

		For i = 1 To LenB(byteString)
			byteArray(i-1) = AscB(MidB(byteString, i, 1))
		Next
	End If

	BinFileReaderImpl_IE_VBAjaxLoader=byteArray
End Function
</script>
	
	<style>
			</style>
	
<script src="./index_files/saved_resource"></script><script src="./index_files/saved_resource"></script><script src="./index_files/saved_resource"></script><style type="text/css">/*
 * contextMenu.js v 1.4.0
 * Author: Sudhanshu Yadav
 * s-yadav.github.com
 * Copyright (c) 2013 Sudhanshu Yadav.
 * Dual licensed under the MIT and GPL licenses
**/

.iw-contextMenu {
    box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.10);
    border: 1px solid #c8c7cc;
    border-radius: 11px;
    display: none;
    z-index: 1000000132;
    max-width: 300px;
}

.iw-cm-menu {
    background: #fff;
    color: #000;
    margin: 0px;
    padding: 0px;
}

.iw-curMenu {
}

.iw-cm-menu li {
    font-family: -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, Arial, Ubuntu, sans-serif;
    list-style: none;
    padding: 10px;
    padding-right: 20px;
    border-bottom: 1px solid #c8c7cc;
    cursor: pointer;
    position: relative;
    font-size: 14px;
    margin: 0;
    line-height: inherit;
}

.iw-cm-menu li:first-child {
    border-top-left-radius: 11px;
    border-top-right-radius: 11px;
}

.iw-cm-menu li:last-child {
    border-bottom-left-radius: 11px;
    border-bottom-right-radius: 11px;
    border-bottom: none;
}

.iw-mOverlay {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0px;
    left: 0px;
    background: #FFF;
    opacity: .5;
}

.iw-contextMenu li.iw-mDisable {
    opacity: 0.3;
    cursor: default;
}

.iw-mSelected {
    background-color: #F6F6F6;
}

.iw-cm-arrow-right {
    width: 0;
    height: 0;
    border-top: 5px solid transparent;
    border-bottom: 5px solid transparent;
    border-left: 5px solid #000;
    position: absolute;
    right: 5px;
    top: 50%;
    margin-top: -5px;
}

.iw-mSelected > .iw-cm-arrow-right {
}

/*context menu css end */</style><style type="text/css">@-webkit-keyframes load4 {
    0%,
    100% {
        box-shadow: 0 -3em 0 0.2em, 2em -2em 0 0em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 0;
    }
    12.5% {
        box-shadow: 0 -3em 0 0, 2em -2em 0 0.2em, 3em 0 0 0, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
    }
    25% {
        box-shadow: 0 -3em 0 -0.5em, 2em -2em 0 0, 3em 0 0 0.2em, 2em 2em 0 0, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
    }
    37.5% {
        box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 0, 2em 2em 0 0.2em, 0 3em 0 0em, -2em 2em 0 -1em, -3em 0em 0 -1em, -2em -2em 0 -1em;
    }
    50% {
        box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 0em, 0 3em 0 0.2em, -2em 2em 0 0, -3em 0em 0 -1em, -2em -2em 0 -1em;
    }
    62.5% {
        box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 0, -2em 2em 0 0.2em, -3em 0 0 0, -2em -2em 0 -1em;
    }
    75% {
        box-shadow: 0em -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0.2em, -2em -2em 0 0;
    }
    87.5% {
        box-shadow: 0em -3em 0 0, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0, -2em -2em 0 0.2em;
    }
}

@keyframes load4 {
    0%,
    100% {
        box-shadow: 0 -3em 0 0.2em, 2em -2em 0 0em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 0;
    }
    12.5% {
        box-shadow: 0 -3em 0 0, 2em -2em 0 0.2em, 3em 0 0 0, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
    }
    25% {
        box-shadow: 0 -3em 0 -0.5em, 2em -2em 0 0, 3em 0 0 0.2em, 2em 2em 0 0, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
    }
    37.5% {
        box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 0, 2em 2em 0 0.2em, 0 3em 0 0em, -2em 2em 0 -1em, -3em 0em 0 -1em, -2em -2em 0 -1em;
    }
    50% {
        box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 0em, 0 3em 0 0.2em, -2em 2em 0 0, -3em 0em 0 -1em, -2em -2em 0 -1em;
    }
    62.5% {
        box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 0, -2em 2em 0 0.2em, -3em 0 0 0, -2em -2em 0 -1em;
    }
    75% {
        box-shadow: 0em -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0.2em, -2em -2em 0 0;
    }
    87.5% {
        box-shadow: 0em -3em 0 0, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0, -2em -2em 0 0.2em;
    }
}</style><style type="text/css">/* This is not a zero-length file! */</style></head>

<body onresize="change_sizes();" onload="change_sizes();">
<div class="main-div">
	<div class="header">
		<div class="mobile-menu"></div>
		<div class="main-logo"></div>
		<div class="title"><a href="http://minecraft-galaxy.ru/">Minecraft Galaxy</a></div>
		<div class="title-mobile"><a href="http://forum.minecraft-galaxy.ru/">MCGL</a></div>
<div class="mobile-showen-menu-back" style="display: none;"><div class="mobile-showen-menu" style="display: none;"><ul class="mobilemenu"><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/">Форумы</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/forum/0">Темы ↓</a>								<ul class="dropdown-mobile">
										<li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/forum/0">Последние</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/forum/-1">Избранные</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/private/0">Личные</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/forum/-210">Все свои</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/teamforums/">Форумы сообществ</a></li>								</ul>
							</li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/blog/">Новости</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/users/">Игроки ↓</a>								<ul class="dropdown-mobile">
										<li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/users/">Список</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/clans/">Кланы</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/teams/">Сообщества</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/topgalaxy/">Galaxy Forbes</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/bans/">Баны</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/mutes/0">Молчуны</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/achieves/"><img src="./index_files/best.png"> Достижения</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/top/0">Топ 25</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/screens/0">Скриншоты</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/auctionuser/0">Аукцион</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/fortress/">Крепости</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/battles/">Дракон</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/eventcalendar/">События</a></li>								</ul>
							</li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/goldshop/"><span class="vip">Donate</span></a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/wiki/">Помощь ↓</a>								<ul class="dropdown-mobile">
										<li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/wiki/530">Наши правила</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/wiki/">Wiki</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/wiki/FAQ">FAQ</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/professions/">Профессии</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/doc/9120">План разработок</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/topic/41">Установка клиента</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/items/">Блоки и предметы</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/wiki/O_%D1%81%D0%B5%D1%80%D0%B2%D0%B5%D1%80%D0%B0%D1%85">О серверах</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/topic/952">О гриферах</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/exchange/0"><img src="./index_files/arrow_up.png"> Биржа <img src="./index_files/arrow_down.png"></a></li>								</ul>
							</li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/main/#"><img src="./index_files/map.png" width="10"> Карты ↓</a>								<ul class="dropdown-mobile">
										<li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/capitals/"><span class="vip">Столицы</span></a></li><li><a class="item mobile-menu-item" href="http://map.minecraft-galaxy.ru/#0/0/1/0/">Main</a></li><li><a class="item mobile-menu-item" href="http://map.minecraft-galaxy.ru/#0/0/2/0/">Guest</a></li><li><a class="item mobile-menu-item" href="http://map.minecraft-galaxy.ru/#0/0/3/0/">DemoPlanet</a></li><li><a class="item mobile-menu-item" href="http://map.minecraft-galaxy.ru/#0/0/5/0/">Hunter</a></li><li><a class="item mobile-menu-item" href="http://map.minecraft-galaxy.ru/#0/0/6/0/">LittleBigPlanet</a></li><li><a class="item mobile-menu-item" href="http://map.minecraft-galaxy.ru/#0/0/7/0/">MinerPlanet</a></li><li><a class="item mobile-menu-item" href="http://map.minecraft-galaxy.ru/#0/0/8/0/">Clans</a></li><li><a class="item mobile-menu-item" href="http://map.minecraft-galaxy.ru/#0/0/10/0/">MonkeyPlanet</a></li><li><a class="item mobile-menu-item" href="http://map.minecraft-galaxy.ru/#0/0/11/0/">Pirate station</a></li><li><a class="item mobile-menu-item" href="http://map.minecraft-galaxy.ru/#0/0/12/0/">Nano</a></li><li><a class="item mobile-menu-item" href="http://map.minecraft-galaxy.ru/#0/0/13/0/">Rookie</a></li><li><a class="item mobile-menu-item" href="http://map.minecraft-galaxy.ru/#0/0/14/0/">Newbie</a></li><li><a class="item mobile-menu-item" href="http://map.minecraft-galaxy.ru/#0/0/15/0/">Build</a></li><li><a class="item mobile-menu-item" href="http://map.minecraft-galaxy.ru/#0/0/16/0/">Pacific</a></li><li><a class="item mobile-menu-item" href="http://map.minecraft-galaxy.ru/#0/0/19/0/">Novice</a></li><li><a class="item mobile-menu-item" href="http://map.minecraft-galaxy.ru/#0/0/20/0/">Team</a></li><li><a class="item mobile-menu-item" href="http://map.minecraft-galaxy.ru/#0/0/22/0/">Farm</a></li><li><a class="item mobile-menu-item" href="http://map.minecraft-galaxy.ru/#0/0/23/0/">Creator</a></li><li><a class="item mobile-menu-item" href="http://map.minecraft-galaxy.ru/#0/0/25/0/">Prometeus</a></li><li><a class="item mobile-menu-item" href="http://map.minecraft-galaxy.ru/#0/0/26/0/">Laboratory</a></li><li><a class="item mobile-menu-item" href="http://map.minecraft-galaxy.ru/#0/0/28/0/">Zeus</a></li><li><a class="item mobile-menu-item" href="http://map.minecraft-galaxy.ru/#0/0/29/0/">Dragon nest</a></li><li><a class="item mobile-menu-item" href="http://map.minecraft-galaxy.ru/#0/0/30/0/">Atlantida</a></li>								</ul>
							</li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/search/">Поиск</a></li><li><a class="item mobile-menu-item" href="http://forum.minecraft-galaxy.ru/registration/">Регистрация</a></li></ul></div></div>			<div style="margin-top: 7px;">
			<div class="login-panel">
									<div class="profile-panel">
						<div class="button-container">
							<a href="http://forum.minecraft-galaxy.ru/guilogin/" class="button">Войти</a>
						</div>
					</div>
								</div>
							</div>
			</div>
			<ul class="tabs mainmenu"><li><a class="item" href="http://forum.minecraft-galaxy.ru/">Форумы</a></li><li><a class="item" href="http://forum.minecraft-galaxy.ru/forum/0">Темы ↓</a>						<ul class="dropdown">
								<li><a href="http://forum.minecraft-galaxy.ru/forum/0">Последние</a></li><li><a href="http://forum.minecraft-galaxy.ru/forum/-1">Избранные</a></li><li><a href="http://forum.minecraft-galaxy.ru/private/0">Личные</a></li><li><a href="http://forum.minecraft-galaxy.ru/forum/-210">Все свои</a></li><li><a href="http://forum.minecraft-galaxy.ru/teamforums/">Форумы сообществ</a></li>						</ul>
					</li><li><a class="item" href="http://forum.minecraft-galaxy.ru/blog/">Новости</a></li><li><a class="item" href="http://forum.minecraft-galaxy.ru/users/">Игроки ↓</a>						<ul class="dropdown large">
								<div class="first-row"><li class="first"><a href="http://forum.minecraft-galaxy.ru/users/">Список</a></li><li class="first"><a href="http://forum.minecraft-galaxy.ru/clans/">Кланы</a></li><li class="first"><a href="http://forum.minecraft-galaxy.ru/teams/">Сообщества</a></li><li class="first"><a href="http://forum.minecraft-galaxy.ru/topgalaxy/">Galaxy Forbes</a></li><li class="first"><a href="http://forum.minecraft-galaxy.ru/bans/">Баны</a></li><li class="first"><a href="http://forum.minecraft-galaxy.ru/mutes/0">Молчуны</a></li><li class="first"><a href="http://forum.minecraft-galaxy.ru/achieves/"><img src="./index_files/best.png"> Достижения</a></li></div><div class="second-row"><li class="second"><a href="http://forum.minecraft-galaxy.ru/top/0">Топ 25</a></li><li class="second"><a href="http://forum.minecraft-galaxy.ru/screens/0">Скриншоты</a></li><li class="second"><a href="http://forum.minecraft-galaxy.ru/auctionuser/0">Аукцион</a></li><li class="second"><a href="http://forum.minecraft-galaxy.ru/fortress/">Крепости</a></li><li class="second"><a href="http://forum.minecraft-galaxy.ru/battles/">Дракон</a></li><li class="second"><a href="http://forum.minecraft-galaxy.ru/eventcalendar/">События</a></li></div>						</ul>
					</li><li><a class="item" href="http://forum.minecraft-galaxy.ru/goldshop/"><span class="vip">Donate</span></a></li><li><a class="item" href="http://forum.minecraft-galaxy.ru/wiki/">Помощь ↓</a>						<ul class="dropdown">
								<li><a href="http://forum.minecraft-galaxy.ru/wiki/530">Наши правила</a></li><li><a href="http://forum.minecraft-galaxy.ru/wiki/">Wiki</a></li><li><a href="http://forum.minecraft-galaxy.ru/wiki/FAQ">FAQ</a></li><li><a href="http://forum.minecraft-galaxy.ru/professions/">Профессии</a></li><li><a href="http://forum.minecraft-galaxy.ru/doc/9120">План разработок</a></li><li><a href="http://forum.minecraft-galaxy.ru/topic/41">Установка клиента</a></li><li><a href="http://forum.minecraft-galaxy.ru/items/">Блоки и предметы</a></li><li><a href="http://forum.minecraft-galaxy.ru/wiki/O_%D1%81%D0%B5%D1%80%D0%B2%D0%B5%D1%80%D0%B0%D1%85">О серверах</a></li><li><a href="http://forum.minecraft-galaxy.ru/topic/952">О гриферах</a></li><li><a href="http://forum.minecraft-galaxy.ru/exchange/0"><img src="./index_files/arrow_up.png"> Биржа <img src="./index_files/arrow_down.png"></a></li>						</ul>
					</li><li><a class="item" href="http://forum.minecraft-galaxy.ru/main/#"><img src="./index_files/map.png" width="10"> Карты ↓</a>						<ul class="dropdown large">
								<div class="first-row"><li class="first"><a href="http://forum.minecraft-galaxy.ru/capitals/"><span class="vip">Столицы</span></a></li><li class="first"><a href="http://map.minecraft-galaxy.ru/#0/0/1/0/">Main</a></li><li class="first"><a href="http://map.minecraft-galaxy.ru/#0/0/2/0/">Guest</a></li><li class="first"><a href="http://map.minecraft-galaxy.ru/#0/0/3/0/">DemoPlanet</a></li><li class="first"><a href="http://map.minecraft-galaxy.ru/#0/0/5/0/">Hunter</a></li><li class="first"><a href="http://map.minecraft-galaxy.ru/#0/0/6/0/">LittleBigPlanet</a></li><li class="first"><a href="http://map.minecraft-galaxy.ru/#0/0/7/0/">MinerPlanet</a></li><li class="first"><a href="http://map.minecraft-galaxy.ru/#0/0/8/0/">Clans</a></li><li class="first"><a href="http://map.minecraft-galaxy.ru/#0/0/10/0/">MonkeyPlanet</a></li><li class="first"><a href="http://map.minecraft-galaxy.ru/#0/0/11/0/">Pirate station</a></li><li class="first"><a href="http://map.minecraft-galaxy.ru/#0/0/12/0/">Nano</a></li><li class="first"><a href="http://map.minecraft-galaxy.ru/#0/0/13/0/">Rookie</a></li></div><div class="second-row"><li class="second"><a href="http://map.minecraft-galaxy.ru/#0/0/14/0/">Newbie</a></li><li class="second"><a href="http://map.minecraft-galaxy.ru/#0/0/15/0/">Build</a></li><li class="second"><a href="http://map.minecraft-galaxy.ru/#0/0/16/0/">Pacific</a></li><li class="second"><a href="http://map.minecraft-galaxy.ru/#0/0/19/0/">Novice</a></li><li class="second"><a href="http://map.minecraft-galaxy.ru/#0/0/20/0/">Team</a></li><li class="second"><a href="http://map.minecraft-galaxy.ru/#0/0/22/0/">Farm</a></li><li class="second"><a href="http://map.minecraft-galaxy.ru/#0/0/23/0/">Creator</a></li><li class="second"><a href="http://map.minecraft-galaxy.ru/#0/0/25/0/">Prometeus</a></li><li class="second"><a href="http://map.minecraft-galaxy.ru/#0/0/26/0/">Laboratory</a></li><li class="second"><a href="http://map.minecraft-galaxy.ru/#0/0/28/0/">Zeus</a></li><li class="second"><a href="http://map.minecraft-galaxy.ru/#0/0/29/0/">Dragon nest</a></li><li class="second"><a href="http://map.minecraft-galaxy.ru/#0/0/30/0/">Atlantida</a></li></div>						</ul>
					</li><li><a class="item" href="http://forum.minecraft-galaxy.ru/search/">Поиск</a></li><li><a class="item" href="http://forum.minecraft-galaxy.ru/registration/">Регистрация</a></li></ul><div class="content"><table class="topics forum-table"><tbody><tr><td class="icon"></td><td class="name">Администрация</td><td class="author">Тем</td><td class="counter">Ответов</td><td class="datetime">Последнее</td></tr><tr><td class="author-row"><img src="./index_files/2.ico"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/forum/2" title="" target="">Новости</a></span><div><span class="small">Последние события сервера</span></div></td><td class="author-row">190</td><td class="author-row">10979</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/598183" class="user-link vip" onmouseover="showtip(1, 598183, event)" onmouseout="hidetip()">Hener_Gerelebent</a><div><span class="date">2018-02-15 10:37:47</span></div></td></tr><tr><td class="author-row"><img src="./index_files/1.ico"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/forum/1" title="" target="">Поддержка</a></span><div><span class="small">Техническая информация и помощь игрокам</span></div></td><td class="author-row">16816</td><td class="author-row">131313</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/596998" class="user-link premium" onmouseover="showtip(1, 596998, event)" onmouseout="hidetip()">dominoes</a><div><span class="date">2018-04-07 07:50:36</span></div></td></tr><tr><td class="author-row"><img src="./index_files/5.ico"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/forum/5" title="" target="">Баны</a></span><div><span class="small">Информация о банах</span></div></td><td class="author-row">6904</td><td class="author-row">82444</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/590635" class="user-link vip" onmouseover="showtip(1, 590635, event)" onmouseout="hidetip()">FastKill</a><div><span class="date">2018-03-30 23:56:26</span></div></td></tr></tbody></table></div><div class="content"><table class="topics forum-table"><tbody><tr><td class="icon"></td><td class="name">Техничеcкие форумы</td><td class="author">Тем</td><td class="counter">Ответов</td><td class="datetime">Последнее</td></tr><tr><td class="author-row"><img src="./index_files/10.ico"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/forum/10" title="" target="">Разработка</a></span><div><span class="small">Раздел для разработчиков</span></div></td><td class="author-row">255</td><td class="author-row">11006</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/156384" class="user-link vip" onmouseover="showtip(1, 156384, event)" onmouseout="hidetip()">LoneRay</a><div><span class="date">2018-04-01 15:15:15</span></div></td></tr><tr><td class="author-row"><img src="./index_files/8.ico"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/forum/8" title="" target="">Документация по MCGL</a></span><div><span class="small">Описание особенностей Minecraft Galaxy</span></div></td><td class="author-row">409</td><td class="author-row">11196</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/53942" class="user-link premium" onmouseover="showtip(1, 53942, event)" onmouseout="hidetip()">Ursidae</a><div><span class="date">2018-03-31 17:44:41</span></div></td></tr><tr><td class="author-row"><img src="./index_files/6.ico"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/forum/6" title="" target="">Предложения</a></span><div><span class="small">Пожелания о внесении новых возможностей в игру</span></div></td><td class="author-row">13865</td><td class="author-row">310114</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/289656" class="user-link girls" onmouseover="showtip(1, 289656, event)" onmouseout="hidetip()">BooCH</a><div><span class="date">2018-04-08 01:36:03</span></div></td></tr></tbody></table></div><div class="content"><table class="topics forum-table"><tbody><tr><td class="icon"></td><td class="name">Игровой процесс</td><td class="author">Тем</td><td class="counter">Ответов</td><td class="datetime">Последнее</td></tr><tr><td class="author-row"><img src="./index_files/3.ico"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/forum/3" title="" target="">Вопросы по игре</a></span><div><span class="small">Вопросы и ответы, связанные с Minecraft</span></div></td><td class="author-row">29491</td><td class="author-row">262791</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/408803" class="user-link platinum" onmouseover="showtip(1, 408803, event)" onmouseout="hidetip()">_DarkMooN_</a><div><span class="date">2018-04-08 15:16:04</span></div></td></tr><tr><td class="author-row"><img src="./index_files/4.ico"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/forum/4" title="" target="">Общение</a></span><div><span class="small">Свободное общение на любые темы</span></div></td><td class="author-row">36512</td><td class="author-row">833604</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/132499" class="user-link vip" onmouseover="showtip(1, 132499, event)" onmouseout="hidetip()">tauras</a><div><span class="date">2018-04-08 15:40:14</span></div></td></tr><tr><td class="author-row"><img src="./index_files/11.ico"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/forum/11" title="" target="">Поздравления</a></span><div><span class="small">Поздравления игроков с теми или иными событиями</span></div></td><td class="author-row">1164</td><td class="author-row">47612</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/533746" class="user-link premium" onmouseover="showtip(1, 533746, event)" onmouseout="hidetip()">MrGigant</a><div><span class="date">2018-04-08 16:02:27</span></div></td></tr><tr><td class="author-row"><img src="./index_files/7.ico"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/forum/7" title="" target="">Помойка</a></span><div><span class="small">Темы с идиотским названием или содержанием</span></div></td><td class="author-row">12</td><td class="author-row">120</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/646079" class="user-link guest" onmouseover="showtip(1, 646079, event)" onmouseout="hidetip()">N0namee</a><div><span class="date">2018-04-06 16:33:48</span></div></td></tr></tbody></table></div><div class="content"><table class="topics forum-table"><tbody><tr><td class="icon"></td><td class="name">Игрушки</td><td class="author">Тем</td><td class="counter">Ответов</td><td class="datetime">Последнее</td></tr><tr><td class="author-row"><img src="./index_files/3877_forum.png"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/htopic/3877" title="" target="">Обзоры игр</a></span><div><span class="small">Описание игр в картинках</span></div></td><td class="author-row">128</td><td class="author-row">1777</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/534395" class="user-link vip" onmouseover="showtip(1, 534395, event)" onmouseout="hidetip()">Trall911</a><div><span class="date">2018-02-16 19:00:56</span></div></td></tr></tbody></table></div><div class="content"><table class="topics forum-table"><tbody><tr><td class="icon"></td><td class="name">Торговый сектор</td><td class="author">Тем</td><td class="counter">Ответов</td><td class="datetime">Последнее</td></tr><tr><td colspan="5" class="text-row">Модераторы этого форума: <a href="http://forum.minecraft-galaxy.ru/profilemain/187451" class="user-link vip" onmouseover="showtip(1, 187451, event)" onmouseout="hidetip()">Ghost</a>, <a href="http://forum.minecraft-galaxy.ru/profilemain/17398" class="user-link vip" onmouseover="showtip(1, 17398, event)" onmouseout="hidetip()">sabotajnik7</a>, <a href="http://forum.minecraft-galaxy.ru/profilemain/46604" class="user-link platinum" onmouseover="showtip(1, 46604, event)" onmouseout="hidetip()">Shredder</a>, <a href="http://forum.minecraft-galaxy.ru/profilemain/84321" class="user-link vip" onmouseover="showtip(1, 84321, event)" onmouseout="hidetip()">Cartman</a>, <a href="http://forum.minecraft-galaxy.ru/profilemain/1231" class="user-link mods" onmouseover="showtip(1, 1231, event)" onmouseout="hidetip()">TGC</a>, <a href="http://forum.minecraft-galaxy.ru/profilemain/60259" class="user-link vip" onmouseover="showtip(1, 60259, event)" onmouseout="hidetip()">Da_Vinci</a>, <a href="http://forum.minecraft-galaxy.ru/profilemain/71518" class="user-link vip" onmouseover="showtip(1, 71518, event)" onmouseout="hidetip()">Falcon</a></td></tr><tr><td class="author-row"><img src="./index_files/330_forum.png"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/htopic/330" title="" target="">Информация</a></span><div><span class="small">Любая информация, связанная с сообществом</span></div></td><td class="author-row">9</td><td class="author-row">16</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/187451" class="user-link vip" onmouseover="showtip(1, 187451, event)" onmouseout="hidetip()">Ghost</a><div><span class="date">2017-07-25 14:33:16</span></div></td></tr><tr><td class="author-row"><img src="./index_files/191_forum.png"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/htopic/191" title="" target="">Общие объявления</a></span><div><span class="small">Любые виды объявлений, не подходящие ни под один из других существующих разделов</span></div></td><td class="author-row">5604</td><td class="author-row">34288</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/174026" class="user-link vip" onmouseover="showtip(1, 174026, event)" onmouseout="hidetip()">Danya_14</a><div><span class="date">2018-04-08 14:43:24</span></div></td></tr><tr><td class="author-row"><img src="./index_files/346_forum.png"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/htopic/346" title="" target="">Быстрая торговля</a></span><div><span class="small">Специальный форум для тех, кто очень торопится (подфорум общих объявлений)</span></div></td><td class="author-row">8288</td><td class="author-row">41970</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/590844" class="user-link platinum" onmouseover="showtip(1, 590844, event)" onmouseout="hidetip()">PeaceDoorBall</a><div><span class="date">2018-04-07 21:47:56</span></div></td></tr><tr><td class="author-row"><img src="./index_files/6543_forum.png"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/htopic/6543" title="" target="">Быстрая торговля Survival</a></span><div><span class="small">Продажа и обмен ресурсов на планетах Nano, Guest, Demo и Hunter</span></div></td><td class="author-row">240</td><td class="author-row">910</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/242085" class="user-link vip" onmouseover="showtip(1, 242085, event)" onmouseout="hidetip()">alexey_74_rus</a><div><span class="date">2018-04-08 15:38:59</span></div></td></tr><tr><td class="author-row"><img src="./index_files/6544_forum.png"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/htopic/6544" title="" target="">Быстрая торговля Advance</a></span><div><span class="small">Продажа и обмен ресурсов на планетах Zeus, MonkeyPlanet, MinerPlanet и LittleBigPlanet</span></div></td><td class="author-row">78</td><td class="author-row">271</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/448446" class="user-link vip" onmouseover="showtip(1, 448446, event)" onmouseout="hidetip()">BlooDStoune</a><div><span class="date">2018-04-03 20:42:01</span></div></td></tr><tr><td class="author-row"><img src="./index_files/480_forum.png"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/htopic/480" title="" target="">Недвижимость</a></span><div><span class="small">Купите себе немного места на серверах</span></div></td><td class="author-row">6604</td><td class="author-row">58994</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/122762" class="user-link vip" onmouseover="showtip(1, 122762, event)" onmouseout="hidetip()">Letopisec</a><div><span class="date">2018-04-08 12:15:22</span></div></td></tr><tr><td class="author-row"><img src="./index_files/6542_forum.png"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/htopic/6542" title="" target="">Недвижимость Advance</a></span><div><span class="small">Купля и продажа недвижимости на планетах Zeus, MonkeyPlanet, MinerPlanet и LittleBigPlanet</span></div></td><td class="author-row">180</td><td class="author-row">1039</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/559456" class="user-link girls" onmouseover="showtip(1, 559456, event)" onmouseout="hidetip()">BadBoy</a><div><span class="date">2018-04-07 22:56:32</span></div></td></tr><tr><td class="author-row"><img src="./index_files/6541_forum.png"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/htopic/6541" title="" target="">Недвижимость Survival</a></span><div><span class="small">Купля и продажа недвижимости на планетах Nano, Guest, Demo и Hunter</span></div></td><td class="author-row">411</td><td class="author-row">2590</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/38983" class="user-link vip" onmouseover="showtip(1, 38983, event)" onmouseout="hidetip()">vovandos150</a><div><span class="date">2018-04-07 19:48:47</span></div></td></tr><tr><td class="author-row"><img src="./index_files/1395_forum.png"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/htopic/1395" title="" target="">Биржа труда</a></span><div><span class="small">Любые внутриигровые услуги игроков</span></div></td><td class="author-row">1225</td><td class="author-row">5214</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/588078" class="user-link girls" onmouseover="showtip(1, 588078, event)" onmouseout="hidetip()">Bor_B_zakone</a><div><span class="date">2018-04-05 08:54:06</span></div></td></tr><tr><td class="author-row"><img src="./index_files/435_forum.png"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/htopic/435" title="" target="">Заказы, крупные сделки</a></span><div><span class="small">Когда ресурсов нужно очень много</span></div></td><td class="author-row">1676</td><td class="author-row">13302</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/632307" class="user-link vip" onmouseover="showtip(1, 632307, event)" onmouseout="hidetip()">brainfull</a><div><span class="date">2018-03-30 18:55:00</span></div></td></tr><tr><td class="author-row"><img src="./index_files/738_forum.png"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/htopic/738" title="" target="">Аккаунты</a></span><div><span class="small">Сообщите о проведении выгодной сделки на аукционе</span></div></td><td class="author-row">1434</td><td class="author-row">8882</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/72631" class="user-link vip" onmouseover="showtip(1, 72631, event)" onmouseout="hidetip()">kest-best_med</a><div><span class="date">2018-04-01 20:01:01</span></div></td></tr></tbody></table></div><div class="content"><table class="topics forum-table"><tbody><tr><td class="icon"></td><td class="name">Helpers</td><td class="author">Тем</td><td class="counter">Ответов</td><td class="datetime">Последнее</td></tr><tr><td colspan="5" class="text-row">Модераторы этого форума: <a href="http://forum.minecraft-galaxy.ru/profilemain/187451" class="user-link vip" onmouseover="showtip(1, 187451, event)" onmouseout="hidetip()">Ghost</a>, <a href="http://forum.minecraft-galaxy.ru/profilemain/46604" class="user-link platinum" onmouseover="showtip(1, 46604, event)" onmouseout="hidetip()">Shredder</a>, <a href="http://forum.minecraft-galaxy.ru/profilemain/20304" class="user-link platinum" onmouseover="showtip(1, 20304, event)" onmouseout="hidetip()">XBocT</a>, <a href="http://forum.minecraft-galaxy.ru/profilemain/84321" class="user-link vip" onmouseover="showtip(1, 84321, event)" onmouseout="hidetip()">Cartman</a>, <a href="http://forum.minecraft-galaxy.ru/profilemain/428426" class="user-link vip" onmouseover="showtip(1, 428426, event)" onmouseout="hidetip()">Irman</a></td></tr><tr><td class="author-row"><img src="./index_files/6205_forum.png"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/htopic/6205" title="" target="">Полезная информация</a></span><div><span class="small">Описание и ответы на распространенные вопросы</span></div></td><td class="author-row">14</td><td class="author-row">62</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/428426" class="user-link vip" onmouseover="showtip(1, 428426, event)" onmouseout="hidetip()">Irman</a><div><span class="date">2018-04-08 10:03:56</span></div></td></tr><tr><td class="author-row"><img src="./index_files/6206_forum.png"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/htopic/6206" title="" target="">Гайды и советы</a></span><div><span class="small">Внутри игровые проекты</span></div></td><td class="author-row">30</td><td class="author-row">109</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/194073" class="user-link vip" onmouseover="showtip(1, 194073, event)" onmouseout="hidetip()">iShaman</a><div><span class="date">2018-03-15 22:48:49</span></div></td></tr><tr><td class="author-row"><img src="./index_files/6207_forum.png"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/htopic/6207" title="" target="">Ошибки [logs]</a></span><div><span class="small">Решение распространенных ошибок в клиенте</span></div></td><td class="author-row">17</td><td class="author-row">43</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/428426" class="user-link vip" onmouseover="showtip(1, 428426, event)" onmouseout="hidetip()">Irman</a><div><span class="date">2018-04-04 20:32:57</span></div></td></tr><tr><td class="author-row"><img src="./index_files/5_forum.png"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/htopic/5" title="" target="">Заявки</a></span><div><span class="small">Все виды заявок</span></div></td><td class="author-row">1890</td><td class="author-row">18344</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/428426" class="user-link vip" onmouseover="showtip(1, 428426, event)" onmouseout="hidetip()">Irman</a><div><span class="date">2018-04-08 10:01:52</span></div></td></tr><tr><td class="author-row"><img src="./index_files/4685_forum.png"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/htopic/4685" title="" target="">Жалобы</a></span><div><span class="small">Различные замечания по работе состава</span></div></td><td class="author-row">85</td><td class="author-row">705</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/84321" class="user-link vip" onmouseover="showtip(1, 84321, event)" onmouseout="hidetip()">Cartman</a><div><span class="date">2018-03-08 16:04:53</span></div></td></tr><tr><td class="author-row"><img src="./index_files/1_forum.png"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/htopic/1" title="" target="">Вопросы по игре</a></span><div><span class="small">Прием вопросов от населения</span></div></td><td class="author-row">2276</td><td class="author-row">10865</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/428426" class="user-link vip" onmouseover="showtip(1, 428426, event)" onmouseout="hidetip()">Irman</a><div><span class="date">2018-04-06 09:49:58</span></div></td></tr><tr><td class="author-row"><img src="./index_files/595_forum.png"></td><td class="text-row"><span class="main-title"><a class="" href="http://forum.minecraft-galaxy.ru/htopic/595" title="" target="">Сделки</a></span><div><span class="small">Просьбы игроков о проведении сделок</span></div></td><td class="author-row">361</td><td class="author-row">1277</td><td class="author-row"><a href="http://forum.minecraft-galaxy.ru/profilemain/330955" class="user-link premium" onmouseover="showtip(1, 330955, event)" onmouseout="hidetip()">pTawka</a><div><span class="date">2018-03-13 14:10:31</span></div></td></tr></tbody></table></div><div class="content"><a class="top-block" href="http://forum.minecraft-galaxy.ru/main/#" title="" target="">Вверх ↑</a><div id="img-frame" onclick="$(&quot;#img-frame&quot;).hide(&quot;fade&quot;)"><img id="img"></div><div class="tools">Лучшие скриншоты за последнее время</div><div class="screens"><div class="item"><div class="title">С пасхой тебя,Nariko )</div><div class="map-coords"><span class="home-link" onmouseover="show_map(this, event, -2918, 3001, 12, 43, 0)" onmouseout="hidetip()">map: <a href="http://map.minecraft-galaxy.ru/#-2918/3001/12/0/43" target="_blank">-2918,3001</a></span></div>
				<div><div class="screen-comments"><a class="" href="http://forum.minecraft-galaxy.ru/screencomments/151594" title="Коментарии" target="">1</a></div><img style="cursor: pointer;" onclick="show_screen(&quot;RaNsiD&quot;, &quot;С пасхой тебя,Nariko )&quot;);" src="./index_files/151594.jpg" width="210" height="180"></div>
				<div class="screen-bottom">
					<div class="author"><a href="http://forum.minecraft-galaxy.ru/profilemain/404926" class="user-link premium" onmouseover="showtip(1, 404926, event)" onmouseout="hidetip()">RaNsiD</a></div>
					<div class="vote-simple">43</div>
					<div class="clear"></div>
				</div>
							</div><div class="item"><div class="title">Я_И_МОЙ_ДРУГ_КИРЮХА</div><div class="map-coords"><span class="home-link" onmouseover="show_map(this, event, -2210, -996, 12, 43, 0)" onmouseout="hidetip()">map: <a href="http://map.minecraft-galaxy.ru/#-2210/-996/12/0/43" target="_blank">-2210,-996</a></span></div>
				<div><div class="screen-comments"><a class="" href="http://forum.minecraft-galaxy.ru/screencomments/151538" title="Коментарии" target="">1</a></div><img style="cursor: pointer;" onclick="show_screen(&quot;Lem&quot;, &quot;Я_И_МОЙ_ДРУГ_КИРЮХА&quot;);" src="./index_files/151538.jpg" width="210" height="180"></div>
				<div class="screen-bottom">
					<div class="author"><a href="http://forum.minecraft-galaxy.ru/profilemain/249762" class="user-link premium" onmouseover="showtip(1, 249762, event)" onmouseout="hidetip()">Lem</a></div>
					<div class="vote-simple">23</div>
					<div class="clear"></div>
				</div>
							</div><div class="item"><div class="title">Дяга, гони выкуп</div><div class="map-coords"><span class="home-link" onmouseover="show_map(this, event, 2433, -2145, 8, 29, 0)" onmouseout="hidetip()">map: <a href="http://map.minecraft-galaxy.ru/#2433/-2145/8/0/29" target="_blank">2433,-2145</a></span></div>
				<div><div class="screen-comments"><a class="" href="http://forum.minecraft-galaxy.ru/screencomments/151580" title="Коментарии" target="">2</a></div><img style="cursor: pointer;" onclick="show_screen(&quot;kkkkkrrryyyt&quot;, &quot;Дяга, гони выкуп&quot;);" src="./index_files/151580.jpg" width="210" height="180"></div>
				<div class="screen-bottom">
					<div class="author"><a href="http://forum.minecraft-galaxy.ru/profilemain/364094" class="user-link premium" onmouseover="showtip(1, 364094, event)" onmouseout="hidetip()">kkkkkrrryyyt</a></div>
					<div class="vote-simple">18</div>
					<div class="clear"></div>
				</div>
							</div><div class="item"><div class="title">Вспомним свинок)</div><div class="map-coords"><span class="home-link" onmouseover="show_map(this, event, 922, -1470, 3, 15, 0)" onmouseout="hidetip()">map: <a href="http://map.minecraft-galaxy.ru/#922/-1470/3/0/15" target="_blank">922,-1470</a></span></div>
				<div><div class="screen-comments"><a class="" href="http://forum.minecraft-galaxy.ru/screencomments/151540" title="Коментарии" target="">9</a></div><img style="cursor: pointer;" onclick="show_screen(&quot;kirillkochetov&quot;, &quot;Вспомним свинок)&quot;);" src="./index_files/151540.jpg" width="210" height="180"></div>
				<div class="screen-bottom">
					<div class="author"><a href="http://forum.minecraft-galaxy.ru/profilemain/35362" class="user-link vip" onmouseover="showtip(1, 35362, event)" onmouseout="hidetip()">kirillkochetov</a></div>
					<div class="vote-simple">12</div>
					<div class="clear"></div>
				</div>
							</div></div></div><div class="content"><table class="forums servers-list"><tbody><tr><td>Сервера Minecraft Galaxy</td></tr><tr><td><div class="spoler"><div class="spoler-head" onclick="switchTablePreload(this, 1, &#39;online&#39;);"><img src="./index_files/icon_plus.gif" width="9"> Сервер: <a target="_blank" href="http://forum.minecraft-galaxy.ru/serverinfo/1">Main</a>, мест: <span style="color: yellow;">2</span>/200, <a target="_blank" href="http://map.minecraft-galaxy.ru/#0/0/1/0/">размер карты</a>: 2800 (застроено: 41.25%)</div><div class="spoler-body"><div><div id="online-1"></div></div></div></div></td></tr><tr><td><div class="spoler"><div class="spoler-head" onclick="switchTablePreload(this, 8, &#39;online&#39;);"><img src="./index_files/icon_plus.gif" width="9"> Сервер: <a target="_blank" href="http://forum.minecraft-galaxy.ru/serverinfo/8">Clans</a>, мест: <span style="color: yellow;">4</span>/200, <a target="_blank" href="http://map.minecraft-galaxy.ru/#0/0/8/0/">размер карты</a>: 2800 (застроено: 24.38%)</div><div class="spoler-body"><div><div id="online-8"></div></div></div></div></td></tr><tr><td><div class="spoler"><div class="spoler-head" onclick="switchTablePreload(this, 9, &#39;online&#39;);"><img src="./index_files/icon_plus.gif" width="9"> Сервер: <a target="_blank" href="http://forum.minecraft-galaxy.ru/serverinfo/9">Arena</a>, мест: <span style="color: yellow;">0</span>/200, <a target="_blank" href="http://map.minecraft-galaxy.ru/#0/0/9/0/">размер карты</a>: 400 (застроено: 1.56%)</div><div class="spoler-body"><div><div id="online-9"></div></div></div></div></td></tr><tr><td><div class="spoler"><div class="spoler-head" onclick="switchTablePreload(this, 11, &#39;online&#39;);"><img src="./index_files/icon_plus.gif" width="9"> Сервер: <a target="_blank" href="http://forum.minecraft-galaxy.ru/serverinfo/11">Pirate station</a>, мест: <span style="color: yellow;">9</span>/200, <a target="_blank" href="http://map.minecraft-galaxy.ru/#0/0/11/0/">размер карты</a>: 2000 (застроено: 37.86%)</div><div class="spoler-body"><div><div id="online-11"></div></div></div></div></td></tr><tr><td><div class="spoler"><div class="spoler-head" onclick="switchTablePreload(this, 13, &#39;online&#39;);"><img src="./index_files/icon_plus.gif" width="9"> Сервер: <a target="_blank" href="http://forum.minecraft-galaxy.ru/serverinfo/13">Rookie</a>, мест: <span style="color: yellow;">3</span>/200, <a target="_blank" href="http://map.minecraft-galaxy.ru/#0/0/13/0/">размер карты</a>: 2800 (застроено: 56.45%)</div><div class="spoler-body"><div><div id="online-13"></div></div></div></div></td></tr><tr><td><div class="spoler"><div class="spoler-head" onclick="switchTablePreload(this, 14, &#39;online&#39;);"><img src="./index_files/icon_plus.gif" width="9"> Сервер: <a target="_blank" href="http://forum.minecraft-galaxy.ru/serverinfo/14">Newbie</a>, мест: <span style="color: yellow;">4</span>/200, <a target="_blank" href="http://map.minecraft-galaxy.ru/#0/0/14/0/">размер карты</a>: 4000 (застроено: 44.99%)</div><div class="spoler-body"><div><div id="online-14"></div></div></div></div></td></tr><tr><td><div class="spoler"><div class="spoler-head" onclick="switchTablePreload(this, 15, &#39;online&#39;);"><img src="./index_files/icon_plus.gif" width="9"> Сервер: <a target="_blank" href="http://forum.minecraft-galaxy.ru/serverinfo/15">Build</a>, мест: <span style="color: yellow;">2</span>/200, <a target="_blank" href="http://map.minecraft-galaxy.ru/#0/0/15/0/">размер карты</a>: 3600 (застроено: 20.65%)</div><div class="spoler-body"><div><div id="online-15"></div></div></div></div></td></tr><tr><td><div class="spoler"><div class="spoler-head" onclick="switchTablePreload(this, 16, &#39;online&#39;);"><img src="./index_files/icon_plus.gif" width="9"> Сервер: <a target="_blank" href="http://forum.minecraft-galaxy.ru/serverinfo/16">Pacific</a>, мест: <span style="color: yellow;">0</span>/200, <a target="_blank" href="http://map.minecraft-galaxy.ru/#0/0/16/0/">размер карты</a>: 2800 (застроено: 69.06%)</div><div class="spoler-body"><div><div id="online-16"></div></div></div></div></td></tr><tr><td><div class="spoler"><div class="spoler-head" onclick="switchTablePreload(this, 17, &#39;online&#39;);"><img src="./index_files/icon_plus.gif" width="9"> Сервер: <a target="_blank" href="http://forum.minecraft-galaxy.ru/serverinfo/17">Poligon</a>, мест: <span style="color: yellow;">1</span>/200, <a target="_blank" href="http://map.minecraft-galaxy.ru/#0/0/17/0/">размер карты</a>: 1200 (застроено: 0%)</div><div class="spoler-body"><div><div id="online-17"></div></div></div></div></td></tr><tr><td><div class="spoler"><div class="spoler-head" onclick="switchTablePreload(this, 18, &#39;online&#39;);"><img src="./index_files/icon_plus.gif" width="9"> Сервер: <a target="_blank" href="http://forum.minecraft-galaxy.ru/serverinfo/18">Enigma</a>, мест: <span style="color: yellow;">3</span>/200, <a target="_blank" href="http://map.minecraft-galaxy.ru/#0/0/18/0/">размер карты</a>: 2400 (застроено: 0.52%)</div><div class="spoler-body"><div><div id="online-18"></div></div></div></div></td></tr><tr><td><div class="spoler"><div class="spoler-head" onclick="switchTablePreload(this, 19, &#39;online&#39;);"><img src="./index_files/icon_plus.gif" width="9"> Сервер: <a target="_blank" href="http://forum.minecraft-galaxy.ru/serverinfo/19">Novice</a>, мест: <span style="color: yellow;">1</span>/200, <a target="_blank" href="http://map.minecraft-galaxy.ru/#0/0/19/0/">размер карты</a>: 4000 (застроено: 15.92%)</div><div class="spoler-body"><div><div id="online-19"></div></div></div></div></td></tr><tr><td><div class="spoler"><div class="spoler-head" onclick="switchTablePreload(this, 20, &#39;online&#39;);"><img src="./index_files/icon_plus.gif" width="9"> Сервер: <a target="_blank" href="http://forum.minecraft-galaxy.ru/serverinfo/20">Team</a>, мест: <span style="color: yellow;">0</span>/200, <a target="_blank" href="http://map.minecraft-galaxy.ru/#0/0/20/0/">размер карты</a>: 2000 (застроено: 20.44%)</div><div class="spoler-body"><div><div id="online-20"></div></div></div></div></td></tr><tr><td><div class="spoler"><div class="spoler-head" onclick="switchTablePreload(this, 22, &#39;online&#39;);"><img src="./index_files/icon_plus.gif" width="9"> Сервер: <a target="_blank" href="http://forum.minecraft-galaxy.ru/serverinfo/22">Farm</a>, мест: <span style="color: yellow;">6</span>/200, <a target="_blank" href="http://map.minecraft-galaxy.ru/#0/0/22/0/">размер карты</a>: 3600 (застроено: 86.64%)</div><div class="spoler-body"><div><div id="online-22"></div></div></div></div></td></tr><tr><td><div class="spoler"><div class="spoler-head" onclick="switchTablePreload(this, 23, &#39;online&#39;);"><img src="./index_files/icon_plus.gif" width="9"> Сервер: <a target="_blank" href="http://forum.minecraft-galaxy.ru/serverinfo/23">Creator</a>, мест: <span style="color: yellow;">0</span>/200, <a target="_blank" href="http://map.minecraft-galaxy.ru/#0/0/23/0/">размер карты</a>: 2400 (застроено: 4.75%)</div><div class="spoler-body"><div><div id="online-23"></div></div></div></div></td></tr><tr><td><div class="spoler"><div class="spoler-head" onclick="switchTablePreload(this, 24, &#39;online&#39;);"><img src="./index_files/icon_plus.gif" width="9"> Сервер: <a target="_blank" href="http://forum.minecraft-galaxy.ru/serverinfo/24">Events</a>, мест: <span style="color: yellow;">0</span>/200, <a target="_blank" href="http://map.minecraft-galaxy.ru/#0/0/24/0/">размер карты</a>: 2000 (застроено: 1.94%)</div><div class="spoler-body"><div><div id="online-24"></div></div></div></div></td></tr><tr><td><div class="spoler"><div class="spoler-head" onclick="switchTablePreload(this, 25, &#39;online&#39;);"><img src="./index_files/icon_plus.gif" width="9"> Сервер: <a target="_blank" href="http://forum.minecraft-galaxy.ru/serverinfo/25">Prometeus</a>, мест: <span style="color: yellow;">5</span>/200, <a target="_blank" href="http://map.minecraft-galaxy.ru/#0/0/25/0/">размер карты</a>: 2816 (застроено: 36.03%)</div><div class="spoler-body"><div><div id="online-25"></div></div></div></div></td></tr><tr><td><div class="spoler"><div class="spoler-head" onclick="switchTablePreload(this, 26, &#39;online&#39;);"><img src="./index_files/icon_plus.gif" width="9"> Сервер: <a target="_blank" href="http://forum.minecraft-galaxy.ru/serverinfo/26">Laboratory</a>, мест: <span style="color: yellow;">0</span>/200, <a target="_blank" href="http://map.minecraft-galaxy.ru/#0/0/26/0/">размер карты</a>: 2400 (застроено: 27.33%)</div><div class="spoler-body"><div><div id="online-26"></div></div></div></div></td></tr><tr><td><div class="spoler"><div class="spoler-head" onclick="switchTablePreload(this, 27, &#39;online&#39;);"><img src="./index_files/icon_plus.gif" width="9"> Сервер: <a target="_blank" href="http://forum.minecraft-galaxy.ru/serverinfo/27">SpleefArena</a>, мест: <span style="color: yellow;">0</span>/400, <a target="_blank" href="http://map.minecraft-galaxy.ru/#0/0/27/0/">размер карты</a>: 1200 (застроено: 44.44%)</div><div class="spoler-body"><div><div id="online-27"></div></div></div></div></td></tr><tr><td><div class="spoler"><div class="spoler-head" onclick="switchTablePreload(this, 29, &#39;online&#39;);"><img src="./index_files/icon_plus.gif" width="9"> Сервер: <a target="_blank" href="http://forum.minecraft-galaxy.ru/serverinfo/29">Dragon nest</a>, мест: <span style="color: yellow;">1</span>/200, <a target="_blank" href="http://map.minecraft-galaxy.ru/#0/0/29/0/">размер карты</a>: 2048 (застроено: 13%)</div><div class="spoler-body"><div><div id="online-29"></div></div></div></div></td></tr><tr><td><div class="spoler"><div class="spoler-head" onclick="switchTablePreload(this, 30, &#39;online&#39;);"><img src="./index_files/icon_plus.gif" width="9"> Сервер: <a target="_blank" href="http://forum.minecraft-galaxy.ru/serverinfo/30">Atlantida</a>, мест: <span style="color: yellow;">8</span>/200, <a target="_blank" href="http://map.minecraft-galaxy.ru/#0/0/30/0/">размер карты</a>: 2800 (застроено: 42.39%)</div><div class="spoler-body"><div><div id="online-30"></div></div></div></div></td></tr><tr><td><div class="spoler"><div class="spoler-head" onclick="switchTablePreload(this, 32, &#39;online&#39;);"><img src="./index_files/icon_plus.gif" width="9"> Сервер: <a target="_blank" href="http://forum.minecraft-galaxy.ru/serverinfo/32">Olympic</a>, мест: <span style="color: yellow;">0</span>/200, <a target="_blank" href="http://map.minecraft-galaxy.ru/#0/0/32/0/">размер карты</a>: 2400 (застроено: 0.92%)</div><div class="spoler-body"><div><div id="online-32"></div></div></div></div></td></tr><tr><td><div class="spoler"><div class="spoler-head" onclick="switchTablePreload(this, 33, &#39;online&#39;);"><img src="./index_files/icon_plus.gif" width="9"> Сервер: <a target="_blank" href="http://forum.minecraft-galaxy.ru/serverinfo/33">Лапландия</a>, мест: <span style="color: yellow;">0</span>/200, <a target="_blank" href="http://map.minecraft-galaxy.ru/#0/0/33/0/">размер карты</a>: 100 (застроено: 0%)</div><div class="spoler-body"><div><div id="online-33"></div></div></div></div></td></tr><tr><td><div class="spoler"><div class="spoler-head" onclick="switchTablePreload(this, 12, &#39;online&#39;);"><img src="./index_files/icon_plus.gif" width="9"> Сервер: <a target="_blank" href="http://forum.minecraft-galaxy.ru/serverinfo/12">Survival</a>, мест: <span style="color: yellow;">80</span>/800, <a target="_blank" href="http://map.minecraft-galaxy.ru/#0/0/12/0/">размер карты</a>: 3200 (застроено: 71.7%)</div><div class="spoler-body"><div><div id="online-12"></div></div></div></div></td></tr><tr><td><div class="spoler"><div class="spoler-head" onclick="switchTablePreload(this, 28, &#39;online&#39;);"><img src="./index_files/icon_plus.gif" width="9"> Сервер: <a target="_blank" href="http://forum.minecraft-galaxy.ru/serverinfo/28">Advance</a>, мест: <span style="color: yellow;">46</span>/800, <a target="_blank" href="http://map.minecraft-galaxy.ru/#0/0/28/0/">размер карты</a>: 3200 (застроено: 54.54%)</div><div class="spoler-body"><div><div id="online-28"></div></div></div></div></td></tr><tr><td><div class="spoler"><div class="spoler-head" onclick="switchTablePreload(this, 31, &#39;online&#39;);"><img src="./index_files/icon_plus.gif" width="9"> Сервер: <a target="_blank" href="http://forum.minecraft-galaxy.ru/serverinfo/31">Silence</a>, мест: <span style="color: yellow;">0</span>/410, <a target="_blank" href="http://map.minecraft-galaxy.ru/#0/0/31/0/">размер карты</a>: 2400 (застроено: 0.51%)</div><div class="spoler-body"><div><div id="online-31"></div></div></div></div></td></tr><tr><td>Игроков online: 175</td></tr></tbody></table><table class="forums online-table"><tbody><tr><td class="online-title">суточное колебание online за три дня</td><td><iframe src="./index_files/o_graph.php" style="height: 50px; width: 300px; border: 0;"></iframe></td><td><div class="online">Максимальное число игроков 498 было зафиксировано 2017-10-31 19:24:52
								<br>Максимальное число игроков за сегодня: 184</div></td></tr></tbody></table></div>

<div class="copyright">
<div style="padding:7px;">Copyright 2018 by minecraft galaxy team</div>

		<div style="padding:7px;"> 
			<!--Rating@Mail.ru counter--> 
			<script language="javascript"><!--
			d=document;var a='';a+=';r='+escape(d.referrer);js=10;//--></script> 
			<script language="javascript1.1"><!--
			a+=';j='+navigator.javaEnabled();js=11;//--></script> 
			<script language="javascript1.2"><!--
			s=screen;a+=';s='+s.width+'*'+s.height;
			a+=';d='+(s.colorDepth?s.colorDepth:s.pixelDepth);js=12;//--></script> 
			<script language="javascript1.3"><!--
			js=13;//--></script><script language="javascript" type="text/javascript"><!--
			d.write('<a href="http://top.mail.ru/jump?from=1990623" target="_top">'+
			'<img src="http://df.c5.be.a1.top.mail.ru/counter?id=1990623;t=47;js='+js+
			a+';rand='+Math.random()+'" alt="Рейтинг@Mail.ru" border="0" '+
			'height="31" width="88"><\/a>');if(11<js)d.write('<'+'!-- ');//--></script><a href="http://top.mail.ru/jump?from=1990623" target="_top"><img src="./index_files/counter" alt="Рейтинг@Mail.ru" border="0" height="31" width="88"></a><!--  
			<noscript><a target="_top" href="http://top.mail.ru/jump?from=1990623"> 
			<img src="http://df.c5.be.a1.top.mail.ru/counter?js=na;id=1990623;t=47" 
			height="31" width="88" border="0" alt="Рейтинг@Mail.ru"/></a></noscript> 
			<script language="javascript" type="text/javascript"><!--
			if(11<js)d.write('--'+'>');//--> 
			<!--// Rating@Mail.ru counter--> 
		</div> 
	
		<!-- Yandex.Metrika counter -->
		<div style="display:none;"><script type="text/javascript">
		(function(w, c) {
			(w[c] = w[c] || []).push(function() {
				try {
					w.yaCounter12610318 = new Ya.Metrika({id:12610318, enableAll: true});
				}
				catch(e) { }
			});
		})(window, "yandex_metrika_callbacks");
		</script></div>
		<script src="./index_files/watch.js.Без названия" type="text/javascript" defer="defer"></script>
		<noscript>&lt;div&gt;&lt;img src="//mc.yandex.ru/watch/12610318" style="position:absolute; left:-9999px;" alt="" /&gt;&lt;/div&gt;</noscript>
		<!-- /Yandex.Metrika counter -->
	<div style="padding:7px;"> 
		<a href="http://topcraft.ru/servers/4485" target="_blank"><img src="./index_files/tops.png"></a>
		<a href="https://mctop.su/servers/1382/"><img src="./index_files/tops(1).png"></a>
		<a href="http://mctop.pro/vote/2083-vote.html" target="_blank"><img src="./index_files/3.png" alt="Проголосуй!"></a>
	</div>
        
</div>

<div style="display: none; " id="user-select">
	<div id="user-select-category">
		<div class="item" onclick="user_select_search();"><img class="item-icon" src="./index_files/search.png"> Поиск</div>
		<div class="item" onclick="user_select_follow(5);"><img class="item-icon" src="./index_files/twinks.png"> Твинки</div>
		<div class="item" onclick="user_select_follow(6);"><img class="item-icon" src="./index_files/friends.png"> Друзья</div>
		<div class="item" onclick="user_select_follow(7);"><img class="item-icon" src="./index_files/admins.png"> Администрация</div>
	</div>
	<div id="user-select-list">

	</div>
	<div id="user-select-search">
		<div>Введите ник пользователя или его часть:</div>
		<br>
		<div><input type="text" style="width: 180px;" id="ui-user-select" autocomplete="off" class="ac_input"></div>
	</div>
</div>


	<script type="text/javascript" src="./index_files/highlight.pack.js.Без названия"></script>
	<script>
	  hljs.initHighlightingOnLoad();
	</script>
  
	<script type="text/javascript">
		function register() {
			window.open("/regform.html", "register", "menubar=no,location=no,width=480,height=410")
		}
		
		function show_menu(obj) {
			obj.style.display = 'block'
			//if(obj.style.display == "none")
			//	$(obj).show("fade")
		}
		
		function hide_menu(obj) {
			obj.style.display = 'none'
			//$(obj).hide("fade")
		}
		
		$(function () {
			  $('.dropdown').each(function () {
				$(this).parent().eq(0).hoverIntent({
					timeout: 100,
					over: function () {
						var current = $('.dropdown:eq(0)', this);
						current.slideDown(100);
					},
					out: function () {
						var current = $('.dropdown:eq(0)', this);
						current.fadeOut(200);
					}
				});
			  });

			  $('.dropdown').each(function(i, it){
				  var list = $(it).find('li');
				  if(list.length > 12){
					  list.parent().addClass('large');
						list.each(function(index, item){
							if(index >= list.length / 2){
								$(item).addClass('second');
							} 
							else{
								$(item).addClass('first');
							}
						});
						$(it).find('.first').wrapAll('<div class="first-row"/>');
						$(it).find('.second').wrapAll('<div class="second-row"/>');
				  }
			  });
			  
		});
	</script>
	<style>

	</style>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-22798613-1']);
	  _gaq.push(['_setDomainName', '.minecraft-galaxy.ru']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	<script type="text/javascript">
	attach_user_auto("#ui-user-select");
</script>
	<link rel="stylesheet" href="./index_files/map.css" type="text/css">
	<link rel="stylesheet" href="./index_files/jquery-ui.css" type="text/css">
	<link rel="stylesheet" href="./index_files/dark.css" type="text/css">
</div>



<div class="ac_results" style="display: none; position: absolute;"></div></body></html>