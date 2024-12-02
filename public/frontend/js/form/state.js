function select_state_func()
{
		var select = document.getElementById("stateid");
        var typevalue = select.options[select.selectedIndex].value;
		
		if (typevalue == 1)
		{
			document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Port Blair' >Port Blair</option></select>";
		}
		else if (typevalue == 2)
		{
				document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Adoni'>Adoni</option>\
				<option value='Amaravati'>Amaravati</option>\
				<option value='Anantapur'>Anantapur</option>\
				<option value='Bhimavaram'>Bhimavaram</option>\
				<option value='Chittoor'>Chittoor</option>\
				<option value='Chilakaluripet'>Chilakaluripet</option>\
				<option value='Dharmavaram'>Dharmavaram</option>\
				<option value='Eluru'>Eluru</option>\
				<option value='Gudivada'>Gudivada</option>\
				<option value='Guntur'>Guntur</option>\
				<option value='Guntakal'>Guntakal</option>\
				<option value='Hindupur'>Hindupur</option>\
				<option value='Kadapa'>Kadapa</option>\
				<option value='Kakinada'>Kakinada</option>\
				<option value='Kurnool'>Kurnool</option>\
				<option value='Machilipatnam'>Machilipatnam</option>\
				<option value='Madanapalle'>Madanapalle</option>\
				<option value='Narasaraopet'>Narasaraopet</option>\
				<option value='Nellore'>Nellore</option>\
				<option value='Nandyal'>Nandyal</option>\
				<option value='Ongole'>Ongole</option>\
				<option value='Proddatur'>Proddatur</option>\
				<option value='Rajahmundry'>Rajahmundry</option>\
				<option value='Srikakulam'>Srikakulam</option>\
				<option value='Tadipatri'>Tadipatri</option>\
				<option value='Tadepalligudem'>Tadepalligudem</option>\
				<option value='Tenali'>Tenali</option>\
				<option value='Tirupati'>Tirupati</option>\
				<option value='Visakhapatnam'>Visakhapatnam</option>\
				<option value='Vijayawada'>Vijayawada</option></select>";
			
			}
		else if (typevalue == 3)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Itanagar' >Itanagar</option></select>";
		}
		else if (typevalue == 4)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Barpeta' >Barpeta</option>\
<option value='Bongaigaon' >Bongaigaon</option>\
<option value='Dhuburi' >Dhuburi</option>\
<option value='Dibrugarh' >Dibrugarh</option>\
<option value='Diphu' >Diphu</option>\
<option value='Guwahati' >Guwahati</option>\
<option value='Jorhat' >Jorhat</option>\
<option value='Karimganj' >Karimganj</option>\
<option value='Lakhimpur' >Lakhimpur</option>\
<option value='Lanka' >Lanka</option>\
<option value='Nagaon' >Nagaon</option>\
<option value='Sibsagar' >Sibsagar</option>\
<option value='Silchar' >Silchar</option>\
<option value='Tezpur' >Tezpur</option>\
<option value='Tinsukia' >Tinsukia</option></select>";
		}
else if (typevalue == 5)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Araria' >Araria</option>\
<option value='Arrah' >Arrah</option>\
<option value='Aurangabad' >Aurangabad</option>\
<option value='Bagaha' >Bagaha</option>\
<option value='Begusarai' >Begusarai</option>\
<option value='Bettiah' >Bettiah</option>\
<option value='Bhabua' >Bhabua</option>\
<option value='Bhagalpur' >Bhagalpur</option>\
<option value='Bihar' >Bihar</option>\
<option value='Buxar' >Buxar</option>\
<option value='Chhapra' >Chhapra</option>\
<option value='Darbhanga' >Darbhanga</option>\
<option value='Dehri' >Dehri</option>\
<option value='DighaMainpura' >DighaMainpura</option>\
<option value='Dinapur' >Dinapur</option>\
<option value='Dumraon' >Dumraon</option>\
<option value='Gaya' >Gaya</option>\
<option value='Gopalganj' >Gopalganj</option>\
<option value='Goura' >Goura</option>\
<option value='Hajipur' >Hajipur</option>\
<option value='Jahanabad' >Jahanabad</option>\
<option value='Jamalpur' >Jamalpur</option>\
<option value='Jamui' >Jamui</option>\
<option value='Katihar' >Katihar</option>\
<option value='Khagaria' >Khagaria</option>\
<option value='Khagaul' >Khagaul</option>\
<option value='Kishanganj' >Kishanganj</option>\
<option value='Lakhisarai' >Lakhisarai</option>\
<option value='Madhipura' >Madhipura</option>\
<option value='Madhubani' >Madhubani</option>\
<option value='Masaurhi' >Masaurhi</option>\
<option value='Mokama' >Mokama</option>\
<option value='Motihari' >Motihari</option>\
<option value='Munger' >Munger</option>\
<option value='Muzaffarpur' >Muzaffarpur</option>\
<option value='Nawada' >Nawada</option>\
<option value='Patna' >Patna</option>\
<option value='Phulwari' >Phulwari</option>\
<option value='Purnia' >Purnia</option>\
<option value='Raxaul' >Raxaul</option>\
<option value='Saharsa' >Saharsa</option>\
<option value='Samastipur' >Samastipur</option>\
<option value='Sasaram' >Sasaram</option>\
<option value='Sitamarhi' >Sitamarhi</option>\
<option value='Siwan' >Siwan</option>\
<option value='Supaul' >Supaul</option></select>";
		}
		else if (typevalue == 6)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Chandigarh' >Chandigarh</option></select>";
		}
			else if (typevalue == 7)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Ambikapur' >Ambikapur</option>\
<option value='Bhilai' >Bhilai</option>\
<option value='Bilaspur' >Bilaspur</option>\
<option value='Charoda' >Charoda</option>\
<option value='Chirmiri' >Chirmiri</option>\
<option value='Dhamtari' >Dhamtari</option>\
<option value='Durg' >Durg</option>\
<option value='Jagdalpur' >Jagdalpur</option>\
<option value='Korba' >Korba</option>\
<option value='Raigarh' >Raigarh</option>\
<option value='Raipur' >Raipur</option>\
<option value='Rajnandgaon' >Rajnandgaon</option></select>";
		}
