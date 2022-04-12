<!DOCTYPE HTML>
<html>

<head>
    <title>RUBRIC</title>
</head>

<?php
print date('d/m/y');
?>

<body bgcolor="FF89FF">

    <form action="get_form_script.php" method="POST">


        <legend> <strong> <marquee> My Online Scheme Book .... </marquee> </strong> </legend>
        <div align="center" <label for="Rubric Page">
            <h1> Rubric Page </h1>
            </label>
        </div>

        <table border="1" align="center" bgcolor="ab44ff">

            <tr>
                <td>Name : </td>
                <td><input type="text" name="Name" placeholder="Your first Name here.">

                </td>
            </tr>

            <tr>
                <td>Surname : </td>
                <td><input type="text" name="Surname" placeholder="Give us your second name."></td>
            </tr>

            <tr>
                <td>Phone : </td>
                <td><input type="tel" name="telephone" placeholder="Telephone OR Cellphone number."></td>
            </tr>
            
             <tr>
                <td>Email : </td>
                <td><input type="email" name="email" placeholder="Put your email here if you have it."></td>
            </tr>

            <tr>
                <td>EC Number : </td>
                <td><input type="text" name="ec_number" placeholder="Put your ec-number here."></td>
            </tr>

            <tr>
                <td>Level : </td>
                <td>

                    <select name="levels">

<option value="ecdA">ECD A</option>
<option value="ecdB">ECD B</option>
<option value="grd1">GRADE 1</option>
<option value="grd2">GRADE 2</option>
<option value="grd3">GRADE 3</option>
<option value="grd4">GRADE 4</option>
<option value="grd5">GRADE 5</option>
<option value="grd6">GRADE 6</option>
<option value="grd7">GRADE 7</option>
<option value="form1">FORM 1</option>
<option value="form2">FORM 2</option>
<option value="form3">FORM 3</option>
<option value="form4">FORM 4</option>
<option value="form5">FORM 5</option>
<option value="form6">FORM 6</option>


</select>

                </td>








            </tr>

            <tr>
                <td>Name of School : </td>
                <td><input type="text" name="school" placeholder="Name of your school."></td>
            </tr>

            <tr>
                <td>Region : </td>
                <td> <select name="region">

<option value="rur">Matabeleland North</option>
<option value="urb">Matabeleland South</option>
<option value="metro">Manicaland</option>
<option value="rur_bus_cent">Midlands</option>
<option value="urb_twn">Mashonaland East</option>
<option value="per_urb">Mashonaland West</option>
<option value="grow">Mashonaland Central</option>
<option value="per_urb">Bulawayo</option>
<option value="grow">Harare</option>

</select>

                </td>
            </tr>

            <tr>
                <td>School Type : </td>
                <td> <select name="schools">


<option value="metro">Metropolitan</option>
<option value="metro">Rural</option>
<option value="rur_bus_cent">Rural Business Center</option>
<option value="urb_twn">Urburn Township</option>
<option value="per_urb">Peri-Urburn</option>
<option value="grow">Rural Growth point</option>

</select>

                </td>
            </tr>


            <tr>
                <td>

                    <input type="submit" name="send" value="Next">

                </td>
                <td>


                    <button name="reset" value="CLEAR" type="reset"> CLEAR FORMS </button>

    </form>


    </tr>
    </td>
    </table>






</body>

</html>