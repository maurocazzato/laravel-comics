<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylecss\style.css">
</head>
<body>

<header>
    <div class="logocontainer">
        <img src="/dc-logo.png" alt="dc-logo" style="max-height: 60px;">
    </div>
    <div class="menucontainer">
        <ul>
            <?php
            $menuItems = [
                ['id' => 1, 'title' => 'characters', 'link' => '/'],
                ['id' => 2, 'title' => 'comics', 'link' => '/about'],
                ['id' => 3, 'title' => 'movies', 'link' => '/'],
                ['id' => 4, 'title' => 'tv', 'link' => '/about'],
                ['id' => 5, 'title' => 'games', 'link' => '/'],
                ['id' => 6, 'title' => 'collectibles', 'link' => '/about'],
                ['id' => 7, 'title' => 'videos', 'link' => '/'],
                ['id' => 8, 'title' => 'fans', 'link' => '/about'],
                ['id' => 9, 'title' => 'news', 'link' => '/'],
                ['id' => 10, 'title' => 'shop', 'link' => '/about'],
            ];

            foreach ($menuItems as $item) {
                echo '<li><a href="' . $item['link'] . '" class="menulink">' . $item['title'] . '</a></li>';
            }
            ?>
        </ul>
    </div>

    <div class="backgroundbox"></div>

    <div class="listblu">
        <ul>
            <?php
            $items = [
                ['id' => 1, 'image' => 'buy-comics-digital-comics.png', 'title' => 'DIGITAL COMICS'],
                ['id' => 2, 'image' => 'buy-comics-merchandise.png', 'title' => 'DC MERCHANDISE'],
                ['id' => 3, 'image' => 'buy-comics-subscriptions.png', 'title' => 'SUBSCRIPTION'],
                ['id' => 4, 'image' => 'buy-comics-shop-locator.png', 'title' => 'COMICS SHOP LOCATOR'],
                ['id' => 5, 'image' => 'buy-dc-power-visa.svg', 'title' => 'DC POWER VISA'],
            ];

            foreach ($items as $item) {
                echo '<li class="listitem">
                        <img src="' . $item['image'] . '" alt="Thumbnail" class="itemimage" />
                        <div class="itemdetails">
                            <h3>' . $item['title'] . '</h3>
                        </div>
                    </li>';
            }
            ?>
        </ul>
    </div>


</header>

<style>
            header {
            width: 100%;
            align-items: center;
            justify-content: space-around;
            padding: 10px 20px;
        }

        .logocontainer img {
            max-height: 60px;
        }

        .menucontainer ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .menucontainer li {
            margin-right: 20px;
        }

        .menucontainer a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        .menucontainer .menulink {
            text-decoration: none;
            color: black;
            font-weight: bold;
            transition: color 0.3s;
        }

        .menucontainer .menulink:hover {
            color: rgba(2, 130, 249, 255);
        }


        .backgroundbox {
        height: 300px;
        background-image: url('public\png\._jumbotron.jpg');
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        }

        .backgroundbox img {
        max-width: 100%;
        max-height: 100%;
        }


        .listblu {
            background-color: rgba(2, 130, 249, 255);
            display: flex;
        }

        .listblu h3 {
            font-size: 10px;
            color: white;
        }

        .listblu .listitem {
            display: flex;
            align-items: center;
            justify-content: space-around;
            margin-bottom: 20px;
            float: left;
            padding: 30px;
        }

        .listblu .itemimage {
            max-width: 40px;
            max-height: 50px;
            margin-right: 20px;
        }
    </style>

</body>
</html>

