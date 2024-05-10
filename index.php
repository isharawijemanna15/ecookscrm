<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resource Allocation Predictive Analytics</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Resource Allocation Predictive Analytics</h1>
        <form id="resourceForm">
            <div>
                <label for="projectDuration">Project Duration (in weeks):</label>
                <input type="number" id="projectDuration" name="projectDuration" required>
            </div>
            <div>
                <label for="csvFile">Upload CSV File:</label>
                <input type="file" id="csvFile" name="csvFile" accept=".csv">
            </div>
            <button type="submit">Predict</button>
        </form>
        <div id="result"></div>
    </div>

    <script src="script.js"></script>
</body>
</html>
