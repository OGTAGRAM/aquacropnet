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
        <style>
        /* Style untuk card */
        .card {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
            margin: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            float: left; /* Menempatkan kartu secara berdampingan */
        }

        /* Style untuk gambar dalam card */
        .card img {
            width: 100%;
            height: auto;
        }

        /* Style untuk konten dalam card */
        .card-content {
            padding: 20px;
        }

        /* Style untuk judul dalam card */
        .card-title {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        /* Style untuk teks dalam card */
        .card-text {
            color: #555;
        }
        body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

.card {
    width: 300px;
    border: 1px solid #ccc;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 20px;
    transition: transform 0.3s;
}

.card:hover {
    transform: scale(1.05);
}

.card img {
    width: 100%;
    height: auto;
    border-bottom: 1px solid #ccc;
    transition: transform 0.3s;
}

.card:hover img {
    transform: scale(1.1);
}

.card-content {
    padding: 20px;
}

h2 {
    color: #333;
}

p {
    line-height: 1.6;
}
.hero {
                cursor: pointer;
                text-decoration: none;
                list-style: none;
                display: inline-block;
                font-size: 0.8em;
                font-weight: 600;
                height: 3.5em;
                padding: 0 1.75em;
                text-align: center;
                text-decoration: none;
                text-transform: uppercase;
}

        </style>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="/" class="logo"><span style="font-family:'Montserrat', sans-serif; color:white;">Aqua</span><span style="font-family:'Montserrat', sans-serif; color:#4F6F52">Cropnet.</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="/">Home</a></li>
							<li><a href="/kabar">Kabar</a></li>
							<li><a href="/kiat">Kiat</a></li>
							<li><a href="/vidio">VIdeo</a></li>
                            <li><a href="/store">Store</a></li>
						</ul>
						<ul class="actions stacked">
							<li><a href="{{ route('register') }}" class="button primary fit">Register</a></li>
							<li><a href="{{ route('login') }}" class="button fit">Log In</a></li>
						</ul>
					</nav>


                <!-- isi -->
                <a href="/pisang">
            <div class="card">
                <!-- Gambar dalam card -->
                <img src="images/lololo.jpg" alt="Placeholder Image">
        
                <!-- Konten dalam card -->
                <div class="card-content">
                    <!-- Judul dalam card -->
                    <div class="card-title" style="text-transform: uppercase; font-size: 0.8em;
                    font-weight: 600;
                    height: 3.5em;">Mengenal kultivar pisang kepok tahan layu bakteri</div>
                </div>
            </div>
        </a>
            
    

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