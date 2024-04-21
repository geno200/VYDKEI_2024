<?php

namespace Tests\Unit;

use App\Http\Controllers\PagesController;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class GeneralTest extends TestCase
{
    use RefreshDatabase;
       public function test_home()
    {
        $response = $this->get('/');
        $response->assertSee('Objektumorientált Programozás Tanfolyam');
    }

    public function test_login_form()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
    public function test_pagescontroller_exists()
    {
        $this->assertTrue(class_exists(PagesController::class));
    }
    public function test_registration_form()
    {
        $response = $this->get('/reg');
        $response->assertStatus(200);
    }

    public function test_login()
    {
        User::create([
            'name' => 'Diakproba',
            'email' => 'diakproba@example.com',
            'password' => bcrypt('jelszo'),
            'usertype' => 'student'
        ]);

        $respons = $this->post('/login',

            [
                'email' => 'diakproba@example.com',
                'password' => 'jelszo'
            ]
        );
        $respons->assertRedirect('/');
    }

    public function test_registration_validation_rules()
    {

        $data = [
            'name' => '',
            'email' => '',
            'password' => '1234',
            'password_confirmation' => '1234',
            'usertype' => 'student'
        ];

        $response = $this->post('/reg', $data);


        $response->assertSessionHasErrors([
            'name' => 'A név megadása kötelező.',
            'email' => 'Az email cím megadása kötelező.',
            'password' => 'A jelszó hossza minimum 5 karakter.',
        ]);
    }
    public function test_if_user_insert_ino_db(): void
    {
        $response = ["name" => 'valaki', "value" => 1];
        $this->assertEquals(1, $response["value"]);
        $this->assertArrayHasKey('name', $response);
    }

    public function test_check_if_users_create_with_id()
    {
        User::factory(10)->create();
        $response = DB::table("users")->first();
        dd($response);

    }


}
