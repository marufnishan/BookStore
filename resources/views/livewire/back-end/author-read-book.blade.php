<div>
    <style>
        #overlay {
        width:90%;
        height:100vh;
        justify-content: center;
        margin: 0 5%;
        z-index: 1;
        }
        iframe {
        width:100%;
        height:100vh;

        }
        #container {
        position: relative;
        }
        #overlay, iframe {
        position: absolute;
        top: 0;
        left: 0;
        }
    </style>
    <div id="container">
        <div id="overlay">
        </div>
        <iframe src="{{asset('assets/image/'.$book->book_index_file)}}"  frameborder="0"></iframe>
      </div>
</div>
