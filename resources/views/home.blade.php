<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    header{
        background-color: blue;
    }


    .container{
       width: 80%;
       margin: 0 auto;
       margin-bottom: 2rem;
    }

    nav{
       width: 100%;
       display: flex;
       justify-content: space-between;
       align-items: center;
       padding: 1rem;
    }

    ul{
       list-style-type: none;
    }

    li{
       color: black;
       display: inline;
       margin-left: 1rem;
    }

    a{
        text-decoration:none;
        color: black
    }

    h1{
        text-align: center
    }

    </style>
</head>
<body>
    <header>
        <div class="container"> 
            <nav>
                <div>
                     <h1>Laravel</h1>
                </div>
                <div>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">Chi siamo</a></li>
                        <li><a href="/faq">Faq</a></li>
                    </ul>
                </div>      
            </nav>
        </div> 
    </header>
    <main>
        <h1>Benvenuti in home</h1>
    </main>
</body>
</html>