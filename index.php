<html>
<?php
$result = "";
IF (isset($_get['submit']))
{
    IF (!isset($_get['height']))
    {
        echo "Please enter a height.";
    }
    IF ($_get['height']<0)
    {
        echo "Height invalid. Please enter another height, greater than 0.";
    }
    ELSE
    {
        $height_in_ft = $_get['height']/12;
        $height_in_ft = $_get['height']%12;
        IF ($height_in_ft < 5)
        {
            echo "You are average height.";
         }
        IF ($height_in_ft <6)
        {
            echo "Dude, you are so tall!";
        }
        $result = $height_in_ft . "'" . $height_in_in. '"';

    }
}
?>
    <head>
    </head>
    <body>
        <form method="get">
        <h1> Height Calculator</h1>
        <label for="height"> Please Enter Your Height in Inches</label>
        <input type = "text" size=8 name ="height">
        <input type = "button" name="submit" value="submit"> <br><br>
        <label>Results: </label>
        <input type="text" name="result" style="backgorund-color: #ffffed" value="<?php echo $result?>>

    </form>
        </body>
</html>

