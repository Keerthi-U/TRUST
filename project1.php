<?php
include('header.php');
?>
<style>
    .pro-section{
        padding-top:30px;
        padding-bottom:50px;
    }
    .card-img  img {
    transition: all 0.3s;
    border-radius: 8px;
}
.card-img {
    width: 100%;
    /* border-radius: calc(0.25rem - 1px); */
    border-radius: 8px;
}
.card {
    background-color: transparent;
    border: none;
}
.c-body {
    padding: 0;
    padding-top: 2rem;
    color: black;
    font-family: 'IBM Plex Sans', sans-serif;
}
.card-title {
    font-family: 'IBM Plex Sans', sans-serif;
    font-size: 1.5rem;
    color: black;
}
{
   
}

.mbr-text {
    font-style: normal;
    line-height: 1.6;
    
    font-size: 0.9rem;

}
p.card-text {
    color: #767676;
}
.card:hover img {
    box-shadow: 0 10px 55px 5px rgb(137 173 255 / 35%);
}
.red-more{
    order: 2;
    font-size: 0.9rem;

    padding-top: 23px;
    text-transform: uppercase;
    transition: padding 0.3s!important;
    border: none;
}
.red-more:after {
    content: ' \279D';
}
.red-more:hover:after{
    padding-right:10px;
}
.pro-heading{
      font-family: 'IBM Plex Sans', sans-serif;
      color:black;
}
    </style>


<!-- /BOLG PAGE START/ -->


<div class="blog-section">
    <div class="blog-bg">
           <div class="blog-page-title">
           <h1 class="pagetitle-title heading">Project</h1>
           <div id="breadcrumb" class="breadcrumb"><a class="breadcrumb-link" href="index.php">Home</a><span class="breadcrumb-separator"></span><span class="breadcrumb-title">Project</span>
           </div>
           </div>
    </div>
</div>






<div class="pro-section">
<div class="container">
<div class="section-heading pro-heading">
             <!-- <div id="blog-subtitle" class="pro-subtitle section-subtitle">our blog</div>
             <div class="section-title pro-title ">Project List</div> -->
        </div>
    <div class="row">
   
        <div class="col-lg-4 mt-5">
          <div class="card " >
            <img class="card-img" src="image/pro1.jpg" alt="Card image" style="width:100%">
          <div class="card-body c-body">
             <h4 class="card-title">Modern Technologies</h4>
              <p class="card-text mbr-text">Development, as modern technology, go hand in hand - that virtually do without stating.</p>
              
            
            </div>
            <a href="#" class=" red-more">Read More</a>
         </div>
        </div>

        <div class="col-lg-4  mt-5">
          <div class="card mbr-text" >
            <img class="card-img" src="image/07.jpg" alt="Card image" style="width:100%">
          <div class="card-body  c-body">
             <h4 class="card-title">Modern Technologies</h4>
              <p class="card-text">It can be practical to concentrate your innovation initiatives on places where you have recurring challenges.</p>
         </div>
         <a href="#" class=" red-more">Read More</a>
         </div>
        </div>

        <div class="col-lg-4  mt-5">
          <div class="card mbr-text ">
            <img class="card-img" src="image/04.jpg" alt="Card image" style="width:100%">
          <div class="card-body c-body">
             <h4 class="card-title">Multifunctional</h4>
              <p class="card-text">The exploitation is important to a service enhances its treatments.</p>
         </div>
         <a href="#" class=" red-more">Read More</a>
         </div>
        </div>
        
        <div class="col-lg-4  mt-5">
          <div class="card mbr-text" >
            <img class="card-img" src="image/07.jpg" alt="Card image" style="width:100%">
          <div class="card-body  c-body">
             <h4 class="card-title">Modern Technologies</h4>
              <p class="card-text">It can be practical to concentrate your innovation initiatives on places where you have recurring challenges.</p>
         </div>
         <a href="#" class=" red-more">Read More</a>
         </div>
        </div>

        <div class="col-lg-4  mt-5">
          <div class="card mbr-text ">
            <img class="card-img" src="image/04.jpg" alt="Card image" style="width:100%">
          <div class="card-body c-body">
             <h4 class="card-title">Multifunctional</h4>
              <p class="card-text">The exploitation is important to a service enhances its treatments.</p>
         </div>
         <a href="#" class=" red-more">Read More</a>
         </div>
        </div>

        <div class="col-lg-4  mt-5">
          <div class="card mbr-text ">
            <img class="card-img" src="image/04.jpg" alt="Card image" style="width:100%">
          <div class="card-body c-body">
             <h4 class="card-title">Multifunctional</h4>
              <p class="card-text">The exploitation is important to a service enhances its treatments.</p>
         </div>
         <a href="#" class=" red-more">Read More</a>
         </div>
        </div>
   
   
    </div>
    
   
</div>
</div>

<?php
include('footer.php');
?>