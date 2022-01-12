<html>

<head>
    <title>Társasjátéklista</title>
    <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"> -->

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link href="/css/index.css" rel="stylesheet">
</head>

<body>

<main>

<header> <h1>Társasjátéklista</h1></header>
<div>
<table class='table table-striped'>
<tr >
    <th>Magyar név</th>
    <th>Angol név</th>
    <th>Típus</th>
    <th>Ár</th>
    <th>Játékosok száma</th>
    <th>Játékidő</th>
    <th>Vásárlás dátuma</th>   
    <th>Műveletek</th>
    </tr>
    @foreach ($tarsasjatekok as $tarsasjatek)
    <tr>
        <td>{{$tarsasjatek->nev_angol}}</td>
        <td>{{$tarsasjatek->nev_magyar}}</td>
        <td>{{$tarsasjatek->tipus}}</td>
        <td>{{$tarsasjatek->ar}}</td>
        <td>{{$tarsasjatek->jatekosok_szama}}</td>
        <td>{{$tarsasjatek->jatekido}}</td>
        <td>{{$tarsasjatek->vasarlas_ideje}}</td>
       
       
        <td>
         
                <!-- BUTTONS -->
                        
                                               
                        <div class="btn"><a class="btn btn-sm btn-info" href="{{ URL::to('tarsasjatek/edit/'. $tarsasjatek->id ) }}">Módosít</a></div>

                        
                        <div class="btn">
                            <form method="POST" action="/api/tarsasjatek/{{$tarsasjatek->id}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input type="submit" class="btn btn-sm btn-danger" value="Töröl">
                            </form>
                        </div>


                    </td>
                </tr>

    </tr>
        
    @endforeach



</table>

</div>

<div><a class="nav-link" href="{{ URL::to('/tarsasjatek/new') }}">Új társasjáték rögzítése</a></div> 

</main>
</body>

</html>
