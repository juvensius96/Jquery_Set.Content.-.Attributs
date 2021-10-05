<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<p></p>  
<input id="myInput" type="text" placeholder="Search..">
<br><br>

<table>
  <thead>
  <tr>
    <th>Nama Awal</th>
    <th>Nama Akhir</th>
    <th>Email</th>
  </tr>
  </thead>
  <tbody id="myTable">
  <tr>
    <td>Moyes</td>
    <td>Rafi</td>
    <td>Rafi@email.com</td>
  </tr>
  <tr>
    <td>Yusron</td>
    <td>Rafi</td>
    <td>Yusron@mail.com</td>
  </tr>
  <tr>
    <td>Juven</td>
    <td>Syndremo</td>
    <td>Juven@greatstuff.com</td>
  </tr>

  </tbody>
</table>
</body>
</html>
