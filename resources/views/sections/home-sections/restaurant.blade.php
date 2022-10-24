    <!-- ========== RESTAURANT ========== -->
    @foreach ($restaurantbg as $bg)
    <section class="restaurant image-bg parallax gradient-overlay op5"
    data-parallax="scroll" data-speed="0.3" data-mirror-selector=".wrapper" data-z-index="0" style="background-image:url('/images/{{ $bg->bg }}'); background-repeat:no-repeat; background-size:cover;">
    <div class="container">
      <div class="section-title">
        <h4>HIMARA. RESTAURANT</h4>
        <p class="section-subtitle">Live a gourmet dining experience</p>
      </div>
      <div class="row">
        <!-- ITEM -->
        @foreach ($restaurants as $restaurant)
        <div class="col-md-6 col-sm-6 col-6">
          <div class="restaurant-menu-item">
            <div class="row">
              <div class="col-lg-4 col-12">
                <figure>
                  <img src="/images/restaurant/{{ $restaurant->image }}" class="img-fluid " alt="Image">
                </figure>
              </div>
              <div class="col-lg-8 col-12">
                <div class="info">
                  <div class="title">
                    <span class="name">{{ $restaurant->title}}</span>
                    <span class="price">
                      <span class="amount">{{ $restaurant->price}}</span>
                    </span>
                  </div>
                  <p>{{ $restaurant->description}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </section>
    @endforeach
