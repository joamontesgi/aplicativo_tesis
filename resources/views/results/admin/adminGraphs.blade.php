@extends('layouts.app')
@section('content')

<div class="container my-5">
    <div class="text-center">
        <h3>
            Datos globales y generales de los resultados
        </h3>
    </div>
    <div class="accordion" id="accordion1">
        <!-- Benigno 1 -->
        <div class="card">
            <div class="card-header" id="heading1">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        Benigno 1
                    </button>
                </h2>
            </div>
            <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion1">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div id="benigno_uno_barra"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DDoS -->
        <div class="card">
            <div class="card-header" id="heading2">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        DDoS
                    </button>
                </h2>
            </div>
            <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion1">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div id="ddos_uno_line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DosGoldenEye -->
        <div class="card">
            <div class="card-header" id="heading3">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        DosGoldenEye
                    </button>
                </h2>
            </div>
            <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion1">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="dosgoldeneye_uno_polar"></div>
                        </div>
                        <div class="col-md-6">
                            <div id="dosgoldeneye_uno_barras"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DoSHulk -->
        <div class="card">
            <div class="card-header" id="heading4">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                        DoSHulk
                    </button>
                </h2>
            </div>
            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion1">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div id="doshulk_uno_area"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DoSSlowhttptest -->
        <div class="card">
            <div class="card-header" id="heading5">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                        DoSSlowhttptest
                    </button>
                </h2>
            </div>
            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion1">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div id="dosslowhttptest_uno_polar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DoSSslowloris -->
        <div class="card">
            <div class="card-header" id="heading6">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                        DoSSslowloris
                    </button>
                </h2>
            </div>
            <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion1">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div id="dossslowloris_uno_barras"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--General tree map-->
        <div class="card">
            <div class="card-header" id="heading7">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                        General
                    </button>
                </h2>
            </div>
            <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion1">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div id="general_tree"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.plot.ly/plotly-2.16.1.min.js"></script>
<script type="text/javascript">
    window.datosGraficas = @json($results);
</script>
<script src="{{ asset('js/adminGraph.js') }}"></script>

@endsection
