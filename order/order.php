<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Multi Step Form | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <style>
      body{
        background-image: url("https://graphicus-897f0.web.app/img/+2.jpg");
        background-size: cover;
      }
      @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  outline: none;
  font-family: 'Poppins', sans-serif;
}
body{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;            
}
::selection{
  color: #fff;
  background: #45489a;
}
.container{
  width: 1330px;
  background: linear-gradient(#f7fafc, #def3f762);
  text-align: center;
  border-radius: 5px;
  padding: 50px 35px 10px 35px;
}
.container header{
  font-size: 35px;
  font-weight: 600;
  margin: 0 0 30px 0;
}
.container .form-outer{
  width: 100%;
  overflow: hidden;
}
.container .form-outer form{
  display: flex;
  width: 400%;
}
.form-outer form .page{
  width: 25%;
  transition: margin-left 0.3s ease-in-out;
}
.form-outer form .page .title{
  text-align: left;
  font-size: 25px;
  font-weight: 500;
}
.form-outer form .page .field{
  width: 530px;
  height: 45px;
  margin: 45px 0;
  display: flex;
  position: relative;
}
form .page .field .label{
  position: absolute;
  top: -30px;
  font-weight: 500;
}
form .page .field input{
  height: 100%;
  width: 100%;
  border: 1px solid lightgrey;
  border-radius: 5px;
  padding-left: 15px;
  font-size: 18px;
}
form .page .field select{
  width: 100%;
  padding-left: 10px;
  font-size: 17px;
  font-weight: 500;
}
form .page .field button{
  width: 100%;
  height: calc(100% + 5px);
  border: none;
  background: #45489a;
  margin-top: -20px;
  border-radius: 5px;
  color: #45489a;
  cursor: pointer;
  font-size: 18px;
  font-weight: 500;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: 0.5s ease;
}

form .page .field .next{
  width: 100%;
  height: calc(100% + 5px);
  border: none;
  background: #45489a;
  margin-top: -20px;
  border-radius: 5px;
  color: #fff;
  cursor: pointer;
  font-size: 18px;
  font-weight: 500;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: 0.5s ease;
}
form .page .field button:hover{
  background: #45489a;
}
form .page .btns button{
  margin-top: -20px!important;
}
form .page .btns button.prev{
  margin-right: 3px;
  font-size: 17px;
}
form .page .btns button.next{
  margin-left: 3px;
}
.container .progress-bar{
  display: flex;
  margin: 40px 0;
  user-select: none;
}
.container .progress-bar .step{
  text-align: center;
  width: 80px;
  position: relative;
}
.container .progress-bar .step p{
  font-weight: 500;
  font-size: 18px;
  color: #000;
  margin-bottom: 8px;
}
.progress-bar .step .bullet{
  height: 25px;
  width: 25px;
  border: 2px solid #000;
  display: inline-block;
  border-radius: 50%;
  position: relative;
  transition: 0.2s;
  font-weight: 500;
  font-size: 17px;
  line-height: 25px;
}
.progress-bar .step .bullet.active{
  border-color: #45489a;
  background: #45489a;
}
.progress-bar .step .bullet span{
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
}
.progress-bar .step .bullet.active span{
  display: none;
}
.progress-bar .step .bullet:before,
.progress-bar .step .bullet:after{
  position: absolute;
  content: '';
  bottom: 11px;
  right: -51px;
  height: 3px;
  width: 44px;
  background: #262626;
}
.progress-bar .step .bullet.active:after{
  background: #45489a;
  transform: scaleX(0);
  transform-origin: left;
  animation: animate 0.3s linear forwards;
}
@keyframes animate {
  100%{
    transform: scaleX(1);
  }
}
.progress-bar .step:last-child .bullet:before,
.progress-bar .step:last-child .bullet:after{
  display: none;
}
.progress-bar .step p.active{
  color: #45489a;
  transition: 0.2s linear;
}
.progress-bar .step .check{
  position: absolute;
  left: 50%;
  top: 70%;
  font-size: 15px;
  transform: translate(-50%, -50%);
  display: none;
}
.progress-bar .step .check.active{
  display: block;
  color: #fff;
}

    </style>
  </head>
  <body>
    <div class="container">
      <header>Order Form</header>
      <div class="progress-bar">
        <div class="step">
          <p>Type</p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Company</p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Colors</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Submit</p>
          <div class="bullet">
            <span>4</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>
      <div class="form-outer">
        <form method="post">
          <div class="page slide-page">
            <div class="field">
              <div class="label"> What do you want ? </div>
              <select name="qna" required>
			        <?php 
                $conn=new mysqli("localhost","root","","order");
                $sql="select * from qna";
                $res=mysqli_query($conn,$sql);
                 while ($qna = mysqli_fetch_array(
                         $res,MYSQLI_ASSOC)):; 
             ?>
                 <option value="<?php echo $qna["qnano"];
                     
                 ?>">
                     <?php echo $qna["qnaname"];
                        
                     ?>
                 </option>
             <?php 
                 endwhile; 
             ?>
              </select>
            </div>

            <div class="field">
              <div class="label">category</div>
              <select name="cat" required>
			  <?php 
                $conn=new mysqli("localhost","root","","order");
                $sql="select * from category";
                $res=mysqli_query($conn,$sql);
                 while ($category = mysqli_fetch_array(
                         $res,MYSQLI_ASSOC)):; 
             ?>
                 <option value="<?php echo $category["caid"];
                     
                 ?>">
                     <?php echo $category["caname"];
                        
                     ?>
                 </option>
             <?php 
                 endwhile; 
             ?>
              </select>
            </div>
            <div class="field">
              <input type="submit" class="firstNext next" class="sub" name="submit">
            </div>
          </div>

          <div class="page">
            <div class="field">
              <div class="label">Company Name</div>
              <input type="text" name="cname" required>
            </div>
            <div class="field">
              <div class="label">Company Slogan</div>
              <input type="text" name="cslogan" required>
            </div>
            <div class="field btns">
              <input type="submit" class="next-1 next" name="submit">
            </div>
          </div>


          <div class="page">
          <div class="field">
              <div class="label">Select color for your order .</div>
              <select name="colo" required>
			  <?php 
                $conn=new mysqli("localhost","root","","order");
                $sql="select * from colors";
                $res=mysqli_query($conn,$sql);
                 while ($colors = mysqli_fetch_array(
                         $res,MYSQLI_ASSOC)):; 
             ?>
                 <option value="<?php echo $colors["colorno"];
                     
                 ?>">
                     <?php echo $colors["colorname"];
                        
                     ?>
                 </option>
             <?php 
                 endwhile; 
             ?>
              </select>
            </div>
            <div class="field btns">
              <input type="submit" class="next-2 next" name="submit">
            </div>
          </div>

          <div class="page">
            <div class="title">Please enter your email address !</div>
            <div class="field">
              <div class="label">Email Address</div>
              <input type="text" name="email">
            </div>
            <div class="field btns">
              <input type="submit" class="submit" name="submit">
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="script.js"></script>

	<?php
if(isset($_POST["submit"]))
{
    $a=$_POST['qna'];
    $b=$_POST['cat'];
    $c=$_POST['cname'];
    $d=$_POST['cslogan'];
	  $e=$_POST['colo'];
	  $f=$_POST['email'];
    $conn=new mysqli("localhost","root","","order");
    if ($conn->connect_error){
        die("Connection failed:" .$conn->connect_error);
        }
        $res= mysqli_query($conn,$sql);
        //echo '$res';
        $sql = "Insert into lists values('$a','$b','$c','$d','$e','$f')";

if($conn->query($sql)== TRUE){
}
if(filter_var($f, FILTER_VALIDATE_EMAIL)){ //validating user email
  $subject = "About your Order";
  $message = "Thank you for your response we received your request.\n\n Your company name is: $c \n Your comapny slogan is: $d \n\n We are working on other parameters too! \n We'll contact you very soon, have a nice day ahead! \n\n Thank you!\n GraphicUs Team";
  $sender = "teamgraphicus@gmail.com";
  //php function to send mail
  if(mail($f, $subject, $message, $sender)){
  ?>
  <!-- show sucess message once email send successfully -->
  <div class="alert success-alert">
    <?php echo '<script>alert ("we have received your order and details . Thank you !  ")</script>' ?>
  </div>
  <?php
  $email = "";
  }else{
  ?>
  <!-- show error message if somehow mail can't be sent -->
  <div class="alert error-alert">
  <?php echo "Failed while sending your mail!" ?>
  </div>
  <?php
  }
}else{
  ?>
  <!-- show error message if user entered email is not valid -->
  <div class="alert error-alert">
  <?php echo "$f is not a valid email address!" ?>
  </div>
  <?php
}
}
?>

  </body>
</html>