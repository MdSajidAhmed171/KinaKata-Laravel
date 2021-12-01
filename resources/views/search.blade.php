@extends('master')
@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


  <div class="search-wrapper">
      <h3>Search-Result</h3>
        @foreach($product as $item)
        <div class="search-item">
          <a href="detail/{{$item['id']}}">
            <img class="trending-img" src="{{$item['image']}}">
            <div class="">
                <h3 style ="color: black;">{{$item['name']}}</h3>
                <h3 style ="color: black;">{{$item['description']}}</h3>
            </div>
          </a>
        </div>

        @endforeach
        
  </div>
</div>

    
@endsection