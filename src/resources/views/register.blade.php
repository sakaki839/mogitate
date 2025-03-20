<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    
</head>
<body>
     <header>
        mogitate<dr>
    </header>

    <main>
         <div class="confirm__content">
      <div class="confirm__heading">
        <h2>商品登録</h2>
      </div>
      <form class="form">
        <div class="confirm-table">
          <table class="confirm-table__inner">

           <th class="confirm-table__header" style="text-align: left">商品名</th>
             <tr class="confirm-table__row">
              <td class="confirm-table__text">
                <input type="text" name="name" value="サンプルテキスト" />
              </td>
            </tr>

            <th class="confirm-table__header" style="text-align: left">値段</th>
            <tr class="confirm-table__row">  
              <td class="confirm-table__text">
                <input type="text" name="name" value="サンプルテキスト" />
              </td>
            </tr>

             <th class="confirm-table__header" style="text-align: left">商品画像</th>
            <tr class="confirm-table__row">
              <td class="confirm-table__text">
                <input type="email" name="email" value="サンプルテキスト" />
              </td>
            </tr>

             <th class="confirm-table__header" style="text-align: left">季節</th>
            <tr class="confirm-table__row">
              <td class="confirm-table__text">
                <input type="tel" name="tel" value="サンプルテキスト" />
              </td>
            </tr>

            <th class="confirm-table__header" style="text-align: left">商品説明</th>
            <tr class="confirm-table__row">
              <td class="confirm-table__text">
                <input class="text" type="text" name="content" value="サンプルテキスト" />
              </td>
            </tr>
          </table>
        </div>
        <div class="form__button" style="text-align:center">
          <button01  type="button">戻る</button01>        
          <button02  type="submit">登録</button02>
        </div>
      </form>
    </div>

        
    </main>
    
</body>
</html>