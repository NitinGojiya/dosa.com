<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Part of Div</title>
</head>
<body>

    <div id="contentToPrint">
        <h1>Printable Area</h1>
        <p>This is the content inside the div that will be printed.</p>
    </div>

    <div>
        <h1>Other Content</h1>
        <p>This content will not be printed.</p>
    </div>

    <button onclick="printDiv('contentToPrint')">Print Content</button>

    <script>
        function printDiv(divId) {
            var divContent = document.getElementById(divId).innerHTML;
            var printWindow = window.open('', '', 'height=600,width=800');
            printWindow.document.write('<html><head><title>Print</title>');
            printWindow.document.write('</head><body>');
            printWindow.document.write(divContent);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        }
    </script>

</body>
</html>
