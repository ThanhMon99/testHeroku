<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Register the courses</title>
    </head>
    <body>
        <form action="doRegister.php" method="post">
            <table>
                <tr>
                    <td>Your name</td>
                    <td><input type="text" name="txtName" id ="name"></td>
                    
                </tr>
                <tr>
                    <td>Course</td>
                    <td>
                        <select name="cbCourse">
                            <option value="C#">C#</option>
                            <option value="Java">Java</option>
                            <option value="Cloud">Cloud</option>                            
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Birthday</td>
                    <td>
                        <input type="date" name="birthday" id = "birthday">
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        Male <input type="checkbox" name="check_Male" value="Male">
                        Female <input type="checkbox" name="check_Female" value="Female"><br>
                    </td>
                </tr>
                <tr>
                    <td>Favorite</td> 
                    <td>
                        <input type="radio" name="fav" value="car" id="car">Car
                        <input type="radio" name="fav" value="book" id="book">book
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Register"></td>
                </tr>
            </table>
        </form>
    </body>
</html>