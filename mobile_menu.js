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
function validateForm()
{
  var userField = document.forms["loginForm"]["username"].value;
  var passField = document.forms["loginForm"]["password"].value;
  if (userField == "" || passField == "")
  {
      alert("You must enter a username and password");
      return false;
  }
}
