function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

//FUNCTIONS:
let checkedCookies = getCookie("cookiesEnable");
if(checkedCookies === "")
{
    $('.cookies-eu-banner').removeClass('d-none');
}

$( ".cookies-eu-banner > .accept" ).click(function() {
    $( ".cookies-eu-banner" ).hide();
    setCookie("cookiesEnable", true, 365);
});

$( ".cookies-eu-banner > .decline" ).click(function() {
    $( ".cookies-eu-banner" ).hide();
    setCookie("cookiesEnable", false, 365);
});