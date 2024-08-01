@extends('base')

@section('content')
    <!-- Product List -->
    <div class="grid max-w-6xl grid-cols-1 gap-6 p-6 mx-auto sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @forelse ($products as $product)
            @include('layouts.computercard')
        @empty
            <div class="col-span-full">
                Aucun produit ne correspond à votre recherche
            </div>
        @endforelse

        <div class="col-span-full">
            {{ $products->links() }}
        </div>
    </div>
@endsection

@section('menu')
    @include('layouts.navlink')
@endsection
