<!doctype html>
<html lang="en">


<head>
    <title>Hungry Partner</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    .hungry {
        font-size: 25px;
    }
</style>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <?php
        include('auth/config.php');
        
        if( isset($_POST['submit']) ) :
            if(addrecipe($_POST)) :
              // berhasil
              echo "<script>
                    alert('Resep kamu berhasil dibuat');
                    location.href = 'tambah.php';
                  </script>";
            else :
              // gagal
            endif;
          endif;
        
        include('sidebar.php');

        ?>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <h1>Add Recipe</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12 col-md-8 col-lg-7">
                        <div class="mb-3">
                            <label for="namaresep" class="form-label">Judul Resep</label>
                            <input type="text" class="form-control" id="namaresep" placeholder="Isi judul resep"
                                name="title">
                        </div>
                        <div class="mb-3">
                            <label for="caption" class="form-label">Caption</label>
                            <input type="text" class="form-control" id="caption" placeholder="Isi caption resep"
                                name="caption">
                        </div>
                        <div class="mb-3">
                            <label for="bahan" class="form-label">Bahan-bahan</label>
                            <textarea id="bahan" name="bahan"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="cara" class="form-label">Cara Pembuatan</label>
                            <textarea id="cara" name="cara"></textarea>
                        </div>
                        <div>
                            <div class="mb-3">
                                <label for="foto" class="form-label" name="foto">Foto Resep</label>
                                <input type="file" name="foto" id="foto" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary" name="submit">Add recipe</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
    <script>
        function createCKEditor(elemen) {
            ClassicEditor
                .create(elemen, {
                    toolbar: ['heading', '|', 'bold', 'italic', 'bulletedList', 'numberedList'],
                    heading: {
                        options: [
                            { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                            { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                            { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                        ]
                    }
                })
                .catch(error => {
                    console.error(error);
                });
        }
        createCKEditor(document.querySelector('#bahan'));
        createCKEditor(document.querySelector('#cara'));
    </script>

</body>

</html>