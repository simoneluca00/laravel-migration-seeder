@extends('layouts.layout')

@section('title', 'Trains')

@section('content')
<div class="container">
    <div class="row row-cols-3 g-3">
        
        @forelse ($trains as $train)
            <div>
                <div class="col card">
                    <div class="card-body">
                    <h5 class="card-title text-center">{{ $train->azienda }}</h5>
                    <h6 class="card-subtitle mb-2">
                        <span class="text-danger fw-bold">Parte da:</span>
                        {{ $train->stazione_di_partenza }}
                    </h6>
                    <h6 class="card-subtitle mb-2">
                        <span class="text-danger fw-bold">Arriva a:</span>
                        {{ $train->stazione_di_arrivo }}
                    </h6>
                    <h6 class="card-subtitle mb-2">
                        <span class="text-danger fw-bold">Partenza alle:</span>
                        {{ $train->orario_di_partenza }}
                    </h6>
                    <h6 class="card-subtitle mb-2">
                        <span class="text-danger fw-bold">Arrivo alle:</span>
                        {{ $train->orario_di_arrivo }}
                    </h6>

                    </div>
                </div>
            </div>
            @empty
                <h2>Non sono presenti treni in partenza oggi</h2>
            @endforelse

    </div>
</div>

@endsection
