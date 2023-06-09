<!DOCTYPE html>

<html>
<head>
  
    <title>OMDb API</title>
    
    <link rel="stylesheet" href="{{ asset('/assets/style.css') }}">
</head>
<body class="main">
    <header>
        <nav>
          <div class="logo" >
            <img src="assets/background.png" style="width: 100px" alt="" />
          </div>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="{{route('search.post')}}">OMDB</a></li>
            <li><a href="{{route('database')}}">Database</a></li>
  
          </ul>
        </nav>
      </header>
    
    <h1 style="margin-top: 5%" align="center" id="judul">Database movie dari OMDb API</h1>
    <div class="search-container">
        <form action="{{ route('search.post') }}" method="post">
            @csrf
           <div class="form-input">
                <input class="search" type="text" name="searchValue" id="search-input" placeholder="masukkan kata kunci film..."required>
                <button type="submit" id="search-button">Search</button>
           </div>
        </form>
    </div>

    <div class="result">
        <div class="movie">
            @forelse ( $data as $val )
            <div class="list-movie">
                <p class="title">{{$val->Title}}</p>
                <img src="{{$val->Poster}}" alt="Poster" width="200px" height="250px">
            </div>
               
            @empty
                <p>Data masih kosong</p>
            @endforelse
        </div>
       
        <div>

        </div>
    </div>
</body>
</html>
</html>