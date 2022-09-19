<div>
    <div style="background-color:#F2F3F5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8 my-5 p-5  rounded-3" style="background-color: #FFFFFF">
                    <form method="POST" action="{{-- {{ route('register') }} --}}" enctype="multipart/form-data">
                        @csrf
                        <h1>Add New Book</h1>
                        <label for="book_name" class="form-label">Book Name</label>
                        <input type="text" class="form-control" id="book_name" name="book_name">

                        <label for="book_name" class="form-label">Book Cover Photo</label>
                        <input type="file" class="form-control" id="book_name" name="book_name">

                        <label for="book_description" class="form-label">Book Description</label>
                        <input type="text" class="form-control" id="book_description" name="book_description">

                        <label for="book_category" class="form-label">Book Category</label>
                        <input type="text" class="form-control" id="book_category" name="book_category">

                        <label for="book_type" class="form-label">Book Type</label>
                        <input type="text" class="form-control" id="book_type" name="book_type">

                        <label for="book_price" class="form-label">Book Price</label>
                        <input type="text" class="form-control" id="book_price" name="book_price">

                        <label for="book_sale_price" class="form-label">Book Sale Price</label>
                        <input type="text" class="form-control" id="book_sale_price" name="book_sale_price">

                        <label for="book_author_name" class="form-label">Book Author Name</label>
                        <input type="text" class="form-control" id="book_author_name" name="book_author_name">

                        <label for="book_pdf_file" class="form-label">Book PDF</label>
                        <input type="file" class="form-control" id="book_pdf_file" name="book_pdf_file">

                        <label for="book_index_file" class="form-label">Book Index PDF</label>
                        <input type="file" class="form-control" id="book_index_file" name="book_index_file">

                        <label for="book_demo_vedio" class="form-label">Book Demo Vedio</label>
                        <input type="file" class="form-control" id="book_demo_vedio" name="book_demo_vedio">

                        <button type="submit" class="btn btn-info my-3">Add Book</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
