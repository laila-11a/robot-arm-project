<!DOCTYPE html>
<html>
<head>
    <title>Robot Arm Control Panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Robot Arm Control Panel</h1>
    <div class="sliders">
        <label>Motor 1: <input type="range" id="m1" min="0" max="180" value="90"></label><br>
        <label>Motor 2: <input type="range" id="m2" min="0" max="180" value="90"></label><br>
        <label>Motor 3: <input type="range" id="m3" min="0" max="180" value="90"></label><br>
        <label>Motor 4: <input type="range" id="m4" min="0" max="180" value="90"></label><br>
        <label>Motor 5: <input type="range" id="m5" min="0" max="180" value="90"></label><br>
        <label>Motor 6: <input type="range" id="m6" min="0" max="180" value="90"></label><br>
        <button onclick="savePose()">Save Pose</button>
        <button onclick="loadData()">Load Poses</button>
    </div>

    <div id="tableArea"></div>

    <script src="script.js"></script>
</body>
</html>