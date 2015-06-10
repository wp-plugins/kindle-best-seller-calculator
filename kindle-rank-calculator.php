<?php 

/* Plugin Name: Kindle Rank Calculator
Plugin URI: https://pk.linkedin.com/in/farhansaeed17
Description: Adds a Kindle KDP calculator to your website that will help users convert Kindle Best Seller Rank into ebooks sold per day.
Version: 1.0
Author: Farhan Saeed
Author URI: https://pk.linkedin.com/in/farhansaeed17
*/



function display()
{

?>
<?php wp_enqueue_style( 'fonts-googleapis', plugins_url( '/css/fonts-googleapis.css', __FILE__ ) ); ?>

<div id="view-kindle" style="  border: 4px solid #204A83; padding-right: 10px;  padding-left: 10px;  padding-top: 4px;padding-bottom: 1px; margin: 15px 15px;">
<div align="center" style="
    margin-bottom: 29px;
" id = "top">
<a target="_blank" style="border-bottom: none;" href="http://kindlepreneur.com/"><?php
echo '<img class="alignnone size-medium wp-image-7" src="' . plugins_url( '/images/crown.PNG', __FILE__ ) . '" > ';
?></a>  <h3 style = "display: inline;
  color: #F48220;
  font-family: Maven Pro; font-size:2vw;">Kindle Best Seller</h3><div style="  padding-left: 52px;
    margin-top: -21px;
"> <h3 style = "text-align:center;display: inline;
  color: #204A83;
  font-family: Maven Pro; font-size: 28px;">Calculator</h3>
</div>
<h4 id = "discover" style = " color: #204A83;font-family: Maven Pro; font-size: 16px; line-height: 110%; padding-top: 16px;   margin-bottom: -13px;">Discover how many books an author is selling by entering their kindle best seller rank:</h4>
</div>
<div id="change"> 
<input style="font-size: 15px;" id="rank-input" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="input" type="text" value="" size="30" aria-required="true" placeholder="Enter the Kindle Best Seller Rank Here" required="required">
<style>input[type="button"]:hover{
background-color:#F48220 !important;
}</style>
<input id="press" align="center" name="but" type="button" value="Click Here" size="30" aria-required="true" style="
    margin-right: auto;
    margin-left: auto;
    display: block; margin-top:13px;
background-color: #204a83;
"required="required"> 
</div>

<div id = "learn" style=" text-align:center;"><a style = " color: #204A83;font-family: Maven Pro; font-size: 16px; font-weight: bold;"  href="http://kindlepreneur.com/Amazon-KDP-Sales-Rank-Calculator">Learn More about the Kindle Best Seller Rank</a></div>
<div  id = "result" style = " margin-top: 10px; display:none;">
<div id = "inner"  style = "border: 2px solid #F48220; ">
<h3 style= " font-family: Maven Pro;" id = "books" align="center"> - </h3>
<h4 align="center" style = "font-family: Maven Pro;" >books per day</h4>
</div>
<div id="greater" style="display:none;">
<h4 align="center" style = "font-family: Maven Pro;" >less than a book a day</h4>
</div>
<input id="result-press" align="center" name="result-press" type="button" value="Try Again" size="30" aria-required="true" style="background-color: #204a83;
    margin-right: auto;
    margin-left: auto;
    display: block; margin-top:10px;
"required="required"> 
</div>

<h6 align = "center" style ="  font-size: 15px; font-family: Maven Pro;
  padding-top: 10px;">Designed by <a href="http://kindlepreneur.com/" target="_blank" style="  text-shadow: 0px 0px #F48220;
  font-size: 15px;
  color: #F48220;">kindlepreneur.com</a>, a site devoted to teaching advanced ebook marketing techniques to authors</h6>


</div>
<script>

jQuery(document).ready(function(){
jQuery( "#press" ).click(function() {
var books;
var x = document.getElementById("rank-input").value;

if(x>=1 && x<=5 ){
books = ((7000-4000)/5)*(5-x) + 4000;

}
if(x>=6 && x<=20 ){
books = ((4000-3000)/(20-5))*(20-x) + 3000;

}
if(x>=21 && x<=35 ){
books = ((3000-2000)/(35-20))*(35-x) + 2000;

}
if(x>=36 && x<=100 ){
books = ((2000 - 1000)/(100-35))*(100-x) + 1000;

}
if(x>=101 && x<=200 ){
books = ((1000-500)/(200-100))*(200-x) + 500;

}
if(x>=201 && x<=350 ){
books = ((500-250)/(350-200))*(350-x) + 250;

}
if(x>=351 && x<=500 ){
books = ((250-175)/(500-350))*(500-x) + 175;

}
if(x>=501 && x<=750 ){
 books = ((175-120)/(750-500))*(750-x) + 120;

}
if(x>=751 && x<=1500 ){
var books = ((120-100)/(1500-750))*(1500-x) + 100;
}
if(x>=1501 && x<=3000 ){
books = ((100-70)/(3000-1500))*(3000-x) + 70;

}
if(x>=3001 && x<=5500 ){
books = ((70-25)/(5500-3000))*(5500-x) + 25;

}
if(x>=5501 && x<=10000 ){
books = ((25-15)/(10000-5500))*(10000-x) + 15;

}
if(x>=10001 && x<=50000){
books = ((15-5)/(50000-10000))*(50000-x) + 5;

}
if(x>=50001 && x<=100000 ){
books = ((5-1)/(100000-50000))*(100000-x) + 1;

}
if(x<1){
books = '-';

}

if(x>100000){
books="check";
}


if(books>0){

document.getElementById("change").style.display="none";
document.getElementById("books").innerHTML=Math.round(books);
document.getElementById("inner").style.display="block";
document.getElementById("result").style.display="block";
document.getElementById("greater").style.display="none";
document.getElementById("learn").style.display="none";
document.getElementById("discover").style.display="none";
}

if(books=="check"){
document.getElementById("change").style.display="none";
document.getElementById("inner").style.display="none";
document.getElementById("learn").style.display="none";
document.getElementById("discover").style.display="none";
document.getElementById("greater").style.display="block";
document.getElementById("result").style.display="block";
}

});

jQuery( "#result-press" ).click(function() {

document.getElementById("result").style.display="none";
document.getElementById("rank-input").value="";
document.getElementById("change").style.display="block";
document.getElementById("learn").style.display="block";
document.getElementById("discover").style.display="block";
document.getElementById("rank-input").focus();


});


});
</script>
<?php
}
add_filter('widget_text', 'do_shortcode');
add_shortcode('kindle-rank-calculator', 'display');

?>