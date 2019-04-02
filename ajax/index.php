<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <script language="javascript" src="ajax.js"></script>
    </head>
    <body>
        <div id="noidung">
            Nội dung ajax sẽ được load ở đây
        </div>
        <div id="oday">
            
        </div>
        <input type="text" value="" id="name"/>
        <input type="text" value="" id="age"/>
        <input type="button" name="clickme" id="clickme" onclick="load_ajax()" value="Click Me"/>
        <select name="" id="" style="width: 200px;" class="js-data-example-ajax"></select>
    </body>
</html>