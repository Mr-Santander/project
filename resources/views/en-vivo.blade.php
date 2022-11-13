<x-app-layout>
    <div class="container">
        <div class=" fm-video">
        <script>window.addEventListener("resize",ons);function ons(){
            let players = Array.prototype.slice.call( document.getElementsByClassName("iframePlayerCustom"));
            players.forEach(function(player) {
                let wdt = player.offsetWidth/(16/9);player.style.height=(wdt+"px");
                });}ons();
        </script>

        <iframe class="iframePlayerCustom" src="https://player.instantvideocloud.net/#/embed/00d77fad" frameborder="0" width="100%" height="100%" allowfullscreen  onload="ons()">
        </iframe> 
        </div>
    </div>
</x-app-layout>