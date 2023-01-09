<?php 
$logout = "http://localhost/moviestarmoviestar/logout.php";
$login = "http://localhost/moviestar/moviestar/auth.php";

// Verifica se o usuário está logado
$userDao = new UserDao($conn, $BASE_URL);

$userData = $userDao->verifyToken(false);
?>

<footer id="footer">
    <div id="social-container">
        <ul>
            <li>
                <a href="#"><i class="fab fa-facebook-square"></i></a>
            </li>
            <li>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </li>
            <li>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </li>
        </ul>
    </div>
    <div id="footer-links-container">
        <ul>
            <li><a href="<?= $BASE_URL ?>moviestar/newmovie.php">Adicionar filme</a></li>
            <?php if ($userData){ 
                echo "<li><a href=$logout>Sair</a></li>";
                } else {
                  echo  "<li><a href=$login>Entrar / Cadastrar</a></li>";
                }
            ?>
            
        </ul>
    </div>
    <p>&copy; 2022 Thomas Ricardo</p>
</footer>

  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha512-OvBgP9A2JBgiRad/mM36mkzXSXaJE9BEIENnVEmeZdITvwT09xnxLtT4twkCa8m/loMbPHsvPl0T8lRGVBwjlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>