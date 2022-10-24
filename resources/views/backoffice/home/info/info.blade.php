    <!-- ========== CONTACT V2 ========== -->
    <section class="contact-v2 gray p-5">
        
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <div class="section-title">
                <h4>GET IN TOUCH</h4>
                <p class="section-subtitle">Get in touch</p>
              </div>
              <ul class="contact-details">
                <li>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  {{ $contact->location}}
                </li>
                <li>
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  Phone: {{ $contact->phone}}
                </li>
                <li>
                  <i class="fa fa-fax"></i>
                  Fax: {{ $contact->fax}}
                </li>
                <li>
                  <i class="fa fa-globe"></i>
                  Web: {{ $contact->website}}
                </li>
                <li>
                  <i class="fa fa-envelope"></i>
                  Email:
                  <a href="mailto:info@site.com">{{ $contact->email}}</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </section>

