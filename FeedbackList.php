<%@page import="com.foodplazashubham.pojo.Feedback"%>
<%@page import="java.util.List"%>
<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>

	<!--  Free CSS Template by TemplateMo.com  -->
	<div id="templatemo_container">
		<div id="templatemo_header">
			<div id="site_title"></div>
		</div>
		<!-- end of header -->

		 <?php include_once 'menu.php';?>

		/* ADD PHP CODE

	<% List<Feedback> fblist = (List<Feedback>) session.getAttribute("feedbacklist");%>

	<h2 align="center">Feedback List</h2>
	<table border="2" align="center">
		<tr>
			<th>Feedback Id</th>
			<th>Name</th>
			<th>Email id</th>
			<th>Contact no</th>
			<th>Message</th>
		</tr>

		<% for (int i = 0; i < fblist.size(); i++) {
				Feedback fb = fblist.get(i);
			%>

		<tr>
			<td><%=fb.getFbid() %></td>
			<td><%=fb.getFbname() %></td>
			<td><%=fb.getFbemailid() %></td>
			<td><%=fb.getFbcontactno() %></td>
			<td><%=fb.getMessage() %></td>
		</tr>

		<%} %>
	</table> */
	
	<?php include_once 'footer.php';?>
</body>
</html>