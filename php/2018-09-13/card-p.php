<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body>
  <?php
  $domain = 'http://101.0.86.110:6699';
  $arr = [
    "id" => 4469,
    "title" => "Crashzone - how to setup Estimage",
    "slug" => "crashzone-how-to-setup-estimage",
    "description" => "Crashzone - how to setup Estimage",
    "content" => "<div>\r\n\r\n<img src=\"http://www.crashzone.com.au/wp-content/uploads/2010/07/mini-front-end.jpg\" alt=\"Mini front end shot\" />\r\n\r\n<strong>Process for setting up Estimage on Crashzone</strong>\r\n\r\n* Contact Stelvio to download and install the Estimage program to your computer\r\n* Please note Stelvio charge you a yearly support fee\r\n* Estimage provides you with a user name and password to access their program\r\n* Once Estimage is installed Crashzone can finalise the settings and provide training.\r\n\r\nStelvio ( Estimage )\r\n\r\nPhone Number: 02 9455 1000\r\n<p style=\"font-weight: 300;\">Estimage Support: 02 9455 1055</p>\r\nWebsite: <a href=\"https://www.estimage.com/MainWeb/login.jsp\">www.estimage.com</a>\r\n\r\n&nbsp;\r\n\r\n<a title=\"Crashzone Estimage user manual\" href=\"http://www.crashzone.com.au/wp-content/uploads/2010/07/crashzone-estimage-user-manual-20100719.pdf\">Crashzone Estimage user manual</a>\r\n\r\nFor more information please contact support@crashzone.com.au\r\n\r\n</div>\r\n\r\n\r\n&nbsp;",
    "view" => 0,
    "reputation" => 0,
    "user_id" => 2048,
    "status" => "publish",
    "comment_status" => "open",
    "old_guid" => "http://www.crashzone.com.au/?p=4469",
    "created_at" => "2017-09-25 09:00:39",
    "updated_at" => "2017-11-01 05:54:40",
    "next_slug" => "classic-holden-found-with-998km-on-the-clock",
    "previous_slug" => "crashzone-is-the-1st-free-quote-system-you-can-use-right-in-your-web-browser",
    "author" => [
      "id" => 2048,
      "name" => "nam",
      "email" => "nam@autointegrity.com.au",
      "created_at" => "2018-08-24 07:13:57",
      "updated_at" => "2018-08-24 07:13:57"
    ],
    "images" => [
      [
        "id" => 885,
        "name" => "mini-front-end",
        "alt" => "mini-front-end",
        "slug" => "mini-front-end-7ab60774-e81f-36e8-ae05-e594189db14f",
        "path" => "/wp-content/uploads/2010/07/mini-front-end.jpg",
        "extension" => "jpg",
        "mime_type" => null,
        "size" => null,
        "created_at" => "2018-09-07 07:36:07",
        "updated_at" => "2018-09-07 07:36:07",
        "deleted_at" => null,
        "pivot" => [
          "post_id" => 4469,
          "image_id" => 885,
          "created_at" => "2018-09-07 07:36:07",
          "updated_at" => "2018-09-07 07:36:07"
        ]
      ]
    ],
    "categories" => [
      [
        "id" => 113,
        "parent_id" => null,
        "name" => "Insurance",
        "slug" => "insurance",
        "created_at" => "2018-08-07 12:29:43",
        "updated_at" => null,
        "deleted_at" => null,
        "posts_count" => 6,
        "pivot" => [
          "post_id" => 4469,
          "category_id" => 113,
          "created_at" => "2018-08-07 12:29:58",
          "updated_at" => null
        ]
      ]
    ]
  ];
// echo $arr['images'][0]['path'] ;
  echo '<div class="container mt-3">
  <div class="row">
  <div class="col-4">
  <div class="card">
  <img class="card-img-top w-100" src="' . $domain . $arr['images'][0]['path'] . '">
  <div class="card-body">
    <h5 class="card-title">' . $arr['title'] . '</h5>
    <p class="card-text">' . $arr['description'] . '</p>
    <a href="http://phongdvh.com/2018-09-11/noi-dung-bai-viet.php" target="_blank" class="card-link text-right">Read more >>></a>
    <p class="card-footer px-0" style="font-size: 10pt;">Post by: '.$arr['author']['name'].' At: '.$arr['updated_at'].'</p>
  </div>
</div>
</div>
</div>
</div>';
  ?>
            </div>
  </body>
</html>