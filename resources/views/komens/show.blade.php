<!DOCTYPE HTML> 
<html>
	<head>
		<title>AquaCropNet.</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
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
  display: block;
  margin-left: 20%;
  margin-right: auto;
  width: 50%;
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
                <!-- isi -->
                <div class="hero">
                    <a href="/pisangg">Back</a>
                </div>
                <div class="grid-item">
                    <div class="comment-content">
                      <div class="user-info">
                          <span class="username">{{ $komen->user->name }}</span>
                      </div>
                      <p class="comment-text">{{ $komen->content }}</p>
                  </div>
                </div>
                <div style="padding: 20px"></div>

                <div class="message-form">
                    <form class="ikan" method="post" action="{{ route('messages.store', $komen) }}">
                      @csrf
                        <label for="message">Komentar:</label>
                        <textarea id="" name="message" rows="4" required placeholder="Balas komentar"></textarea>
                        <button type="submit">Submit</button>
                    </form>
                    <p id="responseMessage"></p>
                </div>
                

                    @foreach ($komen->message as $message)
                    <div class="grid-item">
                        <div class="comment-content">
                          <div class="user-info">
                              <span class="username">{{ $message->user->name }}</span>
                          </div>
                          <p class="comment-text">{{ $message->message }}</p>
                          <div class="comment-button">
                            @if ($message->user_id==auth()->id())
                            <button class="like-button"><a href="{{ route('messages.edit', [$komen, $message]) }}">Edit</a></button>
                     @endif
                           <form action="{{ route('messages.destroy', [$komen, $message]) }}" method="post">
                           @csrf
                           @method('DELETE')
                           @if ($message->user_id==auth()->id())
                           <div class="time"><button class="like-button"><a href="">Delete</a></button></div>
                     @endif
                             
                           </form>
                         </div>
                        </div>
                    </div>
                    @endforeach
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