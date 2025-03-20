
<?php
define('MAX','3');

?>

<!DOCTYPE html>
<html lang="ja">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>
     <link rel="stylesheet" href="{{ asset('css/products.css') }}">
</head>

<body>
         <header>
        mogitate<dr>
    </header>
        <div class="flexbox-container">
            <main>
        <h2>商品一覧</h2>
        <input type="text"  >
        <button03 type="submit">検索</button03>
        
    </main>
            <aside >
                <div align="right">
                <button01 type="button" name="show" onclick="location.href='/register'">
                  +商品を追加
                </button01>
               </div>


    <div class="shouhinn">
        <div class="item">
           
            <div class="absolute">
                 <button type="button" name="show" onclick="location.href='/productId'">
            <img src= "./img/muscat.png"  >
            <P style="text-align: left">シャインマスカット　　　¥1400</p>
         
            </button>
             </div> 
            
        </div>

        <div class="item">
            <div class="absolute">
                  <button type="button" name="show" onclick="location.href='/productId'"> 
                    <img src="img/strawberry.png" >
                    <p style="text-align: left">ストロベリー　　　　¥1200</p>
                  
                 </button>
            </div>
            
        </div>

        <div class="item">
            <div class="absolute">
                 <button type="button" name="show" onclick="location.href='/productId'">
            <img src="./peach.png" >
            <p style="text-align: left">ピーチ　　　　　　　　¥1000</p>
            
             </button>
            </div>
            
        </div>

        <div class="item">
            <div class="absolute">
                 <button type="button" name="show" onclick="location.href='/productId'">
            <img src="./orange.png" >
             <p style="text-align: left">オレンジ　　　　　　　　¥850</p>
             
             </button>
            </div>
           
        </div>

        <div class="item">
            <div class="absolute">
                 <button type="button" name="show" onclick="location.href='/productId'">
            <img src="./kiwi.png">
             <p style="text-align: left">キウイ　　　　　　　　¥800</P>
            
             </button>
            </div>
           
        </div>

        <div class="item">
            <div class="absolute">
                 <button type="button" name="show" onclick="location.href='/productId'">
            <img src="./watermelon.png">
                        <p style="text-align: left">スイカ　　　　　　　　¥700</p>
                       
             </button>
            </div>

        </div>

    </div>
<!-- 商品の情報を記入 -->
    </aside>
        </div>
        <footer>
            
        <ul>
1
<a href=”page/2″>2</a>
<a href=”page/3″>3</a>
<a href=”page/4″>4</a>
<a href=”page/5″>5</a>
</ul>
        </footer>
    </body>


</html>