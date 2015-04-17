@if(Session::has('success'))
  <h1>
      {{Session::get('success')}}
  </h1>
@endif
<?php 
dd(Session::get('user_name'));
?>
