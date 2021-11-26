<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
  <link type="image/x-icon" href="images/fav.png" rel="shortcut icon">
  
  <!-- Styles-->
   <!--  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jagdevelop.css" >
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/project.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/waitMe.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css" >

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/dashboard.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/theme1.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/elements.css"/> -->

<!-- from cdn  
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  CDN  -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">


  <!-- JS  -->

  <script src="<?php echo base_url();?>assets/js/jquery-2.1.3.min.js"></script> 
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" ></script> 
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/signature-pad.js"></script> 

<title>Single Signature</title>
</div>
 <section>
    <div class="container">
        <div class="signature-pad" id="signature-pad">
          <div class="m-signature-pad">

            <div class="m-signature-pad-body">
              <canvas width="625" height="318"></canvas>
            </div>

          </div>

          <div class="m-signature-pad-footer">
            <button type="button"  id="save2" data-action="save" class="btn btn-primary"><i class="fa fa-check"></i> Save</button>
            <button type="button" data-action="clear"  class="btn btn-danger"><i class="fa fa-trash-o"></i> Clear</button>
          </div>
        </div>
    </div>
  </section>
<!-- random id generated here  -->
  <input type="hidden" value="<?php echo rand();?>" id="rowno">
  <section>
    <div class="container">
      <div class="boxarea">
<div id="previewsign1" class="previewsign">
<br>
  <h1>See The Sign Here!!</h1>
</div>
</div>
</div>
</section>
  <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Warning!</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger">
          Please Sign Before Submit!
        </div>
      </div>
    </div>
  </div>
</div>
  <script>
    var wrapper = document.getElementById("signature-pad"),
    clearButton = wrapper.querySelector("[data-action=clear]"),
    saveButton = wrapper.querySelector("[data-action=save]"),
    canvas = wrapper.querySelector("canvas"),
    signaturePad;
    function resizeCanvas() {
      var ratio =  window.devicePixelRatio || 1;
      canvas.width = canvas.offsetWidth * ratio;
      canvas.height = canvas.offsetHeight * ratio;
      canvas.getContext("2d").scale(ratio, ratio);
    }
    signaturePad = new SignaturePad(canvas);

    clearButton.addEventListener("click", function (event) {
      signaturePad.clear();
    });
    saveButton.addEventListener("click", function (event) {
      if (signaturePad.isEmpty()) {
        $('#myModal').modal('show');
      }
      else {
       
        $.ajax({
          type: "POST",
          url: "<?php echo base_url();?>Signature/insert_single_signature",
          data: {'image': signaturePad.toDataURL(),'rowno':$('#rowno').val()},
          success: function(datas1)
          {            
            signaturePad.clear();
            $('.previewsign').html(datas1);
          }
        });
      }
    }); 

  </script>
    <style type="text/css">
    .previewsign
    {   
    border: 1px dashed #ccc;
    border-radius: 5px;
    color: #bbbabb;
    height: 253px;
    width: 46%;
    text-align: center;
    float: right;
    vertical-align: middle;
    top: 350px;
    position: fixed;
    right: 336px;
  }
  .m-signature-pad-body
  {
    border: 1px dashed #ccc;
    border-radius: 5px;
    color: #bbbabb;
    height: 253px;
    width: 46%;
    text-align: center;
    float: right;
    vertical-align: middle;
    top:10px;
    position: fixed;
    left: 400px;
  }
  .m-signature-pad-footer
  {
    bottom: 300px;
    left: 400px;
    position: fixed;
  }
    .img
  {
        right: 0;
    position: absolute;
  }
</style>
</body>
</html>