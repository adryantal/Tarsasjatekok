<html>

<head>
    <title>Társasjáték adatainak szerkesztése</title>
    <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"> -->

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link href="/css/index.css" rel="stylesheet">
</head>

<body>
<main>
<header> <h1>Társasjáték adatainak szerkesztése</h1></header>
<div>

<form action="/api/tarsasjatek/{{ $tarsasjatek->id}}" method="POST">


        <fieldset>
            <div class="container-sm mt-3">
            <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />


               
                <!-- CREATED BY -->
                <label for="nev_magyar" class="form-label">Társasjáték magyar neve:</label>    
                <input type="text" class="form-control" id="nev_magyar" name="nev_magyar" value="{{$tarsasjatek->nev_magyar}}">  

                <label for="nev_angol" class="form-label">Társasjáték angol neve:</label>    
                <input type="text" class="form-control" id="nev_angol" name="nev_angol" value="{{$tarsasjatek->nev_angol}}"> 
                
                <label for="tipus" class="form-label">Társasjáték típusa:</label>    
                <input type="text" class="form-control" id="tipus" name="tipus" value="{{$tarsasjatek->tipus}}">

                <label for="ar" class="form-label">Társasjáték ára:</label>    
                <input type="number" class="form-control" id="ar" name="ar" value="{{$tarsasjatek->ar}}">

                <label for="jatekosok_szama" class="form-label">Játékosok száma:</label>    
                <input type="number" class="form-control" id="jatekosok_szama" name="jatekosok_szama" value="{{$tarsasjatek->jatekosok_szama}}">

                <label for="jatekido" class="form-label">Játékidő:</label>    
                <input type="number" class="form-control" id="jatekido" name="jatekido" value="{{$tarsasjatek->jatekido}}">
                
                <label for="vasarlas_ideje" class="form-label">Vásárlás ideje:</label>    
                <input type="date" class="form-control" id="vasarlas_ideje" name="vasarlas_ideje" value="{{$tarsasjatek->vasarlas_ideje}}">


                <br>


                <button class="btn btn-primary" type="submit">Módosít</button>
            </div>
            
            </fieldset>
        </form>


</div>
</main>
</body>

</html>
