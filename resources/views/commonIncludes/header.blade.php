{{--
        <?php   
            use Assets\AssetManager as GetAsset; 
        ?>

<div class="header">
    <div id="topHeader">
    <div class=""> 
    
    <div class="row">
        
        <div class="row-eq-height col-xs-6 col-md-4 col-lg-4" id="logoContainer">
            <a class="logo" href="/">
                <img width="250" height="100" src="{{ GetAsset::getLogo() }}">
            </a> 
        </div>
        <div class="row-eq-height col-xs-6 col-md-4 col-lg-4" id="searchAnduser">
            @if($dropdownYesOrSideBar == "dropdown")
                @include('commonIncludes/dropDown')
            @endif
        </div>
        
        
    </div>
        
        
        
        
        
        
        
        {{--
        <div id="searchAnduser">
            
           <div id="searchArea"  class=".col-sm-6">
                
        @section('search')
            @include('commonIncludes/searchBar')
        @show
        
        
        
            </div>
            
            <div id="userLoginBox" class=".col-sm-6">
                
            @section('userCart')
                @include('commonIncludes/userCart')
            @show
        </div>
        
        </div>
        --}}
    </div>
    
            @if(!$dropdownYesOrSideBar == "dropdown")
                <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                    <span class="hamb-top"></span>
                  	<span class="hamb-middle"></span>
              		<span class="hamb-bottom"></span>
                </button>
            @endif

</div>
    <div id="botHeader">
        
        
    </div>
</div>


--}}