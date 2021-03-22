@extends('layouts.admin')


@section('content')

<div id="pc" class="content-wrapper" style="background: url('site_images/background.jpg'); background-size: 100%;">

<!-- Product Card -->
  
<div class="container-fluid" style="margin-left:auto" id="cardc">
<div class="card">
    <img class="card-img-top" src="storage/about1.jpeg">
    <div class="card-body">
        <p class="card-text" style="font-family:verdana"><strong>Marija Marić, 21</strong></p>
    </div>
</div>
</div>

<div style="margin:auto; color:white; font-size:20px">
<p style="font-family:verdana"><b>
Frontend:</b></p>
<p>
Za izgled stranice koristili smo standardne jezike kao što su HTML i CSS, uz to smo još uključili frontend tehnologiju Bootstrap kako bismo dobili odgovarajući izgled stranice.
</p>
<p style="font-family:verdana"><b>
Backend: </b></p>
<p>
Za backend koristimo Laravel uz kojeg smo koristili MySql bazu podataka. Za suradnju developera koristimo GitHub.
</p>
<p style="font-family:verdana"><b>
Paketi:</b></p>
<p>
vue-authenticate - za autentikaciju korisnika,
Intervention Image - za dodavanje i upravljanje slikama
</p>
<p>Link za viziju možete pogledati ispod: </p>
<p style="font-family:verdana"><b><a href="https://drive.google.com/file/d/1v58IqfS_Iu9SgXnwxjZeDV9dt_vM9oeH/view">Vizija</a></b></p>
</div>

<div class="container-fluid" style="margin-left:auto" id="cardc">
<div class="card">
    <img class="card-img-top" src="storage/about2.jpeg">
    <div class="card-body">
        <p class="card-text" style="font-family:verdana"><strong>Tea Jukić, 21</strong></p>
    </div>
</div>
</div>

<div class="container" style="margin: auto">

</div>
</div>

@endsection