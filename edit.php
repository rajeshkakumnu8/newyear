<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>On/Off Switch</title>
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 30px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: 0.3s;
            border-radius: 30px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 22px;
            width: 22px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: 0.3s;
            border-radius: 50%;
        }

        input:checked + .slider {
            background-color: #4CAF50;
        }

        input:checked + .slider:before {
            transform: translateX(28px);
        }
    </style>
</head>
<body>

<h2>On/Off Switch</h2>

<label class="switch">
    <input type="checkbox" id="toggleSwitch">
    <span class="slider"></span>
</label>

<p>Status: <span id="statusText">OFF</span></p>

<script>
    document.getElementById("toggleSwitch").addEventListener("change", function() {
        let statusText = document.getElementById("statusText");
        if (this.checked) {
            statusText.textContent = "ON";
            console.log("Switch is ON");
        } else {
            statusText.textContent = "OFF";
            console.log("Switch is OFF");
        }
    });
</script>

</body>
</html>
