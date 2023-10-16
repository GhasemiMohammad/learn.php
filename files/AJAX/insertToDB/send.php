<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>insert to DB</title>
</head>

<body>
    <form action="response.php" method="post" id="provinceForm">
        <label for="province">متن ورودی:</label>
        <input type="text" id="province" name="province" placeholder="متن خود را وارد کنید" required>
        <br>
        <button type="submit" name="submit">ارسال</button>
        <div id="result" class="result">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </form>
    <script src="../../../jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            let form = $("#provinceForm");
            let result = $("#result");
            form.submit(function(event) {
                event.preventDefault(); 
                result.css("display", "flex")
                $.ajax({
                    url: form.attr('action'),
                    method: form.attr('method'),
                    data: form.serialize(),
                    success: function(response) {
                        result.html(response);
                    }
                });
            });
        });
    </script>
</body>

</html>