@extends('mainTemplates/template')
        


       @section('content')
      
            <?php
            
            
            ///////                 Provisional
            if(!isset($categoria)){
                    $categoria = "AMD socket FM2+";
                    
                    $results =  \DBData::getAllWhereTituloFamilia($categoria);  
                
            }
            
            ?>
<div id="container"  class="produContainer">
    <div id="CategoryHeader" class="{{ \DBData::desAccentify($results[0]->TITULOSUBFAMILIA) }}">{{ $results[0]->TITULOSUBFAMILIA }}</div>
        @include('includes/productList')
        
</div>
           
<button id="btn1" class="container loadMoreProducts">Cargar mas productos</button>     
            
        @endsection