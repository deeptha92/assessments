<html>
    <title>
        Add Students
    </title>
    <body>
        <div align="center" style="width: 100%; margin-top:5%;">
            <h1>Student Registration </h1>
            </br></br>
            <form method="post" action="../scripts/SaveStudents.php">
                <table>
                    <tr>
                        <td>
                            Student Name:</br>
                        </td>  
                        <td>
                            <input type="text" name="name">
                            </br>
                            &nbsp;
                        </td>

                    </tr>

                    <tr>
                        <td>
                            Registration Number :</br>
                        </td>  
                        <td>
                            <input type="text" name="regno">
                            </br>
                            &nbsp;
                        </td>
                    </tr>

                    <tr>
                        <td>
                            NIC Number:</br>
                        </td>  
                        <td>
                            <input type="text" name="nic">
                            </br>
                            &nbsp;
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Email:</br>
                        </td>  
                        <td>
                            <input type="text" name="email">
                            </br>
                            &nbsp;
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Password:</br>
                        </td>  
                        <td>
                            <input type="text" name="password">
                            </br>
                            &nbsp;
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Re type Password:</br>
                        </td>  
                        <td>
                            <input type="text" name="repassword">
                            </br>
                            &nbsp;
                        </td>
                    </tr>

                </table>
                </br></br>
                <Button type="submit"> Add</button>
                <button type="reset"> Cancel</button>
            </form>
        </div>
    </body>
</html>

