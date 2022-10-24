    <!-- ========== ABOUT ========== -->
    <section class="about mt100">
      @foreach ($description as $descri)
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="section-title">
              <h4 class="text-uppercase">{{ $descri->title}}</h4>
              <p class="section-subtitle">{{ $descri->subtitle}}</p>
            </div>
            <div class="info-branding">
              <p>{{ $descri->description}}</p>
              <div class="providers">
                <span>Recommended on:</span>
                <!-- ITEM -->
                <div class="item">
                  <a href="#">
                    <img src="images/providers/provider-1.png" alt="Image">
                  </a>
                </div>
                <!-- ITEM -->
                <div class="item">
                  <a href="#">
                    <img src="images/providers/provider-2.png" alt="Image">
                  </a>
                </div>
                <!-- ITEM -->
                <div class="item">
                  <a href="#">
                    <img src="images/providers/provider-3.png" alt="Image">
                  </a>
                </div>
                <!-- ITEM -->
                <div class="item">
                  <a href="#">
                    <img src="images/providers/provider-4.png" alt="Image">
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="brand-info">
              <div class="inner">
                <div class="content">
                  <img src="/images/{{ $descri->logo }}" width="100" alt="Image">
                  <div class="stars">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>
                  <h5 class="title">{{ $descri->title2}}</h5>
                  <p class="mt20">{{ $descri->description2}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
        
      </section>