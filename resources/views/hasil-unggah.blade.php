<img src="{{asset('storage/' . $path ) }}">
<br>
<form action="/unduh" method="POST">
<input type="hidden" value="{{path}}" name="path">
<input typr="submit" value="Unduh">