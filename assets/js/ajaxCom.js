var script = document.createElement('script');
script.src = 'https://code.jquery.com/jquery-3.4.1.min.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);

let idPost = $('#idPost').val();
$("#sendCom").on('click', function(){
    let texte = $('#link').val();
    let sessionId = $('#sessionId').val();
    $.ajax({
        url : '?page=comment&action=create',
        type : 'POST',
        data : 'content=' + texte + '&idPost=' + idPost + '&sessionId=' + sessionId,
        dataType : 'html',
        success: function(code_html){
            $('#link').val('');
        }
    });
});