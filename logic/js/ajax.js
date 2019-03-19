function doAjax(request) {
  var xhr = new XMLHttpRequest();

  if (request.method === "GET") {
    request.url += "?" + request.data;
    request.data = NULL;
  }
  xhr.open(request.data, request.url);

if (typeof request.data != 'object') {
  xhr.setRequestHeader('Content-Type', request.contentType);
}
xhr.onreadystatechange = function() {
  if(xhr.readyState === 4 && xhr.status === 200) {
    request.callback(xhr.responseText);
  }
}
xhr.send(request.data);

}
