      <!-- ========== MAIN ========== -->
      <main>
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-12">
              <!-- POSTS -->
              <div class="blog-posts">
                <!-- POST -->
                @foreach ($articles as $article)
                <article class="post">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="post-thumbnail">
                        <figure class="gradient-overlay-hover link-icon">
                          <a href="{{ $article->image}}">
                            <img src="{{ $article->image}}" class="img-fluid" alt="Image">
                          </a>
                        </figure>
                      </div>
                    </div>
                    <div class="col-sm-8">
                      <div class="post-details">
                        <h2 class="post-title">
                          <a href="blog-post.html">{{ $article->title}}</a>
                        </h2>
                        <div class="post-meta">
                          <span class="author">
                            <a href="#"><img src="{{ $article->authorimage}}" width="16" alt="Image">{{ $article->author}}</a>
                          </span>
                          <span class="date">
                            <a href="#">
                              <i class="fa fa-clock-o"></i>August 13, 2017</a>
                          </span>
                          <span class="comments">
                            <a href="#">
                              <i class="fa fa-commenting-o"></i>{{ $article->comments}} Comment</a>
                          </span>
                          <span class="category">
                            <i class="fa fa-folder-open-o"></i>IN
                            <a href="#">News</a>,
                            <a href="#">Events</a>
                          </span>
                        </div>
                        <p>{{ $article->description}}</p>
                      </div>
                    </div>
                  </div>
                </article>
                @endforeach
              </div>
              <!-- ========== PAGINATION ========== -->
              <nav class="pagination">
                <ul>
                  <li class="prev-pagination">
                    <a href="#">
                      &nbsp;<i class="fa fa-angle-left"></i>
                      Previous &nbsp;</a>
                  </li>
                  <li class="active">
                    <a href="#">1</a>
                  </li>
                  <li>
                    <a href="#">2</a>
                  </li>
                  <li>
                    <a href="#">3</a>
                  </li>
                  <li>
                    <a href="#">4</a>
                  </li>
                  <li>
                    <a href="#">5</a>
                  </li>
                  <li>...</li>
                  <li>
                    <a href="#">18</a>
                  </li>
                  <li>
                    <a href="#">19</a>
                  </li>
                  <li>
                    <a href="#">20</a>
                  </li>
                  <li class="next_pagination">
                    <a href="#">
                      &nbsp; Next
                      <i class="fa fa-angle-right"></i>
                      &nbsp;
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
            <!-- SIDEBAR -->
            <div class="col-lg-3 col-12">
              <div class="sidebar">
                <aside class="widget noborder">
                  <div class="search">
                    <form class="widget-search">
                      <input type="search" placeholder="Search">
                      <button class="btn-search" id="searchsubmit" type="submit">
                        <i class="fa fa-search"></i>
                      </button>
                    </form>
                  </div>
                </aside>
                <!-- WIDGET -->
                <aside class="widget">
                  <h4 class="widget-title">CATEGORIES</h4>
                  <ul class="categories">
                    @foreach ($blogcategories as $categories)
                    <li>
                      <a href="#">{{$categories->category}}<span class="posts-num">51</span></a>
                    </li>
                    @endforeach                 
                  </ul>
                </aside>
                <!-- WIDGET -->
                <aside class="widget">
                  <h4 class="widget-title">Latest Posts</h4>
                  <div class="latest-posts">
                    <!-- ITEM -->
                    @foreach ($articles as $article)
                    <div class="latest-post-item">
                      <div class="row">
                        <div class="col-5">
                          <figure class="gradient-overlay-hover link-icon sm">
                            <a href="blog-post.html">
                              <img src="{{$article->image}}" class="img-fluid" alt="Image">
                            </a>
                          </figure>
                        </div>
                        <div class="col-7">
                          <div class="post-details">
                            <h6 class="post-title">
                              <a href="blog-post.html">{{$article->title}}</a>
                            </h6>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </aside>
                <!-- WIDGET -->
                <aside class="widget">
                  <h4 class="widget-title">Tags</h4>
                  <div class="tagcloud">
                    @foreach ($articletags as $tag)
                    <a href="#"> <span class="tag">{{$tag->tag}}</span></a>  
                    @endforeach
                  </div>
                </aside>
              </div>
            </div>
          </div>
        </div>
      </main>