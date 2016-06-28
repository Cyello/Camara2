<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vereador extends Model
{
    protected $table = 'vereador';


    //Os parametros que podem ser passados para o construtor do vereador. ver metodo store da class CamaraContrroler
    protected $fillable = array('nome', 'data' , 'mandatos', 'filiacao'); 
}
