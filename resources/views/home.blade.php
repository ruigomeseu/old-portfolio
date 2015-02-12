@extends('app')

@section('content')

	<!-- start slider -->
	<header class="header" id="home">
		<div class="fixed-text">
			<div class="w-container slider-container">
				<div class="first_text">Rui Gomes &mdash; web developer</div>
				<div class="dots_line"></div>
				<div class="w-slider slider_home" data-animation="outin" data-duration="800" data-infinite="1" data-delay="8000" data-autoplay="1">
					<div class="w-slider-mask">
						<div class="w-slide slide-1-home"><!-- slide 1 -->
							<div class="tittle_text"><span class="light"></span>Web apps <span class="light">for</span> purpose-driven <span class="light">companies</span>
							</div>
						</div>
						<div class="w-slide slide-2-home"><!-- slide 2 -->
							<div class="tittle_text slide_2"><span class="light">Building</span> brands
								<br><span class="light">that tell a</span> story
							</div>
						</div>
					</div>
					<div class="w-slider-arrow-left hide-arrow">
						<div class="w-icon-slider-left"></div>
					</div>
					<div class="w-slider-arrow-right hide-arrow">
						<div class="w-icon-slider-right"></div>
					</div>
					<div class="w-slider-nav w-round slide-nav"></div>
				</div><a class="button slider" href="#about">tell me more</a>
			</div>
		</div><!-- end slider -->
		<!-- start dots navigation -->
		<div class="w-hidden-medium w-hidden-small w-hidden-tiny dot-container" id="hide">
			<a class="w-inline-block dot-link" href="#home"></a>
			<a class="w-inline-block dot-link" href="#about"></a>
			<a class="w-inline-block dot-link" href="#service"></a>
			<a class="w-inline-block dot-link" href="#portfolio"></a>
			<a class="w-inline-block dot-link" href="#contact"></a>
		</div><!-- end dots navigation -->
	</header>
	<!-- TEAM SECTION -->
	<section class="section-team" id="about">
		<div class="w-container">
			<h2>ABOUT&nbsp;ME</h2>
			<div class="hero-line"></div>
			<div class="w-row team-row">
				<div class="w-col w-col-12 team-column"><!-- staf member 1 -->
					<a class="w-inline-block" href="#">
						<img src="https://www.gravatar.com/avatar/8d93deef2699bc4277a71c00e56b3959.jpg?s=200" width="200" alt="Rui Gomes' Avatar" style="border-radius: 50%;-moz-border-radius: 50%; -webkit-border-radius: 50%;">
					</a>
					<h5>Rui&nbsp;Gomes</h5>
					<div class="hero-work">web developer, product creator</div>
					<div class="team-line orange"></div>
					<p>&nbsp;Currently studying to hold a Master in Informatics and Computing Engineering.<br />
						Looking forward for exciting web development projects.<br />Available for hire. </p>
					<div class="social-icon"><a class="twitter" href="{{ Config::get('social.twitter') }}">twitter</a><a class="linkedin" href="{{ Config::get('social.linkedin') }}">linkedIn</a><a class="email" href="mailto:{{ Config::get('social.email') }}" target="_blank">e-mail</a>
					</div>
				</div>
			</div>
			<div class="wrap-button"><a class="button" href="#contact">Get in touch</a>
			</div>
		</div><!-- end team section -->
		<!-- SERVICE SECTION -->
	</section>
	<section class="service-section" id="service">
		<div class="w-container">
			<h2>What I Do</h2>
			<div class="hero-line"></div>
			<div class="w-row service-row">
				<div class="w-col w-col-4">
					<div class="icon fa fa-laptop fa-3x"></div>
					<h5>Web Development</h5>
					<p>&nbsp;Outstanding web apps development for purpose-driven companies.&nbsp;</p>
				</div>
				<div class="w-col w-col-4">
					<div class="icon fa fa-star fa-3x"></div>
					<h5>Full Stack Development</h5>
					<p>&nbsp;UX/UI design, Brand Management, Development and Hosting. All in one place.&nbsp;</p>
				</div>
				<div class="w-col w-col-4">
					<div class="icon fa fa-mobile fa-3x"></div>
					<h5>Mobile Development</h5>
					<p>&nbsp;Android/iOS paradigm-shifting applications, from development to production.&nbsp;</p>
				</div>
			</div>
			<div class="wrap-button"><a class="button" href="#portfolio">Interested? See my portfolio</a>
			</div>
		</div>
	</section><!-- end service section -->
	<!-- FUNFACTS SECTION -->
	<section class="section-facts">
		<div class="w-row funfacts-row">
			<div class="w-col w-col-3 team-column">
				<h3><span class="timer" data-from="0" data-to="100" data-speed="3000">100</span>%</h3>
				<div class="fun-line"></div>
				<div class="sub-text">Positive feedback</div>
			</div>
			<div class="w-col w-col-3 team-column">
				<h3><span class="timer" data-from="0" data-to="16" data-speed="3000">16</span></h3>
				<div class="fun-line"></div>
				<div class="sub-text">Projects completed</div>
			</div>
			<div class="w-col w-col-3 team-column">
				<h3><span class="timer" data-from="0" data-to="{{ $linesOfCode }}" data-speed="3000">{{ $linesOfCode }}</span></h3>
				<div class="fun-line"></div>
				<div class="sub-text">lines of code</div>
			</div>
			<div class="w-col w-col-3 team-column">
				<h3><span class="timer" data-from="0" data-to="{{ $cupsOfCoffee }}" data-speed="3000">{{ $cupsOfCoffee }}</span></h3>
				<div class="fun-line"></div>
				<div class="sub-text">cups of coffee</div>
			</div>
		</div
				></section><!-- end funfacts section -->
	<!-- color line -->
	<div class="color-line">
		<div class="w-row line-row">
			<div class="w-col w-col-6 color-two"></div>
			<div class="w-col w-col-6 color-three"></div>
		</div>
	</div><!-- end color line div -->
	<!-- WORK SECTION -->
	<section class="work-section">
		<div class="w-row w-hidden-medium work-row" id="portfolio">
			<div class="w-col w-col-6 portfolio-row">
				<a class="w-inline-block portfolio-photo portfolio-2" href="http://blog.ruigomes.me/portfolio-musicmosh/" style="background-image: url('images/musicmosh.png');">
					<div class="portfolio-photo-overlay">
						<div class="portfolio-tittle">Music Mosh</div>
						<div class="portfolio-subtittle">Discover new artists playing near you</div>
					</div>
				</a>
			</div>
			<div class="w-col w-col-6 portfolio-row">
				<a class="w-inline-block portfolio-photo portfolio-2" href="http://blog.ruigomes.me/portfolio-cetasoft-restful-api/" style="background-image: url('images/cetasoft.png');">
					<div class="portfolio-photo-overlay">
						<div class="portfolio-tittle">CETA Software REST API</div>
						<div class="portfolio-subtittle">A RESTful API developed for private use</div>
					</div>
				</a>
			</div>
			<div class="w-col w-col-6 portfolio-row">
				<a class="w-inline-block portfolio-photo portfolio-2" href="http://blog.ruigomes.me/portfolio-vimg-co/" style="background-image: url('images/vimg.png');">
					<div class="portfolio-photo-overlay">
						<div class="portfolio-tittle">Vimg.co</div>
						<div class="portfolio-subtittle">Share what you're seeing with a couple taps</div>
					</div>
				</a>
			</div>
			<div class="w-col w-col-6 portfolio-row">
				<a class="w-inline-block portfolio-photo portfolio-2" href="http://blog.ruigomes.me/helping-my-college-fight-crime-with-antigatunos-com/" style="background-image: url('images/antigatunos.png');">
					<div class="portfolio-photo-overlay">
						<div class="portfolio-tittle">Anti Gatunos</div>
						<div class="portfolio-subtittle">Making college a safer place</div>
					</div>
				</a>
			</div>
		</div>
	</section><!-- end work section -->
	<!-- HERO SECTION -->
	<section class="hero-section">
		<div class="w-container">
			<div class="w-row">
				<div class="w-col w-col-4 hero-column">
					<div class="line-hero"></div>
					<div class="line-hero"></div>
				</div>
				<div class="w-col w-col-4 hero-column"><a class="button hero" href="#contact">Like what you see? Hire me!</a>
				</div>
				<div class="w-col w-col-4">
					<div class="line-hero"></div>
					<div class="line-hero"></div>
				</div>
			</div>
		</div><!-- end hero work -->
	</section>
	<!-- TESTIMONIALS SECTION -->
	<section class="testimonials-section">
		<div class="w-container container">
			<h2>What My Clients Say</h2>
			<div class="hero-line"></div>
			<div class="w-slider testimonials-slider" data-animation="cross" data-duration="500" data-infinite="1" data-hide-arrows="1" data-easing="ease-in-out">
				<div class="w-slider-mask slidermask">
					<div class="w-slide">
						<div class="text-testimonials">
							<div class="textimonials-say">
								Rui is a top-shelf developer.<br />
								<br />
								He is a very thorough programmer with excellent command of his craft. He documents his work clearly and consistently, writes lean code and is very knowledgeable of all the technologies that he'll need for the project.<br />
								<br />
								He works fast and is self directed and at the same time follows directives to the smallest detail. He never hesitates to reach back to clarify issues if anything arises and his English is at a native speaker's level.<br />
								<br />
								We are very happy with Rui's work and we highly recommend him.<br />
							</div>
							<div class="testimonials-name">Daniel Ruiz, <a href="https://www.odesk.com/users/~01e64b0ad75debffdb">oDesk</a></div>
						</div>
					</div>
					<div class="w-slide">
						<div class="text-testimonials">
							<div class="textimonials-say">
								Rui has been a brilliant addition to our small team.<br />
								<br />
								He has worked tirelessly in helping make this project a success and we will definitely hire him again for part two (and any other projects that come along!).<br />
							</div>
							<div class="testimonials-name">Sam Edney, <a href="http://www.cetasoft.net">CETA Software</a></div>
						</div>
					</div>
					<div class="w-slide">
						<div class="text-testimonials">
							<div class="textimonials-say">
								Great work - great communication - great end product.<br />
								<br />Will definitely work with Rui again.
							</div>
							<div class="testimonials-name">Jason Purcell, <a href="https://www.odesk.com/users/~01e64b0ad75debffdb">oDesk</a></div>
						</div>
					</div>
					<div class="w-slide">
						<div class="text-testimonials"><!-- slide 2 -->
							<div class="textimonials-say">
								Rui built a full user account management/auth/registration system for a web app, using Laravel on a Digital Ocean Ubuntu LEMP stack.<br />
								<br />
								He communicated very clearly and quickly, and finished the project with a very speedy turnaround time.<br />
								<br />
								In addition to his Laravel and web app expertise he is proficient and adept in server management/configuration. He was flexible and intuitive during the discussion of the specs, and again during the delivery of the configured server.<br />
								<br />
								We did all our communication via email, and his written english was perfect.<br />
								<br />
								I recommend him in the highest of terms for web app, server config/admin, and PHP development, and will absolutely return to him for further projects.<br />
							</div>
							<div class="testimonials-name">Mark Heath, <a href="https://www.odesk.com/users/~01e64b0ad75debffdb">oDesk</a></div>
						</div>
					</div>
					<div class="w-slide">
						<div class="text-testimonials"><!-- slide 3 -->
							<div class="textimonials-say">
								Rui is quite nice to work with.<br/>
								<br/>
								Would recommend.
							</div>
							<div class="testimonials-name">Harrison Hung, <a href="http://www.keepusup.com/">KeepUsUp</a></div>
						</div>
					</div>
				</div>
				<div class="w-slider-arrow-left">
					<div class="w-icon-slider-left left-arrow"></div>
				</div>
				<div class="w-slider-arrow-right">
					<div class="w-icon-slider-right right-arrow"></div>
				</div>
			</div>
		</div>
	</section><!-- end testimonials section -->

	<!-- GET IN TOUCH SECTION -->
	<section class="touch-section">
		<div class="w-container container">
			<h2 class="h2-testimonials">stay tuned</h2>
			<div class="hero-line"></div>
			<div class="w-row connetcted-row">
				<div class="w-col w-col-3 column-connected team-column">
					<a href="{{ Config::get('social.twitter') }}"><div class="connect fa fa-twitter fa-4x"></div></a>
					<div class="connected-name">Twitter</div>
					<div class="connected-subtext">Follow my thoughts</div>
				</div>
				<div class="w-col w-col-3 column-connected team-column">
					<a href="{{ Config::get('social.github') }}"><div class="connect fa fa-github fa-4x"></div></a>
					<div class="connected-name">Github</div>
					<div class="connected-subtext">My OSS contributions</div>
				</div>
				<div class="w-col w-col-3 column-connected team-column">
					<a href="{{ Config::get('social.linkedin') }}"><div class="connect fa fa-linkedin fa-4x"></div></a>
					<div class="connected-name">LinkedIn</div>
					<div class="connected-subtext">Connect with me</div>
				</div>
				<div class="w-col w-col-3 column-connected">
					<a href="{{ Config::get('social.blog') }}"><div class="connect fa fa-bars fa-4x"></div></a>
					<div class="connected-name">Blog</div>
					<div class="connected-subtext">Read my blog</div>
				</div>
			</div>
		</div>
	</section><!-- end logo section -->
	<!-- CONTACT SECTION -->
	<section class="contact-section" id="contact">
		<div class="w-container">
			<h2>GET IN TOUCH</h2>
			<div class="hero-line"></div>
			<div class="w-row row form">
				<div class="w-col w-col-8">
					@if(Session::has('message'))
						<div class="success-message">
							<p class="success">{{ Session::get('message') }}</p>
						</div>
						<br />
					@endif

					{!! Form::open(array('url' => '/')) !!}
					{!! Form::label('name', null, ['class' => 'field-label']) !!}
					{!! Form::text('name', Input::old('name'), ['class' => 'w-input text-field']) !!}

					{!! Form::label('email', null, ['class' => 'field-label']) !!}
					{!! Form::text('email', Input::old('email'), ['class' => 'w-input text-field']) !!}

					{!! Form::label('subject', null, ['class' => 'field-label']) !!}
					{!! Form::text('subject', Input::old('subject'), ['class' => 'w-input text-field']) !!}

					{!! Form::label('message', null, ['class' => 'field-label']) !!}
					{!! Form::textarea('message', Input::old('message'), ['class' => 'w-input text-area', 'rows' => '5']) !!}

					{!! Form::submit('Send Message', ['class' => 'w-button submit-button']) !!}

					{!! Form::close() !!}

				</div>
				<div class="w-col w-col-4 column-work">
					<div class="small-tittle">Rui Gomes</div>
					<p class="left"><span class="darker">Phone:</span> {{ Config::get('social.number') }}
						<br><span class="darker">Email:</span>&nbsp;<a href="mailto:{{ Config::get('social.mail') }}" style="text-decoration:underline; color:#999;">hello@ruigomes.me</a>
						<br><span class="darker">Twitter:</span>&nbsp;<a href="{{ Config::get('social.twitter') }}" style="text-decoration:underline; color:#999;">@ruigomeseu</a>
						<br><span class="darker">LinkedIn:</span>&nbsp;<a href="{{ Config::get('social.linkedin') }}" style="text-decoration:underline; color:#999;">Rui Gomes</a>
				</div>
			</div>
		</div>
	</section><!-- end contact section -->

@endsection
