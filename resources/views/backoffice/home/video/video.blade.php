    <!-- ========== VIDEO ========== -->
    @foreach ($videos as $video)
    <section class="video np parallax gradient-overlay op6" data-parallax="scroll"
    data-speed="0.3" data-mirror-selector=".wrapper" data-z-index="0" style="background-image:url('/images/{{ $video->image }}')">
    <div class="inner gradient-overlay">
      <div class="container">
        <div class="video-popup">
          <a class="popup-vimeo" href="{{ $video->videoUrl}}">
            <i class="fa fa-play"></i>
          </a>
        </div>
      </div>
    </div>
  </section>
    @endforeach