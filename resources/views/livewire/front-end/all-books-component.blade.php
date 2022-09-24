<div>
    <section class="allbooks" id="featured">

        <h1 class="heading"> <span>All books</span> </h1>

        <div class="allbooks-slider">

            <div class="wrapper">
                @foreach($books as $book)

                <div class="box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="{{route('book_details',$book->id)}}" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <a href="{{route('book_details',$book->id)}}"><img
                                src="{{asset('assets/image/'.$book->book_image)}}" alt=""></a>
                    </div>
                    <div class="content">
                        <h3>{{substr($book->book_name,0,20)}}...</h3>
                        <div class="price">৳ {{$book->book_sale_price}} <span>৳ {{$book->book_price}}</span></div>
                        <a href="#" class="btn">Buy Now</a>
                    </div>
                </div>

                @endforeach

            </div>

        </div>

        <div class="center">
            <div class="pagination">
                {!! $books->links() !!}
            </div>
        </div>

    </section>

</div>
</div>
