@extends('client.layouts.client')

@section('content')

    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center mb-4 mb-sm-0" style="background-image:url({{asset('client/images/about.jpg')}});">
    					<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
    						<span class="fa fa-play"></span>
    					</a>
    				</div>
    			</div>
    			<div class="col-md-6 pl-md-5">
    				<div class="row justify-content-start py-5">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Welcome to Roofing</span>
		            <h2 class="mb-4">We help more than 65 years serving Roofing Industry</h2>
		            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
</p>
		            <div class="tabulation-2 mt-4">
									<ul class="nav nav-pills nav-fill d-md-flex d-block">
									  <li class="nav-item mb-md-0 mb-2">
									    <a class="nav-link active py-2" data-toggle="tab" href="#home1">Our Mission</a>
									  </li>
									  <li class="nav-item px-lg-2 mb-md-0 mb-2">
									    <a class="nav-link py-2" data-toggle="tab" href="#home2">Our Vision</a>
									  </li>
									  <li class="nav-item">
									    <a class="nav-link py-2 mb-md-0 mb-2" data-toggle="tab" href="#home3">Our Value</a>
									  </li>
									</ul>
									<div class="tab-content rounded mt-2">
									  <div class="tab-pane container p-0 active" id="home1">
									  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home2">
									  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home3">
									  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									  </div>
									</div>
								</div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-counter" id="section-counter">
    	<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
              	<div class="icon"><span class="fa fa-calendar"></span></div>
                <strong class="number" data-number="45">0</strong>
              	<span>Years of Experienced</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
              	<div class="icon"><span class="fa fa-briefcase"></span></div>
                <strong class="number" data-number="8500">0</strong>
              	<span>Project completed</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
              	<div class="icon"><span class="fa fa-users"></span></div>
                <strong class="number" data-number="2342">0</strong>
              	<span>Happy Clients</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
              	<div class="icon"><span class="fa fa-bar-chart"></span></div>
                <strong class="number" data-number="30">0</strong>
              	<span>Business Partners</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Our Best Services</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-9">
		  			<div class="row tabulation mt-4 ftco-animate">
		  				<div class="col-md-4">
								<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
								  <li class="nav-item text-left">
								    <a class="nav-link active py-4" data-toggle="tab" href="#services-1"><span class="flaticon-roof mr-2"></span> Skylights</a>
								  </li>
								  <li class="nav-item text-left">
								    <a class="nav-link py-4" data-toggle="tab" href="#services-2"><span class="flaticon-roof-1 mr-2"></span> Waterproofing</a>
								  </li>
								  <li class="nav-item text-left">
								    <a class="nav-link py-4" data-toggle="tab" href="#services-3"><span class="flaticon-roof-5 mr-2"></span> Industrial Roofing</a>
								  </li>
								  <li class="nav-item text-left">
								    <a class="nav-link py-4" data-toggle="tab" href="#services-4"><span class="flaticon-roof-2 mr-2"></span> Residential Roofing</a>
								  </li>
								  <li class="nav-item text-left">
								    <a class="nav-link py-4" data-toggle="tab" href="#services-5"><span class="flaticon-roof-3 mr-2"></span> Gutter Cleaning</a>
								  </li>
								  <li class="nav-item text-left">
								    <a class="nav-link border-bottom py-4" data-toggle="tab" href="#services-6"><span class="flaticon-roof-4 mr-2"></span> Commercial Roofing</a>
								  </li>
								</ul>
							</div>
							<div class="col-md-8 pl-md-4">
								<div class="tab-content">
								  <div class="tab-pane container p-0 active" id="services-1">
								  	<h3><a href="#">Skylights</a></h3>
								  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								  	<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
								  	<ul>
								  		<li><span class="fa fa-check"></span>The Big Oxmox advised her not to do so</li>
								  		<li><span class="fa fa-check"></span>Far far away, behind the word mountains</li>
								  		<li><span class="fa fa-check"></span>Separated they live in Bookmarksgrove</li>
								  		<li><span class="fa fa-check"></span>She packed her seven versalia</li>
								  		<li><span class="fa fa-check"></span>Little Blind Text didn’t listen</li>
								  	</ul>

								  </div>
								  <div class="tab-pane container p-0 fade" id="services-2">
								  	<h3><a href="#">Waterproofing</a></h3>
								  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								  	<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
								  	<ul>
								  		<li><span class="fa fa-check"></span>The Big Oxmox advised her not to do so</li>
								  		<li><span class="fa fa-check"></span>Far far away, behind the word mountains</li>
								  		<li><span class="fa fa-check"></span>Separated they live in Bookmarksgrove</li>
								  		<li><span class="fa fa-check"></span>She packed her seven versalia</li>
								  		<li><span class="fa fa-check"></span>Little Blind Text didn’t listen</li>
								  	</ul>
								  </div>
								  <div class="tab-pane container p-0 fade" id="services-3">
								  	<h3><a href="#">Industrial Roofing</a></h3>
								  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								  	<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
								  	<ul>
								  		<li><span class="fa fa-check"></span>The Big Oxmox advised her not to do so</li>
								  		<li><span class="fa fa-check"></span>Far far away, behind the word mountains</li>
								  		<li><span class="fa fa-check"></span>Separated they live in Bookmarksgrove</li>
								  		<li><span class="fa fa-check"></span>She packed her seven versalia</li>
								  		<li><span class="fa fa-check"></span>Little Blind Text didn’t listen</li>
								  	</ul>
								  </div>
								  <div class="tab-pane container p-0 fade" id="services-4">
								  	<h3><a href="#">Residential Roofing</a></h3>
								  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								  	<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
								  	<ul>
								  		<li><span class="fa fa-check"></span>The Big Oxmox advised her not to do so</li>
								  		<li><span class="fa fa-check"></span>Far far away, behind the word mountains</li>
								  		<li><span class="fa fa-check"></span>Separated they live in Bookmarksgrove</li>
								  		<li><span class="fa fa-check"></span>She packed her seven versalia</li>
								  		<li><span class="fa fa-check"></span>Little Blind Text didn’t listen</li>
								  	</ul>
								  </div>
								  <div class="tab-pane container p-0 fade" id="services-5">
								  	<h3><a href="#">Gutter Cleaning</a></h3>
								  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								  	<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
								  	<ul>
								  		<li><span class="fa fa-check"></span>The Big Oxmox advised her not to do so</li>
								  		<li><span class="fa fa-check"></span>Far far away, behind the word mountains</li>
								  		<li><span class="fa fa-check"></span>Separated they live in Bookmarksgrove</li>
								  		<li><span class="fa fa-check"></span>She packed her seven versalia</li>
								  		<li><span class="fa fa-check"></span>Little Blind Text didn’t listen</li>
								  	</ul>
								  </div>
								  <div class="tab-pane container p-0 fade" id="services-6">
								  	<h3><a href="#">Commercial Roofing</a></h3>
								  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								  	<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
								  	<ul>
								  		<li><span class="fa fa-check"></span>The Big Oxmox advised her not to do so</li>
								  		<li><span class="fa fa-check"></span>Far far away, behind the word mountains</li>
								  		<li><span class="fa fa-check"></span>Separated they live in Bookmarksgrove</li>
								  		<li><span class="fa fa-check"></span>She packed her seven versalia</li>
								  		<li><span class="fa fa-check"></span>Little Blind Text didn’t listen</li>
								  	</ul>
								  </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 d-flex align-items-stretch">
						<div class="img" style="background-image: url(images/about.jpg);"></div>
					</div>
				</div>
    	</div>
    </section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Testimonies</span>
            <h2>Happy Clients &amp; Feedbacks</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection