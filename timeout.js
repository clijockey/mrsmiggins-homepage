// Time in milliseconds to wait:
var timeOut = 5000;
// Page to redirect to:
var redirect = "http://public.ukidcv.local/restricted";

function checkTimeOut () {
  setTimeout('timedOut()', timeOut);
}
function timedOut () {
  window.location = redirect;
}
