<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    
        <base href="/public">

      @include("admin.admincss")

  </head>
  <body>

  <div class="container-scroller">

      @include("admin.navbar")

      <div style="position: relative; top: 150px; right: -150px">

<form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">

    @csrf

    <div>
        <label>Item</label>
        <input style="color:black;" type="text" name="item" value="{{$data->item}}" required>
    
    </div>

    <div>
        <label>Price</label>
        <input style="color:black;" type="number" name="price" value="{{$data->price}}" required>
    
    </div>

    <div>
        <label>Description</label>
        <input style="color:black;" type="text" name="description" value="{{$data->description}}" required>
    
    </div>

    <div>
        <label>Current Image</label>
        <img height="200" width="200" src="/menuimage/{{$data->image}}">
    
    </div>

    <div>
        <label>Image</label>
        <input type="file" name="image" required>
    
    </div>

    <div>
        <input type="submit" value="Save">
    
    </div>

</form>
      
  </div>

      @include("admin.adminscript")
    
  </body>
</html>