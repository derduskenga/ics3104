<!DOCTYPE html>
<html>
    <head>
            <title>Cars App</title>
    </head>
    <body>
        <table style="width:60%">
            <tr>
              <th>Make</th>
              <th>Model</th>
              <th>Date of manufaturer</th>
              <th>Actions</th>
            </tr>
           
            @foreach ($cars as $car)
                <tr>
                    <td> {{$car->make}} </td>
                    <td>{{$car->model}}  </td>
                    <td> {{$car->produced_on}} </td>
                    <td>edit | delete | view </td>
                </tr>
            @endforeach

          </table>
    </body>
</html>