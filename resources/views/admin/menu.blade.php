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
      
    <div style="position: relative; top: 150px; right: -150px">

        <form action="{{url('/uploaditem')}}" method="post" enctype="multipart/form-data">

            @csrf

            <div>
                <label>Item</label>
                <input style="color:black;" type="text" name="item" placeholder="Choc Top" required>
            
            </div>

            <div>
                <label>Price</label>
                <input style="color:black;" type="number" name="price" placeholder="$4" required>
            
            </div>

            <div>
                <label>Image</label>
                <input type="file" name="image" required>
            
            </div>

            <div>
                <label>Description</label>
                <input style="color:black;" type="text" name="description" placeholder="Original" required>
            
            </div>

            <div>
                <input type="submit" value="Save">
            
            </div>

        </form>

        <div>
            <table bgcolor="black">

                <tr>
                    <th style="padding: 30px">Item</th>
                    <th style="padding: 30px">Price</th>
                    <th style="padding: 30px">Description</th>
                    <th style="padding: 30px">Image</th>
                    <th style="padding: 30px">Delete</th>
                    <th style="padding: 30px">Update</th>
                </tr>


                @foreach($data as $data)
                <tr align="center">

                    <td>{{$data->item}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->description}}</td>
                    <td><img height="200" width="200" src="/menuimage/{{$data->image}}"></td>
                    <td><a href= "{{url('/deleteitem',$data->id)}}">Delete</a></td>
                    <td><a href= "{{url('/updateview',$data->id)}}">Update</a></td>

                @endforeach

                </tr>

            </table>
        </div>

    </div>

</div>

      @include("admin.adminscript")
    
  </body>
</html>