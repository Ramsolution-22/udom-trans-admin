@if(session()->has('success'))
<div class="alert alert-success my-4 col-lg-11 mx-auto">
    {{session()->get('success')}}
</div>
@endif
@if(session()->has('danger'))
<div class="alert alert-danger my-4 col-lg-11 mx-auto">
    {{session()->get('danger')}}
</div>
@endif


@if ($errors->any())
<ul>
  @foreach ($errors->all() as $error)
  <li class="text-danger">{{$error}}</li>

  @endforeach
</ul>
@endif
