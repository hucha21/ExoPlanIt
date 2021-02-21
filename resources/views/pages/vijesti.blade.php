@extends('layouts.default')
@section('title', 'Vijesti')
@section('content')
<script src="http://code.jquery.com/jquery-2.0.3.min.js"> </script>
<style>
  		
  		a{color:#FC3D21;}
.ml11 {
  font-weight: 500;
  font-size: 3em;
  margin: auto;
  color: #FC3D21;
}
.ml11 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.1em;
  padding-right: 0.05em;
  padding-bottom: 0.15em;
}
.ml11 .letter {
  display: inline-block;
  line-height: 1em;
}
  </style>
  <section class="slider_section">
  <div  class="container-fluid">

<h1 class="ml11">
  <span class="text-wrapper">
    <span class="letters">Najnovije vijesti VAN OVE PLANETE</span>
  </span>
</h1>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

  	<table id="isspass"></table>
<script>
$.getJSON('https://newsapi.org/v2/everything?q=space&apiKey=dccb503b346f4c378643bc56f25f62d4', function(data) {
    data['articles'].forEach(function (d) {
    	 //var date = new Date(d['risetime']*1000);
        var source=d['source'];
        var title=d['title'];
        var description=d['description'];
        var link=d['url'];
        var slika=d['urlToImage'];
         $('#isspass').append('<tr><tr><td rowspan="2"><img style="width:250px" src="'+slika.toString()+'"></td><td style="font-weight: bold;">' + title.toString() +'</td></tr><tr><td>'+description.toString() +' <a href="'+link.toString()+'" target="_blank">['+source.name.toString()+']</a></td></tr></tr>');
    });
});
// Wrap every letter in a span
var textWrapper = document.querySelector('.ml11 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");
anime.timeline({loop: true})
  .add({
    targets: '.ml11 .letter',
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=775',
    delay: (el, i) => 100 * (i+1)
  });
</script>
</div>
@stop