<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
    <link rel="stylesheet" href="cnd/css/container.css">
    <link rel="stylesheet" href="cnd/css/loader.css">
    <style>
    body {
        background-color: lightblue;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

/* Style table headers and table data */
th, td {
  text-align: center;
  padding: 16px;
}

th:first-child, td:first-child {
  text-align: left;
}

/* Zebra-striped table rows */
tr:nth-child(even) {
  background-color: #f2f2f2
}

.fa-check {
  color: green;
}

.fa-remove {
  color: red;
} 
</style>
<script type="text/javascript" src="cnd/js/loader.js"></script>
</head>
<body>
    <div class="loader"></div>
    <div class="container">
     <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <table>
        <tr>
            <th style="width:50%">Features</th>
            <th>Free</th>
            <th>Pro</th>
            <th>Premium</th>
        </tr>
        <tr>
            <td>Note Limit</td>
            <td><i>25</i></td>
            <td><i>100</i></td>
            <td><i>1000</i></td>
        </tr>
        <tr>
            <td>Cloud Storage</td>
            <td><i>2 GB</i></td>
            <td><i>10 GB</i></td>
            <td><i>50 GB</i></td>
        </tr>
        <tr>
            <td>No Ads</td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
        </tr>
    </div>
</table> 
</body>
</html>
