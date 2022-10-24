      <!-- ========== MAIN ========== -->
      <main class="location-page">
        <div class="container">
          <div class="row">
            <!-- ITEM -->
            @foreach ($members as $member)
            <div class="col-lg-3 col-md-6">
              <div class="staff-item mt-5">
                <figure>
                  <img src="/images/staff/{{ $member->image }}" class="img-fluid" alt="Image">
                  <div class="position">{{$member->status}}</div>
                </figure>
                <div class="details">
                  <h5>{{$member->name}}</h5>
                  <p>{{$member->description}}</p>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </main>