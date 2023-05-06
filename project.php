<!DOCTYPE html>
<html>
<body>

<h2>The XMLHttpRequest Object</h2>

<div id="demo">
<p>Let AJAX change this text.</p>
<button type="button" onclick="loadDoc()">Change Content</button>
</div>

<script>
function loadDoc() {
  // Create an XMLHttpRequest object
  const xhttp = new XMLHttpRequest();
  // Define a callback function
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML = this.responseText;
  }
  // Send a request
  xhttp.open("GET", "ajax_info.txt");
  xhttp.send();
}
</script>

</body>
</html>