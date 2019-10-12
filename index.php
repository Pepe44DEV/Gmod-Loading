<?php

$steamid = $_GET['steam'];
$steamapikey = $_GET['apikey'];
$raw = file_get_contents("https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=".$steamapikey."&steamids=".$steamid);
$json = json_decode($raw, true);
$json = $json['response']['players'][0];
?>
<!DOCTYPE html>
<html lang="de">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pepe´s Gmod</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <header>
            <h1 id="Titel">Pepe´s Gmod Netzwerk</h1>

            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="mr-auto"><i class="fa fa-steam" style="font-size:36px"></i> Workshop-Kollektion</strong>
                </div>
                <div class="toast-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Suche nach:</b> Pepes Gmod content <img class="kollecIMG" src="https://steamuserimages-a.akamaihd.net/ugc/777357465301870668/153FDB0250CEF80AC2CC1C63F7F8E062794884A8/?imw=200&imh=200&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true" class="card-img-top" alt="PROFILE IMG"></li>
                        <li class="list-group-item"><a href="https://steamcommunity.com/sharedfiles/filedetails/?id=1817304101">https://steamcommunity.com/sharedfiles/filedetails/?id=1817304101</a></li>
                    </ul>
                </div>
            </div>
            <div class="toast rightf" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="mr-auto" id="status"></strong>
                </div>
                <div class="toast-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Zuletzt heruntergeladen: <span id="lastdownload"></span></li>
                        <li class="list-group-item"></li>
                    </ul>
                </div>
            </div>

        </header>
        <div id="content">
            <div id="left">
                <div class="card">
                    <div class="card-header">
                        Willkommen
                    </div>
                    <img src="<?php echo $json['avatarfull'];?>" class="card-img-top" alt="PROFILE IMG">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Name:</b> <?php echo $json['personaname']; ?></li>
                        <li class="list-group-item"><b>SteamID:</b> <span id="steamid"></span></li>
                        <li class="list-group-item"><b>Map:</b> <span id="mapname"></span></li>
                        <li class="list-group-item"><b>Slots:</b> <span id="slots"></span></li>
                        <li class="list-group-item"><b>Spielmodus:</b> <span id="gamemode"></span></li>
                    </ul>
                </div>
            </div>
            <div id="right">
                <!--<div class="card">
                    <div class="card-header">
                        <i class="fa fa-steam" style="font-size:36px"></i> Workshop-Kollektion
                    </div>
                    <div class="card-body">
                        <p class="card-text"><a href="https://steamcommunity.com/sharedfiles/filedetails/?id=1817304101">https://steamcommunity.com/sharedfiles/filedetails/?id=1817304101</a></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Suche nach:</b> Pepes Gmod content <img class="kollecIMG" src="https://steamuserimages-a.akamaihd.net/ugc/777357465301870668/153FDB0250CEF80AC2CC1C63F7F8E062794884A8/?imw=200&imh=200&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true" class="card-img-top" alt="PROFILE IMG"></li>
                    </ul>
                </div>-->
                <div class="card">
                    <div class="card-header">
                        Regeln
                    </div>
                    <ul class="list-group list-group-flush">
                        <!--<li class="list-group-item" style="text-align: center"><b>Allgemein</b></li>-->
                        <li class="list-group-item">Anweißungen von Teammitglieder müssen befolgt werden.</li>
                        <li class="list-group-item">Strafen dürfen nach ermessen des bearbeitende Teammitglieds verhengt werden.</li>
                        <li class="list-group-item" style="text-align: center"><b>RP-Regeln</b></li>
                        <li class="list-group-item"><b>Trolling: </b> Trolling wird mit einem Permanenten Ban geandet!</li>
                        <li class="list-group-item"><b>Schussankündigung: </b> Eine Schussankündigung muss eine Bedingung erhalten! Sie muss vom Gegner gehört werden können!</li>
                        <li class="list-group-item"><b>Fearrp:</b> Wenn auf dich eine Waffe gerichtet wird, hast du Angst! Du darfst nur eine Waffe ziehen, wenn deine Partei in starker überzahl ist. Du darfst es nur auf eine Schießerei herauslaufen lassen, wenn du eine begründete Chance hast.</li>
                        <li class="list-group-item"><b>VDM:</b> Es ist verboten, Personen mit Fahrzeugen zu töten</li>
                        <li class="list-group-item"><b>NLR:</b> Wenn du stirbst musst du dich 10 Minuten aus dem RP raushalten!</li>
                        <li class="list-group-item"><b>Props:</b> Proppush, Propkill, Propsurf etc sind Untersagt!</li>
                        <li class="list-group-item"><b>Safe-Zones sind:</b> Autohändler, ATMs, Spawn</li>
                    </ul>
                </div>
            </div>
        </div>
    <script src="script.js"></script>
    </body>
</html>
