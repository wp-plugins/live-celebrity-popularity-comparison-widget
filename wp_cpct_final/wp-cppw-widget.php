<div id="wp_ppw">

<script language="Javascript">        
  setInterval("settime_cppw()", 1000);

</script>
  <div id="Website-Trend-Gadget_cppw">
    <div id="Gadget-Heading_cppw">
    <div name="link_3_div_cppw" id="link_3_div_cppw"><h3 >Celebrity Popularity Checker</h3></div>
    <input type="hidden" id="submit_cppw" name="submit_cppw" value="6" />
  <form name="myform_cppw" action="" method="GET">
    <span id="between_boxes_cppw">Enter separate celebrity names in the boxes:</span> <br />

    <input type="text" name="first_name_cppw" id="first_name_cppw" value="<?php echo $first_name_cppw; ?>" onkeydown="if(event.keyCode == 13){return writeText_cppw(this.form)}"> vs <input type="text" name="second_name_cppw" id="second_name_cppw" value="<?php echo $second_name_cppw; ?>" onkeydown="if(event.keyCode == 13){return writeText_cppw(this.form)}">

      <select name="drop_down_range_cppw" onchange="writeText_cppw(this.form)">
        <option value="mtd">30 Days</option>
        <option value="ytd">12 Months</option>
        <option value="all">All Time</option>

		<option value="2010">2010</option>
		<option value="2009">2009</option>
		<option value="2008">2008</option>
		<option value="2007">2007</option>
		<option value="2006">2006</option>
		<option value="2005">2005</option>
		<option value="2004">2004</option>

      </select> 

      <select name="drop_down_geo_cppw"onchange="writeText_cppw(this.form)">

        <option value="all">Global</option>
        <option value="us">USA</option>
        <option value="ca">Canada</option>
        <option value="gb">United Kingdom</option>    
        <option value="au">Australia</option>
        <option value="in">India</option> <option value="" disabled="">&mdash;&mdash;</option>
        <option value="af"> Afghanistan </option>
	<option value="al"> Albania </option>
	<option value="dz"> Algeria </option>
	<option value="as"> American Samoa </option>
	<option value="ad"> Andorra </option>
	<option value="ao"> Angola </option>
	<option value="ai"> Anguilla </option>
	<option value="aq"> Antarctica </option>
	<option value="ag"> Antigua and Barbuda </option>
	<option value="ar"> Argentina </option>
	<option value="am"> Armenia </option>
	<option value="aw"> Aruba </option>
	<option value="at"> Austria </option>
	<option value="az"> Azerbaijan </option>
	<option value="bs"> Bahamas </option>
	<option value="bh"> Bahrain </option>
	<option value="bd"> Bangladesh </option>
	<option value="bb"> Barbados </option>
	<option value="by"> Belarus </option>
	<option value="be"> Belgium </option>
	<option value="bz"> Belize </option>
	<option value="bj"> Benin </option>
	<option value="bm"> Bermuda </option>
	<option value="bt"> Bhutan </option>
	<option value="bo"> Bolivia </option>
	<option value="bw"> Botswana </option>
	<option value="bv"> Bouvet Island </option>
	<option value="br"> Brazil </option>
	<option value="bn"> Brunei Darussalam </option>
	<option value="bg"> Bulgaria </option>
	<option value="bf"> Burkina Faso </option>
	<option value="bi"> Burundi </option>
	<option value="kh"> Cambodia </option>
	<option value="cm"> Cameroon </option>
	<option value="ca"> Canada </option>
	<option value="cv"> Cape Verde </option>
	<option value="ky"> Cayman Islands </option>
	<option value="td"> Chad </option>
	<option value="cl"> Chile </option>
	<option value="cn"> China </option>
	<option value="co"> Colombia </option>
	<option value="km"> Comoros </option>
	<option value="cd"> Congo, Republic </option>
	<option value="cg"> Congo </option>
	<option value="ck"> Cook Islands </option>
	<option value="cr"> Costa Rica </option>
	<option value="ci"> Cote d'Ivoire </option>
	<option value="hr"> Croatia </option>
	<option value="cu"> Cuba </option>
	<option value="cy"> Cyprus </option>
	<option value="cz"> Czech Republic </option>
	<option value="dk"> Denmark </option>
	<option value="dj"> Djibouti </option>
	<option value="dm"> Dominica </option>
	<option value="do"> Dominican Republic </option>
	<option value="ec"> Ecuador </option>
	<option value="eg"> Egypt </option>
	<option value="sv"> El Salvador </option>
	<option value="gq"> Equatorial Guinea </option>
	<option value="er"> Eritrea </option>
	<option value="ee"> Estonia </option>
	<option value="et"> Ethiopia </option>
	<option value="fj"> Fiji </option>
	<option value="fi"> Finland </option>
	<option value="fr"> France </option>
	<option value="gf"> French Guiana </option>
	<option value="pf"> French Polynesia </option>
	<option value="tf"> French Southern </option>
	<option value="ga"> Gabon </option>
	<option value="gm"> Gambia </option>
	<option value="ge"> Georgia </option>
	<option value="de"> Germany </option>
	<option value="gh"> Ghana </option>
	<option value="gi"> Gibraltar </option>
	<option value="gr"> Greece </option>
	<option value="gl"> Greenland </option>
	<option value="gd"> Grenada </option>
	<option value="gp"> Guadeloupe </option>
	<option value="gu"> Guam </option>
	<option value="gt"> Guatemala </option>
	<option value="gn"> Guinea </option>
	<option value="gw"> Guinea-Bissau </option>
	<option value="gy"> Guyana </option>
	<option value="ht"> Haiti </option>
	<option value="hn"> Honduras </option>
	<option value="hk"> Hong Kong </option>
	<option value="hu"> Hungary </option>
	<option value="is"> Iceland </option>
	<option value="in"> India </option>
	<option value="id"> Indonesia </option>
	<option value="ir"> Iran </option>
	<option value="iq"> Iraq </option>
	<option value="ie"> Ireland </option>
	<option value="il"> Israel </option>
	<option value="it"> Italy </option>
	<option value="jm"> Jamaica </option>
	<option value="jp"> Japan </option>
	<option value="jo"> Jordan </option>
	<option value="kz"> Kazakhstan </option>
	<option value="ke"> Kenya </option>
	<option value="ki"> Kiribati </option>
	<option value="kw"> Kuwait </option>
	<option value="kg"> Kyrgyzstan </option>
	<option value="lv"> Latvia </option>
	<option value="lb"> Lebanon </option
	<option value="ls"> Lesotho </option>
	<option value="lr"> Liberia </option>
	<option value="ly"> Libya </option>
	<option value="li"> Liechtenstein </option>
	<option value="lt"> Lithuania </option>
	<option value="lu"> Luxembourg </option>
	<option value="mo"> Macau </option>
	<option value="mk"> Macedonia </option>
	<option value="mg"> Madagascar </option>
	<option value="mw"> Malawi </option>
	<option value="my"> Malaysia </option>
	<option value="mv"> Maldives </option>
	<option value="ml"> Mali </option>
	<option value="mt"> Malta </option>
	<option value="mh"> Marshall Islands </option>
	<option value="mq"> Martinique </option>
	<option value="mr"> Mauritania </option>
	<option value="mu"> Mauritius </option>
	<option value="yt"> Mayotte </option>
	<option value="mx"> Mexico </option>
	<option value="fm"> Micronesia </option>
	<option value="md"> Moldova </option>
	<option value="mc"> Monaco </option>
	<option value="mn"> Mongolia </option>
	<option value="ms"> Montserrat </option>
	<option value="ma"> Morocco </option>
	<option value="mz"> Mozambique </option>
	<option value="mm"> Myanmar </option>
	<option value="na"> Namibia </option>
	<option value="nr"> Nauru </option>
	<option value="np"> Nepal </option>
	<option value="nl"> Netherlands </option>
	<option value="an"> Netherlands Antilles </option>
	<option value="nc"> New Caledonia </option>
	<option value="nz"> New Zealand </option>
	<option value="ni"> Nicaragua </option>
	<option value="ne"> Niger </option>
	<option value="ng"> Nigeria </option>
	<option value="nu"> Niue </option>
	<option value="nf"> Norfolk Island </option>
	<option value="kp"> North Korea </option>
	<option value="no"> Norway </option>
	<option value="om"> Oman </option>
	<option value="pk"> Pakistan </option>
	<option value="pw"> Palau </option>
	<option value="ps"> Palestinian Territory </option>
	<option value="pa"> Panama </option>
	<option value="pg"> Papua New Guinea </option>
	<option value="py"> Paraguay </option>
	<option value="pe"> Peru </option>
	<option value="ph"> Philippines </option>
	<option value="pn"> Pitcairn </option>
	<option value="pl"> Poland </option>
	<option value="pt"> Portugal </option>
	<option value="pr"> Puerto Rico </option>
	<option value="qa"> Qatar </option>
	<option value="re"> Reunion </option>
	<option value="ro"> Romania </option>
	<option value="ru"> Russian Federation </option>
	<option value="rw"> Rwanda </option>
	<option value="sh"> St. Helena </option>
	<option value="lc"> Saint Lucia </option>
	<option value="ws"> Samoa </option>
	<option value="sm"> San Marino </option>
	<option value="st"> Sao Tome and Principe </option>
	<option value="sa"> Saudi Arabia </option>
	<option value="sn"> Senegal </option>
	<option value="sc"> Seychelles </option>
       <option value="sl"> Sierra Leone </option>
	<option value="sg"> Singapore </option>
	<option value="sk"> Slovakia </option>
	<option value="si"> Slovenia </option>
	<option value="sb"> Solomon Islands </option>
	<option value="so"> Somalia </option>
	<option value="za"> South Africa </option>
	<option value="kr"> South Korea </option>
	<option value="es"> Spain </option>
	<option value="lk"> Sri Lanka </option>
	<option value="sd"> Sudan </option>
	<option value="sr"> Suriname </option>
	<option value="sz"> Swaziland </option>
	<option value="se"> Sweden </option>
	<option value="ch"> Switzerland </option>
	<option value="sy"> Syria </option>
	<option value="tw"> Taiwan </option>
	<option value="tj"> Tajikistan </option>
	<option value="tz"> Tanzania </option>
	<option value="th"> Thailand </option>
	<option value="tg"> Togo </option>
	<option value="tk"> Tokelau </option>
	<option value="to"> Tonga </option>
	<option value="tn"> Tunisia </option>
	<option value="tr"> Turkey </option>
	<option value="tm"> Turkmenistan </option>
	<option value="tv"> Tuvalu </option>
	<option value="um"> US Minor Islands </option>
	<option value="vi"> Virgin Islands (U.S.) </option>
	<option value="ug"> Uganda </option>
	<option value="ua"> Ukraine </option>
	<option value="ae"> United Arab Emirates </option>
	<option value="uy"> Uruguay </option>
	<option value="uz"> Uzbekistan </option>
	<option value="vu"> Vanuatu </option>
	<option value="va"> Vatican </option>
	<option value="ve"> Venezuela </option>
	<option value="vn"> VietNam </option>
	<option value="eh"> Western Sahara </option>
	<option value="ye"> Yemen </option>
	<option value="zm"> Zambia </option>
	<option value="zw"> Zimbabwe </option>

      </select>

  <input type="button" name="clock" id="show_clock"  value=""> 

     <!-- <input type="button" name="clock_cppw" id="show_clock_cppw"  value="">  -->

       <input id="show_graph" type="button" name="button2" Value="Show Graph" onClick="writeText_cppw(this.form)"><br /> 


  </form>

     </div> 
    <div id="Gadget-Img_cppw">

 <a target="_blank" title="Click to see graph at Google.com" href="http://trends.google.com/trends/?q=<?php 
