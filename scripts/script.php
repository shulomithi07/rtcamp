<script>

var check = function() {
    if (document.getElementById('password').value ==
      document.getElementById('confirm_password').value) {
      document.getElementById('message').style.color = 'green';
      document.getElementById('message').innerHTML = 'password matched';
    } else {
      document.getElementById('message').style.color = 'red';
      document.getElementById('message').innerHTML = 'password didn\'t match.';
    }
  }

</script>

<script>
  function _(el){
    return document.getElementById(el);
  }
  function uploadFile(){
    var file = _("file").files[0];
    // alert(file.name+" | "+file.size+" | "+file.type);
    var formdata = new FormData();
    formdata.append("file", file);
    var ajax = new XMLHttpRequest();
    ajax.upload.addEventListener("progress", progressHandler, false);
    ajax.addEventListener("load", completeHandler, false);
    ajax.addEventListener("error", errorHandler, false);
    ajax.addEventListener("abort", abortHandler, false);
    ajax.open("POST", "upload.php");
    ajax.send(formdata);
  }
  function progressHandler(event){
    _("loaded_n_total").innerHTML = "Uploaded "+(Math.round(event.loaded/1000000))+" MB of "+(Math.round(event.total/1000000))+" MB";
    var percent = (event.loaded / event.total) * 100;
    _("progressBar").value = Math.round(percent);
    _("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
      
  }
  function completeHandler(event){
    _("status").innerHTML = event.target.responseText;
    _("progressBar").value = 0;
  }
  function errorHandler(event){
    _("status").innerHTML = "Upload Failed";
  }
  function abortHandler(event){
    _("status").innerHTML = "Upload Aborted";
  }
</script>
