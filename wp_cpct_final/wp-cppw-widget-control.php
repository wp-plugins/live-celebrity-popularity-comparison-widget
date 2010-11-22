<script type="text/javascript">
function enableDisable(box_checked)

{
	var disable = !box_checked.checked;
	var argument_length = arguments.length;
	var obj, startIndex = 1;
	var frm = box_checked.form;
	for (var i=startIndex;i<argument_length;i++)
	{
		obj = frm.elements[arguments[i]];
		if (typeof obj=="object")
			{
			if (document.layers) 
				{
				if (disable)

					{

					obj.onfocus=new Function("this.blur()");
					if (obj.type=="text") obj.onchange=new Function("this.value=this.defaultValue");
					}
				else 
					{
					obj.onfocus=new Function("return");
					if (obj.type=="text") obj.onchange=new Function("return");
					}
				}
			else obj.disabled=disable;	

			}

	}

}

</script>
<p>

<label for="title_cppw">Title for Celebrity Popularity Comparison Checker:
<input  name="title_cppw" type="text" value="<?php echo $title_cppw; ?>" /></label>
<input type="hidden" id="submit_cppw" name="submit_cppw" value="1" />
</p>
<p class="box1_cppw">
Your Celebrity Popularity Checker will load without default names in the boxes.
However, if you would like to input names that will display when your widget loads, please check this box, which also means that you agree that
the backlinks are allowed on your site.

<input type="checkbox" id="enable_checkbox_cppw" name="enable_checkbox_cppw" value="<?php echo $enable_checkbox_cppw; ?>" onclick="enableDisable(this,'first_name_cppw','second_name_cppw');" />

<input type="hidden" id="submit_cppw" name=" submit_cppw" value="4" />
<br />
</p>
<p>

<label for="first_name_cppw">Enter celebrity name you want to compare:

<input  id="first_name_cppw" name="first_name_cppw" disabled="disabled" type="text" value="<?php 
if(empty($options['first_name_cppw'])){
   echo $first_name_cppw = "Britney Spears";
}else echo $first_name_cppw;
?>" /></label>			

<input type="hidden" id="submit_cppw" name="submit_cppw" value="2" />

</p>
<p>
<label for="second_name_cppw">Enter celebrity name you want to compare:
<input id="second_name_cppw" name="second_name_cppw" disabled="disabled" type="text" value="<?php 
  if(empty($options['second_name_cppw'])){
   echo $first_name_cppw = "Lady Gaga";
}else echo $second_name_cppw;

?>" /></label>			

<input type="hidden" id="submit_cppw" name="submit_cppw" value="3" />

</p>