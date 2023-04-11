
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
  </head>
  <body>
    
      <div class="top-photo col-md-12 ">
        <img src="https://senerov.com/w1.jpg">
        <h3>Şener YILMAZ</h3>
        <h5>Front-End-Developer</h5>
      </div>

      <div class="user">
        <img src="https://senerov.com/avatar.jpg">
      </div>

    <div class="container">
      <div class="row">
      <div class="about" col-md-12>
          <h3>About<i>Me</i></h3>
        
        <div class="col-md-6">
            <div class="about-in">
            <p>Hello I'm Şener.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

            <div id="social">
      <a class="facebookBtn smGlobalBtn" href="#" ></a>
      <a class="twitterBtn smGlobalBtn" href="#" ></a>
      <a class="googleplusBtn smGlobalBtn" href="#" ></a>
      <a class="linkedinBtn smGlobalBtn" href="#" ></a>
      <a class="pinterestBtn smGlobalBtn" href="#" ></a>
      <a class="tumblrBtn smGlobalBtn" href="#" ></a>
      <a class="rssBtn smGlobalBtn" href="#" ></a>
    </div>

            <a class="btn btn-danger btn-outline">DOWLAND DETAILS</a>
            </div>
        </div> 

        <div class="col-md-3 col-xs-6">
          <div class="details-left">
          <h3>Contact <i>Details</i></h3>
            <ul>
              <li>Age </li>
              <li>Country </li>
              <li>Adress</li>
              <li>E-mail</li>
              <li>Phone</li>
              <li>Position</li>
            </ul>
          </div>
        </div>

         <div class="col-md-3 col-xs-6">
           <div class="detail-right">
             <ul>
               <li>24</li>
               <li>Turkey</li>
               <li>Pendik-İstanbul</li>
               <li>senerov@senerov.com</li>
               <li>0534 344 44 44</li>
               <li>Free</li>
             </ul>
           </div>
         </div>   

      </div>
    </div>  
  </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  
.top-photo{
  border: 1px solid #000000;
  padding: 0;
  margin:0;
  z-index: -110;
 
}
.top-photo img{
  width: 100%;
  max-height: 500px;
}

.top-photo h3{
  position: absolute;
  margin-left: 50%;
  margin-top: -15%;
  color: #E0E0E0;
  font-weight: 800;
  font-size: 48px;
  font-family: 'Saira', sans-serif;

  
}
.top-photo h5{
  position: absolute;
  margin-left: 53%;
  margin-top: -8%;
  color: #E0E0E0;
  font-weight: 800;
  font-size: 24px;
  font-family: 'Saira', sans-serif;

  
}

.user img{
  max-height: 300px;
  max-width: 300px;
  position: relative;
  margin-left: 10%;
  margin-top: -18%;
  border: 2px solid #ffffff;
}
.about{
  margin:0;
  padding: 0
}
.about h3{
  position: relative;
  margin-top: 40px; 
  font-size: 26px;
  font-weight: 700;
  color: #000000;
  font-family: 'Saira', sans-serif;
}

.about i {
  color: #C62828;
}

.about-in button{
  margin-top: 30px;
}

.btn-outline {
    background-color: transparent;
    color: inherit;
    transition: all .5s;
    margin-top: 20px;
}

.about-in a {
  font-weight: bold;
}
.details-left h3{
  margin-top:-40px;
}

.details-left li{
  font-weight: bold;
}

ul {
  list-style: none;
}


.details-right{
  margin-left: -20px;
}

  ul li:nth-child(4){
  color: #C62828;
  font-weight: bold;
}

@import url('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');

#social {
  margin: 40px 10px;
  

}

.smGlobalBtn { /* global button class */
    display: inline-block;
    position: relative;
    cursor: pointer;
    width: 50px;
    height: 50px;
    border:2px solid #ddd; /* add border to the buttons */
    box-shadow: 0 3px 3px #999;
    padding: 0px;
    text-decoration: none;
    text-align: center;
    color: #fff;
    font-size: 25px;
    font-weight: normal;
    line-height: 2em;
    border-radius: 27px;
    -moz-border-radius:27px;
    -webkit-border-radius:27px;
}

/* facebook button class*/
.facebookBtn{
    background: #BDBDBD;
}

.facebookBtn:before{ /* use :before to add the relevant icons */
    font-family: "FontAwesome";
    content: "\f09a"; /* add facebook icon */
}

.facebookBtn:hover{
    color: #4060A5;
    background: #fff;
    border-color: #4060A5; /* change the border color on mouse hover */
}

/* twitter button class*/
.twitterBtn{
    background: #BDBDBD;
}

.twitterBtn:before{
      font-family: "FontAwesome";
      content: "\f099"; /* add twitter icon */
      
}

.twitterBtn:hover{
      color: #00ABE3;
      background: #fff;
      border-color: #00ABE3;
}

/* google plus button class*/
.googleplusBtn{
    background: #BDBDBD;
}

.googleplusBtn:before{
      font-family: "FontAwesome";
      content: "\f0d5"; /* add googleplus icon */
}

.googleplusBtn:hover{
      color: #e64522;
      background: #fff;
      border-color: #e64522;
}

/* linkedin button class*/
.linkedinBtn{
    background: #BDBDBD;
}

.linkedinBtn:before{
      font-family: "FontAwesome";
      content: "\f0e1"; /* add linkedin icon */
}

.linkedinBtn:hover{
      color: #0094BC;
      background: #fff;
      border-color: #0094BC;
}

/* pinterest button class*/
.pinterestBtn{
    background: #BDBDBD;
}

.pinterestBtn:before{
      font-family: "FontAwesome";
      content: "\f0d2"; /* add pinterest icon */
}

.pinterestBtn:hover{
      color: #cb2027;
      background: #fff;
      border-color: #cb2027;
}

/* tumblr button class*/
.tumblrBtn{
    background: #BDBDBD;
}

.tumblrBtn:before{
      font-family: "FontAwesome";
      content: "\f173"; /* add tumblr icon */
}

.tumblrBtn:hover{
      color: #3a5876;
      background: #fff;
      border-color: #3a5876;
}

/* rss button class*/
.rssBtn{
    background: #BDBDBD;
}

.rssBtn:before{
      font-family: "FontAwesome";
      content: "\f09e"; /* add rss icon */
}

.rssBtn:hover{
      color: #e88845;
      background: #fff;
      border-color: #e88845;
}




/* responsive */
@media (min-width:360px) and (max-width:768px){

.user img{
  max-height: 150px;
  max-width: 150px;
  
}
.top-photo h3 {
  font-size: 16px;
}
.top-photo h5 {
  font-size: 16px;
  margin-left: 55%;
}

.btn-outline{
  margin-bottom:60px; 
}
