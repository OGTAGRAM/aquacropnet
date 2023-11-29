<!DOCTYPE HTML>
<html>
	<head>
		<title>AquaCropNet.</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <link rel="icon" type="image/png" href="images/iconn.png">
        <link href='https://fonts.googleapis.com/css2?family=Montserrat&family=Philosopher:wght@700&display=swap' rel='stylesheet'>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="/dashboard" class="logo"><span style="font-family:'Montserrat', sans-serif; color:white;">Aqua</span><span style="font-family:'Montserrat', sans-serif; color:#4F6F52">Cropnet.</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
                            <li><a href=""> <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>
                            </button></a></li>
							<li><a href="/">Home</a></li>
							<li><a href="/kabarr">Kabar</a></li>
							<li><a href="/kiatt">Kiat</a></li>
							<li><a href="/vidioo">Video</a></li>
                            <li><a href="/storee">Store</a></li>
                            <li><a href=""><x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link></a></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit">Keluar</button>
                                </form>                                
                            </li>
						</ul>
					</nav>

				<!-- Banner -->
					<section id="banner" class="major">
                        <span class="image">
                            <img src="images/rorr.jpg" alt="" />
                        </span>
						<div class="inner">
							<header class="major">
								<h1>Welcome to AquaCropNet.</h1>
							</header>
							<div class="content">
								<p>Selamat datang di situs informasi pertanian dan nelayan! Temukan tips terbaru dan berita seputar pertanian dan nelayan di sini. Mari bersama-sama perkuat komunitas petani dan nelayan untuk masa depan yang lebih baik!</p>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="images/kabar.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="/kabarr" class="link">Kabar</a></h3>
										<p>Kabar terkini bagi petani dan nelayan</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/kiat.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="kiatt" class="link">Kiat</a></h3>
										<p>Kiat singkat dan mudah</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/video.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="vidioo" class="link">Video</a></h3>
										<p>Video menarik dan terbaru</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/store.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="/storee" class="link">Store</a></h3>
										<p>Tempat pembelian benih</p>
									</header>
								</article>
							</section>

							<!-- Two -->
							<section id="two">
								<div class="inner">
									<header class="major">
										<h2>About Us</h2>
									</header>
									<p>Kami menyediakan sebuah website yang menghadirkan postingan dan video 
										edukasi bagi petani dan nelayan untuk membantu dalam kegiatan sehari-hari 
										mereka. Kami juga memberi rekomendasi barang yang dapat dibeli di market kami 
										jadi para petani dan nelayan cukup mudah dalam mencari sebuah barang-barang 
										yang mereka butuhkan.</p>
								</div>
							</section>

					</div>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<form method="post" action="/masukans">
									@csrf
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="nama" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="gmail" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="masukan" rows="6"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Clear" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">Calois40@gmail.com</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-phone"></span>
										<h3>Phone</h3>
										<span>+62 819-0767-4517</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-home"></span>
										<h3>Address</h3>
										<span>Desa suruh Rt 05 Rw 01<br />
										Kecamatan Sukodono<br />
										Kabupaten Sidoarjo Provinsi Jawa timur</span>
									</div>
								</section>
							</section>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; Calois</li><li>Make By: <a href="https://www.instagram.com/wafiian03_/">Aiman</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>