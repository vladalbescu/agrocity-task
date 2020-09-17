@extends("layouts.layout")
@section("content")
    <div class="px-5 pt-3 pb-5 bg-white rounded-xl shadow-md">
        <h2 class="heading-1 border-b pb-3 mb-2 flex justify-between">
            {{ $company->nume }}
        </h2>
        <div class="mb-3">
            <h3 class="heading-3 leading-none">CUI</h3>
            <div class="text-gray-700 text-md">‎{{ $company->cui }}</div>
        </div>
        <div class="mb-3">
            <h3 class="heading-3 leading-none">Nr. înregistrare registrul comerțului</h3>
            <div class="text-gray-700 text-md">{{ $company->nr_reg_comert }}</div>
        </div>
        <div class="mb-3">
            <h3 class="heading-3 leading-none">Email</h3>
            <div class="text-gray-700 text-md">{{ $company->email }}</div>
        </div>
        <div class="mb-3">
            <h3 class="heading-3 leading-none">Reprezentant legal</h3>
            <div class="text-gray-700 text-md">{{ $company->reprezentant }}</div>
        </div>
        <div class="mb-3">
            <h3 class="heading-3 leading-none">Site</h3>
            <div class="text-gray-700 text-md">{{ $company->site }}</div>
        </div>
        <div class="border-t pt-5 mt-5 flex">
            <button type="submit" class="btn-blue mr-2"><a href="/companies/{{ $company->id }}/edit">Editează firmă</a></button>

            <form action="/companies/{{ $company->id }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn-red">Șterge firmă</button>
            </form>
        </div>
    </div>    
@endsection