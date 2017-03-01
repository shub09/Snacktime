<%@ page import="java.util.List,com.foodplazashubham.pojo.Customer" language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> CUSTOMER LIST</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<!--  Free CSS Template by TemplateMo.com  --> 

<div id="templatemo_container">
	<div id="templatemo_header">
    	<div id="site_title"></div>
    </div> <!-- end of header -->
    
      <?php include_once 'menu.php';?>
    
/*  ADD PHP CODE HERE

      <table style="width:50%" bgcolor="gray" border="1" bordercolor="green" align="center" cellpadding="15">
           <caption>CUSTOMER LIST</caption>
             <tr>
                <th>Customer Id</th>
                <th>Customer Name</th>
                <th>Customer Address</th>
                <th>Contact Number</th>
             </tr>
         <% 
          for (int i=0;i<customerlist.size();i++)
         {
        	Customer cust=customerlist.get(i);%>
        	<tr>
        	 <td><%=cust.getCustomerId()  %></td>
        	 <td><%=cust.getCustomerName() %></td>
        	 <td><%=cust.getCustomerAddress() %></td>
        	 <td><%=cust.getContact() %></td>
        	</tr>
        	
         } */
      </table>    
      <?php include_once 'footer.php';?>  
</body>
</html>