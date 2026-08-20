    <nav class="navbar">
        <div>shopsense</div>
        <div>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="offers.php">Offers</a></li>
                <li><a href="help.php">Help</a></li>

                <?php if(isset($_SESSION['user_id'])):?>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="myOrders.php">My Orders</a></li>

                <?php else: ?>
                    <li><a href="../auth/login.php">Login</a></li>    
                <?php endif; ?>   
            </ul>
        </div>
    </nav>