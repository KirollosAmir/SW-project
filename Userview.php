<head>
  <script>
function isInputNumber(evt) {
  var ch = (evt.which) ? (evt.which) : (evt.keyCode)
  if(ch != 46 && ch > 31 && (ch < 48 || ch > 57)){
return false;
}
else {
	return true;
}
}
  
</script>

<script>
function a(event) {
  var char = event.which;
  
  if (char >31 && char !=32 && (char < 65 || char > 90 ) && (char < 97 || char > 122)) {
    
    return false;
  }  
}


</script>

<style>

input[type=text], select {
  width: 100%;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
max-height:40px;
border-radius:4px;
}
input[type=date], select {
  width: 100%;

  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  max-height:40px;
  border-radius: 4px;


}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  max-height:40px;
  font-family:Time new roman;
}
</style>
