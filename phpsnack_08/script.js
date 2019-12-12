function printdata(data){
  var source = Handlebars.compile($("#entry-template").text());
  $('body').append(source(data));
};
function getData() {
    $.ajax({
      url: "retriveData.php",
      method: "GET",
      success: function(data) {
        console.log(data)
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