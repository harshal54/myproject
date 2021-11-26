
<table class="table table-bordered table-hover ">
    <tr class="text-center">
      <th class="text-center">Course</th>
      <th class="text-center">Fees</th>
    </tr>
    <?php foreach ($result as $res){ ?>
    <tr class="text-center">
        <?php
      $query = $this->db->get_where('course', array('id' => $res['course_id']))->result_array();
         foreach($query as $value) { ?>
         <td><?php echo $value['name']; ?></td>
     <?php } ?>
      <td><?php echo $res['fees'];?></td>
    </tr>
    <?php } ?>
</table>
