<!DOCTYPE html>
<html>

<head>
    <title>Domain Checks</title>
</head>

<body>
    <form name="myForm" action="" onsubmit="return validateForm()" method="POST">
        NIM <input type="text" id="nim" name="name"> NIM harus 10 digit.<br>
        Semester <input type="text" id="sem" name="sem"> Semester tidak boleh
        kurang dari 1 dan lebih dari 12 <br>
        <input type="submit" value="Submit">
    </form>
    <script type="text/javascript">
        function validateForm() {
            var nim = document.myForm.nim.value;
            var sem = document.myForm.sem.value;
            if (nim.length != 10) {
                alert("NIM harus 10 digit");
                return false;
            }
            if ((sem < 1) || (sem > 12)) {
                alert("Semester harus diisi oleh 1-12");
                return false;
            }
            return true;
        }
    </script>
</body>

</html>