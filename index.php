<html lang="en">
<head>
    <title>11240044</title>
</head>
<body>
    <table width="80%" border="0" cellspacing="0" cellpadding="0" align="center">
        
        <tr style="background-color: #004A99; color: white; vertical-align: middle;">
            
            <td width="200" align="center" style="padding: 10px;">
                <img src="images/DSC_0213.jpg" width="150" alt="Foto Profil" style="border: 2px solid white;">
            </td>
            
            <td style="padding-left: 20px; font-family: Arial, sans-serif;">
                <h1 style="margin: 0; font-size: 42px;">Muhamad Fardan .R</h1>
                <p style="margin: 5px 0; font-size: 22px;">Game Developer</p>
                <p style="margin: 5px 0; font-size: 16px;"><a link href="https://www.tiktok.com/@dannn.store2?_r=1&_t=ZS-91Gk5pwImI8">www.dannstore.com</p>
            </td>
        </tr>

        <tr>
            <td width="200" valign="top" style="padding-right: 10px;">
                <table width="100%" border="0" cellspacing="0" cellpadding="5" style="border-collapse: collapse; border: 1px solid #000;">
                    <tr style="background-color: #E0E0E0; border: 1px solid #000;">
                        <th align="left" style="padding: 8px;">Menu</th>
                    </tr>
                    <tr style="border: 1px solid #000;"> <td style="padding: 8px;"><a href="index.php">Beranda</a></td> </tr>
                    <tr style="border: 1px solid #000;"> <td style="padding: 8px;"><a href="index.php?menu=profil">Profil</a></td> </tr>
                    <tr style="border: 1px solid #000;"> <td style="padding: 8px;"><a href="index.php?menu=cv">Cv</a></td> </tr>
                    <tr style="border: 1px solid #000;"> <td style="padding: 8px;"><a href="index.php?menu=galeri">Galeri</a></td> </tr>
                </table>
            </td>
            
            <td valign="top" align="left" style="padding: 20px;">
                <?php
                // Cek apakah parameter 'menu' ada di URL
                if(ISSET($_GET["menu"])){
                    
                    // PERBAIKAN 1: 'Profil' diubah jadi 'profil' (sesuai link)
                    if($_GET["menu"] == "profil"){
                        // Anda harus membuat file 'profil.php' untuk di-include
                        include "profil.html";
    
                    }
                    
                    // PERBAIKAN 2: 'Cv' diubah jadi 'cv'
                    if($_GET["menu"] == "cv"){
                        // PERBAIKAN 3: 'include' tidak bisa untuk gambar.
                        // Gunakan tag <img> untuk menampilkan gambar.
                        echo '<img src="cv.png" alt="CV" width="100%">';
                    }
                    
                    // PERBAIKAN 4: Kesalahan sintaks 'menu" == "Galeri' diperbaiki
                    // 'Galeri' juga diubah jadi 'galeri'
                    if($_GET["menu"] == "galeri"){
                         include "galeri.html";
                    }

                } else {
                    // Halaman default jika tidak ada parameter 'menu'
                    echo "Selamat Datang di Website Muhamad Fardan .R";
                }
                ?>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center" style="padding: 20px; background-color: #333; color: white;">
                Terimakasih
            </td>
        </tr>
    </table>
</body>

</html>
