<!DOCTYPE>  
<html>
<head>
  
  <style type="text/css">

   	* {
   	  margin: 0;
   	  padding: 0;
   	}
   	body {
   		background-color: #252422;
   		color: white;
   	}
   	header {
   		background-image: url(construction-background-lighter.jpg);
        background-size:contain;
        background-position: center;
        background-color:  #A6D609;
        text-align: center;
        height: 200px;
	}
   	.logo {
   		float: left;
   		position: relative;
   		left: 20px;
   	}
   	.discription {
   		position: relative;
   		top: 50px;
   		right: 80px;
   	}
   	.login {
   		float: right;
   		position: relative;
   		bottom: 50px;
   		right: 20px;  		
   	}
   	#login {
   		position: relative;
   		bottom: 50px;
   		left: 10px;
   		box-shadow: 0px 0px 60px 15px #606060FF;
   		border:none;
   	}
   	#avater {
   		box-shadow: 0px 0px 50px 10px #606060FF;
   	}
 
     #avater {
    	border-radius: 50px;
    	
    }

   	.

   	.logo {
   		float: left;
   		position: relative;
   		left: 20px;
   	}
   	.discription {
   		position: relative;
   		top: 50px;
   		right: 80px;
   	}
   	.login {
   		float: right;
   		position: relative;
   		bottom: 70px;
   		right: 20px;  		
   	}
   	#login {
   		position: relative;
   		bottom: 30px;
   		left: 10px;
   		box-shadow: 0px 0px 60px 15px #606060FF;
   		border:none;
   	}
   	#avater {
   		box-shadow: 0px 0px 50px 10px #606060FF;
   		border-radius: 50px;
   	}
 
    


    h1 {
        color: navy;
        font-family: fantasy;
        font-size: 60px;        		
        left: 400px; 
    }
    h3 {
        color: #FD6A02;
        font-family: cursive;
        font-weight: bold;
        font-size: 25px;
    }



	.head {
      overflow: hidden;
      background-color:	#800000;
      }

 
   .head a {
      float: left;
      display: block;
      color: black;
      text-align: center;
      padding: 10px 10px;
      text-decoration: none;
      font-size: 14px;
     }

 
    .head a:hover {
       background-color:#ffff00;
       color: black;
    }
	
   .head a.active {
      color:black;
	  float:right;
      }
	  
   
	
	  
	

	
	.footer {
    	background-color: black;
    	text-align: center;
    	height: 160px;
    }
    .address {
    	float: left;
    	position: relative;
    	top: 20px;
    	left: 20px;
    }
    .image {
    	position: relative;
    	top: 20px;
    	right: 60px;
    }
    .signin {
    	float: right;
    	position: relative;
        bottom: 10px;
        right: 10px;
    }
    .B2 {
          		float:right;
          		background-color:  #D6ED17FF;
          		color: black;
          		width: 60px;
          		height: 20px;
          		border-radius: 5px;
          		font-family: sans-serif;
          		font-weight: bold;
          		border:none;
          		margin-right: 10px;
          	}
    .B2:hover {
          		background-color: orange;
          		color: black;
    }

   
	input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}
  
  .col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}

body{   background: lightblue;
}


#pnd{
	width:25%;
}
#Acw{
	width:25%;
}
#Amf{
   width:25%;
}
</style>

<body>
<header>
<!---------------------------->
			<div class="logo">
				<img src="1620819920792_bright.png" alt="our logo" width="200" height="190">
			</div>
<!---------------------------->			
			<div class="discription">
				<H1>Bright Construction PLC</H1>
                    <H3>We are ready to help you to achive your gaols</H3>
			</div>
<!---------------------------->			
			<div class="login">
				<img src="download.png" alt="avater" width="70" height="70" id="avater">
				<input type="email" value placeholder="  Login" id="login">
		  </div>
<!---------------------------->					
		</header>

<div class="head">
     <a href="report.html">ongoing project preveiew</a>
     <a class="active" href="index.html">HOME</a>
  </div>

	 <div class="container">
  
  <div class="row">
    <div class="col-25">
      <label for="Branch of company">Branch of company</label>
    </div>
    <div class="col-75">
      <input type="text" id="Branch of company" name="Branch of company" maxlength="100" size="100" placeholder="Branch of company">
    </div>
  </div><br>

  
  <div class="row">
    <div class="col-25">
      <label for="SM">Site Manager</label>
    </div>
    <div class="col-75">
      <input type="text" id="Site Manager" name="Site Manager" placeholder="Site Manager..">
    </div>
  </div><br>

	
  <div class="row">
    <div class="col-25">
      <label for="Chief Manager">Chief Manager</label>
    </div>
    <div class="col-75">
      <input type="text" id="Chief engineer" name="Chief engineer" placeholder="Chief engineer">
    </div>

  </div><br>
   
  <div class="row">
    <div class="col-25">
      <label for="Total project">Total project</label>
    </div>
    <div class="col-75">
      <input type="text" id="Total project" name="Total project" placeholder="Total project">
    </div>
  </div><br>

   
  <div class="row">
    <div class="col-25">
      <label for="project Duration">project Duration</label>
    </div>
    <div class="col-75">
      <input type="text" id="project Duration" name="project Duration" placeholder="project Duration">
    </div>
  </div><br> 
   
  <!--table-->
