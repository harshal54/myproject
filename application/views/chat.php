<?php 
$senderID=$this->session->userdata('id');
$userInfo=$this->db->get_where('admin',array('id'=>$senderID))->row_array();
$name = $userInfo['name'];
$cDate = date('Y-m-d H:i:s', time()); 
// $data = getmsg(593);
// print_r($data);die;
?>

<!-- Modal -->

<div class="card direct-chat direct-chat-primary">

  <div class="card-header">
    <?php
    $receiver = $this->db->get_where('admin',array('id'=>$receiver_id))->row_array();
    ?>
    <div>
      <img class="direct-chat-img" src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="message user image">
    </div>
    <span><h3 class="card-title" ><?php echo $receiver['name']; ?></h3></span> 
  </div>

  <div class="card-body">
    <div class="direct-chat-messages">

      <?php foreach($result as $row){ 

        $id=$this->session->userdata['id'];
        $sender_id = $row['sender_id'];
        $receiver_id = $row['receiver_id'];
        $sender=$this->db->get_where('admin',array('id' => $sender_id))->row_array();
        if($sender_id != $id){ ?>

          <div class="direct-chat-msg left">
            <div class="direct-chat-infos clearfix">
              <span class="direct-chat-name float-left">
                <?php echo $sender['name']; ?>
              </span>
              <span class="direct-chat-timestamp float-right">
                <?php echo $row['created_at']; ?>
              </span>
            </div>

            <img class="direct-chat-img float-left" src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="message user image">

            <?php if(!empty($row['message'])){ ?>
              <div class="direct-chat-text msg">
                <?php echo $row['message']; ?>
              </div>
            <?php } if(!empty($row['image'])) { ?>
              <div>
                <img src='<?php echo  base_url(); ?>upload/<?php echo $row['image']; ?>' height="200" width="200"  class="img-thumbnail">
              </div>
            <?php }?>
          </div>
        <?php } else { ?>

          <div class="direct-chat-msg right">
            <div class="direct-chat-infos clearfix">
              <span class="direct-chat-timestamp float-left"><?php echo $row['created_at']; ?></span>
            </div>
            <img class="direct-chat-img" src="<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg" alt="message user image">
            <?php $id =$row['id'];?>
            <?php if(!empty($row['message'])){ ?>
              <div class="direct-chat-text" id="hover_msg">
                <?php echo $msg =  $row['message']; ?>
              </div>
              <div class="links_messages">
                <a href="" id="deleteID" class="action_link" onclick="deletedata(<?php echo $id ;?>)" >Delete |</a>
                <span  style="cursor: pointer;" onclick="editMsg(<?php echo $id ;?>,'<?php echo $msg ;?>')" >Edit</span>

              </div>
            <?php } if(!empty($row['image'])) { ?>
              <div class="text-right hover_msg" style="margin-right:50px">
                <img  src='<?php echo  base_url(); ?>upload/<?php echo $row['image']; ?>' height="200" width="200"  class="img-thumbnail" >
              </div>
            <?php } ?>
          </div>
        <?php } ?>

      <?php } ?>

      <div id="sentMsg" class="direct-chat-msg right"></div>

    </div>

    <div class="card-footer">
      <form action="#" method="post" id="fileSubmitForm" enctype="multipart/form-data">
        <div class="input-group">
          <input type="text" name="message" id="message" placeholder="Type Message ..." class="form-control" autocomplete="off" >
          <input type="hidden" name="receiver" id="receiver" value="<?php echo $receiver_id; ?>" placeholder="Type Message ..." class="form-control" >
          <span class="input-group-append">
            <input type="file" name="image" id="fileInput" class="form-control d-none" accept=".jpg,.png,.jpeg,.mp4">

            <span id="inputFileName"></span>

            <i class="fa fa-image" id="fileInputTrigger" onclick="$('#fileInput').trigger('click')"></i>

            <button type="submit" id="Sendbtn" class="btn btn-primary">Send</button>
          </span>
        </div>
      </form>
    </div>
  </div>
</div>

