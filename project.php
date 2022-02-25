<?php
include('header.php');
?>
<style>
    .project-name h2{
        position: absolute;
    font-size: 56px;
    line-height: 1em;
    font-weight: 900;
    color: rgba(0,0,0,.09);
    z-index: -1;
    bottom: 76px;
    transform-origin: 0,0;
    transform: rotate(-90deg);

    }
    .project-namee h2{
        position: absolute;
    font-size: 56px;
    line-height: 1em;
    font-weight: 900;
    color: rgba(0,0,0,.09);
    z-index: -1;
    /* bottom: 0; */
    top: 60px;
    left: -30px;
  
    transform-origin: 0,0;
    transform: rotate(90deg);

    }
   .project-img {
        width: 287.25px;
        -webkit-box-shadow: 8px 11px 15px rgb(0 0 0 / 7%);
    box-shadow: 8px 11px 15px rgb(0 0 0 / 7%);
    }
    .qodef-st-title {
    position: relative;
    width: auto;
    display: inline-block;
    margin: 0;
    color: #000;
    margin: 0 0;
    -ms-word-wrap: break-word;
    word-wrap: break-word;

 
}
.qodef-st-title {
    font-size: 35px;
    line-height: 1.142em;
    font-weight: 500;
    font-family: 'Open Sans ', sans-serif;
    
}

.projectss {
    display: flex;
    position: relative;
}
.project-name {
    width: 10%;
    /* height: 96px; */
}
.qodef-st-title:before{
    display: inline-block;
    position: absolute;
    top: 13px;
    left: -40px;
    content: '';
    width: 11px;
    height: 11px;
    background-color: #ff2a0e;
}
.project-name {
    width: 10%;
    /* height: 96px; */
}

.text-p {
    width: 44%;
    padding-left: 10px;
}
.wpb_wrapper {
    padding-left: 10px;
    padding-top: 40px;
}
span.qodef-btn-text{
    display: inline-block;
    /* vertical-align: middle; */
    /* width: auto; */
    /* margin: 0; */
    font-family: inherit;
    font-size: 16px;
    line-height: 2em;
    /* letter-spacing: 0; */
    font-weight: 700;
    padding-top: 20px;
    /* padding: 0!important; */
    /* padding-top: 49px; */
    color: #000;
    /* background-color: transparent; */
    /* border: 0; */
    /* vertical-align: middle; */
    text-transform: lowercase;
    font-size: 18px;
    position: relative;
}
.qodef-btn-text:after {
    content: '';
    position: relative;
    display: inline-block;
    vertical-align: middle;
    height: 1px;
    width: 42px;
    background-color: #b2b2b2;
    left: 8px;
    -webkit-transform-origin: left;
    -ms-transform-origin: left;
    transform-origin: left;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}

.qodef-btn-text:hover:after{
    background-color: transparent!important;
    cursor:pointer;
}




</style>
<!-- BLOG SECTION START -->
<div class="blog-section" id="blog-section">
    <div class="container">
        <div class="section-heading blog-heading"data-animate-in="up">
             <div id="blog-subtitle" class="blog-subtitle section-subtitle">our blog</div>
             <div class="section-title blog-title heading">Project List</div>
        </div>
<div class="project-sec">
    <div class="project-list">

          <!-- first project  -->
       
          <div class="row">
          <div class="col-lg-12">

              <div class="projectss">
                     <img src="image/project1.jpg" class="project-img">
                      <div class="project-name">
                      <h2>Project </h2>
                       </div>
                       <div class="text-p">
                        <h3 class="qodef-st-title">
                         Everything you need<br> To start blogging today! </h3>
                         <div class="wpb_wrapper">
                         <p>Get all the blog lists &amp; single post templates you’ll ever need to share your news &amp; stories with the crowd.</p>
                         <span class="qodef-btn-text">View more</span>
                        </div>
                       </div>
               </div>


         </div>
         </div>
          
    
         <div class="row mt-5">
           <div class=" col-lg-7">
                    <div class="text-pp">
                        <h3 class="qodef-st-title">
                         Everything you need<br> To start blogging today! </h3>
                         <div class="wpb_wrapper">
                         <p>Get all the blog lists &amp; single post templates you’ll ever need to share your news &amp; stories with the crowd.</p>
                         <span class="qodef-btn-text">View more</span>
                         </div>
                    </div>
                 
                   
           </div>
<div class="col-lg-1">
<div class="project-namee">
                      <h2>Project </h2>
                   </div>
</div>

             <div class="col-lg-4">
          
             <img src="image/project1.jpg" class="project-img">
             </div>

     
         </div>
         

         <div class="row mt-5">
          <div class="col-lg-12">

              <div class="projectss">
                     <img src="image/project1.jpg" class="project-img">
                      <div class="project-name">
                      <h2>Project </h2>
                       </div>
                       <div class="text-p">
                        <h3 class="qodef-st-title">
                         Everything you need<br> To start blogging today! </h3>
                         <div class="wpb_wrapper">
                         <p>Get all the blog lists &amp; single post templates you’ll ever need to share your news &amp; stories with the crowd.</p>
                         <span class="qodef-btn-text">View more</span>
                        </div>
                       </div>
               </div>


         </div>
         </div>





        </div>
       
    </div>
</div>
</div>
<?php
include('footer.php');
?>