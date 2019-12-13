@extends('layouts.newMain')

@section('content')

<!-- Intro -->
  <section id="top" class="one dark cover">
    <div class="container">

      <header id="homeHeader">
        <img src="/images/logo.png" id="mainlogo">

        <!-- <h1 style="color:white; font-family:diehl;text-align:center;">Events, Experience, Art & Music</h1> -->

      </header>

      <footer>
        @foreach($pageContents as $pc)
          <div class="contentWrapper">
              <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/" frameborder="0" allowfullscreen></iframe> -->
              <h1>{{$pc->title}}</h1>
              <p class="eachContent">{{$pc->content}}</p>
          </div>
        @endforeach
        {{-- <a href="#about" class="button scrolly">About</a> --}}
      </footer>

    </div>
  </section>

<!-- About Me -->
  <section id="about" class="three">
    {{-- <div class="container">

      <header>
        <h2>About {{ env('SITE_NAME') }}</h2>
      </header>

      <blockquote>"Being interesting is overrated"</blockquote>
 – frigginGlorious, creator of MusiCMS
 <p>Read the whole story at <a href="http://frigginglorio.us">frigginGlorious</a>
    </div> --}}
  </section>




@endsection
