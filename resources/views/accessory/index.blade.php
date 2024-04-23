@extends('base')

@section('content')
    <!-- Product List -->

    <div class="grid max-w-6xl grid-cols-1 gap-6 p-6 mx-auto sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @forelse ($accessories as $accessory)
            @include('layouts.accessorycard')
        @empty
            <div class="col-span-full">
                Aucun produit ne correspond à votre recherche
            </div>
        @endforelse


    </div>

    {{ $accessories->links() }}
@endsection

@section('menu')
    @include('layouts.navlink')
@endsection
