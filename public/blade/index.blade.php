<b>PHP basic<b> <?php echo $name;?> <br>
<b> PHP template: <b> {{$name}}
	@foreach($userData as $user)
		<br> {{$user}}
	@endforeach

	@if($userData['age']=20)
		<p> dcmm<p>
			@else 
			<p> ke me may<p>
				@endelse
	@endif

@include('blade.header')
<p> this is a content<p>
@include('blade.footer')