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
            /* General styling */
body {
  font-family: sans-serif;
  margin: 0;
  padding: 0;
}

h1 {
  font-size: 40px;
  font-weight: bold;
  margin-bottom: 0;
}

main {
  padding: 20px;
}

img {
  width: 600px;
  height: auto;
  margin-right: 20px;
  float: left;
}
.grid-container {
            display: grid;
            grid-auto-columns: 70%;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            gap: 20px; /* Ruang antar elemen */
        }

        .grid-item {
            border: 1px solid #ccc;
            padding: 20px;
            justify-content: center;
        }
.ror{
  max-width: 100%;
    height: auto;
    display: block;
    margin: auto;
}
.comment-container {
    display: flex;
    padding: 10px;
    border: 1px solid #ddd;
    margin: 10px;
    background-color: #fff;
}

.avatar img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

.comment-content {
    margin-left: 10px;
}

.user-info {
    display: flex;
    justify-content: space-between;
}

.username {
    font-weight: bold;
}

.timestamp {
    color: #888;
    font-size: 12px;
}

.time {
    color: #888;
    font-size: 20px;
}

.message-form {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    border-radius: 8px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 5px;
}

input,
textarea {
    margin-bottom: 10px;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.comment-text {
    margin-top: 5px;
} 
.ikan {
                    width:400px;
                    justify-content:center;
                    height: 200px;
                    padding: 8px;
                    margin-bottom: 10px;
                    border: 1px solid #ddd;
                    border-radius: 10px;
                    resize: vertical;
                    box-sizing: border-box;
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
                        <li><a href="/dashboard">Home</a></li>
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


                <!-- isi -->
                <div class="hero">
                  <a href="/dashboard">Home</a>
                  <strong>/</strong>
                  <a href="/kabarr">Kabar</a>
              </div>
                <div class="grid-container">
                  <div class="grid-item">
                <main>
                <header>
                    <h1 style="text-align: center">Mengenal Kultivar Pisang Kepok Tahan Layu Bakteri</h1>
                  </header>
                  <br>
                  <div class="ror">
                    <img src="images/lololo.jpg" alt="Pisang kepok"></div>
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <p>
                      Pisang kepok merupakan salah satu varietas pisang yang populer di Indonesia. Pisang ini memiliki rasa yang manis dan tekstur yang pulen. Namun, pisang kepok juga rentan terhadap penyakit layu bakteri.
                    </p>
                    <p>
                      Penyakit layu bakteri disebabkan oleh bakteri <em>Ralstonia solanacearum</em>. Bakteri ini menyerang tanaman pisang melalui akar. Gejala penyakit ini terlihat dari adanya cairan coklat kemerahan pada bagian tandan dan buah pisang.
                    </p>
                    <p>
                      Untuk mencegah serangan penyakit layu bakteri, dapat dilakukan beberapa hal berikut:
                      <ul>
                        <li>Pilihlah bibit pisang yang sehat dan berasal dari sumber yang terpercaya.</li>
                        <li>Lakukan rotasi tanaman dengan tanaman yang tidak rentan terhadap penyakit layu bakteri.</li>
                        <li>Berikan pupuk yang cukup dan teratur.</li>
                        <li>Lakukan pengendalian gulma secara rutin.</li>
                      </ul>
                    </p>
                    <p>
                      Saat ini, telah dikembangkan beberapa kultivar pisang kepok tahan layu bakteri. Kultivar-kultivar ini memiliki gen yang resisten terhadap bakteri <em>Ralstonia solanacearum</em>.
                    </p>
                    </div>
                  </div>
                  <div style=" border: 1px solid #ccc;
                  text-align: center;
                  justify-content: center;"></div>
                  <div style="text-align: center;
                  justify-content: center;
                  padding: 20px">
                  <footer id="footer">
                    <div class="inner">
                      <ul class="icons">
                        <li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
                        <li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
                      </ul>
                    </div>
                    </div>
                  </footer>
                  <div style=" display: grid;
                  align-items: center;
                  justify-content: center;
                  ">
                  <div class="message-form">
                    <form class="ikan" method="post" action="/komens">
                      @csrf
                        <label for="message">Leave a Message:</label>
                        <textarea id="" name="content" rows="4" required></textarea>
                        <button type="submit">Submit</button>
                    </form>
                    <p id="responseMessage"></p>
                </div>

                @foreach ($komens as $komen)
                    <div class="grid-item">
                  <div class="comment-content">
                    <div class="user-info">
                        <span class="username">{{ $komen->user->name }}</span>
                    </div>
                    <p class="comment-text">{{ $komen->content }}</p>
                    <div class="comment-button">
                     @if ($komen->user_id==auth()->id())
                     <button class="like-button"><a href="{{ route('komens.edit', $komen->id) }}">Edit</a></button>
                     @endif
                    <form action="{{ route('komens.destroy', $komen->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    @if ($komen->user_id==auth()->id())
                    <div class="time"><button class="like-button"><a href="">Delete</a></button></div>
                     @endif
                    </form>
                    <div class="timestamp"><a href="{{ route('komens.show', $komen) }}">komentar</a></div>
                  </div>
                </div>
              </div>
              <div style="padding: 20px"></div>
              @endforeach

            </div>
            <footer id="footer">
              <div class="inner">
              <ul class="copyright">
                <li>&copy; Calois</li><li>Make By: <a href="https://www.instagram.com/wafiian03_/">Aiman</a></li>
              </ul>
              </div>
            </footer>
                  </main>
                  

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