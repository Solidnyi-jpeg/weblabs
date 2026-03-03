<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>

<%
    String name = request.getParameter("name");

    if (name != null && !name.trim().isEmpty()) {
        session.setAttribute("username", name);
    }

    String savedName = (String) session.getAttribute("username");
%>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>JSP Сесія</title>
</head>
<body>

<h2>Введіть своє ім’я</h2>

<form method="post">
    <input type="text" name="name">
    <input type="submit" value="Зберегти">
</form>

<hr>

<% if (savedName != null) { %>
    <h3>Збережене ім’я у сесії: <%= savedName %></h3>
<% } else { %>
    <h3>Ім’я ще не збережене</h3>
<% } %>

</body>
</html>
