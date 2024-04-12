@extends('base')

@section('content')
    <!-- Product List -->
    <div class="flex-auto py-10 bg-gray-100">
        <div class="grid max-w-6xl grid-cols-1 gap-6 p-6 mx-auto sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($products as $product)
                @include('layouts.phonecard')
            @endforeach


        </div>
    </div>

    {{ $products->links() }}
@endsection

@section('menu')
    @include('layouts.navlink')
@endsection
