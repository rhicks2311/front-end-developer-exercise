<?
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Give2Dance.org</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
  <style type="text/css">

html,body{
 background:#bbbfc2;
}

div.container {
    width: 980px;
    align: center;
    margin: auto;
    background:#ffffff;
    display: block;
}
.bground {
    position: relative;
    background: url(images/header.jpg);
    width: 980px;
    height: 276px;
    margin: auto;
  }
.tboxtext {
    position: absolute;
    top: 12px;
    right: 70px;
    font-family: "Open Sans", serif;
    font-weight: lighter;
    color: #fff;
    font-size: 32px;
  }
.tboxtext2 {
    position: absolute;
    bottom: 40px;
    right: 70px;
    padding: 4px;
    color: #ccc;
    font-family: "Open Sans", serif;
    font-weight: bold;
    font-size: 50px;
    line-height: 48px;
    text-align: right;
  }
#right_main ul#mainfeatures {
    border-color: #ccc;
    border-top-right-radius: 1em;
    border-bottom-right-radius: 1em;
    float: left;
    width: 25%;
    margin-right: 70px;
    margin-top: 60px;
    height:100%;
    overflow:hidden;
    margin-left:0px;
    position: relative;
    background: linear-gradient(90deg, #ebeced, #d1d5d6);
    
    text-align: center;
    list-style-type: none;
    padding:0;
}
#mainfeatures li{
    position: relative;
    display: block;
    border-bottom: 2px solid #fff;
    list-style: none;
    font-size: 18px;
    font-style: regular;
    font-family: "Source Sans Pro", sans-serif;
    width:auto;
    
    height: 60px;
    margin-left: -30px;
    margin-right: 10px;
    margin-top: 0px;
    line-height: 60px;
    background-position:right center;

}
#mainfeatures li#steps1 a{
    color: #9ba0a4;
    font-size: 18px;
    text-decoration: none;
    font-family: "Source Sans Pro", sans-serif;
    font-style: regular;
    display: block;
    background:url(images/icons_small_bs1_blue.png) no-repeat 0 0;
    background-position:right center;
}
#mainfeatures li#steps1 a:hover{
    font-size: 18px;
    font-family: "Source Sans Pro", sans-serif;
    font-style: semibold;
    color: #36abe1;
    background:url(images/icons_small_bs1.png) no-repeat 0 0;
    background-position:right center;
}
#mainfeatures li#steps2 a{
    color: #9ba0a4;
    font-size: 18px;
    text-decoration: none;
    font-family: "Source Sans Pro", sans-serif;
    font-style: regular;
    display: block;
    background:url(images/icons_small_bs2_blue.png) no-repeat 0 0;
    background-position:right center;
}
#mainfeatures li#steps2 a:hover{
    font-size: 18px;
    font-family: "Source Sans Pro", sans-serif;
    font-style: semibold;
    color: #36abe1;
    background:url(images/icons_small_bs2.png) no-repeat 0 0;
    background-position:right center;
}
#mainfeatures li#steps3 a{
    color: #9ba0a4;
    font-size: 18px;
    text-decoration: none;
    font-family: "Source Sans Pro", sans-serif;
    font-style: regular;
    display: block;
    background:url(images/icons_small_bs3_blue.png) no-repeat 0 0;
    background-position:right center;
}
#mainfeatures li#steps3 a:hover{
    font-size: 18px;
    font-family: "Source Sans Pro", sans-serif;
    font-style: semibold;
    color: #36abe1;
    background:url(images/icons_small_bs3.png) no-repeat 0 0;
    background-position:right center;
}
#mainfeatures li#steps4 a{
    color: #9ba0a4;
    font-size: 18px;
    text-decoration: none;
    font-family: "Source Sans Pro", sans-serif;
    font-style: regular;
    display: block;
    background:url(images/icons_small_bs4_blue.png) no-repeat 0 0;
    background-position:right center;
}
#mainfeatures li#steps4 a:hover{
    font-size: 18px;
    font-family: "Source Sans Pro", sans-serif;
    font-style: semibold;
    color: #36abe1;
    background:url(images/icons_small_bs4.png) no-repeat 0 0;
    background-position:right center;
}
#mainfeatures li#steps5 a{
    color: #9ba0a4;
    font-size: 18px;
    text-decoration: none;
    font-family: "Source Sans Pro", sans-serif;
    font-style: regular;
    display: block;
    background:url(images/icons_small_bs5_blue.png) no-repeat 0 0;
    background-position:right center;
}
#mainfeatures li#steps5 a:hover{
    font-size: 18px;
    font-family: "Source Sans Pro", sans-serif;
    font-style: semibold;
    color: #36abe1;
    background:url(images/icons_small_bs5.png) no-repeat 0 0;
    background-position:right center;
}
#mainfeatures li#steps6 a{
    color: #9ba0a4;
    font-size: 18px;
    text-decoration: none;
    font-family: "Source Sans Pro", sans-serif;
    font-style: regular;
    display: block;
    background:url(images/icons_small_bs6_blue.png) no-repeat 0 0;
    background-position:right center;
}
#mainfeatures li#steps6 a:hover{
    font-size: 18px;
    font-family: "Source Sans Pro", sans-serif;
    font-style: semibold;
    color: #36abe1;
    background:url(images/icons_small_bs6.png) no-repeat 0 0;
    background-position:right center;
}
#mainfeatures li#steps7 a{
    color: #9ba0a4;
    font-size: 18px;
    text-decoration: none;
    font-family: "Source Sans Pro", sans-serif;
    font-style: regular;
    display: block;
    background:url(images/icons_small_bs7_blue.png) no-repeat 0 0;
    background-position:right center;
}
#mainfeatures li#steps7 a:hover{
    font-size: 18px;
    font-family: "Source Sans Pro", sans-serif;
    font-style: semibold;
    color: #36abe1;
    background:url(images/icons_small_bs7.png) no-repeat 0 0;
    background-position:right center;
}
.shadow {
    float: left;
    background-position:right center;
    width: 15px;
    margin: auto;
    display: block;
    background: url(images/shadow_left.jpg) no-repeat 0 0;
}
article {
    margin-left: 0px;
    margin-right: 70px;
    margin-top: 60px;
    padding: 1em;
    overflow: hidden;
    background:#ffffff;
    height:500px;
    line-height: 18px;
    font-size: 13px;
    text-decoration: none;
    font-family: "Helvetica", sans-serif;
    font-style: regular;
    color: #65686f;
}
section {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
</style>
</head>
<body>
<div class="container">
<div class="bground">
<div class="tboxtext">
<p>Real Life, Love and Money with</p>
</div>
<p class="tboxtext2">AMERICA'S MOST<BR>TRUSTED GUY</p>
</div>
<div id="right_main">
<ul id="mainfeatures">                      
<li id="steps1"><a href="steps.php?id=1">Baby Step 1</a>
</li>
<li id="steps2"><a href="steps.php?id=2">Baby Step 2</a>
</li>
<li id="steps3"><a href="steps.php?id=3">Baby Step 3</a>
</li>
<li id="steps4"><a href="steps.php?id=4">Baby Step 4</a>
</li>
<li id="steps5"><a href="steps.php?id=5">Baby Step 5</a>
</li> 
<li id="steps6"><a href="steps.php?id=6">Baby Step 6</a>
</li> 
<li id="steps7"><a href="steps.php?id=7">Baby Step 7</a>
</li>           
</ul></div>
<article>
<?
If ($id=='1') {
?>
<img src="images/heading_bs1.png" alt="heading1">
<p>
An emergency fund is for those unexpected events in life that you can’t plan for: the loss of a job, an unexpected pregnancy, a faulty car transmission, and the list goes on and on. It’s not a matter of if these events will happen; it’s simply a matter of when they will happen.</p>

<p>This beginning emergency fund will keep life’s little Murphies from turning into new debt while you work off the old debt. If a real emergency happens, you can handle it with your emergency fund. No more borrowing. It’s time to break the cycle of debt!
</p>
<?
}
elseIf ($id=='2') {
?>
<img src="images/heading_bs2.png" alt="heading2">
<p>
List your debts, excluding the house, in order. The smallest balance should be your number one priority. Don’t worry about interest rates unless two debts have similar payoffs. If that’s the case, then list the higher interest rate debt first.</p>
<p>The point of the debt snowball is simply this: You need some quick wins in order to stay pumped up about getting out of debt! Paying off debt is not always about math. It’s about motivation. Personal finance is 20% head knowledge and 80% behavior. When you start knocking off the easier debts, you will see results and you will stay motivated to dump your debt.</p>
<?
}
elseIf ($id=='3') {
?>
<img src="images/heading_bs3.png" alt="heading3">
<p> Once you complete the first two baby steps, you will have built serious momentum. But don’t start throwing all your “extra” money into investments quite yet. It’s time to build your full emergency fund. Ask yourself, “What would it take for me to live for three to six months if I lost my income?” Your answer to that question is how much you should save.
</p>
<p>
Use this money for emergencies only: incidents that would have a major impact on you and your family. Keep these savings in a money market account. Remember, this stash of money is not an investment; it is insurance you’re paying to yourself, a buffer between you and life. </p>
<?
}
elseIf ($id=='4') {
?>
<img src="images/heading_bs4.png" alt="heading4">
<p> When you reach this step, you’ll have no payments—except the house—and a fully funded emergency fund. Now it’s time to get serious about building wealth.
</p>
<p>
Dave suggests investing 15% of your household income into Roth IRAs and pre-tax retirement plans. Don’t invest more than that because the extra money will help you complete the next two steps: college savings and paying off your home early. </p>
<?
}
elseIf ($id=='5') {
?>
<img src="images/heading_bs5.png" alt="heading5">
<p> By this point, you should have already started Baby Step 4—investing 15% of your income—before saving for college. Whether you are saving for you or your child to go to college, you need to start now.
</p>
<p>
In order to have enough money saved for college, you need to have a goal. Determine how much per month you should be saving at 12% interest in order to have enough for college. If you save at 12% and inflation is at 4%, then you are moving ahead of inflation at a net of 8% per year! </p>
<?
}
elseIf ($id=='6') {
?>
<img src="images/heading_bs6.png" alt="heading6">
<p> Now it’s time to begin chunking all of your extra money toward the mortgage. You are getting closer to realizing the dream of a life with no house payments.
</p>
<p>
As you attack this last debt, you will gain momentum much like you did back in the second step of the debt snowball. Remember, having absolutely no payments is totally within your reach! </p>
<?
}
elseIf ($id=='7') {
?>
<img src="images/heading_bs7.png" alt="heading7">
<p> It’s time to build wealth and give like never before. Leave an inheritance for future generations, and bless others now with your excess. It's really the only way to live!
</p>
<?
}
?>
</article>
</div>
</body>
</html>