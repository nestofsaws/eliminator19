<!DOCTYPE html>
<html lang="en-US">
    <head>
	@include('includes.head')
	<link href="{{asset('/css/styles.css')}}" rel="stylesheet" type="text/css"/>
    </head>
    <body class="boxed-layout">
	@include('includes.navbar')
	
	<!--CONTENT WRAPPERS-->
	<div class="container-fluid">
		<div class="col pb-5" id="content-section">
			@include('includes.messages')
			@yield('content')			
		</div>
		@include('includes.rules')	
	</div>
	@include('includes.pagefooter')	
	<!--END CONTENT WRAPPERS-->	
	@include('includes.footerscripts')
	</body>
</html>