    <!-- ========== TESTIMONIALS ========== -->
    <section class="testimonials gray">
        <div class="container">
          <div class="section-title">
            <h4>OUR GUESTS LOVE US</h4>
            <p class="section-subtitle">What our guests are saying about us</p>
          </div>
          <div class="owl-carousel testimonials-owl">
            <!-- ITEM -->
            @foreach ($reviews as $review)
            <div class="item">
              <div class="testimonial-item">
                <div class="author-img">
                  <img alt="Image" class="img-fluid" src="{{ $review->image}}">
                </div>
                <div class="author">
                  <h4 class="name">{{ $review->name}}</h4>
                  <div class="location">{{ $review->location}}</div>
                </div>
                <div class="rating">
                  @for ($i = 0; $i < $review->stars ; $i++)
                    <i class="fa fa-star voted" aria-hidden="true"></i>
                  @endfor
                  @if ($review->stars < 5)
                      @for ($i = 0; $i < 5 - $review->stars; $i++)
                      <i class="fa fa-star" aria-hidden="true"></i>
                      @endfor
                  @endif
                </div>
                <p>{{ $review->description}}</p>
              </div>
            </div>  
            @endforeach   
          </div>
        </div>
      </section>