else if (typevalue == 8)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Delhi' >Delhi</option>\
<option value='Faridabad' >Faridabad</option>\
<option value='Ghazibad' >Ghazibad</option>\
<option value='Gurgaon' >Gurgaon</option>\
<option value='New Delhi' >New Delhi</option>\
<option value='Noida' >Noida</option></select>";
		}
		else if (typevalue == 9)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Madgaon' >Madgaon</option>\
<option value='Mormugao' >Mormugao</option>\
<option value='Panaji' >Panaji</option></select>";
		}
		else if (typevalue == 10)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Ahmedabad' >Ahmedabad</option>\
<option value='Amreli' >Amreli</option>\
<option value='Anand' >Anand</option>\
<option value='Anjar' >Anjar</option>\
<option value='Bardoli' >Bardoli</option>\
<option value='Bharuch' >Bharuch</option>\
<option value='Bhavnagar' >Bhavnagar</option>\
<option value='Bhuj' >Bhuj</option>\
<option value='Borsad' >Borsad</option>\
<option value='Botad' >Botad</option>\
<option value='Chandkheda' >Chandkheda</option>\
<option value='Chandlodiya' >Chandlodiya</option>\
<option value='Dabhoi' >Dabhoi</option>\
<option value='Dahod' >Dahod</option>\
<option value='Dholka' >Dholka</option>\
<option value='Dhoraji' >Dhoraji</option>\
<option value='Dhrangadhra' >Dhrangadhra</option>\
<option value='Disa' >Disa</option>\
<option value='Gandhidham' >Gandhidham</option>\
<option value='Gandhinagar' >Gandhinagar</option>\
<option value='Ghatlodiya' >Ghatlodiya</option>\
<option value='Godhra' >Godhra</option>\
<option value='Gondal' >Gondal</option>\
<option value='Himatnagar' >Himatnagar</option>\
<option value='Jamnagar' >Jamnagar</option>\
<option value='Jamnagar' >Jamnagar</option>\
<option value='Jetpur' >Jetpur</option>\
<option value='Junagadh' >Junagadh</option>\
<option value='Kalol' >Kalol</option>\
<option value='Keshod' >Keshod</option>\
<option value='Khambhat' >Khambhat</option>\
<option value='Kundla' >Kundla</option>\
<option value='Mahuva' >Mahuva</option>\
<option value='Mangrol' >Mangrol</option>\
<option value='Modasa' >Modasa</option>\
<option value='Morvi' >Morvi</option>\
<option value='Nadiad' >Nadiad</option>\
<option value='Navagam Ghed' >Navagam Ghed</option>\
<option value='Navsari' >Navsari</option>\
<option value='Palitana' >Palitana</option>\
<option value='Patan' >Patan</option>\
<option value='Porbandar' >Porbandar</option>\
<option value='Puna' >Puna</option>\
<option value='Rajkot' >Rajkot</option>\
<option value='Ramod' >Ramod</option>\
<option value='Ranip' >Ranip</option>\
<option value='Siddhapur' >Siddhapur</option>\
<option value='Sihor' >Sihor</option>\
<option value='Surat' >Surat</option>\
<option value='Surendranagar' >Surendranagar</option>\
<option value='Thaltej' >Thaltej</option>\
<option value='Una' >Una</option>\
<option value='Unjha' >Unjha</option>\
<option value='Upleta' >Upleta</option>\
<option value='Vadodara' >Vadodara</option>\
<option value='Valsad' >Valsad</option>\
<option value='Vapi' >Vapi</option>\
<option value='Vastral' >Vastral</option>\
<option value='Vejalpur' >Vejalpur</option>\
<option value='Veraval' >Veraval</option>\
<option value='Vijalpor' >Vijalpor</option>\
<option value='Visnagar' >Visnagar</option>\
<option value='Wadhwan' >Wadhwan</option></select>";
		}
		else if (typevalue == 11)
		{
			document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Ambala' >Ambala</option>\
			<option value='Ambala Cantonment' >Ambala Cantonment</option>\
			<option value='Ambala Sadar' >Ambala Sadar</option>\
			<option value='Bahadurgarh' >Bahadurgarh</option>\
			<option value='Bhiwani' >Bhiwani</option>\
			<option value='Charkhi Dadri' >Charkhi Dadri</option>\
			<option value='Dabwali' >Dabwali</option>\
			<option value='Faridabad' >Faridabad</option>\
			<option value='Gohana' >Gohana</option>\
			<option value='Hisar' >Hisar</option>\
			<option value='Jagadhri' >Jagadhri</option>\
			<option value='Jind' >Jind</option>\
			<option value='Kaithal' >Kaithal</option>\
			<option value='Karnal' >Karnal</option>\
			<option value='Narnaul' >Narnaul</option>\
			<option value='Narwana' >Narwana</option>\
			<option value='Palwal' >Palwal</option>\
			<option value='Panchkula' >Panchkula</option>\
			<option value='Panipat' >Panipat</option>\
			<option value='Rewari' >Rewari</option>\
			<option value='Rohtak' >Rohtak</option>\
			<option value='Sirsa' >Sirsa</option>\
			<option value='Sonipat' >Sonipat</option>\
			<option value='Thanesar' >Thanesar</option>\
			<option value='Tohana' >Tohana</option>\
			<option value='Yamunanagar' >Yamunanagar</option></select>";
		}
		else if (typevalue == 12)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Shimla' >Shimla</option></select>";
		}
		else if (typevalue == 13)
		{
			document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Anantnag' >Anantnag</option>\
			<option value='Baramula' >Baramula</option>\
			<option value='Bari Brahmana' >Bari Brahmana</option>\
			<option value='Jammu' >Jammu</option>\
			<option value='Kathua' >Kathua</option>\
			<option value='Sopur' >Sopur</option>\
			<option value='Srinagar' >Srinagar</option>\
			<option value='Udhampur' >Udhampur</option></select>";
		}
		else if (typevalue == 14)
		{
				document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Adityapur' >Adityapur</option>\
				<option value='Bagbahra' >Bagbahra</option>\
				<option value='Bhuli' >Bhuli</option>\
				<option value='Bokaro' >Bokaro</option>\
				<option value='Chaibasa' >Chaibasa</option>\
				<option value='Chas' >Chas</option>\
				<option value='Daltenganj' >Daltenganj</option>\
				<option value='Devghar' >Devghar</option>\
				<option value='Dhanbad' >Dhanbad</option>\
				<option value='Hazaribag' >Hazaribag</option>\
				<option value='Jamshedpur' >Jamshedpur</option>\
				<option value='Jharia' >Jharia</option>\
				<option value='Jhumri Tilaiya' >Jhumri Tilaiya</option>\
				<option value='Jorapokhar' >Jorapokhar</option>\
				<option value='Katras' >Katras</option>\
				<option value='Lohardaga' >Lohardaga</option>\
				<option value='Mango' >Mango</option>\
				<option value='Phusro' >Phusro</option>\
				<option value='Ramgarh' >Ramgarh</option>\
				<option value='Ranchi' >Ranchi</option>\
				<option value='Sahibganj' >Sahibganj</option>\
				<option value='Saunda' >Saunda</option>\
				<option value='Sindari' >Sindari</option></select>";
		}
		else if (typevalue == 15)
		{
				document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Bagalkot' >Bagalkot</option>\
			<option value='Bangalore' >Bangalore</option>\
			<option value='Basavakalyan' >Basavakalyan</option>\
			<option value='Belgaum' >Belgaum</option>\
			<option value='Bellary' >Bellary</option>\
			<option value='Bhadravati' >Bhadravati</option>\
			<option value='Bidar' >Bidar</option>\
			<option value='Bijapur' >Bijapur</option>\
			<option value='Bommanahalli' >Bommanahalli</option>\
			<option value='Byatarayanapura' >Byatarayanapura</option>\
			<option value='Challakere' >Challakere</option>\
			<option value='Chamrajnagar' >Chamrajnagar</option>\
			<option value='Channapatna' >Channapatna</option>\
			<option value='Chik Ballapur' >Chik Ballapur</option>\
			<option value='Chikmagalur' >Chikmagalur</option>\
			<option value='Chintamani' >Chintamani</option>\
			<option value='Chitradurga' >Chitradurga</option>\
			<option value='Dasarahalli' >Dasarahalli</option>\
			<option value='Davanagere' >Davanagere</option>\
			<option value='Dod Ballapur' >Dod Ballapur</option>\
			<option value='Gadag' >Gadag</option>\
			<option value='Gangawati' >Gangawati</option>\
			<option value='Gokak' >Gokak</option>\
			<option value='Gulbarga' >Gulbarga</option>\
			<option value='Harihar' >Harihar</option>\
			<option value='Hassan' >Hassan</option>\
			<option value='Haveri' >Haveri</option>\
			<option value='Hiriyur' >Hiriyur</option>\
			<option value='Hosakote' >Hosakote</option>\
			<option value='Hospet' >Hospet</option>\
			<option value='Hubli' >Hubli</option>\
			<option value='Ilkal' >Ilkal</option>\
			<option value='Jamkhandi' >Jamkhandi</option>\
			<option value='Kanakapura' >Kanakapura</option>\
			<option value='Karwar' >Karwar</option>\
			<option value='Kolar' >Kolar</option>\
			<option value='Kollegal' >Kollegal</option>\
			<option value='Koppal' >Koppal</option>\
			<option value='Krishnarajapura' >Krishnarajapura</option>\
			<option value='Mahadevapura' >Mahadevapura</option>\
			<option value='Maisuru' >Maisuru</option>\
			<option value='Mandya' >Mandya</option>\
			<option value='Mangaluru' >Mangaluru</option>\
			<option value='Nipani' >Nipani</option>\
			<option value='Pattanagere' >Pattanagere</option>\
			<option value='Puttur' >Puttur</option>\
			<option value='Rabkavi' >Rabkavi</option>\
			<option value='Raichur' >Raichur</option>\
			<option value='Ramanagaram' >Ramanagaram</option>\
			<option value='Ranibennur' >Ranibennur</option>\
			<option value='Robertsonpet' >Robertsonpet</option>\
			<option value='Sagar' >Sagar</option>\
			<option value='Shahabad' >Shahabad</option>\
			<option value='Shahpur' >Shahpur</option>\
			<option value='Shimoga' >Shimoga</option>\
			<option value='Shorapur' >Shorapur</option>\
			<option value='Sidlaghatta' >Sidlaghatta</option>\
			<option value='Sira' >Sira</option>\
			<option value='Sirsi' >Sirsi</option>\
			<option value='Tiptur' >Tiptur</option>\
			<option value='Tumkur' >Tumkur</option>\
			<option value='Udupi' >Udupi</option>\
			<option value='Ullal' >Ullal</option>\
			<option value='Yadgir' >Yadgir</option>\
			<option value='Yelahanka' >Yelahanka</option></select>";
		}
		else if (typevalue == 16)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Alappuzha' >Alappuzha</option>\
<option value='Beypur' >Beypur</option>\
<option value='Cheruvannur' >Cheruvannur</option>\
<option value='Edakkara' >Edakkara</option>\
<option value='Edathala' >Edathala</option>\
<option value='Kalamassery' >Kalamassery</option>\
<option value='Kannan Devan Hills' >Kannan Devan Hills</option>\
<option value='Kannangad' >Kannangad</option>\
<option value='Kannur' >Kannur</option>\
<option value='Kayankulam' >Kayankulam</option>\
<option value='Kochi' >Kochi</option>\
<option value='Kollam' >Kollam</option>\
<option value='Kottayam' >Kottayam</option>\
<option value='Koyilandi' >Koyilandi</option>\
<option value='Kozhikkod' >Kozhikkod</option>\
<option value='Kunnamkulam' >Kunnamkulam</option>\
<option value='Malappuram' >Malappuram</option>\
<option value='Manjeri' >Manjeri</option>\
<option value='Nedumangad' >Nedumangad</option>\
<option value='Neyyattinkara' >Neyyattinkara</option>\
<option value='Palakkad' >Palakkad</option>\
<option value='Pallichal' >Pallichal</option>\
<option value='Payyannur' >Payyannur</option>\
<option value='Ponnani' >Ponnani</option>\
<option value='Talipparamba' >Talipparamba</option>\
<option value='Thalassery' >Thalassery</option>\
<option value='Thiruvananthapuram' >Thiruvananthapuram</option>\
<option value='Thrippunithura' >Thrippunithura</option>\
<option value='Thrissur' >Thrissur</option>\
<option value='Tirur' >Tirur</option>\
<option value='Tiruvalla' >Tiruvalla</option>\
<option value='Vadakara' >Vadakara</option></select>";
		}
		else if (typevalue == 17)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Ashoknagar' >Ashoknagar</option>\
<option value='Balaghat' >Balaghat</option>\
<option value='Basoda' >Basoda</option>\
<option value='Betul' >Betul</option>\
<option value='Bhind' >Bhind</option>\
<option value='Bhopal' >Bhopal</option>\
<option value='BinaEtawa' >BinaEtawa</option>\
<option value='Burhanpur' >Burhanpur</option>\
<option value='Chhatarpur' >Chhatarpur</option>\
<option value='Chhindwara' >Chhindwara</option>\
<option value='Dabra' >Dabra</option>\
<option value='Damoh' >Damoh</option>\
<option value='Datia' >Datia</option>\
<option value='Dewas' >Dewas</option>\
<option value='Dhar' >Dhar</option>\
<option value='Gohad' >Gohad</option>\
<option value='Guna' >Guna</option>\
<option value='Gwalior' >Gwalior</option>\
<option value='Harda' >Harda</option>\
<option value='Hoshangabad' >Hoshangabad</option>\
<option value='Indore' >Indore</option>\
<option value='Itarsi' >Itarsi</option>\
<option value='Jabalpur' >Jabalpur</option>\
<option value='Jabalpur Cantonment' >Jabalpur Cantonment</option>\
<option value='Jaora' >Jaora</option>\
<option value='Khandwa' >Khandwa</option>\
<option value='Khargone' >Khargone</option>\
<option value='Mandidip' >Mandidip</option>\
<option value='Mandsaur' >Mandsaur</option>\
<option value='Mau' >Mau</option>\
<option value='Morena' >Morena</option>\
<option value='Murwara' >Murwara</option>\
<option value='Nagda' >Nagda</option>\
<option value='Nimach' >Nimach</option>\
<option value='Pithampur' >Pithampur</option>\
<option value='Raghogarh' >Raghogarh</option>\
<option value='Ratlam' >Ratlam</option>\
<option value='Rewa' >Rewa</option>\
<option value='Sagar' >Sagar</option>\
<option value='Sarni' >Sarni</option>\
<option value='Satna' >Satna</option>\
<option value='Sehore' >Sehore</option>\
<option value='Sendhwa' >Sendhwa</option>\
<option value='Seoni' >Seoni</option>\
<option value='Shahdol' >Shahdol</option>\
<option value='Shajapur' >Shajapur</option>\
<option value='Sheopur' >Sheopur</option>\
<option value='Shivapuri' >Shivapuri</option>\
<option value='Sidhi' >Sidhi</option>\
<option value='Singrauli' >Singrauli</option>\
<option value='Tikamgarh' >Tikamgarh</option>\
<option value='Ujjain' >Ujjain</option>\
<option value='Vidisha' >Vidisha</option></select>";
		}
		else if (typevalue == 18)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Achalpur' >Achalpur</option>\
<option value='Ahmadnagar' >Ahmadnagar</option>\
<option value='Akola' >Akola</option>\
<option value='Akot' >Akot</option>\
<option value='Amalner' >Amalner</option>\
<option value='Ambajogai' >Ambajogai</option>\
<option value='Amravati' >Amravati</option>\
<option value='Anjangaon' >Anjangaon</option>\
<option value='Aurangabad' >Aurangabad</option>\
<option value='Badlapur' >Badlapur</option>\
<option value='Ballarpur' >Ballarpur</option>\
<option value='Baramati' >Baramati</option>\
<option value='Barsi' >Barsi</option>\
<option value='Basmat' >Basmat</option>\
<option value='Bhadravati' >Bhadravati</option>\
<option value='Bhandara' >Bhandara</option>\
<option value='Bhiwandi' >Bhiwandi</option>\
<option value='Bhusawal' >Bhusawal</option>\
<option value='Bid' >Bid</option>\
<option value='Buldana' >Buldana</option>\
<option value='Chalisgaon' >Chalisgaon</option>\
<option value='Chandrapur' >Chandrapur</option>\
<option value='Chikhli' >Chikhli</option>\
<option value='Chiplun' >Chiplun</option>\
<option value='Chopda' >Chopda</option>\
<option value='Dahanu' >Dahanu</option>\
<option value='Deolali' >Deolali</option>\
<option value='Dhule' >Dhule</option>\
<option value='Digdoh' >Digdoh</option>\
<option value='Diglur' >Diglur</option>\
<option value='Gadchiroli' >Gadchiroli</option>\
<option value='Gondiya' >Gondiya</option>\
<option value='Hinganghat' >Hinganghat</option>\
<option value='Hingoli' >Hingoli</option>\
<option value='Ichalkaranji' >Ichalkaranji</option>\
<option value='Jalgaon' >Jalgaon</option>\
<option value='Jalna' >Jalna</option>\
<option value='Kalyan' >Kalyan</option>\
<option value='Kamthi' >Kamthi</option>\
<option value='Karanja' >Karanja</option>\
<option value='Khadki' >Khadki</option>\
<option value='Khamgaon' >Khamgaon</option>\
<option value='Khopoli' >Khopoli</option>\
<option value='Kolhapur' >Kolhapur</option>\
<option value='Kopargaon' >Kopargaon</option>\
<option value='Latur' >Latur</option>\
<option value='Lonavale' >Lonavale</option>\
<option value='Malegaon' >Malegaon</option>\
<option value='Malkapur' >Malkapur</option>\
<option value='Manmad' >Manmad</option>\
<option value='Mira Bhayandar' >Mira Bhayandar</option>\
<option value='Mumbai' >Mumbai</option>\
<option value='Nagpur' >Nagpur</option>\
<option value='Nalasopara' >Nalasopara</option>\
<option value='Nanded' >Nanded</option>\
<option value='Nandurbar' >Nandurbar</option>\
<option value='Nashik' >Nashik</option>\
<option value='Navghar' >Navghar</option>\
<option value='Navi Mumbai' >Navi Mumbai</option>\
<option value='Navi Mumbai' >Navi Mumbai</option>\
<option value='Osmanabad' >Osmanabad</option>\
<option value='Palghar' >Palghar</option>\
<option value='Pandharpur' >Pandharpur</option>\
<option value='Parbhani' >Parbhani</option>\
<option value='Phaltan' >Phaltan</option>\
<option value='Pimpri' >Pimpri</option>\
<option value='Pune' >Pune</option>\
<option value='Pune Cantonment' >Pune Cantonment</option>\
<option value='Pusad' >Pusad</option>\
<option value='Ratnagiri' >Ratnagiri</option>\
<option value='SangliMiraj' >SangliMiraj</option>\
<option value='Satara' >Satara</option>\
<option value='Shahada' >Shahada</option>\
<option value='Shegaon' >Shegaon</option>\
<option value='Shirpur' >Shirpur</option>\
<option value='Sholapur' >Sholapur</option>\
<option value='Shrirampur' >Shrirampur</option>\
<option value='Sillod' >Sillod</option>\
<option value='Thana' >Thana</option>\
<option value='Udgir' >Udgir</option>\
<option value='Ulhasnagar' >Ulhasnagar</option>\
<option value='Uran Islampur' >Uran Islampur</option>\
<option value='Vasai' >Vasai</option>\
<option value='Virar' >Virar</option>\
<option value='Wadi' >Wadi</option>\
<option value='Wani' >Wani</option>\
<option value='Wardha' >Wardha</option>\
<option value='Warud' >Warud</option>\
<option value='Washim' >Washim</option>\
<option value='Yavatmal' >Yavatmal</option></select>";
		}
		else if (typevalue == 19)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Imphal' >Imphal</option></select>";
		}
			else if (typevalue == 20)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Shillong' >Shillong</option>\
<option value='Tura' >Tura</option></select>";
		}
		else if (typevalue == 21)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Aizawl' >Aizawl</option>\
<option value='Lunglei' >Lunglei</option></select>";
		}
		else if (typevalue == 22)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Dimapur' >Dimapur</option>\
<option value='Kohima' >Kohima</option>\
<option value='Wokha' >Wokha</option></select>";
		}
		else if (typevalue == 23)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Balangir' >Balangir</option>\
<option value='Baleshwar' >Baleshwar</option>\
<option value='Barbil' >Barbil</option>\
<option value='Bargarh' >Bargarh</option>\
<option value='Baripada' >Baripada</option>\
<option value='Bhadrak' >Bhadrak</option>\
<option value='Bhawanipatna' >Bhawanipatna</option>\
<option value='Bhubaneshwar' >Bhubaneshwar</option>\
<option value='Brahmapur' >Brahmapur</option>\
<option value='Brajrajnagar' >Brajrajnagar</option>\
<option value='Dhenkanal' >Dhenkanal</option>\
<option value='Jaypur' >Jaypur</option>\
<option value='Jharsuguda' >Jharsuguda</option>\
<option value='Kataka' >Kataka</option>\
<option value='Kendujhar' >Kendujhar</option>\
<option value='Paradwip' >Paradwip</option>\
<option value='Puri' >Puri</option>\
<option value='Raurkela' >Raurkela</option>\
<option value='Raurkela Industrial Township' >Raurkela Industrial Township</option>\
<option value='Rayagada' >Rayagada</option>\
<option value='Sambalpur' >Sambalpur</option>\
<option value='Sunabeda' >Sunabeda</option></select>";
		}
		else if (typevalue == 24)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Karaikal' >Karaikal</option>\
<option value='Ozhukarai' >Ozhukarai</option>\
<option value='Pondicherry' >Pondicherry</option></select>";
		}
		else if (typevalue == 25)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Abohar' >Abohar</option>\
<option value='Amritsar' >Amritsar</option>\
<option value='Barnala' >Barnala</option>\
<option value='Batala' >Batala</option>\
<option value='Bathinda' >Bathinda</option>\
<option value='Dhuri' >Dhuri</option>\
<option value='Faridkot' >Faridkot</option>\
<option value='Fazilka' >Fazilka</option>\
<option value='Firozpur' >Firozpur</option>\
<option value='Firozpur Cantonment' >Firozpur Cantonment</option>\
<option value='Gobindgarh' >Gobindgarh</option>\
<option value='Gurdaspur' >Gurdaspur</option>\
<option value='Hoshiarpur' >Hoshiarpur</option>\
<option value='Jagraon' >Jagraon</option>\
<option value='Jalandhar' >Jalandhar</option>\
<option value='Kapurthala' >Kapurthala</option>\
<option value='Khanna' >Khanna</option>\
<option value='Kot Kapura' >Kot Kapura</option>\
<option value='Ludhiana' >Ludhiana</option>\
<option value='Malaut' >Malaut</option>\
<option value='Maler Kotla' >Maler Kotla</option>\
<option value='Mansa' >Mansa</option>\
<option value='Moga' >Moga</option>\
<option value='Mohali' >Mohali</option>\
<option value='Pathankot' >Pathankot</option>\
<option value='Patiala' >Patiala</option>\
<option value='Phagwara' >Phagwara</option>\
<option value='Rajpura' >Rajpura</option>\
<option value='Rupnagar' >Rupnagar</option>\
<option value='Samana' >Samana</option>\
<option value='Sangrur' >Sangrur</option>\
<option value='Sirhind' >Sirhind</option>\
<option value='Sunam' >Sunam</option>\
<option value='Tarn Taran' >Tarn Taran</option></select>";
		}else if (typevalue == 26)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Ajmer' >Ajmer</option>\
<option value='Alwar' >Alwar</option>\
<option value='Balotra' >Balotra</option>\
<option value='Banswara' >Banswara</option>\
<option value='Baran' >Baran</option>\
<option value='Bari' >Bari</option>\
<option value='Barmer' >Barmer</option>\
<option value='Beawar' >Beawar</option>\
<option value='Bharatpur' >Bharatpur</option>\
<option value='Bhilwara' >Bhilwara</option>\
<option value='Bhiwadi' >Bhiwadi</option>\
<option value='Bikaner' >Bikaner</option>\
<option value='Bundi' >Bundi</option>\
<option value='Chittaurgarh' >Chittaurgarh</option>\
<option value='Chomun' >Chomun</option>\
<option value='Churu' >Churu</option>\
<option value='Daosa' >Daosa</option>\
<option value='Dhaulpur' >Dhaulpur</option>\
<option value='Didwana' >Didwana</option>\
<option value='Fatehpur' >Fatehpur</option>\
<option value='Ganganagar' >Ganganagar</option>\
<option value='Gangapur' >Gangapur</option>\
<option value='Hanumangarh' >Hanumangarh</option>\
<option value='Hindaun' >Hindaun</option>\
<option value='Jaipur' >Jaipur</option>\
<option value='Jaisalmer' >Jaisalmer</option>\
<option value='Jalor' >Jalor</option>\
<option value='Jhalawar' >Jhalawar</option>\
<option value='Jhunjhunun' >Jhunjhunun</option>\
<option value='Jodhpur' >Jodhpur</option>\
<option value='Karauli' >Karauli</option>\
<option value='Kishangarh' >Kishangarh</option>\
<option value='Kota' >Kota</option>\
<option value='Kuchaman' >Kuchaman</option>\
<option value='Ladnun' >Ladnun</option>\
<option value='Makrana' >Makrana</option>\
<option value='Nagaur' >Nagaur</option>\
<option value='Nawalgarh' >Nawalgarh</option>\
<option value='Nimbahera' >Nimbahera</option>\
<option value='Nokha' >Nokha</option>\
<option value='Pali' >Pali</option>\
<option value='Rajsamand' >Rajsamand</option>\
<option value='Ratangarh' >Ratangarh</option>\
<option value='Sardarshahr' >Sardarshahr</option>\
<option value='Sawai Madhopur' >Sawai Madhopur</option>\
<option value='Sikar' >Sikar</option>\
<option value='Sujangarh' >Sujangarh</option>\
<option value='Suratgarh' >Suratgarh</option>\
<option value='Tonk' >Tonk</option>\
<option value='Udaipur' >Udaipur</option></select>";
		}
