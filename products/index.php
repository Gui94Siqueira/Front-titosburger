<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titos Burger - Products</title>
    <link rel="stylesheet" href="../assets/css/mdb.min.css">
</head>

<body>
    <header>
        <?php include_once("../includes/header.php"); ?>
    </header>

    <main class="container-fluid">
        <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-itens-center">
                <h6>Products list</h6>

                <button class="btn btn-success">
                    New product
                </button>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product name</th>
                        <th>Price</th>
                        <th>category</th>
                        <th>status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="list-products"></tbody>

            </table>
        </div>
        </div>
    </main>

    <footer>
        <?php include_once("../includes/footer.php") ?>
    </footer>

    <script>
        fetch('http://localhost/api_titosburger/products/listAll.php')
            .then(response => response.json())
            .then((response) => {
                let auxTable = "";
                //console.log(response);
                response.Products.map(product => {
                    auxTable += `<tr>
                                    <td>${product.id_product}</td>
                                    <td>${product.product_name}</td>
                                    <td>${product.price}</td>
                                    <td>${product.id_category}</td>
                                    <td>${product.id_status}</td>
                                    <td>
                                        <button onclick="edit(${product.id_product})" class="btn btn-sm btn-primary">Edit</button>
                                        <button onclick="pDelete(${product.id_product})"class="btn btn-sm btn-danger">Delete</button>
                                    </td>
                                </tr>
                                `;
 
                    console.log(product);
                })
 
                document.getElementById("list-products").innerHTML = auxTable;
 
            })

            function edit(id_product) {

            }

            function pDelete(id_product) {
                fetch('http://localhost/api_titosburger/products/delete.php?id=' + id_product, {
                    method: 'DELETE'
                })
                .then(response => response.json())
                .then(response => console.log(response))
            }
            
    </script>
</body>

</html>