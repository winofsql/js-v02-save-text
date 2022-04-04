<!DOCTYPE html>
<html>
<head>
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta charset="utf-8">
<title>テキストデータを保存する</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/encoding-japanese/2.0.0/encoding.min.js"></script>

<script src="client.js?_=<?= time() ?>"></script>

<style>
/* PC */
@media screen and ( min-width:480px ) {
    #content {
        margin: 26px;
    }
    #text {
        width: 480px;
        height: 360px
    }
}
/* スマホ */
@media screen and ( max-width:479px ) {
    #content {
        padding: 0px;
    }
    .btn {
        width: 100%;
    }
    #text {
        width: 100%;
        height: 400px
    }
}
</style>

</head>
<body>
<h3 class="alert alert-primary"><a href="control.php">テキストデータを保存する</a></h3>
<div id="content">
    <div>
        <input type="button" class="btn btn-secondary me-4" value="保存" id="save">
        <a href="." class="btn btn-secondary">フォルダ</a>
    </div>

    <div>
        <select id="charset" class="mt-4">
            <option value="0">UTF-8</option>
            <option value="1">SHIFT_JIS</option>
            <option value="2">EUC-JP</option>
            <option value="3">UTF-8_BOM</option>
        </select>
    </div>

    <div>
        <textarea id="text"></textarea>
    </div>
</div>
<div id="result" class="m-4"></div>
</body>
</html>
