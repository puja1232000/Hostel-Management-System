<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap" rel="stylesheet">
<style>
*{margin:0; padding:0; box-sizing:border-box;
      font-family: 'Poppins', sans-serif;}
.contact{
    position: relative;
    min-height:100vh;
    padding:50px 100px;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction: column;
    background:url(https://img.freepik.com/free-photo/close-up-nature-view-green-leaf-blurred-greenery-background-sunlight-with-bokeh_105035-410.jpg?size=626&ext=jpg);
    background-size: cover;
}
.contact .content {
    max-width:800px;
   text-align: center;
}
.contact .content h2{
    font-size:36px;
    font-weight:500;
    color:#fff;
}
.contact .content p{
    font-weight: 500;
    color:#fff;
}
.container{
    width :100%;
    display:flex;
    justify-content:center;
    align-items: center;
    margin-top:30px;
}
.container .contactinfo{
    width:50%;
    display:flex;
    flex-direction:column;
}
.container .contactinfo .box{
    position:relative;
    padding:20px 0;
    display:flex;
}
.container .contactinfo .box .icon{
    min-width:60px;
    height:60px;
    background:#fff;
    display:flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    font-size: 22px ;
}
.container .contactinfo .box .text{
    display:flex;
    margin-left: 20px;
    font-size:16px;
    color:#fff;
    flex-direction:column;
    font-weight:300;
}
.container .contactinfo .box .text h3{
    font-weight:500;
    color:#00bcd4;
}
.contactform{
    width:40%;
    padding:40px;
    background:#fff;
}
.contactform h2{
    font-size:30px;
    color:#333;
    font-weight: 500;
}
.contactform .inputbox{
    position:relative;
    width:100%;
    margin-top:10px;
}
.contactform .inputbox input,
.contactform .inputbox textarea{
    width:100%;
    padding:5px 0;
    font-size:16px;
    margin:10px 0;
    border:none;
    border-bottom:2px solid #333;
    outline:none;
    resize:none;
}
.contactform .inputbox span{
    position:absolute;
    left:0;
    padding:5px 0;
    font-size:16px;
    margin:10px 0;
    pointer-events: none;
    transition: 0.5s;
    color:#666;
}
.contactform .inputbox input:focus ~ span,
.contactform .inputbox input:valid ~ span,
.contactform .inputbox textarea:focus ~ span,
.contactform .inputbox textarea:valid ~ span{
    color:#e91e63;
    font-size:12px;
    transform: translateY(-20px);
}
.contactform .inputbox input[type="submit"]{
    width:100px;
    background:#00bcd4;
    color:#fff;
    border:none;
    cursor:pointer;
    padding:10px;
    font-size:18px;
}
@media (max-width:991px){
    .contact {
        padding:50px;
    }
    .container{
        flex-direction:column;
    }
    .container .contactinfo{
        margin-bottom: 40;
    }
    .container .contactinfo,
    .contactform{
        width:100%;
    }
}
</style>          
</head>
<body>
<?php include("sidenav.php");  ?>
<section class="contact">
   <div class="content">
      <h2>Contact Us</h2>
      <p>AUTONOMOUS INSTITUTION WITH NAAC-A ACCREDITATION</p>
   </div>
   <div class="container">
   <div class="contactinfo">
       <div class="box">
           <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
           <div class="text">
               <h3>Address</h3>
               <p>Rajarajeshwarinagar,(off Mysore Road), 
                   Ideal Homes Township,
               Bangalore-560098, Karnataka, India</p>
           </div>
       </div>
       <div class="box">
           <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
           <div class="text">
               <h3>Email</h3>
               <p>info@gat.ac.in</p>
           </div>
       </div>
       <div class="box">
           <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
           <div class="text">
               <h3>Phone</h3>
               <p><ul>
                   <li>95915-10211</li>
                   <li> +91-91082-75635</li>
                     <li> +91-92431-90105</li>
                    <li>+91-80-2860315</li>
                </ul>
                </p>
           </div>
       </div>
    </div>
    <div class="contactform">
        <form action="send.php" method="post">
          <h2>Send Message </h2>
            <div class="inputbox">
              <input type="text" name="fullname" require="required">
              <span>Full Name</span>
            </div>
            <div class="inputbox">
              <input type="text" name="email" require="required">
              <span>Email</span>
            </div>
            <div class="inputbox">
              <textarea name="msg" require="required"></textarea>
              <span>Type your message...</span>
            </div>
            <div class="inputbox">
              <input type="submit" name="" value="send">
            </div>
        </form>
    </div>
    </div>
    
</section>
</body>
</html>

