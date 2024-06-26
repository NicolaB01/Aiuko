<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class cena extends Model
{
    use HasFactory;
    protected $table = 'cene';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'idUtente',
        'tempoCena',
        'alimentiPreferiti',
        'antipasto',
        'primo',
        'secondo',
        'contorno',
        'dolce'
    ];

    public function salvaPreferenzeCena($tempoCena, $portate, $alimentiPreferiti) {
        $idUser = auth()->user()->idUtente;
        $preferenzeSnackUtente = cena::where('idUtente', $idUser);

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

        cena::create([
            'idUtente' => $idUser,
            'tempoCena' => $tempoCena,
            'alimentiPreferiti' => DB::raw('"' . $alimentiPreferiti . '"'),
            'antipasto' => $antipasto,
            'primo' => $primo,
            'secondo' => $secondo,
            'contorno' => $contorno,
            'dolce' => $dolce
        ]);
    }
}
