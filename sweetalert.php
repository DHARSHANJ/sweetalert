<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweetalert</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    /* CSS to hide the content */
    .btnDownload {
        position: absolute;
        border-radius: 25px;
        left: 25px; /* Adjust as needed */
        top: 25px;
    }

    /* Media query for responsiveness */
    @media screen and (max-width: 768px) {
        .btnDownload {
            position: absolute;
            left: 25px; /* Adjust as needed */
            top: 25px;
        }
    }
</style>
<body>

<button onclick="showSweetAlert()" class="btn btn-rounded btn-outline-warning shadow btnDownload">Show SweetAlert</button>

<!-- Include jQuery and Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Include SweetAlert2 JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    function showSweetAlert() {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Successful'
        });
    }
</script>

</body>
</html>