if(!empty($options['first_name_cppw']) && !empty($options['second_name_cppw'])){ echo $first_name_cppw; echo ",";echo $second_name_cppw;}else echo "Britney+Spears,Lady+Gaga";?>&date=ytd&geo=all&graph=weekly_img&sort=0&sa=N"><img src="http://trends.google.com/trends/viz?q=<?php 

if(!empty($options['first_name_cppw']) && !empty($options['second_name_cppw'])){echo $first_name_cppw; echo ", "; echo $second_name_cppw;}else echo "Britney+Spears,Lady+Gaga";?>&date=ytd&geo=all&graph=weekly_img&sort=0&sa=N" /></a>

  <div id="Color-Index_cppw">
       <a id="enlarge_image_cppw"  target="_blank" href="http://trends.google.com/trends/?q=<?php  
if(!empty($options['first_name_cppw']) && !empty($options['second_name_cppw'])){echo $first_name_cppw; echo ",";echo$second_name_cppw;}else echo "Britney+Spears,Lady+Gaga";?>&date=ytd&geo=all&graph=weekly_img&sort=0&sa=N">Enlarge Image</a>
<a id="firstname_cppw" target="_blank" href="http://trends.google.com/trends/?q=<?php if(empty($options['first_name_cppw'])){ echo $first_name_cppw= "Britney Spears";}else echo $first_name_cppw;?>&date=ytd&geo=all&graph=weekly_img&sort=0&sa=N"><?php echo $first_name_cppw; ?></a>&nbsp;&nbsp;
      <a  id="secondname_cppw" target="_blank" href="http://trends.google.com/trends/?q=<?php 
   if(empty($options['second_name_cppw'])){ echo $second_name_cppw="Lady Gaga"; } else echo $second_name_cppw;?>&date=ytd&geo=all&graph=weekly_img&sort=0&sa=N"><?php echo $second_name_cppw; ?></a>&nbsp;&nbsp;
    </div>
 </div>
  <span id="google_disclaimer_cppw">* This Celebrity Popularity Comparison trend graph (image only) is provided by Google and does not reflect entire scope of each celebrity's popularity but only search trends based on the exact search phrase entered into box. Graph reflects search trends for words in celebrity's name also.</span>
  <div name="link_2_div_cppw" id="link_2_div_cppw">
  <?php  

  if(!empty($options['first_name_cppw'] ) && !empty($options['second_name_cppw'])){

  	echo $backLink_cppw ="Get your own <a title='Get Your Own Live Celebrity Popularity Comparison Widget HERE' href='http://personalmoneystore.com/moneyblog/financial-gadgets-and-widgets/politician-popularity-widget/'>Live Celebrity Popularity Comparison Trend Widget</a>";

  }  else {

  	echo $backLink_cppw = " ";

  }

  ?>
</div>

</div>

<input type="hidden" id="submit_cppw" name="submit_cppw" value="5" />

 </div>