<div id="myModal" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form method="post" id="updateDataSubmit">
        <div class="modal-body">
          <input type="hidden" value="" class="form-control"  name="id" id="id">
          <input type="text"   value=""   class="form-control"  name="message" id="msg" autocomplete="off">
        </div>
        <div class="modal-footer float-left">
          <button type="submit" class="btn btn-primary" onclick="updatemsg(<?php echo $id ;?>)">Save</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
  function editMsg(id,msg){
    if(id !='' && msg !=''){
      $("#myModal").modal();
      $("#id").val(id);
      $("#msg").val(msg);
    }
  }
  function updatemsg(id) {
    var id      = $('#id').val();
    var message      = $('#msg').val();
    $.ajax({
      url:"<?= base_url('chat_controller/updatedata');?>",
      method:"post",
      dataType:'json',
      data:{'message':message,'id':id},
      success:function(res)
      {
        window.location.reload();
      }

    })
  }
  function deletedata(id)
  {
    if (confirm("Are you sure?") == true) {
   $.ajax({
      url:"<?= base_url('chat_controller/deletedata');?>",
      method:"post",
      dataType:'json',
      data:{'id':id},
      success:function(res)
      {
        if(res.status==1){
        }
      }
    });
  }else{
    return false;
  }
  }
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#fileInput').change(function(){
      var fileName = $('#fileInput').val().split('\\').pop();
      $('#inputFileName').text(fileName);
    })
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#fileSubmitForm").submit(function(e){
      e.preventDefault();

      var msg      = $('#message').val();
      var name     = '<?= $name?>';
      var cDate    = '<?=$cDate?>';
      var image    = $('#fileInput').val();

      if(msg != '' || image!= '')
      {

        $.ajax({
          url:"<?= base_url('chat_controller/InsertChat');?>",
          method:"post",
          dataType:'json',
          data:new FormData(this),
          processData:false,
          contentType:false,
          cache:false,
          async:false,
          success:function(res)
          {
            if(res.status==1){

              if(res.message != ''){
                var message_chat = '<div class=direct-chat-text>'+res.message+'</div>';
              }else{
                var message_chat = '';
              }

              if(res.image_path != ''){
                var img_msg = '<div class="text-right" style="margin-right:50px"><img src="'+res.image_path+'" height="200" width="200" class="img-thumbnail"></div></div>';
              }else{
                var img_msg = '';
              }

              var img = "<img class='direct-chat-img' src='<?php echo base_url(); ?>assets/dist/img/user3-128x128.jpg'>";

              var html ="<div class=direct-chat-infos clearfix><span class=direct-chat-timestamp float-left>"+cDate+"</span></div><div>"+img+"</div>"+message_chat+""+img_msg+"";

              $('#sentMsg').append(html);
              $('#message').val(null);
              $('#fileInput').val(null);
            }
          }
        });
      }
      else
      {
        alert('Enter Some Messages !!');
      }
    });
  });
</script>

<style type="text/css">
.direct-chat-text{
  bottom: 2px;
  margin-top: 4px;
}
#deleteID{
  color: black;
}
.msg{
  top: 0px;
}
.links_messages{
  display: none;
  margin-top: -35px;  
  margin-left: -90px;   
}
.links_messages:hover{
  display: block;
}
.direct-chat-text:hover + .links_messages {
  display: block;
}
.hover_msg:hover + .links_messages{
  display: block;
}

.card-title{
  text-transform: uppercase;
  margin-left: 6px;
  margin-top: 10px;
  font-weight: 600;
}
.direct-chat-messages
{
  height: 75vh;
}
.direct-chat-msg
{
  max-width: 60%;
}
.left .direct-chat-text {
  margin-right: 0;
  margin-left: 50px;
}

.left .direct-chat-text::after, .left .direct-chat-text::before {
  border-right-color: #d2d6de;
  border-left-color: transparent;
  right: 100%;
  left: auto;
}
.right{margin-left: 40%;}
#fileInputTrigger{
  position: absolute;
  z-index: 99;
  top: 2px;
  right: 75px;
  background: #ffc262;
  padding: 8px;
  border: solid 1px #eaaa45;
  border-radius: 25px;
  cursor: pointer;
}
#fileInputTrigger:hover{
  background: #e29d31;
  border: solid 1px #d28d21;
  transition: all 0.5s;
}
#inputFileName{
  position: absolute;
  z-index: 9999;
  top: -24px;
  right: 70px;
  background: #dedede;
  padding: 0 8px;
  border-radius: 5px 5px 0 0;
}
</style>