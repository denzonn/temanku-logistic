<div class="site-wrap">
    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<div class="row g-0 align-items-center">
						<div class="col-2">
							<img src="{{ asset('images/5 (1)-Photoroom.png') }}" class="site-logo">
						</div>
						<div class="col-8 text-center ">
							<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
								<li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
								<li class="{{ request()->is('service*') ? 'active' : '' }}"><a href="{{ route('service') }}">Services</a></li>
								<li class="{{ request()->is('about*') ? 'active' : '' }}"><a href="{{ route('about') }}">Tentang Kami</a></li>
								<li class="{{ request()->is('contact*') ? 'active' : '' }}"><a href="{{ route('contact') }}">Kontak</a></li>
								<li class="{{ request()->is('cek-resi*') ? 'active' : '' }}"><a href="{{ route('cek-resi') }}">Cek Resi</a></li>
							</ul>
						</div>
						<div class="col-2 text-end">
							<a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
								<span></span>
							</a>
							<a href="https://wa.me/message/VCWHU6KIILNPF1" class="call-us d-flex align-items-center">
								<span class="icon-phone"></span>
								<span>0853 9893 2121</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
</div>
