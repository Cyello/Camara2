@extends('layout.principal')

@section('conteudo')
  
     <!-- By Mateus Costa Perfil-->

      <link href="{{ asset('/cssc/bootstrap.css') }}" rel="stylesheet">
       <script src="{{ asset('/jsc/jquery-1.9.1.js') }}"></script>
       <script src="{{ asset('/jsc/bootstrap.js') }}"></script>
       <link rel="stylesheet" href="{{ asset('/cssc/site.css') }} "/>
       <link rel="stylesheet" href="{{ asset('/cssc/cronometro.css') }}" />
       <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
       <script type="text/JavaScript" src="{{ asset('/jsc/jplayer/dist/jplayer/jquery.jplayer.min.js') }}"></script>
       <script type="text/JavaScript" src=" {{ asset('/jsc/default.js') }}"></script>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
     <div class="row"> 
       <a href="#" class="list-group-item active"><h4 class="text-center"><strong>Orador</strong></h4></a>
           <a href="#" class="list-group-item"><h4 class="text-center">{{$p->nome}}</h4></a></br>
           <a href="#">   </a>
       <div class="col-md-2 col-md-push-1">
                 <div class="container">
                 <img src="/img/{{$p->avatar}}" style="width:175px; height:175px; float:left; borde-radius:50%; margin-right:25px;">
              </div>
              <div class="list-group">
                      <a href="#" class="list-group-item"><h3 class="text-center"><strong>{{$p->filiacao}}</strong></h3></a>
                   </div>     
              </div>  
             <!-- By Mateus Costa Cronometro-->
          <div class="col-md-7 col-md-push-1">
              <div class="col-md-7 text-center center-block">
                  <div id="tempo" type="button" class="btn btn-primary btn-lg btn-block">00:00!</div>
              </div>
              <div class="marginTop col-md-12 text-center center-block">
                  <button id="btn" onclick="cronometro(1)" type="button" class="col-md-2 col-md-offset-5 btn btn-success">Iniciar</button>
              </div>
              <div class="marginTop col-md-12 text-center center-block">
                  <button id="btnPause" onclick="parar()" type="button" class="hide col-md-2 col-md-offset-5 btn btn-danger">Pause</button>
              </div>
               <div class="marginTop col-md-12 text-center center-block">
                   <div class="col-md-4 col-md-offset-4">
                        <div class="input-group">
                            <span class="input-group-addon">Min</span>
                            <input id="minutos" type="number" min="0" max="59" class="form-control" placeholder="Minutos" value="2">
                        </div>
                        <div class="input-group">
                             <span class="input-group-addon">Seg</span>
                             <input id="segundos" type="number"  min="0" max="59" class="form-control" placeholder="Segundos"value="0">
                             <input id="pause" type="hidden" value="0"  class="form-control">
                        </div>
                    </div>
                </div>
           </div>
        </div>         
         <!-- By Mateus Costa Jplay    -->
        <div id="jquery_jplayer_1" class="jp-jplayer"></div>
        <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
            <div class="jp-type-single">
                  <div class="jp-gui jp-interface"></div>
                  <div class="jp-controls-holder">
                        <div class="jp-controls"><button class="jp-play" role="button" tabindex="0"></button></div>
                   </div>
             </div>
       </div>
       <div id="jquery_jplayer_0" class="jp-jplayer"></div>
        <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
            <div class="jp-type-single">
                  <div class="jp-gui jp-interface"></div>
                  <div class="jp-controls-holder">
                        <div class="jp-controls"><button class="jp-play" role="button" tabindex="0"></button></div>
                   </div>
             </div>
       </div>
    </div> 
 

@stop