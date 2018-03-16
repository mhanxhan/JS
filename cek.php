<b style="font-size: 20px;">KONTAK SAYA VIA EMAIL</b>
<hr><br>

<form action="<?php echo $PHP_SELF; ?>" method="POST">
<span style="color: black; font-family: t; font-size: x-small;"><b>Nama</b></span> <span style="color: red;"><small>*</small></span><br>
<input  name="nama" size="30" type="text" value="" />
<br>
<span style="color: black; font-family: t; font-size: x-small;"><b>Email</b></span> <span style="color: red;"><small>*</small></span><br>
<input  name="email" size="30" type="text" value="" />
<br>
<span style="color: black; font-family: t; font-size: x-small;"><b>Subjek</b></span> <span style="color: red;"><small>*</small></span><br>
<input  name="subject" size="30" type="text" value="" />
<br>
<span style="color: black; font-family: t; font-size: x-small;"><b>Pesan</b></span> <span style="color: red;"><small>*</small></span><br>
<textarea  cols="50"  name="message" rows="5"></textarea>
<br>
<input  type="submit" value="Kirim"/><input type="reset" value="Reset" />
</form>

<?php
$to = "afrizalnehe@yahoo.co.id" ;          
$subject = $_REQUEST['subject'];
$email = $_REQUEST['email'] ;
$message = $_REQUEST['message'] ;
$nama = $_REQUEST['nama'] ;
$headers = "From: $nama<$email>";
if(empty($email)||empty($subject)||empty($message)|| empty($headers))
{
print "<font Color='Chocolate'> <b>Isi semua Form </b></font>";
}else
{
$sent = mail($to, $subject, $message, $headers) ;
if($sent)
{
print "<font Color='Chartreuse'>Email Anda telah terkirim <img src='http://dhost.info/afrizal/ceklist.jpg'>";
}
else
{print "Maaf Email tidak Dapat dikirim."; }
}
?> 
