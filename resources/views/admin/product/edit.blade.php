@extends('base')

@section('content')
    <div class="flex-grow py-10 pt-32 bg-gray-100">
        <main class="my-8">
            <div class="container px-6 mx-auto">
                {{ $product->exists ? 'oui' : 'non' }}
            </div>
        </main>
    </div>
@endsection
