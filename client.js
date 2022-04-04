// *************************************
// 文字列をバイナリ配列に変換
// *************************************
var str2array = function(str) {

    var array = [],i,il=str.length;
    for(i=0;i<il;i++) array.push(str.charCodeAt(i));
    return array;

};

// *************************************
// 保存関数
// *************************************

function save_text( str, encoding ) {

    var data_array = null;
    var result_data = null;

    str = str.replace(/\n/g, "\r\n")

    if ( encoding == "UTF-8" ) {
        saveAs(
            new Blob(
                [str]
                , {type: "text/plain;charset=utf-8"}
            )
            , "保存ファイル.txt"
        );
    }
    if ( encoding == "UTF-8_BOM" ) {
        saveAs(
            new Blob(
                [new Uint8Array([0xEF, 0xBB, 0xBF]),str]
                , {type: "text/plain;charset=utf-8"}
            )
            , "保存ファイル.txt"
        );
    }

    data_array = str2array( str );
    if ( encoding == "SHIFT_JIS" ) {
        data_array = Encoding.convert(data_array, "SJIS", "UNICODE");
        result_data = new Uint8Array(data_array);
        saveAs(
            new Blob(
                [result_data]
                , {type: "text/plain;charset=shift_jis"}
            )
            , "保存ファイル.txt"
        );
    }
    if ( encoding == "EUC-JP" ) {
        data_array = Encoding.convert(data_array, "EUCJP", "UNICODE");
        result_data = new Uint8Array(data_array);
        saveAs(
            new Blob(
                [result_data]
                , {type: "text/plain;charset=euc-jp"}
            )
            , "保存ファイル.txt"
        );
    }
}

// *************************************
// jQuery
// *************************************
$(function(){

    // 保存
    $("#save").on("click",function(){

        save_text( $("#text").val(), $("#charset  option:selected").text() );

    });

});
