function printData(data){
  var source = Handlebars.compile($("#entry-template").text());
  $('body').append(source(data));
};

function getData() {
    $.ajax({
      url: "retriveAds.php",
      method: "GET",
      success: function(data) {
          printData(data);
      },
      error: function(error) {
        console.log("error", error);
      }
    });
}

function init(){
  getData();
};

init();