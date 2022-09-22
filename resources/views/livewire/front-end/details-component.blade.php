<div>
    <section class="details">
        <div class="details_image">
            <img src="{{asset('assets/image/'.$book->book_image)}}" alt="">
        </div>
        <div class="content" {{-- style="padding: 10rem" --}}>
            <h3>{{$book->book_name}}</h3>
            <div class="price">৳ {{$book->book_sale_price}} <span>৳ {{$book->book_price}}</span></div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">Buy Now</a>
            
            <div class="wrapper" style="margin-top:10px">
                <div class="tabs">
                  <ul>
                    <li style="display: inline;"><a href="{{route('read_book_index',$book->id)}}" class="readbtn">Read Book Index</a></li>
                    <li class="active" data-list="tab_1" style="display: inline;">
                      <p class="readbtn">Book Details</p>
                    </li>
                    <li data-list="tab_2" style="display: inline;">
                        <p class="readbtn">Demo Vedio</p>
                    </li>                    
                    {{-- <li style="display: inline;"></li> --}}
                  </ul>
                </div>
              
              <div class="content">
                <div class="tab_content tab_1">
                    <p style="font-size: 1.5rem;margin-top:10px">{{$book->book_description}}</p>                    
                </div>
                <div class="tab_content tab_2" style="margin-top:10px">
                    <video width="620" height="310" controls>
                        <source src="{{asset('assets/image/'.$book->book_demo_vedio)}}" type="video/mp4">
                      </video>
                </div>
              </div>
              </div>
        </div>   
    </div>
    </section>

    {{-- <section class="deal">

        

    </section> --}}
    
    <!-- arrivals section starts  -->

    <section class="arrivals" id="arrivals">

        <h1 class="heading"> <span>new arrivals</span> </h1>

        <div class="swiper arrivals-slider">

            <div class="swiper-wrapper">

                @foreach($newbooks as $newbook)
                <a href="{{route('book_details',$newbook->id)}}" class="swiper-slide box">
                    <div class="image">
                        <img src="{{asset('assets/image/'.$newbook->book_image)}}" alt="">
                    </div>
                    <div class="content">
                        <h3>{{substr($newbook->book_name,0,28)}}</h3>
                        <div class="price">৳ {{$newbook->book_sale_price}} <span>৳ {{$newbook->book_price}}</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>

        </div>

        <div class="swiper arrivals-slider">

            <div class="swiper-wrapper">
                @foreach($oldbooks as $oldbook)
                <a href="{{route('book_details',$oldbook->id)}}" class="swiper-slide box">
                    <div class="image">
                        <img src="{{asset('assets/image/'.$oldbook->book_image)}}" alt="">
                    </div>
                    <div class="content">
                        <h3>{{substr($oldbook->book_name,0,28)}}</h3>
                        <div class="price">৳ {{$oldbook->book_sale_price}} <span>৳ {{$oldbook->book_price}}</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>                
                @endforeach
            </div>

        </div>

    </section>

    <!-- arrivals section ends -->
</div>
