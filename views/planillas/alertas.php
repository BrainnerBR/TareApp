<?php 
    if (!empty($alertas) && is_array($alertas)) {
        foreach($alertas as $key => $alerta) {
            foreach($alerta as $mensaje) {
?>
    <!-- Display each alert message -->
    <div class="alerta <?php echo htmlspecialchars($key); ?>">
        <?php echo htmlspecialchars($mensaje); ?>
    </div>
<?php
            } 
        } 
    }
?>
