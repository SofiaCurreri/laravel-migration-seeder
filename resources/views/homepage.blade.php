<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{env('APP_NAME')}}</title>

  {{-- Includiamo gli assets con la direttiva @vite --}}
  @vite('resources/js/app.js')
</head>

<body>
  <main>
    
    <div class="container">
      <h1 class="my-4">Treni in partenza oggi:</h1>
      <div class="row row-cols-4 gap-5">
        @foreach ($trains as $train)       
              <div class="card " style="width: 18rem;">
                <div class="card-header">
                  Treno {{$train->codice_treno}}
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Partenza da: {{$train->stazione_partenza}}</li>
                  <li class="list-group-item">Arrivo a: {{$train->stazione_arrivo}}</li>
                  <li class="list-group-item">Orario partenza: {{$train->orario_partenza}}</li>
                  <li class="list-group-item">Orario arrivo: {{$train->orario_arrivo}}</li>
                  <li class="list-group-item">In orario: <?php echo $train->in_orario ? "Si" : "No"; ?></li>
                  <li class="list-group-item">Cancellato: <?php echo $train->cancellato ? "Si" : "No"; ?></li>
                </ul>
              </div>              
        @endforeach
      </div>
    </div>
    
  </main>
</body>

</html>
