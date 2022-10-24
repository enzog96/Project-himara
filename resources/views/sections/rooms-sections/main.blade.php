    <!-- ========== MAIN ========== -->
    <main class="rooms-list-view">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-12">
              <!-- ITEM -->
              @foreach ($rooms as $room)
              <div class="room-list-item">
                <div class="row">
                  <div class="col-lg-5">
                    <figure class="gradient-overlay-hover link-icon">
                      <a href="/rooms-list/{{$room->id}}"><img src="/images/rooms/{{ $room->image }}" class="img-fluid" alt="Image"></a>
                    </figure>
                  </div>
                  <div class="col-lg-5">
                    <div class="room-info">
                      <h3 class="room-title">
                        <a href="room.html">{{$room->title}}</a>
                      </h3>
                      <span class="room-rates">
                        @for ($i = 0; $i < $room->stars ; $i++)
                        <i class="fa fa-star voted" aria-hidden="true"></i>
                      @endfor
                      @if ($room->stars < 5)
                          @for ($i = 0; $i < 5 - $room->stars; $i++)
                          <i class="fa fa-star" aria-hidden="true"></i>
                          @endfor
                      @endif
                        <a href="room.html#room-reviews">{{$room->rating}}</a>
                      </span>
                      <p>{{$room->smalldescription}}</p>
                      <div class="room-services">
                        <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover"
                          data-content="Breakfast Included" data-original-title="Breakfast"></i>
                        <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover"
                          data-content="Free WiFi" data-original-title="WiFi"></i>
                        <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover"
                          data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                        <span>Beds: {{$room->bed}}</span>
                        <span>Max Guests: {{$room->guest}}</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="room-price">
                      <span class="price">{{$room->price}} / night</span>
                      <a href="/rooms-list/{{$room->id}}" class="btn btn-sm">view <br> details</a>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              <!-- PAGINATION -->
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
                  <li>...</li>
                  <li>
                    <a href="#">7</a>
                  </li>
                  <li>
                    <a href="#">8</a>
                  </li>
                  <li>
                    <a href="#">9</a>
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
                    @foreach ($roomcate as $cate)
                    <li>
                      <a href="#">{{$cate->category}}<span class="posts-num">51</span></a>
                    </li>
                    @endforeach
                  </ul>
                </aside>
                <!-- WIDGET -->
                <aside class="widget">
                  <h4 class="widget-title">Tags</h4>
                  <div class="tagcloud">
                    @foreach ($tags as $tag)
                    <a href="#">
                      <span class="tag">{{$tag->tag}}</span>
                    </a>
                    @endforeach
                  </div>
                </aside>
              </div>
            </div>
          </div>
        </div>
      </main>