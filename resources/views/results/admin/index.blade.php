@extends('layouts.app')
@section('content')
<div>

    <td><a href="{{ route('admin.graficosGrap') }}" class="btn btn-primary">Ver Global de resultados</a></td>

</div>

<script src="https://cdn.plot.ly/plotly-2.16.1.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.17/d3.min.js'></script>

@endsection