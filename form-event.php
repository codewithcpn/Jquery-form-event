<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <h2>Form Events</h2>
            <div class="col-md-12">
                <form class="sform" action="" method="POST">
                    <div class="bt-3 mt-3">
                        <label for='name'>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name" id="name">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for='email'>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email" id="email">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for='country'>Select country</label>
                        <select class="form-select" id="country" name="country">
                            <option value="Idnia">India</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="New Zeland">New Zeland</option>
                            <option value="South Africa">South Africa</option>
                            <option value="USA">USA</option>
                        </select>
                    </div>
                    <div class="mt-3 mt-3" id="insert" style="border:2px solid #010101">
                    </div>
                    <div class="mb-3 mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        $('#name, #email, #country').focus(function() {
            $(this).css('background-color', 'lime');
        });

        $('#name, #email, #country').blur(function() {
            $(this).css('background-color', '');
        });
        $('#country').change(function() {
            var a = $(this).val();
            $('#insert').html(a);
        });

        $('#name, #email').select(function() {
            $(this).css('background-color', 'yellow');
        });
    });
    </script>
</body>

</html>
