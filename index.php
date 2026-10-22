<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate House Electricity Bill</title>
</head>

<body>

    <h1 style="text-align: center;">Calculate House Electricity Bill</h1>
    <!-- we call this as inline style -->

    <div>

        <table border="1">
            <tr>
                <th>Block Tariff (per month)</th>
                <th>Unit</th>
                <th>Rate</th>
            </tr>
            <tr>
                <td>For the first 200kWh (1-200 kWh) per month</td>
                <td>1 - 200kWh</td>
                <td>0.218</td>
            </tr>

            <tr>
                <td>For the next 100 kWh (201 - 300 kWh) per month</td>
                <td>201 – 300 kWh</td>
                <td>0.344</td>
            </tr>

            <tr>
                <td>For the next 300 kWh (301 – 600 kWh) per month</td>
                <td>301 – 600 kWh</td>
                <td>0.516</td>
            </tr>

            <tr>
                <td>For the next 300 kWh (601 – 900 kWh) per month</td>
                <td>601 – 900 kWh</td>
                <td>0.546</td>
            </tr>

            <tr>
                <td>For the next kWh (901 kWh onwards) per month</td>
                <td>901 kWh onwards</td>
                <td>0.571</td>
            </tr>

            <tr>
                <td colspan="3">The minimum monthly chafe is RM300</td>
            </tr>
        </table>

    </div>

    <div>

        <form action="calculate_bill.php" method="post">

            <label for="first">Enter your first 200kWh (1-200 kWh) per month:</label>
            <input type="number" id="first" name="first" required>
            <br>
            <label for="second">Enter next 100 kWh (201 - 300 kWh) per month:</label>
            <input type="number" id="second" name="second" required>
            <br>
            <label for="third">Enter next 300 kWh (301 – 600 kWh) per month:</label>
            <input type="number" id="third" name="third" required>
            <br>
            <label for="fourth">Enter next 300 kWh (601 – 900 kWh) per month:</label>
            <input type="number" id="fourth" name="fourth" required>
            <br>
            <label for="fifth">Enter next kWh (901 kWh onwards) per month:</label>
            <input type="number" id="fifth" name="fifth" required>
            <br>
            <button type="submit">Calculate Bill</button>
            <button type="reset">Reset</button>

        </form>




    </div>

</body>

</html>