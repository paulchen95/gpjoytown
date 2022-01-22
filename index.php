<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Joytown Service</title>
    </head>
    <body>
        <div style="height:720px; width:1280px; overflow: hidden;">
            <iframe width="1280"
                src="https://www.youtube.com/embed/<?php echo htmlspecialchars($_GET['id']); 
                    ?>?theme=dark&autoplay=1&autohide=0&cc_load_policy=1&modestbranding=1&fs=1&showinfo=0&rel=0&iv_load_policy=3&mute=0&loop=1"   
                style="height:720px; background:#000000; bottom: 0px; position: relative;"  
                sandbox="allow-forms allow-scripts allow-pointer-lock allow-same-origin allow-top-navigation"
                allowfullscreen>
            </iframe>
        </div>
    </body>
</html>
