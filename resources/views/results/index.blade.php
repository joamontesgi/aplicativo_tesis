@extends('layouts.app')
@section('content')

<div class="container">
    <label><strong>Predicción según Red Neuronal Profunda:</strong> <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 120 100">
    <rect x="10" y="5" width="30" height="80" class="bg-primary" fill="gray"/>
    </svg>
    </label>
    <br>
    <label><strong>Predicción según Red Neuronal Convolucional:</strong> <svg version="1.1" xmlns="http://www.w3.org/2000/svg"  width="50" height="50" viewBox="0 0 120 100">
    <rect  width="30" height="80"/>
    </svg>
    </label>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Resumen') }}</div>
                <div class="card-body table-responsive">
                    <table class="table table-striped">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col" class="p-3 mb-2 bg-secondary text-white">Benigno</th>
                                <th scope="col" class="p-3 mb-2 bg-secondary text-white">DDoS</th>
                                <th scope="col" class="p-3 mb-2 bg-secondary text-white">DosGoldenEye</th>
                                <th scope="col" class="p-3 mb-2 bg-secondary text-white">DosHulk</th>
                                <th scope="col" class="p-3 mb-2 bg-secondary text-white">DosSlowHttpTest</th>
                                <th scope="col" class="p-3 mb-2 bg-secondary text-white">DosSlowLoris</th>
                                <th scope="col" class="p-3 mb-2 bg-dark text-white">Benigno</th>
                                <th scope="col" class="p-3 mb-2 bg-dark text-white">DDoS</th>
                                <th scope="col" class="p-3 mb-2 bg-dark text-white">DosGoldenEye</th>
                                <th scope="col" class="p-3 mb-2 bg-dark text-white">DosHulk</th>
                                <th scope="col" class="p-3 mb-2 bg-dark text-white">DosSlowHttpTest</th>
                                <th scope="col" class="p-3 mb-2 bg-dark text-white">DosSlowLoris</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Gráficos</th>

                                
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($results as $result)
                            <tr>
                                <th scope="row">{{ $result->id }}</th>
                                <td class="p-3 mb-2 bg-secondary text-white">{{ $result->benigno_uno }}</td>
                                <td class="p-3 mb-2 bg-secondary text-white">{{ $result->ddos_uno }}</td>
                                <td class="p-3 mb-2 bg-secondary text-white">{{ $result->dosgoldeneye_uno }}</td>
                                <td class="p-3 mb-2 bg-secondary text-white">{{ $result->doshulk_uno }}</td>
                                <td class="p-3 mb-2 bg-secondary text-white">{{ $result->dosslowhttptest_uno }}</td>
                                <td class="p-3 mb-2 bg-secondary text-white">{{ $result->dossslowloris_uno }}</td>
                                <td class="p-3 mb-2 bg-dark text-white">{{ $result->benigno_dos }}</td>
                                <td class="p-3 mb-2 bg-dark text-white">{{ $result->ddos_dos }}</td>
                                <td class="p-3 mb-2 bg-dark text-white">{{ $result->dosgoldeneye_dos }}</td>
                                <td class="p-3 mb-2 bg-dark text-white">{{ $result->doshulk_dos }}</td>
                                <td class="p-3 mb-2 bg-dark text-white">{{ $result->dosslowhttptest_dos }}</td>
                                <td class="p-3 mb-2 bg-dark text-white">{{ $result->dossslowloris_dos }}</td>
                                <td>{{ $result->created_at }}</td>
                                <td><a href="{{ route('results.graficos', $result->id) }}" class="btn btn-primary">Ver</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
