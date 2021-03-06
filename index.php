<!DOCTYPE html>
<html lang="vi-VN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>vTrans - What is English?</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
    <div class="title-app">vTrans - What is English?</div>
    <div class="container">
        <div class="form-group" style="position: relative;">
            <span class="close clear-wrap glyphicon glyphicon-remove" style="display: none;" id="emptyText"></span>
            <textarea id="enTrans" class="form-control" rows="5" title="Text input"></textarea>
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-half btn-success btn-lg" onclick="dictionary();" id="btnEn">Dictionary</button>
            <button type="button" class="btn btn-half pull-right btn-primary btn-lg" id="translate">Translate</button>
        </div>

        <div id="load" style="display: none;">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>

        <div id="result" style="display: none;"><!-- Result -->
            <div id="translate-result" style="display: none;"><!-- Translate Result -->
                <div class="google">
                    <span class="google-label">Google:</span>
                    <span id="googleTrans"></span>
                </div>
                <div class="bing">
                    <span class="bing-label">Bing:</span>
                    <span id="bingTrans"></span>
                </div>
            </div>

            <div id="transcribe-result" style="display: none;"><!-- Transcribe Result -->
                <span class="transcribe-label">Transcribe:</span>
                <span id="transcribe"></span>
            </div>

            <div id="dictionary-result" style="display: none;"><!-- Dictionary Result -->
                <span id="title-word"></span>
                <span id="transcribe-word"></span>

                <div class="audio">
                    <span id="typeWord"></span>
                    <span id="auUK" onclick="audioUK.play();">UK<span class="glyphicon glyphicon-volume-up speakers"></span></span>
                    <span id="auUS" onclick="audioUS.play();">US<span class="glyphicon glyphicon-volume-up speakers"></span></span>
                </div>
            </div>


            <div id="error-error" style="display: none;" class="bg-success">
                <span>Cái này em chịu không xử lý được <img src="images/error.png"></span>
            </div>
            <div id="error-notfound" style="display: none;" class="bg-info">
                <span>Không tìm thấy từ này thím ợ <img src="images/notfound.png"></span>
            </div>
            <div id="error-net" style="display: none;" class="bg-danger">
                <span>Lỗi mạng rồi thím ơi <img src="images/net.png"> Thím kiểm tra lại mạng mẽo xem thế nào nhóe <img src="images/fun.png"></span>
            </div>
            <div id="error-empty" style="display: none;" class="bg-warning">
                <span>Điền từ gì vào đi thím <img src="images/empty.png"> Bên trên ý <img src="images/top.png"></span>
            </div>
        </div>
    </div>

    <footer class="modal-footer fix-bottom">
        <div class="pull-right">Copyright @TuTV</div>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.textcomplete.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>