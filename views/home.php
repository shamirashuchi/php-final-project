<?php include "header.php"; ?>

<!--target="_blank" link new tab e open hoy-->
<a href="https://prothomalo.com/" target="_blank">BITM</a>
<h1>This is heading</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis dolor dolorum ratione totam unde, vel voluptatibus. Accusantium distinctio ducimus eligendi error itaque, laboriosam maiores nam, quae, repellendus suscipit vero voluptatum.</p>
<img src="assets/img/1.jpeg" alt="" height="300" width="400"/>

<table border="1 width" = '888'>
    <tr>
        <th>Sl NO</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
    </tr>
  <?php foreach ($students as $key => $student) { ?>
    <tr>
        <td><?php echo ++$key; ?></td>
        <td><?php echo $student['name']; ?></td>
        <td><?php echo $student['email']; ?></td>
        <td><?php echo $student['mobile']; ?></td>
    </tr>
<?php } ?>
</table>
<?php include "footer.php"; ?>