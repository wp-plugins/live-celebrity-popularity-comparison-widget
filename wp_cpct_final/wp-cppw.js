 // Start form functions 



    function writeText_cppw(form) {

      var input_first_name = form.first_name_cppw.value;

      var input_second_name = form.second_name_cppw.value;

      var range = form.drop_down_range_cppw.value;

      var geo = form.drop_down_geo_cppw.value;



      var img_url ="http://trends.google.com/trends/viz?q="

          + input_first_name +','

          + input_second_name +

            "&date="



              + range +

                "&geo="



                  + geo +

                    "&graph=weekly_img&sort=0&sa=N";

      var img_link ="http://trends.google.com/trends/?q="

          + input_first_name +','

          + input_second_name +

            "&date="

              + range +



                "&geo="

                  + geo +

                  "&graph=weekly_img&sort=0&sa=N";



      var link_first_name ="http://trends.google.com/trends/?q="

          + input_first_name +

            "&date="

              + range +

                "&geo="

                  + geo +

                  "&graph=weekly_img&sort=0&sa=N";

      var link_second_name ="http://trends.google.com/trends/?q="

          + input_second_name +

            "&date="

              + range +

                "&geo="

                  + geo +

                  "&graph=weekly_img&sort=0&sa=N";



      document.getElementById("Gadget-Img_cppw").innerHTML="<a target='_blank' href=\""+img_link+"\" ... ><img src=\""+img_url+"\" ... ></a><br/ ><div id=\"Color-Index\"><a id=\"graph_line\" target='_blank' href=\""+img_link+"\" ... >Enlarge Image</a><a id =\"firstname\" target='_blank' href=\""+link_first_name+"\" ... >\""+input_first_name+"\"</a><a id=\"secondname\" target='_blank' href=\""+ link_second_name +"\" ... >\""+input_second_name+"\"</a></div>";



	return false;



  }



function settime_cppw() {



    var curtime_cppw = new Date();

    var curhour_cppw = curtime_cppw.getHours();

    var curmin_cppw = curtime_cppw.getMinutes();

    var cursec_cppw = curtime_cppw.getSeconds();

    var time_cppw = "";

    if(curhour_cppw == 0) curhour_cppw = 12;

    time_cppw = (curhour_cppw > 12 ? curhour_cppw - 12 : curhour_cppw) + ":" +

         (curmin_cppw < 10 ? "0" : "") + curmin_cppw + ":" +

         (cursec_cppw < 10 ? "0" : "") + cursec_cppw + " " +

         (curhour_cppw > 12 ? "PM" : "AM");



  document.myform_cppw.clock.value = time_cppw;



}

