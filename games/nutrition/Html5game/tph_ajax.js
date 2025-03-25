function Davejax(url,async) {
   if (window.XMLHttpRequest) {
      xmlObject = new XMLHttpRequest();
   } else {
      xmlObject = new ActiveXObject("Microsoft.XMLHTTP");
   }
   
   xmlObject.open("GET",url,async);
   xmlObject.send(null);

   return xmlObject.responseText;
}