var param = {
    "async": true,
    "url": 'data.php',
    "method": "GET",
    "data":'artist'
}
function theAjax(settings){
    $.ajax(settings).done(function (response) {
        doThis(response);
    })
}

function doThis(response){
    for(key in response){
        var artistName  = response[key].author;
        console.log(artistName);
        $('#artist').append('<option value="'+artistName+'">'+artistName+'</option>')
    }
    var source = Handlebars.compile($("#tmpl-disco").text());
    for(key in response){
        var data = {
            poster:response[key].poster,
            title:response[key].title,
            author:response[key].author,
            year:response[key].year,
        }
        $('.final').append(source(data))
    }
    
}
$(function(){
    theAjax(param);
})
