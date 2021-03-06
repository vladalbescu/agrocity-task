@extends('layouts.layout')
@section('content')
    <h1 class="heading-1 mb-8">Editează</h1>
<form action="/companies/{{ $company->id }}" method="POST" class="bg-white rounded-xl shadow-lg p-10">
        @method('PATCH')
        @csrf

        <div class="form-group">
            <label for="nume" class="form-label">Nume firmă</label>
            <input type="text" class="form-control{{ $errors->has('nume') ? ' form-control--error' : '' }}" name="nume" placeholder="Numele firmei" value="{{ old('nume') ? old('nume') : $company->nume }}">
            @error('nume')
                <div class="form-error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="cui" class="form-label">CUI</label>
            <input type="text" class="form-control {{ $errors->has('cui') ? ' form-control--error' : '' }}" name="cui" placeholder="CUI" value="{{ old('cui') ? old('cui') : $company->cui }}">
            @error('cui')
                <div class="form-error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="nr_reg_comert" class="form-label">Nr. înregistrare registrul comerțului</label>
            <input type="text" class="form-control {{ $errors->has('nr_reg_comert') ? ' form-control--error' : '' }}" name="nr_reg_comert" placeholder="Nr. înregistrare registrul comerțului" value="{{ old('nr_reg_comert') ? old('nr_reg_comert') : $company->nr_reg_comert }}">
            @error('nr_reg_comert')
                <div class="form-error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control {{ $errors->has('email') ? ' form-control--error' : '' }}" name="email" placeholder="Adresă email" value="{{ old('email') ? old('email') : $company->email }}">
            @error('email')
                <div class="form-error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="reprezentant" class="form-label">Reprezentant legal</label>
            <input type="text" class="form-control {{ $errors->has('reprezentant') ? ' form-control--error' : '' }}" name="reprezentant" placeholder="Nume reprezentant legal" value="{{ old('reprezentant') ? old('reprezentant') : $company->reprezentant }}">
            @error('reprezentant')
                <div class="form-error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="site" class="form-label">Site</label>
            <input type="text" class="form-control {{ $errors->has('site') ? ' form-control--error' : '' }}" name="site" placeholder="Site" value="{{ old('site') ? old('site') : $company->site }}">
            @error('site')
                <div class="form-error">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn-blue mt-5 w-full">Salvează</button>
    </form>
@endsection