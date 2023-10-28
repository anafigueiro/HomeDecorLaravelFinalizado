<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatório de ouvidorias</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-2">
        <h2 class="text-center mb-2">{{$title}}</h2>
        <table class="table table-bordered mb-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Data de registro</th>
                    <th scope="col">Sugestão</th>
                    <th scope="col">Observação</th>
                
                </tr>
            </thead>
            <tbody>
                @foreach($ouvidorias ?? '' as $item)
               
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                   
                    <td>{{ $item->dataRegistro }}</td>
                    <td>{{ $item->sugestao }}</td>
                    <td>{{ $item->observacao }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
