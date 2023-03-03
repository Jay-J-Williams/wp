<?php 
	require_once 'tools.php';
    require_once 'post-validation.php';
    createHeadAndHeader();
?>

    <nav>
      <div>        
        <ul>
            <li><a href='index.php'>HOME</a>
        </ul>
      </div>
    </nav>

    <main>
        <article id='bookings_list'>
            <?php
                createBookingsList();
            ?>
        </article>
    </main>
    <?php
        createFooter();
    ?>

    <footer>
        <h3>Debug Area</h3>
        <?php 
            try {
                debugModule();
            } catch(Error $e) {
                echo "tools.php is unavailable";
            }
        ?>
    </footer>
    <script>CalculateTotal();</script>
  </body>
</html>