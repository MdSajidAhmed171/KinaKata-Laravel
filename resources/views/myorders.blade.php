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
<div class="container">
    @if(Session::has('user'))
        <h3>My Orders</h3>
            <table class="table table-bordered">
                @foreach($orders as $item)
                    <tbody>
                        <td>
                            <a href="detail/{{$item->id}}">
                                <img class="trending-img" src="{{$item->image}}">
                            </a>
                        </td> 
                        <td>
                            <a href="detail/{{$item->id}}">
                                <h3 style ="color: black;">Product Name: {{$item->name}}</h3>
                                <h3 style ="color: black;">Description: {{$item->description}}</h3>
                            </a>
                            <h3 style ="color: black;">Delivery Status: {{$item->status}}</h3>
                            <h3 style ="color: black;">product Price: {{$item->price}}</h3>
                            <h3 style ="color: black;">Payment Status: {{$item->payment_status}}</h3>
                            <h3 style ="color: black;">Payment Method: {{$item->payment_method}}</h3>
                        </td>
                    </tbody>
                @endforeach
            </table>
    @else
        <a href="/login"><h3 style="padding-left:400px; text-decoration: none;">Please login to view Order List</h3></a>
    @endif
</div>  
@endsection

            