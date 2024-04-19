<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>Client Satisfaction Measurement</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <!-- Main Header -->
    <div class="container mt-3">
            <?php include 'header.php'; ?>
    </div>

        <!-- Start of Form -->    
        <form action="process_form.php" method="post">

            <!-- Section 1: Department -->
            <div class="container mt-3">
                <div class="form-group">
                    <label for="department">Department:</label>
                    <select class="form-control" name="department" required id="departmentDropdown">
                        <option value="">Select Department</option>
                    </select>
                </div>
            </div>

            <!-- Section 2: Client Details -->
            <div class="container mt-3">
                <?php include 'client.php'; ?>
            </div>

            <!-- Section 3: CC Questions -->
            <div class="container mt-3">
                <?php include 'cc.php'; ?>
            </div>
            
            <!--<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cc1Options = document.querySelectorAll('input[name="cc1"]');
        const cc2Options = document.querySelectorAll('input[name="cc2"]');
        const cc3Options = document.querySelectorAll('input[name="cc3"]');
        const cc2Option5 = document.getElementById('cc2Option5');
        const cc3Option4 = document.getElementById('cc3Option4');

        cc1Options.forEach(function(option) {
            option.addEventListener('change', function() {
                if (this.value === 'option1' || this.value === 'option2' || this.value === 'option3') {
                    cc2Options.forEach(function(opt) {
                        opt.disabled = false;
                    });
                    cc3Options.forEach(function(opt) {
                        opt.disabled = false;
                    });
                    cc2Option5.disabled = true;
                    cc2Option5.checked = false;
                    cc3Option4.disabled = true;
                    cc3Option4.checked = false;
                } else {
                    cc2Options.forEach(function(opt) {
                        opt.disabled = true;
                        opt.checked = false;
                    });
                    cc3Options.forEach(function(opt) {
                        opt.disabled = true;
                        opt.checked = false;
                    });
                    cc2Option5.disabled = false;
                    cc3Option4.disabled = false;
                }
            });
        });

        document.getElementById('cc1Option4').addEventListener('change', function() {
            if (this.checked) {
                cc2Options.forEach(function(opt) {
                    opt.disabled = true;
                    opt.checked = false;
                });
                cc3Options.forEach(function(opt) {
                    opt.disabled = true;
                    opt.checked = false;
                });
                cc2Option5.disabled = false;
                cc2Option5.checked = true;
                cc3Option4.disabled = false;
                cc3Option4.checked = true;
            }
        });
    });
</script>-->




            <!-- Section 4: SQD -->
            <div class="container mt-3">
                <?php include 'sqd.php'; ?>
            </div>

            <!-- Section 5: Comment & Contact -->
            <div class="container mt-3">
                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" name="comment" id="commentField" maxlength="255"></textarea>
                </div>
                <div class="form-group">
                    <label for="contact">Contact:</label>
                    <textarea class="form-control" name="contact" id="contactField" maxlength="255"></textarea>
                </div>
            </div>
            
            <!-- Section 6: Captcha & Submit -->
            <div class="container mt-3">
                <?php include 'captcha.php'; ?>
            </div>

        </form>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script/script.js"></script>

</body>
</html>
