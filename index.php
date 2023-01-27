<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row vh-100 justify-content-around align-items-center">
            <div class="card p-5" style="width: 28rem;">
                <img class="mb-2 img" src="images/devchallenges.svg" alt="" style="width: 10rem;">
                <h4 >Join thousands of learners from around the world</h4>
                <p class="text">Master web development by making real-life projects. There are multiple paths for you to choose</p>              
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class=" mt-3 mb-2">                    
                        <input type="email" class="form-control" placeholder="name@example.com">
                    </div>
                    <div class=" mt-3 mb-2">                   
                        <input type="password" class="form-control" placeholder="password">
                    </div>                                
                    <input type="submit" class="form-control btn btn-primary mt-2" value="Login" />
                </form>
                <p class="text-center mt-3">or continue with these social profile</p>
                <div class="d-flex justify-content-center gap-4">
                    <img src="images/Google.svg" alt="">
                    <img src="images/Facebook.svg" alt=""/>
                    <img src="images/Twitter.svg" alt=""/>
                    <img src="images/Gihub.svg" alt=""/>
                </div>
                <p class="mt-3 text-center">Adready a member? <span class="text-primary"> <a class="text-decoration-none" href="registro.php">Register</a>  </span></p>
            </div>
        </div>
    </div>
</body>

</html>