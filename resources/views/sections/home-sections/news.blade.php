    <!-- ========== NEWS ==========-->
    <section class="news">
        <div class="container">
          <div class="section-title">
            <h4 class="title">LATEST NEWS</h4>
            <p class="section-subtitle">Check out our latest news</p>
          </div>
          <div class="row">
            <!-- ITEM -->
            @foreach ($articles as $article)
            <div class="col-md-4">
              <div class="news-grid-item">
                <figure class="gradient-overlay-hover link-icon">
                  <a href="blog-post.html">
                    <img src="{{ $article->image}}" class="img-fluid" alt="Image">
                  </a>
                </figure>
                <div class="news-info">
                  <h4 class="title">
                    <a href="blog-post.html">{{ $article->title}}</a>
                  </h4>
                  <p>{{ $article->description}}</p>
                  <div class="post-meta">
                    <span class="author">
                      <a href="#"><img src="{{ $article->authorimage}}" width="16" alt="Image">
                        {{ $article->author}}</a>
                    </span>
                    <span class="date">
                      <i class="fa fa-clock-o"></i>
                      August 13, 2017</span>
                    <span class="comments">
                      <a href="#">
                        <i class="fa fa-commenting-o"></i>
                        {{ $article->comments}} Comment</a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </section>