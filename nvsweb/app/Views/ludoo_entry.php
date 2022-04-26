<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ludo Game Entry</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 500px;
        }

        .error {
            display: block;
            padding-top: 5px;
            font-size: 14px;
            color: red;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <form method="post" id="add_create" name="add_create" action="<?= site_url('/ludoo-entry-Submitform') ?>">
            <div class="form-group">
                <label>Team Members</label>
                <select name="tmembers" class="form-control" id="teammembers">
                    <option selected="selected" value="0">--Select--</option>
                </select>
            </div>
            <div class="form-group">
                <label>Team Numbers</label>
                <select name="tno" class="form-control" id="teamno">
                    <option selected="selected" value="0">--Select--</option>
                </select>
            </div>
            <div class="form-group">
                <label>Team Name</label>
                <select name="tname" class="form-control" id="teamname">
                    <option selected="selected" value="0">--Select--</option>
                </select>
            </div>

            <div class="form-group">
                <label>Margin</label>
                <input type="number" name="margin" class="form-control">
            </div>
            <div class="form-group">
                <label>Win Date</label>
                <input type="datetime-local" name="wdate" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Add Entry</button>
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
    <script>
        if ($("#add_create").length > 0) {
            $("#add_create").validate({
                rules: {
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,
                        maxlength: 60,
                        email: true,
                    },
                },
                messages: {
                    name: {
                        required: "Name is required.",
                    },
                    email: {
                        required: "Email is required.",
                        email: "It does not seem to be a valid email.",
                        maxlength: "The email should be or equal to 60 chars.",
                    },
                },
            })
        }
    </script>
    <script>
        var subjectObject = {
            "Amit & Bijendra": {
                "101": ["Ludo King"],
            },
            "Pankaj & Rameshvar": {
                "102": ["Ludoo Champ"],
            }
        }
        window.onload = function() {
            var teammembersSel = document.getElementById("teammembers");
            var teamnoSel = document.getElementById("teamno");
            var teamnameSel = document.getElementById("teamname");
            for (var x in subjectObject) {
                teammembersSel.options[teammembersSel.options.length] = new Option(x, x);
            }
            teammembersSel.onchange = function() {
                //empty Chapters- and Topics- dropdowns
                teamnameSel.length = 1;
                teamnoSel.length = 1;
                //display correct values
                for (var y in subjectObject[this.value]) {
                    teamnoSel.options[teamnoSel.options.length] = new Option(y, y);
                }
            }
            teamnoSel.onchange = function() {
                //empty Chapters dropdown
                teamnameSel.length = 1;
                //display correct values
                var z = subjectObject[teammembersSel.value][this.value];
                for (var i = 0; i < z.length; i++) {
                    teamnameSel.options[teamnameSel.options.length] = new Option(z[i], z[i]);
                }
            }
        }
    </script>

</body>

</html>