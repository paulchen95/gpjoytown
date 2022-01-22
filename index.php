<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Joytown Service</title>
        <!-- <link rel="stylesheet" href="style.css"> -->
    </head>
    <body>
        <!--
        <style>
            .hytPlayerWrap {
                display: inline-block;
                position: relative
            }
        
            .hytPlayerWrap.ended::after {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                cursor: pointer;
                background-color: black;
                background-repeat: no-repeat;
                background-position: center;
                background-size: 64px 64px;
                background-image: url(data:image/svg+xml;utf8;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMjgiIGhlaWdodD0iMTI4IiB2aWV3Qm94PSIwIDAgNTEwIDUxMCI+PHBhdGggZD0iTTI1NSAxMDJWMEwxMjcuNSAxMjcuNSAyNTUgMjU1VjE1M2M4NC4xNSAwIDE1MyA2OC44NSAxNTMgMTUzcy02OC44NSAxNTMtMTUzIDE1My0xNTMtNjguODUtMTUzLTE1M0g1MWMwIDExMi4yIDkxLjggMjA0IDIwNCAyMDRzMjA0LTkxLjggMjA0LTIwNC05MS44LTIwNC0yMDQtMjA0eiIgZmlsbD0iI0ZGRiIvPjwvc3ZnPg==)
            }
        
            .hytPlayerWrap.paused::after {
                content: "";
                position: absolute;
                top: 70px;
                left: 0;
                bottom: 50px;
                right: 0;
                cursor: pointer;
                background-color: black;
                background-repeat: no-repeat;
                background-position: center;
                background-size: 40px 40px;
                background-image: url(data:image/svg+xml;utf8;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEiIHdpZHRoPSIxNzA2LjY2NyIgaGVpZ2h0PSIxNzA2LjY2NyIgdmlld0JveD0iMCAwIDEyODAgMTI4MCI+PHBhdGggZD0iTTE1Ny42MzUgMi45ODRMMTI2MC45NzkgNjQwIDE1Ny42MzUgMTI3Ny4wMTZ6IiBmaWxsPSIjZmZmIi8+PC9zdmc+)
            }
        </style>
        -->
        <div style="height:720px; width:1280px; overflow: hidden;">
            <iframe width="1280"
                src="https://www.youtube.com/embed/<?php echo htmlspecialchars($_GET['id']); 
                    ?>?theme=dark&autoplay=1&autohide=0&cc_load_policy=1&modestbranding=1&fs=0&showinfo=0&rel=0&iv_load_policy=3&mute=0&loop=1"   
                allowfullscreen
                style="height:720px;  background:#000000; bottom: 60px; position: relative;"  
                sandbox="allow-forms allow-scripts allow-pointer-lock allow-same-origin allow-top-navigation">
            </iframe>
        </div>
        <!--
        <div class="hytPlayerWrapOuter">
            <div class="hytPlayerWrap"> <iframe width="464" height="316"
                    src="https://www.youtube.com/embed/<?php //echo htmlspecialchars($_GET['id']); 
                    ?>?rel=0&enablejsapi=1&modestbranding=1&autohide=1&showinfo=0&controls=0" allowfullscreen frameborder="0"></iframe></div>
        </div>
        <script>"use strict"; document.addEventListener('DOMContentLoaded', function () { if (window.hideYTActivated) return; if (typeof YT === 'undefined') { let tag = document.createElement('script'); tag.src = "https://www.youtube.com/iframe_api"; let firstScriptTag = document.getElementsByTagName('script')[0]; firstScriptTag.parentNode.insertBefore(tag, firstScriptTag); } let onYouTubeIframeAPIReadyCallbacks = []; for (let playerWrap of document.querySelectorAll(".hytPlayerWrap")) { let playerFrame = playerWrap.querySelector("iframe"); let onPlayerStateChange = function (event) { if (event.data == YT.PlayerState.ENDED) { playerWrap.classList.add("ended"); } else if (event.data == YT.PlayerState.PAUSED) { playerWrap.classList.add("paused"); } else if (event.data == YT.PlayerState.PLAYING) { playerWrap.classList.remove("ended"); playerWrap.classList.remove("paused"); } }; let player; onYouTubeIframeAPIReadyCallbacks.push(function () { player = new YT.Player(playerFrame, { events: { 'onStateChange': onPlayerStateChange } }); }); playerWrap.addEventListener("click", function () { let playerState = player.getPlayerState(); if (playerState == YT.PlayerState.ENDED) { player.seekTo(0); } else if (playerState == YT.PlayerState.PAUSED) { player.playVideo(); } }); } window.onYouTubeIframeAPIReady = function () { for (let callback of onYouTubeIframeAPIReadyCallbacks) { callback(); } }; window.hideYTActivated = true; });</script>
        -->
    </body>
</html>
