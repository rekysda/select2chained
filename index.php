<?php include"koneksi.php";?>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="select2.css" rel="stylesheet"/>
    <script src="select2.js"></script>
    <script src="jquery.chained.js"></script>
</head>
<body>
<script type="text/javascript">
$(document).ready(function()
{
 <!-- handle event provinces ketika nilainya di ganti -->
 $("#provinces").change(function() {
  <!-- mendapatkan value dari combobox -->
  var provinces_id = $(this).val();
  if (provinces_id != "")
  {
   <!-- Request data regencies berdasarkan province_id yang dipilih -->
   $.ajax({
    type:"post",
    url:"getkota.php",
    data:"id="+ provinces_id,
    success: function(data){
     $("#regencies").html(data);
    }
   });
  }
 });
});
</script>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-4">
    <div class="form-group">
        <label for="exampleInputEmail1">Propinsi</label>
        <select name="provinces" id="provinces">
 <option value="">Pilih Propinsi</option>
<?php
$query=mysql_query("select * from provinces");
while ($data=mysql_fetch_array($query))
{
?>
<option value="<?php echo $data['id'];?>"><?php echo $data['name'];?></option>
<?php }?>
</select>
    </div>
      <div class="form-group">
          <label for="exampleInputEmail1">Kota</label>    
          <select name="regencies" id="regencies">
 <option selected="selected">Pilih Kota</option>
</select>
        </div>
</div>
</body>