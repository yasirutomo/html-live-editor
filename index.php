<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Live Editor untuk Belajar Web</title>
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        body {
            color:#000000;
            margin:0px;
            font-size:100%;
        }
        .trytopnav {
            height:40px;
            overflow:hidden;
            min-width:380px;
            position:absolute;
            width:100%;
            /* top:99px; */
            background-color:#E7E9EB;
        }
        #framesize span {
            xfont-family:Consolas, monospace;
        }
        #container {
            background-color:#E7E9EB;
            width:100%;
            overflow:auto;
            position:absolute;
            top:48px;
            bottom:0;
            height:auto;
        }
        #textareacontainer, #iframecontainer {
            float:left;
            height:100%;
            width:50%;
        }
        #textarea, #iframe {
            height:100%;
            width:100%;
            padding-bottom:10px;
            padding-top:1px;
        }
        #textarea {
            padding-left:10px;
            padding-right:5px;  
        }
        #iframe {
            padding-left:5px;
            padding-right:10px;  
        }
        #textareawrapper {
            width:100%;
            height:100%;
            background-color: #ffffff;
            position:relative;
            box-shadow:0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        }
        #iframewrapper {
            width:100%;
            height:100%;
            -webkit-overflow-scrolling: touch;
            background-color: #ffffff;
            box-shadow:0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        }
        #textareaCode {
            background-color: #ffffff;
            font-family: consolas,"courier new",monospace;
            font-size:15px;
            height:100%;
            width:100%;
            padding:8px;
            resize: none;
            border:none;
            line-height:normal;    
        }
        #iframeResult, #iframeSource {
            background-color: #ffffff;
            height:100%;
            width:100%;  
        }
        .trytopnav {
            height:48px!important;
        }
    </style>
</head>
<body>
    <div class="trytopnav">
        <div style="overflow:auto">
            <center><button style="margin:11px;">Run &raquo;</button></center>
        </div>
    </div>

    <!-- halaman live kode -->
    <div id="container">

    <!-- S:bagian kiri (editor) -->
    <div id="textareacontainer">
        <div id="textarea">
            <div id="textareawrapper">

<!-- S:snippet code -->
<textarea id="textareaCode" wrap="logical" spellcheck="false"><!DOCTYPE html>
<html>
<body>
<h1>The input formenctype attribute</h1>

<p>The formenctype attribute specifies how the form data should be encoded when submitted.</p>

<form action="/tangkap.html" method="post">
<label for="fname">First name:</label>
<input type="text" id="fname" name="fname"><br><br>
<input type="submit" value="Submit">
<input type="submit" formenctype="multipart/form-data" value="Submit as Multipart/form-data">
</form>

</body>
</html>
</textarea>
<!-- E:snippet code -->

            </div>
        </div>
    </div>
    <!-- E:bagian kiri (editor) -->

        <!-- S:bagian kanan (hasilnya) -->
    <div id="iframecontainer">
        <div id="iframe">
            <iframe id="iframewrapper"></iframe>
        </div>
    </div>
    <!-- E:bagian kanan (hasilnya) -->

    </div>
    <!-- E:kontainer -->

    <script>
    const first = document.getElementById("textareaCode");
    const iframe = document.querySelector("iframe");
    const btn = document.querySelector("button");

    btn.addEventListener("click", () => {
    var html = first.value;
    iframe.src = "data:text/html;charset=utf-8," + encodeURI(html);
    });

    // first.addEventListener('keyup',()=>{
    // var html = first.value;
    // iframe.src = "data:text/html;charset=utf-8," + encodeURI(html);
    // })

    first.addEventListener("paste", function(e) {
        e.preventDefault();
        var text = e.clipboardData.getData("text/plain");
        document.execCommand("insertText", false, text);
    });
    </script>

</body>
</html>