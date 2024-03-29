<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userDiets extends Model
{
    use HasFactory;
    protected $table = 'user_diets';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'idUtente',
        'dieta',
    ];

    public function salvaDieteUtente($diete) {
        $idUser = auth()->user()->idUtente;
        $dieteUtente = userDiets::where('idUtente', $idUser);

        if(count($dieteUtente->get()) != 0) {
            $dieteUtente->delete();
        }
        foreach($diete as $dieta) {
            userDiets::create([
                'idUtente' => $idUser,
                'dieta' => $dieta,
            ]);
        }
    }
}
