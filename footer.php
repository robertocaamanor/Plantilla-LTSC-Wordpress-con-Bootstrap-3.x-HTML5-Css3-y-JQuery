<footer>
		<div class="container">
      <div class="row">
          <div class="col-md-4">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 01')) : endif; ?>
          </div>
          <div class="col-md-4">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 02')) : endif; ?>
          </div>
          <div class="col-md-4">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 03')) : endif; ?>
          </div>
      </div>
    </div>
    <div id="copyright">
      <div class="container">
        @ 2007 - 2015 LA TELE SEGÚN CAAMAÑO - CONCEPCIÓN, CHILE | ALGUNOS DERECHOS RESERVADOS | LAYOUT: ROBERTO CAAMAÑO | <span class="boton-top"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></span>
      </div>
    </div>
	</footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
</body>
</html>