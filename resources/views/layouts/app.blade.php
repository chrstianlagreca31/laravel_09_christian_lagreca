<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<title>Blog</title>
@vite(['resources/js/app.js'])
</head>
<body>


<x-navbar />


<div class="container mt-4">
<div class="container mt-4">
    @yield('content')
</div>
</div>


</body>
</html>