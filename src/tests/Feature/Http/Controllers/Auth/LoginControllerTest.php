<?php declare(strict_types=1);

namespace Tests\Feature\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

final class LoginControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @return void
     */
    public function testSuccess(): void
    {
        User::factory()->create(['email' => 'test@example.com']);

        $params = [
            'email' => 'test@example.com',
            'password' => 'password',
        ];

        $response = $this->postJson('/login', $params);

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'Authenticated.',
            ]);
    }

    /**
     * @return void
     */
    public function testUnauthenticated(): void
    {
        $params = [
            'email' => 'test@example.com',
            'password' => 'password',
        ];

        $this->postJson('/login', $params)
            ->assertStatus(401)
            ->assertJson([
                'message' => 'Unauthenticated.',
            ]);
    }

    /**
     * @return void
     */
    public function testUnprocessableEntity(): void
    {
        $this->postJson('/login', [])
            ->assertStatus(422)
            ->assertJson([
                'message' => 'emailは必ず指定してください。 (and 1 more error)',
                'errors' => [
                    'email' => ['emailは必ず指定してください。'],
                    'password' => ['passwordは必ず指定してください。'],
                ],
            ]);
    }
}
