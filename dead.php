<?php

    echo "<div style=\"margin:10px; border: .2em solid #C3D9FF; width:960px\"><img src=http://oostop.com/metaboapp/_graphics/logo5.jpg></div>";

    $gluc_org = $_GET["gluc_org"];
    $gluc_env = $_GET["gluc_env"];
    $wall = $_GET["wall"];
    $tempr = $_GET["tempr"];

    if(!$gluc_org){
        
        $gluc_org = 50;
    }

    if(!$gluc_env){
        
        $gluc_env = 100;
    }

    if(!$wall){
        
        $wall = 10;
    }

    if(!$tempr){
        
        $tempr = 25;
    }
?>

<body style="background-color:#000000;color:#C3D9FF;font-family: Verdana;font-size:90%">

<div id="wrapper_header">

	<style type="text/css" media="all">

		#placeholderdiv {

			float:left;			
			color:#C3D9FF; 
			width: 0px;
			height: 0px;

                        margin-left:0px;
                        margin-right:0px;
		}
                
                #left_container{
                        
                        float: left;
                        width: 260px;
                        background: url(http://oostop.com/metaboapp/_graphics/back1.jpg);
                        margin: 10px;
                        border: .2em solid #C3D9FF;
                        padding:10px;
                }
                
	</style>	

</div><!-- /#wrapper_header -->

<div id="left_container">
   
    <form align="left" name="myform" action="http://oostop.com/metaboapp/action.php" method="POST">
        <h3>organism</h3>
       	Glucose Processing: <br>
        <input id="gluc_org" name="gluc_org" value="<?php echo $gluc_org ?>" onfocus="this.value=''"> nanogrm/sec<br><br>
        
        Cell Wall Width: <br>
        <input id="wall" name="wall" value="<?php echo $wall ?>" onfocus="this.value=''"> nanometres<br><br>
        <input type="submit" value="adapt">
    
    </form>

    <br>
     
    <form align="left" name="myform1" action="http://oostop.com/metaboapp/action.php" method="POST">
        <h3>environment</h3>
        Glucose Concentration: <br>
        <input id="gluc_env" name="gluc_env" value="<?php echo $gluc_env ?>" onfocus="this.value=''"> grams/Liter<br><br>

        Temperature: <br>
        <input id="tempr" name="tempr" value="<?php echo $tempr ?>" onfocus="this.value=''"> °C<br><br>
        <input type="submit" value="climate change">
    
    </form>

    <br>

    <h3>ethanol produced</h3>
    0 microLiters

    <br><br>

    <h3 style="color:#00FF00">top scores</h3>
    <div style="color:#00FF00">60 microLiters - TheGerminator<br>
    55 microLiters - BrocColi <br>
    55 microLiters - BioFuelFiend<br><br></div>

</div>

<layer id="placeholderlayer"></layer><div id="placeholderdiv"></div>

</body>

<script language="JavaScript1.2">

var howOften = 1; //number often in seconds to rotate
var current = 0; //start the counter at 0
var ns6 = document.getElementById&&!document.all; //detect netscape 6

// place your images, text, etc in the array elements here
var items = new Array();
    items[0]="<img src='http://oneonlinestop.com/metaboapp/_graphics/ecoli_dead1.jpg' height='800' width='800'>"; 
    items[1]="<img src='http://oneonlinestop.com/metaboapp/_graphics/ecoli_dead2.jpg' height='800' width='800'>"; 
    items[2]="<img src='http://oneonlinestop.com/metaboapp/_graphics/ecoli_dead3.jpg' height='800' width='800'>"; 
    items[3]="<img src='http://oneonlinestop.com/metaboapp/_graphics/ecoli_dead3.jpg' height='800' width='800'>"; 
    items[4]="<img src='http://oneonlinestop.com/metaboapp/_graphics/ecoli_dead3.jpg' height='800' width='800'>"; 

function rotater() {



    document.getElementById("placeholder").innerHTML = items[current];
    current = (current==items.length-1) ? 0 : current + 1;
    setTimeout("rotater()",howOften*1000);

    if(current == 4){
	alert("Your E. coli has died. Start again?");
	window.location = "http://oostop.com/metaboapp"
    }
}

function rotater() {
     
    if(document.layers) {
        document.placeholderlayer.document.write(items[current]);
        document.placeholderlayer.document.close();
    }
    if(ns6)document.getElementById("placeholderdiv").innerHTML=items[current]
        if(document.all)
            placeholderdiv.innerHTML=items[current];

    current = (current==items.length-1) ? 0 : current + 1; //increment or reset
    setTimeout("rotater()",howOften*1000);

    if(current == 4){
	alert("Your E. coli has died. Start again?");
	window.location = "http://oostop.com/metaboapp"
    }
}



window.onload=rotater;

    


//-->
</script>
