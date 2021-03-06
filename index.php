<!DOCTYPE html>
<html>
  <head>
    <title>Uvic Food</title>
      <link rel="stylesheet" type="text/css" href="/style/main.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <?php ob_start(); ?>
  <body>

    <?php include 'main.php';?>

    <div class="main_container">
      <div class="container">
        <div class="row text-center">
          <h1 id="title">UVic Food Services</h1>
        </div>
        <div class="row text-center">
          <?php echo "<h3 id='day-time'>" . date('l M jS') . "<br>" . date('g:i A') . "</h3>"; ?>
        </div>
      </div>
      <div id="top-container" class="container blue-back">
        <div class="col-md-1">
          <?php artsPlace($today, $currentTime, $monToThurs, $openImg, $closeImg);?>
        </div>
        <div class="col-md-3 text-right">
          <h3><a class="white-text" href="http://www.uvic.ca/services/food/where/artsplace/index.php">Arts Place</a></h3>
          <img src="/images/storefronts/arts-place.jpg" class="location">
        </div>
        <div class="col-md-5 writeup">
      		<p>Award winning! Located in the Fine Arts building, Arts Place recently received an award for interior beauty in the wood design category. Bistro seating inside with seating areas directly outside.</p>
          <ul>
            <li>specialty coffees and teas</li>
            <li>alternate beverages</li>
            <li>salads</li>
            <li>sandwiches and wraps</li>
            <li>pastries, cakes and other sweets</li>
          </ul>
        </div>
        <div class="col-md-3 map">
          <img src="/images/maps/arts-map.gif" class="location map">
        </div>
        <div class="col-md-12">
          <?php artsPlaceNotifications($today, $currentTime, $monToThurs); ?>
        </div>
      </div>
      <div class="container white-back">
        <div class="col-md-1">
          <?php bibliocafe($today, $currentTime, $monToThurs, $weekends, $openImg, $closeImg) ?>
        </div>
        <div class="col-md-3 text-right">
          <h3><a class="blue-text" href="http://www.uvic.ca/services/food/where/bibliocafe/index.php">Bibliocafé</a></h3>
          <img src="/images/storefronts/bibliocafe.jpg" class="location">
        </div>
        <div class="col-md-5 writeup">
      		<p>Surrounded by glass, view the vivid seasonal changes while enjoying your selection – indoors with ample booth, table and comfortable circle chairs or outdoors with patio seating.</p>
          <ul>
            <li>specialty coffees and teas</li>
            <li>our signature five star sandwiches, wraps and buns</li>
            <li>salads</li>
            <li>pastry rolls</li>
            <li>samosas</li>
            <li>cakes, squares, pastries and other sweets</li>
          </ul>
        </div>
        <div class="col-md-3">
          <img src="/images/maps/biblio-map.gif" class="location map">
        </div>
        <div class="col-md-12">
          <?php bibliocafeNotifications($today, $currentTime, $monToThurs, $weekends); ?>
        </div>
      </div>
      <div class="container blue-back">
        <div class="col-md-1">
          <?php cadboroCommons($today, $currentTime, $openImg, $closeImg) ?>
        </div>
        <div class="col-md-3 text-right">
          <h3 class="cadboro"><a class="white-text" href="http://www.uvic.ca/services/food/where/cadborocommons/index.php">Cadboro Commons</a></h3>
          <img src="/images/storefronts/cadboro_commons.jpg" class="location">
        </div>
        <div class="col-md-5 writeup">
          <p>Come see what you’ve been missing! Large indoor seating allows for study area, private or group seating.</p>
          <ul>
            <li>made to order grill items</li>
            <li>daily hot meals</li>
            <li>salad bar</li>
            <li>wraps and sandwiches</li>
            <li>sushi</li>
            <li>fresh made soup</li>
            <li>fruit, pastries and other sweets</li>
            <li>an assortment of beverages including fresh coffee and tea</li>
          </ul>
        </div>
        <div class="col-md-3">
          <img src="/images/maps/cad+caps+markets-map.gif" class="location map">
        </div>
        <div class="col-md-12">
          <?php cadboroCommonsNotifications($today, $currentTime); ?>
        </div>
      </div>
      <div class="container white-back">
        <div class="col-md-1">
          <?php capsBistro($today, $weekdays, $weekends, $currentTime, $openImg, $closeImg) ?>
        </div>
        <div class="col-md-3 text-right">
          <h3><a href="http://www.uvic.ca/services/food/where/capsbistro/index.php">Cap's Bistro</a></h3>
          <img src="/images/storefronts/caps-bistro.jpg" class="location">
        </div>
        <div class="col-md-5 writeup">
          <p>Offers charming table seating with natural lighting, as well as TV lounge area for leisure.</p>
          <ul>
            <li>made to order sandwiches and wraps</li>
            <li>pizza and pasta bar</li>
            <li>soups</li>
            <li>salads</li>
            <li>pastries and sweets</li>
            <li>specialty coffee and a variety of beverages</li>
          </ul>
        </div>
        <div class="col-md-3">
          <img src="/images/maps/cad+caps+markets-map.gif" class="location map">
        </div>
        <div class="col-md-12">
          <?php capsBistroNotifications($today, $weekdays, $weekends, $currentTime); ?>
        </div>
      </div>
      <div class="container blue-back">
        <div class="col-md-1">
          <?php courtCafe($today, $weekdays, $currentTime, $openImg, $closeImg) ?>
        </div>
        <div class="col-md-3 text-right">
          <h3><a class="white-text" href="http://www.uvic.ca/services/food/where/courtcafe/index.php">Court Café</a></h3>
          <img src="/images/storefronts/court-cafe.jpg" class="location">
        </div>
        <div class="col-md-5 writeup">
          <p>Nestled in the Fraser building with ample indoor seating.</p>
          <ul>
            <li>a selection of wraps and sandwiches</li>
            <li>fresh made salads</li>
            <li>sushi</li>
            <li>pastries and other sweets</li>
            <li>assorted beverages including coffee and tea</li>
          </ul>
        </div>
        <div class="col-md-3">
          <img src="/images/maps/court-map.gif" class="location map">
        </div>
        <div class="col-md-12">
          <?php courtCafeNotifications($today, $weekdays, $currentTime); ?>
        </div>
      </div>
      <div class="container white-back">
        <div class="col-md-1">
          <?php halftime($today, $weekdays, $currentTime, $openImg, $closeImg) ?>
        </div>
        <div class="col-md-3 text-right">
          <h3><a href="http://www.uvic.ca/services/food/where/halftime/index.php">Halftime</a></h3>
          <img src="/images/storefronts/halftime.jpg" class="location">
        </div>
        <div class="col-md-5 writeup">
          <p>Located in UVic's Centre for Athletics, Recreation and Special Abilities (CARSA) building just inside the main entrance across from CanAssist.</p>
          <ul>
            <li>smoothie bar</li>
            <li>salads</li>
            <li>sandwiches & wraps</li>
            <li>muffins, sweets & snacks</li>
            <li>sports drinks and a wide assortment of cold beverages</li>
          </ul>
        </div>
        <div class="col-md-3">
          <img src="/images/maps/halftime-map.jpg" class="location map">
        </div>
        <div class="col-md-12">
          <?php halftimeNotifications($today, $weekdays, $currentTime);?>
        </div>
      </div>
      <div class="container blue-back">
        <div class="col-md-1">
          <?php macs($today, $monToThurs, $currentTime, $openImg, $closeImg) ?>
        </div>
        <div class="col-md-3 text-right">
          <h3><a class="white-text" href="http://www.uvic.ca/services/food/where/macs/index.php">Macs</a></h3>
          <img src="/images/storefronts/macs.jpg" class="location">
        </div>
        <div class="col-md-5 writeup">
          <p>Newly revamped with lounge seating and widescreen TVs! Enjoy table and individual seating in a relaxed environment. Located in the MacLaurin Building.</p>
          <ul>
            <li>made to order sandwiches, wraps and salads</li>
            <li>homemade soups and chili</li>
            <li>pastries and other sweets</li>
            <li>a wide selection of beverages</li>
          </ul>
        </div>
        <div class="col-md-3">
          <img src="/images/maps/mac-map.gif" class="location map">
        </div>
        <div class="col-md-12">
          <?php macsNotifications($today, $monToThurs, $currentTime);?>
        </div>
      </div>
      <div class="container white-back">
        <div class="col-md-1">
          <?php mysticMarket($today, $monToThurs, $weekends, $currentTime, $openImg, $closeImg)?>
        </div>
        <div class="col-md-3 text-right">
          <h3><a href="http://www.uvic.ca/services/food/where/mysticmarket/index.php">Mystic Market</a></h3>
          <img src="/images/storefronts/mystic-market.jpg" class="location">
        </div>
        <div class="col-md-5 writeup">
          <p>Featuring 8 unique food kiosks that offer a diverse range of in-house prepared meals as well as a general store for pre-packaged foods and quick convenience items.</p>
          <p>With a modern, market-style layout and West Coast inspired design and décor, UVic’s newly launched Mystic Market sets a new standard in campus dining, creating a truly unique dining experience.</p>
          <p>Mystic is also the first <strong>ZERO</strong> Waste facility on campus.</p>
          <h4>Mystic Market Menus:</h4>
          <ul class="horizontal_list">
            <li><a href="http://www.uvic.ca/services/food/assets/docs/Basecamp%20menu.pdf">Basecamp</a></li>
            <li><a href="http://www.uvic.ca/services/food/assets/docs/Boardwalk-menu.pdf">Boardwalk Cafe</a></li>
            <li><a href="http://www.uvic.ca/services/food/assets/docs/Chopbox-menu.pdf">Chopbox</a></li>
            <li><a href="http://www.uvic.ca/services/food/assets/docs/Flamin-menu.pdf">Flamin' Good</a></li>
            <li><a href="#">Professor Franks</a></li>
            <li><a href="http://www.uvic.ca/services/food/assets/docs/Tofino-menu.pdf">Tofino's</a></li>
            <li><a href="http://www.uvic.ca/services/food/assets/docs/Treks%20-%20menu.pdf">Treks</a></li>
            <li><a href="http://www.uvic.ca/services/food/assets/docs/Vegout-menu.pdf">Vegout</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <img src="/images/maps/mystic-map.png" class="location map">
        </div>
        <div class="col-md-12">
          <?php mysticMarketNotifications($today, $monToThurs, $weekends, $currentTime);?>
        </div>
      </div>
      <div class="container blue-back">
        <div class="col-md-1">
          <?php nibbles($today, $weekdays, $currentTime, $openImg, $closeImg) ?>
        </div>
        <div class="col-md-3 text-right">
          <h3><a class="white-text" href="http://www.uvic.ca/services/food/where/nibblesbytes/index.php">Nibbles & Bytes</a></h3>
          <img src="/images/storefronts/nibbles.jpg" class="location">
        </div>
        <div class="col-md-5 writeup">
          <p>Your Engineering Lab Wing food destination!</p>
          <ul>
            <li>freshly made gourmet pizza</li>
            <li>wraps and sandwiches</li>
            <li>salads</li>
            <li>breakfast sandwiches</li>
            <li>pastries and other sweets</li>
            <li>a range of beverages including fresh coffee and tea</li>
          </ul>
        </div>
        <div class="col-md-3">
          <img src="/images/maps/nibbles-map.gif" class="location map">
        </div>
        <div class="col-md-12">
          <?php nibblesNotifications($today, $weekdays, $currentTime);?>
        </div>
      </div>
      <div class="container white-back">
        <div class="col-md-1">
          <?php scicafe($today, $weekdays, $currentTime, $openImg, $closeImg) ?>
        </div>
        <div class="col-md-3 text-right">
          <h3><a href="http://www.uvic.ca/services/food/where/scicafe/index.php">SciCafé</a></h3>
          <img src="/images/storefronts/scicafe.jpg" class="location">
        </div>
        <div class="col-md-5 writeup">
          <p>Comfortable bright seating area complete with natural lighting provides a perfect place to enjoy your selection.</p>
          <ul>
            <li>paninis and calzones</li>
            <li>homemade soups and chilli</li>
            <li>sandwiches and wraps</li>
            <li>mixed salads</li>
            <li>breakfast sandwiches</li>
            <li>pastries and other sweets</li>
            <li>assorted beverages including fresh coffee and tea</li>
          </ul>
        </div>
        <div class="col-md-3">
          <img src="/images/maps/scicafe-map.gif" class="location map">
        </div>
        <div class="col-md-12">
          <?php scicafeNotifications($today, $weekdays, $currentTime);?>
        </div>
      </div>
      <div class="container blue-back">
        <div class="col-md-1">
          <?php villageGreens($today, $weekdays, $monToThurs, $currentTime, $openImg, $closeImg) ?>
        </div>
        <div class="col-md-3 text-right">
          <h3><a class="white-text" href="http://www.uvic.ca/services/food/where/villagegreens/index.php">Village Greens</a></h3>
          <img src="/images/storefronts/village-greens.jpg" class="location">
        </div>
        <div class="col-md-5 writeup">
          <p>Award winning vegetarian and vegan options. Enjoy booth or table seating with a trendy ambience and natural lighting. Choose a table by the window or outdoor patio seating. Located in the Cadboro Commons building.</p>
          <ul>
            <li>daily hot meals</li>
            <li>homemade soups and chilli</li>
            <li>fresh stir fry</li>
            <li>fruit, pastries, and other sweets</li>
            <li>smoothie bar</li>
            <li>assorted beverages including coffee & tea</li>
          </ul>
        </div>
        <div class="col-md-3">
          <img src="/images/maps/cad+caps+markets-map.gif" class="location map">
        </div>
        <div class="col-md-12">
          <?php villageGreensNotifications($today, $weekdays, $monToThurs, $currentTime);?>
        </div>
      </div>
      <div class="container white-back">
        <div class="col-md-1">
          <?php smoothieBar($today, $weekdays, $monToThurs, $currentTime); ?>
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-2 text-right">
          <h3><a href="http://www.uvic.ca/services/food/where/villagegreens/smoothiebar/index.php"> Smoothie Bar</a></h3>
          <p><a href="http://www.uvic.ca/services/food/assets/docs/smoothieBar_options.pdf">Smoothie Menu</a></p>
        </div>
        <div class="col-md-8 writeup">
          <p>Village Greens is also home to our fabulous Smoothie Bar. Featuring extended hours, weekly and seasonal specials and more.</p>
          <p>Delicious and nutritious! All smoothies are made with 100% real fruit and are available as vegan or with yogurt. See our smoothie menu board below for a list of our regular flavours.</p>
          <p>Need a healthy boost to fuel your studies or workday? Add green blend, soy or other healthy supplements for just $0.75!</p>
        </div>
        <div class="col-md-12">
          <?php smoothieBarNotifications($today, $weekdays, $monToThurs, $currentTime);?>
        </div>
      </div>
      <div id="bottom-container" class="container blue-back">
        <div class="col-md-1">
          <?php villageMarket($today, $weekdays, $weekends, $currentTime, $openImg, $closeImg) ?>
        </div>
        <div class="col-md-3 text-right">
          <h3><a class="white-text" href="http://www.uvic.ca/services/food/where/villagemarket/index.php">Village Market</a></h3>
          <img src="/images/storefronts/village-market.jpg" class="location">
        </div>
        <div class="col-md-5 writeup">
          <p>Your one-stop campus convenience shop! Provides grab 'n go items as well as packaged foods and ingredients for you to prepare your own culinary creations.</p>
          <ul>
            <li>specialty items such as celiac offerings</li>
            <li>organic section</li>
            <li>fresh produce</li>
            <li>bakery and coffee selections</li>
            <li>household staples from toothpaste to laundry detergent</li>
          </ul>
        </div>
        <div class="col-md-3">
          <img src="/images/maps/cad+caps+markets-map.gif" class="location map">
        </div>
        <div class="col-md-12">
          <?php villageMarketNotifications($today, $weekdays, $weekends, $currentTime);?>
        </div>
      </div>
    </div>
  </body>
  <?php ob_end_flush(); ?>
</html>
