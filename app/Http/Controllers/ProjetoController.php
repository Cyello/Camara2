<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Vereador;
use App\Projeto;
use App\Ver_Proj;
use DB;


class ProjetoController extends Controller
{
    public function show ($id, $id2) {

         //Retorna o total de votos
    	$desc = DB::select('select COUNT(vt.tipo) as qt, p.nome, p.des from vereador v, projetos p, votos vt where 
    		p.id = vt.id_proj and v.id = vt.id_ver and p.id = ?', [$id2]);

        //votos sim
        $vsim = DB::select('select distinct v.nome, s.nome as ses, s.data from vereador v, votos vt, sessao s WHERE
        v.id = vt.id_ver and s.id = vt.id_ses and vt.tipo = 1 and vt.id_proj = ?', [$id2]);

        //votos não
        $vnao = DB::select('select distinct v.nome, s.nome as ses, s.data from vereador v, votos vt, sessao s WHERE
        v.id = vt.id_ver and s.id = vt.id_ses and vt.tipo = 2 and vt.id_proj = ?', [$id2]);

        //abstinencia
        $vabs = DB::select('select distinct v.nome, s.nome as ses, s.data from vereador v, votos vt, sessao s WHERE
        v.id = vt.id_ver and s.id = vt.id_ses and vt.tipo = 3 and vt.id_proj = ?', [$id2]);
        
    	//Votos sim 
    	$desc2 = DB::select('select COUNT(vt.tipo) as qt from vereador v, projetos p, votos vt where 
    		p.id = vt.id_proj and v.id = vt.id_ver and p.id = ? and vt.tipo = 1', [$id2]);
    	//Votos não
    	$desc3 = DB::select('select COUNT(vt.tipo) as qt from vereador v, projetos p, votos vt where 
    		p.id = vt.id_proj and v.id = vt.id_ver and p.id = ? and vt.tipo = 2', [$id2]);
    	//Abnegação
    	$desc4 = DB::select('select COUNT(vt.tipo) as qt from vereador v, projetos p, votos vt where 
    		p.id = vt.id_proj and v.id = vt.id_ver and p.id = ? and vt.tipo = 3', [$id2]);

        //Retorna as sessões do projeto
        /*
        $ses = DB::select('select distinct s.nome from sessao s, votos vt WHERE
        s.id = vt.id_ses and vt.id_proj = ?', [$id2]);
*/

    	return view('projeto.descProj', [
            'desc' => $desc, 'desc2' => $desc2, 'desc3' => $desc3, 'desc4' => $desc4, 
            'vsim' => $vsim, 'vnao' => $vnao, 'vabs' => $vabs
        ]);

    
    }
}





