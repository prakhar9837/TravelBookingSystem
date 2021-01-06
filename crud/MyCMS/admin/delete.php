<!DOCTYPE html>
<html>
<head>
<style>
body{
    text-align: center;
    padding-left:200px;
    padding-top 400px

}
h1{
    text-align:center;
    padding-left:100px;
}
tr{
    padding-top:10px;
    padding-bottom:10px;
}
</style>
<title> Delete Employee</title>
<meta charset="UTF-8">
</head>
<body>
<form action="delete.php" method="post" enctype="multiple/form-data">
    <table width="800" style="align:center; border=2">
        <tr>
            <td clospan="6"><h1 style="text-align:center">Delete employee</h1></td>

        </tr>
        <tr>
            <td style="align:right"> <strong>SSN</strong></td>
            <td> <input type="text" name="ssn"/></td>
        </tr>
        <tr>
            <td style="align:right"><strong>Name</strong></td>
            <td> <input type="text" name="name"/></td>
        </tr>
        <tr style="padding-top:10px">
        <td colspan="6" style="align:center"><input type="submit" name="submit" value="DELETE"/></td>
        </tr>
    </table>
    </form>
    </body>
    </html>