@extends("layouts.layout")
@section("content")
    <div>
        <h1 class="heading-1 mb-8">Firme</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($companies as $company)
                @include("components.card")
            @empty
                <div>
                    <p class="heading-2 text-gray-800 mb-2">Momentan nu există nicio firmă.</p>
                    <a href="/companies/create"><button class="btn-blue block">Adaugă o firmă</button></a>
                </div>
            @endforelse
        </div>
    </div>
@endsection