<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สูตรคูณ</title>
</head>
<body>
    <link rel="stylesheet" href="work.css">
    <div class="container">
        <h1>สูตรคูณ</h1>
        <label for="numberInput">กรุณาใส่ตัวเลข:</label>
        <input type="number" id="numberInput" min="1" max="100">
        <button onclick="generateTable()">แสดงตารางสูตรคูณ</button>
        
        <div id="result"></div>
    </div>
    
    <script>
        function generateTable() {
            const number = parseInt(document.getElementById('numberInput').value);
            const resultDiv = document.getElementById('result');
            resultDiv.innerHTML = ''; // Clear previous results
            
            if (isNaN(number)) {
                resultDiv.innerHTML = '<p style="color: red;">กรุณาใส่ตัวเลขที่ถูกต้อง</p>';
                return;
            }

            let tableHtml = '<table class="table">';
            tableHtml += '<tr><th>คูณ</th><th>ผลลัพธ์</th></tr>';
            for (let i = 1; i <= 12; i++) {
                tableHtml += `<tr><td>${number} × ${i}</td><td>${number * i}</td></tr>`;
            }
            tableHtml += '</table>';
            resultDiv.innerHTML = tableHtml;
        }
    </script>
</body>
</html>
