<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
</head>
<body>
<!--compiler of html is browser-->






<ul>
    <li><a href="web.php?page=home">Home</a></li>
    <li><a href="web.php?page=about">About</a></li>
    <li><a href="web.php?page=contact">Contact</a></li>
</ul>












<input type="text">
<textarea></textarea>
<select>
    <option>Select District -----</option>
    <option>Dhaka</option>
    <option>Manikgong</option>
    <option>Dhaka</option>
    <option>Manikgong</option>
</select>
<input type="radio"/>
<input type="checkbox"/>
<input type="date"/>
<input type="file"/>

<ul>
    <li>
        Dhaka
        <ul>
            <li>Dhanmondi</li>
            <li>
                Mirpur
                      <ul>
                          <li>Kajipura</li>
                          <li>Shaaawrapara</li>
                          <li>Rupnogr</li>

                      </ul>
            </li>
            <li>Khilgaon</li>
            <li>Savar</li>
        </ul>
    </li>
    <li>Manikgong</li>
    <li>Gazipur</li>
    <li>Narayongong</li>
    <li>Noakhali</li>
</ul>




<ol>
    <li>Mango</li>
    <li>
        Jackfruit
         <ol>
             <li>Mango</li>
             <li>Jackfruit</li>
             <li>Mango</li>
             <li>Jackfruit</li>
         </ol>
    </li>
    <li>Mango</li>
    <li>Jackfruit</li>
</ol>

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
</body>
</html>