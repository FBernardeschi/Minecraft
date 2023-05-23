<?php
session_start();

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$img = array(
    'img/MC_1.avif'=>['Minecraft', 'Исследуй собственный уникальный мир, переживи ночь и создай все, что только сможешь вообразить!'],
    'img/MC_2.avif'=>['Minecraft Dungeons', 'Попробуй новую приключенческую игру, вдохновленную классическими данжен-кроулерами!'],
    'img/MC_3.avif'=>['Minecraft Legends', 'Раскрой все тайны в Minecraft Legends, новой игре в жанре экшн-стратегии.'],
    'img/MC_4.avif'=>['Minecraft: Realms', 'Играй с друзьями на собственном сервере Minecraft под управлением Windows, Linux или Mac.'],
    'img/MC_4.avif'=>['Minecraft Education', 'Учебная игровая платформа, помогающая тысячам преподавателей в более чем 100 странах!']
);

$news = array(
    'NEWS_1.avif'=>['Last call to migrate Mojang accounts', 'Hurry! The move ends on September 19, 2023!'],
    'NEWS_2.avif'=>['Minecraft Legends: Return of the Piglins', 'We talked to Matt Forbeck about his Minecraft Legends novel!'],
    'NEWS_3.avif'=>['Realms Plus: May 2023', 'The myths, the mobs, the legends arriving this month!'],
    'NEWS_4.avif'=>['Minecraft Legends-themed event', 'Join jeb and Hannahxxrose in Bedrock Edition this weekend for parkour and surprises!'],
);

$buildings = array(
    'BILD_1.avif'=>['NEW LOST LEGEND AND THE DAY 30 PATCH', 'Break the Unbreakable in this month’s free challenge for Minecraft Legends'],
    'BILD_2.avif'=>['BLOCK OF THE MONTH: GILDED BLACKSTONE', 'All that glitters is not gold!'],
    'BILD_3.avif'=>['MINECRAFT 1.20 PRE-RELEASE 4', 'A Minecraft Java Pre-Release'],
    'BILD_4.avif'=>['TAKING INVENTORY: NETHER STAR', 'A beacon of hope!'],
    'BILD_5.avif'=>['MINECRAFT 1.20 PRE-RELEASE 1', 'A Minecraft Java Pre-Release'],
    'BILD_6.avif'=>['MINECRAFT LEGENDS-THEMED EVENT', 'Join jeb and Hannahxxrose in Bedrock Edition this weekend for parkour and surprises!'],
    'BILD_7.avif'=>['LAST CALL TO MIGRATE MOJANG ACCOUNTS', 'Hurry! The move ends on September 19, 2023!'],
    'BILD_8.avif'=>['MINECRAFT LEGENDS: RETURN OF THE PIGLINS', 'We talked to Matt Forbeck about his Minecraft Legends novel!'],
);

echo $twig->render('index.html', [
    'img'=>$img,
    'news'=>$news,
    'buildings'=>$buildings
]);