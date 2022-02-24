<?php
include('header.php');
?>
<style>
    .project-name h2{
        position: relative;
    font-size: 56px;
    line-height: 1em;
    font-weight: 900;
    color: rgba(0,0,0,.09);
    z-index: -1;
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
    margin: 25px 0;
    -ms-word-wrap: break-word;
    word-wrap: break-word;

 
}
.qodef-st-title{
    font-size: 35px;
    line-height: 1.142em;
    font-weight: 500;
 
    font-family: 'Open Sans', sans-serif;

}

.projectss {
    display: flex;
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
        <div class="projectss">
        <img src="image/project1.jpg" class="project-img">
        <div class="project-name">
            <h2>Project one</h2>
            </div>
            <h3 class="qodef-st-title">
             Everything you need<br> To start blogging today! </h3>
       
         
        </div>
       
    </div>
</div>
</div>
<?php
include('footer.php');
?>