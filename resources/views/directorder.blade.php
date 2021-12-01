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
<div class ="custom-prouct">
        <div class="container">
            <h2>Order List</h2>
            <p>The details about order:</p>            
            <table class="table table-bordered">
                
                <tbody>
                <tr>
                    <td>Amount(Tk)</td>
                    <td>{{$total}}</td>
                </tr>
                <tr>
                    <td>Delivery charge(Tk)</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>COD charge(Tk)</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Total Amount(Tk)</td>
                    <td>{{$total+50}}</td>
                </tr>
                </tbody>
            </table>
            <div>
                <form action="/directorderplace" method = "POST">
                    <div class="form-group">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$pid}}">
                    <label for="address">Input Your Delivery Location Address:</label><br>
                        <textarea name= "address" class="form-control" placeholder="Enter Address" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Payment Method:</label><br>
                        <input type = "radio" value = "cash" name = "payment"><span>Online Payment </span><br>
                        <input type = "radio" value = "cash" name = "payment"><span>EMI Payment </span><br>
                        <input type = "radio" value = "cash" name = "payment"><span>Cash On delivery </span><br>
                    </div>
                    <button type="submit" class="btn btn-primary">Check Out</button>
                    <br>
                    <br>
                </form>
            </div>
        </div>
    </div>
</div>

    
@endsection