<div class="image-load" style="display: flex; justify-content: center;">
    <img id="loading-gif" src="public/image/gif.gif" style="position: absolute; top: 243px;">
</div>
<script>
function showgif(){
    const Loadingimage = document.getElementById('loading-gif');
    if(Loadingimage){
        Loadingimage.style.display = 'block';
    }
}
    window.addEventListener('load', function(){
        const Loadingimage = document.getElementById('loading-gif');
        if(Loadingimage){
            Loadingimage.style.display ='none';
        }
    });

</script>