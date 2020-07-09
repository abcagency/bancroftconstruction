<style type="text/css">

/*=========--- popup ---============*/
#wpsm_team_pro_row_<?php echo $post_id; ?> ul, 
#wpsm_team_pro_row_<?php echo $post_id; ?> li {
  list-style: none;
  margin: 0;
  padding: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> a,
#wpsm_team_pro_row_<?php echo $post_id; ?> a:focus, 
#wpsm_team_pro_row_<?php echo $post_id; ?> a:hover{
  text-decoration: none
}
#wpsm_team_pro_row_<?php echo $post_id; ?> p,
#wpsm_team_pro_row_<?php echo $post_id; ?> h2, 
#wpsm_team_pro_row_<?php echo $post_id; ?> h3,
#wpsm_team_pro_row_<?php echo $post_id; ?> h4 {
  margin: 0;
  padding: 0
}
#wpsm_team_pro_row_<?php echo $post_id; ?> img{
  width: 100%;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-team-popup{
  position: absolute;
  top:0;
  left: 0;
  height: 100%;
  width: 100%;
  padding: 40px;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all .6s ease;
  -o-transition: all .6s ease;
  transition: all .6s ease;
  overflow-y: auto;
  margin-top:20px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-team-popup.active{
  visibility: visible;
  opacity: 1;
  -webkit-transition-delay: .3s;
       -o-transition-delay: .3s;
          transition-delay: .3s;
}
.team-deatil-popup<?php echo $post_id; ?>{
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  visibility: hidden;
  color: #000;
}
.team-deatil-popup<?php echo $post_id; ?>.is-open {
  visibility: visible;
  z-index: 9999;
}
.team-deatil-popup<?php echo $post_id; ?>::before{
  content: "";
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0px;
  left: 0px;
  background-color: rgba(0, 0, 0,.7);
  visibility: hidden;
  opacity: 0;
  -webkit-transition:all .8s ease;
  -o-transition:all .8s ease;
  transition:all .8s ease;
}
.team-deatil-popup<?php echo $post_id; ?>.is-open::before{
  visibility: visible;
  opacity: 1;
}
.popup-wrap{
  position: fixed;
  left: 50%;
  top: 0;
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  height: 100vh;
  visibility: hidden;
  overflow: hidden;
  -webkit-transition:all .8s ease;
  -o-transition:all .8s ease;
  transition:all .8s ease;
  z-index: 8;
  width: 100%;
  max-width:800px;
  z-index: 5;
}
.team-deatil-popup<?php echo $post_id; ?>.is-open .popup-wrap{
  visibility: visible;
}
.team-deatil-popup<?php echo $post_id; ?> .fold-left, 
.team-deatil-popup<?php echo $post_id; ?> .fold-right {
  width: 100%;
  height: 100vh;
  overflow: hidden;
  position: relative;
  -webkit-perspective: 2000px;
  perspective: 2000px;
}
.team-deatil-popup<?php echo $post_id; ?> .fold-left::after, 
.team-deatil-popup<?php echo $post_id; ?> .fold-right::after {
  content: '';
  background-color: <?php echo $tm_pop_bg_clr;?>;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: -webkit-transform 0.5s 0.4s, background-color 0.5s 0.4s;
  -webkit-transition: background-color 0.5s 0.4s, -webkit-transform 0.5s 0.4s;
  transition: background-color 0.5s 0.4s, -webkit-transform 0.5s 0.4s;
  -o-transition: transform 0.5s 0.4s, background-color 0.5s 0.4s;
  transition: transform 0.5s 0.4s, background-color 0.5s 0.4s;
  transition: transform 0.5s 0.4s, background-color 0.5s 0.4s, -webkit-transform 0.5s 0.4s;
}
.team-deatil-popup<?php echo $post_id; ?> .fold-left::after {
  -webkit-transform-origin: left center;
  -ms-transform-origin: left center;
  transform-origin: left center;
  -webkit-transform: translateX(100%) rotateY(90deg);
  -ms-transform: translateX(100%) rotateY(90deg);
  transform: translateX(100%) rotateY(90deg);
}
.team-deatil-popup<?php echo $post_id; ?> .fold-right::after {
  -webkit-transform-origin: right center;
  -ms-transform-origin: right center;
  transform-origin: right center;
  -webkit-transform: translateX(-100%) rotateY(-90deg);
  -ms-transform: translateX(-100%) rotateY(-90deg);
  transform: translateX(-100%) rotateY(-90deg);
  background-color: #363636;
}
.team-deatil-popup<?php echo $post_id; ?>.is-open .fold-right::after {
  background-color: <?php echo $tm_pop_bg_clr;?>;
}
.team-deatil-popup<?php echo $post_id; ?> .fold-left,
.team-deatil-popup<?php echo $post_id; ?> .fold-right {
  width: 50%;
  float: left;
  height: 100%;
}

.team-deatil-popup<?php echo $post_id; ?> .fold-left {
  display: block;
  -webkit-perspective-origin: 100% 50%;
  perspective-origin: 100% 50%;
}
.team-deatil-popup<?php echo $post_id; ?> .fold-right {
  -webkit-perspective-origin: 0% 50%;
  perspective-origin: 0% 50%;
}
.team-deatil-popup<?php echo $post_id; ?>.is-open .fold-right::after, 
.team-deatil-popup<?php echo $post_id; ?>.is-open .fold-left::after {
  -webkit-transform: translateX(0);
  -ms-transform: translateX(0);
  transform: translateX(0);
  -webkit-transition: -webkit-transform 0.5s 0s, background-color 0.5s 0s;
  -webkit-transition: background-color 0.5s 0s, -webkit-transform 0.5s 0s;
  transition: background-color 0.5s 0s, -webkit-transform 0.5s 0s;
  -o-transition: transform 0.5s 0s, background-color 0.5s 0s;
  transition: transform 0.5s 0s, background-color 0.5s 0s;
  transition: transform 0.5s 0s, background-color 0.5s 0s, -webkit-transform 0.5s 0s;
}
.wpsm-popup-close{
  width: 30px;
  height: 30px;
  display: block;
  position: fixed;
  text-align: center;
  right: 32px;
  top: 20px;
  z-index: 1;
  -webkit-transition: opacity 0.3s ease;
  -o-transition: opacity 0.3s ease;
  transition: opacity 0.3s ease;
  opacity: 0;
}
.wpsm-popup-close:before, 
.wpsm-popup-close:after {
  position: absolute;
  position: absolute;
  left: 50%;
  top: 50%;
  content: ' ';
  height: 100%;
  width: 2px;
  background-color: #8f8f8f;
}
.wpsm-popup-close:after {
  -webkit-transform: translate(-50%,-50%) rotate(-45deg);
      -ms-transform: translate(-50%,-50%) rotate(-45deg);
          transform: translate(-50%,-50%) rotate(-45deg);
}
.wpsm-popup-close:before {
  -webkit-transform:translate(-50%,-50%) rotate(45deg);
      -ms-transform:translate(-50%,-50%) rotate(45deg);
          transform:translate(-50%,-50%) rotate(45deg);
}
.team-deatil-popup<?php echo $post_id; ?>.is-open .wpsm-popup-close{
  opacity: 1;
  -webkit-transition: opacity 0.9s ease;
  -o-transition: opacity 0.9s ease;
  transition: opacity 0.9s ease;
}
.team-popup-member{
  color: #000;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-popup-name{
  font-size: 30px;
    <?php
    if($tm_pop_color=="light")
    {
    ?>
    color: #fff;
    <?php  
    }
    else
    {
    ?>
    color: #000;
    <?php
    }
    ?>
    font-weight: 500;
    margin-bottom: 10px;
    text-transform: capitalize;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .team-popup-position{
    font-size: 16px;
    <?php
    if($tm_pop_color=="light")
    {
    ?>
    color: #fff;
    <?php  
    }
    else
    {
    ?>
    color: #333;
    <?php
    }
    ?>
    font-weight: 500;
    text-transform: uppercase;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-team-popup p{
    font-size: 15px;
        <?php
    if($tm_pop_color=="light")
    {
    ?>
    color: #fff;
    <?php  
    }
    else
    {
    ?>
    color: #000;
    <?php
    }
    ?>
    padding: 10px 0;
}
.team-popup-image{
  position: relative;
}
.team-popup-social{
  position: absolute;
  bottom: 10px;
  text-align: center;
  width: 100%;
}
.team-popup-social li{
  display: inline-block;
  margin: 5px;
}
.team-popup-social a{
  height: 30px;
  width: 30px;
  display: block;
  text-align: center;
  padding-top: 5px;
    background-color: #fff;
    color: #000;
  margin: 5px;
  font-size: 15px;
  -webkit-transition: all .5s ease;
  -o-transition: all .5s ease;
  transition: all .5s ease;
}
.team-popup-social a:hover{
    background-color: #000;
    color: #fff; 
}
.team-popup-content{
  margin-top: 20px !important;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-popup-contact {
  margin-top: 20px;
    <?php
    if($tm_pop_color=="light")
    {
    ?>
    color: #fff;
    <?php  
    }
    else
    {
    ?>
    color: #000;
    <?php
    }
    ?>
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-popup-contact li {
  padding: 10px 0;
}
.wpsm-popup-contact li i {
  height: 30px;
  width: 30px;
      <?php
    if($tm_pop_color=="light")
    {
    ?>
     border: 1px solid #fff;
    color: #fff;
    <?php  
    }
    else
    {
    ?>
  border: 1px solid #000;
  color: #000;
    <?php
    }
    ?>

  font-size: 15px;
  text-align: center;
  line-height: 30px;
  margin-right: 20px;
  position: absolute;
}
.wpsm-popup-contact li span {
  margin-left: 40px;
  margin-top: 5px;
  display: block;
}

.mCSB_scrollTools .mCSB_draggerRail {
  background-color: rgb(93, 93, 93);
}	
</style>