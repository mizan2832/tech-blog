<!-- /*
* Template Name: Blogy
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
	@include('front.include.head_footer.head')
</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	@include('front.include.nav.header')

	<!-- Start retroy layout blog posts -->
	@yield('content')


    @include('front.include.head_footer.footer')
<!-- /.site-footer -->

    <!-- Preloader -->
    

    
  </body>
  </html>
