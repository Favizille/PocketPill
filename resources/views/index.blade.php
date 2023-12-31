<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" />
    <link href="{{ asset("assets/default.css")}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset("assets/fonts.css")}}" rel="stylesheet" type="text/css" media="all" /></head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">PMS</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="active"><a href="#" accesskey="1" title="">Homepage</a></li>
				<li><a href="#" accesskey="2" title="">Profile</a></li>
				<li><a href="#" accesskey="3" title="">About Us</a></li>
				<li><a href="{{route('payments')}}" accesskey="4" title="">Payments</a></li>
				<li><a href="#" accesskey="5" title="">Contact Us</a></li>
				<li><form action="{{route("logout")}}" method="POST">@csrf<button><i class="fa fa-power-off" style="font-size:12px;color:red"></i></button></form></li>

			</ul>
		</div>
	</div>
	<div id="banner" class="container">
		<div class="title">
			<h2>Payment Management System</h2>
			<span class="byline">Helping you make your payments online and record them.</span>
		</div>

        @isset($message)
            <div style="color: red"><h3>{{$message}}</h3></div>
        @endisset

		<form action="{{route("make_payment")}}" method="POST" class="actions">
            @csrf

            <div>
                <input name="user_id" value={{auth()->user()->id}} hidden>
                <textarea name="purpose" placeholder="What are you paying for?" cols="60" rows="5" required></textarea>
            </div>

			<button type="submit" class="button">Make Payment</button>
		</form>
	</div>
</div>
{{-- <div id="wrapper">
	<div id="three-column" class="container">
		<div class="title">
			<h2>Feugiat lorem ipsum dolor sed veroeros</h2>
			<span class="byline">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue</span>
		</div>
		<div class="boxA">
			<p>Phasellus pellentesque, ante nec iaculis dapibus, eros justo auctor lectus, a lobortis lorem mauris quis nunc. Praesent pellentesque facilisis elit. Class aptent taciti sociosqu ad  torquent per conubia nostra.</p>
			<a href="#" class="button button-alt">More Info</a>
		</div>
		<div class="boxB">
			<p>Etiam neque. Vivamus consequat lorem at nisl. Nullam  wisi a sem semper eleifend. Donec mattis. Phasellus pellentesque, ante nec iaculis dapibus, eros justo auctor lectus, a lobortis lorem mauris quis nunc.</p>
			<a href="#" class="button button-alt">More Info</a>
		</div>
		<div class="boxC">
			<p> Aenean lectus lorem, imperdiet at, ultrices eget, ornare et, wisi. Pellentesque adipiscing purus. Phasellus pellentesque, ante nec iaculis dapibus, eros justo auctor lectus, a lobortis lorem mauris quis nunc.</p>
			<a href="#" class="button button-alt">More Info</a>
		</div>
	</div>
</div>
<div id="welcome">
	<div class="container">
		<div class="title">
			<h2>Fusce ultrices fringilla metus</h2>
			<span class="byline">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue</span>
		</div>
		<p>This is <strong>Assembly</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
		<ul class="actions">
			<li><a href="#" class="button">Etiam posuere</a></li>
		</ul>
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div> --}}
</body>
</html>