<table width="100%" cellpadding="10">
<tr>
</tr>
<tr>
<td><h3>works</h3></td>
<td><input type="checkbox" id="workforce" name="workfroce" value="civil Enginner"></td>
<td><label for=""> civil Enginner</label><br></td>
<td><input type="checkbox" id="workforce" name="workforce" value="superviser"></td>
<td><label for="workforce">supervise</label><br></td>
<td>  </td>
<td><h3>Machinery usage</h3></td>
<td><input type="checkbox" id="workforce" name="workfroce" value="Excavators"></td>
<td><label for="workforce">Excavators</label><br></td>
<td><input type="checkbox" id="workforce" name="workforce" value="Tower cranes"></td>
<td><label for="workforce">Tower cranes</label><br></td>
</tr>
<tr>
<td> </td>
<td><input type="checkbox" id="workforce" name="workforce" value="Construction worker"></td>
<td><label for="workforce">Construction worker</label><br></td>
<td><input type="checkbox" id="workforce" name="workforce" value="painter"></td>
<td><label for="workforce">painter</label><br></td>
<td>    </td>
<td>    </td>
<td><input type="checkbox" id="workforce" name="workforce" value="Bullodzers"></td>
<td><label for="workforce">Bullodzers</label><br></td>
<td><input type="checkbox" id="workforce" name="workforce" value="pover"></td>
<td><label for="workforce">pover</label><br></td>
</tr>

<tr>
<td> </td>
<td><input type="checkbox" id="workforce" name="workforce" value="Arachitecture"></td>
<td><label for="workforce">Arachitecture </label><br></td>
<td><input type="checkbox" id="workforce" name="workforce" value="Electrician"></td>
<td><label for="workforce">Electrician</label><br></td>
<td> </td>  
<td> </td>
<td><input type="checkbox" id="workforce" name="workforce" value="Graders"></td>
<td><label for="workforce">Graders</label><br></td>
<td><input type="checkbox" id="workforce" name="workforce" value="pille Boring Equripment"></td>
<td><label for="workforce">pille Boring Equripment</label><br></td>

</tr>

<tr>
<td> </td>
<td><input type="checkbox" id="workforce" name="workfroce" value="Interintor Designer"></td>
<td><label for="workforce">Interintor Designer</label><br></td>
<td><input type="checkbox" id="workforce" name="workforce" value="Construction worker"></td>
<td><label for="workforce">Construction worker</label><br></td>
<td>  </td>
<td>  </td>
<td>  </td>
<td>  </td>
</tr>
</table><br>


<!--bottons and inputs-->
<label for="Boc">project End Data</label><br>
<input type="text" maxlength="4" size="4" id="pnd" name=""placeholder="project End Data" value=""><br><br>

<input type="text" maxlength="4" size="4" id="Acw" value="Active construction worker:  20" ><br><br>

<input type="text" maxlength="4" size="4" id="Amf" value="Active Machinery: footer: left; 03"><br><br>



<button>+ Add another Task</button><br><br>
<button id="f02">Feedback</button><br>
<a href="#" class="next">Next &raquo;</a>
 
<div class="footer">
    	<footer>
    	<div class="address">
    		<p><u><b>Office contact</b></u></p>
            No 304 B, 1<sup>st</sup> lane, Campus Road,<br>
           Rathnapitiya,<br>
           Boralasgamuwa.<br>
           071 1234567 / 011 9876542<br>
           info@ABC.lk
    	</div>
    	<div class="image">
    		<p id="text">Standerds</p>
            <img src="WhatsApp Image 2021-05-31 at 09.22.21 (1).jpeg" width="160" height="100" id="text-image">
    	</div>
    	<div class="signin">
    		<input type="email" value placeholder="E-mail" id="mail"><button class="B2">Sign in</button>
    	</div>
    </footer>
    </div>
 

   <script type="text/javascript">

        document.getElementById("f02").onclick= function() {

         /* var textEntered = ""
          textEntered = document.getElementById("mail").value;
          document.getElementById("u01").innerHTML = textEntered;*/

          alert ("Name change Sucessfull");
        }

        alert ("Welcome to ongoing page");

   </script>

</body>
</html>











