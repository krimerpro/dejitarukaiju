<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body class=" 1-column undefined  page-animated svg-wrapper" data-menu-open="hover" data-menu="" style="background-image:url({{url('images/kaiju.png')}});">

<?php
  if(Route::current()->getName() != 'nft'){
?>
    <div class="container">

<?php
  } else{
?>
    <div>
<?php
  }
?>
   <header class="row">
       @include('includes.header')
   </header>
   <div id="main" class="row">
           @yield('content')
   </div>
   <footer class="row">
       @include('includes.footer')
   </footer>
</div>
</body>
</html>
