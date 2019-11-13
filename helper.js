function addEventListeners()
{
    var buttonParent = document.getElementById('buttonParent');
    buttonParent.addEventListener('click',loading,false);
}

function loading(e)
{

  if (e.target !== e.currentTarget)
  {
    var loading = '<span class="fa fa-spinner fa-spin fa-5x" style="padding:40px;"></span>' ;
    document.getElementById("content").innerHTML = loading;
    var buttonID = e.target.id;
    loadStocksJSON();

  }
  e.stopPropagation();

}

function loadStocksJSON() {
 var xhttp = new XMLHttpRequest();
 xhttp.onreadystatechange = function() {
 if (this.readyState == 4) {
 switch(this.status){
 case 200:
 renderJSON(this);
 break ;
 case 404:
 var error = this.status + " " + this.statusText ;
 showError(error) ;
 break ;
 case 500:
 var error = this.status + " " + this.statusText ;
 showError(error) ;
 break ;
 }
 }
 };
 xhttp.open("GET", "getStocks.php?type=json", true);
 xhttp.send();
}

function renderJSON(data)
{
 var jsonData = JSON.parse(data.responseText);
 var output = '<ul class="list">';
 var stocks = jsonData.data.stocks;
 for (var i = 0; i < stocks.length; i++)
 {
 var data ="<p>"+ stocks[i].name +"</p><p>"+
 stocks[i].type + "</p><p>"+
 stocks[i].age + "</p><p>";
 output += "<li>" + data + "</li>" ;
 }
 document.getElementById("content").innerHTML = output;
}

function showError($error)
{
  console.log($error) ;
}


//This function appends the responsive class to topNav on click of the mobile menu. This creates the responsive stacked menu
function showResponsiveMenu()
{
    var topNav = document.getElementById("myTopnav");
    if (topNav.className === "topnav")
    {
        topNav.className += " responsive";
    }
    else
    {
        topNav.className = "topnav";
    }
}
