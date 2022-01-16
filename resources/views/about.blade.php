@extends('layouts/main')

@section('container')

<h1>Halaman About</h1>
<h3>About Me</h3>
<p><?= $nama; ?></p>
<p><?= $email; ?></p>
<img src="img/<?= $image; ?>" alt="jumbotron" width="200px">

@endsection
