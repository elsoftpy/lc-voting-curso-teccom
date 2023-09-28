<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @group Curso
 */
class GravatarUnitTest extends TestCase
{
    use RefreshDatabase;

    public function test_usuario_puede_generar_avatar_por_defecto_cuando_no_se_encuentra_el_email_y_la_primera_letra_es_a()
    {
        $user = User::factory()->create([
            'name' => 'Fulano',
            'email' => 'autentico@emailfalso.com',
        ]);

        $gravatarUrl = $user->avatar;

        $this->assertEquals('https://www.gravatar.com/avatar/'.md5($user->email).'?s=200&d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-1.png',
            $gravatarUrl
        );
    }

    public function test_usuario_puede_generar_avatar_por_defecto_cuando_no_se_encuentra_el_email_y_la_primera_letra_es_z()
    {
        $user = User::factory()->create([
            'name' => 'Fulano',
            'email' => 'zautentico@emailfalso.com',
        ]);

        $gravatarUrl = $user->avatar;

        $this->assertEquals('https://www.gravatar.com/avatar/'.md5($user->email).'?s=200&d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-26.png',
            $gravatarUrl
        );
    }

    public function test_usuario_puede_generar_avatar_por_defecto_cuando_no_se_encuentra_el_email_y_la_primera_letra_es_0()
    {
        $user = User::factory()->create([
            'name' => 'Fulano',
            'email' => '0autentico@emailfalso.com',
        ]);

        $gravatarUrl = $user->avatar;

        $this->assertEquals('https://www.gravatar.com/avatar/'.md5($user->email).'?s=200&d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-27.png',
            $gravatarUrl
        );
    }

    public function test_usuario_puede_generar_avatar_por_defecto_cuando_no_se_encuentra_el_email_y_la_primera_letra_es_9()
    {
        $user = User::factory()->create([
            'name' => 'Fulano',
            'email' => '9autentico@emailfalso.com',
        ]);

        $gravatarUrl = $user->avatar;

        $this->assertEquals('https://www.gravatar.com/avatar/'.md5($user->email).'?s=200&d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-36.png',
            $gravatarUrl
        );
    }
}
