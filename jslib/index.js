// Sticky navagation JS -----------------------------
$(document).ready(function() {

        //Calculate the height of <header>
        //Use outerHeight() instead of height() if have padding
        var aboveHeight = $('header').outerHeight();
        
        // when scroll
        $(window).scroll(function(){

                //if scrolled down more than the header's height
                if ($(window).scrollTop() > aboveHeight){

                        // if yes, add "fixed" class to the <nav>
                        // add padding top to the #content (value is same as the height of the nav)
                        $('.navbar').addClass('fixed').css('top','0').next().css('padding-top','60px');
                      } else {

                        // when scroll up or less than aboveHeight, remove the "fixed" class, and the padding-top
                        $('.navbar').removeClass('fixed').next().css('padding-top','0');
                      }
                    });
      });
// ------------------------------------------------------



// Mouse Over From dream weaver -------------------------------------
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
    if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
    for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
      if(!x && d.getElementById) x=d.getElementById(n); return x;
  }

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
  if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
// ----------------------------------------------------------------------


//This is shopping cart toggle ---------------
$(document).ready(function(){
  $("#cart_list").click(function(){
    $(".sidebar").slideToggle();
  });
});



   // This is Ajax link

   var please_wait = null;
   function open_url(url,target) {
    if ( ! document.getElementById) {
      return false;
    }
    if (please_wait != null) {
      document.getElementById(target).innerHTML = please_wait;
    }

    if (window.ActiveXObject) {
      link = new ActiveXObject("Microsoft.XMLHTTP");
    } else if (window.XMLHttpRequest) {
      link = new XMLHttpRequest();
    }
    if (link == undefined) {
      return false;
    }
    link.onreadystatechange = function() { response(url,target); }
    link.open("GET",url,true);
    link.send(null);
  }
  function response(url,target) {
    if (link.readyState == 4) {
      document.getElementById(target).innerHTML = (link.status == 200) ? link.responseText : "Ooops!! A broken link! Please contact the webmaster of this website ASAP and give him the fallowing errorcode: "  + link.status;
    }
  }
  function set_loading_message(msg) {
    please_wait = msg;
  }

  // Ajax look up(search)


      function ajax(str) {
        var xmlhttp;
        try {
          xmlhttp=new XMLHttpRequest();
        }
        catch (e) {
          try {
            xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
          }
          catch (e) {
            try {
              xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch (e) {
              alert("Your browser does not support AJAX!");
              return false;
            }
          }
        }

        var url='ajax.php?data='+str;
        xmlhttp.onreadystatechange=function() {
          if(xmlhttp.readyState==4) {
            document.getElementById('result').innerHTML=
            xmlhttp.responseText;
          }  
        }
        xmlhttp.open("GET",url,true);
        xmlhttp.send(null);
      }
