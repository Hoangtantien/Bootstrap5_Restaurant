
   
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant website</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom border-dark">
    <div class="container-fluid ">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item mx-3">
            <a class="nav-link text-danger fw-bolder" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link text-danger fw-bolder" href="admin.php">Admin</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link text-danger fw-bolder" href="categories.php">Categories</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link text-danger fw-bolder" href="food.php" >Food</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link text-danger fw-bolder" href="order.php" >Order</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link text-danger fw-bolder" href="#" >Logout</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
<!-- Content  -->
  <div class="bg-gray-light ">
    <div class="p-5 ">
      <h2 class="px-5  fw-bolder">
        Manage Orders
      </h2>
    </div>
    <div class="px-5 mx-4 pb-5">
        <button class="btn btn-primary px-5 mx-4" type="submit">Add New User</button>
    </div>
    
    
  <div class="table-responsive px-5 mx-5 pb-5">
    <table class="table table-sm table-borderless">
      <thead>
        <tr class="border-bottom">
          <th scope="col">S.N</th>
          <th scope="col">Food</th>
          <th scope="col">Price</th>
          <th scope="col">Qty</th>
          <th scope="col">Total</th>
          <th scope="col">Order date</th>
          <th scope="col">Status</th>
          <th scope="col">Customer Name</th>
          <th scope="col">Contact</th>
          <th scope="col">Email</th>
          <th scope="col">Address</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Burger</td>
          <td>10$</td>
          <td>2</td>
          <td>20</td>
          <td>2020-10-29
              09:07:17
          </td>
          <td class="text-success">
              Delivered
          </td>
          <td class="width-100">Tien</td>
          <td> 123456</td>
          <td>abc@gmail.com</td>
          <td>Ha noi</td>
          <td>
-          <button class="btn btn-success"> Update  </button>
          <button class="btn btn-danger"> Order </button>
          </td>   
        </tr>
        
        <tr>
            <th scope="row">1</th>
            <td>Momo</td>
            <td>10$</td>
            <td>2</td>
            <td>20</td> 
            <td>2020-11-30
                04:07:17
            </td>
            <td class="text-success">
                Delivered
            </td>
            <td>Tien</td>
            <td> 456789 </td>
            <td>tien@gmail.com</td>
            <td>Ha noi</td>
            <td>
  -          <button class="btn btn-success"> Update  </button>
            <button class="btn btn-danger"> Order </button>
            </td>   
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Pizza</td>
            <td>10$</td>
            <td>2</td>
            <td>20</td>
            <td>2020-11-30
                04:07:17
            </td>
            <td class="text-danger">
                Cancelled
            </td>
            <td>Tien</td>
            <td> 987654</td>
            <td>abc@gmail.com</td>
            <td>Ha noi</td>
            <td>
  -          <button class="btn btn-success"> Update  </button>
            <button class="btn btn-danger"> Order </button>
            </td>   
          </tr>
      </tbody>
    </table>
    </div>
  </div>
  <!-- Copy right -->
  <div class="no-copy">
        All rights reserved. Designed by <span>Hoang Tan Tien</span>
    </div>
    <!--JS-->
    <script src="js/bootstrap.min.js"></script>
</body>
</body>
</html>
