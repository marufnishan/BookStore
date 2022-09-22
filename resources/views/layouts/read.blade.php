<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Book Index</title>
        <style>

            @media print {
            
            html,
            body {
                display: none;
            }
            }
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
        @livewireStyles
    </head>
    <body oncontextmenu="return false">
        {{$slot}}

    {{-- copy past --}}
        <script>

        document.onkeydown = function(e) {
            if(e.keyCode == 123) {
            return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
            return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
            return false;
            }
            if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
            return false;
            }

            if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)){
            return false;
            }      
        }

        </script>

<script language="javascript">
    var noPrint=true;
    var noCopy=true;
    var noScreenshot=true;
    var autoBlur=true;
    </script>
    
    <script type="text/javascript" src="https://pdfanticopy.com/noprint.js"></script>
{{-- copy past --}}
        @livewireScripts
    </body>
    </html> 