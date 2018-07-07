<html>
	<head>
		<meta name="google" content="notranslate">
 		<meta http-equiv="X-UA-Compatible" content="IE=edge;">
 		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="ward.js"></script>
		<script type="text/javascript" src="js/func.js"></script>
		<link rel="stylesheet" href="css/style.css">

		<script language="javascript">
			// function func(value){
			// 	var arr1 = ["ADARSH NAGAR","SHAKUR BASTI","TRI NAGAR","MODEL TOWN","BALLIMARAN","WAZIRPUR","SADAR BAZAR","CHANDNI CHOWK","MATIA MAHAL","SHALIMAR BAGH","KAROL BAGH","PATEL NAGAR","DELHI CANTT.","RAJINDER NAGAR","R K PURAM","NEW DELHI","KASTURBA NAGAR","MALVIYA NAGAR","GREATER KAILASH","MOTI NAGAR","JANGPURA","TRILOKPURI","KONDLI","PATPARGANJ","LAXMI NAGAR","VISHWAS NAGAR","KRISHNA NAGAR","GANDHI NAGAR","SHAHDARA","OKHLA","BURARI","TIMARPUR","GHONDA","GOKALPUR","KARAWAL Ngr","BABARPUR","SEEMA PURI","ROHTAS NAGAR","SEELAMPUR","MUSTAFABAD","MADIPUR","RAJOURI GARDEN","HARI NAGAR","TILAK NAGAR","JANAKPURI","VIKASPURI","UTTAM NAGAR","DWARKA","MATIALA","NAJAFGARH","NARELA","BADLI","RITHALA","MUNDKA","ROHINI","KIRARI","BAWANA","NANGLOI JAT","MANGOL PURI","SULTANPUR MAJRA","BIJWASAN","PALAM","MEHRAULI","CHHATARPUR","AMBEDKAR Ngr","DEOLI","SANGAM VIHAR","KALKAJI","TUGHLAKABAD","BADARPUR"]
				
			// 	var arr2 = ["SARAI PIPAL THALA","ADARSH NAGAR","DHIRPUR","SARASWATI VIHAR","RANI BAGH","PASCHIM VIHAR","SHAKUR PUR","RAM PURA","KOHAT ENCLAVE","TRI NAGAR","SANGAM PARK","MODEL TOWN","KAMLA NAGAR","QURAISH NAGAR","BALLIMARAN","RAM NAGAR","WAZIR PUR","NIMRI COLONY","SAWAN PARK","ASHOK VIHAR","SHASTRI NAGAR","SADAR BAZAR","KISHAN GANJ","ANAND PARBAT","CIVIL LINES","CHANDNI CHOWK","JAMA MASJID","AJMERI GATE","BAZAR SITA RAM","DELHI GATE","HAIDERPUR","SHALIMAR BAGH -NORTH","SHALIMAR BAGH -SOUTH","PITAMPURA","KAROL BAGH","PAHAR GANJ","DEV NAGAR","EAST PATEL NAGAR","RANJIT NAGAR","BALJIT NAGAR","WEST PATEL NAGAR","","","RAJINDER NAGAR","INDER PURI","NARAINA","VASANT VIHAR","R.K. PURAM","MUNIRKA","","","KASTURBA NAGAR","ANDREWS GANJ","KOTLA MUBARAKPUR","SAFDARJUNG ENCLAVE","HAUZ KHAS","MALVIYA NAGAR","SAKET","GREATER KAILASH","CHITARANJAN PARK","KARAMPURA","MOTI NAGAR","RAMESH NAGAR","DARYAGANJ","SIDHARTH NAGAR","LAJPAT NAGAR","TRILOKPURI-EAST","MAYUR VIHAR PHASE-I","TRILOKPURI-WEST","NEW ASHOK NAGAR","KALYAN PURI","DALLUPURA","GHAROLI","KONDLI","VINOD NAGAR","MANDAWALI","MAYUR VIHAR PHASE-II","PATPAR GANJ","KISHAN KUNJ","LAKSHMI NAGAR","SHAKARPUR","PANDAV NAGAR","VISHWAS NAGAR","ANAND VIHAR","I.P. EXTENSION","PREET VIHAR","KRISHNA NAGAR","ANARKALI","GHONDLI","GEETA COLONY","SHASTRI PARK","KANTI NAGAR","RAGHUBARPURA","DILSHAD COLONY","VIVEK VIHAR","JHILMIL","SHAHDARA","ABUL FAZAL ENCLAVE","ZAKIR NAGAR","SARITA VIHAR","MADANPUR KHADAR EAST","MADANPUR KHADAR WEST","MUKUNDPUR","KADIPUR","BURARI","JHARODA","KAMALPUR","SANT NAGAR","TIMARPUR","MALKA GANJ","G.T.B. NAGAR","MUKHERJEE NAGAR","BHAJAN PURA","YAMUNA VIHAR","GHONDA","BRAHAM PURI","JOHARIPUR","GOKAL PURI","SABOLI","HARSH VIHAR","KHAJOORI KHAS","SRI RAM COLONY","SONIA VIHAR","KARAWAL NAGAR-W","SADATPUR","SUBHASH MOHALLA","KARDAM PURI","BABARPUR","JANTA COLONY","SUNDER NAGRI","NEW SEEMAPURI","NAND NAGRI","DILSHAD GARDEN","ASHOK NAGAR","RAM NAGAR","ROHTASH NAGAR","WELCOME COLONY","MAUJPUR","CHAUHAN BANGER","SEELAMPUR","GAUTAM PURI","NEHRU VIHAR","SHIV VIHAR","KARAWAL NAGAR-E","MUSTAFABAD","MADIPUR","PUNJABI BAGH","RAJA GARDEN","RAGHUBIR NAGAR","TAGORE GARDEN","RAJOURI GARDEN","VISHNU GARDEN","KHYALA","SUBHASH NAGAR","HARI NAGAR-A","PRATAP NAGAR","TILAK NAGAR","KESHOPUR","MAHAVIR NAGAR","SITAPURI","JANAKPURI WEST","JANAKPURI SOUTH","MILAP NAGAR","HASTSAL","VIKAS NAGAR","BAPRAULA","RANHOLA","VIKASPURI","SAINIK ENCLAVE","MOHAN GARDEN-SOUTH","MOHAN GARDEN-NORTH","NAWADA","UTTAM NAGAR","BINDAPUR","MANGLAPURI","DABRI","SAGARPUR-WEST","SAGARPUR-EAST","MATIALA","NANGLI SAKRAWATI","KAKRAULA","DWARKA - A","DWARKA-B","CHHAWLA","GHUMAN HERA","GOPAL NAGAR","DICHAON KALAN","NAJAFGARH","ROSHANPURA","ISAPUR","BIKANER","NARELA","BAKHTAWARPUR","ALIPUR","HOLAMBI KHURD","SARUP NAGAR","SWAMI SHARDANAND COL","JAHANGIR PURI","BHALSWA","SAMAYPUR BADLI","RITHALA","ROHINI-A","ROHINI-B","VIJAY VIHAR","BIUDH VIHAR","NILOTHI","MUNDKA","KANJHAWALA","RANI KHERA","NANGLOI","ROHINI-F","ROHINI-G","ROHINI-H","ROHINI-I","AMAN VIHAR","PREM NAGAR","NITHARI","KIRARI SULEMAN NAGAR","MUBARAK PUR DABAS","BEGUMPUR","NANGAL THAKRAN","BAWANA","POOTH KHURD","ROHINI-C","ROHINI-D","NANGLOI JAT","PEERA GARHI","NIHAL VIHAR","LAKSHMI PARK","MANGOLPURI-A","ROHINI-E","MANGOLPURI-B","MANGOLPURI-C","SULTAN PURI -A","MANGOL PURI - D","SULTAN PURI-C","SULTAN PURI -B","BIJWASAN","RAJ NAGAR","DWARKA-C","KAPASHERA","MAHIPALPUR","MADHU VIHAR","MAHAVIR ENCLAVE","SADH NAGAR","PALAM","LADO SARAI","MEHRAULI","VASANT KUNJ","CHHATARPUR","SAID-UL-AJAIB","BHATI","AYA NAGAR","MADANGIR","PUSHP VIHAR","KHANPUR","DAKSHIN PURI","TIGRI","DEOLI","SANGAM VIHAR-A","SANGAM VIHAR-B","SANGAM VIHAR-C","SANGAM VIHAR-D","TUGHLAKABAD EXT","SANGAM VIHAR-E","SRI NIWAS PURI","KALKAJI","GOVIND PURI","HARKESH NAGAR","TUGHLAKABAD","PUL PEHLADPUR","BADARPUR","MOLARBAND","HARI NAGAR-B","JAITPUR","OM VIHAR"];



			// 	arr3 = [0,3,6,10,13,16,20,24,27,30,34,37,41,43,46,49,51,54,57,60,63,66,70,74,78,82,86,90,93,97,102,108,112,116,120,125,129,133,137,141,145,149,153,156,159,163,169,174,178,185,190,195,200,205,210,214,219,225,229,233,237,242,246,249,253,256,261,265,268,271,276]

			// 	var opt_1 = document.getElementById("vidhansabha").value;

			// 	opt_1 = value;
			// 	var opt_con = opt_1.toUpperCase()
				
			// 	// alert(arr1[0])
			// 	// alert(opt_con)
			// 	// alert(opt_con.equals(arr1[j]))

			// 	// var select = document.getElementById("wname");
			// 	// var length = select.options.length;
			// 	// for (i = 0; i < length; i++) {
			// 	//   select.options[i] = null;
			// 	// }

			// 	// k = arr1.length
			// 	// alert(arr1[k-6])

			// 	document.getElementById('wname').innerHTML = "<option>Choose a Ward</option>";

				
			// 	for(var j=0;j<arr1.length;j++)
			// 		{
			// 			if(opt_1.localeCompare(arr1[j]) == 0)
			// 				{	

			// 					for(var i=arr3[j], k = 0 ;i<arr3[j+1];i++,k++)
			// 						{	
										
			// 								var select = document.getElementById("wname");
			// 								var opt = arr2[i];
			// 							    var el = document.createElement("option");
			// 							    el.textContent = opt;
			// 							    el.value = opt;
			// 							    select.appendChild(el);
				
			// 						}


			// 				}


			// 		}	
			// }
		</script>	
	</head>
	<body onload="func()" id="body_index">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-6 col-lg=6 col-xs-3">


					<img src="img/test.jpg " class="img-responsive" height="200" width="200">



					<form action="submit.php" method="POST">
						<select  class="dropdown" name="vidhansabha" id="vidhansabha" required onchange="func(this.value)" >
						    <option value="">Choose a Vidhansabha</option>
						</select>
						<br>
						<script language="javascript">
						var select = document.getElementById("vidhansabha");
						var arr1 = ["ADARSH NAGAR","SHAKUR BASTI","TRI NAGAR","MODEL TOWN","BALLIMARAN","WAZIRPUR","SADAR BAZAR","CHANDNI CHOWK","MATIA MAHAL","SHALIMAR BAGH","KAROL BAGH","PATEL NAGAR","DELHI CANTT.","RAJINDER NAGAR","R K PURAM","NEW DELHI","KASTURBA NAGAR","MALVIYA NAGAR","GREATER KAILASH","MOTI NAGAR","JANGPURA","TRILOKPURI","KONDLI","PATPARGANJ","LAXMI NAGAR","VISHWAS NAGAR","KRISHNA NAGAR","GANDHI NAGAR","SHAHDARA","OKHLA","BURARI","TIMARPUR","GHONDA","GOKALPUR","KARAWAL Ngr","BABARPUR","SEEMA PURI","ROHTAS NAGAR","SEELAMPUR","MUSTAFABAD","MADIPUR","RAJOURI GARDEN","HARI NAGAR","TILAK NAGAR","JANAKPURI","VIKASPURI","UTTAM NAGAR","DWARKA","MATIALA","NAJAFGARH","NARELA","BADLI","RITHALA","MUNDKA","ROHINI","KIRARI","BAWANA","NANGLOI JAT","MANGOL PURI","SULTANPUR MAJRA","BIJWASAN","PALAM","MEHRAULI","CHHATARPUR","AMBEDKAR Ngr","DEOLI","SANGAM VIHAR","KALKAJI","TUGHLAKABAD","BADARPUR"]
						var key_arr = ["a2V5MA==","a2V5MQ==","a2V5Mg==","a2V5Mw==","a2V5NA==","a2V5NQ==","a2V5Ng==","a2V5Nw==","a2V5OA==","a2V5OQ==","a2V5MTA=","a2V5MTE=","a2V5MTI=","a2V5MTM=","a2V5MTQ="];
						var key = prompt("Enter key:");
						var m,n;
						if(key==key_arr[0]){
							m=0;
							n=m+5;
						}
						else if(key==key_arr[1]){
							m=5;
							n=m+5;
						}
						else if(key==key_arr[2]){
							m=10;
							n=m+5;
						}
						else if(key==key_arr[3]){
							m=15;
							n=m+5;
						}
						else if(key==key_arr[4]){
							m=20;
							n=m+5;
						}
						else if(key==key_arr[5]){
							m=25;
							n=m+5;
						}
						else if(key==key_arr[6]){
							m=30;
							n=m+5;
						}
						else if(key==key_arr[7]){
							m=35;
							n=m+5;
						}
						else if(key==key_arr[8]){
							m=40;
							n=m+5;
						}
						else if(key==key_arr[9]){
							m=45;
							n=m+5;
						}
						else if(key==key_arr[10]){
							m=50;
							n=m+5;
						}
						else if(key==key_arr[11]){
							m=55;
							n=m+5;
						}
						else if(key==key_arr[12]){
							m=60;
							n=m+5;
						}
						else if(key==key_arr[13]){
							m=65;
							n=m+5;
						}
						else{
							alert("Invalid key!");
						}

						for(var i = m; i < n; i++) {
						    var optv = arr1[i];
						    var el = document.createElement("option");
						    el.textContent = optv;
						    el.value = optv;
						    select.appendChild(el);
						}

						function clear(){
							document.getElementById("n1").innerHTML="";
							document.getElementById("n2").innerHTML="";
						}
						</script>	
						<br>
						<select class="dropdown" name="wname" id="wname" required onchange="func3(this.value)">
							<option id="wn" value="">Choose a Ward</option>
						</select>
							<br>
						<select class="dropdown" name="pollstation" id="pollstation">
							<option>Choose a Pooling Station</option>
							
						</select>
						<p>
								<br>
						Enter today's date:</p>
						<input type="date" name="n1" id="n1" placeholder="Total Number of households covered" required/>
						<p>
						<br>Enter the total number of Signs:</p>
						<input type="integer" name="n2" id="n2" placeholder="Total Number of Signs" required/>
						<p></p>
						<input type="submit" name="sub" onclick="clear()"/>

				</form>
				<form method="POST" action="admin.php">
					<input type="submit" value="admin section">
				</form>
				</div>
			</div>	
		</div>	
	</body>
</html>