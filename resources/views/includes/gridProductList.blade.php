<div class="typeGrid ">

       <div class="productWrapper col-xs-12 col-md-4 col-lg-3 article-block">
    <!--
          <div class="typeGrid productWrapper col-xs-4 col-md-3 col-lg-3 article-block">
    -->          
              <div class="product">
                  <div class="precioProducto"> {{ round($resu->PRECIO,2) }} &euro;</div>
                <div class="imagenProducto">
                    <img width="75%" src={{ infortisaApi::getProductMainImage($resu->CODIGOINTERNO) }} />
                </div>
                <div class="nombreProducto"><a href="/producto/{{ DBData::desAccentify($resu->TITULO) }}"> {{ $resu->TITULO }}</a></div>
               
                        <div class="stockProducto"> 
                        
                        
                        <div class="progress">
                          <div class=" stock-bar progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="{{ "width: " . $resu->STOCK *2 . "%" }}">
                            
                          </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        </div>
                    </div>
            </div>

</div>

