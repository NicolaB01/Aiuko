<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pranzo extends Model
{
    use HasFactory;
    protected $table = 'pranzi';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'idUtente',
        'tempoPranzo',
        'alimentiPreferiti',
        'antipasto',
        'primo',
        'secondo',
        'contorno',
        'dolce'
    ];

    public function salvaPreferenzePranzo($tempoPranzo, $portate, $alimentiPreferiti) {
        $idUser = auth()->user()->idUtente;
        $preferenzeSnackUtente = pranzo::where('idUtente', $idUser);

        if(count($preferenzeSnackUtente->get()) != 0) {
            $preferenzeSnackUtente->delete();
        }

        $antipasto = false;
        $primo = false;
        $secondo = false;
        $contorno = false;
        $dolce = false;

        if($portate != null) {
            foreach($portate as $portata) {
                if($portata == "antipasto") {
                    $antipasto = true;
                }
                if($portata == "primo") {
                    $primo = true;
                }
                if($portata == "secondo") {
                    $secondo = true;
                }
                if($portata == "contorno") {
                    $contorno = true;
                }
                if($portata == "dolce") {
                    $dolce = true;
                }
            }
        }

        pranzo::create([
            'idUtente' => $idUser,
            'tempoPranzo' => $tempoPranzo,
            'alimentiPreferiti' => DB::raw('"' . $alimentiPreferiti . '"'),
            'antipasto' => $antipasto,
            'primo' => $primo,
            'secondo' => $secondo,
            'contorno' => $contorno,
            'dolce' => $dolce
        ]);
    }
}
