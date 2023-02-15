@extends('layouts.app')
@section('content')
<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Gráficos') }}</div>
                <div class="card-body">
                    <input value="{{$result->benigno_uno}}" hidden name="benigno_uno">
                    <input value="{{$result->ddos_uno}}" hidden name="ddos_uno">
                    <input value="{{$result->dosgoldeneye_uno}}" hidden name="dosgoldeneye_uno">
                    <input value="{{$result->doshulk_uno}}" hidden name="doshulk_uno">
                    <input value="{{$result->dosslowhttptest_uno}}" hidden name="dosslowhttptest_uno">
                    <input value="{{$result->dossslowloris_uno}}" hidden name="dossslowloris_uno">
                    <input value="{{$result->benigno_dos}}" hidden name="benigno_dos">
                    <input value="{{$result->ddos_dos}}" hidden name="ddos_dos">
                    <input value="{{$result->dosgoldeneye_dos}}" hidden name="dosgoldeneye_dos">
                    <input value="{{$result->doshulk_dos}}" hidden name="doshulk_dos">
                    <input value="{{$result->dosslowhttptest_dos}}" hidden name="dosslowhttptest_dos">
                    <input value="{{$result->dossslowloris_dos}}" hidden name="dossslowloris_dos">
                <div class="card mt-4">
                    <div class="card-body">
                        <h3>Resultados según la Red Neuronal Profunda</h3>
                        <h5><span id="benigno"><strong>{{$result->benigno_uno}}</strong></span> registros clasificados como: Benignos</h5>
                        <h5><span id="DDoS"><strong>{{$result->ddos_uno}}</strong></span> registros clasificados como: DDoS</h5>
                        <h5><span id="DoSGoldenEye"><strong>{{$result->dosgoldeneye_uno}}</strong></span> registros clasificados como: DoSGoldenEye</h5>
                        <h5><span id="DoSHulk"><strong>{{$result->doshulk_uno}}</strong></span> registros clasificados como: DoSHulk</h5>
                        <h5><span id="DoSSlowhttptest"><strong>{{$result->dosslowhttptest_uno}}</strong></span> registros clasificados como: DoSSlowhttptest</h5>
                        <h5><span id="DoSSslowloris"><strong>{{$result->dossslowloris_uno}}</strong></span> registros clasificados como: DoSSslowloris</h5>
                        <br>
                        <h3>Resultados según la Red Neuronal Convolucional</h3>
                        <h5><span id="benigno_dos"><strong>{{$result->benigno_dos}}</strong></span> registros clasificados como: Benignos</h5>
                        <h5><span id="DDoS_dos"><strong>{{$result->ddos_dos}}</strong></span> registros clasificados como: DDoS</h5>
                        <h5><span id="DoSGoldenEye_dos"><strong>{{$result->dosgoldeneye_dos}}</strong></span> registros clasificados como: DoSGoldenEye</h5>
                        <h5><span id="DoSHulk_dos"><strong>{{$result->doshulk_dos}}</strong></span> registros clasificados como: DoSHulk</h5>
                        <h5><span id="DoSSlowhttptest_dos"><strong>{{$result->dosslowhttptest_dos}}</strong></span> registros clasificados como: DoSSlowhttptest</h5>
                        <h5><span id="DoSSslowloris_dos"><strong>{{$result->dossslowloris_dos}}</strong></span> registros clasificados como: DoSSslowloris</h5>
                        <h5><span id="fecha"><strong>Fecha: {{$result->created_at}}</strong></span></h5>
                    </div>
                    </div>
                    <div class="container" >

<h2>Ver gráficas</h2>

<button class="accordion">Red Neuronal Profunda</button>
<div class="panel">
    <div class="row">
        <div class="col">
            <div id="barra"></div>
        </div>
        <div class="col">
            <div id="pie"></div>
        </div>
    </div>
</div>

<button class="accordion">Red Neuronal Convolucional</button>
<div class="panel">
    <div class="row">
        <div class="col">
            <div id="myDiv"></div>
        </div>
        <div class="col">
            <div id="myDiv2"></div>
        </div>
    </div>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>






            </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.plot.ly/plotly-2.16.1.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.17/d3.min.js'></script>
<script src="{{asset('js/grafica.js')}}"></script>

@endsection
