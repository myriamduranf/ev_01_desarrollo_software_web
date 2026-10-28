<?php

namespace App\View\Components;

use Closure;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;

class ValorUf extends Component
{
    public $Valor;

    public function __construct()
    {
        try {
            $respuestaApi = Http::timeout(3)->get('https://api.gael.cloud/general/public/monedas/UF');

            if ($respuestaApi->successful()) {
                $ValorUF = $respuestaApi->json();
                $this->Valor = $ValorUF['Valor'];
            } else {
                $this->Valor = 'No disponible';
            }
        } catch (Exception $e) {
            $this->Valor = 'Error de conexion';
        }
    }

    public function render(): View|Closure|string
    {
        return view('components.Valor-uf');
    }
}