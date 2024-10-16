<html>

	<x-header title="Home Page">
		Home Page
	</x-header>

	<body>

		<nav>
			<x-nav href="/" :active="request()->is('/')">Home</x-nav>
			<x-nav href="/contact" :active="request()->is('contact')">Contact</x-nav>
			<x-nav href="/jobs" :active="request()->is('jobs')">Jobs</x-nav>
		</nav>

	    <h1>
	    	{{ $page_title }}
	    </h1>


	    <main>
		    {{ $slot }}
		</main>

	</body>

</html>