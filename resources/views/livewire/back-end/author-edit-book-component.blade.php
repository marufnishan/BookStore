<div>
    <div>
        <div style="background-color:#F2F3F5">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-8 my-5 p-5  rounded-3" style="background-color: #FFFFFF">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <h1>Edit Book</h1>
                        <form wire:submit.prevent="UpdateBook" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label">Book Name</label>
                                <input type="text" class="form-control" wire:model="book_name">
                                @error('book_name')
                                <span class="error" style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Book Cover Photo</label>
                                <input type="file" class="form-control" id="book_image" name="book_image"
                                    wire:model="book_new_image">
                                @error('book_new_image')
                                <span class="error" style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Book Description</label>
                                <input type="text" class="form-control" id="book_description" name="book_description"
                                    wire:model="book_description">
                                @error('book_description')
                                <span class="error" style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Book Category</label>
                                <input type="text" class="form-control" id="book_category" name="book_category"
                                    wire:model="book_category">
                                @error('book_category')
                                <span class="error" style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Book Type</label>
                                <input type="text" class="form-control" id="book_type" name="book_type"
                                    wire:model="book_type">
                                @error('book_type')
                                <span class="error" style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Book Price</label>
                                <input type="text" class="form-control" id="book_price" name="book_price"
                                    wire:model="book_price">
                                @error('book_price')
                                <span class="error" style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Book Sale Price</label>
                                <input type="text" class="form-control" id="book_sale_price" name="book_sale_price"
                                    wire:model="book_sale_price">
                                @error('book_sale_price')
                                <span class="error" style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Book Author Name</label>
                                <input type="text" class="form-control" id="book_author_name" name="book_author_name"
                                    wire:model="book_author_name">
                                @error('book_author_name')
                                <span class="error" style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Book PDF</label>
                                <input type="file" class="form-control" id="book_pdf_file" name="book_pdf_file"
                                    wire:model="book_new_pdf_file">
                                @error('book_new_pdf_file')
                                <span class="error" style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Book Index PDF</label>
                                <input type="file" class="form-control" id="book_index_file" name="book_index_file"
                                    wire:model="book_new_index_file">
                                @error('book_new_index_file')
                                <span class="error" style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Book Demo Vedio</label>
                                <input type="file" class="form-control" id="book_demo_vedio" name="book_demo_vedio"
                                    wire:model="book_new_demo_vedio">
                                @error('book_new_demo_vedio')
                                <span class="error" style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-info">Update Book</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
