<style>
  #iframe-video-embed {
    width: 60vw;
    height: 80vh;
    border-radius: 14px;
  }

  @media screen and (max-width: 560px) {
    #iframe-video-embed {
      width: 80vw;
      height: 70vh;
    }
  }
</style>

<div class="embed-responsive embed-responsive-16by9 text-center p-5">
  <iframe class="embed-responsive-item img-fluid" src="{{ $slot }}" allowfullscreen id="iframe-video-embed"></iframe>
</div>  
