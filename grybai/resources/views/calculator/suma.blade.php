<h1>Sveiki, čia skaičiuoklė</h1>
@if($susumuota > 100)
<h2 style="color:red;">Suma: {{$susumuota}}</h2>
@else
<h2 style="color:yellow;">Suma: {{$susumuota}}</h2>
@endif