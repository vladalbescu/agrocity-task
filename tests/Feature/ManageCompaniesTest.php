<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Company;

class ManageCompaniesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_guest_can_view_companies()
    {
        $this->get('/companies')->assertStatus(200);
    }

    /** @test */
    public function a_guest_can_view_a_specific_company()
    {
        $company = factory(Company::class)->create();

        $this->get('/companies/' . $company->id)->assertSee($company->nume);
    }

    /** @test */
    public function a_guest_can_create_a_company()
    {
        $this->get('companies/create')->assertStatus(200);

        $company = factory(Company::class)->raw();

        $this->post('/companies', $company);

        $this->assertDatabaseHas('companies', $company);

        $this->get('/companies')->assertSee($company['nume']);
    }

    /** @test */
    public function a_guest_can_delete_a_comapny()
    {
        $company = factory(Company::class)->create();

        $this->assertDatabaseCount('companies', 1);

        $this->delete('/companies/' . $company->id);

        $this->assertDeleted($company);
    }

    /** @test */
    public function a_company_requires_a_name()
    {
        $company = factory(Company::class)->raw(['nume' => '']);

        $this->post('/companies', $company)->assertSessionHasErrors('nume');
    }

    /** @test */
    public function a_company_requires_a_cui()
    {
        $company = factory(Company::class)->raw(['cui' => '']);

        $this->post('/companies', $company)->assertSessionHasErrors('cui');
    }

    /** @test */
    public function a_company_requires_a_nr_reg_comert()
    {
        $company = factory(Company::class)->raw(['nr_reg_comert' => '']);

        $this->post('/companies', $company)->assertSessionHasErrors('nr_reg_comert');
    }

    /** @test */
    public function a_company_requires_an_email()
    {
        $company = factory(Company::class)->raw(['email' => '']);

        $this->post('/companies', $company)->assertSessionHasErrors('email');
    }

    /** @test */
    public function a_company_requires_a_reprezentant()
    {
        $company = factory(Company::class)->raw(['reprezentant' => '']);

        $this->post('/companies', $company)->assertSessionHasErrors('reprezentant');
    }

    /** @test */
    public function a_company_requires_a_site()
    {
        $company = factory(Company::class)->raw(['site' => '']);

        $this->post('/companies', $company)->assertSessionHasErrors('site');
    }
}
