<?php session_start(); ?>

<html>
<head>
    <link rel="stylesheet" href="style2.css">
    <meta charset="utf-8">
    <title>Kayıt</title>

</head>
<script>
    function ekle() {
        var ad = document.form1.ad.value;
        var soyAd= document.form1.soyad.value;
        var dersAdi = document.form1.dersAd.value;
        var dersSaat = document.form1.dersSure.value;
        var tablo = document.getElementsByTagName('table')[0];

        if ( ad == ""){
            window.alert("Öğretim üyesinin Adı alanı boş bırakılamaz ...")
        }else if (soyAd == ""){
            window.alert("Öğretim Üyesinin SoyAdı alanı boş bırakılamaz ...")
        }else if (dersAdi == ""){
            window.alert("Ders Adı alanı boş bırakılamaz ...")
        }else if (dersSaat == ""){
            window.alert("Ders Süresi alanı boş bırakılamaz ...")
        }else{

            var yeniSatir = tablo.insertRow(1);

            var yeniSutun1 = yeniSatir.insertCell(0);
            var yeniSutun2 = yeniSatir.insertCell(1);
            var yeniSutun3 = yeniSatir.insertCell(2);
            var yeniSutun4 = yeniSatir.insertCell(3);

            yeniSutun1.innerHTML = ad;
            yeniSutun2.innerHTML = soyAd;
            yeniSutun3.innerHTML = dersAdi;
            yeniSutun4.innerHTML = dersSaat;

        }

    }

</script>
<body>
<div class="div1">
    <div class="div2">

        <div class="div3">
            <form class="form1" name="form1">
                <fieldset>
                    <legend > <b>KAYITLAR </b></legend>
                    <p>  Öğretim Üyesinin Adı :  <input type="text" class="input" name="ad"><br><br>
                        Öğretim Üyesinin Soyadı : <input type="text" class="input" name="soyad"><br><br>
                        Verdiği Ders : <input type="text" class="input" name="dersAd"><br><br>
                        Dersin Süresi : <input type="text" class="input" maxlength="1" name="dersSure"><br><br>

                    </p>
                    <input  class="inp1" type="button" onclick="ekle()" value="Kaydet">
                    <input  class="inp2" type="submit" value="Hazırla">

                </fieldset>
            </form>
        </div>
        <div class="tablo">
            <table class="tbl1">
                <caption><b>KAYITLAR</b></caption>

                <tr>
                    <th>Öğretim Üyesinin Adı</th>
                    <th>Öğretim Üyesinin Soyadı</th>
                    <th>Verdiği Ders</th>
                    <th>Dersin Süresi</th>

                </tr>

            </table>

        </div>
    </div>

</div>




</body>




</html>
