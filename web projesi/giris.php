<html>

<body>
 <div >
   <p>
       <?php
         $kullanıcıAdi =$_POST["kullaniciadi"];
         $parola =$_POST["parola"];
         if($kullanıcıAdi && $parola)
         {
            if($kullanıcıAdi == "b211210016@sakarya.edu.tr" && $parola=="b211210016")
            {  
                echo "HOŞGELDİN ". $kullanıcıAdi;
        
            }
            else
            {
                header("location:login.html"); 
        
            }
         } 
         else 
         {
          header("location:login.html"); // veriler boşsa sayfaya geri gönderir
         }
       ?>
   </p>

 </div>


</body>
</html>