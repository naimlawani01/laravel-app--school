<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    public function etudiant()
    {
        return $this->belongsTo('App\Etudiant');
    }
    public function annee()
    {
        return $this->belongsTo('App\Annee');
    }
    public function classe()
    {
        return $this->belongsTo('App\Classe');
    }
    public function semestre()
    {
        return $this->belongsTo('App\Semestre');
    }
}