else if (typevalue == 27)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Alandur' >Alandur</option>\
<option value='Ambattur' >Ambattur</option>\
<option value='Ambur' >Ambur</option>\
<option value='Arakonam' >Arakonam</option>\
<option value='Arani' >Arani</option>\
<option value='Aruppukkottai' >Aruppukkottai</option>\
<option value='Attur' >Attur</option>\
<option value='Avadi' >Avadi</option>\
<option value='Avaniapuram' >Avaniapuram</option>\
<option value='Bodinayakkanur' >Bodinayakkanur</option>\
<option value='Chengalpattu' >Chengalpattu</option>\
<option value='Dharapuram' >Dharapuram</option>\
<option value='Dharmapuri' >Dharmapuri</option>\
<option value='Dindigul' >Dindigul</option>\
<option value='Erode' >Erode</option>\
<option value='Gopichettipalaiyam' >Gopichettipalaiyam</option>\
<option value='Gudalur' >Gudalur</option>\
<option value='Gudiyattam' >Gudiyattam</option>\
<option value='Hosur' >Hosur</option>\
<option value='Idappadi' >Idappadi</option>\
<option value='Kadayanallur' >Kadayanallur</option>\
<option value='Kambam' >Kambam</option>\
<option value='Kanchipuram' >Kanchipuram</option>\
<option value='Karur' >Karur</option>\
<option value='Kavundampalaiyam' >Kavundampalaiyam</option>\
<option value='Kovilpatti' >Kovilpatti</option>\
<option value='Koyampattur' >Koyampattur</option>\
<option value='Krishnagiri' >Krishnagiri</option>\
<option value='Kumarapalaiyam' >Kumarapalaiyam</option>\
<option value='Kumbakonam' >Kumbakonam</option>\
<option value='Kuniyamuthur' >Kuniyamuthur</option>\
<option value='Kurichi' >Kurichi</option>\
<option value='Madhavaram' >Madhavaram</option>\
<option value='Chennai' >Chennai</option>\
<option value='Madurai' >Madurai</option>\
<option value='Maduravoyal' >Maduravoyal</option>\
<option value='Mannargudi' >Mannargudi</option>\
<option value='Mayiladuthurai' >Mayiladuthurai</option>\
<option value='Mettupalayam' >Mettupalayam</option>\
<option value='Mettur' >Mettur</option>\
<option value='Nagapattinam' >Nagapattinam</option>\
<option value='Nagercoil' >Nagercoil</option>\
<option value='Namakkal' >Namakkal</option>\
<option value='Nerkunram' >Nerkunram</option>\
<option value='Neyveli' >Neyveli</option>\
<option value='Pallavaram' >Pallavaram</option>\
<option value='Pammal' >Pammal</option>\
<option value='Pannuratti' >Pannuratti</option>\
<option value='Paramakkudi' >Paramakkudi</option>\
<option value='Pattukkottai' >Pattukkottai</option>\
<option value='Pollachi' >Pollachi</option>\
<option value='Pudukkottai' >Pudukkottai</option>\
<option value='Puliyankudi' >Puliyankudi</option>\
<option value='Punamalli' >Punamalli</option>\
<option value='Rajapalaiyam' >Rajapalaiyam</option>\
<option value='Ramanathapuram' >Ramanathapuram</option>\
<option value='Salem' >Salem</option>\
<option value='Sankarankoil' >Sankarankoil</option>\
<option value='Sivakasi' >Sivakasi</option>\
<option value='Srivilliputtur' >Srivilliputtur</option>\
<option value='Tambaram' >Tambaram</option>\
<option value='Tenkasi' >Tenkasi</option>\
<option value='Thanjavur' >Thanjavur</option>\
<option value='Theni Allinagaram' >Theni Allinagaram</option>\
<option value='Thiruthangal' >Thiruthangal</option>\
<option value='Thiruvarur' >Thiruvarur</option>\
<option value='Thuthukkudi' >Thuthukkudi</option>\
<option value='Tindivanam' >Tindivanam</option>\
<option value='Tiruchchirappalli' >Tiruchchirappalli</option>\
<option value='Tiruchengode' >Tiruchengode</option>\
<option value='Tirunelveli' >Tirunelveli</option>\
<option value='Tirupathur' >Tirupathur</option>\
<option value='Tiruppur' >Tiruppur</option>\
<option value='Tiruvannamalai' >Tiruvannamalai</option>\
<option value='Tiruvottiyur' >Tiruvottiyur</option>\
<option value='Udagamandalam' >Udagamandalam</option>\
<option value='Udumalaipettai' >Udumalaipettai</option>\
<option value='Valparai' >Valparai</option>\
<option value='Vaniyambadi' >Vaniyambadi</option>\
<option value='Velampalaiyam' >Velampalaiyam</option>\
<option value='Velluru' >Velluru</option>\
<option value='Viluppuram' >Viluppuram</option>\
<option value='Virappanchatram' >Virappanchatram</option>\
<option value='Virudhachalam' >Virudhachalam</option>\
<option value='Virudunagar' >Virudunagar</option></select>";
		}
		else if (typevalue == 28)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Agartala' >Agartala</option>\
<option value='Agartala MCl' >Agartala MCl</option>\
<option value='Badharghat' >Badharghat</option></select>";
		}
	else if (typevalue == 29)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Agra' >Agra</option>\
<option value='Aligarh' >Aligarh</option>\
<option value='Allahabad' >Allahabad</option>\
<option value='Amroha' >Amroha</option>\
<option value='Aonla' >Aonla</option>\
<option value='Auraiya' >Auraiya</option>\
<option value='Ayodhya' >Ayodhya</option>\
<option value='Azamgarh' >Azamgarh</option>\
<option value='Baheri' >Baheri</option>\
<option value='Bahraich' >Bahraich</option>\
<option value='Ballia' >Ballia</option>\
<option value='Balrampur' >Balrampur</option>\
<option value='Banda' >Banda</option>\
<option value='Baraut' >Baraut</option>\
<option value='Bareli' >Bareli</option>\
<option value='Basti' >Basti</option>\
<option value='Behta Hajipur' >Behta Hajipur</option>\
<option value='Bela' >Bela</option>\
<option value='Bhadohi' >Bhadohi</option>\
<option value='Bijnor' >Bijnor</option>\
<option value='Bisalpur' >Bisalpur</option>\
<option value='Biswan' >Biswan</option>\
<option value='Budaun' >Budaun</option>\
<option value='Bulandshahr' >Bulandshahr</option>\
<option value='Chandausi' >Chandausi</option>\
<option value='Chandpur' >Chandpur</option>\
<option value='Chhibramau' >Chhibramau</option>\
<option value='Chitrakut Dham' >Chitrakut Dham</option>\
<option value='Dadri' >Dadri</option>\
<option value='Deoband' >Deoband</option>\
<option value='Deoria' >Deoria</option>\
<option value='Etah' >Etah</option>\
<option value='Etawah' >Etawah</option>\
<option value='Faizabad' >Faizabad</option>\
<option value='Faridpur' >Faridpur</option>\
<option value='Farrukhabad' >Farrukhabad</option>\
<option value='Fatehpur' >Fatehpur</option>\
<option value='Firozabad' >Firozabad</option>\
<option value='Gajraula' >Gajraula</option>\
<option value='Ganga Ghat' >Ganga Ghat</option>\
<option value='Gangoh' >Gangoh</option>\
<option value='Ghaziabad' >Ghaziabad</option>\
<option value='Ghazipur' >Ghazipur</option>\
<option value='Gola Gokarannath' >Gola Gokarannath</option>\
<option value='Gonda' >Gonda</option>\
<option value='Gorakhpur' >Gorakhpur</option>\
<option value='Hapur' >Hapur</option>\
<option value='Hardoi' >Hardoi</option>\
<option value='Hasanpur' >Hasanpur</option>\
<option value='Hathras' >Hathras</option>\
<option value='Jahangirabad' >Jahangirabad</option>\
<option value='Jalaun' >Jalaun</option>\
<option value='Jaunpur' >Jaunpur</option>\
<option value='Jhansi' >Jhansi</option>\
<option value='Kadi' >Kadi</option>\
<option value='Kairana' >Kairana</option>\
<option value='Kannauj' >Kannauj</option>\
<option value='Kanpur' >Kanpur</option>\
<option value='Kanpur Cantonment' >Kanpur Cantonment</option>\
<option value='Kasganj' >Kasganj</option>\
<option value='Khatauli' >Khatauli</option>\
<option value='Khora' >Khora</option>\
<option value='Khurja' >Khurja</option>\
<option value='Kiratpur' >Kiratpur</option>\
<option value='Kosi Kalan' >Kosi Kalan</option>\
<option value='Laharpur' >Laharpur</option>\
<option value='Lakhimpur' >Lakhimpur</option>\
<option value='Lucknow' >Lucknow</option>\
<option value='Lakhnau Cantonment' >Lakhnau Cantonment</option>\
<option value='Lalitpur' >Lalitpur</option>\
<option value='Loni' >Loni</option>\
<option value='Mahoba' >Mahoba</option>\
<option value='Mainpuri' >Mainpuri</option>\
<option value='Mathura' >Mathura</option>\
<option value='Mau' >Mau</option>\
<option value='Mauranipur' >Mauranipur</option>\
<option value='Mawana' >Mawana</option>\
<option value='Mirat' >Mirat</option>\
<option value='Mirat Cantonment' >Mirat Cantonment</option>\
<option value='Mirzapur' >Mirzapur</option>\
<option value='Modinagar' >Modinagar</option>\
<option value='Moradabad' >Moradabad</option>\
<option value='Mubarakpur' >Mubarakpur</option>\
<option value='Mughal Sarai' >Mughal Sarai</option>\
<option value='Muradnagar' >Muradnagar</option>\
<option value='Muzaffarnagar' >Muzaffarnagar</option>\
<option value='Nagina' >Nagina</option>\
<option value='Najibabad' >Najibabad</option>\
<option value='Nawabganj' >Nawabganj</option>\
<option value='Noida' >Noida</option>\
<option value='Obra' >Obra</option>\
<option value='Orai' >Orai</option>\
<option value='Pilibhit' >Pilibhit</option>\
<option value='Pilkhuwa' >Pilkhuwa</option>\
<option value='Rae Bareli' >Rae Bareli</option>\
<option value='Ramgarh Nagla Kothi' >Ramgarh Nagla Kothi</option>\
<option value='Rampur' >Rampur</option>\
<option value='Rath' >Rath</option>\
<option value='Renukut' >Renukut</option>\
<option value='Saharanpur' >Saharanpur</option>\
<option value='Sahaswan' >Sahaswan</option>\
<option value='Sambhal' >Sambhal</option>\
<option value='Sandila' >Sandila</option>\
<option value='Shahabad' >Shahabad</option>\
<option value='Shahjahanpur' >Shahjahanpur</option>\
<option value='Shamli' >Shamli</option>\
<option value='Sherkot' >Sherkot</option>\
<option value='Shikohabad' >Shikohabad</option>\
<option value='Sikandarabad' >Sikandarabad</option>\
<option value='Sitapur' >Sitapur</option>\
<option value='Sukhmalpur Nizamabad' >Sukhmalpur Nizamabad</option>\
<option value='Sultanpur' >Sultanpur</option>\
<option value='Tanda' >Tanda</option>\
<option value='Tilhar' >Tilhar</option>\
<option value='Tundla' >Tundla</option>\
<option value='Ujhani' >Ujhani</option>\
<option value='Unnao' >Unnao</option>\
<option value='Varanasi' >Varanasi</option>\
<option value='Vrindavan' >Vrindavan</option></select>";
		}
		else if (typevalue == 30)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Dehradun' >Dehradun</option>\
<option value='Dehra Dun Cantonment' >Dehra Dun Cantonment</option>\
<option value='Gola Range' >Gola Range</option>\
<option value='Haldwani' >Haldwani</option>\
<option value='Haridwar' >Haridwar</option>\
<option value='Kashipur' >Kashipur</option>\
<option value='Pithoragarh' >Pithoragarh</option>\
<option value='Rishikesh' >Rishikesh</option>\
<option value='Rudrapur' >Rudrapur</option>\
<option value='Rurki' >Rurki</option></select>";
		}
		else if (typevalue == 31)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Alipur Duar' >Alipur Duar</option>\
<option value='Arambagh' >Arambagh</option>\
<option value='Asansol' >Asansol</option>\
<option value='Ashoknagar Kalyangarh' >Ashoknagar Kalyangarh</option>\
<option value='Baharampur' >Baharampur</option>\
<option value='Baidyabati' >Baidyabati</option>\
<option value='Baj Baj' >Baj Baj</option>\
<option value='Bally' >Bally</option>\
<option value='Bally Cantonment' >Bally Cantonment</option>\
<option value='Balurghat' >Balurghat</option>\
<option value='Bangaon' >Bangaon</option>\
<option value='Bankra' >Bankra</option>\
<option value='Bankura' >Bankura</option>\
<option value='Bansbaria' >Bansbaria</option>\
<option value='Baranagar' >Baranagar</option>\
<option value='Barddhaman' >Barddhaman</option>\
<option value='Basirhat' >Basirhat</option>\
<option value='Bhadreswar' >Bhadreswar</option>\
<option value='Bhatpara' >Bhatpara</option>\
<option value='Bidhannagar' >Bidhannagar</option>\
<option value='Binnaguri' >Binnaguri</option>\
<option value='Bishnupur' >Bishnupur</option>\
<option value='Bolpur' >Bolpur</option>\
<option value='Chakdaha' >Chakdaha</option>\
<option value='Champdani' >Champdani</option>\
<option value='Chandannagar' >Chandannagar</option>\
<option value='Contai' >Contai</option>\
<option value='Dabgram' >Dabgram</option>\
<option value='Darjiling' >Darjiling</option>\
<option value='Dhulian' >Dhulian</option>\
<option value='Dinhata' >Dinhata</option>\
<option value='Dum Dum' >Dum Dum</option>\
<option value='Durgapur' >Durgapur</option>\
<option value='Gangarampur' >Gangarampur</option>\
<option value='Garulia' >Garulia</option>\
<option value='Gayespur' >Gayespur</option>\
<option value='Ghatal' >Ghatal</option>\
<option value='Gopalpur' >Gopalpur</option>\
<option value='Habra' >Habra</option>\
<option value='Halisahar' >Halisahar</option>\
<option value='Haora' >Haora</option>\
<option value='HugliChunchura' >HugliChunchura</option>\
<option value='Ingraj Bazar' >Ingraj Bazar</option>\
<option value='Islampur' >Islampur</option>\
<option value='Jalpaiguri' >Jalpaiguri</option>\
<option value='Jamuria' >Jamuria</option>\
<option value='Jangipur' >Jangipur</option>\
<option value='Jhargram' >Jhargram</option>\
<option value='Kaliyaganj' >Kaliyaganj</option>\
<option value='Kalna' >Kalna</option>\
<option value='Kalyani' >Kalyani</option>\
<option value='Kamarhati' >Kamarhati</option>\
<option value='Kanchrapara' >Kanchrapara</option>\
<option value='Kandi' >Kandi</option>\
<option value='Karsiyang' >Karsiyang</option>\
<option value='Katwa' >Katwa</option>\
<option value='Kharagpur' >Kharagpur</option>\
<option value='Kharagpur Railway Settlement' >Kharagpur Railway Settlement</option>\
<option value='Khardaha' >Khardaha</option>\
<option value='Kharia' >Kharia</option>\
<option value='Kolkata' >Kolkata</option>\
<option value='Koch Bihar' >Koch Bihar</option>\
<option value='Konnagar' >Konnagar</option>\
<option value='Krishnanagar' >Krishnanagar</option>\
<option value='Kulti' >Kulti</option>\
<option value='Madhyamgram' >Madhyamgram</option>\
<option value='Maheshtala' >Maheshtala</option>\
<option value='Memari' >Memari</option>\
<option value='Midnapur' >Midnapur</option>\
<option value='Naihati' >Naihati</option>\
<option value='Navadwip' >Navadwip</option>\
<option value='Ni Barakpur' >Ni Barakpur</option>\
<option value='North Barakpur' >North Barakpur</option>\
<option value='North Dum Dum' >North Dum Dum</option>\
<option value='Old Maldah' >Old Maldah</option>\
<option value='Panihati' >Panihati</option>\
<option value='Phulia' >Phulia</option>\
<option value='Pujali' >Pujali</option>\
<option value='Puruliya' >Puruliya</option>\
<option value='Raiganj' >Raiganj</option>\
<option value='Rajpur' >Rajpur</option>\
<option value='Rampur Hat' >Rampur Hat</option>\
<option value='Ranaghat' >Ranaghat</option>\
<option value='Raniganj' >Raniganj</option>\
<option value='Rishra' >Rishra</option>\
<option value='Shantipur' >Shantipur</option>\
<option value='Shiliguri' >Shiliguri</option>\
<option value='Shrirampur' >Shrirampur</option>\
<option value='Siuri' >Siuri</option>\
<option value='South Dum Dum' >South Dum Dum</option>\
<option value='Titagarh' >Titagarh</option>\
<option value='Ulubaria' >Ulubaria</option>\
<option value='UttarparaKotrung' >UttarparaKotrung</option></select>";
		}
		else if (typevalue == 32)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Dadar-Nagar Haveli' >Dadar-Nagar Haveli</option></select>";
		}
		else if (typevalue == 33)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Daman' >Daman</option>\
<option value='Diu' >Diu</option></select>";
		}
		else if (typevalue == 34)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option><option value='Sikkim East'>Sikkim East</option><option value='Gangtok'>Gangtok</option><option value='Ghezing'>Ghezing</option><option value='Jorethang'>Jorethang</option><option value='Legship'>Legship</option><option value='Mangan'>Mangan</option><option value='Namchi'>Namchi</option></select>";
		}
		else if (typevalue == 36)
		{
		document.getElementById("citypid").innerHTML="<select name='city' id='cityid' class='form-select validate[required]'><option value='' selected='selected'>Select</option>\
			<option value='Adilabad' >Adilabad</option>\
			<option value='Bhadradri' >Bhadradri</option>\
			<option value='Hyderabad' >Hyderabad</option>\
			<option value='Jagtial' >Jagtial</option>\
			<option value='Jangaon' >Jangaon</option>\
			<option value='Jayashankar' >Jayashankar</option>\
			<option value='Jogulamba' >Jogulamba</option>\
			<option value='Kamareddy' >Kamareddy</option>\
			<option value='Karimnagar' >Karimnagar</option>\
			<option value='Khammam' >Khammam</option>\
			<option value='Komaram Bheem' >Komaram Bheem</option>\
			<option value='Mahabubabad' >Mahabubabad</option>\
			<option value='Mahabubnagar' >Mahabubnagar</option>\
			<option value='Mancherial' >Mancherial</option>\
			<option value='Medak' >Medak</option>\
			<option value='Medchal' >Medchal</option>\
			<option value='Nagarkurnool' >Nagarkurnool</option>\
			<option value='Nalgonda' >Nalgonda</option>\
			<option value='Nirmal' >Nirmal</option>\
			<option value='Nizamabad' >Nizamabad</option>\
			<option value='Peddapalli' >Peddapalli</option>\
			<option value='Rajanna Sircilla' >Rajanna Sircilla</option>\
			<option value='Ranga Reddy' >Ranga Reddy</option>\
			<option value='Sangareddy' >Sangareddy</option>\
			<option value='Siddipet' >Siddipet</option>\
			<option value='Suryapet' >Suryapet</option>\
			<option value='Vikarabad' >Vikarabad</option>\
			<option value='Wanaparthy' >Wanaparthy</option>\
			<option value='Warangal Rural' >Warangal Rural</option>\
			<option value='Warangal Urban' >Warangal Urban</option>\
			<option value='Yadadri' >Yadadri</option></select>";

		}
	}