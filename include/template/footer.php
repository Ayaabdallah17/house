<footer>
      <div class="profile">
        <h2>Star Coffee</h2>
        
        <table>
        <tr>
            <td>
              <a href="index.php">Home</a>
            </td>
            <td>
            <a href="product.php?cate=3">equipment</a>  
            </td>
         </tr>

        <tr>
            <td>
            <a href="about.php">About Us</a>
            </td>
            <td>
            <a href="product.php?cate=4">allied</a>
            </td>
          </tr>
          
        <tr>
          <td>
           <a href="product.php?cate=1">coffee</a>
           </td>
           <td>
           <?php if(!isset($_SESSION['user'])):?>
                <a href="register.php">register</a>
                <?php endif;?>
           </td>
        </tr>

        <tr>
                
           <td>
           <a href="product.php?cate=2">tea</a>
           </td>
           <td>
           <?php if(!isset($_SESSION['user'])):?>
                <a href="login.php">Login</a>
              <?php endif;?>
           </td>
          </tr>
          
        </table>

        
      </div>

      <div class="copy">
        <span>All copy rights reserved ©</span>
        <p>Phone Number : +9620090825482  </p>
        <p>Email: starcoffee2020@gmail.com</p>
      </div>
      
      
      <div class="quick">
        <h2>Social Media</h2>
        
            
            <div class="social-link">
                 <a href="https://www.facebook.com/Ayahabualnadi/">
                <img width="40" height="30" class="iconq" src="https://assets.dryicons.com/uploads/icon/svg/8301/f3c9ba11-94f3-4aed-b133-3944c6fad1ee.svg">     <img sec="">
                </a>

                <a href="https://twitter.com/Ayah35880356">
                <img width="40" height="30" class="iconq" src="https://assets.dryicons.com/uploads/icon/svg/8813/bac82635-51e7-4132-abf6-9aba307e8e5d.svg">
                </a>


                
                    <a href="https://www.linkedin.com/feed/">
              <img width="40" height="30" class="iconq" src="https://assets.dryicons.com/uploads/icon/svg/8337/a347cd89-1662-4421-be90-58e5e8004eae.svg">
              </a>
            </div>
        
      </div>
    </footer>