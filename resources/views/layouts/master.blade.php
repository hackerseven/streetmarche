<!DOCTYPE html>
<html>
<head>
	@include('layouts.head')
	@yield('head')
</head>
<body>
	@include('layouts.navbar')
	@yield('body')

	@include('layouts.footer')
	@yield('js')
</body>
</html>
