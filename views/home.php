<?php include "header.php"; ?>


<section class="bg-info-subtle py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($students as $student){ ?>
           <div class="col-md-4 mb-3">
               <div class="card">
                   <img src="<?php echo $student['image']; ?>" alt=""/>
                   <div class="card-body">
                       <h4>name:<?php echo $student['name']; ?></h4>
                       <h4>Roll No:<?php echo $student['roll']; ?></h4>
                       <h4>Mobile:<?php echo $student['mobile']; ?></h4>
                       <hr/>
                       <a href="web.php?page=detail" class="btn btn-success">Details</a>
                   </div>
               </div>
           </div>
            <?php } ?>
        </div>
    </div>
</section>




















<!--<div class="div-one">-->
<!--        Hello world-->
<!--</div>-->
<!---->
<!--<div class="div-two">-->
<!---->
<!--</div>-->
<!---->
<!--<div class="div-three">-->
<!---->
<!--</div>-->
<!---->
<!--<div class="div-four">-->
<!---->
<!--</div>-->
<!---->
<!--<div class="div-five">-->
<!---->
<!--</div>-->
<!---->
<!--<div class="div-six">-->
<!---->
<!--</div>-->




<!--Grid-webpage layout tecknique-->
<!--<header>-->
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-3 h-200 demo logo">LOGO</div>-->
<!--        <div class="col-9 h-200 banner">BANNER</div>-->
<!--    </div>-->
<!--</div>-->
<!--</header>-->
<!---->
<!--<nav>-->
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-12 h-50">MENU</div>-->
<!--    </div>-->
<!--</div>-->
<!--    </nav>-->
<!---->
<!--<section>-->
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-3 h-600">-->
<!--            <div class="row">-->
<!--                <div class="col-4 h-300"></div>-->
<!--                <div class="col-4 h-300"></div>-->
<!--                <div class="col-4 h-300"></div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-6 h-300"></div>-->
<!--                <div class="col-6 h-300"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-9 h-600">-->
<!--        <div class="box-one">-->
<!---->
<!--        </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--</section>-->
<!---->
<!--<footer>-->
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-3 h-250">ONE</div>-->
<!--        <div class="col-3 h-250">TWO</div>-->
<!--        <div class="col-3 h-250">THREE</div>-->
<!--        <div class="col-3 h-250">FOUR</div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-12 h-40">FOOTER</div>-->
<!--    </div>-->
<!--</div>-->
<!--</footer>-->


<?php include "footer.php"; ?>


<!--target="_blank" link new tab e open hoy-->
<!--<a href="https://prothomalo.com/" target="_blank">BITM</a>-->
<!--#test for id-->
<!--    <h1> id="test">This is heading</h1>-->
<!--    <!--.test for id-->
<!--* is for every design-->


<!---->
<!---->
<!--    <input type="text">-->
<!--    <textarea></textarea>-->
<!--    <select>-->
<!--        <option>Select District -----</option>-->
<!--        <option>Dhaka</option>-->
<!--        <option>Manikgong</option>-->
<!--        <option>Dhaka</option>-->
<!--        <option>Manikgong</option>-->
<!--    </select>-->
<!--    <input type="radio"/>-->
<!--    <input type="checkbox"/>-->
<!--    <input type="date"/>-->
<!--    <input type="file"/>-->
<!---->
<!--    <ul>-->
<!--        <li>-->
<!--            Dhaka-->
<!--            <ul>-->
<!--                <li>Dhanmondi</li>-->
<!--                <li>-->
<!--                    Mirpur-->
<!--                    <ul>-->
<!--                        <li>Kajipura</li>-->
<!--                        <li>Shaaawrapara</li>-->
<!--                        <li>Rupnogr</li>-->
<!---->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li>Khilgaon</li>-->
<!--                <li>Savar</li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li>Manikgong</li>-->
<!--        <li>Gazipur</li>-->
<!--        <li>Narayongong</li>-->
<!--        <li>Noakhali</li>-->
<!--    </ul>-->
<!---->
<!---->
<!---->
<!---->
<!--    <ol>-->
<!--        <li>Mango</li>-->
<!--        <li>-->
<!--            Jackfruit-->
<!--            <ol>-->
<!--                <li>Mango</li>-->
<!--                <li>Jackfruit</li>-->
<!--                <li>Mango</li>-->
<!--                <li>Jackfruit</li>-->
<!--            </ol>-->
<!--        </li>-->
<!--        <li>Mango</li>-->
<!--        <li>Jackfruit</li>-->
<!--    </ol>-->
<!--<h1 class="test">This is heading</h1>-->
<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis dolor dolorum ratione totam unde, vel voluptatibus. Accusantium distinctio ducimus eligendi error itaque, laboriosam maiores nam, quae, repellendus suscipit vero voluptatum.</p>-->
<!--<img src="assets/img/1.jpeg" alt="" height="300" width="400"/>-->
<!---->
<!--<table border="1 width" = '888'>-->
<!--    <tr>-->
<!--        <th>Sl NO</th>-->
<!--        <th>Name</th>-->
<!--        <th>Email</th>-->
<!--        <th>Mobile</th>-->
<!--    </tr>-->
<!--  --><?php //foreach ($students as $key => $student) { ?>
<!--    <tr>-->
<!--        <td>--><?php //echo ++$key; ?><!--</td>-->
<!--        <td>--><?php //echo $student['name']; ?><!--</td>-->
<!--        <td>--><?php //echo $student['email']; ?><!--</td>-->
<!--        <td>--><?php //echo $student['mobile']; ?><!--</td>-->
<!--    </tr>-->
<?php //} ?>
<!--</table>-->
