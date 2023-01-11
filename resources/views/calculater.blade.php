<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
    <style>

html {
  font-size: 62.5%;
  box-sizing: border-box;
  box-align: center;
}

*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: inherit;
  
}

.calculator {
  border: 1px solid rgb(92, 92, 92);
  border-radius: 5px;
  width: 500px;
  
}

.calculator-screen {
  width: 100%;
  height: 80px;
  border: none;
  background-color: #252525;
  color:white;
  text-align: left;
  padding-right: 20px;
  padding-left: 10px;
  font-size: 4rem;
  
}

button {
  height: 60px;
  font-size: 2rem!important;
  
}

.equal-sign {
  height: 98%;
  grid-area: 2 / 4 / 6 / 5;
}

.calculator-keys {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 20px;
  padding: 20px;
  
  
}
.margin{

    margin-top: 150px;

}

body{

    background-color: lightblue;

}
        </style>
</head>
<body>

    <form method="post" action="cal">
    @csrf
<center>
    <div class="margin">
    <div class="calculator card" >

        <h1>Calculator</h1>
        <input type="number" name="first" placeholder="firstvalue" class="calculator-screen z-depth-1" required> <br>
        <input type="number" name="second" placeholder="secondvalue" class="calculator-screen z-depth-1" required  ><br>
        <input type="text" value="@if(session()->has('r')){{session('r')}} @endif" placeholder="Output" class="calculator-screen z-depth-1"><br>
        <div class="calculator-keys">
        <input type="submit" name="math" value="+" class="operator btn btn-info">
        <input type="submit" name="math" value="/" class="btn btn-secondary">
        <input type="submit" name="math" value="-" class="btn btn-warning" >
        <input type="submit" name="math" value="*" class="all-clear function btn btn-danger btn-sm" >
        </center>
    </div>
</div>
</div>




    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>   
</body>
</html>