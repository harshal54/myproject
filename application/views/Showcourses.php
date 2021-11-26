
<table class="table table-hover ">
    <tr>
      <th>Course Name</th>
    </tr>
    <?php foreach($result as $val){ ?>
       <tr>
      <td><?php echo $val['name']; ?></td>
    </tr>
 <?php }?>
</table>
