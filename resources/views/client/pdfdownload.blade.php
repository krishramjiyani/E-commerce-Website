<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10 Generate PDF Example - fundaofwebit.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <br/>
    <br/>

    <table class="table table-bordersed">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Fullname</th>
                <th>Address</th>
                <th>State</th>
                <th>Zip</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Date</th>
               
            </tr>

        </thead>
        <tbody>

            
        <tr>
            <td>{{ $o_id }}</td>
            <td>{{ $fullname }}</td>
            <td>{{ $address }}</td>
            <td>{{ $state }}</td>
            <td>{{ $zip }}</td>
            <td>{{ $qty }}</td>
            <td>{{ $t_price }}</td>
            <td>{{ $date }}</td>

           
        </tr>
           
        </tbody>
    </table>
    

</body>
</html>