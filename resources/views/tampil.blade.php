<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Destinasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/assets/style.css') }}">
</head>
  <body>

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
    <h1 class="text-center mt-2 mb-5 mt-5 pt-5">Data Konsumen</h1>
    
    <div class="container">
      <a href="\tambahdestinasi" type="button" class="btn btn-primary">Tambah Destinasi</a>
      <div class="row">
  
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Address</th>
              <th scope="col">Age</th>
              <th scope="col">Phone</th>
              <th scope="col">Dibuat</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($konsumen as $row)
            <tr>
              <th scope="row">{{$row->id}}</th>
              <td>{{$row->name}}</td>
              <td>{{$row->address}}</td>
              <td>{{$row->Age}}</td>
              <td>{{$row->Phone}}</td>
              <td>{{$row->created_at->diffForHumans()}}</td>
              <td> <button type="button" class="btn btn-success">Update</button>
                <button type="button" class="btn btn-danger">Hapus</button> 
                <form id="form-{{$row->id}}" action="{{}}" method="POST">
                  @csrf
                  @method('delete')
                </form></td>
             

            </tr>
            @endforeach
            
           
          </tbody>
        </table>
      </div>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>