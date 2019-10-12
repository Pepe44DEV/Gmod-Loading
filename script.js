function GameDetails( servername, serverurl, mapname, maxplayers, steamid, gamemode ) {

    document.getElementById('steamid').innerHTML = steamid;
    document.getElementById('mapname').innerHTML = mapname;
    document.getElementById('slots').innerHTML = maxplayers;
    document.getElementById('gamemode').innerHTML = gamemode;

}

function SetStatusChanged( status ) {
    document.getElementById('status').innerHTML = status;
}

function DownloadingFile( fileName ) {
    document.getElementById('lastdownload').innerHTML = fileName;
}