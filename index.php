<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <nav class="topo"><img src="./images/User.png" alt="" width="50px" height="50px"><a>User icon</nav>
    <div class="conteudo">
        <div class="anotacoes">
            <div class="anotacao-single">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Sua nova anotação"></textarea>
            </div>
          
        </div>
        <div class="adicionar">
    <p>+</p>
        </div></div>
    <footer class="rodape"></footer>


</body>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
  var i= 0 ;
          $(function () {
                $('.adicionar').click(function(){
                    
                     if(i<8){
                        var el = '<div class="anotacao-single"><textarea name="" id="" cols="30" rows="10" placeholder="Sua nova anotação"></textarea></div>';
                        $('.anotacoes').append(el);
                        i++;
                  }else{
                      alert("Numero de anotações atingido no maximo");
                  }  })
          })
  </script>
</html>