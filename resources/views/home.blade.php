<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Azienda</th>
                    <th scope="col">Stazione di partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">Orario di partenza</th>
                    <th scope="col">Orario di arrivo</th>
                    <th scope="col">Codice treno</th>
                    <th scope="col">Numero carrozze</th>
                    <th scope="col">In orario</th>
                    <th scope="col">Cancellato</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)

                        <tr>
                            <th scope="row">{{$train->id}}</th>
                            <td>{{$train->azienda}}</td>
                            <td>{{$train->stazione_di_partenza}}</td>
                            <td>{{$train->stazione_di_arrivo}}</td>
                            <td>{{$train->orario_di_partenza}}</td>
                            <td>{{$train->orario_di_arrivo}}</td>
                            <td>{{$train->codice_treno}}</td>
                            <td>{{$train->numero_carrozze}}</td>
                    
                            @if ($train->in_orario === 1)
                                <td>In Orario</td>
                            @else
                                <td>In Ritardo</td>
                            @endif
                            
                            @if ($train->cancellato === 1)
                                <td>Cancellato</td>
                            @else
                                <td>Confermato</td>
                            @endif
                        
                        
                        </tr>
                    @endforeach
                </tbody>
            </table>       
        </div>
    </body>
</html>
