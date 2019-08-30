@extends ('templates.layout')

@section('content')

<form method="POST" action="/blog/create">
    @csrf
    
   
    <div class="container">
        <input type="text">
        <textarea name="" id="" cols="30" rows="10"></textarea>
    </div>
</form>