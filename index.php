<?php
$tag = "home"; 
$pagetitle = "Home Page";
include_once "include/template/header.php"; 
include_once "include/template/connection.php";
?>
<script>
$(document).load(function(){
  alert("welcome");
});

</script>
    
    <header class="home-header ">
      <picture>
        <source media="(min-width: 992px)" srcset="include/layout/images/high-1.jpg" />
        <source media="(min-width: 500px)" srcset="include/layout/images/high-2.jpg" />
        <img src="include/layout/images/high-1.jpg" alt="coffee" style="width: auto;" />
      </picture>
    
    </header>

    <!-- Coffee Banner -->
    <div class="coffee-banner" id="coffee-banner-one">
     
    <style>
      #coffee-banner-one img{
        display: none;
      }
      #coffee-banner-one img.active{
        display: block;
      }
    </style>

      <img src="include/layout/images/coffee-banner.jpg" class="active one" alt="coffee" />
      <img src="include/layout/images/coffee-3.jpg" class="two" alt="coffee" style="width: auto;" />
      <img src="include/layout/images/coffee-4.jpg" class="three" alt="coffee" style="width: auto;" />

    <!-- start script -->
    
    
    <script>
        // for cover of header
        let coverOne = document.querySelector('#coffee-banner-one img.one'),
            coverTwo = document.querySelector('#coffee-banner-one img.two'),
            coverThree = document.querySelector('#coffee-banner-one img.three'),
            changer    = document.getElementById('changeCoversCoffe');


        // one
        coverOne.addEventListener('mouseover', function(e){
            changer.click()
            changer.dataset.coverno = 1;
        })

        // two
        coverTwo.addEventListener('mouseover', function(){
            changer.click()
            changer.dataset.coverno = 2;
        })

        // three
        coverThree.addEventListener('mouseover', function(){
            changer.click()
            changer.dataset.coverno = 3;
        })

        function handleCoffeeCover(){
            // console.log(changer.dataset.coverno == 2, changer.dataset.coverno)
            if(changer.dataset.coverno == 1){ // 1 mean element number one already showed
                coverOne.classList.remove('active')
                coverTwo.classList.add('active')
            } else if(changer.dataset.coverno == 2){  // 2 mean element number two already showed
                coverTwo.classList.remove('active')
                coverThree.classList.add('active')
            } else if(changer.dataset.coverno == 3){  // 3 mean element number three already showed
                coverThree.classList.remove('active')
                coverOne.classList.add('active')
            }
        }
    </script>
    <!-- end script -->
    <button id ='changeCoversCoffe' onclick='handleCoffeCover()' data-coverno='1' style='display: none'></button>
      <div class="photo-description">
        <p>
        Thank you because you are a fan of Star Coffee, we have a lot of delicious drinks that we would like to try.
        We search for your happiness through the purest coffees of coffee.
        We are looking for the best coffee beans from the best countries in the world.
        The site consists of several sections offered by Star Café for you through 
        this website: equipment, coffee drinks, tea drinks and others.
        </p>
        <p>
        Coffee means originality, it means working and studying, staying up for love, life or work,
        there must be a special meaning for all those who drink coffee, if you do not have a special meaning for the smell of coffee and the time to drink it,
        this means that it will not distinguish the pure taste of coffee, but those who have a sense of Rare my taste as a star coffee drinker.
        They get drinks that satisfy their tastes and touch their memories with coffee and cold and warm drinks.
        Star drinks also spread joy among friends and enhance the family warmth and motivate them to make their memories.
        We are very honored by your entry to our site to search for new but new for us and your continued arrival and search for new and delicious,
        this is Dafna to continue to develop and make a lot of effort to satisfy you.
        </p>
      </div>
    </div>
    <!-- Coffee Banner -->

    <!-- Product section -->
    <section class="products">
      <h1>our products</h1>
      <div class="products-wrapper">
       
       
        <?php
    $comm = "SELECT * from category";
    $result = mysqli_query($conn,$comm);
    if($result->num_rows > 0):
      while($row = $result->fetch_assoc()):

    ?>
      <div class="product-item">
          <div class="image-wrapper">
            <a href="product.php?cate=<?php echo $row['id'];?>">
              <picture>
                <source media="(min-width: 1200px)" srcset="<?php echo $row['image'];?> 500w" />
                <source media="(max-width: 800x)" srcset="<?php echo $row['image'];?>" />
                <img src="<?php echo $row['image'];?>" alt="product" />
              </picture>
            </a>
          </div>
          <a class="product-name" href="product.php?cate=<?php echo $row['id'];?>"><?php echo $row['name'];?></a>
        </div>
  <?php endwhile; endif;?>
      </div>
    </section>
    <!-- Product section -->

    <!-- Coffee Banner -->
    <div class="coffee-banner  ">
      <div class="photo-description">
        <p>
          
        One of the most famous questions we have always encountered from our friends who love Star Coffee 
        is what is this delicious coffee that you bring,
        is this Brazilian coffee or what?
        </p>
        <p>
        The secret that we would like to tell you is that we love coffee from the bottom of our hearts just as you are,
        coffee beans cannot meet the hands of people who love them and find pleasure and happiness in preparing them and not be delicious,
        so our first secret is your presence that gives our coffee beans the happiness and adds to their artificiality the value .
        </p>
        <p>
        But the second secret, which is more practical, is that we are keen to combine the best types of coffee,
        and we spend a lot of time preparing and trying coffee in the various available ways,
        in addition to that we are always trying to put our own touch which we think you like and that's why you are in our world full of coffee and your smiles.
        </p>
      </div>
      <picture>
        <source media="(min-width: 1200px)" srcset="include/layout/images/banner-2-lg.jpg" />
        <source media="(min-width: 992px)" srcset="include/layout/images/banner-2-md.jpg" />
        <source media="(max-width: 767.98px)" srcset="include/layout/images/banner-2-sm.jpg" />
        <img src="include/layout/images/banner-2-lg.jpg" alt="tea" />
      </picture>
    </div>
    <!-- Coffee Banner -->
<!-- <script src='include/layout/js/script.js'> -->

    <?php include_once "include/template/footer.php"; ?>

    <button id ='changeCovers' onclick='handle()' data-coverno='1' style='display: none'></button>
    <script>
      // for cover of header
