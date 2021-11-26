 // var img = "<div class=text-right style=margin-right:50px><img src='<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg' height=200 width=200  class=img-thumbnail></div>";
$("#sendBtn").click(function(){
    data:{message:msg,receiver:receiver,name:name,cDate:cDate},
    "+msg+"</div>"+img;






    if(res.status==1){
    console.log(res.status);
      // var img = "<div class=text-right style=margin-right:50px><img src='<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg' height=200 width=200  class=img-thumbnail></div>";
     var html ="<div class=direct-chat-infos clearfix><span class=direct-chat-timestamp float-left>"+cDate+"</span><span class ='direct-chat-name float-right'>"+name+"</span></div><div><img class=direct-chat-img src="+img+" alt=message user image></div><div class=direct-chat-text>"+msg+"</div>"+image;
     $('#sentMsg').append(html);
     $('#message').val(null);
     <style type="text/css">
  .card-title{
    text-transform: uppercase;
    margin-left: 6px;
    margin-top: 10px;
    font-weight: 600;
  }
</style>
<?php 

 $senderID=$this->session->userdata('id');
$userInfo=$this->db->get_where('admin',array('id'=>$senderID))->row_array();
 $name = $userInfo['name'];
$cDate = date('Y-m-d H:i:s', time()); 
 ?>

            <div class="card direct-chat direct-chat-primary">
              <div class="card-header">
                <?php $receiver=$this->db->get_where('admin',array('id'=>$receiver_id))->row_array();
                ; ?>
                <div>
             <img class="direct-chat-img" src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="message user image"></div>
            <span><h3 class="card-title" ><?php echo $receiver['name']; ?></h3></span> 
              </div>
              <div class="card-body">
                <div class="direct-chat-messages">
                  <?php foreach($result as $row){ 
                   $id=$this->session->userdata['id'];
                   $sender_id = $row['sender_id'];
                    $receiver_id = $row['receiver_id'];
                   $sender=$this->db->get_where('admin',array('id' => $sender_id))->row_array();
                   if($sender_id != $id){
                    ?>
                   
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left"><?php echo $sender['name']; ?></span>
                      <span class="direct-chat-timestamp float-right"><?php echo $row['created_at']; ?></span>
                    </div>
                    <img class="direct-chat-img" src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="message user image">
                     <?php if(!empty($row['message'])){?>
                       <div class="direct-chat-text">
                     <?php echo $row['message']; ?>
                    </div><br>
                     <?php } if(!empty($row['image'])) {?>
                     <div>
                         <img src='<?php echo  base_url(); ?>upload/<?php echo $row['image']; ?>' height="200" width="200"  class="img-thumbnail">
                     </div>
                  </div>
                <?php }?>
              <?php } 
              else {
               ?>
                  <div class="direct-chat-msg right">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-right"><?php echo $sender['name']; ?></span>
                      <span class="direct-chat-timestamp float-left"><?php echo $row['created_at']; ?></span>
                    </div>
                    <img class="direct-chat-img" src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="message user image">
<?php if(!empty($row['message'])){?>
                    <div class="direct-chat-text">
                      <?php echo $row['message']; ?>
                    </div><br>
<?php } if(!empty($row['image'])) {  ?>
                     <div class="text-right" style="margin-right:50px">
                         <img src='<?php echo  base_url(); ?>upload/<?php echo $row['image']; ?>' height="200" width="200"  class="img-thumbnail" >
                     </div>
                  </div>
                <?php } } } ?>
                
                <div id="sentMsg" class="direct-chat-msg right"></div>
                </div>
              <div class="card-footer">
                <form action="#" method="post" id="imageupload" enctype="multipart/form-data">
                  <div class="input-group">
                    <input type="text" name="message" id="message" placeholder="Type Message ..." class="form-control" autocomplete="off" >
                    <input type="hidden" name="receiver" id="receiver" value="<?php echo $receiver_id; ?>" placeholder="Type Message ..." class="form-control" >
                    <span class="input-group-append">
                       <input type="file" name="image" id="image" class="form-control" accept=".jpg,.png,.jpeg">
                      <button type="button" id="btnChatSubmit" class="btn btn-primary">Send1</button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
          </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
// $("#btn").click(function(){
$("#imageupload").submit(function(){

var msg=$('#message').val();
var receiver=$('#receiver').val();
var name ='<?= $name?>';
var cDate = '<?=$cDate?>';
var image=$('#image').val();
if(msg != '' || image != '' ){
$.ajax({
url:"<?= base_url('chat_controller/InsertChat');?>",
method:"post",
dataType:'json',
data:new FormData(this),
processData:false,
contentType:false,
cache:false,
async:false,
 // data:{message:msg,receiver:receiver,name:name,cDate:cDate,image:image},
success:function(res)
{
  if(res.status==1){
      // var img = "<div class=text-right style=margin-right:50px><img src='<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg' height=200 width=200  class=img-thumbnail></div>";
     var html ="<div class=direct-chat-infos clearfix><span class=direct-chat-timestamp float-left>"+cDate+"</span><span class ='direct-chat-name float-right'>"+name+"</span></div><div><img class=direct-chat-img src="+img+" alt=message user image></div><div class=direct-chat-text>"+msg+"</div>"+image;
     $('#sentMsg').append(html);
     $('#message').val(null);
  }
}
});
}
});
});
</script>
<!-- $.ajax({
     url:"action.php",
     method:"POST",
     data:new FormData(this),
     contentType:false,
     processData:false,
     success:function(data)
     {
      alert(data);
      fetch_data();
      $('#image_form')[0].reset();
      $('#imageModal').modal('hide');
     }
    });
   }
  }
 }); -->
 <!-- $.ajax({
    url:"action.php",
    method:"POST",
    data:{image_id:image_id, action:action},
    success:function(data)
    {
     alert(data);
     fetch_data();
    }
   })
  }
  else
  {
   return false;
  }
 });
});  -->
<!-- Reload Page and Upload image -->
<script type="text/javascript">
 $(document).ready(function(){
// $("#btn").click(function(){
  $("#fileSubmitForm").submit(function(){

    var msg=$('#message').val();
    var receiver=$('#receiver').val();
    var name ='<?= $name?>';
    var cDate = '<?=$cDate?>';
    var image=$('#image').val();
    if(msg != '' || image != '' ){
      $.ajax({
        url:"<?= base_url('chat_controller/InsertChat');?>",
        method:"post",
        dataType:'json',
        data:new FormData(this),
        processData:false,
        contentType:false,
        cache:false,
        async:false,
 // data:{message:msg,receiver:receiver,name:name,cDate:cDate,image:image},
 success:function(res)
 {
  if(res.status==1){
      // var img = "<div class=text-right style=margin-right:50px><img src='<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg' height=200 width=200  class=img-thumbnail></div>";
      var html ="<div class=direct-chat-infos clearfix><span class=direct-chat-timestamp float-left>"+cDate+"</span><span class ='direct-chat-name float-right'>"+name+"</span></div><div><img class=direct-chat-img src="+img+" alt=message user image></div><div class=direct-chat-text>"+msg+"</div>"+image;
      $('#sentMsg').append(html);
      $('#message').val(null);
    }
  }
});
    }
  });
});
</script>