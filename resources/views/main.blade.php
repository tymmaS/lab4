
<!DOCTYPE html>
<html>
<head>
     <title>portfolio</title>
     <link rel="stylesheet" type="text/css" href="portStyle.css">
     <style>
     *{
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
body{
  position: relative;
  background-color:  #000;
  font-family: 'Montserrat', sanf-serif;
}
.container{
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 15px;
}
header{
  position: relative;
  overflow: hidden;
  width: 100%;
  height: 100vh;
}
.header_head{
  position: relative;
  background-color: #191819;
}
.head_inner{
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  justify-content: space-between;
  -ms-align-items: center;
  align-items: center;
}
.head_inner .logo{
  font-weight: bold;
  font-size: 18px;
  color: #ccc;
}
.head_inner nav ul{
  margin: 0;
  padding: 0;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  -ms-align-items: center;
  align-items: center;
}
.head_inner nav ul li{
  list-style-type: none;
}
.head_inner nav ul li a{
  font-size: 14px;
  color: #ccc;
  display: inline-block;
  padding: 20px 30px;
  text-decoration: none;
  text-transform: uppercase;
}
.header_body{
  position: relative;
  width: 100%;
  height: 100%;
  margin-top: 150px;
}
.header_body_inner{
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  justify-content: space-between;
   -ms-align-items: center;
  align-items: center;
  width: 100%;
}
.header_body_inner .left .title{
  color: #fff;
  font-size: 46px;
}
.header_body_inner .left .title span{
  color: #f83b3a;
}
a.btn{
  display: inline-block;
  background-color: #f83b3a;
  color: #fff;
  padding: 15px 30px;
  text-decoration: none;
  margin-top: 20px;
  border-radius: 5px;
}
.header_body_inner .right img{
  border-radius: 50%;
}
section{
  position: relative;
  padding: 20px 0;
  width: 100%;
  height: 100vh;
}
.section_title{
  font-size: 36px;
  font-weight: bold;
  letter-spacing: 2px;
  color: #fff;
}
.about_text{
  margin-top: 45px;
}
.about_text p{
  font-size: 18px;
  margin-bottom: 25px;
  color: #fff;
}
.portfolio_items{
  margin-top: 45px;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  flex-wrap: wrap;
}
.portfolio_items .item{
  display: block;
  position: relative;
  margin: 0 10px 15px 0;
  width: calc(100% / 3 - 10px);
}
.portfolio_items .item:last-child{
  margin-right: 0;
}
.portfolio_items .item img{
  max-width: 100%;
}
.portfolio_btn{
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  justify-content: center;
}
.contacts_form{
  position: relative;
  max-width: 700px;
  margin: 45px auto;
  text-align: center;
}
.contacts_form form input{
  width: 100%;
  height: 70px;
  margin-bottom: 20px;
  padding: 10px 0 10px 30px;
  font-family: 'Montserrat', sanf-serif;
  font-size: 20px;
  border: 1px solid #333;
  border-radius: 3px;
}
.contacts_form form textarea{
  width: 100%;
  font-size: 20px;
  border: 1px solid #333;
  border-radius: 3px;
  padding: 10px 0 10px 30px;
  font-family: 'Montserrat', sanf-serif
}
.contacts_form form button{
  background-color: #f83b3a;
  color: #fff;
  padding: 15px 30px;
  text-decoration: none;
  margin-top: 20px;
  border-radius: 5px;
  border: none;
  width: 100%;
  font-size: 18px;
}
footer{
  position: relative;
  padding: 20px 0;
  background-color: #181918
}
footer p{
  text-align: center;
  color: #ccc;
}
     </style>
</head>

<body>

     <header>
          <div class="header_head">
               <div class="container">
                    <div class="head_inner">
                         <div class="logo">Tymma</div>
                         <nav>
                              <ul>
                                   <li><a href="#about">About me</a></li>
                                   <li><a href="#portfolio">Portfolio</a></li>
                                   <li><a href="#contacts">Contacts</a></li>
                              </ul>
                         </nav>
                    </div>
               </div>
          </div>
          <div class="header_body">
               <div class="container">
                    <div class="header_body_inner">
                         <div class="left">
                              <div class="title">
                                   Hello, <br>i am Temirlan</br><span>Programmer</span>
                              </div>
                              <a href="#" class="btn">Contact me</a>
                         </div>
                         <div class="right">
                              <img src="https://st.depositphotos.com/2251265/2770/i/600/depositphotos_27707923-stock-photo-man-in-the-suit-on.jpg">
                         </div>
                    </div>
               </div>
          </div>
     </header>

     <section id="about">
          <div class="container">
               <div class="section_title">
                    About me
               </div>
               <div class="about_text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisl diam, congue at lorem id, gravida consectetur mi. Etiam sed placerat mi. Nullam sit amet vestibulum nibh, venenatis lobortis ex. Proin fermentum eros ipsum, quis gravida quam interdum et. Praesent quis viverra mauris. Nam volutpat augue eu mollis dapibus. Sed vitae lacinia eros. Nam lobortis neque ullamcorper dolor ullamcorper, auctor auctor tellus efficitur. Sed varius hendrerit imperdiet. Morbi consequat, nibh vel mattis pellentesque, mi nisl condimentum massa, eu rutrum lectus lacus ut elit. Sed condimentum fringilla felis, sit amet imperdiet nulla faucibus id. Proin volutpat enim ac quam porttitor scelerisque. Etiam rhoncus fringilla dignissim. Proin quis erat porttitor, ullamcorper nisl a, accumsan mi.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisl diam, congue at lorem id, gravida consectetur mi. Etiam sed placerat mi. Nullam sit amet vestibulum nibh, venenatis lobortis ex. Proin fermentum eros ipsum, quis gravida quam interdum et. Praesent quis viverra mauris. Nam volutpat augue eu mollis dapibus. Sed vitae lacinia eros. Nam lobortis neque ullamcorper dolor ullamcorper, auctor auctor tellus efficitur. Sed varius hendrerit imperdiet. Morbi consequat, nibh vel mattis pellentesque, mi nisl condimentum massa, eu rutrum lectus lacus ut elit. Sed condimentum fringilla felis, sit amet imperdiet nulla faucibus id. Proin volutpat enim ac quam porttitor scelerisque. Etiam rhoncus fringilla dignissim. Proin quis erat porttitor, ullamcorper nisl a, accumsan mi.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisl diam, congue at lorem id, gravida consectetur mi. Etiam sed placerat mi. Nullam sit amet vestibulum nibh, venenatis lobortis ex. Proin fermentum eros ipsum, quis gravida quam interdum et. Praesent quis viverra mauris. Nam volutpat augue eu mollis dapibus. Sed vitae lacinia eros. Nam lobortis neque ullamcorper dolor ullamcorper, auctor auctor tellus efficitur. Sed varius hendrerit imperdiet. Morbi consequat, nibh vel mattis pellentesque, mi nisl condimentum massa, eu rutrum lectus lacus ut elit. Sed condimentum fringilla felis, sit amet imperdiet nulla faucibus id. Proin volutpat enim ac quam porttitor scelerisque. Etiam rhoncus fringilla dignissim. Proin quis erat porttitor, ullamcorper nisl a, accumsan mi.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisl diam, congue at lorem id, gravida consectetur mi. Etiam sed placerat mi. Nullam sit amet vestibulum nibh, venenatis lobortis ex. Proin fermentum eros ipsum, quis gravida quam interdum et. Praesent quis viverra mauris. Nam volutpat augue eu mollis dapibus. Sed vitae lacinia eros. Nam lobortis neque ullamcorper dolor ullamcorper, auctor auctor tellus efficitur. Sed varius hendrerit imperdiet. Morbi consequat, nibh vel mattis pellentesque, mi nisl condimentum massa, eu rutrum lectus lacus ut elit. Sed condimentum fringilla felis, sit amet imperdiet nulla faucibus id. Proin volutpat enim ac quam porttitor scelerisque. Etiam rhoncus fringilla dignissim. Proin quis erat porttitor, ullamcorper nisl a, accumsan mi.</p>
               </div>
          </div>
     </section>



     <section id="portfolio">
          <div class="container">
               <div class="section_title">
                    Portfolio
               </div>
               <div class="portfolio_items">
                    <a href="#" class="item">
                         <img src="https://stackify.com/wp-content/uploads/2018/09/Java-Debugging-Tips-1280x720.jpg">
                    </a>
                    <a href="#" class="item">
                         <img src="https://cdn.lynda.com/course/170427/170427-637363828865101045-16x9.jpg">
                    </a>
                    <a href="#" class="item">
                         <img src="https://pixelmechanics.com.sg/wp-content/uploads/2019/04/css.jpg">
                    </a>
                    <a href="#" class="item">
                         <img src="https://itproger.com/img/courses/1476977754.jpg">
                    </a>
                    <a href="#" class="item">
                         <img src="https://content.techgig.com/photo/69595470/5-tips-for-python-programmers-to-help-them-improve.jpg?50999">
                    </a>
                    <a href="#" class="item">
                         <img src="https://images-na.ssl-images-amazon.com/images/I/91ZmgFvglpL.png">
                    </a>
               </div>

               <div class="portfolio_btn">
                    <a href="#" class="btn">See more</a>
               </div>
          </div>
     </section>


     <section id="contacts">
          <div class="container">
               <div class="section_title">
                    Contacts
               </div>
               <div class="contacts_form">
                    <form action="">
                         <input type="text" name="" placeholder="Your name">
                         <input type="text" name="" placeholder="Number">
                         <textarea name="" id="" cols="30" rows="10" placeholder="Your message"></textarea>
                         <button type="submit">Send</button>
                    </form>
               </div>
          </div>
     </section>

     <footer>
          <p>Copyright, 2020</p>
     </footer>

     



     <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
     <script type="text/javascript" src="portScript.js"></script>

</body>
</html>