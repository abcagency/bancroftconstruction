<style type="text/css">
#wpsm_team_pro_row_<?php echo $post_id; ?> li,
#wpsm_team_pro_row_<?php echo $post_id; ?> ul{
  list-style: none;
  margin: 0;
  padding: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> a,
#wpsm_team_pro_row_<?php echo $post_id; ?> a:hover,
#wpsm_team_pro_row_<?php echo $post_id; ?> a:focus{
  text-decoration: none;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> img{
  width: 100%;
  height: auto;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar.wpsm-scroll .mCSB_inside > .mCSB_container {
  margin-right: 17px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar.wpsm-team-popup-items {
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 9999;
  overflow: hidden;
  opacity: 0;
  background: rgba(0,0,0,0.8);
  visibility: hidden;
  -o-transition: opacity 0.5s 0.4s, visibility 0.5s 0.4s;
  transition: opacity 0.5s 0.4s, visibility 0.5s 0.4s;
  -webkit-transition: opacity 0.5s 0.4s, visibility 0.5s 0.4s;
  -moz-transition: opacity 0.5s 0.4s, visibility 0.5s 0.4s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar.wpsm-popup-on.wpsm-team-popup-items {
  opacity: 1;
  visibility: visible;
  -o-transition: opacity 0.4s, visibility 0.5s;
  transition: opacity 0.4s, visibility 0.5s;
  -webkit-transition: opacity 0.4s, visibility 0.5s;
  -moz-transition: opacity 0.4s, visibility 0.5s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar.popup-right-side .wpsm-popup-wrap {
  max-width:500px;
  margin-left: auto;
  height: 100%;
  position: absolute;
  right: 0;
  width: 100%;
  background: #fff;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -ms-transform: translateX(100%);
      transform: translateX(100%);
  -webkit-transform: translateX(100%);
  -moz-transform: translateX(100%);
  -webkit-transition: -webkit-transform 0.6s;
  transition: -webkit-transform 0.6s;
  -o-transition: transform 0.6s;
  transition: transform 0.6s;
  transition: transform 0.6s, -webkit-transform 0.6s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar.popup-left-side .wpsm-popup-wrap {
  max-width:500px;
  margin-left: auto;
  height: 100%;
  position: absolute;
  left: 0;
  width: 100%;
  background: #fff;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -ms-transform: translateX(-100%);
      transform: translateX(-100%);
  -webkit-transform: translateX(-100%);
  -moz-transform: translateX(-100%);
  -webkit-transition: -webkit-transform 0.6s;
  transition: -webkit-transform 0.6s;
  -o-transition: transform 0.6s;
  transition: transform 0.6s;
  transition: transform 0.6s, -webkit-transform 0.6s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar.wpsm-popup-on .wpsm-popup-wrap {
  -ms-transform: translateX(0);
      transform: translateX(0);
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .wpsm-popup-header {
  padding: 3px 15px;
  position: relative;
  z-index: 99;
  background-color: rgba(0, 0, 0, .8);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .clearfix:before, 
#wpsm_team_pro_row_<?php echo $post_id; ?> .clearfix:after {
  content: " ";
  display: table;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .wpsm-popup-close<?php echo $post_id; ?> {
  float: right;
  width: 35px;
  height: 30px;
  display: block;
  position: relative;
  text-align: center;
  margin-top:8px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .wpsm-popup-close<?php echo $post_id; ?>:before, 
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .wpsm-popup-close<?php echo $post_id; ?>:after {
  position: absolute;
  position: absolute;
  left: 16px;
  top: 3px;
  content: ' ';
  height: 23px;
  width: 3px;
  background-color: #fff;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .wpsm-popup-close<?php echo $post_id; ?>:before {
  -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
          transform: rotate(45deg);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .wpsm-popup-close<?php echo $post_id; ?>:after {
  -webkit-transform: rotate(-45deg);
      -ms-transform: rotate(-45deg);
          transform: rotate(-45deg);
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .wpsm-popup-nav {
  float: left;
  line-height: 1;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .wpsm-nav-item {
  display: inline-block;
  padding: 6px 10px;
  font-size:35px;
  -webkit-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
  color: #fff !important;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .wpsm-popup-detail-box<?php echo $post_id; ?> {
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
  z-index: 1;
  font-size: 15px;
  width: 100%;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .wpsm-popup-open<?php echo $post_id; ?>.wpsm-popup-detail-box<?php echo $post_id; ?> {
  z-index: 9;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .wpsm-popup-content {
  position: relative;
  margin: 0 auto;
  text-align: left;
  vertical-align: middle;
  background: <?php echo $tm_pop_bg_clr;?>;
  display: inline-block;
  width: 100% ;
  overflow: auto;
  height: 100%;
  opacity: 0;
  -webkit-transition: opacity 0.4s;
  -o-transition: opacity 0.4s;
  transition: opacity 0.4s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .wpsm-popup-open<?php echo $post_id; ?> .wpsm-popup-content {
  opacity: 1;
  -webkit-transition: opacity 0.4s 0.3s;
  -o-transition: opacity 0.4s 0.3s;
  transition: opacity 0.4s 0.3s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .wpsm-popup-head,
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .wpsm-popup-image{
  position: relative;
  overflow: hidden;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .popup-member-position{
    position: absolute;
    bottom: 20px;
    right: -300px;
    background-color: #000;
    color: #ffffff;
    padding: 10px;
    margin: 0;
    min-width: 200px;
    text-align: center;
    text-transform: uppercase;
    -webkit-transition: all .6s ease;
    -o-transition: all .6s ease;
    transition: all .6s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .wpsm-popup-open<?php echo $post_id; ?> .popup-member-position{
  right: 0;
  -webkit-transition-delay: .3s;
       -o-transition-delay: .3s;
          transition-delay: .3s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .wpsm-popup-details{  
  padding: 30px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .popup-member-name{
    margin: 0;
    position: relative;
    font-size: 35px;
    text-transform: capitalize;
    padding: 5px;
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
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .popup-member-name::after{
  position: absolute;
  content: "";
  left: 0;
  top: 0;
  width: 3px;
  height: 100%;
  background-color: #000;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .wpsm-popup-details p{
    margin: 15px 0;
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
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .wpsm-popup-contact{
  margin-top:20px;
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
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .wpsm-popup-contact li{
  padding: 15px 0;
  border-bottom: 1px solid #efefef;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .wpsm-popup-contact li:last-child{
  border-bottom: 0
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .wpsm-popup-contact li i {
  height: 30px;
  width: 30px;
      <?php
    if($tm_pop_color=="light")
    {
    ?>
  background-color:#fff;
  color: #000;
    <?php  
    }
    else
    {
    ?>
  background-color:#000;
  color: #fff;
    <?php
    }
    ?>
  font-size: 15px;
  text-align: center;
  line-height: 30px;
  margin-right: 20px;
  position: absolute;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .wpsm-popup-contact li span {
  margin-left: 40px;
  margin-top: 5px;
  display: block;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .wpsm-popup-socials{
  position: absolute;
  top: 60px;
  left:5px;
  -webkit-transform: translateX(-100px);
      -ms-transform: translateX(-100px);
          transform: translateX(-100px);
  -webkit-transition: all .6s ease;
  -o-transition: all .6s ease;
  transition: all .6s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .wpsm-popup-open<?php echo $post_id; ?> .wpsm-popup-socials{
  -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
          transform: translateX(0);
  -webkit-transition-delay: .5s;
       -o-transition-delay: .5s;
          transition-delay: .5s
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .wpsm-popup-socials a{
  display: block;
  height: 35px;
  width: 35px;
background-color: #000;
    color: #fff;
  text-align: center;
  padding-top: 6px;
  margin: 5px;
  font-size: 16px;
  -webkit-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-sidebar .wpsm-popup-socials a:hover{
background-color: #fff;
    color: #000;
}

/* ----popup-slider settings----- */
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-team-popup-items.popup-slider {
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 9999;
  overflow: hidden;
  opacity: 0;
  background: rgba(0,0,0,0.8);
  visibility: hidden;
  -o-transition: opacity 0.5s 0.4s, visibility 0.5s 0.4s;
  transition: opacity 0.5s 0.4s, visibility 0.5s 0.4s;
  -webkit-transition: opacity 0.5s 0.4s, visibility 0.5s 0.4s;
  -moz-transition: opacity 0.5s 0.4s, visibility 0.5s 0.4s;
  padding: 0 70px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-popup-on.wpsm-team-popup-items.popup-slider {
  opacity: 1;
  visibility: visible;
  -o-transition: opacity 0.4s, visibility 0.5s;
  transition: opacity 0.4s, visibility 0.5s;
  -webkit-transition: opacity 0.4s, visibility 0.5s;
  -moz-transition: opacity 0.4s, visibility 0.5s;
}

#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .wpsm-popup-detail-box<?php echo $post_id; ?>{
  height: 100%;
  width: 100%;
  position: absolute;
  left: 0;
  top: 0;
  z-index: 1;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 30px 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .wpsm-popup-open<?php echo $post_id; ?>.wpsm-popup-detail-box<?php echo $post_id; ?> {
  z-index:2;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .wpsm-popup-content {
  position: relative;
  margin: 0 auto;
  text-align: left;
  vertical-align: middle;
  background-color: <?php echo $tm_pop_bg_clr;?>;
  padding: 50px;
  display: inline-block;
  width: calc(100% - 1px);
  min-height: 200px;
  max-height: 100%;
  opacity: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -ms-transform: translateY(-100px);
      transform: translateY(-100px);
  -webkit-transform: translateY(-100px);
  -moz-transform: translateY(-100px);
  -webkit-transition: -webkit-transform 0.6s, opacity 0.3s;
  -webkit-transition: opacity 0.3s, -webkit-transform 0.6s;
  transition: opacity 0.3s, -webkit-transform 0.6s;
  -o-transition: transform 0.6s, opacity 0.3s;
  transition: transform 0.6s, opacity 0.3s;
  transition: transform 0.6s, opacity 0.3s, -webkit-transform 0.6s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .wpsm-popup-open<?php echo $post_id; ?> .wpsm-popup-content {
  opacity: 1;
  -ms-transform: translateY(0);
      transform: translateY(0);
  -webkit-transform: translateY(0);
  -moz-transform: translateY(0);
  -webkit-transition: -webkit-transform 0.6s 0.3s, opacity 0.3s 0.3s;
  -webkit-transition: opacity 0.3s 0.3s, -webkit-transform 0.6s 0.3s;
  transition: opacity 0.3s 0.3s, -webkit-transform 0.6s 0.3s;
  -o-transition: transform 0.6s 0.3s, opacity 0.3s 0.3s;
  transition: transform 0.6s 0.3s, opacity 0.3s 0.3s;
  transition: transform 0.6s 0.3s, opacity 0.3s 0.3s, -webkit-transform 0.6s 0.3s;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .wpsm-popup-close<?php echo $post_id; ?> {
  position: absolute;
  width: 30px;
  height:30px;
  top: 15px;
  right: 15px;
  cursor: pointer;
  z-index: 100;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .wpsm-popup-close<?php echo $post_id; ?>::before, 
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .wpsm-popup-close<?php echo $post_id; ?>::after {
  content: '';
  position: absolute;
  width: 100%;
  top: 50%;
  height:2px;
  left:0;
  background: #fff;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
      transform: rotate(45deg);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .wpsm-popup-close<?php echo $post_id; ?>::after {
  -webkit-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
      transform: rotate(-45deg);
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .wpsm-popup-wrap {
  max-width: 900px;
  margin: 0 auto;
  height: 100%;
  position: relative;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .wpsm-nav-item {
  position: absolute;
  top: 50%;
  left: -50px;
  margin-top: -30px;
  cursor: pointer;
  line-height: 1;
  color: #fff;
  font-size: 50px;
  z-index: 10;
  -webkit-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .wpsm-nav-right {
  left: auto;
  right: -50px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .wpsm-popup-head,
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .wpsm-popup-image{
  position: relative;
  overflow: hidden;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .popup-member-position{
    font-size: 18px;
    padding-bottom: 15px;
    text-transform: uppercase;
    position: relative;
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
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .popup-member-position::after {
    content: "";
    position: absolute;
    height: 2px;
    width: 40px;
    left: 0;
    bottom: 0;
    background-color: #000;
  }
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .popup-member-name{
    margin: 0;
    position: relative;
    font-size: 35px;
    text-transform: capitalize;
    margin-bottom: 10px;
    font-weight: 600;
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
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .wpsm-popup-details p{
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
    color: #333;
    <?php
    }
    ?>
    font-weight: 400;
    margin: 10px 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .wpsm-popup-socials{
  margin-top:15px;
  padding-top: 10px;
  text-align: center;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .wpsm-popup-socials li {
  display: inline-block;
  margin: 5px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .wpsm-popup-socials li a {
    height: 35px;
    width: 35px;
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
    background: transparent;
    font-size: 18px;
    display: block;
    text-align: center;
    line-height: 35px;
    -webkit-transition: all .5s ease;
    -o-transition: all .5s ease;
    transition: all .5s ease;
    border-radius: 0;
    border:none;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .wpsm-popup-socials li a:hover{

        <?php
    if($tm_pop_color=="light")
    {
    ?>
        background-color: #fff;
    color: #000;
    <?php  
    }
    else
    {
    ?>
        background-color: #000;
    color: #fff;
    <?php
    }
    ?>   
  -webkit-transform: translateY(-5px);
      -ms-transform: translateY(-5px);
          transform: translateY(-5px)
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .wpsm-popup-contact {
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
  margin-top: 20px;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .wpsm-popup-contact li {
  padding: 15px 0;
  border-bottom: 1px dashed #ccc;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .wpsm-popup-contact li:last-child{
  border-bottom: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .wpsm-popup-contact li i {
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
  font-size:20px;
  margin-right: 20px;
  position: absolute;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .wpsm-popup-contact li span {
  margin-left: 40px;
  display: block;
}


@media (max-width: 830px){
  #wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .wpsm-nav-item {
    top: 15px;
    left: 15px;
    font-size: 35px;
    margin-top: 0;
    z-index: 1000;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .wpsm-nav-right {
  left: 50px;
  right: auto;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .wpsm-team-popup-items.popup-slider {
  padding: 0;
}
#wpsm_team_pro_row_<?php echo $post_id; ?> .popup-slider .wpsm-popup-detail-box<?php echo $post_id; ?> {
  padding-top: 60px;
}
}	
</style>

