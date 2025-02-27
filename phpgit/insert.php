<?php
    include 'connect.php';

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(!empty($_POST['id']) && !empty($_POST['fname'] && !empty($_POST['lname']))){
            $insert = $con->prepare("INSERT INTO users VALUES (?,?,?)");
            $insert->bind_param("iss",$_POST['id'],$_POST['fname'],$_POST['lname']);

            if($insert->execute()){
                header('location:show.php');
            }else{
                echo "try again";
            }

        }else{
            echo "fields should not be empty";
        }
    }
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <form method="post" class="my-5">
            <div
                class="row justify-content-center align-items-center g-2">
                <div class="col-4">
                    <div class="form-floating mb-3">
                        <input
                            type="number"
                            class="form-control"
                            name="id"
                            id="id"
                            placeholder="" />
                        <label for="formId1">Id</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input
                            type="text"
                            class="form-control"
                            name="fname"
                            id="fname"
                            placeholder="" />
                        <label for="formId1">First Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input
                            type="text"
                            class="form-control"
                            name="lname"
                            id="lname"
                            placeholder="" />
                        <label for="formId1">Last name</label>
                    </div>
                    <button
                        type="submit"
                        class="btn btn-primary">
                        submit
                    </button>
                    <button
                        type="reset"
                        class="btn btn-primary">
                        Reset
                    </button>
                </div>
            </div>
        </form>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>