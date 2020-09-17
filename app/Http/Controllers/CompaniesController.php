<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Company;

class CompaniesController extends Controller
{

    public function index()
    {
        $companies = Company::latest()->get();

        return view('company.index', compact('companies'));
    }

    public function create()
    {
        return view('company.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'nume' => 'required',
            'cui' => 'required|unique:companies',
            'nr_reg_comert' => 'required',
            'email' => 'required|email',
            'reprezentant' => 'required',
            'site' => 'required'
        ]);

        Company::create($attributes);

        return redirect('/companies');
    }

    public function show(Company $company)
    {
        return view('company.show', compact('company'));
    }

    public function edit(Company $company)
    {
        return view('company.edit', compact('company'));
    }

    public function update(Company $company)
    {
        $attributes = request()->validate([
            'nume' => 'required',
            'cui' => ['required', Rule::unique('companies')->ignore($company->id)],
            'nr_reg_comert' => 'required',
            'email' => 'required|email',
            'reprezentant' => 'required',
            'site' => 'required'
        ]);

        $company->update($attributes);

        return redirect('companies/' . $company->id);
    }

    public function destroy(Company $company)
    {
        Company::find($company->id)->delete();

        return redirect('/companies');
    }
}
