@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title" style="color:#fff"> Show All Table Order</h3>
            <div class="card-body">
                <table class="table text-center" >
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Prodect_name</th>
                        <th scope="col">Quntity</th>
                        <th scope="col">Price</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            
                       
                      <tr>
                        
                        <td>{{$order->id}}</td>
                        <td>{{$order->name}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->prodect_tille}}</td>
                        <td>{{$order->qty}}</td>
                        <td>{{$order->price}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
