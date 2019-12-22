<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>{{ config('app.SITE_NAME') }} Admin</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  {{--  <link rel="stylesheet" href="css/styles.css?v=1.0">  --}}

</head>

<body>
<h1>{{ config('app.SITE_NAME') }} Admin</h1>

<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="/css/customAdmin.css">

<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<header>
<h1>{{config('app.SITE_NAME')}} Admin Nav</h1>
  <ul>
	  <li><a href="/admin/artists">View/Edit Artists</a></li>
  
	  <li><a href="/admin/gear">View/Edit Gear</a></li>
  
	  <li><a href="/admin/sliderPics">View/Edit Slider Photos</a></li>
  
	  <li><a href="/admin/pageContent">View/Edit Page Content</a></li>
  
	  <li><a href="/admin/roles">View/Edit Artist Roles</a></li>
  </ul>
</header>
  <div id='main'>
	@yield('content')
  </div>
</body>
</html>
