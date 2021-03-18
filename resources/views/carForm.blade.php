<!DOCTYPE html>
<html>
    <head>
            <title>Cars App</title>
    </head>
    <body>
        <form action="/cars" method="POST" enctype="multipart/form-data">
            @csrf
            Car make: <input type="text" required name="make" id="make"/> <br><br>
            Car model <input type="text" required name="model" id="model"/> <br><br>
            Produced on: <input type="date" required name="produced_on" id="produced_on"/> <br><br>
            <input type="submit" value="Save" name="save_btn"/>
        </form>
    </body>
</html>