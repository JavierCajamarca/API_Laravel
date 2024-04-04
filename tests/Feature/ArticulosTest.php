<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Http\Controllers\API\ArticuloController;
use App\Models\Articulo;
use Tests\TestCase;

class ArticulosTest extends TestCase
{
    /**
     * test 
     *
     * @return void
     */
    public function test_get_articulo_lista()
    {
        $response = $this->get('/api/articulo');
        $response->assertJsonStructure([
            '*' => ['id', 'titulo', 'descripcion', 'precio', 'disponibilidad', 'created_at', 'updated_at']
        ]);
        $response->assertJsonCount(4);
        $response->assertStatus(200);
    }

    public function test_get_articulo_detalle(){
        $response = $this->get('api/articulo/1');
        $response->assertJsonStructure(
            ['id', 'titulo', 'descripcion', 'precio', 'disponibilidad', 'created_at', 'updated_at']
        );
        $response->assertJsonFragment(['id'=> 2, 'titulo'=> 'Jabon']);
        $response->assertStatus(200);
    }

    public function test_get_no_existe_articulo(){
        $response = $this->get('api/articulo/10');
        $response->assertStatus(404);
    }

    public function test_get_elimino_articulo(){
        $this->assertNotNull(Articulo::find(4));
        $response = $this->delete('api/articulo/4');
        $response->assertStatus(204);
        $this->assertNull(Articulo::find(4));
        $response = $this->get('api/articulo/4');
        $response->assertStatus(404);
    }

}
