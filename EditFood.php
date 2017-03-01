<%@ page import="java.util.List,com.foodplazashubham.pojo.Food" language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<title>UPDATE FOOD</title>
<script>
function validate()
{	
var fname=document.getElementById("fname").value;
var fprice=document.getElementById("fprice").value;
var ftype=document.getElementById("ftype").value;
if(fname=="")
{
document.getElementById("fnameError").innerHTML="*Please Enter Name";
return false;
}
if(fprice=="")
{
document.getElementById("fpriceError").innerHTML="*Please Enter Price of the Food";
return false;
}
if(ftype=="")
{
document.getElementById("ftype").innerHTML="*Please mention type of Food";
return false;
}
return true;
}
</script>
</head>
<body>
<!--  Free CSS Template by TemplateMo.com  --> 

<div id="templatemo_container">
	<div id="templatemo_header">
    	<div id="site_title"></div>
    </div> <!-- end of header -->
    
     <?php include_once 'menu.php';?>
    
 /*    ADD PHP CODE
 <%  Food food=(Food)session.getAttribute("food"); %>
 
 <form action="CommonFoodServlet" method="post" onsubmit="return validate()">
  <input type="hidden" name="action"  value="updatefood">
  <table bgcolor="gray" border="1" bordercolor="green" align="center" cellpadding="15" >
      
        <tr>
            <td>FoodId</td>
            <td>
                  <input type="text" name="foodid" value=<%=food.getFoodId()%> readonly>
            </td>
         </tr> 
         
         <tr>
            <td>FoodName</td>
            <td>
                  <textarea rows="1" cols="20" name="foodname" id="fname"><%=food.getFoodName() %>
                  </textarea>
                   <br>             
                  <span id="fnameError" style="color:red"></span>
            </td>
         </tr> 
         <tr>
            <td>FoodPrice</td>
            <td>
                  <input type="text" name="foodprice" value=<%=food.getFoodPrice() %> id="fprice">
                  <br>             
                  <span id="fpriceError" style="color:red"></span>
            </td>
         </tr> 
         <tr>
            <td>FoodType</td>
            <td>
                 <textarea rows="1" cols="20" name="type"  id="ftype"><%=food.getFoodType()%>
                 </textarea>
                 <span id="ftypeError" style="color:red"></span>
            </td>
         </tr> 
          <tr>
               <td colspan="2">
                           <input type="submit" name="submit" value="UPDATE"/>
                           <input type="reset" value="RESET">
               </td>
           </tr>
      </table> */
   </form>
    <?php include_once 'footer.php';?> 
</body>
</html>