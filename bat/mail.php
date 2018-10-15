<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Auto'])) {$Auto = $_POST['Auto'];}
    if (isset($_POST['Age'])) {$Age = $_POST['Age'];}
    if (isset($_POST['Price'])) {$Price = $_POST['Price'];}
    if (isset($_POST['Phone'])) {$Phone = $_POST['Phone'];}

 
    $to = "sxchovmax@gmail.com"; 
   // $to = "ignatii19942310.ru@gmail.com"; //для отладки
    $sendfrom   = "site@ecvauto.ru";
    $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    $headers .= "Bcc: ignatii19942310.ru@gmail.com>";  
    $subject = "Заяка с сайта ecvauto.ru";
    $message = "Заяка с сайта ecvauto.ru
    <br>
    <br><b>Марка автомобиля: </b></br> $Auto
    <br><b>Год выпуска: </b></br> $Age
    <br><b>Цена заявителя: </b></br> $Price
    <br><b>Контактный телефон: </b></br></br> $Phone";
    $send = mail ($to, $subject, $message, $headers);
    if ($send == 'true')
    {
    echo '

    <html lang="ru">
      <head>
        <meta charset="utf-8">
        <title>Заяка отправлена</title>
        <link rel="icon" type="image/ico" href="/images/favicon.png">
        <link href="/cssphp/bootstrap.min.css" rel="stylesheet">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="/cssphp/flexslider.css" rel="stylesheet" >
        <link href="/cssphp/styles.css" rel="stylesheet">
        <link href="/cssphp/queries.css" rel="stylesheet">
        <link href="/cssphp/animate.css" rel="stylesheet">
        <style>
              .btn-class{
         display: inline-block;
         border:1px solid #C9AE34;
         color: #705D07;
         border-radius: 3px 3px 3px 3px;
         -webkit-border-radius: 3px 3px 3px 3px;
         -moz-border-radius: 3px 3px 3px 3px;
         font-family: Verdana;
         width: auto;
         height: auto;
         font-size: 18px;
         padding: 10px 40px;
         box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D,0 2px 4px 0 #D4D4D4;
         -moz-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D,0 2px 4px 0 #D4D4D4;
         -webkit-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D,0 2px 4px 0 #D4D4D4;
         text-shadow: 0 1px 0 #FFFFFF;
         background-image: linear-gradient(to top, #FCE374, #FCDF5B);
         background-color: #FCE374;
        }
        .btn-class:hover, .btn-class:active{
         border:1px solid #967D09;
         color: #705D07;
         box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D;
         -moz-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D;
         -webkit-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D;
         background-color: #FCDF5B;
        }
        </style>

      </head>
        <body>

          <img style="text-align:left; margin-top: 50px; margin-left: 50px;" src="/images/logo.png" width=259 height=62>
          <p style="text-align: left; font-size: 16px; margin-left: 150px;"><a href="tel:+73852690450">69-04-50</a></p>
          <p style="text-align: center; font-size: 25px; margin-top: 50px;" >Спасибо! Ваше сообщение отправлено, а это значит что с Вами скоро свяжется наш менеджер!</p>
          <p style="text-align: center; margin-top: 35px;"><button class="btn-class"><a href="http://ecvauto.ru/">Вернуться назад</a></button>

        </body>
    </html>

    ';
    }
    else
    {
    echo '

    <html lang="ru">
      <head>
        <meta charset="utf-8">
        <title>Заявка не отправлена</title>
        <link rel="icon" type="image/ico" href="/images/favicon.png">
        <link href="/cssphp/bootstrap.min.css" rel="stylesheet">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="/cssphp/flexslider.css" rel="stylesheet" >
        <link href="/cssphp/styles.css" rel="stylesheet">
        <link href="/cssphp/queries.css" rel="stylesheet">
        <link href="/cssphp/animate.css" rel="stylesheet">
        <style>
              .btn-class{
         display: inline-block;
         border:1px solid #C9AE34;
         color: #705D07;
         border-radius: 3px 3px 3px 3px;
         -webkit-border-radius: 3px 3px 3px 3px;
         -moz-border-radius: 3px 3px 3px 3px;
         font-family: Verdana;
         width: auto;
         height: auto;
         font-size: 18px;
         padding: 10px 40px;
         box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D,0 2px 4px 0 #D4D4D4;
         -moz-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D,0 2px 4px 0 #D4D4D4;
         -webkit-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D,0 2px 4px 0 #D4D4D4;
         text-shadow: 0 1px 0 #FFFFFF;
         background-image: linear-gradient(to top, #FCE374, #FCDF5B);
         background-color: #FCE374;
        }
        .btn-class:hover, .btn-class:active{
         border:1px solid #967D09;
         color: #705D07;
         box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D;
         -moz-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D;
         -webkit-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D;
         background-color: #FCDF5B;
        }
        </style>

      </head>
        <body>

          <img style="text-align:left; margin-top: 50px; margin-left: 50px;" src="/images/logo.png" width=259 height=62>
          <p style="text-align: left; font-size: 16px; margin-left: 150px;"><a href="tel:+73852690450">69-04-50</a></p>
          <p style="text-align: center; font-size: 25px; margin-top: 50px;" >Произошла ошибка :( Сообщение не отправлено!</p>
          <p style="text-align: center; font-size: 20px; margin-top: 20px; margin-left: 50px; margin-right: 50px;" >
          Обратитесь к системному администратору по номеру <a href="tel:+79039904644">8(903)990-46-44</a>
          </p>
          <p style="text-align: center; margin-top: 35px;"><button class="btn-class"><a href="http://ecvauto.ru/">Вернуться назад</a></button>

        </body>
    </html>

    ';
    }
    } else {
        http_response_code(403);
        echo '

    <html lang="ru">
      <head>
        <meta charset="utf-8">
        <title>403 Forbidden</title>
        <link rel="icon" type="image/ico" href="/images/favicon.png">
        <link href="/cssphp/bootstrap.min.css" rel="stylesheet">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="/cssphp/flexslider.css" rel="stylesheet" >
        <link href="/cssphp/styles.css" rel="stylesheet">
        <link href="/cssphp/queries.css" rel="stylesheet">
        <link href="/cssphp/animate.css" rel="stylesheet">
        <style>
              .btn-class{
         display: inline-block;
         border:1px solid #C9AE34;
         color: #705D07;
         border-radius: 3px 3px 3px 3px;
         -webkit-border-radius: 3px 3px 3px 3px;
         -moz-border-radius: 3px 3px 3px 3px;
         font-family: Verdana;
         width: auto;
         height: auto;
         font-size: 18px;
         padding: 10px 40px;
         box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D,0 2px 4px 0 #D4D4D4;
         -moz-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D,0 2px 4px 0 #D4D4D4;
         -webkit-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D,0 2px 4px 0 #D4D4D4;
         text-shadow: 0 1px 0 #FFFFFF;
         background-image: linear-gradient(to top, #FCE374, #FCDF5B);
         background-color: #FCE374;
        }
        .btn-class:hover, .btn-class:active{
         border:1px solid #967D09;
         color: #705D07;
         box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D;
         -moz-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D;
         -webkit-box-shadow: inset 0 1px 0 0 #FFF6CE,inset 0 -1px 0 0 #E3C852,inset 0 0 0 1px #FCE88D;
         background-color: #FCDF5B;
        }
        </style>

      </head>
        <body>

          <img style="text-align:left; margin-top: 25px; margin-left: 50px;" src="/images/logo.png" width=259 height=62>
          <p style="text-align: left; font-size: 16px; margin-left: 150px;"><a href="tel:+73852690450">69-04-50</a></p>
          <img style="display:block; margin:0 auto;" src="/images/oops.png" width=710 height=200>
          <p style="text-align: center; font-size: 25px; margin-top: 35px;" >Ой.. Что-то пошло не так! Запрос отклонен!</p>
          <p style="text-align: center; font-size: 20px; margin-top: 20px; margin-left: 50px; margin-right: 50px;" >
          Как правило, такое происходит когда ресурс не предназначен для публичного доступа. То есть, пользователь хочет осуществить доступ к ресурсу, к которому он не имеет прав доступа. Если же источником владеете вы сами, то попросту могли установить неправильные права на папку, загрузить файл сайта не в ту папку, выложить на сервер неверный индексный файл и т.д.
          </p>
          <p style="text-align: center; margin-top: 35px;"><button class="btn-class"><a href="http://ecvauto.ru/">Перейти на сайт</a></button>

        </body>
    </html>

    ';
    }
?>
