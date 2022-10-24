      <!-- ========== MAIN ========== -->
      <main class="gallery-page">
        <!-- FILTERS -->
        <div class="container">
          <div class="gallery-filters">
            @foreach ($gallerycat as $cat)
              <a href="#" data-filter="*" class="filter active">{{ $cat->category}}</a>
            @endforeach
            
          </div>
        </div>
        <!-- GALLERY -->
        <div class="container">
          <div class="grid image-gallery row">
            <!-- ITEM -->
            @foreach ($gallery as $image)
            <div class="gallery-item filter-swimmingpool col-md-3">
              <figure class="gradient-overlay image-icon">
                <a href="images/gallery/gallery1.jpg">
                  <img src="{{$image->image}}" class="img-fluid" alt="Image">
                </a>
                <figcaption>{{$image->title}}</figcaption>
              </figure>
            </div>
            @endforeach
          </div>
        </div>
      </main>