@extends('components.app')

@section('content')
    <h1 class="text-center mt-3">Ekstrakurikuler</h1>
    <div class="d-flex justify-content-around mt-3 flex-wrap mx-5">
        @foreach ($ekskul as $e)
            <div class="card my-3" style="width: 20rem;">
                <img src="{{ $e->gambar }}" class="card-img-top" alt="Sunset Over the Sea" />
                <div class="card-body">
                    <p class="card-text text-center">{{ $e->nama }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
