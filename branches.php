<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Branches - YouCare Hospital</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background: #0c4f21;
            color: white;
            padding: 20px;
            text-align: center;
        }
        h1 {
            margin: 0;
        }
        .container {
            max-width: 900px;
            margin: 30px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .branch {
            border-bottom: 1px solid #ddd;
            padding: 15px 0;
        }
        .branch:last-child {
            border-bottom: none;
        }
        .branch h2 {
            margin: 0;
            color: #0c4f21;
        }
        .branch p {
            margin: 5px 0;
            color: #555;
        }
        .back-btn {
            display: inline-block;
            background-color: #0c4f21;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }
        .back-btn:hover {
            background-color: #0a3c19;
        }
    </style>
</head>
<body>
    <header>
        <h1>Our Branches</h1>
        <p>Find a YouCare Hospital branch near you</p>
    </header>

    <div class="container">
        <div class="branch">
            <h2>Los Angeles Branch</h2>
            <p>📍 200 W Olympic Blvd, Los Angeles, CA 90015, USA</p>
            <p>📞 (213) 555-0100</p>
        </div>
        <div class="branch">
            <h2>Miami Branch</h2>
            <p>📍 123 Biscayne Blvd, Miami, FL 33132, USA</p>
            <p>📞 (305) 555-0101</p>
        </div>
        <div class="branch">
            <h2>New York Branch</h2>
            <p>📍 789 5th Ave, New York, NY 10022, USA</p>
            <p>📞 (212) 555-0102</p>
        </div>
        <div class="branch">
            <h2>Seattle Branch</h2>
            <p>📍 456 Pine St, Seattle, WA 98101, USA</p>
            <p>📞 (206) 555-0103</p>
        </div>
        <div class="branch">
            <h2>Washington Branch</h2>
            <p>📍 1600 Pennsylvania Ave NW, Washington, DC 20500, USA</p>
            <p>📞 (202) 555-0104</p>
        </div>

        <!-- Back to Home Button -->
        <a href="index.php" class="back-btn">← Back to Home</a>
    </div>
</body>
</html>
