<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- site information for SEO -->
    <title></title> <!-- titolo pagina-->
     <!-- <link rel="canonical" href="">  sito madre -->
    <link rel="icon" href="img/"> <!-- icona del sito-->
    <meta name="description" content=" "> <!-- descrizione SEO-->
    <meta name="keywords" content=""> <!-- parole chiave-->
    <meta name="author" content=" Pier Luca Mario Dussich">
    <!-- viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- collegamenti al CSS  -->

    <!-- BOOSTRAP 4.0 -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
    <!-- FONT AWESOME 4.0 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- CSS -->
    <link rel="stylesheet" href="css/dischi_style.css">
  </head>
  <body>
    <div id="root">
      <header>
          <div class="container">
              <img src="img/logo.png" alt="logo" />
          </div>
      </header>
      <div class="select">
        <select class="genre" name="" >
              <option value="All"> All</option>
              <option value="Pop"> Pop</option>
              <option value="Rock">Rock</option>
              <option value="Metal">Metal</option>
              <option value="Jazz">Jazz</option>
        </select>
      </div>
     
      <div class="cds-container container"> 
        @foreach ($data['response'] as $disco)       
          <!-- Disco ad esempio -->
          <div class="cd " >
              <img src="{{$disco['poster']}}" alt="">
              <h3>{{$disco['title']}}</h3>
              <span class="author">{{$disco['author']}}</span>
              <span class="year">{{$disco['year']}}</span>
          </div>
          @endforeach
      </div> 
    </div>

  </body>
</html>