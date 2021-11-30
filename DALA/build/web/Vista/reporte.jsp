<%-- 
    Document   : reporte
    Created on : 8/07/2019, 12:50:50 PM
    Author     : Lap
--%>

<%@page import="java.sql.Connection"%>
<%@page import="java.sql.DriverManager"%>
<%@page import="java.util.HashMap"%>
<%@page import="java.io.File"%>
<%@page import="java.util.Map"%>
<%@page import="net.sf.jasperreports.engine.JasperRunManager"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <%
            
            Connection conexion;
            Class.forName("com.mysql.jdbc.Driver").newInstance();
            conexion = DriverManager.getConnection("jdbc:mysql://localhost/qwerty", "root", "");
            
            File reportFile = new File (application.getRealPath("../../src/java/reports/reporteUsuarios.jasper"));
            
            Map parametros = new HashMap();
            parametros.put("clave", request.getAttribute("parametro1"));
            
            byte[] bytes= JasperRunManager.runReportToPdf(reportFile.getPath(), parametros, conexion);
            
            response.setContentType("application/pdf");
            response.setContentLength(bytes.length);
            
            ServletOutputStream outputStream  = response.getOutputStream();
            
            outputStream.write(bytes, 0, bytes.length);
            
            outputStream.flush();
            outputStream.close();

            %>
            
          
            
    </body>
</html>
