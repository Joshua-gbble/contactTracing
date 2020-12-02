<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<style type="text/css">
	body{
  background: #1690A7;
  margin: 0;
  padding: 0;
  font-family: sans-serif;
	}
	.box{
		width: 1380px;
		margin: 70px auto 0;
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
	}
	.box .tile{
		position: relative;
		width: 250px;
		height: 300px;
		background: #ff0;
		margin: 10px; 
		box-sizing: border-box;
		display: inline-block;
		overflow: hidden;
	}
	.box .tile .img img{
        max-width: 100%;
        transition: transform 2s;

	}
    .box .tile:hover .img img{
        transform: scale(1.2);
    }
    .box .tile .info{
        position: absolute;
        top: 10px;
        left: 10px;
        bottom:10px;
        right: 10px;
        background: rgba(0,0,0,.8);
        transform: scaleY(0);
        transition: transform .5s;
    }
    .box .tile:hover .info{
        transform: scaleY(1);
    }
    .box .tile .info .content{
         position: absolute;
         top: 50%;
         transform: translateY(-50%);
         color: #fff;
    }
    .box .tile .info .content h2{
          margin: 
    }

	.btn {
  color: black;
  font-size: 22px;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  width: 50%;
  margin-bottom: 10px;
   }
.btn:hover {
  background-color: black;
  color: white;
   }
   h1{
   	font-family: arial;
   	font-size: 30px;
   	text-align: center;
   	color: white;
   }
	</style>
</head>
<body>
     <h1>MEET THE CREATORS</h1>
     <hr>
  <div class="box">  
    <div class="tile">
    	<div class="img"><img src="../Others/Picture/PICTURE_Joshua.jpg"></div>
    	<div class="info">
    		<div class="content">
    		<h2>Hello, my name is JAN JOSHUA KINOL</h2>
              <p> I study at University of Perpetual Help System Dalta. I am taking up BSIT and currently a 3rd year student right now.</p>
    	    </div>
    	</div>
    </div>
    <div class="tile">
    	<div class="img"><img src="../Others/Picture/PICTURE_Tray.jpg"></div>
    	<div class="info">
    		<div class="content">
    		<h2>Hello, my name is ART TRACER RECACHO</h2>
              <p> I study at University of Perpetual Help System Dalta. I am taking up BSIT and currently a 3rd year student right now.</p>
    	    </div>
    </div>
    </div>
    <div class="tile">
    	<div class="img"><img src="../Others/Picture/PICTURE_CK.jpg"></div>
    	<div class="info">
    		<div class="content">
    		<h2>Hello, my name is CRIEYHAN KHIER RECACHO</h2>
              <p> I study at University of Perpetual Help System Dalta. I am taking up BSIT and currently a 3rd year student right now.</p>
    	    </div>
    </div>
    </div>
    <div class="tile">
    	<div class="img"><img src="../Others/Picture/PICTURE_Miguel.jpg"></div>
    	<div class="info">
    		<div class="content">
    		<h2>Hello, my name is JUAN MIGUEL VALLESPIN</h2>
              <p> I study at University of Perpetual Help System Dalta. I am taking up BSIT and currently a 3rd year student right now.</p>
    	    </div>
    </div>
    </div>
    <div class="tile">
    	<div class="img"><img src="../Others/Picture/PICTURE_Jhedrick.jpg"></div>
    	<div class="info">
    		<div class="content">
    		<h2>Hello, my name is JOHN EDRICK VELASCO</h2>
              <p> I study at University of Perpetual Help System Dalta. I am taking up BSIT and currently a 3rd year student right now.</p>
    	    </div>
    </div>
  </div>
</div>
     <br><center><form action="../Admin Program/ADMIN_Home.php"><input class='btn' type='submit' value='Go Back'/></form>
</body>
</html>