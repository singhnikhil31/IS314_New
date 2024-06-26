<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of cakes with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">


                @foreach($data as $data)

                <form action="{{url('/addcart' ,$data->id)}}" method="post">

                @csrf

                    <div class="item">
                        <div style="background-image: url('/menuimage/{{$data->image}}');" class='card'>
                            <div class="price"><h6>{{$data->price}}</h6></div>
                            <div class='info'>
                              <h1 class='title'>{{$data->item}}</h1>
                              <p class='description'>{{$data->description}}</p>
                              <div class="main-text-button">
                                  
                              </div>
                            </div>
                        </div>

                    <input type="number" name="quantity" min="1" value="1" style="width:80px;">
                    <input type="submit" value="Add to cart">

                    </div>

                    </form>

                    @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->