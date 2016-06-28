<!doctype html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8" />
      <title>jPlayer Tutorial</title>

       <link href="m7crono/css/bootstrap.css" rel="stylesheet">
       <script src="m7crono/js/jquery-1.9.1.js"></script>
       <script src="m7crono/js/bootstrap.js"></script>
      <link rel="stylesheet" href="m7crono/css/site.css" />
      <link rel="stylesheet" href="m7crono/css/cronometro.css" />
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
      <script type="text/JavaScript" src="m7crono/js/jplayer/dist/jplayer/jquery.jplayer.min.js"></script>
      <script type="text/JavaScript" src="m7crono/js/default.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      
            
  </head>
 <body>
      <div id="prime">
       <div id="jquery_jplayer_1" class="jp-jplayer"></div>
             <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
                <div class="jp-type-single">
                    <div class="jp-gui jp-interface">
                </div>
                <div class="jp-controls-holder">
                    <div class="jp-controls">
                        <button class="jp-play" role="button" tabindex="0"></button>
                     </div>
    
             </div>
         </div>
       </div>

       <!--Cronometro-->
      <div class="container">
          <div class="col-md-12 text-center">
          </div>
          <div class="col-md-12 text-center center-block">
               <div id="tempo" type="button" class="btn btn-warning tamanho text">00:00!</div>
          </div>
          <div class="marginTop col-md-12 text-center center-block">
               <button id="btn" onclick="cronometro(1)" type="button" class="col-md-2 col-md-offset-5 btn btn-success">Iniciar</button>
          </div>
          <div class="marginTop col-md-12 text-center center-block">
              <button id="btnPause" onclick="parar()" type="button" class="hide col-md-2 col-md-offset-5 btn btn-danger">Pause</button>
          </div>
           <div class="marginTop col-md-12 text-center center-block">
               <button id="btnStop" onclick="stop()" type="button" class="hide col-md-2 col-md-offset-5 btn btn-primary">Stop</button>
           </div>
           <div class="marginTop col-md-12 text-center center-block">
                <div class="col-md-4 col-md-offset-4">
                     <div class="input-group">
                          <span class="input-group-addon">Min</span>
                          <input id="minutos" type="number" min="0" max="59" class="form-control" placeholder="Minutos">
                     </div>
                <div class="input-group">
                     <span class="input-group-addon">Seg</span>
                      <input id="segundos" type="number"  min="0" max="59" class="form-control" placeholder="Segundos">
                      <input id="pause" type="hidden" value="0"  class="form-control">
                </div>
           </div>
         </div>
      </div>
    </div>  
  
  
 
   </body>
   </html>