    <!-- ========== GALLERY ========== -->
    <section class="gallery">
        <div class="container">
          <div class="section-title">
            <h4>HIMARA. <span class="text-himara">GALLERY</span></h4>
            <p class="section-subtitle">Check out our image gallery</p>
            <a href="gallery.html" class="view-all">View gallery images</a>
          </div>
          <div class="gallery-owl owl-carousel image-gallery">
            <!-- ITEM -->
            @foreach ($gallery as $gal)
            <div class="gallery-item">
              <figure class="gradient-overlay image-icon">
                <a href="/images/gallery/{{ $gal->image }}">
                  <img src="/images/gallery/{{ $gal->image }}" alt="Image">
                </a>
                <figcaption>{{ $gal->title}}</figcaption>
              </figure>
            </div>
            @endforeach
          </div>
        </div>
      </section>