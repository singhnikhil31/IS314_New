<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    
      @include("admin.admincss")

  </head>
  <body>

  <div class="container-scroller">

      @include("admin.navbar")

    <h1>Customer Orders</h1>

    <table>
        <tr>
            <td style="padding: 30px;">Name</td>
            <td style="padding: 30px;">Phone</td>
            <td style="padding: 30px;">Seat</td>
            <td style="padding: 30px;">Item</td>
            <td style="padding: 30px;">Price</td>
            <td style="padding: 30px;">Quantity</td>
            <td style="padding: 30px;">Total</td>
        </tr>

        @foreach($data as $data)
        <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->seat}}</td>
            <td>{{$data->item}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->quantity}}</td>
            <td>{{$data->price*$data->quantity}}</td>
        </tr>
        @endforeach

    </table>
      
  </div>

      @include("admin.adminscript")
    
  </body>
</html>