{{-- composer require laravel/installer 
    in effect 
    1)composer require a commande existe in composer for specifie the packege whiche we wante to <install>
    2)laravel/installer mean we want to take rout or files existe in this route in gitb in laravel freamwork
    </install>
     composer create-project laravel/laravel projname
     it clarifier by the samz thing
     visit github for more inforamation
     for install laravel with  a specific verstion we can choose  composer create-project laravel/laravel="versito.*.*" projname 
    --}}
    {{-- ***laravel instruction
        1)Bootstrape:selfstarting processus do auto loading classe
        2)config:configuration of each file database mail 
        3)database of generate data base
        4)public include everytng related to fonrontend
        5)ressorces:view write in blade tamplette version not php and its compiled to php code
        6)route :define eache views
        7)storage:in this we have file of compalied to php code
        what is php unit test
        8)vendor:dependy exist in composer --}}
        {{-- tamplette engine 
            A template engine is a software component that helps to generate dynamic output by combining
             pre-designed templates with data or information provided at runtime.
             and its can has features dosn't exist in thE language its like in html can give its some particaler of programming language
             exemple:PUG to HTML blade for php jinja for python 
             the template is sparate fro language programming syntax --}}
        {{-- templete egine of laravel :blade and for know its stntax just see blade documentation --}}
        {{-- routing in laravel 
            for define a route we  can use this methode 
            Route::get('/', function () {
             return view('welcome',arrayofdata);
            });
            for no escaping{!! var!!}

            or this Route::view("route",'viewname',arrayofdata)
            exemple:Route::view('contacte-me','contact')
        --}}